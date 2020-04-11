
<?php
	$link = mysqli_connect("localhost", "root", "wlsgml16942", "test");
	
	//mysql 접속에러 메세지
	if(mysqli_connect_errno()) {
		echo "Error";
	}
	else{
		//echo "LINK Successful !!! "."<br>";
	}
 ?>
