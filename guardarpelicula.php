<?php //crear
require_once("funciones.php");
$accion=leerParam("accion","");
$id_Peli=leerParam("id_Peli","");
$nombre_Peli=leerParam("nombre_Peli","");
$duracion_Peli=leerParam("duracion_Peli","");
$estreno_Peli=leerParam("estreno_Peli","");


$xc = conectar();

if ($accion=="crear") {

  $sqlcrear = "INSERT INTO dbcine.peliculas(id_Peli,nombre_Peli,duracion_Peli,formato_Peli,Director_id_Director) VALUES ('$id_Peli', 'nombre_Peli', 'duracion_Peli', 'estreno_Peli', 'Director_id_Director');";

  mysqli_query($xc,$sqlcrear);
   desconectar($xc);
 //echo $sqlcrear;
  //echo $accion;
   //die();

}
if ($accion=="editar") {

	    $sqleditar = "UPDATE dbcine.peliculas SET  nombre_Peli='nombre_Peli', duracion_Peli='duracion_Peli', formato_Peli='formato_Peli', Director_id_Director='Director_id_Director' WHERE `id_Peli`='id_Peli';";

	    mysqli_query($xc,$sqleditar);
   desconectar($xc);
   //echo $sqlcrear;
  //echo $accion;
   //die();
}
else{
	$sqleliminar ="DELETE FROM dbcine.peliculas WHERE id_Peli='$id_Peli'";
	 mysqli_query($xc,$sqleliminar);
   desconectar($xc);
   //echo $sqlcrear;
  //echo $accion;
   //die();

}






?>
</body>
</html>