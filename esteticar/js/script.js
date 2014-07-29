Cufon.replace('h1, h2, h3', { hover: true });
$(function() {

  $('#coin-slider').coinslider({width:960,height:384,opacity:1});
  
		$('.asisco img').mouseover(function() { 
			$(this).html('<img width="20" height="21" src="images/img/asisco.png">');
		}).mouseout(function(){ 
			$(this).html('<img width="20" height="21" src="images/img/asisco_.png">');
		});  

});	