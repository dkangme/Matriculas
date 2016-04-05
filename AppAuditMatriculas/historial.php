<?php
$servername = "localhost";
$username = "msauser";
$password = "msa2016";
$dbName = "matriculas";
$id_alumno = 0;
$id_programa = 0;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

echo "Connected successfully\n";
	

$fila = 1;
if (($gestor = fopen("2011_historial.csv", "r")) !== FALSE) {
    while (($datos = fgetcsv($gestor, 1000, ";")) !== FALSE) {
        $numero = count($datos);
        echo "<p> $numero de campos en la línea $fila: <br /></p>\n";
        $fila++;
        for ($c=0; $c < $numero; $c++) {
            echo $datos[$c] . "<br />\n";
        }

		$sql = "SELECT id, nombres FROM Alumno WHERE rut='".$datos[0]."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {
		    	echo "id alumno:".$row["id"]."<br>\n";
		    	$id_alumno = $row["id"];
		    }
		} else 
		{
		    echo "0 results";
		}

		$sql = "SELECT id  FROM Programa WHERE codigo='".$datos[1]."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) 
		{
		    while($row = $result->fetch_assoc()) 
		    {
		    	echo "id programa: ".$row["id"]."<br>\n";
		    	$id_programa = $row["id"];
		    }
		} 
		else 
		{
		    echo "0 results";
		}


		$sql = "INSERT INTO Historial (ano_ingreso, semestre_ingreso, semestres_suspension, estudiante_titulo, ano_matricula, Programa_id, Alumno_id) values(".$datos[2].", ".$datos[3].", ".$datos[4].", ".$datos[5].", 2011, ".$id_programa.", ".$id_alumno.")";

		if ($conn->query($sql) === TRUE) {
		    echo "New record created successfully\n";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
    fclose($gestor);
}

$conn->close();

die ("Hasta aqui no mas");



?>