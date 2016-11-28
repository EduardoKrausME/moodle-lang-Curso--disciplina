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
 * Strings for component 'forum', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   forum
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'cannotaddteacherforumto' ]        = 'Não foi possível converter o exemplo do fórum de professore à secão 0 da disciplina';
$string[ 'cannotcreateinstanceforteacher' ] = 'Não foi possível criar um novo exemplo de módulo de disciplina para o fórum de professore';
$string[ 'cannotmovetonotfound' ]           = 'Fórum de destino não foi encontrado neste disciplina.';
$string[ 'configmaxbytes' ]                 = 'Tamanho máximo predefinido dos anexos de todos os fóruns do site (sujeito aos limites das disciplinas e outras configurações locais)';
$string[ 'errorenrolmentrequired' ]         = 'Você precisa estar inscrito neste disciplina para acessar este conteúdo';
$string[ 'eventcoursesearched' ]            = 'Disciplina procurado';
$string[ 'forcedreadtracking_desc' ]        = 'Permitir que fóruns sejam configurados para rastreamento de leitura forçado. Irá resultar em desempenho reduzido para alguns usuários, principalmente em disciplinas com muitos fóruns e posts. Quando desligado, quaisquer fóruns configurados anteriormente como "Forçado" são tratados como opcionais.';
$string[ 'introblog' ]                      = 'As mensagens deste fórum foram copiadas aqui automaticamente a partir dos blogs dos usuarios deste disciplina uma vez que essas entradas de blog não mais estão disponíveis.';
$string[ 'modulename_help' ]
                                            = 'O módulo de atividade fórum permite que participantes tenham discussões assíncronas, ou seja, discussões que acontecem durante um longo período de tempo.

Existem vários tipos de fóruns que você pode escolher, como o fórum padrão onde qualquer um pode iniciar uma discussão a qualquer momento; um fórum onde cada estudante pode postar apenas uma discussão; ou um fórum de perguntas e respostas onde os estudantes devem primeiro fazer um post para então serem autorizados a ver os outros posts de outros alunos. Um professor pode permitir que arquivos sejam anexados aos posts dos fóruns. As imagens anexadas são exibidas no post do fórum.

Participantes podem assinar um fórum para receber notificações de novos posts do fórum. Um professor pode definir o modo de assinatura como opcional, forçado ou automático, ou proibir as assinaturas completamente. Se necessário, é possível estabelecer um número máximo de postagens num determinado período de tempo; isto pode previnir que alguns indivíduos dominem as discussões.

Posts dos fóruns podem ser avaliados pelo professor ou pelos estudantes (avaliação por pares). As avaliações podem ser agregadas para formar uma única nota final a ser gravada no livro de notas.

Fórum tem muitas utilizadades, como

* Um espaço social para os estudantes se conhecerem
* Anúncios sobre a disciplina (usando um fórum de notícias com assinatura forçada)
* Para discutir conteúdos da disciplina ou os metariais para leitura
* Para continuar online uma discussão iniciada em sala de aula
* Para discussões entre os professores (utilize um fórum oculto)
* Uma central de ajuda onde tutores e estudantes podem conseguir ajuda
* Uma área de suporte um-para-um para comunicações particulares entre professor e estudante (usando um fórum com grupos separados e um aluno por grupo)
* Para atividades de extensão, por exemplo "brainstorms" para estudantes sugerirem e avaliarem idéias';
$string[ 'namenews_help' ]
                                            = '<p>O fórum de notícias é um fórum especial que é automaticamente criado para cada disciplina e para a página principal do site e é um espaço para anúncios gerais. Só é possível ter um único fórum de notícias por disciplina.</p>

<p>O bloco "Últimas Notícias" mostra as discussões mais recentes deste fórum especial (mesmo que se mude o nome dele). Por esta razão o fórum será recriado automaticamente pelo Moodle se o bloco Últimas Notícias está sendo usado.</p>';
$string[ 'subscriptionmode_help' ]
                                            = 'Quando um participante assina um fórum, isto quer dizer que ele irá receber notificações de novos posts. Existem 4 tipos de assinatura:

* Assinatura opcional - Participantes podem escolher se querem se inscrever
* Assinatura forçada - Todos são assinantes e não conseguem cancelar a assinatura
* Assinatura automática - Todos são inicialmente assinantes mas podem escolher deixar de assinar a qualquer momento
* Assinatura desabilitada - Assinaturas não são permitidas

Note: qualquer mudança no modo de assinatura irá afetar os usuários que se inscreverem na disciplina após a mudança, usuários já inscritos não são alterados.';
