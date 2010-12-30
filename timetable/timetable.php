<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/xhtml1-loose.dtd">
<html>
<head>
<link href="../css/master.css" rel="stylesheet" type="text/css"/>
<link href="../css/search.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div align="left"> <img src="../images/Previous.png" width="85" height="85" onClick="history.go(-1)"/> &nbsp; &nbsp; <a href="../homepage.html"><img src="../images/Home.png" width="85" height="85" /></a></div>
<div align="center" id="search">
<table width="100%" height="100%" >
<tr>
	<td colspan="3" rowspan="7"><table width="100%" height="100%" cellpadding="3" cellspacing="0" id="table_time">
	  <tr id="heading">
	    <th scope="col">Time</th>
	    <th scope="col">Module</th>
	    <th scope="col">Building</th>
	    </tr>
			<?php
			mysql_connect("localhost", "root", "") or
				die("Could not connect: " . mysql_error());
			mysql_select_db("iversity");


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
	  </td>
	<td>
    	<div align="right">
		<form action="../">
		<select onchange="window.open(this.options[this.selectedIndex].value,'_self')">
		<option value="#" selected="selected">Select Building</option>
	  	<option value="#">A01-01</option>
	  	<option value="building_result.html">A01-02</option>
	  	<option value="#">A01-03</option>
	  	<option value="#">B01-01</option>
	  	<option value="#">B01-02</option>
	  	</select>
     	</form>
        </div>
    </td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
	<td>
    	<div align="right">
    	<form action="../">
		<select onchange="window.open(this.options[this.selectedIndex].value,'_self')">
		<option value="#" selected="selected">Select Class</option>
	  	<option value="#">CP 2001</option>
	  	<option value="class_result.html">MA 1401</option>
	  	<option value="#">BX 1502</option>
	  	<option value="#">PY 3401</option>
	  	<option value="#">BU 1201</option>
	  	</select>
     	</form>
        </div>
    </td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
	<td>
    	<div align="right">
    	<form action="../">
		<select onchange="window.open(this.options[this.selectedIndex].value,'_self')">
		<option value="#" selected="selected">Select Time</option>
	  	<option value="#">0900</option>
	  	<option value="time_result.html">1000</option>
	  	<option value="#">1100</option>
	  	<option value="#">1200</option>
	  	<option value="#">1300</option>
	  	</select>
     	</form>
        </div>
    </td>
</tr>
<tr>
  <td>&nbsp;</td>
</tr>
<tr>
	<td>
    	<div align="right">
    	<form action="search_result.html" method="get" target="_self">
			Search:
            <input type="text" name="dff_keyword" size="30" maxlength="50">
            <input type="submit" value="Find">
     	</form>
        </div>
    </td>
</tr>
</table>
</div>
</body>
</html>