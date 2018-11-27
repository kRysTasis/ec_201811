// JavaScript Document


$(function(){
	"use strict";

	// $(".button").click(function(){
	// 	$("ul").slideToggle(1000);
	// });
	// $(".button").click(function(){
	// 	$(this).fadeToggle();
	// });

	$(".humberger").click(function() {
		$("#hum-hide").fadeIn();
		$("#hum-hide").animate({
			width: "200px"
		}, {
			duration: "swing",
			queue: false,
		});
		$("#hum-hide").find('li').fadeIn(600);

		$(this).toggleClass('active');
		if ($(this).hasClass('active')) {
			$('.humberger').css({
				'transform': 'rotate(360deg)'
			});
			$('.humberger span:nth-of-type(1)').css({
				'transform': 'translateY(10px) rotate(-45deg)'
			});
			$('.humberger span:nth-of-type(2)').css({
				'transform': 'translateY(0px) rotate(45deg)'
			});
			$('.humberger span:nth-of-type(3)').css({
				'opacity': '0'
			});

		} else {
			$("#hum-hide").animate({
				width: 0
			}, {
				duration: 500,
				queue: false,
			});
			$("#hum-hide").find('li').fadeOut(400);

			$('.humberger').css({
				'transform': 'rotate(-360deg)'
			});
			$('.humberger span:nth-of-type(1)').css({
				'transform': 'translateY(0px) rotate(0deg)'
			});
			$('.humberger span:nth-of-type(2)').css({
				'transform': 'translateY(0px) rotate(0deg)'
			});
			$('.humberger span:nth-of-type(3)').css({
				'opacity': '1'
			});
		}
	});


	var form = document.forms[0];
	$('#submit').click(function(){
			form.password.setCustomValidity("");
			if(form.password.value != form.password_comfirm.value) {
				form.password.setCustomValidity("入力値が一致しません。");
				return;
			}
	});


	$('.products_list > li').each(function() {
		$(this).click(function(){
			//dataset取得
			var $product_id = $(this).data('id');

			//datasetの値でinput_hiddenのvalueを置き換え
			$('#id_data').val($product_id);

			//そのデータをフォームから送る。
			$('#product_form').submit();
		});
	});


	$(window).on('resize load', function() {
		var wH = $(window).height();
		$('html, body').css({
			'height': 'wH' + 'px'
		});
	});


	var flg = "off";
	$('.like').on('click', function() {
		if(flg == "off") {
			$('.heart').text('🧡');
			flg = "on";
		} else {
			$('.heart').text('♡');
			flg = "off";
		}
	});


	$('.like').mousedown(function() {
		$(this).css({
			'transform': 'translateY(1px)',
			'box-shadow': '0 0 0 rgba(5,10,10,0.8)'
		});
	});


	$('.like').mouseup(function() {
		$(this).css({
			'transform': 'translateY(0px)',
			'box-shadow': '0 1px 2px rgba(10,20,10,0.5)'
		});
	});


	$('.add_cart').mousedown(function() {
		$(this).css({
			'transform': 'translateY(1px)',
			'box-shadow': '0 0 0 rgba(5,10,10,0.8)'
		});
	});


	$('.add_cart').mouseup(function() {
		$(this).css({
			'transform': 'translateY(0px)',
			'box-shadow': '0 1px 2px rgba(10,20,10,0.5)'
		});
	});


	$('#buy_button').mousedown(function() {
		$(this).css({
			'transform': 'translateY(1px)',
			'box-shadow': '0 0 0 rgba(5,10,10,0.8)'
		});
	});


	$('#buy_button').mouseup(function() {
		$(this).css({
			'transform': 'translateY(0px)',
			'box-shadow': '0 1px 2px rgba(10,20,10,0.5)'
		});
	});

});
