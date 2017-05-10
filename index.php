<!DOCTYPE html>
 <html>
 <head>
  <title>EXAMEN PARCIAL UPC </title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <img class = 'newappIcon' src='images/img2.png'>
  <table>
	  	<?php
		$server="us-cdbr-iron-east-03.cleardb.net";
		$user="b74ba3320e82ec";
		$pass="2d194843";
		$db="ad_bb6ddb2f34daf52";
		$conn=new mysqli($server, $user, $pass, $db);
		if($conn->connect_error){
			die("Connection Failed: ".$conn->connect_error);
		}
		$sql="select * from servicios";
		$result=$conn->query($sql);
		if($result->num_rows > 0){
			?>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</tr>
			<?php
			while($row=$result->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $row['codigo_servicio']?></td>
					<td><?php echo $row['nombre_servicio']?></td>
					<td><?php echo $row['descripcion_servicio']?></td>
					<td><img src="<?php echo $row['imagen_servicio']?>"/></td>
				</tr>
				<?php
			}
		}
		else{
			echo "0 result";
		}
		$conn->close();
		?>
	  </table>
	<img class = 'newappIcon3' src='images/img4.png'> </td>
 </body>
 </html>
