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
 * Strings for component 'enrol_imsenterprise', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_imsenterprise
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'allowunenrol_desc' ]           = 'Se habilitado, inscrições na disciplina serão removidas quando especificado nos dados do Enterprise.';
$string[ 'coursesettings' ]              = 'Opções de dados da disciplina';
$string[ 'createnewcategories' ]         = 'Criar novos cursos de disciplinas (ocultas) se não forem encontradas no Moodle';
$string[ 'createnewcategories' ]         = 'Criar novos cursos de disciplinas (ocultas) se não forem encontradas no Moodle';
$string[ 'createnewcategories_desc' ]
                                         = '<p>Se o elemento &lt;org&gt;&lt;orgunit&gt; está presente na informação de entrada de um disciplina, seu conteúdo será usado para especificar um curso quando a disciplina for criado.</p>

<p>O plugin NÃO irá re-categorizar disciplinas existentes.</p>

<p>Se não existe um curso com o nome desejado, então um curso OCULTA será criada.</p>';
$string[ 'createnewcategories_desc' ]
                                         = '<p>Se o elemento &lt;org&gt;&lt;orgunit&gt; está presente na informação de entrada de um disciplina, seu conteúdo será usado para especificar um curso quando a disciplina for criado.</p>

<p>O plugin NÃO irá re-categorizar disciplinas existentes.</p>

<p>Se não existe um curso com o nome desejado, então um curso OCULTA será criada.</p>';
$string[ 'createnewcourses' ]            = 'Criar novas disciplinas (ocultos) se não forem encontrados no Moodle';
$string[ 'createnewcourses_desc' ]
                                         = '<p>O plugin de inscrição IMS Enterprise pode criar novas disciplinas para qualquer um que ele encontrar nos dados do IMS, mas não no banco de dados do Moodle, se essa configuração estiver ativada</p>

<p>Primeiro as disciplinas são pesquisados pelo seu número de id - um campo alfa-numérico na tabela de disciplinas do Moodle, que pode especificar o código usado para identificar a disciplina no Sistema de Informações do Estudante (por exemplo). Se isso não for encontrado, na tabela de disciplinas procura-se por "descrição curta", que no Moodle é o nome breve de disciplinas. (Em alguns sistemas esses dois campos podem ser idênticos). Apenas quando essa procura falhar, o plugin cria novas disciplinas.</p>

<p>Quaisquer disciplinas recém-gerados são OCULTOS quando criados. Isso para prevenir a possibilidade de estudantes vagando em disciplinas completamente vazios dos quais o professor possa não estar ciente.</p>';
$string[ 'settingfullname' ]             = 'A descrição do tag IMS para o nome da disciplina completo';
$string[ 'settingfullnamedescription' ]  = 'O nome completo é um campo de disciplina obrigatório para que você tem que definir a tag descrição selecionada em seu arquivo IMS Enterprise';
$string[ 'settingshortname' ]            = 'Descrição do tag IMS para o nome curto da disciplina';
$string[ 'settingshortnamedescription' ] = 'O nome curto da disciplina é um campo obrigatório, portanto você precisa definir a descrição do tag no seu arquvo IMS enterprise';
$string[ 'settingsummary' ]              = 'Tag de descição IMS para o sumário da disciplina';
$string[ 'settingsummarydescription' ]   = 'É um campo opcional, selecione \'Deixar vazio\' se você não quiser especificar um sumário da disciplina.';
$string[ 'truncatecoursecodes' ]         = 'Reduzir códigos de disciplina para este tamanho';
$string[ 'truncatecoursecodes_desc' ]    = '<p>Em algumas situações você pode ter códigos de disciplina que deseje reduzir para um tamanho específico antes de processar. Se assim desejar, insira o número de caracteres nesse box. Caso contrário, deixe esse box <strong>em branco</strong> e nenhuma redução ocorrerá.</p>';
