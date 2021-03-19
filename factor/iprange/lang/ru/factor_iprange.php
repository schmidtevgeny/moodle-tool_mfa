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
 * @package     factor_iprange
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['allowedipsempty'] = 'Никто не пройдет этот фактор! Вы можете добавить свой собственный IP-адрес (<i>{$a->ip}</i>)';
$string['allowedipshasmyip'] = 'Ваш IP (<i>{$a->ip}</i>) находится в списке, и Вы пройдете этот фактор.';
$string['allowedipshasntmyip'] = 'Ваш IP (<i>{$a->ip}</i>) не находится в списке, и Вы не пройдете этот фактор.';
$string['pluginname'] = 'Фактор IP';
$string['privacy:metadata'] = 'не хранит персональных данных';
$string['settings:safeips'] = 'Безопасные диапазоны IP-адресов';
$string['settings:safeips_help'] = 'Введите список IP-адресов или подсетей, которые будут учитываться как доверенные в факторе. Если пустой, никто не пройдет этот фактор. {$a->info} {$a->syntax}';
$string['summarycondition'] = 'находится в доверенной сети';
