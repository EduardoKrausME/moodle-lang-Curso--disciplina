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
 * Strings for component 'enrol_pagseguro', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol_pagseguro
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'nocost' ]                = 'Não há nenhum custo associado com a inscrição neste disciplina!';
$string[ 'pagseguro:unenrol' ]     = 'Desmatricular usuários da disciplina';
$string[ 'pagseguro:unenrolself' ] = 'Desmatricular-se da disciplina';
$string[ 'paymentrequired' ]       = 'Você deve efetuar um pagamento de {$a->currency} {$a->cost} pelo PagSeguro para acessar este disciplina.';
$string[ 'pluginname_desc' ]       = 'O módulo PagSeguro permite você definir disciplinas pagos. Se o custo de qualquer disciplina for zero, então os estudantes não serão solicitados a pagar. Existe um valor padrão para o site inteiro, mas você poderá definir valores individuais para as disciplinas. O valor da disciplina irá sobrepor o valor padrão do site.';
$string[ 'status_desc' ]           = 'Permitir que os usuários usem o PagSeguro para inscrever-se em um disciplina por padrão.';
$string[ 'unenrolselfconfirm' ]    = 'Você deseja realmente cancelar sua matrícula da disciplina "{$a}"?';
