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
		
		/*분류 글씨 크기*/
		div {
			font-size:24pt;
		}
		
		/*검색 된 목록 넓이 위치*/
		table.search_table {
            position: fixed;
            width: 100%;
        }
        
		/*검색 된 목록 단락 선 표시, 여백, 글자크기*/
        td.search {
			border-top:1px solid #2a2a2a;
            position: relative;
            font-size: 28pt;
            padding: 5%;
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
					<td><a href="../Doeat_Restaurant/Doeat_Restaurant.php">식당</a></td>
					<td style="border-bottom:3px solid #ff9900"><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">대상별 추천</a></td>
					<td><a href="../Doeat_Random/Doeat_Random.php">랜덤 추천</a></td>
					<td><a href="../Doeat_Event/Doeat_Event_User.php">이벤트</a></td>
				</tr>
			</table>
			</ul>
		


			<!-- 식당 검색 부분 -->
			<!-- 분류 텍스트 크기, 위치 설정 -->
			<div style="position:absolute; left:8.33333333333%; top:28.9%; width:6.94444444444%; height:16%;">
			분류
			</div>
			
			<!-- 마을 select 박스 크기, 위치, 폰트 크기, option 값 설정 -->
			<select name = "Village" style="position:absolute; left:33%; top:27.8125%; width:33%; height:4.375%; font-size:24pt;"> 
				<option value="전체">전체</option>
				<option value="솔뫼">친구</option>
				<option value="논골">부모님</option>
				<option value="논골">연인</option>
				<option value="논골">교수님</option>
			</select>
			
			<!-- 검색 버튼 위치 및 크기 설정 -->
			<form>
			<input type="button" value="검색" style="position:absolute; left:81.25%; top:27.8125%; width:11.11111111111%; height:4.375%; font-size:24pt;">
			</form>

			
			<!-- 검색 결과 목록 테이블 위치 및 크기 설정 -->
			<table class="search_table" style="position:absolute; left:0%; top:36.875%; width:100%; height:auto; border-bottom:1px solid #2a2a2a">
            <tr>
                <td class="search"><a href="../Doeat_Restaurant/Doeat_Restaurant_Info.php">우일식당<img src="hansan.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="search">치킨 피자 나라<img src="hurry.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
            <tr>
                <td class="search">순이네 분식<img src="ready.png" style="position:absolute;left:85%; top:20%; width:8%; height:70%;"></a></td>
            </tr>
        </table>

	</body>
</html>