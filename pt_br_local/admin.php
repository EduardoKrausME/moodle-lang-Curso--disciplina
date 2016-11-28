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
 * Strings for component 'admin', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   admin
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'addcategory' ]                        = 'Adicionar um curso';
$string[ 'additionalhtml_desc' ]                = 'Estas configurações permitem que você especifique o código HTML que você quer adicionar em cada página. Você pode definir o código HTML que será adicionado dentro da tag HEAD para a página, imediatamente depois da tag BODY ter sido aberta ou imediatamente antes da tag BODY ser fechada.<br />Este redisciplina permite que você adicione cabeçalhos ou rodapés personalizados em cada página ou adicionar suporte para serviços como o Google Analytics muito facilmente e independente do seu tema selecionado.';
$string[ 'admincategory' ]                      = 'Curso: {$a}';
$string[ 'allowcategorythemes' ]                = 'Permitir temas de cursos';
$string[ 'allowcoursethemes' ]                  = 'Permitir temas de disciplinas';
$string[ 'authpreventaccountcreation_help' ]    = 'Quando um usuário se autentica, uma conta no site é automaticamente criada caso ainda não exista. Se um banco de dados externo, como o LDAP, for utilizado para autenticação, mas você deseja restringir o acesso ao site somente para os usuários que já possuam conta, então essa opção deverá ser ativada. Neste caso, novas contas terão de ser criadas manualmente ou por meio do redisciplina  de upload de usuários. Note que esta definição não se aplica à autenticação MNet.';
$string[ 'backup_shortname' ]                   = 'Usar nome da disciplina no nome do arquivo de backup';
$string[ 'backup_shortnamehelp' ]               = 'Use o nome da disciplina como parte do nome do arquivo de backup.';
$string[ 'blockprotect_help' ]
                                                = 'Se você bloquear um determinado tipo de bloco, então ninguém será capaz de adicionar ou excluir instâncias. (Você pode, claro, desbloquear novamente se você precisar editar instâncias.)

