function copyText(text)
{
		var $temp = $("<textarea>");
		$("body").append($temp);
		$temp.val(text).select();
		document.execCommand("copy");
		$temp.remove();
}
$(document).ready(function ($) {
	$('body').delegate('.btn-copy', 'click', function(event) {

		let btn = $(this);
		
		btn.html(`<i class="far fa-clipboard"></i> Copied!!! `);
		btn.prop("disabled", true);
		let value = btn.attr("target");

		copyText($(value).html());
		setTimeout(function() {
			btn.prop("disabled", false);
			btn.html(`<i class="far fa-clipboard"></i> Copy`);
		}, 1500);
	})
});