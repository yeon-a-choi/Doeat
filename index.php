<?php
class DbConnect{
	private $con;
	
	function __construct(){}
	
	function connect(){
		$this->con = new mysqli('220.69.241.86', 'cejin', 'cejin', 'doeat');
		
		if(mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			return null;
		
		}
		
		return $this->con;
	}
}
?>
<html>
<head>
    <style>
        /*전체 초기화*/
        * {
            margin: 0px;
            padding: 0px;
            border: none;
            font-family: 나눔바른고딕;
        }
        /*body 초기화*/
        body {
            width: 100%;
            height: 100%;
        }
        /*이미지 초기화(바꾸거나 삭제시 상단 메뉴 레이아웃 망가짐)*/
        img {
            width: 100%;
            height: 100%;
        }
        /*상단 메뉴 크기 고정*/
        table {
            width: 100%;
            table-layout: fixed;
        }
        /*a태그 설정*/
        a {
            text-decoration: none;
            color: #2a2a2a;
        }
        /*즐겨찾기 넓이 위치*/
        table.downmenu {
            position: fixed;
            width: 100%;
        }
        /*즐겨찾기 단락 선 표시, 여백, 글자크기*/
        td.favorite {
            border-top: 1px solid #000000;
            position: relative;
            font-size: 28pt;
            padding: 5%;
        }
    </style>
</head>
<body style="overflow:auto;">
    <ul>
        <li>
            <a href="./Doeat_Main.html"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="#"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
        </li>

        <li align="center" style="position:absolute; left:0%; top:20%; width:100%; list-style:none; font-size: 33pt; ">즐겨찾기</li>
        <!--즐겨찾기 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
            
			   <?php
			  
				$db = new DbConnect();
				$conn = $db->connect();
				// $sql = 'SELECT * FROM star';
				// $result = mysqli_query($conn, $sql);
				
				// $row = mysqli_fetch_array($result);
				// echo $row['id'];
				// echo '<br>';
				
				$query = 'select r.r_name, s.st_num from star as s, resta_list as r where (s.r_num=r.r_num)';
				
				// $query = 'select * from resta_list';
				$result = mysqli_query($conn, $query);
				

				
				 while($row = mysqli_fetch_array($result)){
					 
					 echo "<tr>";?>
					 <td class="favorite" onclick="location.href='./Doeat_Restaurant/Doeat_Restaurant_Info.html'">
					 <?php
					 echo $row['st_num']." ". $row['r_name']; ?>
					 
					 
					  <?php
						// $query1 = 'select p.p_totaltb, p.p_emptytb, i.r_optime  from pos_table as p, resta_info as i';
						// $result1 = mysqli_query($conn, $query1);
						
						// while($row = mysqli_fetch_array($result1)){
							// $str= $row[r_optime];
							// $strTok=explode('-', $str);  //strTok[0]= opentime, strTok[1]= closetime
							// // for($i = 0; $i < $cnt; $i++){
								// // echo($strTok[$i]. "<br/>");
								// // }
								
							// if(($strTok[1]<date(H:i))&&($strTok[1]>date(H:i))){
								 // if((100/p_totaltb)*p_emptytb==100){
									 // <img src="full.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td> </tr>
								 // }
								 // elseif((100/p_totaltb)*p_emptytb>=70){
									 // <img src="hurry.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td> </tr>
								 // }
								 // elseif((100/p_totaltb)*p_emptytb<70){
									 // <img src="full.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td> </tr>
								 // }
							// }
							// else{
								// <img src="ready.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td> </tr>
							// }
						// }
					 // ?>
					 
					 <img src="hansan.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;">
					 <?php
					 echo "</td>";
                     echo "</tr>";
				 }
					
				// $conn = new mysql_connect('220.69.241.86', 'cejin', 'cejin', 'doeat');
				// if ( !$conn ) die('DB Error');
					// /* Load data */
				// $query = 'SELECT * FROM star';
				// $result = mysql_query($conn, $query);
				// $row = mysql_fetch_array($result);
				
				// echo $row[2]; 

				// $query = 'select r.r_name from star as s, resta_list as r where (s.r_num=r.r_num)';
				// $result = mysql_query($conn, $query);
				// $row = mysql_fetch_array($result);
				// echo $row[0];  
				// echo "success!";
			?>	
			   
			   
            <tr>
				<td class="favorite">한마음 돈까스<img src="full.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td>
            </tr>
            <tr>
				<td class="favorite">안동 철판<img src="hurry.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td>
            </tr>
            <tr>
                <td class="favorite">페이퍼 라이스<img src="ready.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td>
            </tr>
            <tr>
                <td class="favorite">맛나 분식<img src="ready.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></td>
            </tr>
        </table>
    </ul>

</body>
</html>