Esse redisciplina tem o objetivo de proteger blocos, como a navegação, e configurações que são muito difíceis de se recuperar caso apagado acidentalmente.';
$string[ 'calendartype_desc' ]                  = 'Escolha um tipo de calendário padrão para todo o site. Esta configuração pode ser sobrescrita nas configurações da disciplina ou pelos usuários em seu perfil pessoal.';
$string[ 'condifmodeditdefaults' ]              = 'Valores padrão são utilizados no formulário de configurações quando criando uma nova atividade ou redisciplina.';
$string[ 'configallowcategorythemes' ]          = 'Habilitando esta opção, os temas poderão ser escolhidos a nível de curso. Isso irá afetar todas os cursos e disciplinas filhos, a não ser que eles tenham seus próprios temas. AVISO: Habilitar temas de cursos pode afetar a performance.';
$string[ 'configallowcategorythemes' ]          = 'Habilitando esta opção, os temas poderão ser escolhidos a nível de curso. Isso irá afetar todas os cursos e disciplinas filhos, a não ser que eles tenham seus próprios temas. AVISO: Habilitar temas de cursos pode afetar a performance.';
$string[ 'configallowcoursethemes' ]            = 'Habilitando esta opção, as disciplinas podem ter seus próprios temas. Os temas da disciplina se sobrepõem a outras escolhas de tema (tema da plataforma, do usuário ou da sessão).';
$string[ 'configallowuserthemes' ]              = 'Se esta opção estiver habilitada, os usuários poderão escolher seus próprios temas. Os temas do usuário se sobrepõem aos da plataforma (mas não aos temas da disciplina).';
$string[ 'configallusersaresitestudents' ]      = 'Em atividades da página inicial da instalação, todos os usuários devem ser considerados alunos? Se a resposta for "Sim", qualquer usuário cadastrado poderá participar como aluno nestas atividades. Se a resposta for "Não", só os usuários que já participam em pelo menos um disciplina poderão participar destas atividades. Apenas os administradores e os professores especialmente designados podem atuar como professores nestas atividades da página inicial.';
$string[ 'configautologinguests' ]              = 'Os visitantes devem entrar como visitantes automaticamente quando entram em disciplinas com acesso livre?';
$string[ 'configcourseoverviewfilesext' ]       = 'Lista das extensões de arquivos, separadas por vírgula, permitidas no sumário da disciplina .';
$string[ 'configcourseoverviewfileslimit' ]     = 'O número máximo de arquivos que podem ser anexados ao sumário da disciplina.';
$string[ 'configcourserequestnotify' ]          = 'Informe o usuário a ser notificado quando uma nova disciplina for solicitado.';
$string[ 'configcourserequestnotify2' ]         = 'Usuários que serão notificados quando um disciplina for solicitado. Apenas usuários que podem aprovar solicitações de disciplina são listados aqui.';
$string[ 'configcoursesperpage' ]               = 'Digite o número de disciplinas a serem exibidos por página em uma lista de disciplinas.';
$string[ 'configcourseswithsummarieslimit' ]    = 'O número máximo de disciplinas listados incluindo resumos antes de voltar para listagem simples.';
$string[ 'configdefaultrequestcategory' ]       = 'Disciplinas requisitados por usuários serão automaticamente colocados neste curso.';
$string[ 'configdefaultrequestcategory' ]       = 'Disciplinas requisitados por usuários serão automaticamente colocados neste curso.';
$string[ 'configdefaultrequestedcategory' ]     = 'Curso padrão para novas disciplinas aprovados';
$string[ 'configdefaultrequestedcategory' ]     = 'Curso padrão para novas disciplinas aprovados';
$string[ 'configdefaultuserroleid' ]            = 'Todos os usuários autenticados terão as capabilities do papel especificado aqui, em nível global, em ADIÇÃO a quaisquer outros papéis que eles possuam. O padrão é o papel Autenticado (ou Visitante em versões mais antigas). Note que isso não causará conflito com os outros papéis do usuário, apenas permitirá que eles tenham privilégios que não podem ser atribuídos em nível de disciplina (ex: posts em blog, gerenciamento de calendário, etc)';
$string[ 'configdndallowtextandlinks' ]         = 'Habilita ou desabilita a funcionalidade de arrastar e soltar texto e links nas seções da disciplina. Note que arrastar e soltar texto no Firefox ou entre diferentes navegadores é pouco confiável e pode resultar em nenhum dado sendo enviado ou texto corrompido sendo enviado.';
$string[ 'configenablecourserequests' ]         = 'Isto permite que qualquer usuário faça uma solicitação de criação de disciplina.';
$string[ 'configenabledevicedetection' ]        = 'Habilitar a detecção de dispositivos móveis, smartphones, tablets ou computadores (computador de mesa, notebooks, etc.) para a aplicação de temas visuais e outros redisciplinas.';
$string[ 'configenablestats' ]                  = 'Escolhendo \'sim\', o cronjob de Moodle processa os logs e as estatísticas. Dependendo do tráfego do seu site, isto pode ser uma operação demorada. Esta opção permite a consulta de gráficos e estatísticas interessantes relativas a cada disciplina e ao site.';
$string[ 'configenabletrusttext' ]
                                                = 'Por padrão, o Moodle sempre tentará limpar os textos que vêm do usuário, para remover códigos indesejados, mídia, etc, que poderiam ser um risco de segurança. O sistema de Conteúdo Confiável é um modo de dar a usuários particulares a habilidade de incluir esses redisciplinas mais avançados sem interferência por parte do site.
