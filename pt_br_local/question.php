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
 * Strings for component 'question', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   question
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addcategory' ]                          = 'Adicionar curso';
$string[ 'cannotretrieveqcat' ]                   = 'Não foi possível recuperar o curso de pergunta';
$string[ 'categories' ]                           = 'Cursos';
$string[ 'category' ]                             = 'Curso';
$string[ 'categorycurrent' ]                      = 'Curso atual';
$string[ 'categorycurrentuse' ]                   = 'Usar esse curso';
$string[ 'categorydoesnotexist' ]                 = 'Este curso não existe';
$string[ 'categoryinfo' ]                         = 'Informações do curso';
$string[ 'categorymove' ]                         = 'O curso \'{$a->name}\' contém {$a->count} perguntas.  Por favor transfira as perguntas para outro curso.';
$string[ 'categorymoveto' ]                       = 'Gravar no curso';
$string[ 'categorynamecantbeblank' ]              = 'O nome do curso não pode ser deixado em branco.';
$string[ 'changepublishstatuscat' ]               = '<a href="{$a->caturl}">O curso "{$a->name}"</a> na disciplina "{$a->coursename}" terá seu status de compartilhamento trocado de <strong>{$a->changefrom} para {$a->changeto}</strong>.';
$string[ 'changepublishstatuscat' ]               = '<a href="{$a->caturl}">O curso "{$a->name}"</a> na disciplina "{$a->coursename}" terá seu status de compartilhamento trocado de <strong>{$a->changefrom} para {$a->changeto}</strong>.';
$string[ 'cwrqpfs' ]                              = 'Questões aleatórias selecionando questões de sub cursos.';
$string[ 'cwrqpfsinfo' ]                          = '<p>Durante a migração para o Moodle 1.9 iremos separar cursos de questões em diferentes contextos. Alguns cursos de questões e algumas questões terão seu status de compartilhamento alterado. Isto é necessário em um caso raro quando uma ou mais questões \'aleatória\' em um questionário são configuradas para selecionar de uma mistura de cursos compartilhadas e não compartilhadas(como é o caso neste site).Isto acontece quando uma questão \'aleatória\' é configurada para selecionar de subcursos e uma ou mais subcursos tem status diferentes de compartilhamento com o curso ascendente na qual a questão \'aleatória\' é criada.</p><p>Os cursos de questões seguintes, das quais as questões \'aleatórias\' em cursos ascendentes são selecionadas, terão o seu status de compartilhamento alterado para o mesmo status de compartilhamento do curso que contém a questão \'aleatória\' quando da migração para o Moodle 1.9. Os cursos seguintes terão seus status de compartilhamento alterado. Questões que são afetadas continuarão a funcionar em todos os questionários até que você as remova destes questionários.</p>';
$string[ 'cwrqpfsnoprob' ]                        = 'Nenhum curso de questões no seu site é afetada pelo problema de \'Selecionar questões aleatórias de subcursos\'';
$string[ 'defaultinfofor' ]                       = 'O curso padrão para as questões compartilhadas no contexto \'{$a}\'.';
$string[ 'deletecoursecategorywithquestions' ]    = 'Existem questões deste banco associadas à este curso de disciplina. Se você continuar, serão apagadas. Use a interface de administração do banco de questões para transferir as questões.';
$string[ 'deletecoursecategorywithquestions' ]    = 'Existem questões deste banco associadas à este curso de disciplina. Se você continuar, serão apagadas. Use a interface de administração do banco de questões para transferir as questões.';
$string[ 'editcategories' ]                       = 'Editar cursos';
$string[ 'editcategories_help' ]
                                                  = 'Em vez de manter todas as questões em uma lista grande, você pode criar cursos e sub-cursos.

Cada curso possui um contexto que determina onde a questão pode ser usada:

*Contexto da atividade - Questões somente disponíveis no módulo da atividade
*Contexto da disciplina - Questões disponíveis em todos os módulos de atividade daquele disciplina
*Contexto do curso de disciplina - Questões disponíveis em todos os módulos de atividade de todos as disciplinas daquele curso

