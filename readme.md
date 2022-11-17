# Trabalho de Conclusão de Curso | ETEC - Projeto completo

<br>

Também foi criado um repositório para mostrar a parte visual do site no GitHub Pages, tornando possível que o professor acompanhasse o progresso do trabalho mais facilmente, durante as entregas das documentações do TCC no penúltimo semestre do curso, enquanto era criada a parte de front-end da página.

Você pode ver a página no link abaixo: 

[⇒ Parte visual da página no GitHub Pages.](https://geovanaborba.github.io/TCC-website/)

<br>

<hr>

<br>


Para esse projeto, foi utilizada a ferramenta **USBWebServer** para o banco de dados. 

Ela é gratuita e é possível realizar o download por meio do link: <https://usbwebserver.yura.mk.ua/>

<br>

<hr>

<br><br><br>
# Documentação

<br>

## Fontes: 

* [Poppins](https://fonts.google.com/specimen/Poppins?query=poppins)

* [Press Start 2P](https://fonts.google.com/specimen/Press+Start+2P?query=press+start)

<br>

## Cores: 

    --lilas: #8888EA;
    --laranja: #FCA82F;
    --roxo: #6066D0;
    --cinza-escuro: #535050;

<br>

## Banco de Dados
<br>

### Variáveis de conexão

    $servername = 'localhost';
    $username = 'root';
    $password = 'usbw';
    $database = 'tcc';

<br>

### Utilize os seguintes comandos para criação do banco de dados: 

    create database tcc;

    create table cadastro (
        usuario_id int (11) not null AUTO_INCREMENT,
        nome varchar (60) not null,
        username varchar (20) not null,
        email varchar (80) not null,
        senha varchar (20) not null,
        constraint pk_cadastro primary key (usuario_id)
    );

    create table login (
        username varchar (20) not null,
        senha varchar (20) not null,
        constraint pk_login primary key (username)
    );

    insert into `tcc`.`login` (`username`, `senha`) values ('teste1', 'teste123');


