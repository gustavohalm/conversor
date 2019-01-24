
<!DOCTYPE html>
<html>
<head>
<title>Aplicação de Conversão</title>
<link rel="icon" type="image/png" href="images/logo.png" />

<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<style>
body{
	background-color:#C9D4FD;
	  overflow-x: hidden;

}
.formulario{
	-webkit-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 18px 1px rgba(0,0,0,0.75);
 height: 735px;
  margin-top: 45px;

 border-top: #333 solid  8px;
  border-bottom: #333 solid  6px;

 width: 80%;
 background-color: white;
}
.sends{
	width: 320px;
	height:45px;
	margin-left: 2%;
}
.btn{
	width: 235px;
	height: 55px;
	color: white;
	border:none;
	font-size: 30px;
	background-color: #333333;
}
h1{
	color:#333333;
	font-family:'Roboto', sans-serif;
	font-size:30px;
}
#titulo{
	color:#E6E6FA;
	margin-top: -30px
}
.cima{
	width:105%;
	margin-left: -3%;
	height:10vh;
	margin-top: -9px;
	  position: fixed;
  top: 0;
  left: 0;
	-webkit-box-shadow: 0px 6px 14px -6px rgba(0,0,0,0.75);
	-moz-box-shadow: 0px 6px 14px -6px rgba(0,0,0,0.75);
	box-shadow: 0px 6px 14px -6px rgba(0,0,0,0.75);
	background-color: #333333;
}
.as{
	color:#aaa;
	font-family: 'Roboto', sans-serif;
	font-weight: bold;
	font-size: 28px;
    text-decoration: none;
}
.as:hover{
	color:#E6E6FA;
	font-size: 30px;

}
.ases{
	margin-left: 85% !important;
	margin-top: -60px;
	
}
</style>
</head>
<body>
	<div class='cima'>
		<center>
			<h1 id='titulo'>Converter caracteres em numéricos</h1>
		</center>
	<div class='ases'>
		<a href="#top" class='as' style="margin-right: 10px;">NFe</a>
		<a href="#cfe" class='as'>CFe</a>
	</div>
	</div>

<center>
<br><br><br>

<div class='formulario' id="nfe">
<h1>Upar arquivo Xml(<span style="font-weight:bold; font-size:32px;">NF-e</span>) </h1> 
<form  action="web.php" method='POST' enctype="multipart/form-data">
	<input type='file' name='upl1' multiple class='sends'>
	<input type='file' name='upl2' multiple class='sends'>
	<input type='file' name='upl3' multiple class='sends'>
	<br>
	<input type='file' name='upl4' multiple class='sends'>
	<input type='file' name='upl5' multiple class='sends'>
	<input type='file' name='upl6' multiple class='sends'>
	<br>
	<input type='file' name='upl7' multiple class='sends'>
	<input type='file' name='upl8' multiple class='sends'>
	<input type='file' name='upl9' multiple class='sends'>
	<br>
	<input type='file' name='upl10' multiple class='sends'>
	<input type='file' name='upl11' multiple class='sends'>
	<input type='file' name='upl12' multiple class='sends'>
	<br>
	<input type='file' name='upl13' multiple class='sends'>
	<input type='file' name='upl14' multiple class='sends'>
	<input type='file' name='upl15' multiple class='sends'>
	<br>
	<input type='file' name='upl16' multiple class='sends'>
	<input type='file' name='upl17' multiple class='sends'>
	<input type='file' name='upl18' multiple class='sends'>
	<br>
	<input type='file' name='upl19' multiple class='sends'>
	<input type='file' name='upl20' multiple class='sends'>
	<input type='file' name='upl21' multiple class='sends'>
	<br>
	<input type='file' name='upl22' multiple class='sends'>
	<input type='file' name='upl23' multiple class='sends'>
	<input type='file' name='upl24' multiple class='sends'>
	<br>
	<input type='file' name='upl25' multiple class='sends'>
	<input type='file' name='upl26' multiple class='sends'>
	<input type='file' name='upl27' multiple class='sends'>
	<br>
	<input type='file' name='upl28' multiple class='sends'>
	<input type='file' name='upl29' multiple class='sends'>
	<input type='file' name='upl30' multiple class='sends'>
	<br>
	<input type='file' name='upl31' multiple class='sends'>
	<input type='file' name='upl32' multiple class='sends'>
	<input type='file' name='upl33' multiple class='sends'>
	<br>
	<input type='file' name='upl34' multiple class='sends'>
	<input type='file' name='upl35' multiple class='sends'>
	<input type='file' name='upl36' multiple class='sends'>
	<br>
	<input type='file' name='upl37' multiple class='sends'>
	<input type='file' name='upl38' multiple class='sends'>
	<input type='file' name='upl39' multiple class='sends'>
	<br>
	<input type='file' name='upl40' multiple class='sends'>
	<input type='file' name='upl41' multiple class='sends'>
	<input type='file' name='upl42' multiple class='sends'>
	<br>
	<input type='file' name='upl43' multiple class='sends'>
	<input type='file' name='upl44' multiple class='sends'>
	<input type='file' name='upl45' multiple class='sends'>
	<br>
	<input type="submit" name="send_nfe" value="Alterar" class='btn'>
