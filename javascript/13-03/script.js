//var nombre=prompt('cual es tu nombre?');
document.getElementById('mensaje').innerHTML='Hola';

let edad="20";
let altura=7.4;
console.log(edad)

const ol=2;

console.log(parseInt(edad) + ol)

edad = edad.concat(", vuendasj");
edad = edad.toUpperCase();
edad = edad.toLowerCase();
edad = edad.replace("a", "@");
edad = edad.split(",");
edad = edad.includes("o");


console.log(Math.ceil(altura));
console.log(Math.floor(altura));
console.log(Math.round(altura));
console.log(Math.pow(2,3));
console.log(Math.sqrt(9));
console.log(Math.abs(-6));

let numeros=[3,6,8,1];
console.log(numeros);
//numeros=new Array();

numeros[4]=79;
numeros.push(97);
numeros.unshift(10);
numeros.shift();
numeros.pop();
numeros.reverse();
numeros.sort();
console.log(numeros);
console.log(typeof(numeros[1]));

//objetos
let  /*const*/ arreglo={
	matricula: 12345,
	nombre:'juan',
	edad: 20,
	trabaja: false,
	domicilio:{
		calle:'carrera',
		numero:1000,
		colonia: 'centro'
	},
	pasatiempos:['leer','correr',8564659899897798]
}
console.log(arreglo);

console.log(arreglo.nombre);

arreglo.domicilio.numero=60000;
console.log(arreglo)

console.log(suma(1,3));

function suma(n1,n2){
	let resultado;
	resultado=n1+n2;
	return resultado;
}


console.log(suma2(5,3));

const suma2 = function(n1,n2){
	let resultado;
	resultado=n1+n2;
	return resultado;
}


