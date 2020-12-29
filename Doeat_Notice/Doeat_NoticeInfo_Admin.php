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
        /*공지사항 제목 정보 표시*/
        p.date {
            position: absolute;
            font-size: 12pt;
        }
        /*공지사항 내용*/
        td.not {
            border-top: 1px solid #222222;
			border-bottom: 1px solid #222222;
            font-size: 24pt;
            width: 100%;
            height: 50%;
        }
        p.infoalign {
            padding:5%;
        }
        /*공지사항 내용 설정*/
        #sub {
            background-color: #ff9900;
            color: #ffffff;
            font-size: 28pt;
        }
        /*하단 아이콘 색 설정*/
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
        <!--공지사항 정보-->
         <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
            <tr>
                <td class="favorite">[공지] 즐겨찾기 오류 수정&nbsp;<p class="date">2019.10.05</p></td>
            </tr>
            <tr>
                <td class="not" style="position:fixed; height:35%"><!--공지사항 내용-->
                    <p class="infoalign">즐겨찾기가 되지 않던 문제를 해결하였습니다.</p>
                </td>
            </tr>
        </table>
        <!--하단 버튼-->
        <form>
            <INPUT TYPE="button" onclick="location.href='Doeat_Notice_Admin.php'" id="sub" VALUE="확인" style="position:fixed;left:55%;top:82%;width:12%;height:4.21%;">
            <INPUT TYPE="button" onclick="location.href='Doeat_NoticeWrite_Admin.php'" id="sub" VALUE="수정" style="position:fixed;left:70%;top:82%;width:12%;height:4.21%;">
            <INPUT TYPE="button" id="sub" VALUE="삭제" style="position:fixed;left:85%;top:82%;width:12%;height:4.21%;">
        </form>
    </ul>

</body>
</html>
