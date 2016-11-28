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
 * Strings for component 'simplecertificate', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   simplecertificate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'cantissue' ]           = 'O certificado não pode ser emitido pois o usuário não atigiu a meta da disciplina';
$string[ 'certificatetext_help' ]
                                 = 'Este é o texto que será usado no certificado, alguns marcadores especiais serão substituídos por variáveis do certificado, como o nome das disciplinas, nome do estudante, notas...
Os marcadores são:

<ul>
<li>{USERNAME} -> Nome completo do aluno</li>
<li>{COURSENAME} -> Nome completo da disciplina (ou o que estiver definido em "Nome Alternativo da Disciplina")</li>
<li>{GRADE} -> Nota formatada</li>
<li>{DATE} -> Data formatada</li>
<li>{OUTCOME} -> Resultados (Outcomes)</li>
<li>{TEACHERS} -> Lista de professores</li>
<li>{IDNUMBER} -> User id number</li>
<li>{FIRSTNAME} -> Nome</li>
<li>{LASTNAME} -> Sobrenome</li>
<li>{EMAIL} -> E-mail</li>
<li>{ICQ} -> ICQ</li>
<li>{SKYPE} -> Skype</li>
<li>{YAHOO} -> Yahoo messenger</li>
<li>{AIM} -> AIM</li>
<li>{MSN} -> MSN</li>
<li>{PHONE1} -> 1° Número de telefone</li>
<li>{PHONE2} -> 2° Número de telefone</li>
<li>{INSTITUTION} -> Instituição</li>
<li>{DEPARTMENT} -> Departamento</li>
<li>{ADDRESS} -> Endereço</li>
<li>{CITY} -> Cidade</li>
<li>{COUNTRY} -> País</li>
<li>{URL} -> Home-page</li>
<li>{CERTIFICATECODE} -> Texto do código do certificado</li>
<li>{PROFILE_xxxx} -> Campos personalizados</li>
</ul>
<p>
Para usar campos personalizados deve usar o prefixo "PROFILE_", por exemplo, se criar um campo com a abreviação (shortname) de aniversario, então deve-se usar o marcador
"PROFILE_ANIVERSARIO"
O texto pode ser um HTML básico, com fontes básicas do HTML, tabelas, mas evite utilizar o uso de posicionamento.</p>';
$string[ 'completiondate' ]      = 'Conclusão de Disciplina';
$string[ 'coursegrade' ]         = 'Nota da disciplina';
$string[ 'coursename' ]          = 'Nome alternativo da Disciplina';
$string[ 'coursename_help' ]     = 'Nome alternativo da Disciplina';
$string[ 'coursenotfound' ]      = 'Disciplina não encontrado';
$string[ 'coursetimereq' ]       = 'Minutos mínimos de participação na disciplina';
$string[ 'emailstudentsubject' ] = 'Seu certificado da disciplina {$a->course}';
$string[ 'emailstudenttext' ]
                                 = 'Olá {$a->username},

	Segue em anexo o certificado da disciplina: {$a->course}.


ESTA É UMA MENSAGEM AUTOMÁTICA, NÃO RESPONDA POR FAVOR';
$string[ 'emailteachermail' ]
                                 = '{$a->student} recebeu o certificado: \'{$a->certificate}\' para a disciplina
{$a->course}.

Você pode vê-lo aqui:

    {$a->url}';
$string[ 'emailteachermailhtml' ]
                                 = '{$a->student} recebeu o certificado: \'<i>{$a->certificate}</i>\'
para a disciplina {$a->course}.

Você pode vê-lo aqui:

    <a href="{$a->url}">Certificate Report</a>.';
$string[ 'printdate_help' ]
                                 = 'Esta é a data que será impressa, você pose escolher entre a data que o aluno completou a disciplina, ou a data de emissão do certificado.
Também pode-se escolher a data que uma certa atividade foi corrigida, se em algum dos casos o aluno não tiver a data, então a data de emissão será usada.';
$string[ 'printgrade_help' ]     = 'Pode-se escolher a nota que será impressa no certificado, esta pode ser a nota final da disciplina ou a nota em uma atividade.';
$string[ 'printoutcome_help' ]   = 'Você pode escolher qualquer resultado (outcome) definido neste disciplina. Será impresso o nome do resultado e o resultado recebido  pelo usuário. Um exemplo poderia ser: Resultado: Proficiente.';
$string[ 'requiredtimenotmet' ]  = 'Você precisa ter ao menos {$a->requiredtime} minutos nesse disciplina para emitir este certificado';
