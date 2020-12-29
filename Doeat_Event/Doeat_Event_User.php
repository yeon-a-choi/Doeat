<html>
<head>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            border: none;
            font-family: 나눔바른고딕;
        }
        /*전체 초기화*/
        body {
            width: 100%;
            height: 100%;
        }
        /*body 초기화*/
        img {
            width: 100%;
            height: 100%;
        }
        /*이미지 초기화 (바꾸거나 삭제시 상단 메뉴 레이아웃 망가짐)*/
        table {
            table-layout: fixed;
        }
        /*상단 메뉴 크기 고정*/
        a {
            text-decoration: none;
            color: #2a2a2a;
        }
        /*a태그 설정*/
        table.downmenu {
            position: fixed;
            width: 100%;
        }
        /*이벤트 넓이 위치*/
        td.favorite {
            border-top: 1px solid #222222;
            position: relative;
            font-size: 28pt;
            padding: 5%;
            height: 50%;
        }
        /*이벤트 제목 테이블 설정*/
        p.date {
            position: absolute;
            font-size: 12pt;
        }
        /*이벤트 정보 표시*/
        #sub {
            font-size: 28pt;
            background-color: #ff9900;
            color: #ffffff;
        }
        /*글쓰기 버튼 조정*/
    </style>
</head>
<body style="overflow:auto;">
    <ul>
        <li>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="../Doeat_Mypage/Doeat_Mypage_User.php"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
        </li>
        <table style="font-size:24pt;position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
            <tr align="center">
                <!--상단메뉴-->
                <td><a href="../Doeat_Restaurant/Doeat_Restaurant.php">식당</a></td>
                <td><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">대상별 추천</a></td>
                <td><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
                <td style="border-bottom:3px solid #ff9900"><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</td>
            </tr>
        </table>
        <!--이벤트 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
            <tr>
                <td class="favorite"><a href="Doeat_EventInfo_User.php">우일식당 신메뉴 출시&nbsp;<p class="date">2019.10.05</p></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">안동 철판 이벤트!&nbsp;<p class="date">2019.10.03</p></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">맛나 분식 음료수 100% 증정 이벤트&nbsp;<p class="date">2019.10.01</p></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">한마음 돈까스 신메뉴 출시&nbsp;<p class="date">2019.10.01</p></a></td>
            </tr>
        </table>
    </ul>

</body>
</html>