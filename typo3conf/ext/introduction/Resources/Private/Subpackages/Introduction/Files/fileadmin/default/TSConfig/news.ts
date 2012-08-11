# Add the following uncommented line, to the website's news storage folder at Home > News entries to include this file
# <INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/default/TSConfig/news.ts">

mod.web_list {
	# limit the creation of new records in this sysFolder to these types
	allowedNewTables = tt_news,tt_news_cat,sys_note
}

# This will open the news singleView page (id 23) when clicking 'preview' for a news record
tx_ttnews.singlePid = 23

TCEMAIN {
	# Clear cache of the News page after content of the News folder has changed
	clearCacheCmd = 23
	clearCache_pageSiblingChildren = 1
}
