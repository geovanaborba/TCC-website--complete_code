# Trabalho de Conclusão de Curso | ETEC - Projeto completo 

<br>

<center><img src="./src/assets/imgs/readme/green.svg"></center>

<br><br>

Além desse repositório, também foi criado um para mostrar a parte visual do site no GitHub Pages, tornando possível que o professor acompanhasse o progresso do trabalho mais facilmente, durante as entregas das documentações do TCC no penúltimo semestre do curso, enquanto era criada a parte de front-end do site.

Você pode ver a página no link abaixo: 

[⇒ Parte visual da página no GitHub Pages.](https://geovanaborba.github.io/TCC-website/)

<center><img src="./src/assets/imgs/readme/gif_index.gif"></center>

<br>

<hr>

<br><br>

# 📂 Documentação 

<br>

<details>
<summary><h2> ✔️ Fontes e Cores </h2></summary>

<hr>
<br><br>

* [Poppins](https://fonts.google.com/specimen/Poppins?query=poppins)

* [Press Start 2P](https://fonts.google.com/specimen/Press+Start+2P?query=press+start)

<br>

    --lilas: #8888EA;
    --laranja: #FCA82F;
    --roxo: #6066D0;
    --cinza-escuro: #535050;

<br>

<hr>
<br><br>

</details>



<details>
<summary><h2> ✔️ Criação do Banco de Dados </h2></summary>

<hr>
<br><br>


Inicialmente, para a fase de testes do banco de dados, foi utilizada a ferramenta **USBWebServer** para a criação do banco de dados. 

Ela é gratuita e é possível realizar o download por meio do link: <https://usbwebserver.yura.mk.ua/>

<br>

Entretanto, ao decorrer do projeto, passamos a utilizar o Workbench, visto que o banco de dados foi implantado em mecanismo mySQL no [Amazon RDS](https://aws.amazon.com/pt/rds/): Um serviço da web que facilita a configuração e operação de banco de dados em nuvem AWS, tornando possível que todos do grupo do TCC utilizassem o mesmo BD.  

Dessa forma, as variáveis de conexão ficarão invisíveis por questões de segurança.

<br>

<hr>

### Variáveis de conexão se utilizado USBWebServer

    $servername = 'localhost';
    $username = 'root';
    $password = 'usbw';
    $database = 'tcc';

<br>

### Criação do Database e tabela para o cadastro e login no site: 

<br>

    create database tcc
    CHARACTER SET utf8
    COLLATE utf8_general_ci;

    create table cadastro (
        usuario_id int (10) NOT NULL AUTO_INCREMENT,
        nome varchar (90) NOT NULL,
        username varchar (20) NOT NULL,
        email varchar (90) NOT NULL,
        senha varchar (30) NOT NULL,
        pontuacao int(11) DEFAULT '0',
        constraint pk_cadastro primary key (usuario_id),
        constraint uk_cad_name unique key (username),
        constraint uk_cad_email unique key (email)
    );


<br><br>
» As chaves únicas criadas (username e email), farão com que o usuário não consiga fazer um novo cadastro caso o username ou email já estejam no banco de dados. 

<br>

» Além disso, para cada usuário cadastrado é gerado um ID de usuário dentro do banco de dados, através do Auto_Increment, para que cada usuário possa ser identificado por um código próprio. 

<br>

» A chave pontuacao servirá para que posteriormente, o usuário possa ser inserido no ranking do site. Conforme seus acertos no quiz, os pontos irão aumentando através de funções inseridas no código. O valor inicial de pontos ao criar a conta é '0'. 

<br>

**Obs.:** O CHARACTER SET utf8 COLLATE utf8_general_ci irá alterar o agrupamento dos elementos. 

*"Um agrupamento MySQL é um conjunto bem definido de regras que são usadas para comparar caracteres de um determinado conjunto de caracteres usando sua codificação correspondente."* [Fonte: Acervo Lima](https://acervolima.com/o-que-e-agrupamento-e-conjunto-de-caracteres-no-mysql/#:~:text=Um%20agrupamento%20MySQL%20%C3%A9%20um,caracteres%20usando%20sua%20codifica%C3%A7%C3%A3o%20correspondente.)

<br>

<center><img src="./src/assets/imgs/readme/estrutura_BD.png"></center>

<br>

<hr>

<br><br>

## Banco de Dados em funcionamento 

<br><br>

<img src="./src/assets/imgs/readme/funcionamento-cadastro.png">

<br>

*Img 1 e 2: O usuário preenche seus dados e é direcionado para a tela de confirmação. Ao clicar no botão, é encaminhado à tela de início do site.*

<br>

*Img 3: Print do banco de dados, logo após o registro do usuário teste1.*

<br><br>

<hr>

<br><br>

## ✔️ Tabela de Pontuação e Adição de perguntas e alternativas no BD
<br>

<br>
---- Criação da Tabela Questions. Nela as questões do quiz ficarão salvas e seguras para que o usuário não as acesse antes de responder o quiz. 

    create table questions ( 
	id_question int(3) not null auto_increment, 
	question varchar(256) not null, 
	primary key (id_question) 
    );
<br>

<br>
----- Criação da tabela Alternativas. Assim como a Questions, deixará as alternativas seguras no BD para o usuário não visualizá-las.

    create table alternativas (
	id_question int(3) not null auto_increment, 
	alternativa_a varchar(256) not null, 
	alternativa_b varchar(256) not null, 
	alternativa_c varchar(256) not null, 
	alternativa_d varchar(256) not null, 
	FOREIGN KEY (id_question) REFERENCES questions (id_question) 
    );

<br><br>

<hr>
<br><br>

</details>


<details>
<summary><h2>✔️ Banco de Dados em nuvem - Amazon RDS </h2></summary>

<hr>
<br><br>

Foi criada uma conta de nível gratuito na Amazon AWS (Amazon Web Services) para utilizarmos o banco de dados através do [Amazon RDS](https://aws.amazon.com/pt/rds/) (Relational Database Service). Com ele foi possível que todos do grupo tivessem acesso ao mesmo banco de dados ao mesmo tempo, para que fizessem alterações e complementos sem necessidade de criar um local em cada máquina dos integrantes. 

O Amazon RDS é um serviço de banco de dados relacional gerenciado para MySQL, PostgreSQL, MariaDB ou SQL Server. O nível gratuito fica disponível para o usuário por 12 meses e é possível ter 750 horas de uso de instâncias executando banco de dados mySQL, Postgre, SQL Server e MariaDB por mês.  Além disso, são disponibilizados 20GB de armazenamento de banco de dados (SSD) e 20GB de armazenamento de backup. 

Conforme o próprio site diz em sua descrição sobre a plataforma, a AWS ajuda novos usuários a usar um serviço de banco de dados gerenciado na nuvem sem custos. É possível usar o nível gratuito para desenvolver aplicações, realizar testes ou simplesmente para aprender e ganhar experiência com o RDS. 


<br>

<hr>
<br><br>

</details>


<details>
<summary><h2>✔️ PHP DotEnv</h2></summary>

<hr>
<br><br>

Para a proteção de usuário e senha do banco de dados em nuvem, foi utilizado o [PHP dotenv](https://github.com/vlucas/phpdotenv). 
Com ele, os dados sensíveis são armazenados dentro de variáveis, mas não uma variável qualquer como as criadas com ‘$’(cifrão) no início delas. Com o dotenv, ela se torna uma variável de ambiente, ou seja, ela será criada no ambiente onde o PHP está.
Para isso, foi utilizado o [Composer](https://getcomposer.org/), um gerenciador de dependências. Dessa forma, criamos um arquivo global.php para chamar as dependências do Composer, dentro da pasta vendor. 
O arquivo .env não ficará visível para todos no site e dentro dele colocamos as variáveis com os dados que devem ser escondidos. 

<br>

<img src="./src/assets/imgs/readme/dotenv1.png">

<br>

<br>

<img src="./src/assets/imgs/readme/dotenv2.png">

<br>

No arquivo conexão.php, foram utilizadas as variáveis criadas dentro do arquivo .env, chamadas através da variável superglobal $_ENV[‘ ’];

<br>

<img src="./src/assets/imgs/readme/dotenv3.png">

<br>

Por fim, foi criado um arquivo .gitignore, para que, como o próprio nome diz, o versionamento Git ignore os arquivos que constam dentro dele e não os subam para a plataforma. 
 
<br><br>

**Instalação do Composer em sistema Linux**

Para a instalação dele em Mac ou Linux, é necessário a utilização de alguma interface de linha de comando. Também é necessário que a interface de linha de comando esteja no diretório-raiz da aplicação, antes de ser aplicado o comando: 
composer require vlucas/phpdotenv

<br>

**Instalação do Composer em Sistema Windows**

Para instalação em sistemas Windows, baixe o instalador clicando aqui. Depois execute a aplicação e siga os passos necessários. O instalador vai colocar o Composer no PATH do Windows, assim será possível executar o comando de qualquer diretório. 
 
<br>

<img src="./src/assets/imgs/readme/dotenv4.png">

<br>
Obs.: O projeto estava sendo realizado através do USBWServer. Devido essa aplicação não manter o PHP localmente, foi utilizada a ferramenta Xampp para que a instalação do Composer pudesse ser finalizada.

<br>

<hr>
<br><br>

</details>


<details>
<summary><h2>✔️Verificação de Acesso e Sessões </h2></summary>

<hr>
<br><br>

Em todas as páginas há um require_once para verificar Acesso do usuário. Essa verificação se dá por meio de sessões. Cada coluna da tabela do banco de dados recebeu uma variável $_SESSION para que fossem utilizados os dados apenas do usuário logado.

<br>

<img src="./src/assets/imgs/readme/verificarAcesso.jpg">

<br>

Sendo assim, para que o código funcione da maneira correta, foram criadas sessões a partir da variável $linha buscando os dados da tabela.

Se a linha não for vazia e se essa linha for igual à senha inserida pelo usuário, então esse usuário terá permissão para ser conectado ao site. Ao mesmo tempo, serão criadas variáveis de sessão com os dados apenas desse usuário logado. 

<br>

<img src="./src/assets/imgs/readme/codigoSessao.jpg">

<br>

Caso o usuário tente acessar o site sem efetuar login, ele é redirecionado para a tela de 'Acesso Negado', solicitando o login e/ou cadastro do mesmo.

<br>

<img src="./src/assets/imgs/readme/acessoNegado.jpg">

<br>

Ao clicar no alerta, retorna-se à tela inicial do site. 

Assim como uma tentativa de login incorreta, também emite um alerta indicando erro na tentativa.

<br>

<img src="./src/assets/imgs/readme/loginInvalido.jpg">

<br><br>

A verificação de sessão é extremamente importante, para que apenas os dados do usuário logado fossem exibidos e fosse realizado o logout do site com todas essas informações, como nome completo, nome de usuário e e-mail cadastrados.

Exemplos:

<br>

<img src="./src/assets/imgs/readme/perfilSessao.jpg">

*Imagem: Card de perfil exibindo o nome e username do usuário logado*

<br><br>

<img src="./src/assets/imgs/readme/infosSessao.jpg">

*Imagem: Formulário na página Alterar Dados, puxando dados de sessão logada*

<br>

<hr>
<br><br>

</details>


<details> 
<summary><h2> ✔️ Acesso Administrativo </h2></summary>

<hr>
<br><br>

</details>



<details>
<summary><h2> ✔️ API Formspree </h2></summary>

<hr>
<br><br>

Na página alterarDados.php foi adicionado o botão "Contatar Suporte". Ao clicar nele, o usuário será direcionado até a tela de contato, contendo um formulário que poderá ser enviado ao email de moderação.

<br>

Para envio desse formulário, foi utilizada a [API Formspree](https://formspree.io/).

Para utilizá-la, basta definir o formulário action no html para o endpoint gerado pela API. Nenhum código de servidor é necessário.

<br><br>
<img src="./src/assets/imgs/readme/formspree.png">

*Imagem: Tela de integração da API com instruções de uso*

<br><br>

Ao clicar no botão enviar, a API entra em funcionamento e envia o formulário para o email cadastrado no site.

<br><br>
<img src="./src/assets/imgs/readme/teste-contato.png" width="400">

*Imagem: Texto utilizado no formulário para teste, ao enviar o email*
<br><br>

<img src="./src/assets/imgs/readme/retorno-teste.jpg">

*Imagem: Conteúdo do formulário recebido por email pelo moderador do Progquiz

<br><br>

Infelizmente o FormSpree não tem tradução para português, nem permite personalização sem um plano pago, portanto, ele foi utilizado no projeto apenas para exemplificar o que pode ser feito futuramente com uma implementação melhor trabalhada.

Além disso, a versão gratuita tem um limite mensal de 50 emails recebidos. Para um site de grande porte, essa opção de API se torna inviável, a menos que seja feito o upgrade na conta, para desbloquear as demais funcionalidades. 

<br>

<hr>
<br><br>

</details>



<details>
<summary><h2> ✔️ Aplicativo Mobile </h2></summary>

<hr>
<br><br>

O principal objetivo da criação da aplicação mobile, inicialmente, seria a integração de dados do ranking para visualização dos usuários. A ideia seria que, os usuários do site, pudessem acompanhar as pontuações no ranking através do aplicativo de celular, sem necessitar fazer login no site via browser ou login via aplicativo. 

Contudo, também é possível implementar o projeto completo, dando acesso a um aplicativo inteiro, totalmente baseado no site, com os mesmos dados de entrada criados no projeto do website. Para tanto, fica para uma implementação futura essa conexão.

<br>
Apenas a cargo de apresentação, foi criada a parte visual do projeto mobile utilizando a plataforma Kodular, a fim de exemplificar como poderia ser essa aplicação futura. 

Essa parte visual foi totalmente baseada no site, utilizando-se do mesmo padrão de cores, bem como mesmo background, estilização e fontes. Como projeto base, foi criada uma tela principal, assim como no site, para apresentar a imagem característica do projeto, assim como o nome com fonte específica para o quiz, apresentando nela os principais links para as telas de ranking, login e cadastro. 

<br>

Como o ranking do app ainda não tem integração direta com o ranking do site, foi adicionado um pequeno quiz com TinyBD como protótipo, utilizando-se de banco de dados local, para adição de tabela no ranking mencionado. Para elaborar a codificação da tela do quiz, foram realizados alterações e complementos no código, com base no tutorial apresentado no canal APP Inventor Brasil, postado em 2016 no Youtube. 

<br>

**<h3> » Toda a documentação contendo os resultados visuais e códigos elaborados para o devido funcionamento do aplicativo pode ser lida » AQUI «</h3>** 


<br><br>

<img src="./src/assets/imgs/readme/mobile.jpg" width="300">

*Imagem: Tela inicial do app mobile*

<br>

<hr>

<br><br>

</details>