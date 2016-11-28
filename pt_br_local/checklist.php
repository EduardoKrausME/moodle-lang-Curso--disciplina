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
 * Strings for component 'checklist', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   checklist
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'autopopulate' ]           = 'Mostrar módulos da disciplina no checklist';
$string[ 'autopopulate_help' ]
                                    = 'Isto irá adicionar automaticamente ao checklist  todos os redisciplinas e atividades na disciplina atual.<br />
Este checklist será atualizado automaticamente ao abrir a sua página de configurações.<br />
Itens podem ser ocultos, clicando no ícone ao lado deles.<br />
Para remover os itens acrescentados automaticamente, mude esta opção de volta para "Não", e clique no "Remover itens da disciplina" nas configurações.';
$string[ 'autoupdate_help' ]
                                    = 'Isso verificará automaticamente os itens em sua lista quando você completar a atividade relevante na disciplina. <br />
\'Completando\' uma atividade varia de uma atividade para outra - \'visualizar\' um redisciplina, \'submeter\' um questionário ou tarefa, \'postar\' em um fórum ou participar de um bate-papo, etc. <br />
Se o rastreamento de conclusão é ligado para uma determinada atividade, que será usada para assinalar fora do item na lista <br />
Para obter detalhes sobre exatamente o que causa uma atividade a ser marcada como \'completa\', pergunte ao seu administrador do site para procurar no arquivo
\'mod/checklist/autoupdate.php\'<br />
Nota: pode demorar um pouco para a atividade do aluno ser refletida em sua lista de verificação (ao usar o acompanhamento de conclusão)';
$string[ 'emailoncompletebody' ]    = 'Usuário {$a->user} concluiu o checklist \'{$a->checklist}\' na disciplina \'{$a->coursename}\' . Veja o checklist aqui:';
$string[ 'emailoncompletebodyown' ] = 'Concluiu o checklist  \'{$a->checklist}\' na disciplina \'{$a->coursename}. Veja o checklist aqui:';
$string[ 'emailoncomplete_help' ]
                                    = 'Quando uma lista de verificação é completada, um e-mail de notificação será enviado: para o aluno que completá-la, para todos os professores na disciplina ou para ambos.
<br />
Um administrador pode controlar quem recebe esse e-mail usando a capacidade \'mod:checklist/emailoncomplete\' - por padrão todos os professores e professores não-editores possuem essa capacidade.';
$string[ 'importfromcourse' ]       = 'Toda disciplina';
$string[ 'modulename_help' ]        = 'Um "Checklist" permite criar uma lista de progresso a partir dos redisciplinas e atividades existentes na disciplina.';
$string[ 'removeauto' ]             = 'Remover itens da disciplina';
