<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>1С:Предприятие</title>
<link href="favicon.ico" rel="shortcut icon">
<script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
<link rel='stylesheet prefetch' href='http://cdn.foundation5.zurb.com/foundation.css'>

<style>
body{
	padding:0;
	margin:0;
	background:#ffffff;
	color:#000;
	font-family: "PT Sans Narrow",sans-serif;
	font-size: 18px;
	font-style: normal;
	line-height:150%;}

.div {
    height: 2px;
    left: 50%;
    position: absolute;
    text-align: left;
    top: 50%;
    vertical-align: top;
    width: 2px;
}
.splash {
    border: 3px solid #b3b3b3;
    height: 320px;
    left: -303px;
    overflow: hidden;
    position: absolute;
    top: -203px;
    width: 600px;
    }
.splashInterp {
	background-image: url("images/splashBottom.png");
    background-position: 0 0;
    background-repeat: no-repeat;
    height: 65px;
    left: 0;
    position: absolute;
    top: 255px;
    width: 600px;
}
.splashArea {
	background-image: url("images/splashTop.png");
    background-color: #fff;
    background-position: 0 0;
    background-repeat: no-repeat;
    height: 255px;
    left: 0;
    overflow: hidden;
    position: absolute;
    top: 0;
    width: 600px;
}    
.reveal-modal{
	height: 255px;
	width: 600px;
	color:#000;
	font-family:Arial;
	font-size:14px;
	line-height:150%;
	background: rgba(255, 255, 255, .50);
}
.reveal-modal-bg{
	background: rgba(255, 255, 255, 0.45) none repeat scroll 0 0 !important;
}
h2{
	color: #e50014;
	font-family: "PT Sans",sans-serif;
	font-size: 24px;
}
</style>
</head>
<body>
<div class="div">
<div class="splash">
<div class="splashInterp"></div>
<div class="splashArea">

 <div id="myModal" class="reveal-modal" data-reveal>
  <h2>Доступ ограничен.</h2>
  <p >Вход в систему для контрагентов возможен</br> в период проведения бюджетной компании.</p>
  <a class="close-reveal-modal">&#215;</a>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://cdn.foundation5.zurb.com/foundation.js'></script>

        <script src="js/index.js"></script>

</div>

</div></div>

</body>
</html>