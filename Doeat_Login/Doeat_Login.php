
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
		/*입력창 테두리, 글자크기*/
        input{
            border:2px solid black;
            font-size:18pt;
        }
		/*입력창 크기*/
        .loginput {
            width: 70%;
            height: 5%;
        }
		/*확인버튼 색상, 크기, 위치 설정*/
        .logsub {
            background-color: #ff9900;
            color:#ffffff;
            font-size:24pt;
            border: none;
            position: absolute;
            left: 15%;
            top: 55%;
            width: 70%;
            height: 5%;
        }
		/*회원가입버튼 색상, 크기, 위치 설정*/
        #join {
            border:none;
            background-color: #ffffff;
            color: #656666;
            font-size: 24pt;
            position: absolute;
            left: 15%;
            top: 62%;
            width: 70%;
            height: 5%;
        }
		/*팝업창 위치, 범위 설정*/
		#popup{
		vertical-align: middle;
			display:none;
			position:relative;
			width:100%;
			height:100%;
			z-index:1;
			margin-top:60%;
		}
        /*팝업창 크기 밑 색상, 테두리 깍기*/
		#popup .popup_content{
			width:60%;
			margin:100px auto;
			padding:30px 20px;
			background:#ffffff;
			border:2px solid #ff9900;
			border-radius: 5% 5% / 5% 5%;
		}
        /*팝업창이 띄워지면 어두워지는 뒷 배경*/
		#popup .popup_layer{
			position:fixed;
			top:0;
			left:0;
			width:100%;
			height:100%;
			background:rgba(0, 0, 0, 0.5);
			z-index:-1;
		}
    </style>
</head>
<?
				$connect = mysql_connect('220.69.241.86','cejin','cejin');
 			  mysql_select_db('doeat', $connect);
 				$sql = "select * from member";
			  $result = mysql_query($sql, $connect);
?>
<body style="overflow:auto;"><!--로그인페이지-->
	<img src="logo.png" style="position:absolute; left:15%; top:20%; width:70%; height:10%;">
	<form method='post'>
	<input type="text" class="loginput" placeholder="아이디" style="position:absolute; left:15%; top:40%;">
	<input type="password" class="loginput" placeholder="비밀번호" style="position:absolute; left:15%; top:47%">
	<a href="../Doeat_Main/Doeat_Main.php"><input type="button" value="확인" id="popup_openbtn" class="logsub"></a>
    <a href="../Doeat_Join/Doeat_Join.php"><input type="button" value="회원가입" id="join"></a>
   </form>
	<!--팝업창내용-->
	<div id="popup">
		<div class="popup_content" style="text-align:center; color:#ff9900;">
		<h3 style="font-size:48pt;">로그인 실패!</h3><br><br>
		<p style="font-size:20pt;">입력하신 아이디 또는 비밀번호가<br>정확하지 않거나 없는 계정입니다.<br>다시 확인하여 주십시오</p><br><br>
		<button type="button" id="popup_closebtn" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
		</div>
		<div class="popup_layer"></div>
	</div>

	<!--로그인 실패 팝업 스크립트-->

</body>
</html>
