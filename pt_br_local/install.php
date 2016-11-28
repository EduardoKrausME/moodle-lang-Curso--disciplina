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
 * Strings for component 'install', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   install
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'admindirsetting' ]
                                   = 'Alguns provedores usam o diretório /admin como uma URL especial para o acesso ao painel de administração do site. Infelizmente isto entra em conflito com o perdisciplina de acesso predefinido para as páginas de administração do Moodle. Você pode superar este problema mudando o nome do diretório de administração da sua instalação e inserindo este nome aqui. Por exemplo:
<br/> <br /><b>moodleadmin</b><br /> <br />Isto resolve os problemas dos links da página de administração do Moodle.';
$string[ 'admindirsettingsub' ]
                                   = 'Alguns provedores usam o diretório /admin como uma URL especial para o acesso ao painel de administração do site. Infelizmente isto entra em conflito com o perdisciplina de acesso predefinido para as páginas de administração do Moodle. Você pode superar este problema mudando o nome do diretório de administração da sua instalação e inserindo este nome aqui. Por exemplo:
<br/> <br /><b>moodleadmin</b><br /> <br />Isto resolve os problemas dos links da página de administração do Moodle.';
$string[ 'datarooterror' ]         = 'O \'diretório de dados\' indicado não foi encontrado ou não foi criado.  Corrija a indicação do perdisciplina ou crie o diretório manualmente.';
$string[ 'directorysettingshead' ] = 'Confirme os perdisciplinas de acesso desta instalação de Moodle';
$string[ 'directorysettingssub' ]
                                   = '<b>Endereço Web:</b>
Especifique o endereço web completo em que Moodle pode ser acessado. Se o acesso é múltiplo, escolha o endereço mais fácil para os alunos. Não inclua uma barra final no endereço.
<br />
<br />
<b>Diretório Moodle:</b>
Especifique o perdisciplina completo de acesso ao diretório de instalação. Atenção ao uso de maiúsculas e minúsculas.
<br />
<br />
<strong>Diretório de dados:</strong>
Especifique um diretório para que o Moodle possa salvar arquivos carregados no servidor. Este diretório deve ter permissões de leitura e escrita pelo usuário do servidor web (normalmente \'nobody\' ou \'apache\'), mas não deve ter acesso livre via web.';
$string[ 'dirrooterror' ]          = 'A configuração do perdisciplina de acesso ao Diretório Moodle parece errada - não foi possível encontrar uma instalação de Moodle neste endereço. O valor abaixo foi reconfigurado.';
$string[ 'fileuploadshelp' ]
                                   = '<p>Parece que o envio de documentos a este servidor não está habilitado.</p>
<p>Moodle pode ser instalado, mas não será possível carregar arquivos ou imagens nas disciplinas.</p>
<p>para habilitar o envio de arquivos é necessário editar o arquivo php.ini do sistema e mudar a configuração de
<b>file_uploads</b> para \'1\'.</p>';
