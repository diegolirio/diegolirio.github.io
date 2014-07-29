/* dCodes Framework: (c) TemplateAccess */

$(document).ready(function () {
	$(".dc_content_tooltip").hover(function () {
		tip = $(this).find('.dc_content_tooltip_container');
		tip.show();
	}, function () {
		tip.hide();
	}).mousemove(function (e) {
		var mousex = e.pageX + 20;
		var mousey = e.pageY + 20;
		var tipWidth = tip.width();
		var tipHeight = tip.height();
		var tipVisX = $(window).width() - (mousex + tipWidth);
		var tipVisY = $(window).height() - (mousey + tipHeight);
		if (tipVisX < 20) {
			mousex = e.pageX - tipWidth - 20;
		}
		if (tipVisY < 20) {
			mousey = e.pageY - tipHeight - 20;
		}
		tip.css({
			top: mousey,
			left: mousex
		});
	});
});