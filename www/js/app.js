'use strict';

$('#change-data').click(function() {
	$ajaxAddData = $.ajax({
		url: '/cabinet/change_additional_data',
		type: 'POST',
		dataType: 'JSON',
		data: getAdditionalData(),
	});
	$ajaxAddData.success(function() {
		alert('Данные успешно отредактированы');
	});
	$ajaxAddData.error(function() {
		alert('Ошибка');
	});
});


function getAdditionalData() {

	var additionalData = {
		'paid': $('#paid').val(),
		'blocks_shipped': $('#blocks_shipped').val(),
		'blocks_left': $('#blocks_left').val(),
		'pallets_shipped': $('#pallets_shipped').val(),
		'pallets_left': $('#pallets_left').val(),
		'task_id': $('#task_id').val()
	}

	return additionalData;
}

var indBtn = $('#individual-btn'),
	orgBtn = $('#organization-btn'),
	indForm = $('#individual-form'),
	orgForm = $('#organization-form');


if ( indBtn.is(':checked') ) {
	indForm.removeClass('hidden-form');
} else if ( orgBtn.is(':checked') ) {
	orgForm.removeClass('hidden-form');
}

indBtn.click(function(){
	if ( indForm.hasClass('hidden-form') ) {
		indForm.removeClass('hidden-form');
		orgForm.addClass('hidden-form');
	}
});
orgBtn.click(function(){
	if ( orgForm.hasClass('hidden-form') ) {
		indForm.addClass('hidden-form');
		orgForm.removeClass('hidden-form');
	}
});