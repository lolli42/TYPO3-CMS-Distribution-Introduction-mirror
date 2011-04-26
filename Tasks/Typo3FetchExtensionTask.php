<?php
class Typo3FetchExtensionTask extends Task {
	private $name = null;
	private $version = null;
	private $extDir = null;
	private $returnProperty = null;

	public function setExtDir($extDir) {
		$extDir = rtrim($extDir, '/') . '/';
		if (!is_dir($extDir)) {
			throw new BuildException('Extension directory "' . $extDir . '" does not exist.', $this->location);
		}
		$this->extDir = $extDir;
	}

	public function setVersion($version) {
		if (!preg_match('/^(\d+)\.(\d+)\.(\d+)$/', $version)) {
			throw new BuildException('Version "' . $version . '" does not seem to be correct.', $this->location);
		}
		$this->version = $version;
	}

	public function setReturnProperty($returnProperty) {
		$this->returnProperty = $returnProperty;
	}

	public function main() {
		if ($this->name === null) {
			throw new BuildException('No name given.', $this->location);
		}
		if ($this->version === null) {
			throw new BuildException('No version given.', $this->location);
		}
		if ($this->extDir === null) {
			throw new BuildException('No extension directory given.', $this->location);
		}

		$request = new HTTP_Request2($this->getTerUrl());
		$response =  $request->send();
		if ($response->getStatus() != 200) {
			throw new BuildException("Request unsuccessfull. Response from server: " . $response->getStatus() . " " . $response->getReasonPhrase());
		}

		$this->installExtension(
			$this->extractExtension($response->getBody())
		);

		if ($this->returnProperty !== null && $result !== null) {
			$this->project->setProperty($this->returnProperty, $result);
		}
	}

	protected function getTerUrl() {
		return 'http://typo3.org/fileadmin/ter/' .
			$this->name{0} . '/' . $this->name{1} . '/' .
			$this->name . '_' . $this->version . '.t3x';
	}

	protected function installExtension(array $data) {
		// @todo Connect with t3xtools (http://forge.typo3.org/projects/extension-t3xtools)
	}

	protected function extractExtension($data) {
		$parts = explode(':', $data, 3);
		if ($parts[1] == 'gzcompress') {
			if (function_exists('gzuncompress')) {
				$parts[2] = gzuncompress($parts[2]);
			} else {
				throw new BuildException('Cannot extract by using gzuncompress().', $this->location);
			}
		}
		if (md5($parts[2]) == $parts[0]) {
			$output = unserialize($parts[2]);
			if (is_array($output)) {
				return array($output, '');
			} else {
				throw new BuildException('Unserialized data seems to be invalid.', $this->location);
			}
		} else {
			throw new BuildException('Checksum mismatch.', $this->location);
		}
	}
}
?>