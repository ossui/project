<?php
/* @(#) $Id: help.php,v 1.10 2008/03/04 14:26:41 dcid Exp $ */

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
?>

<h2>About</h2>
<br />
<font size="2">
OSSUI, or Open Source Security User Interface, is an open source web-based implementation of the OSSEC host-based instrusion detection system (HIDS). It is freely avaiable do download and modify under the GNU General Public License version 3 (GPLv3). The OSSUI Project has two major goals: to increase cybersecurity awareness and to provide free and easy-to-use security software to anyone who needs it.  <br /><br />
<br /><br />
      
OSSUI is a free software; you can redistribute it and/or modify it under the terms of the GNU General Public License (version 3) as published by the FSF - Free Software Foundation. 
<br /><br />
OSSEC is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
</font>
