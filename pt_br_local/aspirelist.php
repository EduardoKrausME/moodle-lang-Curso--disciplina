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
 * Strings for component 'aspirelist', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   aspirelist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'aspirelist' ]             = 'Lista de Redisciplinas:{$a}';
$string[ 'aspirelist:addinstance' ] = 'Adicionar uma nova lista de redisciplinas';
$string[ 'aspirelistname' ]         = 'Nome da lista de redisciplinas';
$string[ 'aspirelist:view' ]        = 'Ver o conteúdo da lista de redisciplinas';
$string[ 'cachedef_listdata' ]      = 'Lista de dados de redisciplinas armazenados em cache obtido a partir Talis Aspire';
$string[ 'configauthorsinconfig' ]  = 'As descrições do item de redisciplina no módulo de formulário de configuração deveriam incluir os nomes dos autores? Por padrão somente o título do item e o formato do redisciplina estão incluídos para economizar espaço no formulário.';
$string[ 'configcoderegex' ]        = 'Opcional. Se estiver usando o número de ID disciplina como o seu código fonte, esta é uma expressão regular (incluindo delimitadores) coincidindo com o código parte Talis Aspire dele. Se nenhum regex é fornecido aqui será assumido que todo o número de identificação é o código Aspire.';
$string[ 'configcodesource' ]       = 'Selecione a fonte de seus códigos de listas Talis Aspire. Se você optar por usar uma tabela de banco de dados personalizado, você também deve especificar as tabelas, colunas e detalhes dos atributos da disciplina nos campos abaixo. Se nenhum código for encontrado na tabela de costume para uma determinada disciplina, o número da disciplina ID será usado como um retorno, independentemente do que é especificado aqui.';
$string[ 'configcodetable' ]        = 'Opcional. O nome de uma tabela personalizada no banco de dados do Moodle contendo os códigos da lista Talis Aspire mapeadas contra um atributo disciplina Moodle.';
$string[ 'configcourseattribute' ]  = 'Opcional. O atributo de disciplina exclusivo que é mapeado contra seus códigos de Talis Aspire na tabela custom (normalmente id, idnumber ou nome breve).';
$string[ 'configrequiremodintro' ]  = 'Ative esta opção se você deseja forçar os usuários a digitar uma descrição para cada lista de redisciplinas.';
$string[ 'contentheader' ]          = 'Selecione a lista de redisciplinas';
$string[ 'courseattribute' ]        = 'Características da disciplina';
$string[ 'selectresources' ]        = 'Selecione os redisciplinas do "{$a}"';
$string[ 'showhide' ]               = 'Mostrar/Esconder lista de redisciplinas';
