 function validacion()
{
	valor1 = document.getElementById("nombres").value;
	valor2 = document.getElementById("apellidos").value;
	valor3 = document.getElementById("email").value;
	valor4 = document.getElementById("direccion").value;
	valor5 = document.getElementById("ciudades").value;
	if (valor1 == null || valor1.length == 0) 
	{			    
	    alert('[ERROR] El campo Nombre no debe estar vacío');
	    document.getElementById("nombres").style.border='1px solid red';
	    document.getElementById("nombres").focus();
	    return false;
		}
		else if (valor2 == null || valor2.length == 0) 
	{			    
	    alert('[ERROR] El campo Apellido no debe estar vacío');
	    document.getElementById("apellidos").style.border='1px solid red';
	    document.getElementById("apellidos").focus();
	    return false;
		}
		else if (valor3 == null || valor3.length == 0) 
	{			    
	    alert('[ERROR] El campo Email no debe estar vacío');
	    document.getElementById("email").style.border='1px solid red';
	    document.getElementById("email").focus();
	    return false;
		}
		else if (valor4 == null || valor4.length == 0) 
	{			    
	    alert('[ERROR] El campo Dirección no debe estar vacío');
	    document.getElementById("direccion").style.border='1px solid red';
	    document.getElementById("direccion").focus();
	    return false;
		}
		else if (valor5 == null || valor5.length == 0) 
	{			    
	    alert('[ERROR] El campo Ciudades no debe estar vacío');
	    document.getElementById("ciudades").focus();
	    return false;
		}
		return true;
}

function novacio(element)
{
	valor1=element.value;
	if (valor1 != null && valor1.length != 0) 
	{		
		element.style.border='1px solid green';
		return true;
	}
	else
	{		
		element.style.border='1px solid red';
		return false;
	}
}

function revisa() 
{
	var valido = true;
	var formularios = document.forms;
	for (var i=0; i<formularios.length;i++)
	{
	    for (var j=0; j<formularios[i].elements.length; j++)
	    {
	        valor = formularios[i].elements[j].value;
	        if (valor == null || valor.length == 0)
	        {
	        	alert('[ERROR] El campo '+ formularios[i].elements[j].name +' no debe estar vacío');
	        	formularios[i].elements[j].style.border='1px solid red';
	        	formularios[i].elements[j].focus();
	        	valido = false;
	        	break;
	        }
	    }
	}
	return valido;
}