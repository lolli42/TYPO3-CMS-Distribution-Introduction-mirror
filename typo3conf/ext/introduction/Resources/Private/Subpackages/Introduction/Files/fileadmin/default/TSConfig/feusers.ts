# Add the following uncommented line, to the website's frontend users storage folder at Home > Frontend users and groups to include this file
# <INCLUDE_TYPOSCRIPT: source="FILE:fileadmin/default/TSConfig/feusers.ts">

mod.web_list {
	# limit the creation of new records in this sysFolder to these types
	allowedNewTables = fe_groups,fe_users,sys_note
}
