﻿<html>
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
		
		/* 좌석 박스 크기, 좌석 번호 크기, 정렬, 텍스트 색 설정 */
		.sit_box{
			position:absolute;
			width:15%; height:25%;
			font-size:33pt;
			text-align:center;
			color:white;
		
		}

		/* table 목록 넓이 위치*/
		table.search_table {
            position: fixed;
            width: 100%;
        }
        
		/* table 목록 단락 선 표시, 여백, 글자크기*/
        td.search {	
			position: relative;
            font-size:24pt;
            padding:3%;
			text-align:center;
		}
        
		/* 버튼 클릭 시 생기는 테두리 없애기 */
		input:focus {
			outline:none;
		}
		
	</style>

	<script language="javascript">

	//즐겨찾기 이미지 클릭 시 이미지를 변경하는 함수
		var img = new Array("unfavorite.png","favorite.png");
		var i=0;
		
		function changeImg(){
			document.like.src = img[i++];
			if(i>1){
				i=0;	
				//db false
			}
			//else db true
		}

		
		// 버튼 클릭 시 메뉴, 좌석 정보 div 변경 함수
		function menu_click() {
			document.getElementById("menu").style.display = "block";   //==> 보이기
			document.getElementById("sit").style.display = "none";  //==> 숨기기
		}

		function sit_click() {
			document.getElementById("menu").style.display = "none";  // ==> 숨기기
			document.getElementById("sit").style.display = "block";  //==> 보이기
		}
	</script>
	</head>

	<body style="overflow:auto;">
			<!-- 상단 홈 아이콘, 로고, 마이페이지 아이콘 -->
			<ul>
				<li>
					<a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
				</li>
				<li>
					<img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
				</li>
				<li>
					<a href="../Doeat_Mypage/Doeat_Mypage_User.php"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
				</li>
		

			<!-- 상단 메뉴(식당, 대상별 추천, 랜덤 추천, 이벤트) -->
			<table style="position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
				<tr align="center">
					<td style="border-bottom:3px solid #ff9900"><a href="../Doeat_Restaurant/Doeat_Restaurant.php">식당</a></td>
					<td><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">대상별 추천</a></td>
					<td><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
					<td><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</a></td>
				</tr>
			</table>
			</ul>
		
		<!-- 선택된 식당 명, 즐겨찾기 버튼 -->
		<div style="position:absolute; left:39%; top:29%;font-size:33pt;">
			우일식당<img name="like" src="favorite.png" onClick="changeImg();" style="position:absolute; left:170%; top:-10%; width:28%; height:100%;">
		</div>

		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:34%;">
		
		<!-- 식당 정보 글자 크기, 위치, 밑줄 설정 -->
		<div style="position:absolute; left:9.38888888889%; top:38.5%; font-size:28pt">
		식당 정보
		<hr style="position:absolute; left:0%; top:105%; width:98%; border: 3px solid #ff9900;">
		</div>
		
		<!-- 운영 시간 글자 크기, 위치 설정 -->
		<div style="position:absolute; left:9.38888888889%; top:43.4%; font-size:28pt;">
		운영 시간 : 11:00-20:00
		</div>

		<!-- 운영 시간 글자 크기, 위치 설정 -->
		<div style="position:absolute; left:9.38888888889%; top:48%; font-size:28pt;">
		휴무일 : 1,3번째 주 주말
		</div>
		
		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:55%;">
		

		<!-- 메뉴 버튼 위치 및 크기, 선 설정 -->
		<input type="button" value="메뉴" onClick="menu_click();" style="position:absolute; left:0%; top:55%; width:50%; height:7%; font-size:28pt; border:none; border-right: 1px solid #000000; border-top: 1px solid #2a2a2a; border-bottom: none; background-color:white; color:black;">
		</input>
		
		<!-- 좌석 정보 버튼 위치 및 크기, 선 설정 -->
		<input type="button" value="좌석 정보"  onClick="sit_click();" style="position:absolute; left:50%; top:55%; width:50%; height:7%; font-size:28pt; border:none; border-top: 1px solid #2a2a2a; background-color:white; ">
		</input>
		
		
		<!-- 메뉴 div -->
		<div id="menu" style="position:absolute; left:0%; top:62%; width:100%; height:37%; font-size:30pt; border:none; display:block;">
			
			<hr style="position:absolute; left:50%; top:0%; width:50%;">

			
			<!-- 메뉴 아이콘, 이름, 가격 테이블 목록 -->
			<table class="search_table" style="position:absolute; left:0%; top:5%; width:100%; height:auto;">
				<tr>
					<td class="search"><img src="good.png" style="width:30%; height:180%;"></td>
					<td class="search">닭갈비</td>
					<td class="search">11,000원</td>
				</tr>

				<tr>
					<td class="search"><img src="circle.png" style="width:30%; height:180%;"></td>
					<td class="search">돼지불고기</td>
					<td class="search">10,500원</td>
				</tr>

				<tr>
					<td class="search"><img src="circle.png" style="width:30%; height:180%;"></td>
					<td class="search">부대찌개</td>
					<td class="search">8000원</td>
				</tr>
			 
        </table>
		</div>

		<!-- 좌석 정보 div -->
		<div id="sit" style="position:absolute; left:0%; top:62%; width:100%; height:37%; font-size:80px; border:none; display:none;">
			
			<hr style="position:absolute; left:0%; top:0%; width:50%;">
			
			<!-- 좌석 색 안내 표시 -->
			<div style="position:absolute; left:53%; top:7%; width:3%; height:5%; background-color:#ff9900;"></div>
			<div style="font-size:19pt; position:absolute; left:57%; top:7%;">빈 좌석</div>

			<div style="position:absolute; left:67%; top:7%; width:3%; height:5%; background-color:#AAAAA9;"></div>
			<div style="font-size:19pt; position:absolute; left:72%; top:7%;">식사 중인 좌석</div>
			
			<!-- 좌석 크기 및 위치 색 설정 -->
			<div class="sit_box" style="left:13%; top:18%; background-color:#ff9900;"><br>1</div>
			<div class="sit_box" style="left:33%; top:18%; background-color:#ff9900;"><br>2</div>
			<div class="sit_box" style="left:53%; top:18%; background-color:#ff9900;"><br>3</div>
			<div class="sit_box" style="left:73%; top:18%; background-color:#AAAAA9;"><br>4</div>
			<div class="sit_box" style="left:13%; top:49%; background-color:#ff9900;"><br>5</div>
			<div class="sit_box" style="left:33%; top:49%; background-color:#ff9900;"><br>6</div>
			<div class="sit_box" style="left:53%; top:49%; background-color:#AAAAA9;"><br>7</div>
			<div class="sit_box" style="left:73%; top:49%; background-color:#AAAAA9;"><br>8</div>

			<!-- 예약요청 버튼 위치 및 크기 설정 -->
			<form>
			<input type="button" onclick="location.href='../Doeat_Yeyac/Doeat_Yeyac_Info_Input.php'" value="예약 요청" style="position:absolute; left:23.77777777778%; top:85%; width:53.05555555556%; height:10%; font-size:28pt; background-color:#ff9900; color:white;">
			</form>
		</div>
	</body>
</html>