</form>
</div>
<br><br><br><br><br><br>

<div class='formulario' id="cfe">
<h1>Upar arquivo Xml(<span style="font-weight:bold; font-size:32px;">CF-e</span>)</h1>
<form  action="web.php" method='POST' enctype="multipart/form-data">
	<input type='file' name='up1' multiple class='sends'>
	<input type='file' name='up2' multiple class='sends'>
	<input type='file' name='up3' multiple class='sends'>
	<br>
	<input type='file' name='up4' multiple class='sends'>
	<input type='file' name='up5' multiple class='sends'>
	<input type='file' name='up6' multiple class='sends'>
	<br>
	<input type='file' name='up7' multiple class='sends'>
	<input type='file' name='up8' multiple class='sends'>
	<input type='file' name='up9' multiple class='sends'>
	<br>
	<input type='file' name='up10' multiple class='sends'>
	<input type='file' name='up11' multiple class='sends'>
	<input type='file' name='up12' multiple class='sends'>
	<br>
	<input type='file' name='up13' multiple class='sends'>
	<input type='file' name='up14' multiple class='sends'>
	<input type='file' name='up15' multiple class='sends'>
	<br>
	<input type='file' name='up16' multiple class='sends'>
	<input type='file' name='up17' multiple class='sends'>
	<input type='file' name='up18' multiple class='sends'>
	<br>
	<input type='file' name='up19' multiple class='sends'>
	<input type='file' name='up20' multiple class='sends'>
	<input type='file' name='up21' multiple class='sends'>
	<br>
	<input type='file' name='up22' multiple class='sends'>
	<input type='file' name='up23' multiple class='sends'>
	<input type='file' name='up24' multiple class='sends'>
	<br>
	<input type='file' name='up25' multiple class='sends'>
	<input type='file' name='up26' multiple class='sends'>
	<input type='file' name='up27' multiple class='sends'>
	<br>
	<input type='file' name='up28' multiple class='sends'>
	<input type='file' name='up29' multiple class='sends'>
	<input type='file' name='up30' multiple class='sends'>
	<br>
	<input type='file' name='up31' multiple class='sends'>
	<input type='file' name='up32' multiple class='sends'>
	<input type='file' name='up33' multiple class='sends'>
	<br>
	<input type='file' name='up34' multiple class='sends'>
	<input type='file' name='up35' multiple class='sends'>
	<input type='file' name='up36' multiple class='sends'>
	<br>
	<input type='file' name='up37' multiple class='sends'>
	<input type='file' name='up38' multiple class='sends'>
	<input type='file' name='up39' multiple class='sends'>
	<br>
	<input type='file' name='up40' multiple class='sends'>
	<input type='file' name='up41' multiple class='sends'>
	<input type='file' name='up42' multiple class='sends'>
	<br>
	<input type='file' name='up43' multiple class='sends'>
	<input type='file' name='up44' multiple class='sends'>
	<input type='file' name='up45' multiple class='sends'>
	<br>
	<input type="submit" name="send_cfe" value="Alterar" class='btn'>
</form>
</div>
<br><br>
<center>
</body>
</html>