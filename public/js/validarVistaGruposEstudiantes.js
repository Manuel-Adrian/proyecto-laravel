let  errorEstudiantesId=document.getElementById("errorEstudiantesId");
let  errorGruposId=document.getElementById("errorGruposId");



let  boton= document.getElementById("btnEnviar");
	boton.addEventListener("click", function(e){
		let  grupos_id=document.getElementById("grupos_id").value;
		if (grupos_id === '' || grupos_id === 0 || isNaN(grupos_id)) {

			 errorGruposId.innerText="Completa el campo Grupos";
			 errorGruposId.style.color="red";	
			 e.preventDefault();
	
		}else{
			
			errorGruposId.innerText="Bien Grupos";
			errorGruposId.style.color="green";	
			
		}
		
	validaestudiantesId(e);
	
	});

////////////////////////////////////////////////////////////////////////////////////
	function validaestudiantesId(e){
		let  estudiantes_id=document.getElementById("estudiantes_id").value;
		if (estudiantes_id === '' || estudiantes_id === 0 || isNaN(estudiantes_id)) 
		{
			errorEstudiantesId.innerText="Completa el campo Estudiantes";
			errorEstudiantesId.style.color="red";
			
			e.preventDefault();
	
	    }else
			{
				errorEstudiantesId.innerText="Bien Estudiantes";
				errorEstudiantesId.style.color="green";	
			}

	 
	}