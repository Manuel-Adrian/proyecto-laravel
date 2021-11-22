let boton= document.getElementById("btnEnviar");
	boton.addEventListener("click", function(e){
		
		let grado = document.getElementById("grado").value
					= document.getElementById("grado").value.toUpperCase();

			const pattern=/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú  ]{3,20}/;

			let errorGrado = document.getElementById("errorGrado");
			
			let resultado = pattern.test(grado);

			if (resultado) {
				errorGrado.innerText="Bien Grado1";
				errorGrado.style.color="green";	
				console.log(resultado);

			}else{
				errorGrado.innerText="Completa el campo grado1";
		 		errorGrado.style.color="red";	
				e.preventDefault();
				console.log(resultado);
			}
		
	});
	///////////////////////////////////////////////////////////////////////////////////

	/*function validaCaracteresGrado(e){
		
			/////////
			let grado = document.getElementById("grado").value
					= document.getElementById("grado").value.toUpperCase();
		
		if (grado === '') {
		 errorGrado.innerText="Completa el campo grado";
		 errorGrado.style.color="red";	
		e.preventDefault();
	
	}else{
		errorGrado.innerText="Bien Grado";
		errorGrado.style.color="green";	
		
	}
	}*/