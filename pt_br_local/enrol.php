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
 * Strings for component 'enrol', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   enrol
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'actenrolshhdr' ]               = 'Plugins de inscrição em disciplina disponíveis';
$string[ 'assignnotpermitted' ]          = 'Você não tem permissão ou não pode atribuir papéis neste disciplina.';
$string[ 'defaultenrol' ]                = 'Adicionar instância a novas disciplinas';
$string[ 'defaultenrol_desc' ]           = 'É possível adcionar este plugin a todos os novas disciplinas por padrão.';
$string[ 'deleteinstanceconfirm' ]       = 'Você está prestes a apagar o método de inscrição "{$a->name}". Todos os usuários {$a->users} atualmente matriculados usando este método serão descadastrados e todos os dados relacionados com a disciplina, tais como notas de usuários, membros do grupo ou assinaturas fórum serão apagados. Tem certeza de que quer continuar?';
$string[ 'deleteinstanceconfirmself' ]   = 'Você tem certeza que deseja excluir instância "{$a->name}", que dá acesso a este disciplina? É possível que você não seja capaz de acessar este disciplina, se você continuar.';
$string[ 'disableinstanceconfirmself' ]  = 'Você tem certeza que deseja desativar instância "{$a->name}", que dá acesso a este disciplina? É possível que você não seja capaz de acessar este disciplina, se você continuar.';
$string[ 'enrolme' ]                     = 'Faça a minha inscrição neste disciplina';
$string[ 'enrolnotpermitted' ]           = 'Você não tem permissão para inscrever alguém neste disciplina';
$string[ 'errorenrolcohort' ]            = 'Erro ao criar uma instância de sincronização de inscrição de coorte neste disciplina.';
$string[ 'errorenrolcohortusers' ]       = 'Erro ao inscrever membros do coorte neste disciplina.';
$string[ 'eventuserenrolmentcreated' ]   = 'Usuário matriculado na disciplina';
$string[ 'eventuserenrolmentdeleted' ]   = 'Usuário removido da disciplina';
$string[ 'extremovedaction_help' ]       = 'Selecionar o que deve ser feito quando a inscrição de usuários desaparece de uma fonte externa de inscrições. Note que alguns dadoss de usuários e configurações são apagadas da disciplina quando é cancelada a matrícula.';
$string[ 'extremovedsuspend' ]           = 'Desativar inscrição na disciplina';
$string[ 'extremovedsuspendnoroles' ]    = 'Desativar inscrição na disciplina e remover papéis';
$string[ 'extremovedunenrol' ]           = 'Desinscrever usuário da disciplina';
$string[ 'instanceeditselfwarningtext' ] = 'Você está matriculado neste disciplina através deste método de inscrição, alterações podem afetar seu acesso a este disciplina.';
$string[ 'noguestaccess' ]               = 'Visitantes não podem acessar este disciplina. Por favor faça login.';
$string[ 'notenrollable' ]               = 'Você não pode se matricular neste disciplina.';
$string[ 'otheruserdesc' ]               = 'Os usuários a seguir não estão matriculados neste disciplina, mas tem papéis herdados ou atribuidos dentro da disciplina.';
$string[ 'proceedtocourse' ]             = 'Ir para o conteúdo da disciplina';
$string[ 'rolefromcategory' ]            = '{$a->role} (Herdado do curso da disciplina)';
$string[ 'rolefromcategory' ]            = '{$a->role} (Herdado do curso da disciplina)';
$string[ 'rolefrommetacourse' ]          = '{$a->role} (Herdado de disciplina pai)';
$string[ 'rolefromthiscourse' ]          = '{$a->role} (Atribuído neste disciplina)';
$string[ 'unassignnotpermitted' ]        = 'Você não tem permissão para retirar papéis neste disciplina';
$string[ 'unenrolconfirm' ]              = 'Você quer mesmo desinscrever o usuário "{$a->user}" da disciplina "{$a->course}"?';
$string[ 'unenrolme' ]                   = 'Cancelar a minha inscrição na disciplina {$a}';
$string[ 'unenrolnotpermitted' ]         = 'Você não tem permissão ou não pode desinscrever este usuário deste disciplina.';
