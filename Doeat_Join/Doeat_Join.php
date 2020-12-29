<?
				$connect = mysql_connect('220.69.241.86','cejin','cejin');
				mysql_select_db('doeat', $connect);
	
				if ($mode == "insert")
				{
				$sql="insert into member(name, jumin, hp, id, pw, r_saub) values ";
				$sql .=" ('$name',  '$jumin','$hp', '$id', '$pw', '$r_saub')";
		
				$result=mysql_query($sql, $connect);
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
        /*a 태그 초기화*/
        a {
            text-decoration: none;
            color: #2a2a2a;
            font-size: 16pt;
        }
		/*form 태그 테두리 및 글자 크기*/
        input{
            border:2px solid black;
            font-size:16pt;
        }
		/*회원가입 버튼 색*/
        .sub {
            background-color:#ff9900;
            color:#ffffff;
            border:none;
        }
		/*폰트 사이즈 및 테이블 크기 맞춤(글자에 맞춰 테이블이 맞춰짐)*/
        table td {
            font-size: 20pt;
            white-space: nowrap;
        }
        /*팝업창 위치, 범위 설정*/
        #popup1 {
            vertical-align: middle;
            display: none;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            margin-top: 80%;
        }
            /*팝업창 크기 밑 색상, 테두리 깍기*/
            #popup1 .popup_content {
                width: 60%;
                margin: 100px auto;
                padding: 30px 20px;
                background: #ffffff;
                border: 2px solid #ff9900;
                border-radius: 5% 5% / 5% 5%;
            }
            /*팝업창이 띄워지면 어두워지는 뒷 배경*/
            #popup1 .popup_layer {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: rgba(0, 0, 0, 0.5);
                z-index: -1;
            }
			
			
		
    </style>
</head>
<body style="overflow:auto;">
    <!--상단 회원가입 밑 아이콘-->
    <p style="font-size:20pt; position:absolute; left:3%; top:7.5%">회원가입</p>
    <img src="logo.png" style="position:absolute; left:75%; top:6%; width:21%; height:3%;">
    <div style="background-color:#ff9900; position:absolute; left:2.5%; top:10%; width:95%; height:0.5%;"></div>
    <!--회원가입 시작-->
    <form action="../Doeat_Login/Doeat_Login.php?mode=insert" id="popup_openbtn5" method='post'>
        <table style="width:85%; height:70%; position:absolute; left:8%; top:15%">
            <tr>
                <td>이&nbsp&nbsp&nbsp름</td>
                <td><input type="text" style="width:45%; height:40%;" name="name"></td>
            </tr>
            <tr>
                <td>주민등록번호</td>
                <td>
                    <input type="text" style="width:35%; height:40%;" name="jumin">&nbsp-&nbsp<input type="text" style="width:35%; height:40%;" name="jumin">&nbsp
                    <input type="button" value="확인" id="popup_openbtn1" class="sub" style="width:10%; height:40%;">
                </td>
            </tr>
            <tr>
                <td>핸드폰번호</td>
                <td>
                    <input type="text" style="width:25%; height:40%;" name="hp">&nbsp-&nbsp<input type="text" style="width:25%; height:40%;" name="hp">
                    &nbsp-&nbsp<input type="text" style="width:25%; height:40%;" name="hp">&nbsp
                    <input type="button" value="중복확인" id="popup_openbtn2" class="sub" style="width:15%; height:40%;">
                </td>
            </tr>
            <tr>
                <td>아이디</td>
                <td>
                    <input type="text" style="width:35%; height:40%;" name="id">&nbsp@&nbsp<input type="text" style="width:35%; height:40%;" name="id">&nbsp
                    <input type="button" value="중복확인" id="popup_openbtn3" class="sub" style="width:15%; height:40%;">
                </td>
            </tr>
            <tr>
                <td>비밀번호</td>
                <td><input type="password" style="width:45%; height:40%;" name="pw"></td>
            </tr>
            <tr>
                <td>비밀번호확인</td>
                <td><input type="password" style="width:45%; height:40%;">&nbsp&nbsp&nbsp<span style="color:red;">불일치</span></td>
            </tr>
            <tr>
                <td><input type="checkbox" id="sails" style="width:15%; height:15%;">&nbsp식당업주</td>
                <td></td>
            </tr>
            <tr>
                <td>사업자등록번호</td>
                <td>
                    <input type="text" id="sails_num1" style="width:20%; height:40%;" disabled name="r_saub">&nbsp-&nbsp<input type="text" id="sails_num2" style="width:15%; height:40%;" disabled name="r_saub">
                    &nbsp-&nbsp<input type="text" id="sails_num3" style="width:30%; height:40%;" disabled name="r_saub">&nbsp
                    <input type="button" value="확인" id="popup_openbtn4" class="sub" style="width:10%; height:40%;" disabled>
                </td>
            </tr>
        </table>
      	<a href="./Doeat_Join.php">
        <input type="submit" value="회원가입" class="sub" style="font-size:24pt; position:absolute; left:15%; top:90%; width:70%; height:5%;">
       	</a>
    </form>
    <!--팝업창내용-->
    <div id="popup1">
        <div class="popup_content" style="text-align:center; color:#ff9900;">
            <p style="font-size:20pt;">사용 가능한 값입니다.</p><br><br>
            <button type="button" id="popup_closebtn1" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
        </div>
        <div class="popup_layer"></div>
    </div>
	
	
    <script>
        /*사업자 번호 체크박스 체크시 사업자 번호 입력가능*/
       		document.getElementById('sails').onchange = function () {
            document.getElementById('sails_num1').disabled = !this.checked;/*사업자 번호 첫번째 칸 막아놓기*/
            document.getElementById('sails_num2').disabled = !this.checked;/*사업자 번호 두번째 칸 막아놓기*/
            document.getElementById('sails_num3').disabled = !this.checked;/*사업자 번호 세번째 칸 막아놓기*/
            document.getElementById('popup_openbtn4').disabled = !this.checked;/*사업자 번호 중복확인 버튼 막아놓기*/
        };
    </script>
    <script>
        /*중복,틀린값 확인 팝업 창*/
        document.getElementById("popup_openbtn1").onclick = function () { document.getElementById("popup1").style.display = "block"; }/*주민등록번호 값 확인*/
        document.getElementById("popup_openbtn2").onclick = function () { document.getElementById("popup1").style.display = "block"; }/*핸드폰번호 값 확인*/
        document.getElementById("popup_openbtn3").onclick = function () { document.getElementById("popup1").style.display = "block"; }/*아이디 값 확인*/
        document.getElementById("popup_openbtn4").onclick = function () { document.getElementById("popup1").style.display = "block"; }/*사업자 번호 값 확인*/
        document.getElementById("popup_closebtn1").onclick = function () { document.getElementById("popup1").style.display = "none"; }/*팝업창 확인 버튼 누를 시 팝업 종료*/
		
    </script>
</body>
</html>
