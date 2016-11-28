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
 * Strings for component 'quiz', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   quiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addarandomquestion_help' ]
                                                = 'Quando uma pergunta aleatória é adicionada, isso resulta em uma questão escolhida aleatoriamente a partir do curso que está sendo inserida no questionário. Isto significa que diferentes alunos poderão receber uma seleção diferente de perguntas, e quando um questionário permite várias tentativas, para cada uma delas é possível conter uma nova seleção de perguntas.
';
$string[ 'addingquestions' ]
                                                = 'Neste lado da página você administra a sua base de dados de questões. As questões são organizadas em cursos e podem ser usadas por qualquer questionário deste disciplina ou de outras disciplinas.
<br /><br />Depois de selecionar ou criar um curso você poderá criar ou editar questões. Você pode selecionar qualquer destas questões para adicionar ao seu questionário que se encontra no outro lado desta página.';
$string[ 'addingquestions' ]
                                                = 'Neste lado da página você administra a sua base de dados de questões. As questões são organizadas em cursos e podem ser usadas por qualquer questionário deste disciplina ou de outras disciplinas.
<br /><br />Depois de selecionar ou criar um curso você poderá criar ou editar questões. Você pode selecionar qualquer destas questões para adicionar ao seu questionário que se encontra no outro lado desta página.';
$string[ 'addnewquestionsqbank' ]               = 'Adicionar perguntas à curso {$a->catname}: {$a->link}';
$string[ 'addrandomfromcategory' ]              = 'Adicionar perguntas aleatórias do curso';
$string[ 'backtocourse' ]                       = 'Voltar a disciplina';
$string[ 'browsersecurity_help' ]
                                                = 'Se a opção "Tela cheia pop-up com segurança JavaScript" estiver selecionada,

 * O teste só vai começar se o aluno tem um JavaScript habilitado no navegador.
* O questionário aparece em uma janela <em>pop-up</em> em tela cheia, que abrange todas as outras janelas e não tem controles de navegação
 * Estudantes são impedidos, na medida do possível, de usar os redisciplinas como copiar e colar.';
$string[ 'cannotcreatepath' ]                   = 'Perdisciplina não pode ser criado ({$a})';
$string[ 'categoryadded' ]                      = 'O curso \'{$a}\' foi acrescentada';
$string[ 'categorydeleted' ]                    = 'O curso \'{$a}\' foi cancelada';
$string[ 'categorynoedit' ]                     = 'O seu perfil de usuário não permite a edição no curso \'{$a}\'.';
$string[ 'categoryupdated' ]                    = 'O curso foi atualizada com sucesso';
$string[ 'containercategorycreated' ]           = 'Este curso foi criada para arquivar todas os cursos que foram movidas para o nível do site principal pelas seguintes razões:';
$string[ 'createcategoryandaddrandomquestion' ] = 'Criar curso e adicionar questão aleatória';
$string[ 'datasetdefinitions' ]                 = 'Definições de conjunto de dados reutilizáveis em curso {$a}';
$string[ 'defaultinfo' ]                        = 'Curso predefinida para perguntas';
$string[ 'download' ]                           = 'Clique para baixar o arquivo de curso exportado';
$string[ 'downloadextra' ]                      = '(o arquivo pode ser encontrado também na pasta /quiz da seção arquivos da disciplina)';
$string[ 'editcategories' ]                     = 'Editar cursos';
$string[ 'editcategory' ]                       = 'Editar curso';
$string[ 'editcatquestions' ]                   = 'Editar questões do curso';
$string[ 'editingquiz_help' ]
                                                = 'Ao se criar um questionário, os conceitos principais são:

* O questionário contém perguntas que estejam em uma ou mais páginas
* O banco de questões, que armazena cópias de todas as perguntas organizadas em cursos
* Perguntas aleatórias - Um aluno recebe perguntas diferentes a cada tentativa de resposta ao questionário e estudantes diferentes podem obter diferentes perguntas.';
$string[ 'editqcats' ]                          = 'Editar cursos de questões';
$string[ 'emailconfirmbody' ]
                                                = 'Prezado(a) {$a->username},

obrigada pelo envio das suas respostas ao questionário \'{$a->quizname}\'
na disciplina \'{$a->coursename}\'
em {$a->submissiontime}.

Esta mensagem confirma o recebimento das suas respostas.

