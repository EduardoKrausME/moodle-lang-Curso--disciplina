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
 * Strings for component 'enrol_flatfile', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_flatfile
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'expiredaction_help' ] = 'Escolha a acção para levar a cabo quando a matrícula do usuário expira. Por favor, note que alguns dados e configurações do usuário são removidos naturalmente durante a desinscrição na disciplina.';
$string[ 'flatfile:unenrol' ]   = 'Desinscrever usuários da disciplina manualmente';
$string[ 'pluginname_desc' ]
                                = 'Este método irá verificar repetidamente e processar um arquivo de texto especialmente formatado no local que você especificar. O arquivo é do tipo separado por vírgula e deverá ter quatro ou seis campos por linha:

operação, nome curto do papel, idnumber do usuário, idnumber da disciplina  [, horário de inicio, horário de encerramento]

onde:

* operação  = add | del
* função = estudante | professor | professor-editor
* número de itendificação (usuário) = idnumber na tabela de usuário NB não Id
 * número de identificação (disciplina) = idnumber na tabela de disciplinas NB não Id
* horário de inicio =  hora de início (em segundos desde a época)
* horário de encerramento =  tempo final (em segundos desde a epoca) - opcional </ pre>

Poderia ser algo assim:

<pre class="informationbox">
add, student, 5, CF101
add, teacher, 6, CF101
add. editing-teacher, 7, CF101
del, student, 8, CF101
del, student, 17, CF101
add, student, 21, CF101, 1091115000, 1091215000
</ pre>';