Cursos também são utilizadas em questionários com questões randômicas que são selecionadas de um curso particular.';
$string[ 'editcategories_help' ]
                                                  = 'Em vez de manter todas as questões em uma lista grande, você pode criar cursos e sub-cursos.

Cada curso possui um contexto que determina onde a questão pode ser usada:

*Contexto da atividade - Questões somente disponíveis no módulo da atividade
*Contexto da disciplina - Questões disponíveis em todos os módulos de atividade daquele disciplina
*Contexto do curso de disciplina - Questões disponíveis em todos os módulos de atividade de todos as disciplinas daquele curso

Cursos também são utilizadas em questionários com questões randômicas que são selecionadas de um curso particular.';
$string[ 'editcategory' ]                         = 'Editar curso';
$string[ 'editingcategory' ]                      = 'Editando o curso';
$string[ 'editthiscategory' ]                     = 'Editar este curso';
$string[ 'errordeletingquestionsfromcategory' ]   = 'Erro excluindo questões do curso {$a}.';
$string[ 'eventquestioncategorycreated' ]         = 'Curso de questão criada';
$string[ 'exportcategory' ]                       = 'Exportar curso';
$string[ 'exportcategory_help' ]
                                                  = '<h2>Curso de Exportação</h2>

<p>A lista <b>Curso:</b> que se abre é usada para selocionar o curso da qual as questões para exportação serão tiradas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem o curso ser incluída no arquivo gravado, possibilitando que os cursos (opcionalmente) sejam recriadas na importação. Para que esta informação seja incluída a caixa <b>para o arquivo</b> deve ser marcada.</p>';
$string[ 'exportquestions_help' ]                 = 'Esta função permite exportar completamente um curso (e quaisquer subcursos) de questões para um arquivo. Por favor, note que, dependendo do tipo de arquivo selecionado, alguns tipos de questões e alguns dados das questões podem não ser exportados.';
$string[ 'filesareacourse' ]                      = 'a área de arquivos da disciplina';
$string[ 'getcategoryfromfile' ]                  = 'Tirar curso do arquivo';
$string[ 'importcategory' ]                       = 'Importar curso';
$string[ 'importcategory_help' ]
                                                  = '<p>A lista <b>Curso:</b> que se abre é usada para selecionar o curso na qual as questões da Importação serão colocadas.</p>

<p>Alguns formatos de importação (GIFT e Formato XML) permitem que o curso seja específicada no arquivo de importação. Para que isto aconteça a caixa <b>vindo do arquivo</b> deve ser marcada. Se não for, as questões irão para os cursos selecionadas independente de qualquer instrução dentro do arquivo.</p>

<p>Quando cursos são especificadas dentro do arquivo de importação e não existem, elas são criadas automáticamente.</p>';
$string[ 'importfromcoursefiles' ]                = '...ou escolha um arquivo de disciplina para importar.';
$string[ 'includesubcategories' ]                 = 'Também mostrar questões de subcursos';
$string[ 'invalidcategoryidforparent' ]           = 'Id inválido para curso pai!';
$string[ 'invalidcategoryidtomove' ]              = 'Id inválido do curso a mover!';
$string[ 'movecategory' ]                         = 'Mover Curso';
$string[ 'movedquestionsandcategories' ]          = 'Questões e cursos movidas de {$a->oldplace} para {$a->newplace}.';
$string[ 'movingcategory' ]                       = 'Movendo curso';
$string[ 'movingcategoryandfiles' ]               = 'Você tem certeza que deseja mover o curso {$a->name} e todas os cursos descendentes para o contexto "{$a->contextto}"?<br /> Foram detectados {$a->urlcount} arquivos ligados a questões em {$a->fromareaname}, você gostaria de copiar ou mover isto para {$a->toareaname}?';
$string[ 'movingcategorynofiles' ]                = 'Você tem certeza que deseja mover o curso "{$a->name}" e todas os cursos descendentes para o contexto "{$a->contextto}"?';
$string[ 'needtochoosecat' ]                      = 'Você precisa escolher um curso para mover as questões, ou então clicar em \'cancelar\'.';
$string[ 'nopermissionmove' ]                     = 'Você não tem permissão para remover estas questões. Você pode salvar a questão neste curso ou salvá-la como nova pergunta.';
$string[ 'noquestions' ]                          = 'Nenhuma questão encontrada pode ser exportada. Certifique-se de que você selecionou um curso que contem questões para exportar.';
$string[ 'notenoughdatatoeditaquestion' ]         = 'Não foram especificados: id da questão, id do curso e tipo de questão.';
$string[ 'page-question-category' ]               = 'Página de cursos de questionário';
$string[ 'parentcategory' ]                       = 'Curso pai';
$string[ 'parentcategory_help' ]
                                                  = '<h2>Curso Pai</h2>

