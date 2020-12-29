<html>
<head>
    <style>
		/*전체 초기화*/
        * {
            margin: 0px;
            padding: 0px;
            border: none;
            font-family:나눔바른고딕;
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
    <ul style="list-style:none;">
        <!--최상 단 홈 로고 마이페이지 버튼-->
        <li>
             <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="../Doeat_Mypage/Doeat_Mypage_User.php"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
        </li>
        <table style="font-size:24pt; position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
            <tr align="center">
                <!--상단메뉴-->
                <td><a href="../Doeat_Restaurant/Doeat_Restaurant.php">식당</a></td>
                <td><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">대상별 추천</a></td>
                <td><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
                <td><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</a></td>
            </tr>
        </table>
        <table style="position:absolute; left:8.05555555556%; top:26.5625%; width:83.33333333333%; height:17.65625%;">
            <tr>
                <td style="border:2px solid #222222">
                <!--<?
                $connect = mysql_connect('220.69.241.86','cejin','cejin');
 									  mysql_select_db('doeat', $connect);
 									  $sql="select*from resta_list";
 									   $result=mysql_query($sql, $connect);
 									  while($rows=mysql_fetch_row($result))
										{
											echo "$rows[1]<br><br>";
										}
                ?>
                 <?
                	 $connect = mysql_connect('220.69.241.86','cejin','cejin');
 									  mysql_select_db('doeat', $connect);
 									  $sql="select*from event";
 									  $result=mysql_query($sql, $connect);
 									  while($rows=mysql_fetch_row($result))
										{
											echo "$rows[3]";
										}
									
                ?>-->
				<img src="main_eventimg.jpg">
                </td><!--메인페이지 이벤트 창-->
            </tr>
        </table>
        <!--즐겨찾기 별, 알림 글-->
        <li>
            <img src="star.png" style="position:absolute ; left:3.33333333333%; top:48.125%; width:4.44444444444%; height:2.5%;">
        </li>
        <table style="position:absolute; left:8.8%; top:48.1%; width:20%; height:2.65625;">
            <tr><td style="font-size:30pt">즐겨찾기</td></tr>
        </table>
        <!--즐겨찾기 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:54%; width:100%; height:auto;">
        	<?
        		 $connect = mysql_connect('220.69.241.86','cejin','cejin');
 						 mysql_select_db('doeat', $connect);
 						 $sql="select*from star";
 						 $result=mysql_query($sql, $connect);
 						 $count=mysql_num_fields($result);
        	?>
            <tr>
                <td class="favorite"><a href="#">치킨 피자 나라<img src="hurry.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="../Doeat_Restaurant/Doeat_Restaurant_Info.php">우일 식당<img src="hansan.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">순이네 분식<img src="ready.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
        </table>
    </ul>

</body>
</html>
