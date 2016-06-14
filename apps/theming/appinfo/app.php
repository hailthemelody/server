<?php
/**
 * @author Björn Schießle <bjoern@schiessle.org>
 *
 * @copyright Copyright (c) 2016, Bjoern Schiessle
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the 
 * License, or (at your opinion) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

\OCP\App::registerAdmin('theming', 'settings/settings-admin');

$listener = new \OCA\Theming\Init(\OC::$server->getConfig());

\OC::$server->getEventDispatcher()->addListener(
	\OCP\App\ManagerEvent::EVENT_APP_ENABLE,
	[$listener, 'prepareThemeFolder']
);

\OC::$server->getEventDispatcher()->addListener(
	\OCP\App\ManagerEvent::EVENT_APP_DISABLE,
	[$listener, 'disableTheme']);
