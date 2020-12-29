<html>
	<head>
	<style>
		/*전체 초기화*/
		* {
			margin : 0px; 
			padding : 0px; 
			border:none; 
			font-family:"나눔바른고딕"; 
		} 
		
		/*body 초기화*/
		body {
			width:100%; 
			height:100%;
		}

		/*이미지 초기화 (바꾸거나 삭제시 상단 메뉴 레이아웃 망가짐)*/
		img {
			width:100%; 
			height:100%;
		}
		
		/*상단 메뉴 크기 고정*/
		table {
			table-layout:fixed; 
			font-size:24pt;
		} 

		/*a태그 설정*/
		a {
			text-decoration: none;
			color:#2a2a2a;
		} 
		
		/* 밑줄 길이 및 선 굵기, 모양, 색 설정 */
		hr {
			 position:absolute;
			 width:100%;
			 border: 1px solid #2a2a2a;
		}
		
		/*버튼 위치, 크기, 글자 크기, 버튼 배경색, 글자색 설정*/
		.button{
			position:absolute;
			width:53.05555555556%;
			height:4.21875%;
			font-size:28pt;
			background-color:#ff9900;
			color:white;
		}

		/*팝업창 위치, 범위 설정*/
        #popup {
            vertical-align: middle;
            display: none;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            margin-top: 80%;
        }
        /*팝업창 크기 밑 색상, 테두리 깍기*/
        #popup .popup_content {
            width: 60%;
            margin: 100px auto;
            padding: 30px 20px;
            background: #ffffff;
            border: 2px solid #ff9900;
            border-radius: 5% 5% / 5% 5%;
        }
        /*팝업창이 띄워지면 어두워지는 뒷 배경*/
        #popup .popup_layer {
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
			<!-- 상단 홈 아이콘, 로고, 마이페이지 아이콘 -->
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
		

			<!-- 상단 메뉴(식당, 대상별 추천, 랜덤 추천, 이벤트) -->
			<table style="position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
				<tr align="center">

					<!-- 식당 탭 하단에 밑줄 표시-->
					<td style="border-bottom:3px solid #ff9900"><a href="../Doeat_Restaurant/Doeat_Restaurant.php">식당</a></td>
					<td><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">대상별 추천</a></td>
					<td><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
					<td><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</a></td>
				</tr>
			</table>
			</ul>
		
		<!-- 선택된 식당 명 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:41%; top:29%; width:25.27777777778%; height:3.75%; font-size:33pt;">
			우일식당
		</div>

		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:34%;">
		
		<!-- 예약을 원하는 시간 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:31%; top:47%; font-size:30pt;">
			예약금을 입금해주세요.
		</div>
		
		<!-- 예약금 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:40%; top:53.5%; font-size:50pt;">
			3000
		</div>
		<div style="position:absolute; left:59.5%; top:54.5%; font-size:30pt;">
			원
		</div>

		<!-- 은행, 계좌번호 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:23.5%; top:61%; font-size:30pt;">
			신한은행&nbsp 110-000000-0011
		</div>
		
		<!-- 예금주 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:36.5%; top:67%; font-size:30pt;">
			예금주 : 김선경
		</div>
		
		<!-- 요청하기 버튼 위치 설정 -->
		<form>
			<input type="button" class="button" id="popup_openbtn" value="입금 완료" style="left:23.77777777778%; top:80%;">
		</form>
			
		<!--팝업창내용-->
		<div id="popup">
		<div class="popup_content" style="text-align:center; color:#ff9900;">
			<p style="font-size:20pt;">입금 하셨습니다.</p><br><br>
			<button type="button" id="popup_closebtn" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
		</div>
		<div class="popup_layer"></div>
		</div>

		<script>
		/*입금 완료 팝업 창*/
		document.getElementById("popup_openbtn").onclick = function () { document.getElementById("popup").style.display = "block"; }
		/*팝업창 확인 버튼 누를 시 팝업 종료*/
		document.getElementById("popup_closebtn").onclick = function () { 
			document.getElementById("popup").style.display = "none";
			location.href='Doeat_Yeyac_Success.php'
			}
		</script>

	</body>
</html>