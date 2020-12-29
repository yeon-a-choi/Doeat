
<html>
<head>
    <style>
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
        /*공지사항 제목 정보 표시*/
        p.date {
            position: absolute;
            font-size: 12pt;
        }
        /*글쓰기 버튼 조정*/
        #sub {
            font-size: 28pt;
            background-color: #ff9900;
            color: #ffffff;
        }
    </style>
</head>
<body style="overflow:auto;">
    <ul>
        <li>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;">
        </li>
        <li>
            <a href="#"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;">
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
        </li>

        <li align="center" style="position:absolute; left:0%; top:22%; width:100%; list-style:none; font-size: 33pt; ">공지사항</li>
        <!--공지사항 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
            <tr>
                <td class="favorite"><a href="./Doeat_NoticeInfo_Admin.php">
                <?
            		$connect=mysql_connect('220.69.241.86','cejin','cejin');
								mysql_select_db('doeat', $connect);
								
								$sql = "select * from notice";
								$result=mysql_query($sql, $connect);
								$count=mysql_num_fields($result);
								while($rows=mysql_fetch_row($result))
								{
									echo "$rows[2]";
								}
           		  ?>
           		  &nbsp;<p class="date">
           		  <?
           		  $connect=mysql_connect('220.69.241.86','cejin','cejin');
           		  mysql_select_db('doeat', $connect);
           		  
           		  $sql="select * from notice";
           		  $result=mysql_query($sql, $connect);
           		  $count=mysql_num_fields($result);
           		 while($rows=mysql_fetch_row($result))
									{
									echo "<tr>";
									echo "<td>$rows[4]</td>";
									echo "</tr>";
									}
								?>
              &nbsp;<p class="date"></p></a>
             </td>
            </tr>
            <tr>
                 <td class="favorite"><a href="#">[공지] 191003 정기점검&nbsp;<p class="date">2019.10.03</p></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">[공지] 예약 관련 안내&nbsp;<p class="date">2019.10.01</p></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">[공지] 190925 정기점검&nbsp;<p class="date">2019.09.25</p></a></td>
            </tr>
        </table>
        <form>
            <!--글쓰기 버튼-->
            <a href="./Doeat_NoticeWrite_Admin.php"><input type="button" onclick="location.href='./Doeat_NoticeWrite_Admin.php'" id="sub" value="글쓰기" style="position:fixed;left:87%;top:28%;width:12%;height:4.21%;"></a>
        </form>
    </ul>

</body>
</html>

