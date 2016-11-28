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
 * Strings for component 'format_menutopic', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   format_menutopic
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'csstemplate_help' ]          = 'Permite incluir estilos CSS personalizados que você pode definir uma aparência personalizada gráfico para o menu <p> Um exercício simples de usar o modelo de estilos será: </p><div style=" white-space:nowrap; font-size: 12px; border: 1px solid #666; padding: 5px; background-color: #CCC"> # Id_menu_box {margin-bottom: 10px;} </div><p> Com o código anterior, o menu é separada 10px partir do fundo, de acordo com a posição definida para o menu. </p><p> <strong>Nota:</strong> <ul><li> O identificador (ID) da camada (div) que o menu contém é <strong>id_menu_box.</strong> Estes dados podem ser úteis para manipular os estilos de menu sem afectar os outros componentes da página. </li><li> É possível que, para fazer alterações nos estilos, eles não conseguem visualizar imediatamente na disciplina. Se assim for, ele deve atualizar a página. Em muitos navegadores, você pode fazê-lo pressionando a combinação de teclas Ctrl + F5. </li></ul></p>';
$string[ 'displaynousedmod' ]          = 'Mostrar redisciplinas não incluídos no modelo';
$string[ 'displaynousedmod_help' ]     = 'Sobre: Mostrar redisciplinas não incluídos no modelo';
$string[ 'icons_templatetopic' ]       = 'Mostrar ícones em nomes de redisciplinas';
$string[ 'icons_templatetopic_help' ]  = 'Sobre: Mostrar ícones em nomes de redisciplinas';
$string[ 'jstemplate_help' ]           = 'Permite definir o código JavaScript que irá trabalhar sobre o menu ou a página. Ele pode ser útil para definir comportamentos adicionais para o menu, ou mesmo a estrutura de um menu diferente do padrão. <p> <b>Notas:</b> <ul><li> O <b>id_menu_box</b> nome corresponde ao identificador div que contém o menu em HTML criado como aninhar listas, geralmente com as tags HTML: ul li y. </li><li> É possível que, para fazer alterações no JavaScript, eles não conseguem visualizar imediatamente na disciplina. Se assim for, ele deve atualizar a página. Em muitos navegadores, você pode fazê-lo pressionando a combinação de teclas Ctrl + F5. </li></ul></p>';
$string[ 'page-course-view-topics' ]   = 'Qualquer página da disciplina principal em formato menutopic';
$string[ 'page-course-view-topics-x' ] = 'Qualquer página da disciplina no formato de menutopic';
$string[ 'tree_struct_help' ]
                                       = '<p> A base do menu é uma estrutura de árvore onde cada ramo ou folha de árvore pode ser associado a uma URL. O URL pode ser externa ou directamente ligada a uma secção da disciplina. Ao assinar a primeira vez para definir a árvore de secção, a plataforma sugere uma estrutura linear, sem ramificações, com uma quantidade de folhas de igual ao número de secções da disciplina. <P />
<p> Para alterar as propriedades de uma folha, clique em seu nome, e ela vai aparecer uma janela onde você pode: realizar algumas ações para mover as folhas, eliminar a folha selecionada, crie uma nova planilha ou atualizar os dados da folha de <. / p>
<p> Entre as opções que você pode fazer sobre a folha são: </ p>
<ul>
    <li> <strong> Mover uma folha para a esquerda: </ strong> é feito selecionando a seta apontando para a esquerda. Converte a folha na irmã da folha que contém (folha de pai). Ele só está disponível se a folha é filha de uma outra folha, nunca se está no ramo principal. </ Li>
    <li> <strong> Mover uma folha para a direita: </ strong> é feito selecionando a seta apontando para a direita. Converte para a folha da filha da folha anterior. Ela não está disponível para a primeira folha do ramo principal. </ Li>
    <li> <strong> uma folha: </ strong> é feito selecionando a seta apontando para cima. Altera a ordem de uma folha de colocá-lo antes de seu irmão inmediately anterior. Ela não está disponível para a primeira folha de um ramo. </ Li>
    <li> <strong> baixo de uma folha: </ strong> é feito selecionando a seta apontando para baixo. Altera a ordem de uma folha de colocá-lo depois de seu irmão inmediately seguinte. Ela não está disponível para a última folha de um ramo. </ Li>
    <li> <strong> Excluir uma folha:. </ strong> é feito selecionando os Exclui X. a folha selecionada e todas as folhas que contém </ li>
</ Ul>
<p> O <strong> opção "Adicionar uma nova folha" </ strong> cria uma cópia da folha de selecionado e adiciona-la como sua filha. Filha folhas não são copiadas, apenas o selecionado. </ P>
<p> O <strong> opção "Alterar dados da folha de" </ strong> atualiza os valores selecionados para as propriedades da folha selecionada. As propriedades que podem ser modificados são: </ p>
<ul>
    <li> nome Folha <strong>:. </ strong> a marca que aparece para esta folha no menu </ li>
    <li> secção <strong> Alvo: </ strong> Se a folha é usada para uma secção de disciplina, esta opção indica que a secção será o seleccionado. Se uma seção é selecionada, uma URL externa não pode ser selecionado para que direcionam o link da opção no menu. </ Li>
    <li> <strong> URL: </ strong> indica um URL para o qual fará referência à opção de menu. É só podem ser especified se uma secção alvo não foi seleccionada. </ Li>
    <li> alvo ligação <strong>: </ strong> Indica se você deseja abrir o link, a seção ou a URL externa, em uma nova janela ou na mesma janela. Se uma opção não for selecionada, o link será aberto na mesma janela. </ Li>
</ Ul>
<p> As mudanças realizadas no menu são armazenadas somente para selecionar o <strong> opção "Salvar alterações" </ strong> na parte inferior da página. </ p>';
