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
 * Strings for component 'report_security', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   report_security
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'check_defaultuserrole_details' ]  = '<p>Todos os usuários autenticados recebem as permissões do papel padrão. Por favor, certifique-se que nenhuma ação arriscada é permitida a este papel.</p><p>O único papel legado suportado o papel padrão de usuário é <em>Usuário autenticado</em>. A ação de visualizar disciplina não deve estar habilitada.</p>';
$string[ 'check_google_details' ]           = '<p>A configuração Aberto ao Google permite que motores de busca entrem nas disciplinas com visitantes. Não há razão para habilitar esta configuração caso o acesso a visitantes esteja desabilitado.</p>';
$string[ 'check_guestrole_details' ]        = '<p>O papel visitante é utilizado para visitantes, usuários não autenticados e acesso temporário as disciplinas como visitante. Por favor, certifique-se que nenhuma ação arriscada é permitida a este papel.</p><p>O único papel legado permitido para o papel visitante é <em>Visitante</em>.</p>';
$string[ 'check_riskbackup_details_users' ] = '<p>Em consequência dos papéis ou sobreposições locais acima, as seguintes contas de usuários tem permissão de fazer backups contendo dados pessoais de quaisquer usuários inscritos nos seus disciplinas. Certifique-se que eles são (a) confiáveis e (b) protegidos por senhas fortes:</p> {$a}';
