function operacion() {
    let num1 = document.getElementById("num1").value;
    let num2 = document.getElementById("num2").value;
    let opcion = document.getElementById("opcion").value;
    const divResultado = document.getElementById('resultado');

    if (isNaN(num1) || isNaN(num2) || num1 === '' || num2 === '') {
        alert("Por favor, ingresa solamente números.");
        return; 
    }

    num1 = parseFloat(num1);
    num2 = parseFloat(num2);

    switch (opcion) {
        case "suma":
            divResultado.innerHTML = `<h2>${num1} + ${num2} = ${num1 + num2}</h2>`;
            break;
        case "resta":
            divResultado.innerHTML = `<h2>${num1} - ${num2} = ${num1 - num2}</h2>`;
            break;
        case "multiplicacion":
            divResultado.innerHTML = `<h2>${num1} * ${num2} = ${num1 * num2}</h2>`;
            break;
        case "divicion":
            if (num2 !== 0) {
                divResultado.innerHTML = `<h2>${num1} / ${num2} = ${num1 / num2}</h2>`;
            } else {
                divResultado.innerHTML = `<h2>Error: División por cero</h2>`;
            }
            break;
    }
}
