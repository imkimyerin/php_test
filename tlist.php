<?php
	session_start();

	$id = $_SESSION['ss_id'];
	$name = $_SESSION['ss_name'];
	$gender = $_SESSION['ss_gender'];
	$type = $_POST['n_type'];
	$tstamp = time();
	$restime = date("Y-m-d H:i:s", $tstamp);
	$fromtime = $_POST['godate'];
	$returntime = $_POST['ridate'];
	$from = $_POST['start'];
	$to = $_POST['finish'];
	$multiful = $_POST['n_port'];
	$cancel = 'N';

	require_once("./tdbconn.php");
	
	$sql = "insert into rt201695019 ";
	$sql.= " (tr_id, tr_name, tr_gender, tr_type, tr_restime, tr_fromtime, 
	tr_returntime, tr_from, tr_to, tr_multiful, tr_cancel) ";
	$sql.= "values ('$id', '$name', '$gender', '$type','$restime', '$fromtime',
	'$returntime', '$from', '$to', '$multiful', '$cancel' )";
	
	$result = mysqli_query($link, $sql);
		//echo $sql;
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title예약항목</title>
</head>

<body>

<table border="2">
				 <tr>
                    <th>tr_id</th>
                    <th>tr_name</th>
                    <th>tr_gender</th>
                    <th>tr_type</th>
                    <th>tr_restime</th>
                    <th>tr_fromtime</th>
                    <th>tr_returntime</th>
                    <th>tr_from</th>
                    <th>tr_to</th>
                    <th>tr_multiple</th>
                    <th>tr_cancel</th>
                </tr>
 <?php
	$sql = "select * from rt201695019";
		
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) >= 1){
			while($row = mysqli_fetch_object($result)){
				$id = $row->tr_id;	
 ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$row->tr_name?></td>
                <td><?=$row->tr_gender?></td>
                <td><?=$row->tr_type?></td>
                <td><?=$row->tr_restime?></td>
                <td><?=$row->tr_fromtime?></td>
                <td><?=$row->tr_returntime?></td>
                <td><?=$row->tr_from?></td>
                <td><?=$row->tr_to?></td>
                <td><?=$row->tr_multiful?></td>
                <td><?=$row->tr_cancel?></td>
            </tr> 
 <?php
			}//while
			mysqli_free_result($result);
		}//if
	}//if
	else{
		echo "Query Error !!!"."<br>";
	}
	mysqli.close($link);
	
?>
</table>
</body>
</html>