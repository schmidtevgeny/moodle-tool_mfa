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
 * @package     factor_totp
 * @subpackage  tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$string['action:revoke'] = 'Revoke TOTP Factor';
$string['devicename'] = 'Метка устройства';
$string['devicenameexample'] = 'например "Work iPhone 11"';
$string['devicename_help'] = 'На этом устройстве установлено приложение аутентификатора. Вы можете настроить несколько устройств, так что этот ярлык помогает отслеживать, какие из них используются. Вы должны настроить каждое устройство с их собственным уникальным кодом, чтобы они могли быть отозваны отдельно.';
$string['error:wrongverification'] = 'Неверный проверочный код';
$string['info'] = '<p>Используйте любое приложение TOTP Authenticator, чтобы получить проверочный код на вашем телефоне, даже если он находится в автономном режиме.</p>
<p>например, Google Authenticator для <a href="https://itunes.apple.com/us/app/google-authenticator/id388497605?mt=8" target="_blank">iPhone</a> или <a href="https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2" target="_blank">Android</a></p>';
$string['loginsubmit'] = 'Проверочный код';
$string['loginskip'] = 'У меня нет моего устройства';
$string['pluginname'] = 'Приложение авторизации';
$string['privacy:metadata'] = 'плагин не хранит никаких личных данных';
$string['settings:secretlength'] = 'длина секретного ключа TOTP';
$string['settings:secretlength_help'] = 'Сгенерированная длина строки секретного ключа TOTP';
$string['setupfactor'] = 'Настройка TOTP';
$string['setupfactor:scan'] = 'Введите секретный ключ или отсканируйте QR-код';
$string['setupfactor:key'] = 'Секретный ключ: ';
$string['verificationcode'] = 'Введите 6 цифр проверочного кода';
$string['verificationcode_help'] = 'Откройте ваше приложение Authenticator, например Google Authenticator, и найдите 6-значный код, соответствующий этому сайту и имени пользователя.';
$string['summarycondition'] = 'использование приложения TOTP';
$string['factorsetup'] = 'Привязать';
