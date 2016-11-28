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
 * Strings for component 'ouwiki', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   ouwiki
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'subwikis_help' ]   = '<ul><li> <strong>Wiki único para disciplina</strong> <br /> Este wiki comporta-se como um wiki único. Todo mundo na disciplina vê as mesmas páginas. </li><li> <strong>Um wiki por grupo</strong> <br /> Membros de cada grupo ver uma cópia totalmente separado do wiki (sub-wiki) específico para o seu grupo. Você só pode ver páginas criadas por pessoas do mesmo grupo. Se você estiver em mais de um grupo, ou você tem permissões que permitem que você visualize todos os grupos, você tem uma lista suspensa para escolher um grupo. </li><li> <strong>Wiki separada para cada usuário</strong> <br /> Cada usuário recebe um wiki totalmente diferente. Você só pode ver o seu próprio wiki, a menos que você tem permissões que permitem ver os outros, quando você começa uma lista suspensa para escolher um usuário. (Isto pode ser usado como uma maneira para que os alunos contribuam com trabalho, mas você deve considerar outras formas de conseguir isso, como a atividade de avaliação.) </li></ul><p> Note-se que a opção do grupo trabalha com o agrupamento escolhido. Ele vai ignorar grupos em outros grupos. </p>';
$string[ 'subwikis_single' ] = 'Um wiki por disciplina';
$string[ 'timeout_help' ]
                             = '<p>
Se você selecionar um tempo limite, as pessoas de edição do wiki são permitidas apenas para editá-lo por um determinado tempo.
O wiki bloqueia páginas, enquanto eles estão sendo editados (de modo que duas pessoas não podem editar a mesma página
de uma só vez), para definir um tempo limite impede a wiki tornando bloqueado para os outros.
</ p>

<h3> que os usuários vêem </ h3>

<p>
Quando tempo limite é ativado, os usuários ver uma contagem quando editar uma página. Se a contagem regressiva atinge
zero, o seu navegador irá automaticamente salvar as alterações e parar de edição.
</ p>

Usuários <h3> Sem JavaScript habilitado </ h3>

<p>
Esta opção não tem efeito sobre os usuários que não têm o Javascript habilitado ou que têm navegadores antigos.
Um tempo limite de 15 minutos sempre se aplica a esses usuários. Quando editar uma página, ele exibe o tempo
por que deve salvá-lo, se não o fizerem, eles poderiam perder seus trabalhos.
</ p>

<h3> Por que você pode não precisar desta opção </ h3>

<p>
Mesmo quando esta opção estiver desligada, os bloqueios são automaticamente descartados nas seguintes situações após
um usuário começou a editar uma página:
</ p>

<ul>
<li> sem salvar as alterações ou cancelamento, o usuário se move para uma página diferente. </ li>
<li> O usuário fecha seu navegador. </ li>
<li> falhas do computador do usuário. </ li>
<li> O usuário perde a sua ligação à Internet. </ li>
</ ul>

<p>
Nestas situações, o bloqueio é removido automaticamente depois de cerca de dois minutos.
</ p>

<p>
Além disso, os tutores e funcionários têm disciplina (por padrão) a capacidade de substituir qualquer bloqueio a qualquer momento.
</ p>

<h3> que esta opção não faz </ h3>

<p>
Esta opção não parar de alguém segurando em uma página e impedindo que outros usuários editem-lo se
eles são muito determinado. Eles poderiam editar uma página e esperar até o tempo limite está prestes a expirar antes
salvar as alterações em seguida, muito rapidamente editá-lo novamente.
</ p>';