<p>O curso na qual um item deve ser incluído. \'Topo\' significa que esse curso não estará contida em nenhuma outra.</p>

<p>Normalmente você verá vários \'contextos\' de curso, que estão em negrito. Perceba que cada contexto tem sua própria hierarquia de cursos. Vá até o final da página para mais informações sobre contextos. Se você não vir esses contextos pode ser que você não tenha permissão para acessar outros contextos.</p>

<p>Se há somente um curso no contexto, você não poderá movê-la, já que é necessário que haja ao menos uma em cada um deles.</p>

<p>Veja também :</p>
<ul>
  <li><a href="help.php?module=question&amp;file=categories.html">Cursos de questões</a></li>
  <li><a href="help.php?module=question&amp;file=categorycontexts.html">Contextos de curso</a></li>
  <li><a href="help.php?module=question&amp;file=permissions.html">Permissões de Questões</a></li>
</ul>';
$string[ 'questionaffected' ]                     = '<a href="{$a->qurl}">Questão "{$a->name}" ({$a->qtype})</a> está neste curso de questão mas também está na <a href="{$a->qurl}">questão "{$a->quizname}"</a> na disciplina "{$a->coursename}".';
$string[ 'questionaffected' ]                     = '<a href="{$a->qurl}">Questão "{$a->name}" ({$a->qtype})</a> está neste curso de questão mas também está na <a href="{$a->qurl}">questão "{$a->quizname}"</a> na disciplina "{$a->coursename}".';
$string[ 'questioncategory' ]                     = 'Curso de questões';
$string[ 'questioncatsfor' ]                      = 'Cursos de questão para \'{$a}\'';
$string[ 'questionsinuse' ]                       = '(*Questões marcadas com um asterisco já estão em uso em alguns questionários. Estas questões não serão apagadas dos questionários, mas somente da lista do curso.)';
$string[ 'questionsmovedto' ]                     = 'Questões ainda utilizadas movidas para "{$a}" no curso de disciplina correspondente.';
$string[ 'questionsmovedto' ]                     = 'Questões ainda utilizadas movidas para "{$a}" no curso de disciplina correspondente.';
$string[ 'selectacategory' ]                      = 'Selecione um curso:';
$string[ 'selectcategoryabove' ]                  = 'Selecione um curso acima';
$string[ 'tofilecategory' ]                       = 'Escrever curso em arquivo';
$string[ 'unknownquestioncatregory' ]             = 'Curso de questão desconhecida: {$a}';
$string[ 'unusedcategorydeleted' ]                = 'Este curso foi cancelada porque depois do cancelamento da disciplina as questões não foram mais usadas.';
$string[ 'unusedcategorydeleted' ]                = 'Este curso foi cancelada porque depois do cancelamento da disciplina as questões não foram mais usadas.';
$string[ 'upgradeproblemcategoryloop' ]           = 'Problema atualizando cursos de questões. Loop na árvore de cursos. O id do curso com problemas é {$a}.';
$string[ 'upgradeproblemcouldnotupdatecategory' ] = 'Não foi possível modificar o curso {$a->name} ({$a->id}).';
$string[ 'upgradeproblemunknowncategory' ]        = 'Problema atualizando cursos de questões. O curso {$a->id} aponta para {$a->parent},que não existe. O problema foi resolvido apontando para um curso existente.';
