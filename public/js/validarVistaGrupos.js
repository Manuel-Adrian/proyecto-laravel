let  errorClave=document.getElementById("errorClave");
let  errorTurnosId=document.getElementById("errorTurnosId");
let  errorSemestresId=document.getElementById("errorSemestresId");



let  boton= document.getElementById("btnEnviar");
	boton.addEventListener("click", function(e){
		
		let  clave=document.getElementById("clave").value 
					= document.getElementById("clave").value.toUpperCase();

		const pattern = /^[A-Za-z]-([0-9]{3})/;

		let resultado = pattern.test(clave);

		if (resultado) {
			errorClave.innerText="Bien Clave";
			errorClave.style.color="green";	

		 
	
	}else{
		errorClave.innerText="Completa el campo Clave";
		errorClave.style.color="red";	
		e.preventDefault();
		
	}
		
	validaTurnosId(e);
	validaSemestresId(e);
	
	});

////////////////////////////////////////////////////////////////////////////////////
	function validaTurnosId(e){
		let  turnos_id=document.getElementById("turnos_id").value;
		if (turnos_id === '' || turnos_id === 0 || isNaN(turnos_id)) 
		{
			errorTurnosId.innerText="Completa el campo Turnos";
			errorTurnosId.style.color="red";
			
			e.preventDefault();
	
	    }else
		{
			errorTurnosId.innerText="Bien Turnos";
			errorTurnosId.style.color="green";	
		}

	 
		}

////////////////////////////////////////////////////////////////////////////////////
	function validaSemestresId(e)
	{
		let  semestres_id=document.getElementById("semestres_id").value;
		if (semestres_id === "" || semestres_id === 0 || isNaN(semestres_id) ) 
		{
			errorSemestresId.innerText="Completa el campo Semestres";
			errorSemestresId.style.color="red";

			e.preventDefault();
			
		}
		else {
			
			  errorSemestresId.innerText="Bien Semestres1";
			  errorSemestresId.style.color="green";
				
		 }

	}
