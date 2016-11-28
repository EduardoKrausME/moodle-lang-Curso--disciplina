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
 * Strings for component 'grades', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   grades
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addcategory' ]                                   = 'Adicionar curso';
$string[ 'addcategoryerror' ]                              = 'Não foi possível adicionar o curso';
$string[ 'aggregateoutcomes_help' ]                        = 'Se habilitado, os resultados de aprendizagem são incluídos na agregação de notas. Isto pode resultar num valor inesperado para o total de um curso de notas.';
$string[ 'aggregatesubcatsupgradedgrades' ]                = 'Nota: A definição de agregação "Aggregate incluindo subcursos" foi removida como parte de uma atualização do site. Desde "agregado incluindo subcursos" já foi usado neste disciplina, é recomendável que você reveja esta mudança no livro de notas.';
$string[ 'aggregatesubcatsupgradedgrades' ]                = 'Nota: A definição de agregação "Aggregate incluindo subcursos" foi removida como parte de uma atualização do site. Desde "agregado incluindo subcursos" já foi usado neste disciplina, é recomendável que você reveja esta mudança no livro de notas.';
$string[ 'aggregationcoefextra_help' ]
                                                           = 'Se a agregação for \'Soma das notas\' ou \'Média ponderada simples\' e a caixa de crédito extra for marcada, a nota máxima do item não será acrescentada à nota máxima do curso. Assim, será possível atingir a nota máxima do curso (ou notas maiores que o máximo, se permitido pelo administrador do ambiente) sem ter nota máxima em todos os itens com nota.

Se a forma de agregação for \'Média das notas (com créditos extra)\' e o crédito extra for um valor maior que zero, o crédito extra será o fator pelo qual será multiplicada a nota, antes de somá-la ao total, depois de calcular a média.';
$string[ 'aggregationcoefextrasum_help' ]
                                                           = '<p>Quando a soma das notas é utilizada como estratégia de agregação, um item pode ser considerado crédito extra no curso. Isto significa que a nota máxima do item não será adicionada à nota máxima do curso mas a nota do item, sim. Por exemplo></p>
<ul>
    <li>Item 1 tem valor entre 0-100</li>
    <li>Item 2 tem valor entre 0-75</li>
    <li>Item 1 tem a opção "crédito extra" selecionada, Item 2 não.</li>
    <li>Os dois itens pertencem à curso 1, que tem "soma das notas" como estratégia de agregação</li>
    <li>O total do curso 1\'s é entre 0-75</li>
    <li>Um estudante obtém a nota 20 no Item 1 e 70 no Item 2</li>
    <li>O total do curso 1 será 75/75 (20+70 = 90 mas o Item 1 é apenas um crédito extra e portanto aumenta o total até o máximo)</li>
</ul>';
$string[ 'aggregationcoefextraweight_help' ]
                                                           = '<p>Um valor maior que 0 trata esta nota como crédito extra durante a agregação. O número é o fator de multiplicação da nota antes que seja somado às outras notas mas o item não será contado na divisão. Por exemplo:</p>

<ul>
    <li>Item 1 é avaliado como 0-100 e o valor do "crédito extra" é 2</li>
    <li>Item 2 é avaliado como 0-100 e o valor do "crédito extra" é 0.0000</li>
    <li>Item 3 é avaliado como 0-100 e o valor do "crédito extra" é 0.0000</li>
    <li>Os 3 items pertencem à Curso 1, que tem a estratégia de agregação "Média das notas (com crédito extra)"</li>
    <li>Um estudante obtém a nota 20 no Item 1, 40 no Item 2 e 70 no Item 3</li>
    <li>O total do curso 1 será 95/100 pois 20*2 + (40 + 70)/2 = 95</li>
</ul>';
$string[ 'aggregationcoefweight_help' ]                    = 'O peso de um item é utilizado na agregação de notas para definir a influência ou importância de item quando comparado com os demais itens de nota de uma mesmo curso.';
$string[ 'aggregation_help' ]
                                                           = 'A agregação determina como as notas em um curso são combinadas, como:

