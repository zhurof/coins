$('.slider').slick({
	prevArrow: '<span class="icon-arrow-left slider__arrow prev"></span>',
	nextArrow: '<span class="icon-arrow-right slider__arrow next"></span>',
	touchThreshold: 30,
	autoplay: true,
	autoplaySpeed: 2000,
	dotsClass: 'slick-dots slider__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false,
				dots: true
			}
		}
	]
})
$('.category-block__slider').slick({
	slidesToShow: 4,
	prevArrow: '<span class="icon-arrow-left category-block__arrow prev"></span>',
	nextArrow: '<span class="icon-arrow-right category-block__arrow next"></span>',
	touchThreshold: 30,
	dotsClass: 'slick-dots category-block__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 1366,
			settings: {
				arrows: false,
				dots: true
			}
		},
		{
			breakpoint: 1200,
			settings: {
				slidesToShow: 3,
				arrows: false,
				dots: true
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				arrows: false,
				dots: true
			}
		}
	]
})

//Модальные окна
function openModal(modalId, initiator){  
  var scrollWidth = window.innerWidth - document.body.clientWidth;//Ширина полосы прокрутки
  
	$('.modal-wrapper').children().unwrap();
	if(!$('#'+modalId).length){
		alert('Ошибка вызова модального окна');
		return false;
	}
	$('#'+modalId).trigger('beforeModalShow',initiator).wrap('<div class="modal-wrapper" style="display:none" />');
	$('.modal-wrapper').fadeIn(400,function(){
    $('#'+modalId).trigger('afterModalShow',initiator);
  });	
	if(scrollWidth){
		$('html').css('padding-right',scrollWidth);
		$('body').css('overflow-y','hidden');
	}
}
function closeModal(){
	$('.modal-wrapper').fadeOut(200, function(){
		$('html').css('padding-right','');
		$('body').css('overflow-y','');
	});
}
$(document).on('click', '[data-modal]', function(e){
	e.preventDefault();
	var modal = $(this).data('modal');
	openModal(modal,e.target);
})
$(document).on('click', '.modal__close', closeModal);

$(document).on('mousedown', '.modal-wrapper', function(e){
	if(!$('.modal').is(e.target) && $('.modal').has(e.target).length === 0){
		closeModal();
	}
})
$(document).keydown(function(e){
	//Закрытие окна на Esc
	if(e.which == 27){
		closeModal();
	}
});

