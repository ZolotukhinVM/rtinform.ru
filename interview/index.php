<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Опрос");
?>
<style>
	table.interview td {margin: 10px;padding: 10px;}
	a.disabled {pointer-events: none;cursor: default;color: #999;}	

table {border: 1px solid #69c;}
th {
  font-weight: normal;
  color: #333;
  border-bottom: 1px dashed #69c;
  padding: 12px 17px;
}
td {
  color: #555;
  padding: 7px 17px;
}
tr:hover td {background: #F8F8F8;}


</style>
<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery.bootstrap.wizard.min.js"></script>
<h3>Тестовый опрос</h3>
<div id="rootwizard">
	<div class="navbar">
	  <div class="navbar-inner">
	    <div class="container">
	<ul>
		<li><a href="#tab1" data-toggle="tab" class="disabled">1 шаг</a></li>
		<li><a href="#tab2" data-toggle="tab" class="disabled">2 шаг</a></li>
		<li><a href="#tab3" data-toggle="tab" class="disabled">3 шаг</a></li>
		<li><a href="#tab4" data-toggle="tab" class="disabled">4 шаг</a></li>
		<li><a href="#tab5" data-toggle="tab" class="disabled">5 шаг</a></li>
		<li><a href="#tab6" data-toggle="tab" class="disabled">6 шаг</a></li>
		<li><a href="#tab7" data-toggle="tab" class="disabled">7 шаг</a></li>
		<li><a href="#tab8" data-toggle="tab" class="disabled">8 шаг</a></li>
		<li><a href="#tab9" data-toggle="tab" class="disabled">9 шаг</a></li>
		<li><a href="#tab10" data-toggle="tab" class="disabled">10 шаг</a></li>
	</ul>
	 </div>
	  </div>
	</div>		
	<div id="bar" class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
    </div>
    <form action="" id="rt-form" method="POST">
	<div class="tab-content">
	    <div class="tab-pane" id="tab1">
	      <table class="interview">
	      	<tr>
	      		<th><strong>Личная вовлеченность</strong></th>
	      		<th>Полностью не согласен</th>
	      		<th>Не согласен</th>
	      		<th>Скорее не согласен</th>
	      		<th>Скорее согласен</th>
	      		<th>Согласен</th>
	      		<th>Полностью согласен</th>
	      	</tr>
	      	<tr>
	      		<td>Я горжусь работой в нашей компании.</td>
	      		<td><input type="radio" name="q1" value="1"></td>
	      		<td><input type="radio" name="q1" value="2"></td>
	      		<td><input type="radio" name="q1" value="3"></td>
	      		<td><input type="radio" name="q1" value="4"></td>
	      		<td><input type="radio" name="q1" value="5"></td>
	      		<td><input type="radio" name="q1" value="6"></td>
	      	</tr>
	      </table>
	    </div>
	    <div class="tab-pane" id="tab2">
	      	<p>
		      	<input type='text' name='name' id='name' placeholder='Текстовое поле'>
		      </p>
	    </div>
		<div class="tab-pane" id="tab3">
			3
	    </div>
		<div class="tab-pane" id="tab4">
			4
	    </div>
		<div class="tab-pane" id="tab5">
			5
	    </div>
		<div class="tab-pane" id="tab6">
			6
	    </div>
		<div class="tab-pane" id="tab7">
			7
	    </div>
		<div class="tab-pane" id="tab8">
			8
	    </div>	    
		<div class="tab-pane" id="tab9">
			9
	    </div>	    
		<div class="tab-pane" id="tab10">
			Спасибо за уделеное время и прохождение опроса!
			<br>
			<span id="result"></span>
	    </div>
		<ul class="pager wizard">
			<li class="previous first" style="display:none;"><a href="#">First</a></li>
			<li class="previous"><a href="#">Предыдущий шаг</a></li>
			<li class="next last" style="display:none;"><a href="#">Last</a></li>
		  	<li class="next"><a href="#" class="linkNextStep">Следующий шаг</a></li>
		</ul>
	</div>
	</form>
</div>
<script>
	$(document).ready(function() {
	  	$('#rootwizard').bootstrapWizard({onNext: function(tab, navigation, index) {
				
				if(index==8) {
					$(".linkNextStep").text("Сохранить результаты и завершить опрос");
					console.log("step 8");
				}
				
				if(index==9) {
					$(".pager").css({display:"none"});
					var data = $("#rt-form").serialize();
					
					$.ajax({
						url: "ajax.php",
						method: "GET",
						data: data
					})

				}
				
				
	 
			}, onTabShow: function(tab, navigation, index) {
				var $total = navigation.find('li').length;
				var $current = index+1;
				var $percent = ($current/$total) * 100;
				$('#rootwizard .progress-bar').css({width:$percent+'%'});
			}});
	});	
</script>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>