* Média das notas - A soma de todas as notas dividida pelo número total  de notas
* Mediana das notas - A nota mediana quando as notas são ordenadas por tamanho
* Menor nota
* Maior nota
* Moda das notas - A nota que ocorre mais frequentemente
* Soma das notas - A soma de todos os valores de notas, com notas em escala sendo ignoradas';
$string[ 'aggregationposition_help' ]                      = 'Esta opção define se as colunas do curso da disciplina e total da disciplina serão mostradas no começo ou no fim dos relatórios do livro de notas.';
$string[ 'aggregationposition_help' ]                      = 'Esta opção define se as colunas do curso da disciplina e total da disciplina serão mostradas no começo ou no fim dos relatórios do livro de notas.';
$string[ 'allgrades' ]                                     = 'Todas as notas por curso';
$string[ 'averagesdisplaytype_help' ]                      = 'Esta configuração define se a média deve apresentada como um número real, uma porcentagem ou uma letra. Outra opção é utilizar o valor valor padrão definido no curso ou item de nota.';
$string[ 'categories' ]                                    = 'Cursos';
$string[ 'categoriesanditems' ]                            = 'Cursos e itens';
$string[ 'category' ]                                      = 'Curso';
$string[ 'categoryedit' ]                                  = 'Editar curso';
$string[ 'categoryname' ]                                  = 'Nome do curso';
$string[ 'categorytotal' ]                                 = 'Total do curso';
$string[ 'categorytotalname' ]                             = 'Nome para o total do curso';
$string[ 'choosecategory' ]                                = 'Selecione o curso';
$string[ 'contract' ]                                      = 'Contrair o curso';
$string[ 'contributiontocoursetotal' ]                     = 'Contribuição para o total da disciplina';
$string[ 'courseavg' ]                                     = 'Média da disciplina';
$string[ 'coursegradecategory' ]                           = 'Curso de notas da disciplina';
$string[ 'coursegradecategory' ]                           = 'Curso de notas da disciplina';
$string[ 'coursegradedisplaytype' ]                        = 'Tipo de exibição das notas da disciplina';
$string[ 'coursegradesettings' ]                           = 'Configuração de notas da disciplina';
$string[ 'coursename' ]                                    = 'Nome da disciplina';
$string[ 'coursescales' ]                                  = 'Escalas da disciplina';
$string[ 'coursesettings' ]                                = 'Configurações da disciplina';
$string[ 'coursesettingsexplanation' ]                     = 'Configurações da disciplina determinam como o livro de notas aparece para todos os participantes da disciplina.';
$string[ 'coursesiamtaking' ]                              = 'Disciplinas que estou cursando';
$string[ 'coursesiamteaching' ]                            = 'Disciplinas que estou lecionando';
$string[ 'coursetotal' ]                                   = 'Total da disciplina';
$string[ 'createcategory' ]                                = 'Criar curso';
$string[ 'createcategoryerror' ]                           = 'Não foi possível criar uma novo curso';
$string[ 'deletecategory' ]                                = 'Excluir curso';
$string[ 'dropxlowestwarning' ]                            = 'Se você usar Descartar X Piores, o cálculo considera como igual o valor dos pontos atribuídos a todos os demais itens do curso. Se os pontos atribuídos forem diferentes, o resultado será imprevisível.';
$string[ 'errornocategorisedid' ]                          = 'Impossível obter id sem curso!';
$string[ 'errornocourse' ]                                 = 'Impossível obter informações da disciplina';
$string[ 'errorupdatinggradecategoryaggregateonlygraded' ] = 'Erro ao atualizar a configuração \'Agregar só notas não vazias\' do curso de notas ID {$a->id}';
$string[ 'errorupdatinggradecategoryaggregateoutcomes' ]   = 'Erro ao atualizar a configuração \'Incluir resultados na agregação\' no curso de notas de ID {$a->id}';
$string[ 'errorupdatinggradecategoryaggregation' ]         = 'Erro ao atualizar o tipo de agregação do curso de notas de ID {$a->id}';
$string[ 'excluded_help' ]                                 = '<p>Se -excluído- estiver ativado, esta nota será excluída de qualquer agregação feita por um item ou curso de nota pai.</p>';
$string[ 'expand' ]                                        = 'Expandir curso';
$string[ 'extracreditwarning' ]                            = 'Se todos os itens forem atribuídos a um curso com créditos adicionais, estes serão removidos do cálculo da avaliação. Não existe, neste caso, uma nota final total';
$string[ 'gradebookcalculationswarning' ]
                                                           = 'Nota: Alguns erros foram detectados no cálculo das notas apresentadas no livro de notas. Se seu disciplina não começou ou está em andamento, recomenda-se que os erros sejam corrigidos clicando no botão abaixo, embora isso resultará na alteração de algumas notas. Se seu disciplina já foi encerrado e as notas enviadas, você provavelmente não quer corrigir o erro.

