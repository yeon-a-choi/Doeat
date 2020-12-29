<html>
<head>
    <style>
        /*전체 초기화*/
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
        /*즐겨찾기 제목 밑부분 날짜표기*/
        p.date {
            position: absolute;
            font-size: 12pt;
        }
        /*이벤트 정보 테이블*/
        td.event {
            border-top: 1px solid #222222;
            border-bottom: 1px solid #222222;
            font-size: 24pt;
            width: 100%;
            height: 50%;
            text-align: center;
        }
        /*이벤트 이미지 표시*/
        p.img_align {
            text-align: center;
            padding: 5%;
        }
        /*글쓰기 버튼 색*/
        #sub {
            background-color: #ff9900;
            color: #ffffff;
            font-size: 28pt;
        }
    </style>
</head>
<body style="overflow:auto;">
    <ul>
        <li>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="#"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
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
                <td style="border-bottom:3px solid #ff9900"><a href="#">이벤트</a></td>
            </tr>
        </table>
        <!--이벤트 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
            <tr>
                <td class="favorite">솔뫼 한식당 신메뉴 출시&nbsp;<p class="date">2019.10.05</p>
				</td>
            </tr>
            <tr>
                <td class="event" style="position:fixed; height:35%">
                    <p class="img_align"><img src="event_img.png" style="width:66%;height:55%">&nbsp;</p>
                    <p class="info">따끈따끈한 <span style="color:#ff9900;">잔치국수</span> 출시<br />한 그릇 드시러 오세요~~~</p>
                </td>
            </tr>
        </table>
        <form>
            <INPUT TYPE="button" id="sub" VALUE="확인" onClick="location.href='Doeat_Event_Admin.php'" style="position:fixed;left:55%;top:82%;width:12%;height:4.21%;">
            <INPUT TYPE="button" id="sub" VALUE="수정" onClick="location.href='Doeat_EventWrite_Admin.php'" style="position:fixed;left:70%;top:82%;width:12%;height:4.21%;">
            <INPUT TYPE="button" id="sub" VALUE="삭제" style="position:fixed;left:85%;top:82%;width:12%;height:4.21%;">
        </form>
    </ul>

</body>
</html>
