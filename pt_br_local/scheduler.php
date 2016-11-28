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
 * Strings for component 'scheduler', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   scheduler
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'course' ]       = 'Disciplina';
$string[ 'email_applied_html' ]
                          = '<p>Um compromisso foi aplicado em {$a->date} às {$a->time},<br/>
pelo aluno <a href="{$a->attendee_url}">{$a->attendee}</a> para a disciplina:

<p>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></p>

<p>usando o organizador intitulado "<em>{$a->module}</em>" no website: <a href="{$a->site_url}">{$a->site}</a>.</p>';
$string[ 'email_applied_plain' ]
                          = 'Um compromisso foi aplicado em {$a->date} às {$a->time},
pelo aluno {$a->attendee} para a disciplina:

{$a->course_short}: {$a->course}

usando o organizador intitulado "{$a->module}" no website: {$a->site}.';
$string[ 'email_cancelled_html' ]
                          = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time}</strong>,<br/>
com o aluno <strong><a href="{$a->attendee_url}">{$a->attendee}</a></strong> para a disciplina:</p>

<p><strong>{$a->course_short} : <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador intitulado "<em>{$a->module}</em>" no website : <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado ou removido</span></strong>.</p>';
$string[ 'email_cancelled_plain' ]
                          = 'Seu compromisso em  {$a->date} às {$a->time},
com o aluno {$a->attendee} para a disciplina:

{$a->course_short} : {$a->course}

no organizador intitulado "{$a->module}" no website : {$a->site}

foi cancelado ou removido.';
$string[ 'email_teachercancelled_html' ]
                          = '<p>Seu compromisso em <strong>{$a->date}</strong> às <strong>{$a->time} </strong>,<br/>
com o {$a->staffrole} <strong><a href="{$a->attendant_url}">{$a->attendant}</a></strong> para a disciplina:</p>

<p><strong>{$a->course_short}: <a href="{$a->course_url}">{$a->course}</a></strong></p>

<p>no organizador "<em>{$a->module}</em>" no website: <strong><a href="{$a->site_url}">{$a->site}</a></strong></p>

<p><strong><span class="error">foi cancelado</span></strong>. Por favor, solicite por um novo slot.</p>';
$string[ 'email_teachercancelled_plain' ]
                          = 'Seu compromisso em {$a->date} às {$a->time},
com o {$a->staffrole} {$a->attendant} para a disciplina:

{$a->course_short}: {$a->course}

no organizador intitulado "{$a->module}" no website: {$a->site}

foi cancelado. Por favor, solicite por um novo slot.';
$string[ 'fileformat_help' ]
                          = 'Os seguintes formatos de arquivo são disponíveis:
     <ul>
          <li>Arquivos de texto CSV (Comma Separated Value). O campo separador, por padrão uma vírgula, pode ser escolhido abaixo.
               Arquivos CSV podem ser abertos na maior parte das aplicações de planilhas;</li>
          <li>Arquivos Microsoft Excel (formato Excel 2007);</li>
          <li>ODS (Open Document spreadsheets);</li>
          <li>Formato HTML - uma página web exibindo a tabela de saída, que pode ser impressa usando o redisciplina de impressão do browser;</li>
          <li>Documentos PDF. Você pode escolher a orientação entre paisagem e retrato.</li>
     </ul>';
$string[ 'forcourses' ]   = 'Escolher alunos em disciplinas';
$string[ 'incourse' ]     = 'em disciplina';
$string[ 'needteachers' ] = 'Slots não podem ser adicionados a disciplina sem professores';
$string[ 'return' ]       = 'Retornar a disciplina';
$string[ 'thiscourse' ]   = 'esse disciplina';
