<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
</head>

<body>

<?php

$servername = "localhost";
$username = "root";
$password = "root";
$my_db = "GDProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $my_db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";



/*$mysqli->select_db("GDProject");*/

/* Retourne le nom de la base de données courante */
/*if ($result = $mysqli->query("SELECT DATABASE()")) {
	$row = $result->fetch_row();
	printf("La base de données courante est %s.\n", $row[0]);
	$result->close();
}
*/



$sql = "SELECT ID, Score FROM player";


print "ok";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Name: " . $row["Date"]. " " . $row["Score"]. "<br>";
    }
} else {
    echo "0 results";
}
/*
 $link = mysql_connect('10.25.220.207', 'root', 'root');
 if(!$link) {
 	die('Database server unavalaible ' . mysql_error());
 }

 $db = mysql_select_db('GDProject', $link);
 if(!$db) {
 	die('GDProject database unavalaible ' . mysql_error());
 }
 
 $sql = "SELECT name, timetoend, deaths, fire, energy, oxygen, score
 FROM player ORDER BY score DESC LIMIT 100";

 $rs = mysql_query($sql,$link);

 if (!$rs) {
 	$message = 'Invalide query: ' . mysql_error() . "\n";
 	$message .= 'Whole query:' . $query;
 	die($message);
 }
 */

 
 $i = 0;

 while ($row = mysql_fetch_assoc($rs))
 {
  $i++;
  echo "<table class='CSSTableGenerator'>
      <tbody>
				<tr>
	  			<td><br>
	  			</td>
	 				<td>Name</td>
    			<td>Time left</td>
	  			<td>Deaths</td>
	  			<td>Fire</td>
	  			<td>Energy</td>
	  			<td>Oxygen</td>
	  			<td>Total Score</td>
				</tr>
				<tr>
	 				 <td>".$i."</td>
	 				 <td>".$row['name']."</td>
					 <td>".$row['timetoend']."</td>
	 				 <td>".$row['deaths']."</td>
	 				 <td>".$row['fire']."</td>
	  			 <td>".$row['energy']."</td>
	  			 <td>".$row['oxygen']."</td>
	  			 <td>".$row['score']."</td>
				</tr></br>
      </tbody>
    </table>";
 }
 
 mysql_free_result($rs);
 mysql_close($link);
*/
mysqli_close($conn);

 ?>

</body>
</html>