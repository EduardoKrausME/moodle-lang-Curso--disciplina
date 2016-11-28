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
 * Strings for component 'hotpot', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   hotpot
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addquizchain_help' ]
                                  = 'Todas as questões em um conjunto ou cadeia de questões/testes devem ser adicionados?

**Não**
: Apenas uma questão será adicionada a disciplina

**Sim**
: Se o arquivo-fonte é um arquivo de **Questões**, ele é tratado como o início de uma conjunto de questões e todos as questões da cadeia serão adicionadas a disciplina com configurações idênticas. Cada questão deve ter um link para o arquivo seguinte na cadeia.

Se o arquivo de origem é uma **pasta**, todas as questões reconhecíveis na pasta serão adicionadas a disciplina para formar uma cadeia de questões com especificações idênticas.

Se o arquivo de origem é um **arquivo unitário**, como um arquivo externo de Hot Potatoes ou index.html, questões contidas no arquivo serão adicionadas a disciplina como uma cadeia de questões com configurações idênticas.';
$string[ 'configmaxeventlength' ] = 'Se um HotPot tem uma data especificada  tanto para ser aberto quanto para ser fechado, e a diferença entre as duas datas  é maior do que o número de dias aqui especificado, então serão adicionados dois eventos separados ao calendário da disciplina. Para períodos mais curtos, ou quando apenas um momento for especificado, apenas um evento do calendário será adicionado. Se não houver qualquer especificação de tempo, nenhum evento será adicionado ao calendário.';
$string[ 'entrycmcourse' ]        = 'Atividade prévia neste disciplina';
$string[ 'entrycm_help' ]
                                  = 'Esta configuração especifica uma atividade Moodle e uma classificação mínima para esta atividade a qual deve ser completada antes que este Quizport possa ser iniciado.

O professor pode selecionar uma atividade específica, ou uma das seguintes configurações de uso geral:

* Atividade prévia neste disciplina
* Atividade prévia nesta seção
* HotPot anterior neste disciplina
* HotPot anterior nesta seção';
$string[ 'entrycmsection' ]       = 'Atividade prévia nesta seção de disciplina';
$string[ 'entryhotpotcourse' ]    = 'Atividade Hotpotatoes anterior neste disciplina';
$string[ 'entryhotpotsection' ]   = 'Atividade Hotpotatoes anterior nesta seção de disciplina';
$string[ 'exitcmcourse' ]         = 'Próxima atividade neste disciplina';
$string[ 'exitcm_help' ]
                                  = 'Esta configuração especifica uma atividade Moodle para ser feita após a conclusão deste questionário.

O professor pode selecionar uma atividade específica, ou uma das seguintes configurações de uso geral:

* Próxima atividade neste disciplina
* Próxima atividade nesta seção
* HotPot seguinte neste disciplina
* Próximo HotPot  nesta seção

Se outras opções de saída de página estiverem desativadas, o aluno irá direto para a próxima atividade. Caso contrário, será mostrado ao aluno um link para levá-lo para a atividade seguinte, quando ele estiver pronto.';
$string[ 'exitcmsection' ]        = 'Próxima atividade nesta seção de disciplina';
$string[ 'exit_course' ]          = 'Disciplina';
$string[ 'exit_course_text' ]     = 'Retornar à página principal da disciplina';
$string[ 'exit_grades_text' ]     = 'Veja suas notas nesse disciplina até agora';
$string[ 'exithotpotcourse' ]     = 'Próximo HotPot neste disciplina';
$string[ 'exithotpotsection' ]    = 'Próximo HotPot nesta seção de disciplina';
$string[ 'exit_links_help' ]
                                  = 'Estas opções ativam e desativam a exibição de certos links de navegação na página de saída de um HotPot .

 ** Repetir** : Se forem permitidas tentativas múltiplas neste HotPot e o estudante ainda tem algumas tentativas restantes, um link para permitir que o aluno repita o HotPot será exibido

 ** Índice ** : Se marcado, um link para a página de índice do HotPot será exibido.

 ** Disciplina ** : Se marcado, um link para a página da disciplina do Moodle será exibido.

 ** Notas **  : Se marcado, um link para o livro de notas do Moodle será exibido.';
