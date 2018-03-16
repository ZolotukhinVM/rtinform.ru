$(function(){

	$('.vacancy_list header').click(function(){

		$(this).toggleClass('active');
		$(this).next('section').slideToggle();
	});
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
    var parametrs = {
        beforeSubmit:  showRequest,
        success:       showResponse,
        dataType:'json'
    };
    $('.vacancy_list form').ajaxForm(parametrs);
})
