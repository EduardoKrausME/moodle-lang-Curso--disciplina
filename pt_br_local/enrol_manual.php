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
 * Strings for component 'enrol_manual', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_manual
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'enrolledincourserole' ] = 'Inscrito na disciplina "{$a->course}" como "{$a->role}"';
$string[ 'expiredaction_help' ]   = 'Escolha a acção que determina quando a inscrição do usuário expira. Por favor, note que alguns dados e configurações do usuário são removidos naturalmente durante a desinscrição na disciplina.';
$string[ 'manual:unenrol' ]       = 'Desinscrever usuários da disciplina';
$string[ 'manual:unenrolself' ]   = 'Cancelar a própria inscrição na disciplina';
$string[ 'pluginname_desc' ]      = 'O plugin de matrículas manuais permite que os usuários sejam inscritos manualmente através de um link nas configurações de administração da disciplina, por um usuário com permissões adequadas, como um professor. O plugin deve estar habilitado normalmente, uma vez que certos plugins de inscrição, tais como a auto-inscrição, dependem dele.';
$string[ 'status_desc' ]          = 'Permitir acesso a disciplina por usuários inscritos internamente. Isto deve ser mantido habilitado na maioria dos casos.';
$string[ 'status_help' ]          = 'Esta configuração determina se usuários podem ser inscritos manualmente, através de um link na configuração da administração de disciplinas, através de um usuário com permissões apropriadas como um professor.';
$string[ 'unenrolselfconfirm' ]   = 'Você deseja realmente cancelar sua inscrição na disciplina "{$a}"?';
$string[ 'unenroluser' ]          = 'Você tem certeza que deseja desinscrever "{$a->user}" da disciplina "{$a->course}"?';
$string[ 'wscannotenrol' ]        = 'A instância do Plugin não permite a inscrição manual de um usuário na disciplina  id = {$a->courseid}';
$string[ 'wsnoinstance' ]         = 'A instância do Plugin para inscrição manual não existe ou foi desativada para a disciplina (id = {$a->courseid})';
$string[ 'wsusercannotassign' ]   = 'Você não tem permissão para atribuir este papel  ({$a->roleid}) para este usuário  ({$a->userid}) neste disciplina ({$a->courseid}).';