Você pode acessar o questionário em {$a->quizurl}.';
$string[ 'emailnotifybody' ]
                                                = 'Prezado(a) {$a->username},

{$a->studentname} completou o questionário
\'{$a->quizname}\' ({$a->quizurl})
da disciplina \'{$a->coursename}\'

Para rever a tentativa acesse {$a->quizreviewurl}.';
$string[ 'emailoverduebody' ]
                                                = 'Prezado {$a->studentname},

Você iniciou uma tentativa no queziontário \'{$a->quizname}\' na disciplina \'{$a->coursename}\' mas não finalizou a tentativa.

Se você pretende ainda finalizar essa tentativa, por favor retorne para {$a->attemptsummaryurl} e clique no botão de envio. Você precisa fazer isso antes de {$a->attemptgraceend}, caso contrário sua tentativa não será levada em conta.';
$string[ 'exportcategory' ]                     = 'exportar curso';
$string[ 'groupsnone' ]                         = 'Não há grupos neste disciplina';
$string[ 'importcategory' ]                     = 'importar curso';
$string[ 'importfilearea' ]                     = 'Importação do arquivo já presente na disciplina...';
$string[ 'import_help' ]
                                                = 'Esta função permite que você importe perguntas de arquivos externos de texto.

Se o arquivo contém caracteres em formato não-ASCII, você deverá usar a codificação UTF-8. Tenha especial cautela ao tratar com arquivos gerados por aplicativos do Microsoft Office, uma vez que estes geralmente usam codificação especial que não serão tratados adequadamente.

Formatos de importação e exportação são um redisciplina conectável. Outros formatos opcionais podem estar disponíveis na Modules and Plugins database.';
$string[ 'invalidcategory' ]                    = 'O ID do curso é inválido';
$string[ 'invalidsource' ]                      = 'O redisciplina não foi reconhecido como válido';
$string[ 'invalidsourcetype' ]                  = 'Tipo de redisciplina inválido';
$string[ 'nocategory' ]                         = 'Curso incorreta ou não especificada';
$string[ 'noquestionsnotinuse' ]                = 'Esta pergunta aleatória não está em uso, uma vez que a seu curso está vazia.';
$string[ 'notenoughrandomquestions' ]           = 'Não há questões suficientes no curso {$a->category} para criar a questão {$a->name} ({$a->id}).';
$string[ 'parentcategory' ]                     = 'Curso principal';
$string[ 'publishedit' ]                        = 'Você deve ter direitos de publicação de disciplinas para adicionar ou editar questões neste curso';
$string[ 'publishedit' ]                        = 'Você deve ter direitos de publicação de disciplinas para adicionar ou editar questões neste curso';
$string[ 'questioncats' ]                       = 'Cursos de questões';
$string[ 'questioninuse' ]                      = 'A pergunta \'{$a->questionname}\' é atualmente usada em:<br />{$a->quiznames}<br />A questão não será excluída destes questionários mas apenas dos cursos.';
$string[ 'randomfromcategory' ]                 = 'Pergunta aleatória do curso';
$string[ 'randomfromexistingcategory' ]         = 'Pergunta aleatória de um curso existente';
$string[ 'randomnosubcat' ]                     = 'Questões somente desse curso, não de suas subcursos';
$string[ 'randomquestionusinganewcategory' ]    = 'Pergunta aleatória utilizando um novo curso';
$string[ 'randomwithsubcat' ]                   = 'Perguntas deste curso e de suas subcursos';
$string[ 'recurse' ]                            = 'Incluir também as questões das sub-cursos';
$string[ 'savedfromdeletedcourse' ]             = 'Salvo do seguinte disciplina cancelado: "{$a}"';
$string[ 'selectcategory' ]                     = 'Selecionar curso';
$string[ 'showcategorycontents' ]               = 'Mostra o conteúdo do curso {$a->arrow}';
$string[ 'toomanyrandom' ]                      = 'O número de perguntas aleatórias requerido é superior ao conteúdo deste curso! ({$a})';
$string[ 'totalquestionsinrandomqcategory' ]    = 'Total de {$a} perguntas no curso.';
$string[ 'usedcategorymoved' ]                  = 'Este curso foi transferida ao nível do site porque é um curso compartilhada ainda em uso em outros questionários.';
$string[ 'youneedtoenrol' ]                     = 'Você deve se cadastrar neste disciplina antes de tentar responder este questionário';
