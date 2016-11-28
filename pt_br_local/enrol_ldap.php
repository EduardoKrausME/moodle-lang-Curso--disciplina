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
 * Strings for component 'enrol_ldap', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'assignrole' ]                            = 'Atribuindo papel \'{$a->role_shortname}\' ao usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'assignrolefailed' ]                      = 'Erro ao atribuir papel \'{$a->role_shortname}\' para o usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'autocreate' ]
                                                   = '<p>Se existirem inscrições para disciplinas que ainda não foram criados no Moodle, esses disciplinas podem ser criados automaticamente .</p><p> Caso você use a criação automática de disciplina, é recomendável que você remova as seguintes capacidades:
moodle/course:changeidnumber, moodle/course:changeshortname, moodle/course:changefullname e moodle/course:changesummary, dos papéis relevantes para previnir modificações dos quatro campos da disciplina especificados acima (ID number, nome curto, nome completo e sumário).</p>';
$string[ 'autocreation_settings' ]                 = 'Parâmetros de criação automática de disciplinas';
$string[ 'autoupdate_settings' ]                   = 'Configurações de atualização automática de disciplina';
$string[ 'cannotcreatecourse' ]                    = 'Não é possível criar disciplina: faltam dados necessários no registro do LDAP!';
$string[ 'cannotupdatecourse' ]                    = 'Não é possível atualizar a disciplina: faltam dados obrigatórios no registro do LDAP! idnumber da disciplina: \'{$a->idnumber}\'';
$string[ 'cannotupdatecourse_duplicateshortname' ] = 'Não é possível atualizar a disciplina: Nome curto duplicado. Pulando a disciplina com idnumber \'{$a->idnumber}\'...';
$string[ 'category' ]                              = 'Curso para disciplinas criados automaticamente';
$string[ 'category' ]                              = 'Curso para disciplinas criados automaticamente';
$string[ 'category_key' ]                          = 'Curso';
$string[ 'course_idnumber' ]                       = 'Mapa ao identificador único em LDAP, normalmente <em>cn</em> ou <em>uid</em>. É recomendável o bloqueio do valor quando é ativada a criação automática de disciplinas.';
$string[ 'coursenotexistskip' ]                    = 'Disciplina \'{$a}\', não exite e a criação automática está desabilitada, pulando';
$string[ 'course_settings' ]                       = 'Configuração da Inscrição em Disciplinas';
$string[ 'courseupdated' ]                         = 'Disciplina com o idnumber \'{$a->idnumber}\' foi atualizado com sucesso.';
$string[ 'courseupdateskipped' ]                   = 'Disciplina com idnumber \'{$a->idnumber}\' não requer atualização. Pulando...';
$string[ 'createcourseextid' ]                     = 'CRIAR Usuário inscrito em disciplina inexistente \'{$a->courseextid}\'';
$string[ 'createnotcourseextid' ]                  = 'Usuário inscrito em um disciplina não existente \'{$a->courseextid}\'';
$string[ 'creatingcourse' ]                        = 'Criando disciplina \'{$a}\'...';
$string[ 'duplicateshortname' ]                    = 'Criação de disciplinas falhou. Duplicar nome curto. Ignorando disciplina com idnumber \'{$a->idnumber}\' ...';
$string[ 'emptyenrolment' ]                        = 'Inscrição vazia para o papel \'{$a->role_shortname}\' na disciplina \'{$a->course_shortname}\'';
$string[ 'enroluser' ]                             = 'Inscrever usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'enroluserenable' ]                       = 'Habilitada inscrição para usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'extcourseidinvalid' ]                    = 'O ID de disciplina externo é inválido!';
$string[ 'extremovedsuspend' ]                     = 'Desabilitada inscrição para usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'extremovedsuspendnoroles' ]              = 'Desabilitada a inscrição e papéis removidos do usuário \'{$a->user_username}\' na disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'extremovedunenrol' ]                     = 'Desinscrever usuário \'{$a->user_username}\' da disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'objectclass' ]                           = 'objectClass usado para buscar disciplinas. Normalmente é \'posixGroup\'.';
$string[ 'pluginname_desc' ]
                                                   = '<p>Você pode usar um server LDAP para controlar as inscrições. Se presume que o ramo LDAP contenha grupos mapeados em relação as disciplinas e que cada um destes grupos/disciplinas terá itens que identificam membros mapeados em relação aos estudantes.</p>
<p>Se presume que as disciplinas sejam definidos como grupos em LDAP, com cada grupo contendo campos múltiplos que identificam os membros (<em>member</em> ou <em>memberUid</em>) e que contém uma identificação unívoca do usuário </p>';
$string[ 'role_mapping' ]                          = '<p> Para cada papel que você deseja atribuir a partir do LDAP, você precisa especificar a lista de contextos onde os papéis dos grupos da disciplina estão localizados. Separe contextos diferentes,   com \';\'. </ P> Você também precisa especificar o atributo que seu servidor LDAP utiliza para manter os membros de um grupo. Geralmente \'membro\' ou \'memberUid\' </ p>';
$string[ 'synccourserole' ]                        = '== Sincronizando a disciplina \'{$a->idnumber}\' para o papel \'{$a->role_shortname}\'';
$string[ 'template' ]                              = 'Opcional: disciplinas criados automaticamente podem copiar as suas configurações a partir de um modelo de disciplina';
$string[ 'unassignrole' ]                          = 'Remover atribuição\'{$a->role_shortname}\' de usuário \'{$a->user_username}\' da disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
$string[ 'unassignrolefailed' ]                    = 'Falha ao definir atribuição \'{$a->role_shortname}\' para usuário \'{$a->user_username}\' para a disciplina \'{$a->course_shortname}\' (id {$a->course_id})';
