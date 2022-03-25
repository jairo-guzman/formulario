<!DOCTYPE html>
<html>
<head>
	<title>insertar datos con ajax</title>
<script	src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
	<form id="frmajax" method="POST">
		<label>Nombre</label>
		<p></p>
		<input type="text" name="nombre" id="nombre" required>
		<p></p>
		<label>apellido</label>
		<p></p>
		<input type="text" name="apellido" id="apellido" required>
		<p></p>
		<label>Usuario</label>
		<p></p>
		<input type="text" name="usuario" id="usuario">
		<p></p>
		<label>password</label>
		<p></p>
		<input type="text" name="password" id="password">
		<p></p>
		<button id="btnguardar">Guardar datos</button>
	</form>
</body>
</html>
<!-- CONSULTA AJAX CON SCRIPT INSERTADO EN EL HTML-->
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnguardar').click(function(){
			var datos=$('#frmajax').serialize();
			$.ajax({
				type:"POST",
				url:"insertar.php", //ENCARGADO DE GUARDAR LAS VARIABLES DEL FORMULARIO - CONSULTAS 
				data:datos, // variable datos que guardan los nombres de las variables de los inputs del form
				success:function(r){
					if(r==1){
						alert("agregado con exito");
					}else{
						alert("Fallo el server");
					}
				}
			});

			return false;
		});
	});
</script>

