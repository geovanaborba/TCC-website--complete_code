const numb = document.querySelector(".numb");
let counter = 0;
setInterval(()=>{
  if(counter == 100){
    clearInterval();
  }else{
    counter+=1;
    numb.textContent = counter + "%";
  }
}, 80);


const numero = document.querySelector(".numero");
let contador = 0;
setInterval(()=>{
  if(contador == 100){
    clearInterval();
  }else{
    contador+=1;
    numero.textContent = contador + "%";
  }
}, 80);