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
 * Strings for component 'backup', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   backup
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'automatedmaxkepthelp' ]             = 'Isso especifica o número máximo de backups recentes salvos automaticamente e mantidos para cada disciplina . Backups mais antigos serão apagados automaticamente.';
$string[ 'automatedminkepthelp' ]             = 'Se os backups forem mais antigos que um número especificado de dias serão excluídos , pode acontecer que um disciplina inativa acaba sem backup. Para evitar isso, é necessário definir um número mínimo de backups mantidos .';
$string[ 'backupcourse' ]                     = 'Backup da disciplina: {$a}';
$string[ 'backupcoursedetails' ]              = 'Detalhes da disciplina';
$string[ 'backupcoursesections' ]             = 'Seções da disciplina';
$string[ 'backupsection' ]                    = 'Backup da seção da disciplina: {$a}';
$string[ 'backuptypecourse' ]                 = 'Disciplina';
$string[ 'choosefilefromcoursebackup' ]       = 'Área de backup da disciplina';
$string[ 'choosefilefromcoursebackup_help' ]  = 'Quando se faz backup de disciplinas usando as configurações padrão, os arquivos de backup serão armazenados aqui';
$string[ 'choosefilefromuserbackup_help' ]    = 'Quando se faz backup de disciplinas com a opção "Anonymize user information" (despersonalizar as informações de usuários) assinalada, os arquivos de backup serão armazenados aqui';
$string[ 'confirmnewcoursecontinue' ]         = 'Novo aviso da disciplina';
$string[ 'confirmnewcoursecontinuequestion' ] = 'Um disciplina (oculto) temporário será criado pelo processo de restauração. Para abortar a restauração, clique em cancelar. Não feche o navegador durante a restauração.';
$string[ 'coursecategory' ]                   = 'Curso em que a disciplina será restaurado';
$string[ 'coursecategory' ]                   = 'Curso em que a disciplina será restaurado';
$string[ 'coursesettings' ]                   = 'Configurações da disciplina';
$string[ 'error_block_for_module_not_found' ] = 'Instância órfã de bloco (id: {$a->bid}) para o módulo da disciplina (id:{$a->mid}) encontrada. Não será realizado backup para este bloco.';
$string[ 'error_course_module_not_found' ]    = 'Módulo de disciplina órfão (id: {$a}) encontrado. Não será realizado backup para este módulo.';
$string[ 'generalactivities' ]                = 'Incluir atividades e redisciplinas';
$string[ 'importcurrentstage0' ]              = 'Selecionar a disciplina';
$string[ 'importgeneralmaxresults' ]          = 'O número máximo de disciplinas listados para importação';
$string[ 'importgeneralmaxresults_desc' ]     = 'Isto controla o número de disciplinas que são listados durante o primeiro passo do processo de importação';
$string[ 'importsuccess' ]                    = 'Importação concluída. Clique em Continuar para retornar a disciplina.';
$string[ 'morecoursesearchresults' ]          = 'Mais de {$a} disciplinas encontrados, mostrando o primeiro de {$a} resultados';
$string[ 'nomatchingcourses' ]                = 'Não existem disciplinas a exibir';
$string[ 'norestoreoptions' ]                 = 'Não existem cursos ou disciplinas existentes nos quais você possa restaurar.';
$string[ 'norestoreoptions' ]                 = 'Não existem cursos ou disciplinas existentes nos quais você possa restaurar.';
$string[ 'qcategory2coursefallback' ]         = 'O curso de questões "{$a->name}", originalmente no contexto de sistema/disciplina no arquivo de backup, será criada no contexto de disciplina pela restauração';
$string[ 'qcategory2coursefallback' ]         = 'O curso de questões "{$a->name}", originalmente no contexto de sistema/disciplina no arquivo de backup, será criada no contexto de disciplina pela restauração';
$string[ 'qcategorycannotberestored' ]        = 'O curso de questões "{$a->name}" não pôde ser criada pela restauração';
$string[ 'question2coursefallback' ]          = 'O curso de questões "{$a->name}", originalmente no contexto de sistema/disciplina no arquivo de backup, será criada no contexto de disciplina pela restauração';
$string[ 'question2coursefallback' ]          = 'O curso de questões "{$a->name}", originalmente no contexto de sistema/disciplina no arquivo de backup, será criada no contexto de disciplina pela restauração';
$string[ 'restorecourse' ]                    = 'Restaurar disciplina';
$string[ 'restorecoursesettings' ]            = 'Configurações da disciplina';
$string[ 'restoreexecutionsuccess' ]          = 'A disciplina foi restaurado com sucesso, clique no botão continuar abaixo para visualizar a disciplina que você restaurou.';
$string[ 'restorenewcoursefullname' ]         = 'Novo nome de disciplina';
$string[ 'restorenewcourseshortname' ]        = 'Novo nome curto da disciplina';
$string[ 'restorenewcoursestartdate' ]        = 'Nova data de início da disciplina';
$string[ 'restoretocourse' ]                  = 'Restauração para a disciplina:&nbsp;';
$string[ 'restoretocurrentcourse' ]           = 'Restaurar neste disciplina';
$string[ 'restoretocurrentcourseadding' ]     = 'Mesclar o conteúdo do backup com este disciplina';
$string[ 'restoretocurrentcoursedeleting' ]   = 'Excluir o conteúdo deste disciplina e restaurar o backup';
$string[ 'restoretoexistingcourse' ]          = 'Restaurar em um disciplina existente';
$string[ 'restoretoexistingcourseadding' ]    = 'Mesclar o conteúdo do backup em um disciplina existente';
$string[ 'restoretoexistingcoursedeleting' ]  = 'Excluir o conteúdo de um disciplina existente e restaurar o backup';
$string[ 'restoretonewcourse' ]               = 'Restaurar como uma nova disciplina';
$string[ 'restoringcourse' ]                  = 'Restauração da disciplina em progresso';
$string[ 'rootsettingactivities' ]            = 'Incluir atividades e redisciplinas';
$string[ 'rootsettinglogs' ]                  = 'Incluir os logs da disciplina';
$string[ 'selectacategory' ]                  = 'Selecione um curso';
$string[ 'selectacourse' ]                    = 'Selecione um disciplina';
$string[ 'setting_course_fullname' ]          = 'Nome da disciplina';
$string[ 'setting_course_shortname' ]         = 'Nome curto da disciplina';
$string[ 'setting_course_startdate' ]         = 'Data de início da disciplina';
$string[ 'setting_overwriteconf' ]            = 'Sobrescrever as configurações da disciplina';
$string[ 'skiphidden' ]                       = 'Ignorar disciplinas ocultos';
$string[ 'skiphiddenhelp' ]                   = 'Escolha se quer ou não ignorar disciplinas ocultos';
$string[ 'skipmodifdays' ]                    = 'Ignorar disciplinas não modificados desde';
$string[ 'skipmodifdayshelp' ]                = 'Optar por ignorar disciplinas que não foram modificados desde um número de dias';
$string[ 'skipmodifprev' ]                    = 'Ignorar disciplinas não modificados desde o backup anterior';
$string[ 'skipmodifprevhelp' ]                = 'Escolha se as disciplinas que não foram modificados desde o último backup automático devem ser ignorados.';
$string[ 'totalcategorysearchresults' ]       = 'Total de cursos: {$a}';
$string[ 'totalcoursesearchresults' ]         = 'Total de disciplinas: {$a}';
