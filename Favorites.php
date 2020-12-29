<?php
    <meta charset="UTF-8">
	/* Load DB */
	$conn = mysqli_connect('localhost', 'root', 'apmsetup', 'doeat');
	if ( !$conn ) die('DB Error');
	
	$id = $_POST['id']; #0
	echo "{$id}";
	$st_num = $_POST['st_num']; #1
	$r_num = $_POST['r_num']; #2



	/* Set to UTF-8 Encoding */
	mysqli_query($conn, 'set session character_set_connection=utf8;');
	mysqli_query($conn, 'set session character_set_results=utf8;');
	mysqli_query($conn, 'set session character_set_client=utf8;');
	  
	/* Load data */
	$query = 'SELECT * FROM star';
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_array($result);
	
	//값 입력 저장->SIzePAge에서 입력된 값 저장

	if($row){
		$sql ="UPDATE star SET  id= {$id} ,st_num= {$st_num} , r_num= {$r_num}";
		$or = mysqli_query($conn,$sql);
	}else{
		$sql ="INSERT INTO star(id,st_num,r_num) VALUES ({$id},{$st_num},{$r_num});";
		$or = mysqli_query($conn,$sql);
	}
    //저장 성공/실패 출력되게
	

    if ($or) 
		{ 
		echo "New record created successfully"; 
		} 
	else 
		{
		echo "Error: " . $sql . " " . $conn->error;
		}


echo "
	   <script>
	    location.href = 'Doeat_Favorites.php';
	   </script>
	";
	
?>