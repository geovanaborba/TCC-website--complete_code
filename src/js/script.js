//selecionando todos os elementos necessários
const start_btn = document.querySelector(".start_btn button");
const info_box = document.querySelector(".info_box");
const exit_btn = info_box.querySelector(".buttons .quit");
const continue_btn = info_box.querySelector(".buttons .restart");
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");

// se o botão startQuiz for clicado
start_btn.onclick = () => {
    info_box.classList.add("activeInfo"); // mostra a caixa de informações
}

// se o botão exitQuiz for clicado
exit_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // esconde a caixa de informações
}

// se o botão continueQuiz for clicado
continue_btn.onclick = () => {
    info_box.classList.remove("activeInfo"); // esconde a caixa de informações
    quiz_box.classList.add("activeQuiz"); // mostra a caixa de perguntas
    showQuestions(0); //chamando a função showQuestions
    queCounter(1); //passando 1 parâmetro para queCounter
    startTimer(20); //chamando a função startTimer
    startTimerLine(0); //chamando a função startTimerLine
}

let timeValue = 20;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;
const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

// se o botão restartQuiz for clicado
restart_quiz.onclick = () => {
    quiz_box.classList.add("activeQuiz"); // mostra a caixa de perguntas
    result_box.classList.remove("activeResult"); //esconde a caixa de resultados
    timeValue = 20;
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuestions(que_count); //chamando a função showQuestions
    queCounter(que_numb); //passando valor que_numb para queCounter
    clearInterval(counter); //limpa o contador
    clearInterval(counterLine); //limpa counterLine
    startTimer(timeValue); //chamando a função startTimer
    startTimerLine(widthValue); //chamando a função startTimerLine
    timeText.textContent = "Tempo restante"; //muda o texto de timeText para Time Left
    next_btn.classList.remove("show"); //esconde o próximo botão
}

// se o botão quitQuiz for clicado
quit_quiz.onclick = () => {
    window.location.reload(); //recarrega a janela atual
}

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

// se o botão Next Que foi clicado
next_btn.onclick = () => {
    if (que_count < questions.length - 1) { //se a contagem de perguntas for menor que o total das questions.length
        que_count++; //incrementa o valor que_count
        que_numb++; //incrementa o valor que_numb
        showQuestions(que_count); //chamando a função showQuestions
        queCounter(que_numb); //passando valor que_numb para queCounter
        clearInterval(counter); //limpa o contador
        clearInterval(counterLine); //limpa counterLine
        startTimer(timeValue); //chamando a função startTimer
        startTimerLine(widthValue); //chamando a função startTimerLine
        timeText.textContent = "Tempo restante"; //muda o timeText para Time Left
        next_btn.classList.remove("show"); //esconde o próximo botão
    } else {
        clearInterval(counter); //limpa o contador
        clearInterval(counterLine); //limpa counterLine
        showResult(); //chamando a função showResult
    }
}

