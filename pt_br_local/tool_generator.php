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
 * Strings for component 'tool_generator', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   tool_generator
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'courseexplanation' ]        = 'Esta ferramenta cria disciplinas de teste padrão que incluem muitas seções, atividades e arquivos. Este destina-se a fornecer uma medida padronizada para verificar a confiabilidade e o desempenho dos vários componentes do sistema (como backup e restauração). Este teste é importante porque houve muitos casos anteriores, onde, diante de casos de uso da vida real (por exemplo, um disciplina com 1.000 atividades), o sistema não funciona. Disciplinas criados usando esse redisciplina podem ocupar uma grande quantidade de banco de dados e espaço em sistema de arquivos (dezenas de gigabytes). Você terá de apagar as disciplinas (e esperar por várias corridas de limpeza) para liberar esse espaço novamente. ** Não utilize esse redisciplina em um sistema vivo **. Use somente em um servidor desenvolvedor. (Para evitar o uso acidental, este redisciplina está desativado, a menos que você também tenha selecionado nível de depuração desenvolvedor.)';
$string[ 'coursewithoutusers' ]       = 'A disciplina selecionado não tem usuários';
$string[ 'createcourse' ]             = 'Criar disciplina';
$string[ 'creating' ]                 = 'Criando disciplina';
$string[ 'error_nocourses' ]          = 'Não há disciplinas para gerar o plano de teste';
$string[ 'error_noforumdiscussions' ] = 'A disciplina selecionado não contém discussões em fórums';
$string[ 'error_noforuminstances' ]   = 'A disciplina selecionado não contém instâncias do módulo forum';
$string[ 'error_noforumreplies' ]     = 'A disciplina selecionado não contém respostas nos fóruns';
$string[ 'error_nonexistingcourse' ]  = 'A disciplina especificado não existe';
$string[ 'error_nopageinstances' ]    = 'A disciplina selecionado não contém instâncias do módulo página';
$string[ 'fullname' ]                 = 'Disciplina teste: {$a->size}';
$string[ 'maketestcourse' ]           = 'Fazer disciplina de teste';
$string[ 'notenoughusers' ]           = 'A disciplina selecionado não tem usuários suficientes';
$string[ 'progress_coursecompleted' ] = 'Disciplina concluído ({$a}s)';
$string[ 'progress_createcourse' ]    = 'Criando disciplina {$a}';
$string[ 'progress_enrol' ]           = 'Inscrevendo usuários na disciplina ({$a})';
$string[ 'sitesize_0' ]               = 'XS (~ 10MB; três disciplinas, criado em ~ 30 segundos)';
$string[ 'sitesize_1' ]               = 'S (~ 50MB; oito disciplinas, criados em aproximadamente 2 minutos)';
$string[ 'sitesize_2' ]               = 'M (~ 200MB; 73 disciplinas, criado em ~ 10 minutos)';
$string[ 'sitesize_3' ]               = 'L (~ 1\'5GB; 277 disciplinas, criado em ~ 1\'5 horas)';
$string[ 'sitesize_4' ]               = 'XL (~ 10GB; 1065 disciplinas, criados em ~ 5 horas)';
$string[ 'sitesize_5' ]               = 'XXL (~ 20GB; 4177 disciplinas, criados em ~ 10 horas)';
$string[ 'size' ]                     = 'Tamanho da disciplina';
$string[ 'targetcourse' ]             = 'Testar objetivo da disciplina';
$string[ 'testplanexplanation' ]
                                      = 'Esta ferramenta cria um arquivo de plano de teste JMeter junto com o arquivo de credenciais do usuário.

Este plano de teste é projetado para trabalhar junto com {$a}, o que torna mais fácil para executar o plano de teste em um ambiente específico Moodle, reúne informações sobre as corridas e compara os resultados, assim você terá que baixá-lo e usá-lo no test_runner.sh script ou siga as instruções de instalação e uso.

Você precisa definir uma senha para os usuários da disciplina em config.php (por exemplo $CFG->tool_generator_users_password \'moodle\';). Não há valor padrão para esta senha para evitar usos não-intencionais da ferramenta. Você precisa usar a opção de atualização de senhas no caso dos usuários de seus disciplinas terem outras senhas ou elas forem geradas por tool_generator mas sem definir uma $CFG->tool_generator_users_password valor.

É parte do tool_generator por isso funciona bem com as disciplinas gerados pelas disciplinas e os geradores de site, ele também pode ser usado com qualquer disciplina que contenha, pelo menos:

* usuários inscritos suficientes (depende do tamanho do plano de teste que você selecionar) com a redefinição de senha para \'moodle\'
* Uma instância módulo página
* Uma instância módulo fórum com pelo menos um debate e uma resposta

Você pode querer considerar a sua capacidade de servidores durante a execução de planos de teste grandes como a quantidade de carga gerada pelo JMeter pode ser especialmente grande . O período de construção foi ajustado de acordo com o número de segmentos (usuários) para reduzir este tipo de questões, mas a carga ainda é enorme.

** Não execute o plano de teste em um sistema vivo **. Este redisciplina só cria os arquivos para alimentar JMeter, portanto, não é perigoso por si só, mas você**NUNCA**  deve executar este plano de teste em um local de produção.';
$string[ 'updateuserspassword' ]      = 'Atualizar senha dos usuários da disciplina';
$string[ 'updateuserspassword_help' ] = 'JMeter precisa fazer login como os usuários da disciplina, você pode definir a senha de usuários usando $CFG->tool_generator_users_password em config.php; essa configuração atualiza a senha do usuário de acordo com a disciplina $CFG->tool_generator_users_password. Ele pode ser útil no caso de você estiver usando um disciplina não gerada por tool_generator ou $CFG->tool_generator_users_password não foi definido quando criou as disciplinas de teste.';
