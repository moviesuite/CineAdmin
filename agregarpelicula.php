<?php require_once("header.php"); 
 require_once("funciones.php"); 
$id_Peli=leerParam("id","");
$xc = conectar();
$sql="SELECT * FROM dbcine.peliculas WHERE id_Peli='$id_Peli'";
$res=mysqli_query($xc,$sql);
$row=mysqli_fetch_array($res);
$nombre_Peli=$row[1];
$duracion_Peli=$row[2];
$estreno_Peli=$row[3];
$vistos_Peli=$row[4];


desconectar($xc);


?>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Usuario</h2>   
                        <h5>BIENVENIDO A cineCivilWar</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                     <form method="post" action="guardarpelicula.php">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                   
                                    <form role="form">

                                          <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" readonly="readonly" name="id_Perfil" value="<?php echo $id_Peli; ?>"  />
                                       </div>

                                         <div class="form-group">
                                            <label>Nombre de la Pelicula</label>
                                            <input class="form-control" name="usuario_Perfil" value="<?php echo $nombre_Peli; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Duración de la Pelicula</label>
                                            <input class="form-control" name="usuario_Perfil" value="<?php echo $duracion_Peli; ?>"  />
                                       </div>

                                        <div class="form-group">
                                            <label>Fecha de estreno</label>
                                            <input class="form-control" name="usuario_Perfil" value="<?php echo $estreno_Peli; ?>" />
                                       </div>
                                     


                                        <div class="form-group">
                                            <label>Cantidad de vistas</label>
                                            <input class="form-control"  readonly="readonly" name="usuario_Perfil" value="<?php echo $vistos_Peli; ?>"  />
                                            
                                       </div>
                                        


                                       
                                        </div>
                                       

                                      
                       
                                                  </div>

                                      
                                           
                                        </div>
                                         
                                       
                                        <div class="form-group">
                                            <label>Subir Imagen</label>
                                            <input type="file" />
                                        </div>
                                    
                                        
                                       
                                        
                                        <input type="text" name="accion" hidden="yes" value="edit">
                                        <button type="submit" class="btn btn-default">Guardar</button>
                                        <button type="reset" class="btn btn-primary">Cancelar</button>

                                   

    

                                 
         <!-- Elements -->
                </div>
                </form>
            </div>
               </div>
               </div>

                
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
