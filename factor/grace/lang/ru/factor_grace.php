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
 * Language strings.
 *
 * @package     factor_grace
 * @author      Peter Burnett <peterburnett@catalyst-au.net>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['pluginname'] = 'Льготный период';
$string['info'] = 'Разрешает вход в систему без учета других факторов в течение определенного периода времени.';
$string['settings:graceperiod'] = 'Льготный период';
$string['settings:graceperiod_help'] = 'Период времени, когда пользователи могут получить доступ к Moodle без сконфигурированных и включенных факторов';
$string['setupfactors'] = 'В настоящее время вы находитесь в льготном режиме, и по истечении льготного периода может не хватить настроенных факторов для входа в систему.
    Посетите {$a->url}, чтобы проверить свой статус аутентификации, и установите больше факторов аутентификации. Ваш льготный период истекает через {$a->time}.';
$string['preferences'] = 'Пользовательские настройки';
$string['summarycondition'] = 'в пределах льготного периода';

$string['privacy:metadata'] = 'плагин не хранит никаких личных данных';
