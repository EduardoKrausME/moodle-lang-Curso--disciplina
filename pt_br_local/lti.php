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
 * Strings for component 'lti', language 'pt_br', branch 'MOODLE_31_STABLE'
 *
 * @package   lti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined ( 'MOODLE_INTERNAL' ) || die();

$string[ 'capabilities_help' ]                = 'Selecione os redisciplinas que você deseja oferecer ao provedor de ferramenta. Mais do que uma capacidade pode ser seleccionado.';
$string[ 'configresourceurl' ]                = 'URL redisciplina padrão';
$string[ 'courseid' ]                         = 'Número id da disciplina';
$string[ 'coursemisconf' ]                    = 'Disciplina está desconfigurado';
$string[ 'course_tool_types' ]                = 'Tipos de ferramentas de disciplina';
$string[ 'custom_help' ]
                                              = 'Parâmetros personalizados são as configurações utilizadas pelo provedor da ferramenta. Por exemplo, um parâmetro personalizado pode ser usada para exibir um redisciplina específico a partir do fornecedor.

É seguro deixar este campo inalterado, a menos que orientado pelo provedor da ferramenta.';
$string[ 'default_launch_container_help' ]
                                              = 'O recipiente de lançamento afeta a exibição da ferramenta, quando iniciado a partir da disciplina. Alguns recipientes de lançamento podem fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o ambiente Moodle.

Padrão - Use o recipiente de lançamento especificado pela configuração da ferramenta.

Incorporado - A ferramenta é exibida no interior da janela Moodle existente, de uma maneira semelhante à outra atividade.

Incorporada sem blocos - A ferramenta é exibida no interior da janela Moodle existente, com apenas os controlos de navegação no topo da página.

Nova janela - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ela vai abrir em uma nova aba ou janela pop-up.';
$string[ 'external_tool_type_help' ]
                                              = 'O principal objetivo de uma ferramenta de configuração é criar um canal de comunicação segura entre Moodle eo provedor ferramenta.
Ele também fornece uma oportunidade para os padrões de configuração e criação de serviços adicionais fornecidos pela ferramenta.

*** Automática, com base na URL Lançamento ** - Esta definição deve ser usado em quase todos os casos. Moodle irá selecionar a configuração da ferramenta mais adequada
        com base na URL lançamento. Ferramentas configurados tanto por um administrador ou dentro deste disciplina será utilizado.
        Quando o URL lançamento está especificado, o Moodle irá fornecer feedback sobre se reconhece ou não. Se o Moodle não reconhece a URL de Lançamento,
        você pode precisar para entrar nos detalhes de configuração da ferramenta manualmente.
*** Um tipo de ferramenta específica ** - Ao selecionar um tipo de ferramenta específica, você pode forçar Moodle para usar essa configuração de ferramentas de comunicação com o
        provedor de ferramenta externa. Se o URL de lançamento não parecem pertencer ao fornecedor de ferramenta, aparecerá um aviso. Em alguns casos, não é necessário
        para introduzir um URL de lançamento na prestação de um tipo de ferramenta específica (se não o lançamento de um redisciplina especial no âmbito do provedor de ferramenta).
Configuração personalizada *** ** - Para configurar ferramenta de configuração personalizada em apenas um exemplo disso, mostrar as opções avançadas, e inserir a chave do consumidor e
        segredo compartilhado si mesmo. Se você não tem uma chave do consumidor e segredo compartilhado, você pode ser capaz de solicitá-los a partir do fornecedor de ferramenta.
        Nem todas as ferramentas necessitam de uma chave secreta do consumidor e partilhada, caso em que os campos podem ser deixados em branco.

 # # # Edição tipoFerramenta

Três ícones estão disponíveis após a lista externo ferramenta de texto dropdown:

 ***Adicionar ** - Criar um disciplina de configuração de ferramentas de nível. Todas as instâncias de ferramentas externas neste disciplina podem usar a ferramenta de configuração.
 ***Editar ** - Escolha um tipo de disciplina ferramenta de nível no menu suspenso, clique neste ícone. Os pormenores da configuração da ferramenta pode ser editado.
 ***Excluir ** - Retire o selecionado tipo de disciplina ferramenta de nível.';
