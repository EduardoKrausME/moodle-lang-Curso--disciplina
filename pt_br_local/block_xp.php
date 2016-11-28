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
 * Strings for component 'block_xp', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   block_xp
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'courselog' ]            = 'Log da disciplina';
$string[ 'coursereport' ]         = 'Relatório da disciplina';
$string[ 'courserules' ]          = 'Regras da disciplina';
$string[ 'coursesettings' ]       = 'Configurações da disciplina';
$string[ 'coursevisuals' ]        = 'Visuais da disciplina';
$string[ 'enablexpgain_help' ]
                                  = 'Quando setado para \'Não\', ninguém ganhará pontos de experiência na disciplina. Isso é útil para congelar a experiência ganha, ou para habilitar isso por um certo período de tempo.

Por favor, note que isto pode ser controlado de forma mais granulada usando a capacidade \'block/xp:earnxp\'.';
$string[ 'incourses' ]            = 'Em disciplinas';
$string[ 'participatetolevelup' ] = 'Participe da disciplina para ganhar pontos de experiência e passar de nível!';
$string[ 'reallyresetdata' ]      = 'Deseja realmente resetar os níveis e pontos de experiência de todos neste disciplina?';
$string[ 'resetcoursedata' ]      = 'Resetar os dados da disciplina';
$string[ 'rulecmdesc' ]           = 'A atividade ou redisciplina é \'{$a->contextname}\'.';
$string[ 'rulesformhelp' ]
                                  = '<p>Este plugin é feito usando os eventos para atribuir pontos de experiência por ações executadas pelos estudantes. Você pode usar o formulário abaixo para adicionar suas próprias regras e visualizar as padrões.</p>
<p>É aconselhável verificar o <a href="{$a->log}">log</a> do plugin para identificar quais eventos são disparados conforme você executa ações na disciplina, e também ler mais sobre esses eventos: <a href="{$a->list}">lista de todos os eventos</a>, <a href="{$a->doc}">documentação para desenvolvedores</a>.</p>
<p>Finalmente, por favor, note que o plugin sempre ignora:
<ul>
    <li>Ações executadas por administradores, visitantes ou usuários não logados.</li>
    <li>Ações executadas por usuários que não tem a capacidade <em>block/xp:earnxp</em>.</li>
    <li>Ações repetidas em um curto espaço de tempo, para prevenir trapaça.</li>
    <li>E os eventos que o nível educacional não é igual a <em>Participar</em>.</li>
</ul>
</p>';
$string[ 'wherearexpused_desc' ]  = 'Quando escolher \'Em disciplinas\', os pontos de experiência ganhos apenas serão computados na disciplina no qual o bloco foi adicionado. Quando escolher \'Para todo o site\', um usuário irá "subir de nível" em todo o site ao invés de apenas por disciplina, todas as experiências obtidas ao longo do site será usadas.';
