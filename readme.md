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

<br>


Para esse projeto, foi utilizada a ferramenta **USBWebServer** para o banco de dados. 

Ela é gratuita e é possível realizar o download por meio do link: <https://usbwebserver.yura.mk.ua/>

<br>

<hr>

<br>

# 📂 Documentação 

<br>

## ✔️ Fontes: 

* [Poppins](https://fonts.google.com/specimen/Poppins?query=poppins)

* [Press Start 2P](https://fonts.google.com/specimen/Press+Start+2P?query=press+start)

<br>

## ✔️ Cores: 

    --lilas: #8888EA;
    --laranja: #FCA82F;
    --roxo: #6066D0;
    --cinza-escuro: #535050;

<br>

## ✔️ Banco de Dados

<br>

### Variáveis de conexão

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
        constraint pk_cadastro primary key (usuario_id),
        constraint uk_cad_name unique key (username),
        constraint uk_cad_email unique key (email)
    );


<br><br>
» As chaves únicas criadas (username e email), farão com que o usuário não consiga fazer um novo cadastro caso o username ou email já estejam no banco de dados. 

<br>

» Além disso, para cada usuário cadastrado é gerado um ID de usuário dentro do banco de dados, através do Auto_Increment. 

<br>

**Obs.:** O CHARACTER SET utf8 COLLATE utf8_general_ci irá alterar o agrupamento dos elementos. 

*"Um agrupamento MySQL é um conjunto bem definido de regras que são usadas para comparar caracteres de um determinado conjunto de caracteres usando sua codificação correspondente."* [Fonte: Acervo Lima](https://acervolima.com/o-que-e-agrupamento-e-conjunto-de-caracteres-no-mysql/#:~:text=Um%20agrupamento%20MySQL%20%C3%A9%20um,caracteres%20usando%20sua%20codifica%C3%A7%C3%A3o%20correspondente.)

<br>

<center><img src="./src/assets/imgs/readme/estrutura_BD.png"></center>

<br>

<hr>

<br>

### Banco de Dados em funcionamento 

<br>

<img src="./src/assets/imgs/readme/funcionamento-cadastro.png">

<br>

*Img 1 e 2: O usuário preenche seus dados e é direcionado para a tela de confirmação. Ao clicar no botão, é encaminhado à tela de início do site.*

<br>

*Img 3: Print do banco de dados, logo após o registro do usuário teste1.*

<br>

<hr>

<br>

<br>

## ✔️ Tabelas para as demais funcionalidades do site
<br>

<br>
---- Tabela para mostrar a pontuação do usuário após responder o quiz, tornando possível mostrá-la no ranking.

    create table score (
        pontuacao INT(11),
        username VARCHAR(20) NOT NULL,
        FOREIGN KEY (username) REFERENCES cadastro(username)
    );

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

<br>

<br>

<hr>

## ✔️ Verificação de Acesso

<br>

<br>

Em todas as páginas dentro do site após o login, há um require_once para verificar Acesso do usuário. 

<br>

<img src="./src/assets/imgs/readme/verificarAcesso.jpg">

<br>

Caso o usuário tente acessar o site sem efetuar login, ele é redirecionado para a tela de 'Acesso Negado', solicitando o login e/ou cadastro do mesmo.

<img src="./src/assets/imgs/readme/acessoNegado.jpg">

Ao clicar no alerta, retorna-se à tela inicial do site. 

<br><br>

<hr>

<br><br>
## ✔️ Acesso Administrativo


<br><br>

<hr>

<br><br>
## ✔️ Adição de perguntas para o quizz

<br><br>

<hr>

<br><br>




