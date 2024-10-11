//Este es un comentario de JS de una linea

/*Este es un comentario de 
varias 
lineas de codigo
*/

//variables
var nombre="Dagoberto Fiscal Gurrola";
var nombre2='Daniel Flores';
let nombre3="Rodolfo Flores";
let edad=20;
let estatura=1.80;
let logico=true;

//Mostrar contenido de variables 
console.log("Hola soy la consola y tu nombre es: "+nombre3); // atraves de consola
document.write("Hola soy la consola y tu nombre es: "+nombre3)
document.write("<hr><h2>Hola soy la consola y tu nombre es: "+nombre3+"</h2>")

//Alertas
// alert("Soy una alerta: "+nombre)

// Mostrar contenido con getElementByID
let datos = document.getElementById("informacion");
datos.innerHTML = "Hola, soy un contenido de innerHTML<br>";
datos.innerHTML+= "<hr><h2>Hola, soy otro contenido de innerHTML</h2>";
datos.innerHTML+= "<hr><h2>Mi edad es: "+edad+"</h2>";
datos.innerHTML+= `
    <hr>
    <h2>Mi edad es: ${edad}</h2>
    <h2>Mi nombre es: ${nombre2}</h2>
    <hr>
`;

//Condiciones 

if(edad>=18)
datos.innerHTML+=`<hr><h2>Mayor de edad</h2>`;
else 
datos.innerHTML+=`<h2>Soy Menor de edad</h2><hr>`;

//Ciclos

for(let i=1; i<=5; i++)
{
    datos.innerHTML+=`<hr><h2>For: soy el numero: ${i} </h2>`;
}

let i=1
while(i<=5)
{
    datos.innerHTML+=`<hr><h2>While: soy el numero: ${i} </h2>`;
    i++;
}

i=1;
do
{
    datos.innerHTML+=`<hr><h2>DoWhile: soy el numero: ${i} </h2>`;
    i++;
}while(i<=5);

//1.- Funciones que no reciben parametros y no regresan valor:

function suma()
{
    let n1=2;
    let n2=3;
    let suma=n1+n2;
    datos.innerHTML+=`<hr><h2>La suma 1 es: ${suma} </h2>`;
}

//2.- Funciones que no reciben parametros y si regresan valor

function suma2()
{
    let n1=2;
    let n2=3;
    let suma=n1+n2;
    return suma;
}

let.sum=suma2();
datos.innerHTML+=`<hr><h2>La suma 2 es: ${sum} </h2>`;

//3.- Funciones que si reciben parametros y no regresan valor

function suma3(numero1,numero2)
{
    let n1=numero1;
    let n2=numero2;
    let suma=n1+n2;
    datos.innerHTML+=`<hr><h2>La suma 3 es: ${suma} </h2>`;
}

suma3(3,4);

//4.- Funciones que si reciben parametros y si regresan valor

function suma4(numero1,numero2)
{
    let n1=numero1;
    let n2=numero2;
    let suma=n1+n2;
    return suma;
}

sum=suma4(3,4);
datos.innerHTML+=`<hr><h2>La suma 4 es: ${sum} </h2>`;

// Arreglos:

let animales=[];
animales[0]="Perro";
animales[1]="Gallina";
animales[2]="Perico";

let animales2=["Leon","Tigre","Elefante"];

for(let i=0;i<animales.length;i++)
{
    datos.innerHTML+=`<hr><h2>El animal es: ${animales[i]} </h2>`; 
}

animales2.forEach(element=>{
    datos.innerHTML+=`<hr><h2>El animal es: ${element} </h2>`;
});