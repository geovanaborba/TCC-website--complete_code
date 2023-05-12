// criando um array e passando o número, perguntas, opções e respostas
const allQuestions = [
    {
      numb: 1,
      question: "O que significa Html?",
      answer: "Hyper Text Markup Language", //também funciona colocando o número da array sem aspas, iniciando por 0. Nesse exemplo é 1.
      options: [
        "Hyper Text Preprocessor",
        "Hyper Text Markup Language",
        "Hyper Text Multiple Language",
        "Hyper Tool Multi Language"
      ]
    },
    {
      numb: 2,
      question: "O que significa CSS?",
      answer: "Cascading Style Sheet",
      options: [
        "Common Style Sheet",
        "Colorful Style Sheet",
        "Computer Style Sheet",
        "Cascading Style Sheet"
      ]
    },
    {
      numb: 3,
      question: "O que significa PHP?",
      answer: "Hypertext Preprocessor",
      options: [
        "Hypertext Preprocessor",
        "Hypertext Programming",
        "Hypertext Preprogramming",
        "Hometext Preprocessor"
      ]
    },
    {
      numb: 4,
      question: "O que significa SQL?",
      answer: "Structured Query Language",
      options: [
        "Stylish Question Language",
        "Stylesheet Query Language",
        "Statement Question Language",
        "Structured Query Language"
      ]
    },
    {
      numb: 5,
      question: "O que significa XML?",
      answer: "eXtensible Markup Language",
      options: [
        "eXtensible Markup Language",
        "eXecutable Multiple Language",
        "eXTra Multi-Program Language",
        "eXamine Multiple Language"
      ]
    },
  
     {
       numb: 6,
     question: "HTML: Qual atributo só deve ser declarado uma vez?",
       answer: "id",
       options: [
         "class",
         "performance",
         "id",
         "session"
       ]
     },
  
   {
       numb: 7,
      question: "HTML: Qual a função da tag < ! -- -- > ?",
      answer: "Comentar uma linha",
       options: [
         "Marcar um texto como negrito", 
         "Comentar uma linha", 
         "Remover uma linha", 
         "Criar uma linha"
       ]
     },
  
    {
       numb: 8,
       question: "HTML: Qual tag define um parágrafo?",
       answer: "< p > < / p >",
       options: [
         "< parag > < / parag >", 
         "< p > < / p >", 
         "< par > < / par >", 
        "< / paragraph >"
       ]
     },
  
     {
       numb: 9,
       question: "CSS: Como devemos chamar um script?",
      answer: "< a href= “link css” >< / a >",
       options: [
         "< link rel= “stylesheet” href= “link css” >", 
        "< a href= “link css” >< / a >", 
         "< script href= “link css” >", 
         "< call script= “link css” >"
       ]
     },
  
     {
      question: "CSS: Qual a forma correta de se criar uma imagem?",
       answer: "< img src= “link imagem” >",
      options: [
         "< figure src= “link imagem” >< / figure >", 
          "< img src= “link imagem” >", 
        "< img > link imagem < / img >", 
         "< img src > link imagem < img >"
      ]
    },
  
    {
       numb: 11,
       question: "CSS: Para definir a largura máxima de um elemento, usamos:",
       answer: "max-width:",
      options: [
         "width-range:", 
         "max-content:", 
         "max-width:", 
         "max-element"
       ]
     },
  
     {
       numb: 12,
       question: "CSS: O seletor que for uma classe deve começar com?",
       answer: ". (ponto)",
       options: [
         ". (ponto)", 
         "; (ponto e vírgula)", 
         "/ (barra)", 
         "_ (underline)"
       ]
     },
  
     {
       numb: 13,
       question: "CSS: Qual é o local correto de colocar CSS externo?",
       answer: "Dentro do head",
       options: [
        "Final do documento", 
         "Dentro do body", 
        "Dentro do html", 
         "Dentro do head"
       ]
     },
  
    {
       numb: 14,
       question: "JavaScript: Como criamos uma função inline no elemento?",
       answer: "onclick=“ ”",
       options: [
         "noclick=“ ”", 
         "onclick=“ ”", 
         "click=“ ”", 
        "inclick=“ ”"
      ]
     },
  
     {
       numb: 15,
       question: "JavaScript é uma linguagem do lado do:",
       answer: "Cliente",
       options: [
         "Servidor", 
         "Desenvolvedor", 
         "Sistema", 
         "Cliente"
       ]
     },
  
    {
      numb: 16,
       question: "JavaScript: Qual operador permite concatenar strings?",
       answer: "+",
      options: [
         "!", 
         "&&", 
       "+", 
         "$"
       ]
     },
  
     {
       numb: 17,
       question: "JavaScript: Qual variável será bloqueada ao escopo que foi criada?",
       answer: "let nome = “Cassiano”;",
       options: [
         "let nome = “Cassiano”;", 
         "var private nome = “Cassiano”;", 
        "var nome = ”Cassiano”;", 
         "let private = “Cassiano”;"
       ]
     },
  
    {
       numb: 18,
       question: "PHP é uma linguagem de script projetada para desenvolvimento web, mas que também pode ser usada para programação de uso geral.",
       answer: "Certo",
       options: [
         "Certo", 
         "Errado"
       ]
     },
  
     {
       numb: 19,
       question: "PHP: Qual comando faz com que ocorra o término imediato da execução do loop?",
       answer: "break",
       options: [
         "exit", 
         "quit", 
         "stop", 
         "break"
       ]
     },
  
     {
       numb: 20,
       question: "PHP: Os delimitadores para indicar ao servidor onde se iniciam e se encerram os códigos PHP são:",
       answer: "< ? php ? >",
       options: [
         "< ! php ! >", 
         "< php > < / php >", 
         "< ? php ? >", 
         "< & php & >"
      ]
     },
  
     {
       numb: 21,
       question: "PHP: O comando “echo” na linguagem de programação PHP, tem qual função:",
       answer: "Mostrar dados na tela do usuário",
       options: [
         "Mostrar dados na tela do usuário", 
         "Mostrar a data atual do servidor", 
        "Verificar se a codificação está correta", 
         "Replicar uma linha de código"
       ]
     },
  
     {
       numb: 22,
       question: "JAVA: Para declarar um vetor do tipo inteiro e armazenar 60 valores, codificamos assim:",
       answer: "int valor [] = new int [60];",
       options: [
       "int valor [] = new int valor [60];", 
         "real valor [] = new int [60];", 
         "int valor [] = new int [60];", 
         "new int [] = valor [60];"
       ]
     },
  
     {
       numb: 23,
       question: "JAVA: Em Java, um bloco de código é:",
       answer: "Tudo que está entre { }",
       options: [
        "Tudo que está entre ( )", 
        "Tudo que está entre { }", 
        "Tudo que está entre [ ]", 
         "Tudo que está entre ” ”"
      ]
    },
  
     {
       numb: 24,
       question: "JAVA: Qual o tipo de dado para a entrada de valor “True”?",
       answer: "boolean",
       options: [
         "float", 
        "boolean", 
         "int", 
       ]
    },
  
     {
       numb: 25,
      question: "JAVA: Assinale a opção abaixo que devemos utilizar apenas para exibir uma mensagem ao usuário utilizando o JOptionPane",
       answer: "JOptionPane.showMessageDialog",
       options: [
         "JOptionPane.showMessageDialog", 
         "JOptionPane.showInputDialog", 
         "JOptionPane.showInputMessage", 
         "JOptionPane.displayMessageDialog"
       ]
     },
  
  ];

let questions = [];
// seleciona perguntas aleatórias e as remove do array allQuestions
while (questions.length < 25 && allQuestions.length > 0) {
    const randomIndex = Math.floor(Math.random() * allQuestions.length);
    const selectedQuestion = allQuestions.splice(randomIndex, 1)[0];
    questions.push(selectedQuestion);
}
  // array para armazenar as 5 perguntas escolhidas
