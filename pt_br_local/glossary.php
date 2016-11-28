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
 * Strings for component 'glossary', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   glossary
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'allcategories' ]             = 'Todas os cursos';
$string[ 'cantinsertcat' ]             = 'Não é possível inserir um curso';
$string[ 'cantinsertrel' ]             = 'Não é possível inserir uma relação curso-item';
$string[ 'categories' ]                = 'Cursos';
$string[ 'category' ]                  = 'Curso';
$string[ 'categorydeleted' ]           = 'Curso cancelada';
$string[ 'categoryview' ]              = 'Por curso';
$string[ 'deletingnoneemptycategory' ] = 'O cancelamento deste curso não provoca o cancelamento dos itens que ela contém. Estes serão classificados como não incluídos em nenhum curso';
$string[ 'duplicatecategory' ]         = 'Curso duplicada';
$string[ 'editcategories' ]            = 'Editar cursos';
$string[ 'entryusedynalink_help' ]     = 'Se os links automáticos no nível do site estiverem habilitados e esta checkbox for marcada, a entrada será automaticamente linkada em qualquer lugar que as palavras e frases deste conceito aparecerem durante o restante da disciplina.';
$string[ 'eventcategorycreated' ]      = 'Curso foi criada';
$string[ 'eventcategorydeleted' ]      = 'Curso foi excluída';
$string[ 'eventcategoryupdated' ]      = 'Curso foi atualizada';
$string[ 'explainexport' ]             = 'Foi criado um novo arquivo.<br /> Baixe o arquivo em um espaço seguro. Você pode importar este arquivo neste disciplina ou em uma outra disciplina quando você quiser.';
$string[ 'glossary:managecategories' ] = 'Gerenciar cursos';
$string[ 'glossarytype_help' ]         = 'Um glossário principal é um glossário no qual as entradas de glossários secundários podem ser importadas. Só pode existir um glossário principal na disciplina. Se a importação de entradas de glossários não for necessária, todos os glossários na disciplina podem ser glossários secundários.';
$string[ 'importcategories' ]          = 'Importar cursos';
$string[ 'importedcategories' ]        = 'Cursos importadas';
$string[ 'isglobal_help' ]
                                       = '<p>Apenas os Administradores e usuários com capacidades ilimitadas no site podem configurar um glossário como global.</p>

<p>Estes glossários podem ser utilizados em todos as disciplinas.</p>

<p>Os links automáticos criados a partir dos itens de um glossário global incluem todas as páginas do site enquanto os links automáticos criados a partir de um glossário normal são presentes apenas nas páginas da disciplina específico associado àquele glossário</p>';
$string[ 'linkcategory' ]              = 'Fazer o link automático deste curso';
$string[ 'linkcategory_help' ]
                                       = '<P>Você pode definir se os nomes dos cursos, como os itens, geram links automaticamente ou não.</p>

<p>Os links que levam às cursos são sensíveis às diferenças entre maiúsculas e minúsculas, e consideram apenas palavras inteiras.</p>';
$string[ 'modulename_help' ]
                                       = 'O módulo glossário permite que os membros do fórum criem e mantenham uma lista de termos ou definições, como um dicionário.

Um professor pode permitir que arquivos sejam anexados as entradas no glossário. Imagens anexas são exibidas na entrada. Entradas podem ser pesquisadas ou navegadas alfabeticamente ou por curso, data ou autor. Entradas podem ser aprovadaspor padrão ou necessário aprovação por um professor antes que sejam visualizadas por alguém.

Caso o filtro auto-link, do glossário,  esteja habilitado
As entradas no glossário serão linkadas ao conceito ou frase no local onde elas aparecem na disciplina.

Um professor pode permitir comentários ou entradas. Entradas podem também ser avaliadas por professores ou estudantes (avaliação por pares). Avaliações podem também ser agregadas para formar a nota final que será registrada no livro de notas.

Glossários tem muitos usos, como por exemplo:

* Um banco colaborativo de termos chaves
* Um espaço "apresente-se" onde novos estudantes adicionam seus nomes e detalhes pessoais
* Centralização de dicas ou melhores práticas sobre algum item
* Uma área de compartilhamento de vídeos, imagens ou arquivos de som
* Como redisciplina de revisão de fatos a serem lembrados';
$string[ 'modulename_help' ]
                                       = 'O módulo glossário permite que os membros do fórum criem e mantenham uma lista de termos ou definições, como um dicionário.

Um professor pode permitir que arquivos sejam anexados as entradas no glossário. Imagens anexas são exibidas na entrada. Entradas podem ser pesquisadas ou navegadas alfabeticamente ou por curso, data ou autor. Entradas podem ser aprovadaspor padrão ou necessário aprovação por um professor antes que sejam visualizadas por alguém.

Caso o filtro auto-link, do glossário,  esteja habilitado
As entradas no glossário serão linkadas ao conceito ou frase no local onde elas aparecem na disciplina.

Um professor pode permitir comentários ou entradas. Entradas podem também ser avaliadas por professores ou estudantes (avaliação por pares). Avaliações podem também ser agregadas para formar a nota final que será registrada no livro de notas.

Glossários tem muitos usos, como por exemplo:

* Um banco colaborativo de termos chaves
* Um espaço "apresente-se" onde novos estudantes adicionam seus nomes e detalhes pessoais
* Centralização de dicas ou melhores práticas sobre algum item
* Uma área de compartilhamento de vídeos, imagens ou arquivos de som
* Como redisciplina de revisão de fatos a serem lembrados';
$string[ 'usedynalink_help' ]
                                       = '<P>Esta opção habilita a criação automática de links que levam aos itens do glossário sempre que
   as palavras ou frases definidas como itens estiverem presentes nos textos da disciplina. Isto inclui as mensagens do fórum, materiais da disciplina, sumários das semanas, diários, etc.</p>

<p>Se você não quiser que um texto tenha links, você deve adicionar os tags  &lt;nolink> e &lt;/nolink> ao redor do texto.</p>

<p>Os nomes dos cursos também dão origem a links nos textos.</p>';
$string[ 'usedynalink_help' ]
                                       = '<P>Esta opção habilita a criação automática de links que levam aos itens do glossário sempre que
   as palavras ou frases definidas como itens estiverem presentes nos textos da disciplina. Isto inclui as mensagens do fórum, materiais da disciplina, sumários das semanas, diários, etc.</p>

<p>Se você não quiser que um texto tenha links, você deve adicionar os tags  &lt;nolink> e &lt;/nolink> ao redor do texto.</p>

<p>Os nomes dos cursos também dão origem a links nos textos.</p>';
