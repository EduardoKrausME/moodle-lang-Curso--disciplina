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
 * Strings for component 'attendanceregister', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   attendanceregister
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'force_recalc_all_session_help' ]      = 'Excluir e recalcular todas as sessões on-line de todos os usuários rastreados. <br />Normalmente você <b>não precisa fazê-lo!</b> <br /> Novas sessões são calculados automaticamente em segundo plano (depois de algum atraso). <br />Esta operação pode ser útil <b>apenas:</b> <ul><li> Depois de mudar o papel de um usuário que já atuou em qualquer uma das disciplinas rastreados com um papel diferente (ou seja, mudança de professor para aluno, quando os alunos são rastreados e professores não são). </li><li> Depois de modificar as definições de registro que afeta  o cálculos das sessões (por exemplo, <i>o modo de rastreamento de atendimento, timeout de sessão online )</i> </li></ul> Você <b>não precisa recalcular ao registrar novos usuários!</b> <br /><br /> Recálculo pode ser executado imediatamente ou agendada para a próxima execução do cron. Execução agendada pode ser mais eficiente para disciplinas muito lotados.';
$string[ 'force_recalc_user_session_help' ]     = 'Excluir e recalcular todas as sessões on-line deste usuário. <br /> Normalmente você <b>não precisa fazê-lo!</b> <br /> Novas sessões são calculados automaticamente em segundo plano (depois de algum atraso). <br /> Esta operação pode ser útil <b>apenas:</b> <ul><li> Depois de mudar o papel do usuário que já atuou em qualquer uma das disciplinas rastreados com um papel diferente (ou seja, mudança de professor para aluno, quando os alunos são rastreados e professores não são). </li><li> Depois de modificar as definições de registro que afeta  o cálculos das sessões (por exemplo, <i>o modo de rastreamento de atendimento, timeout de sessão online )</i> </li></ul>';
$string[ 'mandatoryofflinespecifycourse' ]      = 'Seleção da Disciplina obrigatório';
$string[ 'mandatoryofflinespecifycourse_help' ] = 'A especificação de uma disciplina nas sessões offline será obrigatória.';
$string[ 'modulename_help' ]                    = 'Registro de Presença calcula o tempo que os usuários passam trabalhando em disciplinas online. <br /> Opcionalmente permite o registro atividades offline do usuário. <br /> Dependendo do modo de rastreamento, o registro pode rastrear as atividades em um única disciplina, em todos as disciplinas da mesmo curso ou em todos as disciplinas "Meta ligados" na Disciplina que Registro de Presença esteja incluído <br />Sessões de trabalho online são calculadas com os registros de log gravados pelo Moodle. <br /> <b>Novas sessões on-line são adicionados com algum atraso pelo cron, após o logout do usuário.</b>';
$string[ 'modulename_help' ]                    = 'Registro de Presença calcula o tempo que os usuários passam trabalhando em disciplinas online. <br /> Opcionalmente permite o registro atividades offline do usuário. <br /> Dependendo do modo de rastreamento, o registro pode rastrear as atividades em um única disciplina, em todos as disciplinas da mesmo curso ou em todos as disciplinas "Meta ligados" na Disciplina que Registro de Presença esteja incluído <br />Sessões de trabalho online são calculadas com os registros de log gravados pelo Moodle. <br /> <b>Novas sessões on-line são adicionados com algum atraso pelo cron, após o logout do usuário.</b>';
$string[ 'no_refcourse' ]                       = '(Sem Disciplina especificado)';
$string[ 'offlinecomments_help' ]               = 'Ativar redisciplina de adicionar comentários textuais às sessões offline';
$string[ 'offline_refcourse_duration' ]         = 'Tempo Offline, Disciplina:';
$string[ 'offline_session_ref_course' ]         = 'Ref.Disciplina';
$string[ 'offline_session_ref_course_help' ]    = 'Selecione a disciplina no qual o trabalho offline foi realizado ou o tópico da disciplina abordado no trabalho.';
$string[ 'offlinespecifycourse' ]               = 'Especifique Disciplina de Sessões offline';
$string[ 'offlinespecifycourse_help' ]          = 'Permitir que o usuário selecione a disciplina da sessão offline relacionada. <br /> Esta opção só tem sentido se registro de presença estiver no modo de rastreamento para mais de um disciplina(Por exemplo: mode de rastreamento "Curso" ou "Meta-ligado")';
$string[ 'offlinespecifycourse_help' ]          = 'Permitir que o usuário selecione a disciplina da sessão offline relacionada. <br /> Esta opção só tem sentido se registro de presença estiver no modo de rastreamento para mais de um disciplina(Por exemplo: mode de rastreamento "Curso" ou "Meta-ligado")';
$string[ 'ref_course' ]                         = 'Ref.Disciplina';
$string[ 'registertype_help' ]
                                                = 'Modos de rastreamento do registro de presença determina como será realizado o rastreamento(Por exemplo onde a atividade do usuário será rastreada):
