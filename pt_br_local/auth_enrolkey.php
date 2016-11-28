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
 * Strings for component 'auth_enrolkey', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   auth_enrolkey
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'signup_view' ]                               = 'Inscrição na disciplina';
$string[ 'signup_view_message_basic' ]                 = 'Você foi inscrito como {$a->role} para a disciplina \'<a href="{$a->href}">{$a->course}</a>';
$string[ 'signup_view_message_basic_dates' ]           = 'Você se inscreveu em {$a->course} como {$a->role}. <a href={$a->href}>Clique aqui para ver a disciplina.</a><br />A disciplina começa: {$a->startdate}<br />O disciplina termina: {$a->enddate}';
$string[ 'signup_view_message_basic_dates_endonly' ]   = 'Você se inscreveu em {$a->course} como {$a->role}. <a href={$a->href}>Clique aqui para ver a disciplina.</a><br />A disciplina termina: {$a->enddate}';
$string[ 'signup_view_message_basic_dates_startonly' ] = 'Você se inscreveu em {$a->course} como {$a->role}. <a href={$a->href}>Clique aqui para ver a disciplina.</a><br />A disciplina começa: {$a->startdate}';
