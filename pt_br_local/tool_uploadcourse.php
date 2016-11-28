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
 * Strings for component 'tool_uploadcourse', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_uploadcourse
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'cannotdeletecoursenotexist' ]            = 'Não é possível apagar um disciplina que não existe';
$string[ 'cannotrenamecoursenotexist' ]            = 'Não é possível renomear um disciplina que não existe';
$string[ 'cannotrenameidnumberconflict' ]          = 'Não é possível renomear a disciplina, o número ID conflita com um disciplina existente';
$string[ 'cannotrenameshortnamealreadyinuse' ]     = 'Não é possível renomear a disciplina, o nome breve já está em uso';
$string[ 'canonlyrenameinupdatemode' ]             = 'Só é possível renomear um disciplina quando a atualização está habilitada';
$string[ 'canonlyresetcourseinupdatemode' ]        = 'Só é possível reconfigurar um disciplina quando no modo de atualização';
$string[ 'couldnotresolvecatgorybyid' ]            = 'Não foi possível resolver o curso pelo ID';
$string[ 'couldnotresolvecatgorybyidnumber' ]      = 'Não foi possível resolver o curso pelo número ID';
$string[ 'couldnotresolvecatgorybypath' ]          = 'Não foi possível resolver curso pelo caminho';
$string[ 'coursecreated' ]                         = 'Disciplina criado';
$string[ 'coursedeleted' ]                         = 'Disciplina apagado';
$string[ 'coursedeletionnotallowed' ]              = 'Deleção de disciplinas está permitida';
$string[ 'coursedoesnotexistandcreatenotallowed' ] = 'A disciplina não existe e a criação de disciplinas está proibida';
$string[ 'courseexistsanduploadnotallowed' ]       = 'A disciplina existe e a atualização de disciplina está proibida';
$string[ 'courseidnumberincremented' ]             = 'Número ID da disciplina incrementado {$a->from} -> {$a->to}';
$string[ 'courseprocess' ]                         = 'Processo da disciplina';
$string[ 'courserenamed' ]                         = 'Disciplina renomeado';
$string[ 'courserenamingnotallowed' ]              = 'Renomeação de disciplinas proibida';
$string[ 'coursereset' ]                           = 'Reconfiguração da disciplina';
$string[ 'courseresetnotallowed' ]                 = 'Reconfiguração de disciplina não permitida';
$string[ 'courserestored' ]                        = 'Disciplina restaurado';
$string[ 'coursescreated' ]                        = 'Disciplinas criados: {$a}';
$string[ 'coursesdeleted' ]                        = 'Disciplinas apagados: {$a}';
$string[ 'courseserrors' ]                         = 'Erros de disciplina: {$a}';
$string[ 'courseshortnamegenerated' ]              = 'Nome breve de disciplina gerado: {$a}';
$string[ 'courseshortnameincremented' ]            = 'No breve da disciplina incrementado {$a->from} -> {$a->to}';
$string[ 'coursestotal' ]                          = 'Total de disciplinas: {$a}';
$string[ 'coursesupdated' ]                        = 'Disciplinas atualizados: {$a}';
$string[ 'coursetemplatename' ]                    = 'Restaurar a partir desse disciplina depois de fazer o';
$string[ 'coursetemplatename_help' ]               = 'Insira o nome breve de um disciplina existente para usá-lo como modelo para todos as disciplinas.';
$string[ 'coursetorestorefromdoesnotexist' ]       = 'A disciplina escolhido como modelo não existe';
$string[ 'courseupdated' ]                         = 'Disciplina atualizado';
$string[ 'createnew' ]                             = 'Criar novas disciplinas apenas, saltar disciplinas existentes';
$string[ 'createorupdate' ]                        = 'Criar novas disciplinas ou atualizar disciplinas existentes';
$string[ 'defaultvalues' ]                         = 'Valores padrão para disciplinas';
$string[ 'errorwhiledeletingcourse' ]              = 'Erro ao apagar a disciplina';
$string[ 'errorwhilerestoringcourse' ]             = 'Erro ao restaurar a disciplina';
$string[ 'idnumberalreadyinuse' ]                  = 'Número ID já utilizado por um disciplina';
$string[ 'invalidcourseformat' ]                   = 'Formato de disciplina inválido';
$string[ 'mode_help' ]                             = 'Isso permite que você especifique se as disciplinas podem ser criados e/ou atualizados.';
$string[ 'pluginname' ]                            = 'Carregamento de disciplinas';
$string[ 'reset' ]                                 = 'Reconfigurar disciplina depois de carregar';
$string[ 'reset_help' ]                            = 'Se depois de criar/atualizar um disciplina será feito o "reset".';
$string[ 'shortnametemplate_help' ]                = 'O nome breve da disciplina é exibido na navegação. Você pode usar a sintaxe de modelos aqui (%f = fullname, %i = idnumber), ou inserir um valor individual que é incrementado.';
$string[ 'templatefile_help' ]                     = 'Selecionar um arquivo para usar com modelo para a criação de todos as disciplinas.';
$string[ 'updatemode_help' ]                       = 'Se você permitir que disciplinas sejam atualizados, você também tem que dizer qual ferramenta será utilizada para atualizar as disciplinas.';
$string[ 'updateonly' ]                            = 'Somente atualizar disciplina existentes';
$string[ 'uploadcourses' ]                         = 'Carregar disciplinas';
$string[ 'uploadcourses_help' ]
                                                   = 'As disciplinas podem ser criados a partir de um arquivo texto. O formato do arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* Cada registro é uma sequência de dados separados por vírgulas (ou outros delimitadores)
* A primeira linha contém uma lista de campos que define o formato do resto do arquivo
* Campos Obrigatórios são shortname, fullname, summary e category';
$string[ 'uploadcoursespreview' ]                  = 'Pré-visualização de disciplinas carregados';
$string[ 'uploadcoursesresult' ]                   = 'Resultado das disciplinas carregados';
