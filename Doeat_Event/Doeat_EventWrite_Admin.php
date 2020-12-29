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
        /*이미지 초기화 (바꾸거나 삭제시 상단 메뉴 레이아웃 망가짐)*/
        img {
            width: 100%;
            height: 100%;
        }
        /*상단 메뉴 크기 고정*/
        table {
            table-layout: fixed;
        }
        /*a태그 설정*/
        a {
            text-decoration: none;
            color: #2a2a2a;
        }
        /*공지사항 제목 정보 표시*/
        p.date {
            position: absolute;
            font-size: 12pt;
        }
        /*공지사항 제목 테이블 설정*/
        td.favorite {
            border-top: 1px solid #222222;
            border-bottom: 1px solid #222222;
            position: relative;
            font-size: 24pt;
            padding: 5%;
            height: 50%;
        }
        /*공지사항 넓이 위치*/
        table.downmenu {
            position: fixed;
            width: 100%;
        }
        /*글쓰기 버튼 조정*/
        #sub {
            background-color: #ff9900;
            color: #ffffff;
        }
        /*textarea 사이즈 고정*/
        textarea {
            border-top: 1px solid black;
            min-width: 100%;
            min-height: 30%;
            position: absolute;
            left: 0%;
            top: 42%;
            resize: none;
            font-size: 8pt;
            padding: 5%;
        }
        /*textarea 사이즈 고정*/
    </style>
	<script type="text/javascript">
	
	//오늘 날짜를 불러오는 함수
    function todayIs() {
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //1월이 0으로 뜨기때문에 +1
        var yyyy = today.getFullYear();
 
        if(dd<10){
            dd = '0'+dd
        }
        if(mm<10){
            mm = '0'+mm
        }
 
        today = yyyy + '-' + mm + '-' + dd;
        document.write(today);
    } 

	</script>
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
        <form>
            <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
                <tr>
                    <td class="favorite"><input type="text" style="padding-left:5%; font-size:24pt; border-top:1px solid #000000; position:fixed; left:0%; top:34%; width:100%; height:8%;">&nbsp;<p class="date"><script>todayIs();</script></p></td>
                </tr>
            </table>
            <textarea></textarea>
            <div style="padding-top:1%;padding-bottom:1%; border-top:1px solid #000000;border-bottom:1px solid #000000; position:absolute; left:0%; top:72%; width:100%; height:2%;"><input type="file"></div>
            <input type="button" value="작성완료" onClick="location.href='Doeat_Event_Admin.php'" style="position:absolute; left:23.77777777778%; top:80%; width:53.05555555556%; height:4.21875%; font-size:30px; background-color:#ff9900; color:white;">
        </form>
    </ul>

</body>
</html>
