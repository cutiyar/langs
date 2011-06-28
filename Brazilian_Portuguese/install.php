<?php

// Language definitions used in install.php, localized by adaur

$lang_install = array(

'Install message'				=>	'O arquivo \'config.php\' não existe ou está corrompido. Isto implica que o FluxBB ainda não foi instalado.',
'Choose install language'		=>	'Escolha o idioma do script de instalação',
'Choose install language info'	=>	'O idioma usado para este script de instalação. O idioma padrão usado no site pode ser definido abaixo.',
'Install language'				=>	'Idioma de instalação',
'Change language'				=>	'Alterar idioma',
'Next'							=>	'Próximo',
'Already installed'				=>	'Parece que o FluxBB já está instalado. Você deve seguir para <a href="index.php">here</a> ao invés disso.',
'You are running error'			=>	'Você está rodando %1$s versão %2$s. FluxBB %3$s exige ao menos %1$s %4$s para funcionar corretamente. Você deve atualizar sua instalação %1$s antes de poder continuar.',
'My FluxBB Forum'				=>	'Meu Fórum FluxBB',
'Description'					=>	'Infelizmente não é possível definir o que é o FluxBB - você tem que ver por si mesmo.',
'Username 1'					=>	'Nomes de usuários devem ter ao menos 2 caracteres.',
'Username 2'					=>	'Nomes de usuários não podem ter mais que 25 caracteres.',
'Username 3'					=>	'O nome de usuário visitante é reservado.',
'Username 4'					=>	'Nomes de usuários não podem ter o formato de endereços IP.',
'Username 5'					=>	'Nomes de usuários não podem usar todos os caracteres \', " e [ ou ] de uma vez.',
'Username 6'					=>	'Nomes de usuários não podem conter nenhuma das tags de formatação de texto (BBCode) que o fórum use.',
'Short password'				=>	'Senhas devem ter ao menos 4 caracteres.',
'Passwords not match'			=>	'As senhas não combinam.',
'Wrong email'					=>	'O endereço de email de administrador que você digitou é inválido.',
'No board title'				=>	'Você deve definir um título para o site.',
'Error default language'		=>	'O idioma padrão escolhido parece não existir.',
'Error default style'			=>	'O estilo padrão escolhido parece não existir.',
'No DB extensions'				=>	'Este ambiente PHP não tem suporte para nenhum dos bancos de dados usados pelo FluxBB. O PHP precisa ter suporte para MySQL, PostgreSQL ou SQLite para que o FluxBB seja instalado.',
'Administrator username'		=>	'Nome de usuário do administrador',
'Administrator password 1'		=>	'Senha 1 do administrador',
'Administrator password 2'		=>	'Senha 2 do administrador',
'Administrator email'			=>	'Email do administrador',
'Board title'					=>	'Título do site',
'Base URL'						=>	'URL Base',
'Required field'				=>	'é um campo obrigatório neste formulário.',
'FluxBB Installation'			=>	'Instalação do FluxBB',
'Welcome'						=>	'Você está prestes a instalar o FluxBB. Para instalar o FluxBB, você deve completar o formulário abaixo. Se encontrar qualquer dificuldade durante a instalação, por favor, use a documentação.',
'Install'						=>	'Instalar o FluxBB 1.4',
'Errors'						=>	'Os seguintes erros precisam ser corrigidos:',
'Database setup'				=>	'Configuração do banco de dados',
'Info 1'						=>	'Por favor, forneça a informação solicitada para configurar seu banco de dados para o FluxBB. Você deve conhecer todas as informações solicitadas antes de prosseguir com a instalação.',
'Select database'				=>	'Selecione o tipo do seu banco de dados',
'Info 2'						=>	'O FluxBB atualmente suporta MySQL, PostgreSQL e SQLite. Se o seu banco de dados não estiver listado no menu drop-down abaixo, significa que este ambiente PHP não tem suporte ao banco de dados em questão. Mais informações sobre as versões suportadas de cada banco de dados podem ser encontradas no FAQ.',
'Dual MySQL'					=>	'O FluxBB detectou que seu ambiente PHP suporta duas formas diferentes de comunicação com o MySQL. As duas opções são chamadas padrão e melhorada. Se você não tem certeza sobre qual deles usar, tente primeiro o melhorado, e caso isso falhe, tente o padrão.',
'InnoDB'						=>	'O FluxBB detectou que seu servidor MySQL pode suportar <a href="http://dev.mysql.com/doc/refman/5.0/en/innodb.html">InnoDB</a>. Esta pode ser uma boa opção se você pretende rodar um grande fórum. Se estiver incerto é recomendado que você não use o InnoDB.',
'Database type'					=>	'Tipo de banco de dados',
'Required'						=>	'(Obrigatório)',
'Database hostname'				=>	'Digite o hostname do servidor do seu banco de dados',
'Info 3'						=>	'O endereço do servidor do banco de dados (exemplo: localhost, db.meuhost.com.br ou 192.168.0.15). Você pode especificar um número de porta personalizado se seu banco de dados não rodar na porta padrão (exemplo: localhost:3580). Para suporte a SQLite, apenas digite qualquer coisa ou deixe como \'localhost\'.',
'Database server hostname'		=>	'Hostname do servidor do banco de dados',
'Database enter name'			=>	'Digite o nome do seu banco de dados',
'Info 4'						=>	'O nome do banco de dados no qual o FluxBB será instalado. O banco de dados deve existir. Para SQLite, este é o caminho relativo para o arquivo do banco de dados. Por razões de segurança, é altamente recomendado colocar o banco de dados SQLite em um diretório privado (não acessível da web) sempre que possível. Se o arquivo do banco de dados SQLite não existir, o FluxBB tentará criá-lo.',
'Database name'					=>	'Nome do banco de dados',
'Database enter informations'	=>	'Digite o nome de usuário e senha do seu banco de dados',
'Database username'				=>	'Nome de usuário do banco de dados',
'Info 5'						=>	'Digite o nome de usuário e senha com o qual você se conecta ao banco de dados. Ignorar se estiver usando SQLite.',
'Database password'				=>	'Senha do banco de dados',
'Database enter prefix'			=>	'Digite o prefixo de tabelas do banco de dados',
'Info 6'						=>	'Se desejar, você pode especificar um prefixo de tabelas. Desta forma você pode rodar múltiplas cópias do FluxBB no mesmo banco de dados (exemplo: foo_).',
'Table prefix'					=>	'Prefixo de tabelas',
'Administration setup'			=>	'Configuração de administração',
'Info 7'						=>	'Por favor, forneça as informações solicitadas a fim de configurar um administrador para sua instalação FluxBB.',
'Admin enter username'			=>	'Digite o nome de usuário do Administrador',
'Info 8'						=>	'O nome de usuário do administrador do fórum. Você pode criar mais administradores ou moderadores mais tarde. Nomes de usuários devem ter entre 2 e 25 caracteres.',
'Admin enter password'			=>	'Digite e confirme a senha do Administrador',
'Info 9'						=>	'Senhas devem ter 4 caracteres no mínimo. Senhas são sensíveis à caixa.',
'Password'						=>	'Senha',
'Confirm password'				=>	'Confirmar senha',
'Admin enter email'				=>	'Digite o email do Administrador',
'Info 10'						=>	'O endereço de email do administrador do fórum.',
'Board setup'					=>	'Configuração do site',
'Info 11'						=>	'Por favor, digite as informações solicitadas para configurar seu site com FluxBB.',
'Enter board title'				=>	'Digite o título do seu site',
'Info 12'						=>	'O título deste fórum (exibido no topo do site).',
'Enter board description'		=>	'Digite a descrição do seu site',
'Info 13'						=>	'Uma breve descrição deste site (exibida no topo do site). Este campo pode conter HTML.',
'Board description'				=>	'Descrição do site',
'Enter base URL'				=>	'Digite a URL Base da sua instalação FluxBB',
'Info 14'						=>	'A URL (sem a barra final) do seu fórum FluxBB (exemplo: http://forum.meuhost.com.br ou http://meuhost.com/~myuser). Isto <strong>deve</strong> estar correto, caso contrário, administradores e moderadores não poderão enviar formulário. Por favor, note que o valor pré-definido abaixo é apenas um suposição do FluxBB.',
'Choose the default language'	=>	'Escolha o idioma padrão',
'Info 15'						=>	'O idioma padrão usado para visitantes e usuários que não alteraram o ajuste padrão no perfil.',
'Default language'				=>	'Idioma padrão',
'Choose the default style'		=>	'Escolha o estilo padrão',
'Info 16'						=>	'O estilo padrão usado pelos visitantes e usuários que não alteraram o ajuste padrão no perfil.',
'Default style'					=>	'Estilo padrão',
'Start install'					=>	'Iniciar instalação',
'DB type not valid'				=>	'\'%s\' não é um tipo válido de banco de dados',
'Table prefix error'			=>	'O prefixo de tabelas \'%s\' contém caracteres ilegais ou é muito longo. O prefixo pode conter as letras de a a z, quaisquer números e o caracteres grifo. Porém ele não pode começar com um número. O comprimento máximo é de 40 caracteres. Por favor, escolha um prefixo diferente',
'Prefix reserved'				=>	'O prefixo de tabelas \'sqlite_\' é reservado para uso pelo motor SQLite. Por favor, escolha um prefixo diferente',
'Existing table error'			=>	'Uma tabela chamada \'%susers\' já está presente no banco de dados \'%s\'. Isto pode significar que o FluxBB já esteja instalado ou que outro programa está instalado e ocupando um ou mais dos nomes de tabelas que o FluxBB precisa. Se você deseja instalar múltiplas cópias do FluxBB no mesmo banco de dados, você precisa escolher um prefixo diferente',
'InnoDB off'					=>	'InnoDB não parece estar habilitado. Por favor, escolha uma camada de banco de dados que não possua suporte a InnoDB, ou ative o InnoDB no seu servidor MySQL',
'Administrators'				=>	'Administradores',
'Administrator'					=>	'Administrador',
'Moderators'					=>	'Moderadores',
'Moderator'						=>	'Moderador',
'Guests'						=>	'Visitantes',
'Guest'							=>	'Visitante',
'New member'					=>	'Novo membro',
'Members'						=>	'Membros',
'Member'						=>	'Membro',
'Announcement'					=>	'Digite o seu anúncio aqui.',
'Rules'							=>	'Digite suas regras aqui',
'Maintenance message'			=>	'O fórum está temporariamente fora do ar para manutenção. Por favor, tente novamente daqui alguns minutos.',
'Test post'						=>	'Mensagem de teste',
'Message'						=>	'Se você está olhando para isto (e eu acredito que esteja), a instalação do FluxBB parece ter dado certo! Agora você pode se autenticar e seguir para o painel de controle administrativo para configurar seu fórum.',
'Test category'					=>	'Categoria de teste',
'Test forum'					=>	'Fórum de teste',
'This is just a test forum'		=>	'Este é apenas um fórum de teste',
'Alert cache'					=>	'<strong>O diretório de cache não tem permissão de escrita!</strong> Para que o FluxBB funcione corretamente o diretório <em>%s</em> deve ter permissões de escrita pelo PHP. Use chmod para definir as permissões de diretório apropriadas. Se estiver em dúvida, faça chmod para 0777.',
'Alert avatar'					=>	'<strong>O diretório de avatares não tem permissão de escrita!</strong> Se você deseja que os usuários possam enviar seus próprios avatares, você deve garantir que o diretório <em>%s</em> tenha permissões de escrita pelo PHP. Você poderá posteriormente escolher salvar avatares em um diretório diferente (veja em Administrações/Opções). Use chmod para definir as permissões de diretório adequadas. Se estiver em dúvida, faça chmod para 0777.',
'Alert upload'					=>	'<strong>Parece que o envio de arquivos foi desativado neste servidor!</strong> Se você deseja que os usuários possam enviar seus próprios avatares você deve ativar a configuração file_uploads no PHP. Assim que o envio de arquivos for ativado, o envio de avatares poderá ser ativado em Administração/Opções/Funções.',
'FluxBB has been installed'		=>	'O FluxBB foi instalado. Para finalizar a instalação, por favor, siga as instruções abaixo.',
'Final instructions'			=>	'Instruções finais',
'Info 17'						=>	'Para finalizar a instalação, você precisa clicar no botão abaixo para baixar um arquivo chamado config.php. Você então deverá enviar este arquivo para o diretório base da sua instalação do FluxBB.',
'Info 18'						=>	'Uma vez que tiver enviado o arquivo config.php, o FluxBB estará completamente instalado! Neste ponto, você pode <a href="index.php">ir ao índice do fórum</a>.',
'Download config.php file'		=>	'Baixar o arquivo config.php',
'FluxBB fully installed'		=>	'O FluxBB foi completamente instalado! Você pode agora <a href="index.php">ir ao índice do fórum</a>.',

);
