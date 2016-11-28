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
 * Strings for component 'attendance', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   attendance
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'allcourses' ]                  = 'Todos as disciplinas';
$string[ 'attendanceforthecourse' ]      = 'Presença para a Disciplina';
$string[ 'attendancenotstarted' ]        = 'Presença ainda não foi iniciada para este disciplina';
$string[ 'confirmdeletehiddensessions' ] = 'Tem certeza de que deseja excluir {$a->count} sessões agendadas antes da data de início da disciplina ({$a->date})?';
$string[ 'createmultiplesessions_help' ]
                                         = 'Esta função possibilita a criação de várias sessões num único passo.

 * <strong>Data de início da sessão</strong>: Selecione a data de início da disciplina (o primeiro dia de aulas)
 * <strong>Data de término da sessão</strong>: Selecione o último dia de aulas (o último dia que você deseja registrar presenças).
 * <strong>Dias da sessão</strong>: Selecione os dias da semana no qual haverá aula (por exemplo, Segunda/Quarta/Sexta).
 * <strong>Frequência</strong>: Se há aulas todas as semanas, selecione 1; a cada duas semanas, selecione 2; e assim por diante.';
$string[ 'createonesession' ]            = 'Criar uma sessão para a disciplina';
$string[ 'deletingsession' ]             = 'Apagando sessão para a disciplina';
$string[ 'deletingstatus' ]              = 'Apagando status para a disciplina';
$string[ 'gradebookexplanation_help' ]
                                         = 'O módulo de Presença mostra sua nota de presença atual baseada no número de pontos que você ganhou e o número total de pontos que poderiam ter sido ganhos até agora; ele não inclui aulas futuras. No livro de notas, sua nota de presença é baseada na percentagem da sua presença atual e o número de pontos que poderiam ser ganhos ao longo de todo o período da disciplina, incluindo aulas futuras. Deste modo, suas notas de presença mostradas no módulo de Presença e no livro de notas podem não ser o mesmo número de pontos, mas eles são a mesma percentagem.

Por exemplo, se você ganhou 8 de 10 pontos até agora (80% de presença) e a presença para todo a disciplina é de 50 pontos, o módulo de Presença mostrará 8/10 e o livro de notas mostrará 40/50. Você ainda não ganhou 40 pontos, mas 40 é o valor equivalente de pontos para a sua percentagem atual de presença de 80%. Os pontos que você ganhou no módulo de Presença nunca podem diminuir, pois ela é baseada apenas na presença registrada até o momento; no entanto, os pontos de presença mostrados no livro de notas podem aumentar ou diminuir baseada na sua futura frequência, pois ela é calculada tomando em conta toda a duração da disciplina.';
$string[ 'hiddensessions_help' ]
                                         = 'Sessões deixam de ser visíveis se sua data é anterior à data de início da disciplina. Altere a data de início da disciplina e as sessões ocultas serão apresentadas.

Você pode usar esta facilidade para ocultar sessões antigas em vez de excluí-las. Note que somente sessões visíveis são usadas no Livro de Notas.';
$string[ 'nogroups' ]                    = 'Você não pode adicionar sessões de grupo. Nenhum grupo existe na disciplina.';
$string[ 'nosessionexists' ]             = 'Nenhuma sessão existe para este disciplina';
$string[ 'notfound' ]                    = 'Atividade de presença não encontrada para a disciplina!';
$string[ 'resetdescription' ]            = 'Lembre-se que apagar os dados de presença irá apagar a informação do banco de dados. Você pode apenas esconder antigas sessões que tiveram a data de início da disciplina alteradas.';
$string[ 'thiscourse' ]                  = 'Este disciplina';
