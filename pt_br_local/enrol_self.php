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
 * Strings for component 'enrol_self', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_self
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'expiredaction_help' ]            = 'Escolha que determina quando a matrícula do usuário expira. Por favor, note que alguns dados e configurações do usuário são removidos naturalmente durante a desinscrição na disciplina.';
$string[ 'expirymessageenrolledbody' ]
                                           = 'Caro {$a->user},

Esta é uma notificação de que sua inscrição na disciplina &quot;{$a->course}&quot; expira em {$a->timeend}.

Se precisar de ajuda, entre em contato {$a->enroller}.';
$string[ 'expirymessageenrollerbody' ]
                                           = 'Auto-inscrição na disciplina \'{$a->course} &quot; irá expirar en {$a->threshold} para os seguintes usuários:

{$a->users}

Para estender a sua inscrição, acesse {$a->extendurl}';
$string[ 'groupkey_help' ]
                                           = 'Além de restringir acesso a disciplina apenas para aqueles que conhecem a chave, o uso de uma chave de inscrição de grupo faz com que os usuários sejam automaticamente incluídos ao grupo quando eles se inscrevem na disciplina.

Nota: Uma chave de inscrição para a disciplina deve ser especificada nas definições de auto de inscrição, bem como chaves de inscrição em grupo as configurações do grupo.';
$string[ 'longtimenosee_help' ]            = 'Caso um usuário não tenha acessado um disciplina por um longo período de tempo, então eles terão sua inscrição automaticamente cancelada. Este parâmetro especifica o limite de tempo';
$string[ 'newenrols_desc' ]                = 'Permitir que os usuários se inscrevam em novas disciplinas pro padrão';
$string[ 'newenrols_help' ]                = 'Esta definição determina se o usuário pode se inscrever em disciplina.';
$string[ 'password_help' ]
                                           = 'Uma chave de inscrição habilita para que o acesso a disciplina seja restrito apenas para quem possua a chave.

Caso este campo esteja vazio, qualquer usuário poderá se inscrever na disciplina.

Caso uma chave de inscrição seja especificada, em qualquer tentativa de inscrição será solicitada a informação da chave. Note que o usuário apenas precisa informar a chave de inscrição apenas UMA VEZ, no momento em qyue realizam a inscrição.';
$string[ 'pluginname_desc' ]               = 'O plugin de auto inscrição permite que usuários escolham em quais disciplinas queiram participar. As disciplinas devem ser protegidos por umachave de inscrição. Internamente a inscrição é realizada através do plugin de inscrição manual o qual deve ser habilitado na mesma disciplina.';
$string[ 'requirepassword_desc' ]          = 'Requer chave de inscrição em novas disciplinas e previne remoção de chaves de inscrição de disciplinas existentes.';
$string[ 'self:unenrol' ]                  = 'Desinscrever usuários da disciplina';
$string[ 'self:unenrolself' ]              = 'Desinscrever-se da disciplina';
$string[ 'sendcoursewelcomemessage' ]      = 'Enviar mensagem de bem-vindos a disciplina';
$string[ 'sendcoursewelcomemessage_help' ] = 'Se habilitato os usuários recebem uma mensagem de boas vindas por email quando fazem a inscrição em um disciplina.';
$string[ 'status_desc' ]                   = 'Ativar método de auto-inscrição em novas disciplinas';
$string[ 'unenrolselfconfirm' ]            = 'Você deseja realmente retirar sua matrícula da disciplina "{$a}"?';
$string[ 'unenroluser' ]                   = 'Deseja mesmo retirar a inscrição de "{$a->user}" da disciplina "{$a->course}" ?';
$string[ 'welcometocourse' ]               = 'Bem-vindo a disciplina {$a}';
$string[ 'welcometocoursetext' ]
                                           = 'Bem vindo a disciplina {$a->coursename}!

A primeira coisa a fazer é editar o seu Perfil de Usuário da disciplina para que possamos saber mais sobre você:

{$a->profileurl}';
