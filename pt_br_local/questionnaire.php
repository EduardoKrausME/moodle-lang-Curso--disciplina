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
 * Strings for component 'questionnaire', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   questionnaire
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'downloadtextformat_help' ]
                                  = 'Este redisciplina permite que você salve todas as respostas de um questionário para um arquivo de texto (CSV).
Este arquivo pode ser importado para uma planilha (por exemplo, MS Excel ou Open Office Calc) ou um pacote estatístico para o processamento posterior dos dados.';
$string[ 'incorrectcourseid' ]    = 'ID da disciplina é incorreto';
$string[ 'incorrectmodule' ]      = 'ID do módulo da disciplina é incorreto';
$string[ 'misconfigured' ]        = 'Disciplina está mal configurado';
$string[ 'realm_help' ]
                                  = '* ** Há três tipos de questionários: **
* Privada  - pertence a disciplina é definido em apenas.
* Modelo  - pode ser copiado e editado.
* Pública  - pode ser compartilhado entre as disciplinas.';
$string[ 'textareacolumns_help' ] = 'sta questão irá exibir uma caixa de texto simples, com ** x *** Textarea colunas * (área ou * largura *) e ** y *** Textarea linhas * (número de linhas de texto * *). Se você deixar ambos x e y ao padrão ** 0 ** valor (ou, se você configurá-lo para ** 0 **), então editor de HTML será exibido com altura padrão e largura (se disponível no contexto da disciplina / usuário e perfil do usuário).';
$string[ 'viewallresponses_help' ]
                                  = 'Se o questionário está definido para o  ** modo de grupo**: *Grupos visíveis* , ou está definido para  *Grupos separados * e o usuário atual
  tem o *moodle / site: accessallgroups* capacidade (no contexto atual), e os grupos foram definidos na disciplina atual,  em seguida, o usuário tem acesso a uma lista suspensa de grupos. Esta lista suspensa permite que o usuário "filtrar" as respostas ao questionário por parte de grupos.  Se a definição for ** Modo Grupo **: *Grupos separados* , os usuários que não têm o *moodle / site: accessallgroups* capacidade (normalmente estudantes ou professores não-edição, etc.) só vai ser capaz de ver as respostas do grupo (s) a que pertencem.';
