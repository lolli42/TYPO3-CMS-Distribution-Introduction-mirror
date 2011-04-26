<?php
class Typo3ConvertVersionTask extends Task {
	const PREFIX = 'TYPO3_';

	private $value = null;
	private $returnProperty = null;
	private $failIfEmpty = null;

	public function setValue($value) {
		$this->value = $value;
	}

	public function setReturnProperty($returnProperty) {
		$this->returnProperty = $returnProperty;
	}

	public function setFailIfEmpty($failIfEmpty) {
		$this->failIfEmpty = (bool) $failIfEmpty;
	}

	public function main() {
		if ($this->value === null) {
			throw new BuildException('No value given.', $this->location);
		}

		$result = null;

		// Branch: 4.5
		if (preg_match('/^(\d+)\.(\d+)$/', $this->value, $matches)) {
			$result = self::PREFIX . $matches[1] . '-' . $matches[2];
		// Version 4.5.2
		} elseif (preg_match('/^(\d+)\.(\d+)\.(\d+)$/', $this->value, $matches)) {
			$result = self::PREFIX . $matches[1] . '-' . $matches[2] . '-' . $matches[3];
		} elseif ($this->failIfEmpty) {
			throw new BuildException('TYPO3 branch/version could not be extracted from "' . $this->value . '".', $this->location);
		}

		if ($this->returnProperty !== null && $result !== null) {
			$this->project->setProperty($this->returnProperty, $result);
		}
	} 
}
?>