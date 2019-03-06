jQuery('document').ready(function(){
	
	$('#y_value').blur(function(){
		var strValue = $('#y_value').val();
		var value = parseInt(strValue);
		if (value < -3 || value > 3 || isNaN(value) || value.toString() != strValue) {
			document.getElementById("y_value").style.borderColor = "red";
		}
		else document.getElementById("y_value").style.borderColor = "lime";
	});

	$('input:button').click(function(){
		if ($('input:button').this.attr('name') == 'Y_VVOD')
		if ($('input:button').not(this).prop('disabled') == true) {
			$('input:button').not(this).prop('disabled', false);
		}
		else $('input:button').not(this).prop('disabled', true);
		document.getElementsByName("hidden_field")[0].value = this.value;
	});

	$('input:button').click(function(){
		if ($('input:button').not(this).prop('disabled') == true) {
			$('input:button').not(this).prop('disabled', false);
		}
		else $('input:button').not(this).prop('disabled', true);
		document.getElementsByName("hidden_field")[0].value = this.value;
	});	

	document.getElementById("XYR_input").onsubmit = function() {
		if (document.getElementById("y_value").style.borderColor != "lime"){
			alert("Input correct Y please!");
			return false;
		}
		else if ($("[name=X]:checked").length == 0) {
			alert("Choose X please!");
			return false;
		}
		//else if ($("[name=R]:disabled").length == 0) {
		//	alert("Choose R please!");
		//	return false;	
		}
		else return true;
	}
});