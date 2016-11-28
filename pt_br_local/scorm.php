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
 * Strings for component 'scorm', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   scorm
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'asset' ]                        = 'Redisciplina';
$string[ 'assetlaunched' ]                = 'Redisciplina - Visto';
$string[ 'coursepacket' ]                 = 'Pacote da disciplina';
$string[ 'coursestruct' ]                 = 'Estrutura da disciplina';
$string[ 'datadir' ]                      = 'Erro no sistema de arquivos: não é possível criar um diretório para os dados da disciplina';
$string[ 'displayattemptstatusdesc' ]     = 'Se um resumo das tentativas do usuários devem ser exibidas no bloco visão geral da disciplina no Painel e/ou na página de entrada do SCORM.';
$string[ 'displayattemptstatus_help' ]    = 'Esta preferência permite que as tentativas do usuário sejam mostradas no bloco visão geral da disciplina no Painel e/ou na página de entrada do SCORM.';
$string[ 'displaycoursestructure' ]       = 'Exibir estrutura da disciplina na página de entrada';
$string[ 'displaycoursestructuredesc' ]   = 'Esta preferência define o valor padrão para a estrutura da disciplina de exibição do ajuste página de entrada';
$string[ 'entercourse' ]                  = 'Entrar na disciplina';
$string[ 'exit' ]                         = 'Sair da disciplina SCORM';
$string[ 'finishscormlinkname' ]          = 'clique aqui para voltar à página da disciplina';
$string[ 'hidetoc' ]                      = 'Esconder estrutura da disciplina na janela de execução';
$string[ 'hidetocdesc' ]                  = 'Esta opção define se mostrar ou ocultar a estrutura de navegação da disciplina';
$string[ 'invalidmanifestresource' ]      = 'ATENÇÃO: Os seguintes redisciplinas foram citados no seu manifesto mas não foram encontrados:';
$string[ 'modulename_help' ]              = 'SCORM e AICC são coleções de especificações que habilitam interoperabilidade, acessibilidade e reusabilidade de conteúdo baseado na WEB. O módulo SCORM/AICC permite que pacotes SCORM/AICC sejam incluídos na disciplina.';
$string[ 'noprerequisites' ]              = 'Infelizmente você ainda não alcançou o nível de requisitos necessário para acessar este redisciplina de aprendizagem';
$string[ 'noscriptnoscorm' ]              = 'O seu navegador não é compatível com javascript ou o javascript não está habilitado. O funcionamento deste redisciplina pode ser afetado.';
$string[ 'package_help' ]                 = 'O arquivo de pacote é um zip (ou pif) que contem os arquivos de definição da disciplina do SCORM/AICC';
$string[ 'popuplaunched' ]                = 'Este pacote SCORM foi lançado em uma janela pop-up, se você acabar de ver este redisciplina, clique aqui para voltar à página da disciplina';
$string[ 'protectpackagedownloads_desc' ] = 'Se habilitado, pacotes SCORM podem ser baixados apenas se o usuário tem na disciplina: capacidade de gerenciar atividades. Se desabilitado, pacotes SCORM sempre podem ser baixados (por meios móveis ou outros).';
$string[ 'scormcourse' ]                  = 'Disciplina SCORM';
$string[ 'scormtype_help' ]               = 'Esta configuração determina como o pacote está incluído na disciplina. Há até 4 opções: * Pacote Enviado - Permite que um pacote SCORM deve ser escolhido através do seletor de arquivo * manifesto SCORM externo - Permite que um URL imsmanifest.xml a ser especificado. Nota: Se o URL tem um nome de domínio diferente do seu site, em seguida, "Transferido pacote" é a melhor opção, pois caso contrário as notas não são salvos. * Pacote baixado - Permite que um URL pacote a ser especificado. O pacote será descompactado e salvo localmente, e atualizado quando o pacote SCORM externo é atualizado. * Repositório de conteúdo local IMS - Permite que um pacote a ser selecionado a partir de um repositório IMS * URL AICC externa - esta URL é o URL de lançamento para uma atividade única AICC. Um pacote de pseudo será construído em torno deste.';
$string[ 'skipview_help' ]
                                          = '<p>Se você adicionar pacotes com apenas um Objeto de Aprendizado, você pode permitir que o Moodle salte a página de estrutura de conteúdo quando os usuários clicarem numa atividade do SCORM, na página da disciplina.</p>

<p>Você pode escolher:</p>

   <ul>
       <li><strong>Nunca</strong> saltar a página de estrutura do conteúdo</li>
       <li><strong>Primeiro acesso</strong> saltar a página de estrutura do conteúdo apenas na primeira vez</li>
       <li><strong>Sempre</strong> saltar a página de estrutura do conteúdo</li>
   </ul>';