$string[ 'forced_help' ]                      = 'Esta configuração foi forçada em uma ferramenta de configuração de um disciplina ou ao nível do site. Você não pode modificar a partir da interface.';
$string[ 'icon_url_help' ]                    = 'A URL do ícone permite ser modificado na listagem de disciplinas para esta atividade. Ao invés de usar o ícone LTI padrão, um ícone transmite o tipo de atividade que pode ser especificado';
$string[ 'launchinpopup_help' ]               = 'O recipiente de lançamento afecta a exibição da ferramenta, quando iniciado a partir da disciplina. Alguns recipientes de lançamento fornecer mais espaço na tela para a ferramenta, e outros proporcionar uma sensação mais integrada com o environemnt Moodle. Padrão *** ** - Use o recipiente lançamento especificado pela configuração da ferramenta. Incorporar *** ** - A ferramenta é exibido no interior da janela Moodle existente, de uma maneira semelhante à maioria dos tipos outra actividade. Incorporar ***, sem blocos ** - A ferramenta é exibido no interior da janela Moodle existente, com apenas os controlos neavigation no topo da página. Nova janela *** ** - A ferramenta abre em uma nova janela, ocupando todo o espaço disponível. Dependendo do navegador, ele vai abrir em uma nova aba ou janela pop-up. É possível que navegadores irá impedir que a janela de novo a partir da abertura.';
$string[ 'launch_url_help' ]
                                              = 'A URL de lançamento indica que o endereço web da ferramenta externa, e pode conter informações adicionais, tais como o redisciplina para mostrar.

