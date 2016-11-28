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
 * Strings for component 'group', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   group
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'enrolmentkey_help' ]
                                  = 'O uso de um código de inscrição em grupo habilita o usuário que o conheça a ter acesso a disciplina, ao mesmo tempo que o inscreve automaticamente no grupo correspondente.

Para esta opção ter efeito é necessário habilitar o \'método de autoinscrição\' na disciplina e nele selecionar a opção \'Usar códigos de inscrição de grupo\' e, também, definir um \'código de inscrição\' para a disciplina em si (este código habilita acesso a disciplina, sem inscrever o usuário em grupos). Apesar de serem definidos dois códigos de inscrição distintos, o usuário precisa conhecer apenas um deles, conforme a intenção do professor (apenas inscrever na disciplina ou simultaneamente inscrevê-lo num grupo).';
$string[ 'grouping_help' ]        = 'O agrupamento é uma coleção de grupos dentro de um disciplina. Se um agrupamento é selecionado, os alunos associados aos grupos desse agrupamento poderão trabalhar juntos.';
$string[ 'groupingnameexists' ]   = 'O nome do agrupamento \'{$a}\' já existe nesse disciplina, por favor escolha outro.';
$string[ 'groupingsection_help' ] = 'Um agrupamento é uma coleção de grupos em um disciplina. Se um agrupamento for selecionado aqui, somente alunos membros de grupos que fazem parte desse agrupamento terão acesso a esse tópico.';
$string[ 'groupmodeforce_help' ]  = 'Se o modo de grupo é forçado, então o modo de grupo da disciplina é aplicado a todas as atividades da disciplina. Configurações do modo de grupo de cada atividade serão ignoradas.';
$string[ 'groupmode_help' ]
                                  = 'Esta configuração possui 3 opções:

* Nenhum grupo - Não há sub-grupos, todos fazem parte de uma grande comunidade
* Grupos separados - Cada membro de grupo pode ver apenas seu próprio grupos, os outros são invisíveis
* Grupos visíveis - Cada membro do grupo trabalha no seu próprio grupo mas pode também ver outros grupos

O tipo de grupo definido no nível da disciplina é o padrão para todas as atividades da disciplina. Cada atividade que suporta grupos pode também definir seu próprio tipo de grupo mas, se o tipo de grupo é forçado no nível da disciplina, o tipo de grupo para cada atividade é ignorado.';
$string[ 'groupnameexists' ]      = 'O nome de grupo \'{$a}\' já existe nesse disciplina, por favor escolha outro.';
$string[ 'nogroups' ]             = 'Ainda não há grupos definidos nesse disciplina';
