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
	
	<!-- 버튼 클릭 시 숫자를 증가/감소할 수 있는 함수 -->
	<script language='javascript'>
		function change(num)
		{
			var x  = document.form;
			var y = Number(x.count.value) + num;
			if(y < 1) {
				y = 1;
			}
			x.count.value = y;
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
					<a href="../Doeat_Mypage/Doeat_Mypage_User.php"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
				</li>
				<li>
					<img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
				</li>
		
			</ul>
		
			<!-- 선택된 식당 명, 즐겨찾기 버튼 -->
			<div style="position:absolute; left:36.5%; top:22%; font-size:33pt;">
				식당 정보 관리	
			</div>

			<!-- 밑줄 -->
			<hr style="position:absolute; left:0%; top:34%; width:100%; border: 1px solid #2a2a2a;">
		
			<!-- 식당 이름 문구 -->
			<div style="position:absolute; left:15%; top:45%; font-size:28pt;">
				식당 이름
			</div>

			<!-- 식당 이름 입력 칸 -->
			<input type = "text" name = "r_num" style="position:absolute; left:35%; top:44.5%; width:25.27777777778%; height:3.75%; font-size:28pt; border:1px solid #2a2a2a;"></input>
		
			<!-- 운영 시간 문구 -->
			<div style="position:absolute; left:15%; top:51%; font-size:28pt;">
				운영 시간
			</div>

			<!-- 오픈시간 select 박스 크기, 위치, 폰트 크기, option 값  설정 -->
			<select name = "r_optime" style="position:absolute; left:35%; top:50.1%; width:14%; height:4.375%; font-size:28pt;">

			<script language="javascript" type="text/javascript" > 
			var op=["10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00"];
			for(var i=0;i<=11;i++)
			{
				document.write("<option>"+op[i]+"</option>");
			}
			</script>
				
			</select>

			<div style="position:absolute; left:52%; top:50.9%; font-size:28pt;">
			~
			</div>

			<!-- 마감시간 select 박스 크기, 위치, 폰트 크기, option 값  설정 -->
			<select name = "r_optime" style="position:absolute; left:59%; top:50.1%; width:14%; height:4.375%; font-size:28pt;">
			<script language="javascript" type="text/javascript" > 
			var cl=["10:00","11:00","12:00","13:00","14:00","15:00","16:00","17:00","18:00","19:00","20:00","21:00"];
			for(var i=0;i<=11;i++)
			{
				document.write("<option>"+cl[i]+"</option>");
			}
			</script>
			</select>
			

			<!-- 휴무일 문구 -->
			<div style="position:absolute; left:15%; top:57%; font-size:28pt;">
				휴무일
			</div>

			<!-- 휴무일 입력 칸 -->
			<input type = "text" name = "r_rest" style="position:absolute; left:35%; top:56.4%; width:25.27777777778%; height:3.75%; font-size:28pt; border:1px solid #2a2a2a;"></input>
			
			<!-- 마을 문구 -->
			<div style="position:absolute; left:15%; top:63%; font-size:28pt;">
				마을
			</div>

			<!-- 마을 입력 칸 -->
			<input type = "text"  name="r_maeul" style="position:absolute; left:35%; top:62.4%; width:25.27777777778%; height:3.75%; font-size:28pt; border:1px solid #2a2a2a;"></input>
			
			<!-- 음식분류 문구 -->
			<div style="position:absolute; left:15%; top:69%; font-size:28pt;">
				음식분류
			</div>

			<!-- 음식분류 입력 칸 -->
			<input type = "text" name="r_foodc" style="position:absolute; left:35%; top:68.4%; width:25.27777777778%; height:3.75%; font-size:28pt; border:1px solid #2a2a2a;"></input>
						
			
			<!-- 요청하기 버튼 -->
			<form>
			<input type="button" value="요청" id="popup_openbtn" style="position:absolute; left:23%; top:82%; width:53.05555555556%; height:4.21875%; font-size:28pt; background-color:#ff9900; color:white;">
			</form>

			<!--팝업창내용-->
			<div id="popup">
			<div class="popup_content" style="text-align:center; color:#ff9900;">
				<p style="font-size:20pt;">요청 되었습니다.</p><br><br>
				<button type="button" id="popup_closebtn" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
			</div>
			<div class="popup_layer"></div>
			</div>

			<script>
			/*요청 팝업 창*/
			document.getElementById("popup_openbtn").onclick = function () { document.getElementById("popup").style.display = "block"; }
			/*팝업창 확인 버튼 누를 시 팝업 종료*/
			document.getElementById("popup_closebtn").onclick = function () { document.getElementById("popup").style.display = "none"; }
			</script>

			
	</body>
</html>