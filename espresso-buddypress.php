<?php
/*
Plugin Name: Event Espresso - BuddyPress Integration
Plugin URI: http://eventespresso.com/
Description: BuddyPress integration addon for Event Espresso. <a href="admin.php?page=support">Support</a>

Version: 1.0

Author: Seth Shoultes
Author URI: http://www.eventespresso.com

Copyright (c) 2008-2012 Seth Shoultes  All Rights Reserved.

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA 02111-1307 USA
*/

/* Only load code that needs BuddyPress to run once BP is loaded and initialized. */
function espresso_bp_init() {
	require_once("bp_event_class.php");
	require_once("bp_event_template_class.php");
	require_once("bp_functions.php");
}
add_action( 'bp_include', 'espresso_bp_init' );