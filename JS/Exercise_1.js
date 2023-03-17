
document.getElementById("exce1-btn").onclick = () => {
    activeAnswer.title.textContent = "Ejercicio 1:";
    activeAnswer.answer.textContent = showOddNumbers(100,150);
    calculator.hidden = true;
};

const showOddNumbers = (min, max) => {
    let oddNumbers = "";
    for (let i = min; i <= max; i++) {
        if(i % 2 !== 0){
            if((i+1) >= max){
                oddNumbers += `${i}`;
            }else{
                oddNumbers += `${i},`;
            }
   
        }
    };
    return oddNumbers
};


// 1. Imprimir números impares mayores a 100 y menores a 150
// EJM. 101,103,105,107, n...


