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
	
	<script language='javascript'>

	//버튼 클릭 시 숫자를 증가/감소할 수 있는 함수
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
					<a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
				</li>
				<li>
					<a href="../Doeat_Mypage/Doeat_Mypage_User.php"><img src="mypage.png" style="position:absolute; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
				</li>
				<li>
					<img src="logo.png" style="position:absolute; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
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
		<div style="position:absolute; left:41%; top:29%; font-size:33pt;">
			우일식당		
		</div>

		<!-- 밑줄 위치 설정 -->
		<hr style="left:0%; top:34%;">
		
		<!-- 예약을 원하는 시간 텍스트 위치 및 크기 설정 -->
		<div style="position:absolute; left:15%; top:45.8%; font-size:24pt;">
			예약을 원하는 시간을 선택해주세요.
		</div>
		

		<!-- 년 박스 크기, 위치, 폰트 크기, option 값 설정-->
		<select style="position:absolute; left:15%; top:49.9%; width:16%; height:4.375%; font-size:24pt;">

		<!-- script를 select 안에 써서 직접 for문을 돌림 -->
		<script language="javascript" type="text/javascript" > 

		for(var y=2019;y<=2024;y++)
		{
			document.write("<option>"+y+"</option>");
		}
		</script>
		</select>

		<div style="position:absolute; left:32.2%; top:50.9%; font-size:35px;">
		년
		</div>

		<!-- 월 박스 크기, 위치, 폰트 크기, option 값 설정-->
		<select style="position:absolute; left:38%; top:49.9%; width:10%; height:4.375%; font-size:24pt;">
		<script language="javascript" type="text/javascript" > 

		for(var m=1;m<=12;m++)
		{
			document.write("<option>"+m+"</option>");
		}
		</script>
		</select>
		<div style="position:absolute; left:49%; top:50.9%; font-size:35px;">
		월
		</div>

		<!-- 일 박스 크기, 위치, 폰트 크기, option 값 설정-->
		<select style="position:absolute; left:54%; top:49.9%; width:10%; height:4.375%; font-size:24pt;">
		<script language="javascript" type="text/javascript" > 

		for(var d=1;d<=31;d++)
		{
			document.write("<option>"+d+"</option>");
		}
		</script>
		</select>
		<div style="position:absolute; left:66%; top:50.9%; font-size:35px;">
		일
		</div>
			
		<!-- 시 박스 크기, 위치, 폰트 크기, option 값 설정 -->
			
			<select name = "Time" style="position:absolute; left:15%; top:55.5%; width:16%; height:4.375%; font-size:24pt;"> 
			<script language="javascript" type="text/javascript" > 
			var t=[11,12,13,14,15,16,17,18,19,20,21];
			for(var i=0;i<=10;i++)
			{
				document.write("<option>"+t[i]+"</option>");
			}
			</script>
			</select>
			<div style="position:absolute; left:32.2%; top:56.3%; font-size:35px;">
			시
			</div>


			<!-- 분 select 박스 크기, 위치, 폰트 크기, option 값  설정 -->
			<select name = "Minute" style="position:absolute; left:38%; top:55.5%; width:10%; height:4.375%; font-size:24pt;">
			<script language="javascript" type="text/javascript" > 
			var mi=[00,05,10,15,20,25,30,35,40,45,50,55];
			for(var i=0;i<=11;i++)
			{
				document.write("<option>"+mi[i]+"</option>");
			}
			</script>
				
			</select>
			<div style="position:absolute; left:49.2%; top:56.3%; font-size:35px;">
			분
			</div>

			<!-- 예약 인원 텍스트 위치 및 크기 설정 -->
			<div style="position:absolute; left:15%; top:65%; font-size:24pt;">
				예약 인원을 입력해주세요.
			</div>
			
			<!-- 예약 인원 입력 부분 위치 및 크기 설정 -->
			<form name="form">
			<input type="text" name="count" value="2" size="3" style="position:absolute; left:15%; top:69.2%; width:10%; height:4.4%; font-size:24pt;" readonly></input>
			
			<div style="position:absolute; left:26%; top:70.1%; font-size:24pt;">
			명
			</div>

			<!-- +,- 버튼 위치 및 크기 설정 -->
			<img src="plus.png" onclick="javascript_:change(1);" style="position:absolute; left:35%; top:69.3%; width:7%; height:4%;">
			<img src="minus.png" onclick="javascript_:change(-1);" style="position:absolute; left:44%; top:69.3%; width:7%; height:4%;">
			</form>
		

			<!-- 요청하기 버튼 위치 및 크기 설정 -->
			<form>
			<input type="button" value="요청하기" id="popup_openbtn" style="position:absolute; left:23.77777777778%; top:80%; width:53.05555555556%; height:4.21875%; font-size:28pt; background-color:#ff9900; color:white;">
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
			document.getElementById("popup_closebtn").onclick = function () { 
				document.getElementById("popup").style.display = "none";
				location.href='Doeat_Yeyac_Money.php'
			}
			</script>
			
	</body>
</html>