Se você não sabe o que para entrar para a URL de Lançamento, por favor verifique com o fornecedor de ferramenta para obter mais informações. Se você tiver selecionado um tipo de ferramenta específica, você pode não precisar digitar uma URL de lançamento. Se a ligação ferramenta é usada apenas para lançar no sistema do fornecedor de ferramenta, e não ir para um redisciplina específico, este será provavelmente o caso.';
$string[ 'lti:addcoursetool' ]                = 'Adicionar configurações no nível da disciplina à ferramenta';
$string[ 'lti_launch_error_unsigned_help' ]   = '<p> Este erro pode ser um resultado de uma chave secreta consumidor ausente e partilhada para o prestador de ferramenta. </p><p> Se você tem uma chave secreta compartilhada do consumidor e, pode introduzi-lo ao editar a instância ferramenta externa (certifique-se opções avançadas são visíveis). <br /> Alternativamente, você pode criar um disciplina de nível configuração do provedor ferramenta <a href="{$a->course_tool_editor}">aqui</a> . </p>';
$string[ 'main_admin_help' ]                  = 'Ferramentas externas permitem que os usuários do Moodle para interagir sem interferências com redisciplinas de aprendizagem hospedados remotamente. Através de um protocolo especial de lançamento, a ferramenta remota terá acesso a algumas informações gerais sobre o usuário de lançamento. Por exemplo, o nome da instituição, disciplina ID, ID de usuário e outras informações como nome do usuário ou endereço de correio electrónico. Tipos de ferramentas listados nesta página são separados em três cursos: *** atividade ** - Estes provedores de ferramentas têm sido aprovado e configurado por um administrador. Eles podem ser usados a partir de qualquer disciplina nessa instância Moodle. Se uma chave secreta compartilhada do consumidor e são inseridos, uma relação de confiança é estabelecida entre esta instância Moodle ea ferramenta de controle remoto, proporcionando um canal de comunicação seguro. Enquanto *** ** - Estes fornecedores de ferramenta veio através de um pacote de importação, mas não foi configurado por um administrador. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário. Rejeitado *** ** - Estes fornecedores de ferramentas são marcados como aqueles que um administrador não tem a intenção de disponibilizar para a instância Moodle inteiro. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário.';
$string[ 'main_admin_help' ]                  = 'Ferramentas externas permitem que os usuários do Moodle para interagir sem interferências com redisciplinas de aprendizagem hospedados remotamente. Através de um protocolo especial de lançamento, a ferramenta remota terá acesso a algumas informações gerais sobre o usuário de lançamento. Por exemplo, o nome da instituição, disciplina ID, ID de usuário e outras informações como nome do usuário ou endereço de correio electrónico. Tipos de ferramentas listados nesta página são separados em três cursos: *** atividade ** - Estes provedores de ferramentas têm sido aprovado e configurado por um administrador. Eles podem ser usados a partir de qualquer disciplina nessa instância Moodle. Se uma chave secreta compartilhada do consumidor e são inseridos, uma relação de confiança é estabelecida entre esta instância Moodle ea ferramenta de controle remoto, proporcionando um canal de comunicação seguro. Enquanto *** ** - Estes fornecedores de ferramenta veio através de um pacote de importação, mas não foi configurado por um administrador. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário. Rejeitado *** ** - Estes fornecedores de ferramentas são marcados como aqueles que um administrador não tem a intenção de disponibilizar para a instância Moodle inteiro. Os professores podem ainda utilizar ferramentas desses fornecedores se eles têm uma chave secreta compartilhada e consumidor, ou se nenhum for necessário.';
$string[ 'modulename_help' ]                  = 'O módulo de atividade externa ferramenta permite aos alunos interagir com os redisciplinas de aprendizagem e atividades em outros sites. Por exemplo, uma ferramenta externa pode fornecer acesso a um tipo de atividade nova ou materiais de aprendizagem de uma editora. Para criar uma atividade ferramenta externa, um fornecedor de ferramenta que suporta a LTI (Learning Tools Interoperability) é necessária. Um professor pode criar uma atividade ferramenta externa ou fazer uso de uma ferramenta configurado pelo administrador do site. Atividades de ferramentas externas diferem de redisciplinas URL em alguns aspectos: * As ferramentas externas são ie contexto conscientes de que têm acesso a informações sobre o usuário que iniciou a ferramenta, como a disciplina, instituição e nome * ferramentas externas suportam a leitura, atualização e exclusão de notas associado com a instância atividade * configurações de ferramentas externas criar uma relação de confiança entre seu site eo fornecedor de ferramenta, permitindo a comunicação segura entre eles.';
$string[ 'password_help' ]                    = 'Para a pré-configurados ferramentas, não é necessário para inserir um segredo compartilhado aqui, como o segredo compartilhado será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez neste disciplina, acrescentando uma ferramenta de configuração da disciplina é uma boa idéia. O segredo compartilhado pode ser pensado como uma senha usada para autenticar o acesso à ferramenta. Deve ser fornecido juntamente com a chave do consumidor a partir do fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir um segredo compartilhado.';
$string[ 'resource' ]                         = 'Redisciplina';
$string[ 'resourcekey_admin_help' ]           = 'A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de redisciplina.';
$string[ 'resourcekey_help' ]                 = 'Para a pré-configurados ferramentas, não é necessário introduzir uma chave de redisciplina aqui, como a chave consumidor será fornecido como parte do processo de configuração. Este campo deve ser preenchido se criar um link para um provedor de ferramenta que não já está configurado. Se o fornecedor de ferramenta deve ser usada mais de uma vez neste disciplina, acrescentando uma ferramenta de configuração da disciplina é uma boa idéia. A chave do consumidor pode ser pensado como um nome utilizado para autenticar o acesso à ferramenta. Ele pode ser usado pelo prestador de ferramenta para identificar exclusivamente o sítio Moodle a partir do qual os utilizadores lançar para a ferramenta. A chave consumidor deve ser fornecido pelo fornecedor de ferramenta. O método de obtenção de uma chave consumidor varia entre os prestadores de ferramenta. Pode ser um processo automatizado, ou pode requerer um diálogo com o fornecedor de ferramenta. Ferramentas que não requerem comunicação segura de Moodle e não fornecem serviços adicionais (tais como relatórios de grau) não pode exigir uma chave de redisciplina.';
$string[ 'resourceurl' ]                      = 'Redisciplina URL';
$string[ 'return_to_course' ]                 = 'Clique <a href="{$a->link}" target="_top">aqui</a> para retornar a disciplina';
$string[ 'share_roster' ]                     = 'Permitir a ferramenta acesso a lista de disciplinas';
$string[ 'share_roster_admin' ]               = 'Ferramenta pode acessar lista de disciplinas';
$string[ 'share_roster_admin_help' ]          = 'Especificar se a ferramenta pode acessar a lista de usuários inscritos em disciplinas a partir do qual o tipo de ferramenta é inicializado';
$string[ 'share_roster_help' ]
                                              = 'Especifica caso uma ferramentapossa acessara lista de usuários inscritos neste disciplina.

