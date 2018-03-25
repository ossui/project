<?php
/* @(#) $Id: config.php,v 1.10 2008/03/04 14:26:41 dcid Exp $ 
*/

/*
 * This program is a free software; you can redistribute it
 * and/or modify it under the terms of the GNU General Public
 * License (version 3) as published by the FSF - Free Software
 * Foundation
 */
       


/* OS PHP init */
if (!function_exists('os_handle_start'))
{
    echo "<b class='red'>You are not allowed direct access.</b><br />\n";
    return(1);
}

if ($_GET['run']) {
	exec('/var/www/html/ossui/lib/restart.sh restart');
}
?>

<h2>Settings</h2>
<br />
<font size="2">
Select a setting below.
</font>

<br />

<a href="?run=true">Restart OSSEC</a>

