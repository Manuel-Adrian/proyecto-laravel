let boton= document.getElementById("btnEnviar");
	boton.addEventListener("click", function(e){
		let horario=document.getElementById("horario").value
					=document.getElementById("horario").value.toUpperCase();
		const pattern=/^[A-Za-z,ñ,ü,á,é,í,ó,ú,Á,É,Í,Ó,Ú  ]{3,20}/;
		let resultado = pattern.test(horario);

		if (resultado) {
			errorHorario.innerText="Bien horario";
			errorHorario.style.color="green";
		 
	
		}else{
				
			errorHorario.innerText="Completa el campo Horario";
			 errorHorario.style.color="red";	
			e.preventDefault();
		}
		
	});