<style type="text/css">
  table {
    border: solid 2px #7e7c7c;
    border-collapse: collapse;
  }
  th, h1 {
    background-color: #edf797;
    margin: 15px;
  }
  td, th {
    border: solid 1px #7e7c7c;
    padding: 2px;
    text-align: center;
  }
  .boton{
	background-color: #600fbf;
	padding: 10px;
	font-size: 20px;
	color: aliceblue;
	border-radius: 30px;
	font-style: italic;
	margin-bottom: 30px;
  cursor: pointer;
}
</style>
<?php
//validamos datos del servidor
$user = "sql10561256";
$pass = "vtUzeF4Xd5";
$host = "sql10.freesqldatabase.com";

//conetamos al base datos
$connection = mysqli_connect($host, $user, $pass);

//hacemos llamado al imput de formuario


//verificamos la conexion a base datos
if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor";
        }
  else
        {
            echo "<b><h3>Hemos conectado al servidor</h3></b>" ;
        }
        //indicamos el nombre de la base datos
        $datab = "sql10561256";
        //indicamos selecionar ala base datos
        $db = mysqli_select_db($connection,$datab);

        if (!$db)
        {
        echo "No se ha podido encontrar la Tabla";
        }
        else
        {
        echo "<h3>Tabla seleccionada:</h3>" ;
        }
        //insertamos datos de registro al mysql xamp, indicando nombre de la tabla y sus atributos
        $instruccion_SQL = "SELECT nombre_Producto,precio FROM producto";

                            
        $resultado = mysqli_query($connection,$instruccion_SQL);

        //$consulta = "SELECT * FROM tabla where id ='2'"; si queremos que nos muestre solo un registro en especifivo de ID
        $consulta = "SELECT * FROM producto";
        
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}
echo "<center>";
echo "<table>";
echo "<tr>";
echo "<th><h1>Nombre</th></h1>";
echo "<th><h1>Precio</th></h1>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
{
  echo "<tr>";
  echo "<td><h2>" . $colum['nombre_Producto']."</td></h2>";
  echo "<td><h2>" . $colum['precio'] . "</td></h2>";
  echo "</tr>";
}
echo "</table>";
echo "<center/>";
echo "<br><br>";

mysqli_close( $connection );
    //echo "Fuera " ;
    echo'<form action="index.html">
    <center>
      <input type="submit" name="index" class="boton" id="index"value="Pagina inicial"/>
    </center>
  </form>';
    
?>