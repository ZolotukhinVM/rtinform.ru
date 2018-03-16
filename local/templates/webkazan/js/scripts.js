$(function(){

    $('#da-slider').cslider();
	SetCaptcha();
	$('body').parallax({

		'elements': [
			{
				'selector': 'div.wk_paralax_one',
				'properties': {
					'x': {
						'background-position-x': {
							'initial': 50,
							'multiplier': -0.03,
						}
					},
					'y': {
						'background-position-y': {
							'initial': 0,
							'multiplier': -0.05
						}
					}
				}
			},
			{
				'selector': 'div.wk_paralax_two',
				'properties': {
					'x': {
						'background-position-x': {
							'initial': 0,
							'multiplier': 0.07
						}
					},
					'y': {
						'background-position-y': {
							'initial': 0,
							'multiplier': -0.02
						}
					}
				}
			},
			{
				'selector': 'div.wk_paralax_three',
				'properties': {
					'x': {
						'background-position-x': {
							'initial': 0,
							'multiplier': -0.03
						}
					},
					'y': {
						'background-position-y': {
							'initial': 0,
							'multiplier': 0.04
						}
					}
				}
			}
		]
	});
    $('.zoomIt').fancybox({
        padding: 10
    });
    $('#zakazatzvonok').click(function(e){
        e.preventDefault();
        $(".ng_button_order").click();
    });
    $(".ng_button_order").click(function(e){
        e.preventDefault();
        $.fancybox.open({
            href: "#ring_form",
            afterLoad: function(current, previous) {
                var options = {
                    beforeSubmit:  showRequest,
                    success:       showResponse,
                    dataType:'json'
                };
                $('#ringForm').ajaxForm(options);
            }
        });
    });
    $(".ng_button_question").click(function(e){
        e.preventDefault();
        $.fancybox.open({
            href: "#question_form",
            afterLoad: function(current, previous) {
                var options = {
                    beforeSubmit:  showRequest,
                    success:       showResponse,
                    dataType:'json'
                };
                $('#questionForm').ajaxForm(options);
            }
        });
    });
});

function showRequest(formData, jqForm, options) {
    jqForm.find('img').show();
    return true;
}

function showResponse(responseText, statusText, xhr, $form)  {
    $form.find('img[class!="captcha-img"]').hide();
    if (responseText.STATUS=='ok') {
        $form.resetForm();
		$.fancybox.close();
    }
	SetCaptcha();
    alert(responseText.MESSAGE);
}
function SetCaptcha(){
	if($(".captcha-block").size()>0){
		$.ajax({
			url:"/local/templates/webkazan/action/captcha.php",
			success:function(code){
				$(".captcha-block").each(function(i){
					$(this).find("img").attr("src","/bitrix/tools/captcha.php?captcha_sid="+code);
					$("input[name='captcha_sid']").val(code);
				});
			}
		});
	}
}