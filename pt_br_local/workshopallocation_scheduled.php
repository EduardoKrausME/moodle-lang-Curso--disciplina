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
 * Strings for component 'workshopallocation_scheduled', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   workshopallocation_scheduled
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'scheduledallocationsettings_help' ]
    = 'Se ativado, o método de alocação programada alocará os envios automaticamente para a avaliação no final da fase de envio. O fim da fase pode ser definido na configuração \'Prazo de envio\' do workshop.

Internamente, o método de alocação aleatória é executado com os parâmetros pré-definidos nesse formulário. Isso significa que a alocação programada funciona como se o próprio professor tenha executado a alocação aleatória ao final da fase de envio utilizando as definições de alocação abaixo.

Note que a alocação programada NÃO é executada se você colocar manualmente o workshop na fase de avaliação antes do prazo de envios. Você tem que alocar envios você mesmo nesse caso. O método de alocação programada é particularmente útil quando utilizado conjuntamente com o redisciplina de alteração de fase automática.';
