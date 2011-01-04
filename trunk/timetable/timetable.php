<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-loose.dtd">
<html>
<head>
<link href="../css/master.css" rel="stylesheet" type="text/css"/>
<link href="../css/search.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<?php
	$pass="pass123";
	$user="root";
	$loc="localhost";
	$db="iversity";
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

<?php
			mysql_connect($loc , $user , $pass) or
				die("Could not connect: " . mysql_error());
			mysql_select_db($db);
			
			$result = mysql_query("SELECT * FROM timetable;");
?>
<div style="display:inline-block; float:left; width:800px;">
    	<div  style="display:inline-block; float:left;">
		Select Building:
		<form action="search.php" method="POST">
		<select>
		<option value="#" selected="selected">Select Building</option>
		<?php 
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
		?>
	  	<option value="<?php echo $row["room"] ?>"><?php echo $row["room"] ?></option>
		<?php 
			}
			mysql_free_result($result);
		?>
		</select>
		<input type="submit" value="Search" ></input>
     	</form>
        </div>
    &nbsp;
<?php
			mysql_connect($loc , $user , $pass) or
				die("Could not connect: " . mysql_error());
			mysql_select_db($db);
			
	 		$result = mysql_query("SELECT * FROM timetable;");
?>

    	<div style="display:inline-block; float:left;">
		Select Class:
    	<form action="../">
		<select onchange="window.open(this.options[this.selectedIndex].value,'_self')">
		<option value="#" selected="selected">Select Class</option>
		<?php 
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
		?>
	  	<option value="#"><?php echo $row["module"] ?></option>
	  	<?php 
			}
			mysql_free_result($result);
		?>
	  	</select>
     	</form>
        </div>
    &nbsp;
<?php
			mysql_connect($loc , $user , $pass) or
				die("Could not connect: " . mysql_error());
			mysql_select_db($db);
			
			$result = mysql_query("SELECT * FROM timetable;");
?>
    	<div style="display:inline-block; float:left;">
		Select Time:
    	<form action="../">
		<select onchange="window.open(this.options[this.selectedIndex].value,'_self')">
		<option value="#" selected="selected">Select Time</option>
	  	<?php 
		while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
			{
		?>
	  	<option value="#"><?php echo $row["time"] ?></option>
	  	<?php 
			}
			mysql_free_result($result);
		?>
	  	</select>
     	</form>
        </div>
    &nbsp;
    	<div style="display:inline-block; float:left;">
    	<form action="search_result.html" method="get" target="_self">
			Search:
            <input type="text" name="dff_keyword" size="30" maxlength="50">
            <input type="submit" value="Find">
     	</form>
        </div>
</div>
</body>
</html>