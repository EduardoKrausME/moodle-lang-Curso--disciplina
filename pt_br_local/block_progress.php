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
 * Strings for component 'block_progress', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   block_progress
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addallcurrentitems' ]                 = 'Adicione todas as atividades/redisciplinas';
$string[ 'config_orderby_course_order' ]        = 'Ordenamento na disciplina';
$string[ 'how_ordering_works_help' ]
                                                = '<p> Há duas maneiras os itens na barra de progresso podem ser encomendados. </p>
<ul>
     <li> <em> "Espera-se por" data-hora </ em> (default) <br />
     As datas de vencimento ou definir manualmente datas das atividades / redisciplinas são utilizados para ordenar os itens mostrados na barra de progresso.
     </li>
     <li> <em> pedindo na disciplina </ em> <br />
     Atividades / redisciplinas são apresentados na mesma ordem em que estão na página da disciplina. Quando esta opção for usada, os aspectos relacionados com o tempo são desativados.
     </ li>
</ul>';
$string[ 'no_blocks' ]                          = 'Nenhum bloco Barra de Progresso estão configurados para os seus disciplinas.';
$string[ 'no_events_config_message' ]           = 'Não existem atividades ou redisciplinas a serem monitorados. Crie primeiro atividades e/ou redisciplinas e retorne depois a este bloco.';
$string[ 'progress:overview' ]                  = 'Visão geral do progresso de todos os alunos da disciplina';
$string[ 'selectitemstobeadded' ]               = 'Selecione as actividades/redisciplinas';
$string[ 'what_actions_can_be_monitored_help' ] = '<p>O fato de diferentes atividades e redisciplinas serem utilizados de forma diferente, o que é monitorado para cada módulo varia. Por exemplo, para as Tarefas, a submissão é monitorada; Questionários são monitorados pela tentativa realizada; Fóruns são monitorados para postagens colocadas pelo estudante; a atividade Escolha é monitorada pela seleção de uma alternativa e redisciplinas são monitorados pelo acesso/visualização.</p>';
$string[ 'what_does_monitored_mean_help' ]
                                                = '<p>O objetivo deste bloco é incentivar os alunos a gerir o seu tempo de forma eficaz. Cada aluno pode monitorar seu progresso no que respeita ao completar as atividades e visualizar os redisciplinas que você criou.</p>
<p>Na página de configuração, você verá uma lista de todos os módulos que você criou, que podem ser monitorados pelo bloco Barra de Progresso. O módulo só será monitorado e aparecerá como um pequeno bloco na Barra de Progresso, se a respectiva actividade/redisciplina for selecionada. </p>';
$string[ 'what_expected_by_means_help' ]        = '<p>A data e hora <em> Esperado em </em> é independente de qualquer data ou hora na configuração de uma atividade ou redisciplina. Quando você inicialmente criar uma nova atividade ou redisciplina e visita a página de configuração da Barra de Progresso, o bloco tentará adivinhar uma adequada <em> Esperado em </em> data e hora baseados nas datas de configuração do módulo (uma data padrão será usada se não houver nenhuma expectativa). Depois disso, todas as alterações a data na Barra de Progresso não terá qualquer efeito sobre a atividade/redisciplina monitorada e vice-versa.</p>';
$string[ 'why_set_the_title_help' ]             = '<p>Pode haver várias instâncias do bloco Barra de Progresso. Você pode usar diferentes blocos Barra de Progresso para monitorar diferentes conjuntos de atividades ou redisciplinas. Para exemplo, você poderá acompanhar o progresso das tarefas em um bloco e questionários em outro. Por esta razão, você pode substituir o nome padrão e definir um título mais apropriado para cada instância do bloco. </p>';
