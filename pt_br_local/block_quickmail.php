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
 * Strings for component 'block_quickmail', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   block_quickmail
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'allowstudentsdesc' ]        = 'Permitir que os alunos usem o coreiro eletrônico. Se você escolher "NUNCA", o bloco não pode ser configurado para permitir que os alunos tenham acesso ao nível da disciplina.';
$string[ 'alternate_body' ]
                                      = '<p>
{$a->fullname} adicionou o endereço {$a->address} como um endereço alternativo para a disciplina {$a->course}.
</p>

<p>
O propósito deste e-mail é verificar se este endereço existe e se o dono
deste endereço possui as permissões apropriadas no Moodle.
</p>

<p>
Se vocẽ deseja completar o processo de verificação, por favor acesse o
link: {$a->url}.
</p>

<p>
Se a descrição deste e-mail não faz sentido para você, você pode tê-la recebido
por engano. Simplesmente ignore esta mensagem.
</p>

Obrigado.';
$string[ 'courselayout' ]             = 'Layout da disciplina';
$string[ 'entry_activated' ]          = 'O e-mail alternativo {$a->address} agora pode ser utilizado na disciplina {$a->course}.';
$string[ 'ferpa_desc' ]               = 'Permite ao sistema ajustar-se de acordo com as configurações de grupo da disciplina, ignorando as configurações de grupo mas separando os grupos ou ignorando os grupos completamente.';
$string[ 'no_course' ]                = 'A disciplina com id {$a} é inválido.';
$string[ 'prepend_class' ]            = 'Adicionar nome da disciplina como prefixo';
$string[ 'prepend_class_desc' ]       = 'Adicionar o nome curto da disciplina como prefixo no assunto do e-mail.';
$string[ 'quickmail:allowalternate' ] = 'Permite aos usuários adicionar e-mails alternativos (externos a disciplina) no formulário de envio de e-mails.';