* _Somente este Disciplina_: somente na disciplina onde a instância do registro de presença foi configurada.
* _Todos as disciplinas na mesmo curso_: a atividade será monitorada em todos os outras disciplinas na mesmo curso da disciplina onde a instância do registro de presença foi configurada.
* _Todos as disciplinas ligados por um disciplina meta link_: a atividade será monitorada neste disciplina em todos os outras disciplinas ligados por ligação meta disciplina.';
$string[ 'registertype_help' ]
                                                = 'Modos de rastreamento do registro de presença determina como será realizado o rastreamento(Por exemplo onde a atividade do usuário será rastreada):
* _Somente este Disciplina_: somente na disciplina onde a instância do registro de presença foi configurada.
* _Todos as disciplinas na mesmo curso_: a atividade será monitorada em todos os outras disciplinas na mesmo curso da disciplina onde a instância do registro de presença foi configurada.
* _Todos as disciplinas ligados por um disciplina meta link_: a atividade será monitorada neste disciplina em todos os outras disciplinas ligados por ligação meta disciplina.';
$string[ 'select_a_course' ]                    = '- Selecione um disciplina -';
$string[ 'select_a_course_if_any' ]             = '- Selecione um disciplina, se for o caso -';
$string[ 'sessiontimeout_help' ]                = 'Timeout da sessão é usado para estimar a duração da sessão online. <br />  Sessões on-line serão pelo menos <b>metade</b> da duração do tempo limite de sessão. <br /> Note que se o timeout da sessão é muito longo, o registro tende a superestimar duração das sessões online. <br /> Se for muito curto, sessões reais serão divididas em muitas sessões mais curtas. <br /> <h3>Explicação Detalhada</h3> Sessões de trabalho on-line são <b>estimadas</b> pelos registros no log do Usuário nas Disciplinas rastreados (ver <i>Modo de rastreamento do registro de presença).</i> <br/> Se um período de tempo é mais curto do que o tempo limite de sessão decorrido entre dois registros do log consecutivos, o registro de presença considera que o usuário está continuamente trabalhando online (ou seja, a continuidade da sessão). <br /> Se o período de tempo decorrido é mais longo do que o tempo limite de sessão, o registro de presença considera que o usuário parou de trabalhar online <b>metade</b> do tempo limite da sessão após o registro de log anterior (ou seja, a sessão termina) e voltou no seguinte  registro de log (ou seja, uma nova sessão é iniciada)';
$string[ 'tracked_courses' ]                    = 'Disciplinas Rastreados';
$string[ 'type_category' ]                      = 'Todos as disciplinas na mesmo curso';
$string[ 'type_category' ]                      = 'Todos as disciplinas na mesmo curso';
$string[ 'type_course' ]                        = 'Somente este Disciplina';
$string[ 'type_meta' ]                          = 'Todas as Disciplinas vinculados por Disciplina meta link';
