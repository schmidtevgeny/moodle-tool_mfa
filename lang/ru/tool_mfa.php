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
//
/**
 * Strings for component 'tool_mfa', language 'en'.
 *
 * @package     tool_mfa
 * @author      Mikhail Golenkov <golenkovm@gmail.com>
 * @copyright   Catalyst IT
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['achievedweight'] = 'Достигнутая достоверность';
$string['areyousure'] = 'Ты уверен, что хочешь отменить фактор?';
$string['combination'] = 'Комбинация';
$string['created'] = 'Создан';
$string['createdfromip'] = 'Создан с IP';
$string['debugmode:heading'] = 'Режим отладки';
$string['debugmode:currentweight'] = 'Текуший вес: {$a}';
$string['devicename'] = 'Устройство';
$string['enablefactor'] = 'Включить фактор';
$string['error:directaccess'] = 'Эта страница не должна быть доступна напрямую.';
$string['error:factornotfound'] = 'Фактор \'{$a}\' не найден';
$string['error:wrongfactorid'] = 'Идентификатор фактора \'{$a}\' неверен';
$string['error:actionnotfound'] = 'Действие \'{$a}\' не поддерживается';
$string['error:setupfactor'] = 'Не может настроить фактор';
$string['error:revoke'] = 'Не может отменить фактор';
$string['error:notenoughfactors'] = 'Невозможно подтвердить подлинность';
$string['error:reauth'] = 'Мы не смогли подтвердить вашу личность в достаточной степени, чтобы соответствовать политике безопасности аутентификации этих сайтов. Если вы пропустили какие-либо факторы, вы можете попробовать еще раз, или, пожалуйста, свяжитесь с администратором вашего сайта.';
$string['error:support'] = 'Если вы все еще не можете войти в систему или считаете, что видите это по ошибке, пожалуйста, отправьте электронное письмо на следующий адрес для получения поддержки:';
$string['error:supportpage'] = 'Нажмите здесь, чтобы перейти на страницу общей поддержки.';
$string['error:home'] = 'Нажмите здесь, чтобы вернуться на домашнюю страницу.';
$string['error:factornotenabled'] = 'MFA-фактор \'{$a}\' не включен';
$string['email:subject'] = 'Не удается войти в систему {$a}';
$string['event:userpassedmfa'] = 'Проверка пройдена';
$string['event:userrevokedfactor'] = 'Отмена фактора';
$string['event:usersetupfactor'] = 'Установка фактора';
$string['factor'] = 'Фактор';
$string['fallback'] = 'Фактор запрета';
$string['fallback_info'] = 'Этот фактор является запасным, если не настроены никакие другие факторы. Этот фактор всегда будет неудачным.';
$string['gotourl'] = 'Перейдите на свой оригинальный URL-адрес: ';
$string['inputrequired'] = 'Пользовательский ввод';
$string['lastverified'] = 'Крайняя проверка';
$string['mfa'] = 'MFA';
$string['mfasettings'] = 'Управление MFA';
$string['na'] = 'n/a';
$string['overall'] = 'В целом';
$string['pluginname'] = 'Многофакторная аудентификация';
$string['preferences:header'] = 'Настройка многофакторной аудентификация';
$string['preferences:availablefactors'] = 'Доступные факторы';
$string['preferences:activefactors'] = 'Активные факторы';
$string['privacy:metadata:tool_mfa'] = 'Данные с настроенными факторами MFA';
$string['privacy:metadata:tool_mfa:id'] = 'ID записи';
$string['privacy:metadata:tool_mfa:userid'] = 'Идентификатор пользователя, к которому принадлежит';
$string['privacy:metadata:tool_mfa:factor'] = 'Тип фактора';
$string['privacy:metadata:tool_mfa:secret'] = 'Любые секретные данные для фактора';
$string['privacy:metadata:tool_mfa:label'] = 'ярлык для фактора, например, устройство или электронная почта';
$string['privacy:metadata:tool_mfa:timecreated'] = 'Время, когда был установлен экземпляр фактора';
$string['privacy:metadata:tool_mfa:createdfromip'] = 'IP-адрес, с которого был установлен этот фактор';
$string['privacy:metadata:tool_mfa:timemodified'] = 'Время, когда фактор был в последний раз модифицирован';
$string['privacy:metadata:tool_mfa:lastverified'] = 'Время, когда фактор был в последний раз задействован';
$string['revoke'] = 'Удалить';
$string['revokefactor'] = 'Удалить фактор';
$string['settings:enabled'] = 'Включить плагин MFA';
$string['settings:enabled_help'] = '';
$string['settings:combinations'] = 'Краткое описание хороших условий для входа в систему';
$string['settings:general'] = 'Общие настройки MFA';
$string['settings:debugmode'] = 'Включить режим отладки';
$string['settings:debugmode_help'] = 'В режиме отладки на страницах администрирования MFA будет отображаться небольшой баннер с уведомлениями, а также страница настроек пользователя с информацией о факторах, включенных в текущий момент.';
$string['settings:enablefactor'] = 'Включить фактор';
$string['settings:enablefactor_help'] = 'Отметьте этот флаг, чтобы позволить использовать фактор при авторизации.';
$string['settings:lockout'] = 'Порог блокировки';
$string['settings:lockout_help'] = 'Количество попыток пользователя ответить на входные факторы до того, как он больше не сможет войти в систему.';
$string['settings:weight'] = 'Вес фактора';
$string['settings:weight_help'] = 'Вес этого фактора, если он пройдет. Для входа в систему пользователю необходимо не менее 100 баллов.';
$string['setup'] = 'Настройка';
$string['setuprequired'] = 'Пользовательские настройки';
$string['setupfactor'] = 'Настройки фактора';
$string['state:pass'] = 'Пройдена';
$string['state:fail'] = 'Отказ';
$string['state:unknown'] = 'Неизвестный';
$string['state:neutral'] = 'Нейтральный';
$string['totalweight'] = 'Общий вес';
$string['weight'] = 'Вес';
$string['mfareports'] = 'Отчеты MFA';
$string['factorreport'] = 'Отчет о всех факторах';
$string['lockoutnotification'] = 'У вас остались {$a} попытки проверки.';
$string['mfa:mfaaccess'] = 'Взаимодействовать с MFA';
$string['factorsetup'] = 'Фактор \'{$a}\' удачно установлен.';
$string['factorrevoked'] = 'Фактор \'{$a}\' удачно отозван.';
$string['connector'] = ' AND ';
$string['pending'] = 'В ожидании решения';
$string['redirecterrordetected'] = 'Обнаружен неподдерживаемый редирект, выполнение скрипта завершено. Ошибка перенаправления произошла между MFA и {$a}.';