Note que esta configuração pode ser sobreescrita na ferramenta de configuração.';
$string[ 'subplugintype_ltiresource' ]        = 'Redisciplina de serviço LTI';
$string[ 'subplugintype_ltiresource_plural' ] = 'Redisciplinas de serviços LTI';
$string[ 'toolproxy_help' ]                   = 'Inscrições ferramenta externa permitir Moodle administradores do site para configurar ferramentas externas a partir de um proxy ferramenta obtido de um fornecedor de ferramentas de apoio LTI 2.0. A URL de inscrição fornecido pelo provedor de ferramenta é tudo o que é necessário para iniciar o processo. Os redisciplinas e serviços oferecidos ao provedor ferramenta estiver selecionada quando a configuração de um novo registo. Inscrições Ferramenta listados nesta página são separadas em quatro cursos: * ** Configurado ** - Esses registros ferramentas foram criadas, mas o processo de registro ainda não foi iniciado. * Pendente ** ** - O processo regisitration para esses registros ferramenta foi iniciada, mas não foi concluída. Abrir e salvar as configurações para movê-lo de volta para o curso \'configurado\'. * ** Aceito ** - Esses registros ferramentas foram aprovados; os redisciplinas especificados no proxy ferramenta aparecerá na página de tipos de ferramenta externa com um estado inicial de &quot;pendentes&quot;. * ** Rejeitado ** - Esses registros ferramentas são aquelas que foram rejeitadas durante o processo de registro. Abrir e salvar as configurações para movê-lo de volta para o curso \'configurado\' para que o processo de registro cna ser reiniciado.';
$string[ 'toolproxy_help' ]                   = 'Inscrições ferramenta externa permitir Moodle administradores do site para configurar ferramentas externas a partir de um proxy ferramenta obtido de um fornecedor de ferramentas de apoio LTI 2.0. A URL de inscrição fornecido pelo provedor de ferramenta é tudo o que é necessário para iniciar o processo. Os redisciplinas e serviços oferecidos ao provedor ferramenta estiver selecionada quando a configuração de um novo registo. Inscrições Ferramenta listados nesta página são separadas em quatro cursos: * ** Configurado ** - Esses registros ferramentas foram criadas, mas o processo de registro ainda não foi iniciado. * Pendente ** ** - O processo regisitration para esses registros ferramenta foi iniciada, mas não foi concluída. Abrir e salvar as configurações para movê-lo de volta para  o curso \'configurado\'. * ** Aceito ** - Esses registros ferramentas foram aprovados; os redisciplinas especificados no proxy ferramenta aparecerá na página de tipos de ferramenta externa com um estado inicial de &quot;pendentes&quot;. * ** Rejeitado ** - Esses registros ferramentas são aquelas que foram rejeitadas durante o processo de registro. Abrir e salvar as configurações para movê-lo de volta para o curso \'configurado\' para que o processo de registro cna ser reiniciado.';
$string[ 'typename_help' ]                    = 'O nome da ferramenta é utilizado pelo provedor da ferramenta através do moodle. O nome inserido será visível a professores quando adicionadas ferramentas externas nas disciplinas.';
