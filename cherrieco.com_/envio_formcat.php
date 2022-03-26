<?php
/* envio_form.php
Sirve para mandarnos un mail con los datos que han introducido en el Form
*/

$nombre = strip_tags($_POST['Nombre'] );
$correo = strip_tags($_POST['Correo'] );
$asunto = strip_tags($_POST['Asunto'] );
$msj = strip_tags($_POST['Mensaje'] );
				
//mandar un correo a nosotros para avisarnos
$cuerpo = "Correo de la web de Cherrieco\n"; 
$cuerpo .= "Nombre: " .$nombre. "\n"; 
$cuerpo .= "Correo: " . $correo . "\n"; 
$cuerpo .= "Asunto: " . $asunto . "\n"; 
$cuerpo .= "Mensaje: " . $msj . "\n"; 

//mando el correo o no... 
if (($nombre=='')or ($correo=='')or($asunto=='')or($msj==''))
{
	echo "<script>"; 
	echo "alert ('Falten dades del formulari por omplir.')"; 
	echo "</script>";
	include ("index.html#contact");
}
	else{
		
		mail("info@cherrieco.com","Consulta recibida en Cherrieco",$cuerpo);
		echo "<script>"; 
		echo "alert ('El correo s'ha enviat correctament. Gràcies per contactar amb nosaltres.')"; 
		echo "</script>";
		include ("index.html");
		}		

?>


