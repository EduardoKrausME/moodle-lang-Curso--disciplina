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
 * Strings for component 'tool_uploaduser', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_uploaduser
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'uploadusers_help' ]
    = 'Usuários podem ser enviados (e opcionalmente inscritos em disciplinas) via arquivos de texto. O formato deste arquivo deve ser o seguinte:

* Cada linha do arquivo contém um registro
* cada registro é uma série de dados separados por vírgula (ou outros delimitadores)
* O primeiro registro contém a lista dos nomes de campos definindo o formato do resto do arquivo
* Os nomes de campos obrigatórios são username,password,firstname,lastname,email';
