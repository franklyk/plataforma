$(document).ready(function(){
	//Abrir Modal Upload
	$(".modalUploadPend").click(function(){
		$(".modal").show();
		$(".modal").css("display", "flex");
	});

	//Fechar Aba
	$(".close_modal").click(function(){
		$(".modal").hide();
		$(".modal").css("display", "none");
	});
	
	$(".close_modal_dialog").click(function(){
		$(".modal-dialog").hide();
		$(".modal-dialog").css("display", "none");
	});

	//Abrir Modal Buy
	$(".open_buy").click(function(e){
		e.preventDefault();
		$(".open_modal").show();
		$(".open_modal").css("display", "flex");

		var attr = $(this).attr('data-id');
	});

	$(".modal-close").click(function(e){
		e.preventDefault();
		$(".open_modal").hide();
		$(".open_modal").css("display", "none");
	});

	//Abrir Modal Address
	$(".modal_address").click(function(e){
		e.preventDefault();
		$(".address_modal").show();
		$(".address_modal").css("display", "flex");

		var attr = $(this).attr('data-id');
	});

	$(".modal-close").click(function(e){
		e.preventDefault();
		$(".address_modal").hide();
		$(".address_modal").css("display", "none");
	});

	//Abrir Modal Payment
	$(".modal_payment").click(function(e){
		e.preventDefault();
		$(".paymentDiv").show();
		$(".paymentDiv").css("display", "flex");

		var id = $(this).attr('data-id');
		var pay = $(this).attr('data-pay');
		var img = $(this).attr('data-img');

		$('#input_id').val(id);
		$('#input_pay').val(pay);
		$(".imgResult").attr('src', img);
	});

	$(".modal-close").click(function(e){
		e.preventDefault();
		$(".paymentDiv").fadeOut();
		$(".paymentDiv").css("display", "none !important");
	});

	//Mudança Dinâmica de Imagens do Produto - Página details.php
	$(".img_miniatures").click(function(e){
		e.preventDefault();
		var miniatures = $(this).attr('src');
		$('.img_big').attr('src', miniatures);
	});
});