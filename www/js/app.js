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