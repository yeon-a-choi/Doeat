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
		
		<!-- 선택된 식당 명 위치 및 크기 설정 -->
		<div style="position:absolute; left:41%; top:29%; width:25.27777777778%; height:3.75%; font-size:33pt;">
			우일식당
		</div>

		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:34%;">
		
		<!-- 예약 불가 문구 위치 및 크기 설정 -->
		<div style="position:absolute; left:42.5%; top:49%; font-size:30pt;">
			불&nbsp&nbsp&nbsp&nbsp&nbsp가
		</div>
		
		<!-- 예약 불가 아이콘 위치 및 크기 설정 -->
		<img src="unable.png" style="position:absolute; left:36.5%; top:53.5%; width:25.55555555556%; height:13%;">
		

		<!-- 예약 불가 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:34.5%; top:70%; font-size:30pt;">
			예약이 불가합니다.
		</div>


		<!-- 확인 버튼 위치 및 크기, 글자 크기, 버튼 배경색, 글자 색 설정 -->
		<form>
		<input type="button" value="확인" onclick="location.href='../Doeat_Restaurant/Doeat_Restaurant_Info.php'" style="position:absolute; left:43.5%; top:80%; width:12%; height:4.21875%; font-size:28pt;  background-color:#ff9900; color:white;">
		</form>
			
	</body>
</html>