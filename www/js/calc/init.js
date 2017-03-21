$(function() {
	$('#calc_i_sb').click(function(e) {
		e.preventDefault();
	    var height = getVal('#calc-height'),
	    	perimeter = getVal('#calc-perimeter'),
	    	doorsQuantity = getVal('#calc-doorsQuantity'),
	    	doorWidth = getVal('#calc-doorWidth'),
	    	doorHeight = getVal('#calc-doorHeight'),
	    	windowsQuantity = getVal('#calc-windowsQuantity'),
	    	windowWidth = getVal('#calc-windowWidth'),
	    	windowHeight = getVal('#calc-windowHeight'),
	    	brickworkWidth = getVal('#calc-brickworkWidth'),
	    	seamWidth = getVal('#calc-seamWidth'), 
	    	brick = $('#calc-brick').val().split('/'),
	    	P1 = parseFloat(brick[0]) / 1000,
	    	P2 = parseFloat(brick[1]) / 1000,
	    	P3 = parseFloat(brick[2]) / 1000,
			brickVolume = ( P1 + seamWidth ) * ( P2 + seamWidth ) * P3,
	    	quantityBricks = Math.round(((perimeter * height - doorWidth * doorsQuantity * doorHeight - windowsQuantity * windowWidth * windowHeight) * brickworkWidth ) / brickVolume );
	    
	    if(isNaN(quantityBricks) || quantityBricks <= 0) {
	    	$('#calc_i_output').html('<b>Посчитать расчетное количество материала не удалось.</b>'); 
	    } else {
	    	$('#calc_i_output').html('<b>' + quantityBricks +'</b> штук.'); 
	    }
	});
	$('#calc').change(function() {
		$('#calc_i_output').html('<b>Для расчета, заполните поля.</b>'); 
	});
	$('#calc-brick').change(function() {
		var index = $('#calc-brick')[0].selectedIndex;
			photo = $('#calc-brick option').eq(index).data('photo');
		$('#calc_brick-photo').css('backgroundImage', 'url(/'+ photo +')');
	});
	$('#calc-brick').change();
	function getVal(id) {
		return parseFloat($(id).val().replace(',','.'));
	}
	$('#calc').dialog({
		width: 'auto',
		height: 'auto',
		resizable: false,
		draggable: false,
		title: 'Калькулятор расчета количества блоков'
	});

	$('#calc').dialog('close');

	$('#calc-open').click(function(e) {
		e.preventDefault();
		$('#calc').dialog('open');
	});
});