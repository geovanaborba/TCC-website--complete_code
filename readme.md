# Trabalho de Conclusão de Curso | ETEC - Projeto completo

<br>

Também foi criado um repositório para mostrar a parte visual do site no GitHub Pages, tornando possível que o professor acompanhasse o progresso do trabalho mais facilmente, durante as entregas das documentações do TCC no penúltimo semestre do curso, enquanto era criada a parte de front-end da página.

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

<br><br>
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


<br>
» As chaves únicas criadas (username e email), farão com que o usuário não consiga fazer um novo cadastro caso o username ou email já estejam no banco de dados. 

<br>

» Além disso, para cada usuário cadastrado é gerado um ID de usuário dentro do banco de dados, através do Auto_Increment. 

<br>

**Obs.:** O CHARACTER SET utf8 COLLATE utf8_general_ci irá alterar o agrupamento dos elementos. 

*"Um agrupamento MySQL é um conjunto bem definido de regras que são usadas para comparar caracteres de um determinado conjunto de caracteres usando sua codificação correspondente."* [Fonte: Acervo Lima](https://acervolima.com/o-que-e-agrupamento-e-conjunto-de-caracteres-no-mysql/#:~:text=Um%20agrupamento%20MySQL%20%C3%A9%20um,caracteres%20usando%20sua%20codifica%C3%A7%C3%A3o%20correspondente.)

<br>

<center><img src="./src/assets/imgs/readme/estrutura_BD.png"></center>







