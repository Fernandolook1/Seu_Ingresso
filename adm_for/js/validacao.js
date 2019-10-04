$(document).ready(function()
{		
	$(".recebeDados").hide();	
	$("#myForm1").ajaxForm	
	({		
		target: '.recebeDados',
		success: function(retorno)
		{
			$(".recebeDados").html(retorno);
			$(".recebeDados").show();
			$("#myForm1").resetForm();
			
		}		
	});

	$("input").blur(function()
	{
		if($(this).val() == "")
		{
			 $(this).css({"border-color" : "#F00", "padding": "2px"});
		}
	});
	
});	