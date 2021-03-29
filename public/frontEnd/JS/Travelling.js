$(document).ready(function(){
	$('.carousel').carousel({
		interval:6000
	});
})

$(document).ready(function(){
	$("#content1").click(function(){
  	$("#text01").fadeIn(500);
	});

	$("#content2").click(function(){
  	$("#text02").toggle(500);
	});

	$("#content3").click(function(){
  	$("#text03").toggle(500);
	});

	$("#content4").click(function(){
  	$("#text04").toggle(500);
	});
});
/*start counter*/

/*end counter*/