Para ativar esse sistema você precisa ativar essa configuração e então atribuir a permissão de Conteúdo Confiável a um papel específico. Textos criados e enviados por esses usuários serão marcados como confiáveis e não serão limpos antes da exibidos.';
$string[ 'configfiltermatchonepertext' ]        = 'Os filtros para criação automática de links se aplicam apenas à primeira expressão correspondente presente em cada item de texto (redisciplina, bloco) da página. Todas as outras são ignoradas. Esta configuração é ignorada quando a opção Um por Página é ativa.';
$string[ 'configforcelogin' ]                   = 'Normalmente a página inicial da instalação e a lista de disciplinas (mas não as disciplinas) podem ser vistos por quem não se inscreveu como usuário. Para forçar as pessoas a se registrarem antes de poder navegar no site, esta opção deve ser habilitada.';
$string[ 'configfrontpagecourselimit' ]         = 'Número máximo de disciplinas';
$string[ 'configfrontpagecourselimithelp' ]     = 'Número máximo de disciplinas a serem exibidos na primeira página do site na listagem de disciplinas.';
$string[ 'configgradebookroles' ]               = 'Esta configuração permite o controle do que é visível no livro de notas. Os usuários devem ter um dos seguintes papéis na disciplina para que sejam incluídos no livro de notas.';
$string[ 'configmaxbytes' ]                     = 'Isto define o tamanho máximo que os arquivos enviados podem ter em todo o site. Esta configuração é limitada pelas configurações do PHP post_max_size e upload_max_filesize, e também pela configuração do Apache LimitRequestBody. Por sua vez, maxbytes limita o intervalo de valores que podem ser escolhidos no nível de disciplina ou módulo. Se "Limite do servidor" for escolhido, o valor máximo permitido pelo servidor será utilizado.';
$string[ 'configmaxusersperpage' ]              = 'O número máximo de usuários exibidos dentro do seletor de usuário em disciplina, grupo de coorte, webservice etc';
$string[ 'configmycoursesperpage' ]             = 'Número máximo de disciplinas a ser mostrado em qualquer lista das disciplinas de um usuário.';
$string[ 'confignavcourselimit' ]               = 'Limita o número de disciplinas mostrados para usuários não autenticados ou que não estejam inscritos em algum disciplina.';
$string[ 'confignavshowallcourses' ]            = 'Esta configuração determina se os usuários inscritos em disciplinas podem ver a lista com todas as Disciplinas na navegação, ao invés de apenas as Disciplinas em que estão inscritos.';
$string[ 'confignavshowcategories' ]            = 'Mostrar cursos de disciplinas na barra de navegação e blocos de navegação. Isso não ocorre com as disciplinas em que o usuário está inscrito, esses ainda serão listados em Minhas Disciplinas (mycourses) sem cursos.';
$string[ 'confignavshowcategories' ]            = 'Mostrar cursos de disciplinas na barra de navegação e blocos de navegação. Isso não ocorre com as disciplinas em que o usuário está inscrito, esses ainda serão listados em Minhas Disciplinas (mycourses) sem cursos.';
$string[ 'configopentogoogle' ]                 = 'Se habilitar esta opção, o Google poderá entrar neste site como \'visitante\'. Além disto, as pessoas que chegarem no site através de uma busca no Google, serão automaticamente registradas como \'visitantes\'. Note que o acesso será possível somente nas disciplinas que já permitem o acesso de visitantes.';
$string[ 'configprofilesforenrolledusersonly' ] = 'Para previnir o mal uso por spammers, as descrições dos perfis de usuários que ainda não estão inscritos em nenhum disciplina são escondidas. Novos usuários devem se inscrever em pelo menos um disciplina para poderem adicionar uma descrição no perfil.';
$string[ 'configrequestcategoryselection' ]     = 'Permitir a escolha de um curso ao solicitar um disciplina.';
$string[ 'configrequestcategoryselection' ]     = 'Permitir a escolha de um curso ao solicitar um disciplina.';
$string[ 'configrequestedstudentname' ]         = 'Palavra para definir o estudante, usada em pedidos de disciplinas.';
$string[ 'configrequestedstudentsname' ]        = 'Palavra para definir os estudantes, usada em pedidos de disciplinas.';
$string[ 'configrequestedteachername' ]         = 'Palavra para definir o professor, usada em pedidos de disciplinas.';
$string[ 'configrequestedteachersname' ]        = 'Palavra para definir os professores, usada em pedidos de disciplinas.';
$string[ 'configsectionrequestedcourse' ]       = 'Requisição de disciplinas';
$string[ 'configsitemaxcategorydepth' ]         = 'Profundidade máxima de cursos';
$string[ 'configsitemaxcategorydepthhelp' ]     = 'Especifica a profundidade máxima de subcursos a serem exibidas quando mostrar a lista de cursos ou lista de combinação. Cursos de níveis mais profundos irão aparecer como links e os usuários poderão expandi-las requisitando através de AJAX.';
$string[ 'configslasharguments' ]
                                                = '\'Slash arguments\' (using <em>PATH_INFO</em>)
