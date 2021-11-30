//https://www.youtube.com/watch?v=uUJr5Itz8kY
//https://www.youtube.com/watch?v=s7ykocU8Nog
//OBJETOS DE HTML
	let  formulario = document.getElementById('formulario');
	
	let  errorNombre=document.getElementById("errorNombre");
	let  errorPaterno=document.getElementById("errorPaterno");
	let  errorMaterno=document.getElementById("errorMaterno");
	let  errorEdad=document.getElementById("errorEdad");
	let  errorEmail=document.getElementById("errorEmail");
	let  errorTelefono=document.getElementById("errorTelefono");

////////////////////INICIO DE LA FUNCIÓN



let  boton= document.getElementById("btnEnviar");
	boton.addEventListener("click", function(e){

		let  nombre=document.getElementById("nombre").value = document.getElementById("nombre").value.toUpperCase();

		const pattern = /^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/;

		let resultado = pattern.test(nombre);

		if (resultado) {

			errorNombre.innerText="Bien Nombre";
			errorNombre.style.color="green";	
	
		}else{

			errorNombre.innerText="Completa el campo Nombre";
			errorNombre.style.color="red";	
			e.preventDefault();
			
		}
		
	validaApePaterno(e);
	validaApeMaterno(e);
	validaEdad(e);
	validaEmail(e);
	validaTelefono(e);
	});

////////////////////////////////////////////////////////////////////////////////////
	function validaApePaterno(e){

		let  apellido_paterno=document.getElementById("apellido_paterno").value 
								= document.getElementById("apellido_paterno").value.toUpperCase();

		const pattern = /^[A-Za-z,Ñ,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/;
		
		let resultado = pattern.test(apellido_paterno);

		if (resultado) {

			errorPaterno.innerText="Bien Apellido Paterno";
			errorPaterno.style.color="green";	
	
		}else{
			errorPaterno.innerText="Completa el campo Apellido Paterno";
			errorPaterno.style.color="red";
				 	
			e.preventDefault();
		}
	}

////////////////////////////////////////////////////////////////////////////////////
	function validaApeMaterno(e){
		let  apellido_materno=document.getElementById("apellido_materno").value 
							= document.getElementById("apellido_materno").value.toUpperCase();

		const pattern = /^[A-Za-z,Ñ,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú ]{3,100}/;
		
		let resultado = pattern.test(apellido_materno);

		if (resultado) {

			errorMaterno.innerText="Bien Apellido Materno";
			errorMaterno.style.color="green";

		}else{
			
			errorMaterno.innerText="Completa el campo Apellido Materno";
				errorMaterno.style.color="red";
					
				e.preventDefault();
		}
	}

////////////////////////////////////////////////////////////////////////////////////
	function validaEdad(e){
		let  edad=document.getElementById("edad").value;

		const pattern=/^[0-9]{2,3}/;

		let resultado = pattern.test(edad);

		if (resultado && edad > 17 && edad < 120) {

		errorEdad.innerText="Bien Edad";
		errorEdad.style.color="green";	
	
		}else{
			errorEdad.innerText="Completa el campo Edad";
			 errorEdad.style.color="red";	
			e.preventDefault();
			
		}

	}


////////////////////////////////////////////////////////////////////////////////////
	function validaEmail(e){
		let  email=document.getElementById("email").value 
					= document.getElementById("email").value.toLowerCase();

		const pattern = /^[a-z0-9-._]+[@][a-z0-9-._]+\.[a-z]{2,5}/;

		let resultado = pattern.test(email);

		if (resultado) {

			errorEmail.innerText="Bien Email";
			errorEmail.style.color="green";	

		}else{
			errorEmail.innerText="Completa el campo Email";
			 errorEmail.style.color="red";	
			e.preventDefault();
			
		}

	}

////////////////////////////////////////////////////////////////////////////////////
	function validaTelefono(e){
		let  telefono=document.getElementById("telefono").value;

		const pattern = /^[+]?[0-9]{8,15}/;

		let resultado = pattern.test(telefono);

		if (resultado) {

			errorTelefono.innerText="Bien Telefono";
			errorTelefono.style.color="green";	

		}else{
			
			errorTelefono.innerText="Completa el campo Telefono";
			errorTelefono.style.color="red";	
			e.preventDefault();
		}

	}

	










