# Login-mysql

Conexao.php:
 A página de conexão é indispensável para o código pois ela será uma "ponte" entre o mysql e o banco de dados. As informações de conexão são colocadas nas variáveis senha, host, usuario e database. Caso ocorra um erro na conexão, o código encerrará com o comando die  exibirá uma mensagem. 

 Index.php:
  A lógica e funcionamento principal do código foram feitas no index através de uma estrutura de if e else, para que, caso o login funcione, o usuário possa ser encaminhado para a página painel, ou caso não funcione, exibirá uma mensagem de erro.

  Logout.php:
 O logout é também uma parte necessária para o código pois dá ao usuário a opção de deslogar de sua conta, e o comando session_destroy se certifica de encerrar a sessão.

 Painel.php:
  O painel é aberto caso a conta do usuário tenha sucesso em logar, exibindo uma mensagem de bem-vindo e a opção de sair de sua conta (que ocorre através da pasta logout).

  Protect.php:
   O protect serve para garantir que outros usuários não possam acessar o painel caso não estejam logadas no sistema através de uma de ifs. Caso a conta esteja logada, o comando continua normalmente, caso não esteja, o comando die irá encerrar a sessão e exibir uma mensagem.
  
