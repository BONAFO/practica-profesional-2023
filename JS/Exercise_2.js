
document.getElementById("exce2-btn").onclick = () => {
    activeAnswer.title.textContent = "Ejercicio 2:";
    activeAnswer.answer.textContent = "";
    calculator.hidden = false;
};

document.getElementById("calculate").onclick = () => {
    let operation;
    const values = [
        parseInt(document.getElementById("num1").value),
        parseInt(document.getElementById("num2").value)
    ];
    try {
        operation = document.querySelector('input[name="operation"]:checked').value;
    } catch (error) {
        operation = null;
    }

    if (!isNaN(values[0]) && !isNaN(values[1]) && operation !== null) {
        activeAnswer.answer.textContent = calculate(operation,values);
    } else {
        activeAnswer.answer.textContent = `Error: ${(operation === null)
            ? ("es necesario que elijas una operacion primero.")
            : ("numero invalido.")}`
    }
};

const calculate = (operation, numbers) => {
    switch (operation) {
        case "add":
            return `${numbers[0]} + ${numbers[1]} = ${numbers[0] + numbers[1]}`
        case "subtract":
            return `${numbers[0]} - ${numbers[1]} = ${numbers[0] - numbers[1]}`
        case "split":
            return `${numbers[0]} / ${numbers[1]} = ${numbers[0] / numbers[1]}`
        case "multiply":
            return `${numbers[0]} x ${numbers[1]} = ${numbers[0] * numbers[1]}`

    }
}

// 2. Crea una función que permita sumar, restar, multiplicar y dividir. Los valores para calcular deben ser enviados mediante inputs que solo permitan números enteros, el evento se iniciará a la pulsación de un botón llamado "calcular", Imprimir resultados por pantalla.

