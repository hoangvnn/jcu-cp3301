<html>
<head>
<link href="../css/master.css" rel="stylesheet" type="text/css"/>
<link href="../css/search.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
	if($_REQUEST)
	{
		$room = $_REQUEST['room'];
	}
	$pass="pass123";
	$user="root";
	$loc="localhost";
	$db="iversity";
	$val=
?>

<div align="left"> <img src="../images/Previous.png" width="85" height="85" onClick="history.go(-1)"/> &nbsp; &nbsp; <a href="../homepage.html"><img src="../images/Home.png" width="85" height="85" /></a></div>
<div align="center" id="search">
<table width="800px" height="600px" >
<tr>
	<td><table cellpadding="3" cellspacing="0" id="table_time">
	  <tr id="heading">
	    <th scope="col" width="100">Time</th>
	    <th scope="col" width="550">Module</th>
	    <th scope="col" width="150">Building</th>
	    </tr>
			<?php
			mysql_connect($loc , $user , $pass) or
				die("Could not connect: " . mysql_error());
			mysql_select_db($db);


			$result = mysql_query("SELECT * FROM timetable;");
			$gettime = $_GET['time'];
			$getmodule = $_GET['module'];
			$getroom = $_GET['room'];


			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
			?>
		<tr>
	    <td><div align="center"><?php echo $row["time"] ?></div></td>
	    <td><div align="center"><?php echo $row["module"] ?></div></td>
	    <td><div align="center"><?php echo $row["room"] ?></div></td>
	    </tr>
		<?php 
			}

			mysql_free_result($result);
		?>
</table>