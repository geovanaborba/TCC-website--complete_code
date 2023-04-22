$.ajax({
    url : '../pages/conexao.php', // your php file
    type : 'GET', // type of the HTTP request
    success : function(data){
       var obj = jQuery.parseJSON(data);
       console.log(obj);
    }
 });


let questions = [
  {
    numb: "select `id_question` from `questions`",
    question: "select `question` from `questions` where id_question = 1",
    answer: "select `alternativa_c` from `alternativas` where id_question = 1",
    options: [
      "select `alternativa_a` from `alternativas` where id_question = 1;",
      "select `alternativa_b` from `alternativas` where id_question = 1;",
      "select `alternativa_c` from `alternativas` where id_question = 1;",
      "select `alternativa_d` from `alternativas` where id_question = 1;"
    ]
  }
]