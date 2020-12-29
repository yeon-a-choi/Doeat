<html>
	<head>
	<style>
		/*전체 초기화*/
		* {
			margin :0px; 
			padding :0px; 
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

		/*예약취소 팝업창 위치, 범위 설정*/
        #popup {
            vertical-align: middle;
            display: none;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            margin-top: 80%;
        }
        /*예약취소 팝업창 크기 밑 색상, 테두리 깍기*/
        #popup .popup_content {
             width: 60%;
             margin: 100px auto;
             padding: 30px 20px;
             background: #ffffff;
             border: 2px solid #ff9900;
             border-radius: 5% 5% / 5% 5%;
         }
         /*예약취소 팝업창이 띄워지면 어두워지는 뒷 배경*/
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

			<!-- 상단 홈 아이콘, 로고, 마이페이지 아이콘 위치 및 크기 설정 -->
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
			</ul>
		
		<!-- 현재 선택된 페이지 이름 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:41%; top:22%; font-size:33pt;">
			예약 정보
		</div>

		<!-- 예약 완료 된 식당 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:41%; top:29%; font-size:33pt;">
			우일식당
		</div>


		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:34%;">

		
		<!-- 예약 시간 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:28%; top:55.5%; font-size:30pt;">
			예약 시간&nbsp&nbsp&nbsp: 
		</div>
		
		<!-- 예약 시간 설정 -->
		<form>
			<!-- 예약 시간 time 받아오기 (읽기전용) -->
			<input type="text" name="time" value="11" size="3" style="position:absolute; left:53%; top:54.8%; width:8%; height:4.4%; font-size:50pt;" readonly> </input>
			
			<!-- 받아온 시간 사이에 들어갈 : 텍스트 위치 및 크기 설정 -->
			<div style="position:absolute; left:62.8%; top:54.8%; font-size:50pt;">
			:
			</div>

			<!-- 예약 시간 minute 받아오기 (읽기전용) -->
			<input type="text" name="minute" value="00" size="3" style="position:absolute; left:67%; top:54.8%; width:8%; height:4.4%; font-size:50pt;" readonly></input>
		</form>

		<!-- 예약 인원 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:29%; top:63.5%; font-size:30pt;">
			예약 인원&nbsp&nbsp&nbsp: 
		</div>

		<form>
			<!-- 예약 인원 받아오기 (읽기전용) -->
			<input type="text" name="time" value="2" size="3" style="position:absolute; left:57%; top:62.7%; width:8%; height:4.4%; font-size:50pt;" readonly> </input>
		</form>
		
		<!-- 명 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:67%; top:63.7%; font-size:30pt;">
			명
		</div>
		
		<!-- 취소 버튼 위치 및 크기, 글자 크기, 선, 배경색, 글자 색 설정 -->
		<form>
		<input type="button" value="취소" id="popup_cancelbtn" style="position:absolute; left:59%; top:80%; width:12%; height:4.21875%; font-size:28pt; border:1px solid #ff9900; background-color:white; color:#ff9900;">
		</form>

		<!-- 확인 버튼 위치 및 크기, 글자 크기, 선, 배경색, 글자 색 설정 -->
		<input type="button" value="확인" onclick="location.href='../Doeat_Mypage/Doeat_Mypage_User.php'" style="position:absolute; left:75%; top:80%; width:12%; height:4.21875%; font-size:28pt;  background-color:#ff9900; color:white;"></input>

		 <!--팝업창내용-->
		<div id="popup">
        <div class="popup_content" style="text-align:center; color:#ff9900;">
            <p style="font-size:20pt;">예약 취소 하시겠습니까?</p><br><br>
            <button type="button" id="popup_closebtn1" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
			<button type="button" id="popup_closebtn2" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">취소</button>
        </div>
        <div class="popup_layer"></div>
		</div>


		<script>
        /*취소 버튼 확인*/
        document.getElementById("popup_cancelbtn").onclick = function () { document.getElementById("popup").style.display = "block"; }
        
		/*팝업창 확인 버튼 누를 시 팝업 종료*/
        document.getElementById("popup_closebtn1").onclick = function () { document.getElementById("popup").style.display = "none"; }
		document.getElementById("popup_closebtn2").onclick = function () { document.getElementById("popup").style.display = "none"; }
		</script>
			
	</body>
</html>