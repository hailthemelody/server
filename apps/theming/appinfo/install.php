<?php
/**
 * @copyright Copyright (c) 2016 Bjoern Schiessle <bjoern@schiessle.org>
 *
 * @license GNU AGPL version 3 or any later version
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */

if(!file_exists(\OC::$SERVERROOT . '/themes/theming-app')) {
	mkdir(\OC::$SERVERROOT . '/themes/theming-app');
}

if(!file_exists(\OC::$SERVERROOT . '/themes/theming-app/core')) {
	mkdir(\OC::$SERVERROOT . '/themes/theming-app/core');
}

if(!file_exists(\OC::$SERVERROOT . '/themes/theming-app/core/img')) {
	mkdir(\OC::$SERVERROOT . '/themes/theming-app/core/img');
}

if(!file_exists(\OC::$SERVERROOT . '/themes/theming-app/core/css')) {
	mkdir(\OC::$SERVERROOT . '/themes/theming-app/core/css');
}

if(!file_exists(\OC::$SERVERROOT . '/themes/theming-app/core/img/logo-icon.svg')) {
	copy(\OC::$SERVERROOT . '/core/img/logo-icon.svg' ,\OC::$SERVERROOT . '/themes/theming-app/core/img/logo-icon.svg');
}

\OC::$server->getConfig()->setSystemValue('theme', 'theming-app');