A versão mais atual é {$a->currentversion}; você está usando a versão {$a->gradebookversion} do livro de notas. Você pode ver uma lista das mudanças em <a href="{$a->url}">Mudanças no cálculo do livro de notas</a>.';
$string[ 'gradecategories' ]                               = 'Cursos de notas';
$string[ 'gradecategory' ]                                 = 'Curso de notas';
$string[ 'gradecategoryonmodform' ]                        = 'Curso de notas';
$string[ 'gradecategoryonmodform_help' ]                   = 'Selecione o curso de notas do livro de notas à qual esta atividade estará subordinada. Esta escolha tem impacto sobre a forma como as notas da atividade serão agregadas com as notas de outras atividades para compor a nota final da disciplina. Este curso pode ser alterada posteriormente, tanto aqui como diretamente no livro de notas.';
$string[ 'gradecategoryonmodform_help' ]                   = 'Selecione o curso de notas do livro de notas à qual esta atividade estará subordinada. Esta escolha tem impacto sobre a forma como as notas da atividade serão agregadas com as notas de outras atividades para compor a nota final da disciplina. Este curso pode ser alterada posteriormente, tanto aqui como diretamente no livro de notas.';
$string[ 'gradecategorysettings' ]                         = 'Configurações de curso de notas';
$string[ 'gradeoutcomescourses' ]                          = 'Resultado da aprendizagem de disciplinas';
$string[ 'gradepass_help' ]                                = 'Esta configuraãço determina a nota mínima para passar. O valor é usado na conclusão de atividades e da disciplina e no livro de notas, onde as notas que passaram so destacadas em verde e as que nao falharam em vermelho.';
$string[ 'gradepointdefault_validateerror' ]               = 'Essa configuração deve ser um número inteiro entre 1 e o máximo de pontos do curso.';
$string[ 'gradepointmax' ]                                 = 'Máximo de pontos do curso';
$string[ 'importcustom' ]                                  = 'Importar como resultados customizados (somente nesse disciplina)';
$string[ 'includescalesinaggregation_help' ]
                                                           = 'Você pode mudar se as escalas devem ser incluídas como números em todas as notas agregadas de todos os livros de notas de todos as disciplinas.