é necessária para pacotes SCORM e redisciplinas de múltiplos arquivos para exibir corretamente. Se o seu servidor web não suporta \'argumentos barra\' e não é possível configurá-lo, essa configuração pode ser desativada, embora ele irá resultar em coisas não funcionando <br/> Nota:. O uso de \'Slash arguments\' será obrigatório em futuras versões do Moodle.';
$string[ 'configstatsfirstrun' ]                = 'Isto define o período, em relação ao passado, que o processamento dos logs deve considerar a partir da primeira vez que o cronjob fizer esta operação. Se você tem muito tráfego e é hospedado em servidor compartilhado, evite incluir um longo período de tempo, porque isto pode demorar muito e consumir muitos redisciplinas do servidor. (Observe que para esta opção 1 mês = 28 dias. Nos gráficos e relatórios gerados, 1 mês = 1 mês do calendário.)';
$string[ 'configstatsuserthreshold' ]           = 'Esta configuração define o número mínimo de usuários inscritos em um disciplina para ele ser incluído nos cálculos de estatísticas.';
$string[ 'configstripalltitletags' ]            = 'Desmarcar esta opção para permitir tags HTML nos nomes das atividades e dos redisciplinas.';
$string[ 'configuseblogassociations' ]          = 'Os usuários devem ser capazes de organizar seus blogs associando entradas com disciplinas e módulos de disciplinas?';
$string[ 'configvisiblecourses' ]               = 'Mostre disciplinas em cursos ocultas';
$string[ 'configvisiblecourses' ]               = 'Mostre disciplinas em cursos ocultas';
$string[ 'coursecontact' ]                      = 'Administradores de disciplina';
$string[ 'coursecontact_desc' ]                 = 'Esta opção permite que você controle quem aparece na descrição da disciplina. Usuários precisarão ter pelo menos um desses papéis em um disciplina para serem mostrados na descrição deste disciplina.';
$string[ 'courselistshortnames' ]               = 'Mostrar os nomes de disciplina extendidos';
$string[ 'courselistshortnames_desc' ]          = 'Se habilitado, os nomes das disciplinas serão abreviados, ao invés de mostrar os nomes completos nas listas de disciplinas. Se necessário, os nomes dos perdisciplinas prolongados pode ser personalizado através da edição da string de idioma \'courseextendednamedisplay\' utilizando o redisciplina de personalização da linguagem.';
$string[ 'coursemgmt' ]                         = 'Gerenciar disciplinas e cursos';
$string[ 'coursemgmt' ]                         = 'Gerenciar disciplinas e cursos';
$string[ 'courseoverview' ]                     = 'Sumário da disciplina';
$string[ 'courserequestnotify' ]                = 'Aviso de solicitação de disciplina';
$string[ 'courserequestnotifyemail' ]           = 'O usuário {$a->user} solicitou uma nova disciplina em {$a->link}';
$string[ 'courserequests' ]                     = 'Solicitações de disciplinas';
$string[ 'courserequestspending' ]              = 'Solicitações de disciplinas pendentes';
$string[ 'courses' ]                            = 'Disciplinas';
$string[ 'coursesperpage' ]                     = 'Disciplinas por página';
$string[ 'courseswithsummarieslimit' ]          = 'Disciplinas com limite de resumos';
$string[ 'creatornewroleid' ]                   = 'Papel do criador em disciplinas novos';
$string[ 'creatornewroleid_help' ]              = 'Se o usuário não tiver permissão para gerenciar o nova disciplina, o usuário é automaticamente inscrito com este perfil de usuàrio.';
$string[ 'defaultformatnotset' ]                = 'Erro determinando o padrão de formato de disciplina. Por favor verifique as configurações do site.';
$string[ 'defaultrequestcategory' ]             = 'Curso padrão para requisição de disciplina';
$string[ 'defaultrequestcategory' ]             = 'Curso padrão para requisição de disciplina';
$string[ 'enablecourserequests' ]               = 'Habilitar solicitação de disciplina';
$string[ 'enrolinstancedefaults_desc' ]         = 'Configurações padrão de inscrição em novas disciplinas.';
$string[ 'formatuninstallwithcourses' ]         = 'Existem {$a->count} disciplinas utilizando {$a->format}. Este formato será modificado para {$a->defaultformat} (formato padrão para este site). Alguns dados formatos especificos';
$string[ 'guestroleid_help' ]                   = 'Este papel é atribuído automaticamente para o usuário convidado (guest). É também atribuído temporariamente a usuários não inscritos, que entram na disciplina através do plugin de inscrição de convidados. ';
$string[ 'langcache_desc' ]                     = 'Cache o menu de idiomas. Se ativado, a lista de traduções disponíveis fica em cache. O cache é atualizado automaticamente quando você instalar ou excluir um pacote de idiomas através da ferramenta de gerenciamento de idiomas. Se você instalar um novo pacote de idiomas manualmente, você deverá utilizar o redisciplina de limpeza de todos os caches para atualizar a lista de idiomas disponíveis.';
$string[ 'legacyfilesaddallowed' ]              = 'Permitir a adição de arquivos da disciplina legados';
$string[ 'legacyfilesaddallowed_help' ]         = 'Se um disciplina tem arquivos da disciplina de legado, permitir que novos arquivos e pastas a serem adicionados a ele.';
$string[ 'legacyfilesinnewcourses' ]            = 'Arquivos de disciplinas legados em novas disciplinas';
$string[ 'legacyfilesinnewcourses_help' ]       = 'Por padrão, as áreas de arquivos de disciplinas legados estão disponíveis apenas em disciplinas atualizados. Por favor, observe que algumas coisas, como backup e restauração de uma única atividade, não são compatíveis com essa configuração.';
$string[ 'linkadmincategories' ]                = 'Link para cursos do admin';
$string[ 'linkadmincategories_help' ]           = 'Caso habilitado cursos de configurações administrativas serão exibidas como links na navegação e irão levar para as páginas de cursos administrativas';
$string[ 'linkcoursesections' ]                 = 'Sempre linkar seções da disciplina';
$string[ 'linkcoursesections_help' ]            = 'Sempre tentar fornecer um link para seções da disciplina. Seções da disciplina são geralmente mostradas como links se o formato da disciplina apresentar uma única seção por página. Se essa configuração estiver habilitada sempre será fornecido um link.';
$string[ 'lockoutthreshold_desc' ]              = 'Selecione o número de falhas de login que resultam em bloqueio de conta. Este redisciplina pode ser utilizado em ataques de negação de serviço.';
$string[ 'manageformats' ]                      = 'Gerenciar formatos de disciplina';
$string[ 'mnetrestore_extusers_noadmin' ]       = '<strong>Nota:</strong> Este arquivo de backup aparentemente foi gerado em outra instalaçao do Moodle e contém contas de usuários remotos da Rede Moodle. Você não tem autorização para executar este tipo de restauração. Contate o administrador do site ou, alternativamente, restaurar este disciplina sem informações de usuários (módulos, arquivos...)';
$string[ 'modeditingmenu_desc' ]                = 'Se habilitado, muitos dos ícones de edição de atividades, que são exibidos quando a edição está ligada, serão exibidos como um menu de poções. Isso reduz o conteúdo na tela ao editar um disciplina escondendo os ícones até que eles sejam necessários.';
$string[ 'mycoursesperpage' ]                   = 'Número máximo de disciplinas';
$string[ 'navadduserpostslinks_help' ]          = 'Se habilitado, dois links serão adicionados para cada usuário na navegação, um para ver as discussões que o usuário tenha iniciado e outro para as mensagens o usuário postou em fóruns  do site ou em disciplinas específicos.';
$string[ 'navcourselimit' ]                     = 'Limite de disciplina';
$string[ 'navexpandmycourses' ]                 = 'Mostrar "Minhas disciplinas" expandidos no Painel';
$string[ 'navexpandmycourses_desc' ]            = 'Se ativado, "Minhas disciplinas" é inicialmente mostrado expandido no bloco de navegação no Painel.';
$string[ 'navigationupgrade' ]                  = 'Essa atualização introduz dois novos blocos de navegação que irão substituir os seguintes blocos: Administração, Disciplinas, Atividades e Participantes. Se você definiu alguma permissão especial nestes blocos, você deve se certificar de que tudo está se comportando como você gostaria.';
$string[ 'navshowallcourses' ]                  = 'Mostrar todos as disciplinas';
$string[ 'navshowcategories' ]                  = 'Mostrar cursos de disciplinas';
$string[ 'navshowcategories' ]                  = 'Mostrar cursos de disciplinas';
$string[ 'navshowfullcoursenames' ]             = 'Mostrar os nomes completos da disciplina';
$string[ 'navshowfullcoursenames_help' ]        = 'Se habilitado, os nomes completos das disciplinas serão exibidos na navegação ao invés do nome curto.';
$string[ 'navshowmycoursecategories' ]          = 'Exibir cursos em Minhas disciplinas';
$string[ 'navshowmycoursecategories' ]          = 'Exibir cursos em Minhas disciplinas';
$string[ 'navshowmycoursecategories_help' ]     = 'Se habilitado, os cursos de disciplina serão exibidas em Minhas disciplinas na navegação.';
$string[ 'navshowmycoursecategories_help' ]     = 'Se habilitado, os cursos de disciplina serão exibidas em Minhas disciplinas na navegação.';
$string[ 'navsortmycoursessort' ]               = 'Classificar minhas disciplinas';
$string[ 'navsortmycoursessort_help' ]          = 'Isso determina se as disciplinas serão listados em Minhas disciplinas de acordo com a ordem de classificação (ou seja, a ordem definida em Configurações > Administração do Site > Gerenciar as disciplinas e cursos) ou em ordem alfabética pelo ambiente da disciplina.';
$string[ 'navsortmycoursessort_help' ]          = 'Isso determina se as disciplinas serão listados em Minhas disciplinas de acordo com a ordem de classificação (ou seja, a ordem definida em Configurações > Administração do Site > Gerenciar as disciplinas e cursos) ou em ordem alfabética pelo ambiente da disciplina.';
$string[ 'passwordreuselimit_desc' ]            = 'Número de vezes que um usuário deve alterar sua senha antes de ser autorizado a reutilizar uma senha. Erros das senhas usadas anteriormente são armazenados na tabela de banco de dados local. Esse redisciplina pode não ser compatível com alguns plugins de autenticação externa.';
$string[ 'pathtodot_help' ]                     = 'Caminho para o dot. Provavelmente algo como /usr/bin/dot. Para ser possível gerar gráficos de arquivos DOT, você deve ter instalado o executável dot e apontá-lo aqui. Note que, por enquanto, isto só é usado pelos redisciplinas de "profiling" (Desenvolvimento->Profiling) do Moodle. Em algums distribuições Linux, este aplicativo é fornecido pelo pacote graphviz .';
$string[ 'pathtounoconv_help' ]                 = 'Caminho para o conversor de documentos unoconv. Este é um executável que é capaz de converter entre formatos de documentos suportados pelo LibreOffice. Isto é opcional, mas se for especificado, o Moodle vai usá-lo para converter automaticamente entre formatos de documentos. Isto é usado para suportar uma ampla gama de arquivos de entrada para o redisciplina PDF atribuição de anotações.';
$string[ 'profilecategory' ]                    = 'Curso';
$string[ 'profilecategoryname' ]                = 'Nome do curso (deve ser único)';
$string[ 'profilecategorynamenotunique' ]       = 'O nome deste curso já foi utilizado';
$string[ 'profileconfirmcategorydeletion' ]     = 'Há {$a} campo(s) nesse curso, que será(ão) movido(s) para o curso acima (ou abaixo se estiver no curso mais elevada).<br /> Você ainda deseja excluir esse curso?';
$string[ 'profilecreatecategory' ]              = 'Criar um novo curso de perfil';
$string[ 'profilecreatenewcategory' ]           = 'Criando um novo curso';
$string[ 'profiledeletecategory' ]              = 'Removendo um curso';
$string[ 'profileeditcategory' ]                = 'Editando curso: {$a}';
$string[ 'questioncwqpfscheck' ]                = 'Uma ou mais questões aleatórias em uma quiz estão configuradas para selecionar questões de uma mistura de cursos de questões compartilhadas e não-compartilhadas. Há um relatório mais detalhado <a href="{$a->reporturl}">aqui</a> e veja a página Moodle Docs <a href="{$a->docsurl}">aqui</a>.';
$string[ 'questioncwqpfsok' ]                   = 'Certo. Não existe questões \'aleatórias\' em seus questionários que estão configuradas para selecionar cursos de questões que misturem compartilhadas e não compartilhadas.';
$string[ 'registration_help' ]                  = 'É recomendável que você registrar seu site para receber alertas de segurança e acesso a Moodle.net, a nossa plataforma de compartilhamento de disciplina.';
$string[ 'requestcategoryselection' ]           = 'Permitir a seleção do curso';
$string[ 'restorecourse' ]                      = 'Restaurar disciplina';
$string[ 'restorernewroleid' ]                  = 'Papel do usuário restaurador na disciplina';
$string[ 'restorernewroleid_help' ]             = 'Se o usuário não tiver permissão para gerenciar a Disciplina recém-restaurado, ele será inscrito automaticamente receberá este papel, se necessário. Selecione "Nenhum" se você não quer que os restauradores sejam capazes de gerenciar todos as disciplinas restaurados.';
$string[ 'sort_fullname' ]                      = 'Nome completo da disciplina';
$string[ 'sort_idnumber' ]                      = 'Número de identificação da disciplina';
$string[ 'sort_shortname' ]                     = 'Nome curto da disciplina';
$string[ 'stickyblockscourseview' ]             = 'Página da disciplina';
$string[ 'unoconvwarning' ]                     = 'A versão do unoconv que esta instalado não é suportado. Redisciplina de atribuição de classificação Moodle requer a versão 0.7 ou superior.';