//Поле с вариантами (для демонстрации)
$('.hint-field__input').on('input focus',function(){
	if(this.value.length > 2){
		$(this).siblings('.hint-field__list,.hint-field__clear').show();
	}else{
		$(this).siblings('.hint-field__list,.hint-field__clear').hide();
	}
})
$('.hint-field__clear').click(function(){
	$(this).siblings('.hint-field__input').val('').trigger('input');
})
$('.hint-field__list>li').click(function(){
	$(this).parent().siblings('.hint-field__input').val($(this).text());
	$(this).parent().hide().siblings('.hint-field__clear').hide();
})
//поиск и меню в шапке
$('.menu-btn').click(function(){
	$(this).toggleClass('active');
	$('.header__bottomline').toggleClass('open');
	$('.account__sidebar').toggleClass('open');
})
$('.search-btn').click(function(){
	$('.header__search').addClass('open').find('.search-form__input').focus();
})
$('.search-form__input').blur(function(){
	$(this).parents('.search-form').removeClass('open')
})
//Фильтр
$('.filter__mobile-toggler').click(function(){
	$(this).toggleClass('active');
	$('.filter__body').toggleClass('open');
})
$('.filter__hide-btn').click(function(){
	$('.filter__mobile-toggler').removeClass('active');
	$('.filter__body').removeClass('open');
})
//переключение активности ссылок сортировки ДЛЯ ДЕМОНСТРАЦИИ! Реализовать на серверной части
$('.sort__item').click(function(e){
	e.preventDefault();
	$(this).addClass('active').siblings().removeClass('active');
})
//Переключение видимости соседнего блока (знаю, что в BS3 такое есть, но там херь на id-шниках)
$('.toggle-link').click(function(){
	$(this).toggleClass('active');
	$(this).prev('.collapse').slideToggle(300);
})
//Показать телефон
$('.phone-link').click(function(e){
	if($(this).is('[data-phone]')){
		e.preventDefault();
		$(this).text($(this).data('phone'));
		$(this).removeAttr('data-phone');
	}
})
//Товар
$('.good__slider').slick({
	prevArrow: '<span class="icon-arrow-left good__arrow prev"></span>',
	nextArrow: '<span class="icon-arrow-right good__arrow next"></span>',
	infinite: false,
	touchThreshold: 30,
	dotsClass: 'slick-dots good__dots',
	customPaging: function(){return ''},
	responsive: [
		{
			breakpoint: 992,
			settings: {
				arrows: false,
				dots: true
			}
		}
	]
})
//кастомный input[type=number]
$('.number-field__btn').click(function(){
	var input = $(this).siblings('input')[0],
			min = input.min || 0,
			max = input.max || 99,
			step = input.step || 1,
			value = input.value;

	if($(this).is('.plus') && value <= max-step){
		input.value = +value + +step;
		$(input).trigger('change');
	}
	if($(this).is('.minus') && value >= +min + +step){
		input.value = value - step;
		$(input).trigger('change');
	}
})
//кастомный input[type=file]
$('.file-field__btn [type=file]').change(function(){
	var contentPlace = $(this).parent().siblings('.file-field__content'),
			textOnly = $(this).is('.text-only');
			
	contentPlace.empty();
	$(this).parent().removeClass('active');	
	
	if(this.value){			
		$(this).parent().addClass('active');		
			
		for(var i=0;i<this.files.length;i++){
			var file = this.files[i];
			
			if(/^image\//.test(file.type) && window.hasOwnProperty('URL') && !textOnly){ //Если файл - картинка и можно вывести миниатюру
				var imageUrl = URL.createObjectURL(this.files[i]),
						image = document.createElement("img");
				image.onload = function() {
					URL.revokeObjectURL(imageUrl);
				};
				image.src = imageUrl;
				image.title = file.name;
				image.alt = file.name;					
				contentPlace.append(image);
			}else{ //Если файл - не картинка или браузер не поддерживает объект URL
				contentPlace.append('<span>'+file.name+'</span>');
			}
		}			
	}
})
//кастомный select
$('.select').blur(function(){
	$(this).removeClass('select--open');
})
$('.select__output').click(function(){
	$(this).parent('.select').toggleClass('select--open');
})
$('.select__list>li').click(function(){
	var value = $(this).text(),
			select = $(this).parents('.select');
			
	select.removeClass('select--open');
	select.find('.select__input').val(value).trigger('change');
})
$('.select__input').change(function(){
	var wrapper = $(this).parent('.select');	
	wrapper.find('.select__output').text(this.value);	
})
//Диапазон дат
var rangeOptions = {
	alwaysShowCalendars: false,
	autoApply: true,
	locale: {
		format: "DD.MM.YYYY",
		separator: " - ",
		applyLabel: "Apply",
		cancelLabel: "Cancel",
		fromLabel: "От",
		toLabel: "До",
		customRangeLabel: "Custom",
		weekLabel: "W",
		daysOfWeek: ["вс.","пн.","вт.","ср.","чт.","пт.","сб."],
		monthNames: ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
		firstDay: 1
	}
};
$('.date-field').daterangepicker(rangeOptions);
//Корректировка таблицы с прокручиваемой частью
function correctScroll(){
	$('.dynamic-table__body').each(function(){
		var scrollbarWidth = this.offsetWidth - this.clientWidth,
				parentWidth = $(this).siblings('.dynamic-table__head').children('table').width();
		if(scrollbarWidth){
			$(this).children('table').css('width','calc(100% + '+scrollbarWidth+'px)');
		}
		if(parentWidth){
			$(this).width(parentWidth);
		}
	})
}
$(window).resize(correctScroll);
$(document).ready(correctScroll);