CUIDADO: alterar essa opção fará com que todas as notas agregadas sejam recalculadas.';
$string[ 'incorrectcourseid' ]                             = 'O ID da disciplina não era correto';
$string[ 'newcategory' ]                                   = 'Novo curso';
$string[ 'nocategories' ]                                  = 'Não foi possível encontrar ou adicionar cursos de nota neste disciplina';
$string[ 'nocategories' ]                                  = 'Não foi possível encontrar ou adicionar cursos de nota neste disciplina';
$string[ 'nocategoryname' ]                                = 'Nenhum nome de curso foi dado.';
$string[ 'nocategoryview' ]                                = 'Nenhum curso a ser mostrada por';
$string[ 'nocourses' ]                                     = 'Ainda não existem disciplinas';
$string[ 'nooutcomes' ]                                    = 'Os itens de resultados devem apontar para o resultado de um disciplina, mas não há resultados para esse disciplina. Deseja acrescentar um?';
$string[ 'noreports' ]                                     = 'Você não está inscrito, nem lecionando nas disciplinas disponíveis neste site.';
$string[ 'noscales' ]                                      = 'Os resultados devem apontar para uma escala de disciplina ou uma escala global, mas não há nenhuma. Deseja acrescentar uma?';
$string[ 'noselectedcategories' ]                          = 'nenhum curso foi selecionada.';
$string[ 'notenrolled' ]                                   = 'No momento você não está inscrito em nenhum disciplina.';
$string[ 'outcomeassigntocourse' ]                         = 'Atribuir um outro resultado para este disciplina';
$string[ 'outcomecategory' ]                               = 'Criar resultados no curso';
$string[ 'outcomecategorynew' ]                            = 'Novo curso';
$string[ 'outcome_help' ]                                  = 'Especificar o resultado que o item de nota vai representar no livro de notas. Somente resultaods associados a esse disciplina e ao site podem ser usados.';
$string[ 'outcomescourse' ]                                = 'Resultado da aprendizagem utilizados na disciplina';
$string[ 'outcomestandard_help' ]                          = '<p>Um Resultado padrão fica disponível a nível do site, para todos as disciplinas.</p>';
$string[ 'overridecat' ]                                   = 'Permitir que a notas de curso sejam substituídas manualmente';
$string[ 'overridecat_help' ]                              = 'Desabilitar essa configuração faz com que seja impossível para os usuários substituir notas dos cursos.';
$string[ 'parentcategory' ]                                = 'Curso pai';
$string[ 'recovergradesdefault_help' ]                     = 'Por padrão recuperar notas antigas ao reinscrever um aluno em um disciplina';
$string[ 'removeallcourseitems' ]                          = 'Remova todos os itens e cursos';
$string[ 'removeallcourseitems_help' ]                     = 'Se marcada, todas os cursos e itens de nota que foram adicionados manualmente ao livro de notas serão excluídos, juntamente com as notas e os dados que foram substituídos, excluídos, escondidos e com notas trancadas. Apenas itens de nota associados às atividades permanecerão.';
$string[ 'seeallcoursegrades' ]                            = 'Ver todas as notas de disciplina';
$string[ 'setcategories' ]                                 = 'Definir cursos';
$string[ 'setcategorieserror' ]                            = 'É necessário definir cursos para o seu disciplina antes de atribuir pesos às mesmas.';
$string[ 'setcategorieserror' ]                            = 'É necessário definir cursos para o seu disciplina antes de atribuir pesos às mesmas.';
$string[ 'showcalculations_help' ]                         = 'Mostrar ícones da calculadora perto de cada item de nota e cada curso, dicas para os itens calculados e um indicador visual para a coluna calculada.';
$string[ 'showcontributiontocoursetotal' ]                 = 'Mostrar contribuição para o total da disciplina';
$string[ 'showcontributiontocoursetotal_help' ]            = 'Mostrar uma coluna adicional contendo a contribuição calculada para o total da disciplina?';
$string[ 'subcategory' ]                                   = 'Curso normal';
$string[ 'sumofgradesupgradedgrades' ]                     = 'Nota: O método de agregação "Soma das notas" foi alterado para "Natural", como parte de uma atualização do site. Uma vez que "Soma das notas" era usado anteriormente neste disciplina, é recomendável que você reveja esta mudança no Livro de notas.';
$string[ 'topcategory' ]                                   = 'Super curso';
$string[ 'unenrolledusersinimport' ]                       = 'Essa importação incluiu as seguintes notas para usuários ainda não inscritos na disciplina: {$a}';
$string[ 'usedcourses' ]                                   = 'Disciplinas utilizados';
$string[ 'weightcourse' ]                                  = 'Usar médias ponderadas nesse disciplina';
$string[ 'weight_help' ]                                   = 'Valor usado para determinar o valor relativo dos vários itens de nota de um curso ou disciplina.';
$string[ 'weight_help' ]                                   = 'Valor usado para determinar o valor relativo dos vários itens de nota de um curso ou disciplina.';
