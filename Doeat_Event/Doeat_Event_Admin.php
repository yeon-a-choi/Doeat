<html>
	<head>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            border: none;
            font-family: �����ٸ����;
        }
        /*��ü �ʱ�ȭ*/
        body {
            width: 100%;
            height: 100%;
        }
        /*body �ʱ�ȭ*/
        img {
            width: 100%;
            height: 100%;
        }
        /*�̹��� �ʱ�ȭ (�ٲٰų� ������ ��� �޴� ���̾ƿ� ������)*/
        table {
            table-layout: fixed;
        }
        /*��� �޴� ũ�� ����*/
        a {
            text-decoration: none;
            color: #2a2a2a;
        }
        /*a�±� ����*/
        table.downmenu {
            position: fixed;
            width: 100%;
        }
        /*�̺�Ʈ ���� ��ġ*/
        td.favorite {
            border-top: 1px solid #222222;
            position: relative;
            font-size: 28pt;
            padding: 5%;
            height: 50%;
        }
        /*�̺�Ʈ ���� ���̺� ����*/
        p.date{
            position:absolute;
            font-size:12pt;
        }
        /*�̺�Ʈ ���� ǥ��*/
        #sub {
            font-size: 28pt;
            background-color: #ff9900;
            color: #ffffff;
        }
        /*�۾��� ��ư ����*/
    </style>
</head>
<body style="overflow:auto;">
    <ul>
        <li>
            <a href="../Doeat_Main/Doeat_Main.php"><img src="home.png" style="position:absolute ; left:7.5%; top:5.3125%; width:10%; height:6.25%;"></a>
        </li>
        <li>
            <a href="#"><img src="mypage.png" style="position:absolute ; left:83.33333333333%; top:5.3125%; width:10.83333333333%; height:6.25%;"></a>
        </li>
        <li>
            <img src="logo.png" style="position:absolute ; left:30.2%; top:5.3125%; width:42.22222222222%; height:6.5625%;">
        </li>
        <table style="font-size:24pt;position:absolute; left:0%; top:18.125%; width:100%; height:2.5%;">
            <tr align="center">
                <!--��ܸ޴�-->
                <td><a href="../Doeat_Restaurant/Doeat_Restaurant.php">�Ĵ�</a></td>
                <td><a href="../Doeat_Target_Chuchun/Doeat_Target_Chuchun.php">��� ��õ</a></td>
                <td><a href="../Doeat_Random/Doeat_Random.php">���� ��õ</a></td>
                <td style="border-bottom:3px solid #ff9900"><a href="#">�̺�Ʈ</a></td>
            </tr>
        </table>
        <!--�̺�Ʈ ���-->
        <table class="downmenu" style="position:absolute; left:0%; top:34%; width:100%; height:auto;">
           <tr>
             <td class="favorite"><a href="./Doeat_EventInfo_Admin.php">
                <?
            		$connect=mysql_connect('220.69.241.86','cejin','cejin');
								mysql_select_db('doeat', $connect);
								
								$sql = "select * from event";
								$result=mysql_query($sql, $connect);
								$count=mysql_num_fields($result);
								while($rows=mysql_fetch_row($result))
								{
									echo "$rows[3]";
								}
           		  ?>
           		  &nbsp;<p class="date">
           		  <?
           		  $connect=mysql_connect('220.69.241.86','cejin','cejin');
           		  mysql_select_db('doeat', $connect);
           		  
           		  $sql="select * from event";
           		  $result=mysql_query($sql, $connect);
           		  $count=mysql_num_fields($result);
           		 while($rows=mysql_fetch_row($result))
									{
									echo "<tr>";
									echo "<td>$rows[5]</td>";
									echo "</tr>";
									}
								?>
								</p></a>
            </td>
            </tr>
            <tr>
                <td class="favorite"><a href="#">�ȵ� ö�� �̺�Ʈ!&nbsp;<p class="date">2019.10.03</p></a></td>
</tr>
            <tr>
                <td class="favorite"><a href="#">���� �н� ����� 100% ���� �̺�Ʈ&nbsp;<p class="date">2019.10.01</p></a></td>
</tr>
            <tr>
                <td class="favorite"><a href="#">�Ѹ��� ��� �Ÿ޴� ���&nbsp;<p class="date">2019.10.01</p></a></td>
</tr>
        </table>
        <form><!--�۾��� ��ư-->
            <input type="button" id="sub" value="�۾���" onClick="location.href='zDoeat_EventWrite_Admin.php'" style="position:fixed;left:87%;top:70%;width:12%;height:4.21%;">
        </form>
    </ul>

</body>
</html>

