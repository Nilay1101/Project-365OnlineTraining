$(document).ready(function(){
	$('.tabs-title').click(function(){
		var index = $(this).index();
		$('.tabs-title').removeClass('tabs-title-active');
		$(this).addClass('tabs-title-active');
		$('.category-group-info').hide();
		$('.category-group-info').eq(index).show();
	});

	$('.slide.fdi-Carousel').carousel();

	$('#myCarousel2.fdi-Carousel[data-type="multi"] .item').each(function(){
			
	  var next = $(this).next();
	  if (!next.length) {
	    next = $(this).siblings(':first');
	  }
	  next.children(':first-child').clone().appendTo($(this));
	  
	  for (var i=0;i<2;i++) {
	    next=next.next();
	    if (!next.length) {
	    	next = $(this).siblings(':first');
	  	}
	    
	    next.children(':first-child').clone().appendTo($(this));
	  }
	});

	// $("#myCarousel2").swiperight(function() {  
 //    		$(this).carousel('prev');  
	//     });  
	// 	$("#myCarousel2").swipeleft(function() {  
	//     	$(this).carousel('next');  
	//    }); 
});