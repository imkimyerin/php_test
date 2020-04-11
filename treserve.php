<?PHP
		session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>reserve</title>
</head>

<body>
<form action="./tlogin.php" method="post" name="r_login">
    <div>
        id<input type="text" name="nm_id" >
        password<input type="password" name="nm_pw" placeholder="비밀번호를 입력해주세요">
        <input type="submit" value="로그인" onclick="return check()" class="button">
    </div>
</form>

<form action="./tlist.php" method="post" name="form">
<table width="90%" border="1" cellspacing="2" cellpadding="1">
  <tr>
    <th colspan="3" scope="col">기차편 예약</th>
    </tr>
  <tr>
    <td>
  	 	 출발역<br>
        <select name="start" >
        	<option value="seoul">서울역</option>
            <option value="busan">부산역</option>
            <option value="daegu">대구역</option>

        </select>
    </td>
    <td>
    	도착지<br>
         <select name="finish" >
        	<option value="seoul">서울역</option>
            <option value="busan">부산역</option>
           <option value="daegu">대구역</option>
      </select></td>
    <td>
    	 <input type="radio" name="n_port" value="punedo">편도
        <input type="radio" name="n_port" value="wangbok">왕복<br>
        -------------------<br>
        <input type="radio" name="n_type" value="adult">성인
        <input type="radio" name="n_type" value="child">어린이<br>
    </td>
  </tr>
  <tr>
    <td>
    	출발날짜
        <input type="date" name="godate" >
    </td>
    <td>
    	리턴날짜
        <input type="date" name="ridate" > 
    </td>
    <td rowspan="2">
    <?PHP
       	 if($_SESSION['ss_login_status'] == "logged_in"){
	?>
    	<input type="submit" value="예약하기" name="button">
     <?PHP
		 }
   	 ?>
    </td>
  </tr>
  <tr>
    <td>
    	출발시간
        <input type="time" name="starttime" > 
    </td>
    <td>
    	도착시간
        <input type="time" name="finishtime" > 
    </td>
    </tr>
</table>
</form>
</body>
</html>