// obtendo perguntas e opções do array
function showQuestions(index) {
    const que_text = document.querySelector(".que_text");

    //criando uma nova tag span e div para question e option e passando o valor usando array index
    let que_tag = '<span>' /* + questions[index].numb + ". " */ + questions[index].question + '</span>';
    let option_tag = '<div class="option"><span>' + questions[index].options[0] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[1] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[2] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[3] + '</span></div>';
    que_text.innerHTML = que_tag; //adicionando nova tag span dentro da que_tag
    option_list.innerHTML = option_tag; //adicionando nova tag div dentro de option_tag

    const option = option_list.querySelectorAll(".option");

    // define o atributo onclick para todas as opções disponíveis
    for (i = 0; i < option.length; i++) {
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}
// criando as novas tags div que para ícones
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

//se o usuário clicou na opção
function optionSelected(answer) {
    clearInterval(counter); //limpa o contador
    clearInterval(counterLine); //limpa counterLine
    let userAns = answer.textContent; //obtendo a opção selecionada pelo usuário
    let correcAns = questions[que_count].answer; //obtendo a resposta correta do array
    const allOptions = option_list.children.length; //obtendo todos os itens de opção

    if (userAns == correcAns) { //se a opção selecionada pelo usuário for igual à resposta correta do array
        userScore += 1; // atualizando o valor da pontuação com 1
        userPoints = (userScore * 10); //se resposta certa, pontos do usuário multiplicado por 10 
        answer.classList.add("correct"); // adicionando cor verde para corrigir a opção selecionada
        answer.insertAdjacentHTML("beforeend", tickIconTag); //adicionando ícone de marca para corrigir a opção selecionada
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
        console.log("Your points = " + userPoints);
    } else {
        answer.classList.add("incorrect"); // adicionando cor vermelha para corrigir a opção selecionada
        answer.insertAdjacentHTML("beforeend", crossIconTag); //adicionando ícone de cruz para corrigir a opção selecionada
        console.log("Wrong Answer");

        for (i = 0; i < allOptions; i++) {
            if (option_list.children[i].textContent == correcAns) { //se houver uma opção que corresponda a uma resposta da array
                option_list.children[i].setAttribute("class", "option correct"); //adicionando a cor verde à opção correspondente
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adicionando o ícone de marca para a opção correspondente
                console.log("Auto selected correct answer.");
            }
        }
    }
    for (i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled"); //uma vez que o usuário seleciona uma opção, desativa todas as opções
    }
    next_btn.classList.add("show"); // mostra o próximo botão se o usuário selecionou alguma opção
}

function showResult() {
    info_box.classList.remove("activeInfo"); //esconde a caixa de informações
    quiz_box.classList.remove("activeQuiz"); //esconde a caixa do quiz
    result_box.classList.add("activeResult"); // mostra a caixa de resultados
    const scoreText = result_box.querySelector(".score_text");
    if (userScore > 3) { // se o usuário marcou mais de 3
        //criando uma nova tag span e passando o número da pontuação do usuário e o número total da pergunta
        let reaction = '<span><center> Parabéns! 🎉😎 <center></span>';
        let scoreTag = '<span>Você acertou <p>' + userScore + '</p> de <p>' + questions.length + '</p></span>';
        let scorePoints = '<span>Pontuação final: <p>' + userPoints + '</p></span>';
        scoreText.innerHTML = reaction + scoreTag + scorePoints;  //adicionando nova tag span dentro do score_Text
    }
    else if (userScore >= 1) { // se o usuário marcou mais de 1
        let reaction = '<span><center> Na média... 😬 <center></span>';
        let scoreTag = '<span>Você acertou <p>' + userScore + '</p> de <p>' + questions.length + '</p></span>';
        let scorePoints = '<span>Pontuação final: <p>' + userPoints + '</p></span>';
        scoreText.innerHTML = reaction + scoreTag + scorePoints;
    }
    else { // se o usuário marcou menos de 1
        let reaction = '<span><center> Opa... 😐 <center></span>';
        let scoreTag = '<span>Você acertou<p>' + userScore + '</p> de <p>' + questions.length + '</p></span>';
        let scorePoints = '<span>Pontuação final: <p>' + userPoints + '</p></span>';
        scoreText.innerHTML = reaction + scoreTag + scorePoints;
    }
    sendPoints();
}

function startTimer(time) {
    counter = setInterval(timer, 1000);
    function timer() {
        timeCount.textContent = time; //alterando o valor de timeCount com valor de tempo
        time--; // decrementa o valor do tempo
        if (time < 9) { //se o timer for menor que 9
            let addZero = timeCount.textContent;
            timeCount.textContent = "0" + addZero; //adiciona um 0 antes do valor do tempo
        }
        if (time < 0) { //se o timer for menor que 0
            clearInterval(counter); //limpa o contador
            timeText.textContent = "O tempo acabou!"; //muda o texto do tempo para indicar que acabou
            const allOptions = option_list.children.length; //obtendo todos os itens de opção
            let correcAns = questions[que_count].answer; //obtendo a resposta correta do array
            for (i = 0; i < allOptions; i++) {
                if (option_list.children[i].textContent == correcAns) { //se houver uma opção que corresponda a uma resposta do array
                    option_list.children[i].setAttribute("class", "option correct"); //adicionando a cor verde à opção correspondente
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag); //adicionando o ícone de marca para a opção correspondente
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for (i = 0; i < allOptions; i++) {
                option_list.children[i].classList.add("disabled"); //uma vez que o usuário seleciona uma opção, desativa todas as opções
            }
            next_btn.classList.add("show"); // mostra o próximo botão se o usuário selecionou alguma opção
        }
    }
}

function startTimerLine(time) {
    counterLine = setInterval(timer, 200);
    function timer() {
        time += 1; // atualizando o valor do tempo com 1
        time_line.style.width = time + "%"; //aumento da largura da time_line com px por valor de tempo
        if (time > 99) { //se o valor do tempo for maior que 9
            clearInterval(counterLine); //limpa counterLine
        }
    }
}

function queCounter(index) {
    //criando uma nova tag span e passando o número da pergunta e o total de perguntas
    let totalQueCounTag = '<span><p>' + index + '</p> de <p>' + questions.length + '</p> questões</span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;  //adicionando nova tag span dentro do bottom_ques_counter
}


function sendPoints() {
    $.ajax({
        url: ('../pages/quizAction.php'),
        type: 'POST',
        data: { "pontuacao": userPoints },
        success: function () {
            console.log("Pontuação enviada com sucesso: " + userPoints);
        }
    });
}