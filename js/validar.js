	function validarFormulario() {
	  var txtNombre = document.getElementById('nombre').value;
	  var txtNoControl = document.getElementById('noControl').value;
	  var txtCorreo = document.getElementById('correo').value;
	  var txtContraseña = document.getElementById('contraseña').value;
	  var txtContraseña2 = document.getElementById('contraseña2').value;
	  //Test campo obligatorio
	  if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
		alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
		return false;
	  }
   
	  //Test nocontrol
	  if(txtNoControl == null || txtNoControl.length == 0 || isNaN(txtEdad)){
		alert('ERROR: Debe ingresar un número de control válido');
		return false;
	  }
   
	  //Test correo
	  if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
		alert('ERROR: Debe escribir un correo válido');
		return false;
	  }
	  //Test de contraseña
	  if(txtContraseña != txtContraseña2)){
		alert('ERROR: Debe ingresar un número de control válido');
		return false;
	  }
	  alert("funciona el javascript");
	  return true;
	}
   