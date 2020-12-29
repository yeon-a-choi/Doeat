<html>
<head>
    <script>
        function addCss(obj) {
            var aTag = document.getElementById('nav').getElementsByTagName('a');
            for (var i = 0, len = aTag.length; i < len; i++) {
                if (aTag[i] == obj) { aTag[i].className += "current"; }
                else { aTag[i].className = "nav"; }
            }
        }
    </script>
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
        /*버튼 테두리, 색상, 크기, 마진, 글자 크기*/
        .but {
            list-style: none;
            background-color:#ffffff;
            border: 1px solid #000000;
            width: 8%;
            height: 2.3%;
            font-size: 16pt;
            margin:5%;
        }
       
    </style>

</head>
<body style="overflow:auto;">
    <ul style="list-style:none;" id="nav">
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
                <td style="border-bottom:3px solid #ff9900"><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
                <td><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</a></td>
            </tr>
        </table>
        <!--분류 별 상단 버튼-->
        <li align="center" style="position:fixed; left:0%; top:25%; width:100%; height:100%;">
            <form>
                <a href="#"><input type="button" value="전체" class="but"></a>
                <a href="#"><input type="button" onclick="location.href='Doeat_RandomSelect.php'" value="한식" class="but"></a>
                <a href="#"><input type="button" value="양식" class="but"></a>
                <a href="#"><input type="button" value="중식" class="but"></a>
                <a href="#"><input type="button" value="일식" class="but"></a>
            </form>
        </li>
        <li align="center" style="position:fixed; left:0%; top:45%; width:100%; height:100%; font-size:24pt;">
            <p>선택하세요</p>
            </br><br>
        </li>
        <li align="center">
            <img src="random.png" style="position:absolute; left:42.5%; top:55%; width:15%; height:10%;">
        </li>
    </ul>

</body>
</html>
