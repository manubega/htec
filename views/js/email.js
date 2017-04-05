/*============================================
=            Validaciòn del email            =
============================================*/
function validarEmail(){

var email = document.querySelector("#emailRegistro").value;

if(email != ""){
	var caracteres = email.length;

	if(caracteres > 25){
		/*===== document.querySelector("label[for='emailRegistro']").innerHTML += "<br>Escribe menos de 10 caracteres";
		======*/
		alert('Ingrese menos de 25 caracteres.');

		return false;
	}

}

	return true;
}



/*=====  End of Validaciòn del email  ======*/
