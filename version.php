<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * News version file
 *
 * @package    blocks
 * @subpackage news
 * @copyright 2011 The Open University
 * @author Jon Sharp <jonathans@catalyst-eu.net>
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$plugin->version =  2012033000;
// Moodle version - copy from $version in the top-level version.php file.
$plugin->requires = 2011033003.00;
$plugin->cron = 3600; // Set min time between cron executions to 3600 secs (1 hr)