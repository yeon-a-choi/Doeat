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
			font-size:30pt;
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
		/*마이페이지 크기 및 색상*/
        #mypage {
            position: fixed;
            left: 25%;
            top: 0%;
            width: 75%;
            height: 100%;
            background-color: #FF9900;
            z-index: 1;
            font-size: 30pt;
            color: #ffffff;
        }
            /*마이페이지 위치, 크기, 색 글자 크기(푸쉬알림)*/
            #mypage a {
                font-size: 30pt;
                color: #ffffff;
            }
			/*스위치 - 슬라이더 상자*/
        .switch {
            position: relative;
            display: inline-block;
            width: 1px;
            height: 24px;
        }

            /* 기존 체크박스를 숨기기(체크박스를 숨겨 슬라이더만 보이도록 설정. 슬라이더는 form checkbox요소로 되어있음) */
            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

        /*움직이는 슬라이더 모양 색깔,움직이는시간,이전으로 되돌리기*/
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ffffff;

			/*슬라이더가 움직이는 시간 0.4초*/
            -webkit-transition: .4s;
            transition: .4s;
        }
		/*슬라이더 원형 설정*/
            .slider:before {
                position: absolute;
                content: "";
                height: 80%;
                width: 35%;
                left: 10%;
                bottom: 4px;
                background-color: #ff9900;
                -webkit-transition: .4s;
                transition: .4s;
            }
			/*푸쉬버튼의 위치를 22px 위치만큼 이동시켜줌 */
        input:checked + .slider:before {
            -webkit-transform: translateX(100%);
            -ms-transform: translateX(100%);
            transform: translateX(100%);
        }

        /*푸쉬버튼 배경 모양*/
        .slider.round {
            border-radius: 34px;
        }
		/*푸쉬버튼 원형 모양*/
            .slider.round:before {
                border-radius: 50%;
            }
    </style>
</head>
<body style="overflow:auto;">
    <ul style="list-style:none;">
        <li>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="#"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;"></a>
        </li>
        <table style="font-size:24pt; position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
            <tr align="center">
                <!--상단메뉴-->
                <td><a href="#">식당</a></td>
                <td><a href="#">대상별 추천</a></td>
                <td><a href="#">랜덤 추천</a></td>
                <td><a href="#">이벤트</a></td>
            </tr>
        </table>
        <table style="position:absolute; left:8.05555555556%; top:26.5625%; width:83.33333333333%; height:17.65625%;">
            <tr>
                <td style="border:2px solid #222222"></td><!--메인페이지 이벤트 창-->
            </tr>
        </table>
        <!--즐겨찾기 시작-->
        <li>
            <img src="star.png" style="position:absolute ; left:3.33333333333%; top:48.125%; width:4.44444444444%; height:2.5%;">
        </li>
        <table style="position:absolute; left:8.8%; top:48.1%; width:20%; height:2.65625;">
            <tr><td style="font-size:30pt">즐겨찾기</td></tr>
        </table>
        <!--즐겨찾기 목록-->
        <table class="downmenu" style="position:absolute; left:0%; top:54%; width:100%; height:auto;">
            <tr>
                <td class="favorite"><a href="#">치킨 피자 나라<img src="hansan.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">우일 식당<img src="full.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">순이네 분식<img src="hurry.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
        </table>
        <!--마이페이지부분-->
        <div id="mypage">
            <a href="../Doeat_Login/Doeat_Login.php" style="position:absolute; left:15%; top:18%;">로그아웃</a>
            <a href="../Doeat_Notice/Doeat_Notice_User.php" style="position:absolute; left:15%; top:22%;">공지사항</a>
            <a href="../Doeat_Restaurant_Manager/Doeat_Restaurant_Info_Manager.php" style="position:absolute; left:15%; top:26%;">식당 정보 관리</a>
            <a href="../Doeat_Event/Doeat_Event_Admin.html" style="position:absolute; left:15%; top:30%;">이벤트 관리</a>
            <a href="../Doeat_Restaurant_Manager/Doeat_Restaurant_OkNo.php" style="position:absolute; left:15%; top:34%;">식당 승인 요청</a>
            <p style="position:absolute; left:15%; top:42%;">푸쉬알림</p>
            <!--push알림 스위치-->
            <form>
                <label class="switch" style="position:fixed; left:60%; top:42%; height:2.5%; width:10%">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </form>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="arrow.png" style="color:#ffffff; position:absolute;left:0%; top:95%; width:10%; height:5%;"></a>
        </div>
    </ul>
</body>
</html>
