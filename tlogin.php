<?php
// Start the session
    session_start();

	$user_id = trim($_POST["nm_id"]);
	$user_pw = $_POST["nm_pw"];
	
	require_once("./tdbconn.php");
	
	$sql = "select * from member ";
	$sql.= "where m_id = '$user_id' and ";
	$sql.= "m_pass = '$user_pw' limit 1";
	
	//echo $sql;
	
	$result = mysqli_query($link, $sql);
	
	if(mysqli_num_rows($result)<1){
		echo("<script>
			    alert('회원정보가 없거나 틀림');
		    	 history.back();
			  </script>");
	}
	else{
		$row = mysqli_fetch_object($result);
		
		$_SESSION['ss_login_status'] = "logged_in";
		$_SESSION['ss_id'] = $user_id;
		$_SESSION['ss_name'] = $row->m_name;
		$_SESSION['ss_gender'] = $row->m_gender;
		
		echo("<script>alert('정상적으로 로그인 되었음');</script>");
		echo ("<meta http-equiv = 'refresh' content='0; url=./treserve.php'>");
		
		
	}
?>