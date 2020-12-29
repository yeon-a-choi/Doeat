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
		

		/* 식당 등록/추가, 삭제 요청 목록 넓이 위치 */
		table.search_table {
            position: fixed;
            width: 100%;
        }
        
		/* 식당 등록/추가, 삭제 요청 목록 단락 선 표시, 여백, 글자크기 */
        td.search {
			border-top:none;
            position: relative;
            font-size: 28pt;
            padding: 5%;
        }

		/* 밑줄 길이 및 선 굵기, 모양, 색 설정 */
		hr {
			 position:absolute;
			 width:100%;
			 border: 1px solid #2a2a2a;
		}

		/*등록요청 팝업창 위치, 범위 설정*/
        #popup1 {
            vertical-align: middle;
            display: none;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            margin-top: 80%;
        }
        /*등록요청 팝업창 크기 밑 색상, 테두리 깍기*/
        #popup1 .popup_content {
             width: 60%;
             margin: 100px auto;
             padding: 30px 20px;
             background: #ffffff;
             border: 2px solid #ff9900;
             border-radius: 5% 5% / 5% 5%;
         }
         /*등록요청 팝업창이 띄워지면 어두워지는 뒷 배경*/
         #popup1 .popup_layer {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             background: rgba(0, 0, 0, 0.5);
             z-index: -1;
          }

		/*삭제요청 팝업창 위치, 범위 설정*/
        #popup2 {
            vertical-align: middle;
            display: none;
            position: relative;
            width: 100%;
            height: 100%;
            z-index: 1;
            margin-top: 80%;
        }
        /*삭제요청 팝업창 크기 밑 색상, 테두리 깍기*/
        #popup2 .popup_content {
             width: 60%;
             margin: 100px auto;
             padding: 30px 20px;
             background: #ffffff;
             border: 2px solid #ff9900;
             border-radius: 5% 5% / 5% 5%;
         }
         /*삭제요청 팝업창이 띄워지면 어두워지는 뒷 배경*/
         #popup2 .popup_layer {
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
		
			<!-- 선택된 식당 명 위치 및 크기 설정 -->
			<div style="position:absolute; left:36.5%; top:22%; font-size:33pt;">
				식당 승인 요청
			</div>

			<!-- 밑줄 위치 설정 -->
			<hr style="left:0%; top:34%;">
		
			<!-- 식당 등록 / 추가 요청 문구 위치 및 크기 설정 -->
			<div style="position:absolute; left:5.5%; top:37%; font-size:28pt;">
				식당 등록 / 추가 요청
			</div>

			<!-- 밑줄 위치 설정 -->
			<hr style="left:0%; top:41.5%;">
		
			<!-- 식당 등록 / 추가 요청한 목록 테이블 위치 및 크기, 선 설정 --> 
			<table class="search_table" style="position:absolute; left:0%; top:43%; width:100%; height:auto; border-bottom:none;">
            <tr>
                <td class="search">한마음 돈까스 등록 요청<input type = "button" value="등록완료" style="position:absolute;left:80%; top:30%; width:15%; height:40%; border:1px solid #ff9900; font-size:20pt; background-color:white; color:#ff9900;"></td>
            </tr>
            <tr>
                <td class="search">여름 식당 추가 요청<input type ="button" id="popup_plusbtn" value="등록요청" style="position:absolute;left:80%; top:30%; width:15%; height:40%; background-color:#ff9900; font-size: 20pt;  color:white;"></td>
            </tr>
        </table>


			<!-- 밑줄 위치 설정 -->
			<hr style="left:0%; top:65%;">
		
			<!-- 식당 삭제 요청 텍스트 위치 및 크기 설정 -->
			<div style="position:absolute; left:5.5%; top:67.5%; font-size:28pt;">
				식당 삭제 요청
			</div>

			<!-- 밑줄 위치 설정 -->
			<hr style="left:0%; top:72%;">
		
			<!-- 식당 삭제 요청한 목록 테이블--> 
			<table class="search_table" style="position:absolute; left:0%; top:73.5%; width:100%; height:auto; border-bottom:none;">
            <tr>
                <td class="search">한마음 돈까스 삭제 요청<input type = "button" id="popup_deletbtn" value="삭제요청" style="position:absolute;left:80%; top:30%; width:15%; height:40%; font-size: 20pt; background-color:#ff9900; color:white;"></td>
            </tr>
        </table>

		<!--팝업창내용-->
			<div id="popup1">
			<div class="popup_content" style="text-align:center; color:#ff9900;">
				<p style="font-size:20pt;">등록요청 되었습니다.</p><br><br>
				<button type="button" id="popup_closebtn1" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
			</div>
			<div class="popup_layer"></div>
			</div>

			<div id="popup2">
			<div class="popup_content" style="text-align:center; color:#ff9900;">
				<p style="font-size:20pt;">삭제요청 되었습니다.</p><br><br>
				<button type="button" id="popup_closebtn2" style="font-size:24pt; background-color:ff9900; color:#ffffff; width:20%; height:3%;">확인</button>
			</div>
			<div class="popup_layer"></div>
			</div>

		<script>
			/*등록요청 팝업*/
			document.getElementById("popup_plusbtn").onclick = function () { document.getElementById("popup1").style.display = "block"; }

			/*삭제요청 팝업*/
			document.getElementById("popup_deletbtn").onclick = function () { document.getElementById("popup2").style.display = "block"; }

			/*팝업창 확인 버튼 누를 시 팝업 종료*/
			document.getElementById("popup_closebtn1").onclick = function () { document.getElementById("popup1").style.display = "none"; }
			document.getElementById("popup_closebtn2").onclick = function () { document.getElementById("popup2").style.display = "none"; }
			</script>
			
	</body>
</html>