$string[ 'exitpage_help' ]
                                  = 'Deverá ser exibida uma página de saída após o teste HotPot ser concluído?

** Sim ** : Os alunos receberão uma página de saída quando o HotPot for concluído. O conteúdo da página de saída será determinado pelas configurações de retorno e links da página de saída do HotPot.
** Não ** : Não será exibida uma página de saída para os alunos. Em vez disso, eles poderão seguir imediatamente para a próxima atividade ou retornar à página da disciplina Moodle.';
$string[ 'modulename_help' ]
                                  = 'O módulo HotPot permite aos professores distribuirem materiais de aprendizagem  interativos  aos seus alunos via Moodle e visualizar relatórios sobre as respostas e resultados obtidos pelo alunos . Uma atividade HotPot única consiste em uma página de entrada opcional, um exercício de aprendizagem único, e uma página de saída opcional. O exercício de aprendizagem pode ser uma página web estática ou uma página web interativa que oferece aos estudantes redisciplinas de texto, áudio e visuais e registra suas respostas. O exercício de aprendizagem é criado no computador do professor, utilizando software de autoria e, em seguida, enviado para o Moodle. A atividade HotPot do Moodle, pode trabalhar com exercícios criados com os seguintes softwares de autoria:

* Hot Potatoes (versão 6)
* Qedoc
* Xerte
* iSpring
* Qualquer editor HTML';
$string[ 'navigation_help' ]
                                  = 'Esta configuração especifica a navegação utilizada nas questões:

**Barra de navegação Moodle**
:A barra de navegação irá aparecer na mesma janela das questões no topo da página

**Frame de navegação Moodle**
:A barra de navegação será exibida em uma janela separada no topo das questões

**Página web incorporada**
:A barra de navegação Moodle será exibida junto às questões Hot Potatoes incorporada na janela

**Ajudas originais da navegação**
:As questões serão exibidas junto aos botões de navegação

**Um botão Give Up**
: As questões serão exibidas com um simples botão "Give Up" no topo da página

**Nenhum**
:As questões serão exibidas sem nenhuma ajuda de navegação todas as questões serão respondidas corretamente, dependendo da configuração "Exibir nova questão", Moodle irá retornar a página da disciplina ou a próxima questão.';
$string[ 'sourcefile_help' ]
                                  = 'Esta configuração especifica o arquivo que contém o conteúdo a ser mostrado para os alunos.
Normalmente, o arquivo fonte é criado fora do Moodle, e em seguida enviado para a área de arquivos de um disciplina de Moodle. Pode ser um arquivo HTML, ou outro tipo de arquivo que foi criado com algum software de autoria, tais como o Hot Potatoes ou Qedoc.

O arquivo fonte deve ser especificado como uma pasta e seu caminho na área de arquivos da disciplina Moodle , ou pode ser uma url começando com http:// ou https://

Para materiais Qedoc, o arquivo fonte deve ser a url de um módulo Qedoc que foi carregado para o servidor Qedoc.
* Por exemplo, http://www.qedoc.net/library/ABCDE_123.zip
* Para informações sobre como carregar módulos Qedoc ver: [documentação Qedoc: Uploading_modules] (http://www.qedoc.org/en/index.php?title=Uploading_modules)';
$string[ 'studentfeedback_help' ]
                                  = 'Se ativado, um link para uma janela pop-up de feedback será exibido sempre que os alunos clicarem sobre o botão "Verificar".
A janela de feedback permite aos estudantes para discutirem este teste com seu professor e colegas em uma das seguintes formas:

**Página Web ** : Requer URL da página web, por exemplo http://myserver.com/feedbackform.html

**Formulário de feedback ** : Requer URL do script do formulário, por exemplo http://myserver.com/cgi-bin/formmail.pl

**Fórum Moodle ** : O índice do fórum para a disciplina será exibido

**Mensagens Moodle ** : A janela de mensagens instantâneas do Moodle será exibida. Se a disciplina tiver vários professores, o aluno deverá selecionar um professor antes da janela de mensagens ser exibida.';
