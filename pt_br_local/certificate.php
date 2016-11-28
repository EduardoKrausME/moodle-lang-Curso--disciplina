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
 * Strings for component 'certificate', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   certificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'completiondate' ]         = 'Conclusão de Disciplina';
$string[ 'coursegrade' ]            = 'Notas da disciplina';
$string[ 'coursename' ]             = 'Disciplina';
$string[ 'coursetimereq' ]          = 'Requer tempo mínimo de disciplina';
$string[ 'coursetimereq_help' ]     = 'Digite aqui a quantidade mínima de tempo, em minutos, que um estudante precisa estar logado na disciplina para que ele esteja apto a receber o certificado.';
$string[ 'delivery_help' ]          = 'Escolha aqui como você gostaria que seus alunos obtenham o seu certificado. Abrir no navegador: Abre o certificado em uma nova janela do navegador. Força Download: Abre a janela do navegador de download de arquivos. Certificado e-mail: Escolhendo esta opção envia o certificado para o aluno como um anexo de e-mail. Depois que um usuário recebe seu certificado, se clicar no link certificado da página principal da disciplina, eles vão ver a data em que recebeu o seu certificado e será capaz de rever o seu certificado recebido.';
$string[ 'incompletemessage' ]      = 'Para fazer o download do certificado, você deve primeiro preencher todas as atividades necessárias. Por favor retorne para a disciplina para concluí-lo.';
$string[ 'nocertificatesreceived' ] = 'Ainda não recebeu os certificados da disciplina.';
$string[ 'printdate_help' ]         = 'Esta é a data que será impressa, se uma data de impressão é selecionado. Se a data de conclusão da disciplina é selecionada, mas o estudante não tenha concluído a disciplina, a data de recebimento será impresso. Você também pode optar por imprimir a data com base em quando uma atividade foi graduada. Se um certificado for emitido antes que a atividade é classificada, a data de recebimento será impresso.';
$string[ 'printgrade_help' ]        = 'Você pode escolher qualquer item de nota do quadro de nota disponível na disciplina, para imprimir a nota do usuário recebida para esse item no certificado. Os itens de nota são listados na ordem em que aparecem no quadro de nota. Escolha o formato da nota abaixo.';
$string[ 'printoutcome_help' ]      = 'Você pode escolher qualquer resultado de um disciplina para imprimir o resultado e os usuários que obtiveram esse resultado. Um exemplo pode ser: Resultado da Atribuição: Proficiente.';
$string[ 'printteacher_help' ]      = 'Para imprimir o nome do professor no certificado, defina o papel do professor no nível de módulo. Faça isso se, por exemplo, você tem mais de um professor para a disciplina ou se você tiver mais de um certificado na disciplina e que pretende imprimir nomes diferentes de professores em cada certificado. Clique para editar o certificado, em seguida, clique na guia papéis designados localmente. Em seguida, atribua a função de Professor (professor autor) para o certificado (não tem que ser um professor na disciplina - você pode atribuir essa função a qualquer um). Esses nomes serão impressos no certificado para o professor.';
$string[ 'reportcert_help' ]        = 'Se você escolher sim aqui, então a data de recebimento desse certificado, o número de código, e o nome da disciplina serão mostrados nos relatórios de certificado do usuário. Se você optar por imprimir uma nota sobre este certificado, então essa nota também será mostrada no certificado do relatório.';
$string[ 'requiredtimenotmet' ]     = 'Você deve utilizar pelo menos um mínimo de {$a->requiredtime} minutos na disciplina antes de poder receber esse certificado';
$string[ 'savecert_help' ]          = 'Se você escolher esta opção, então uma cópia do arquivo pdf do certificado de cada usuário é salvo nos arquivos da disciplina na pasta moddata para esse certificado. Um link para certificado salvo de cada usuário será exibido no relatório certificado.';
$string[ 'statement' ]              = 'completou a disciplina';
