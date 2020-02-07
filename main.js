//ドロワーメニューの実装//
jQuery(function() {
    jQuery('.screen-menu').on('click',function(){
        jQuery('.menu__line').toggleClass('active');
        jQuery('.gnav').fadeToggle();
});

//グーグルマップ右上の要素消去イベント//
jQuery(function() {
    jQuery('.access-icon').click(function(){
        jQuery('.access-heading_pc').css('display', 'none');
    });
});


//スワイパー//
var mySwiper = new Swiper('.swiper-container', {
	effect: 'fade',//スライドの変え方
	autoplay: {
		delay: 2000,//スライド変化の秒数
		stopOnLastSlide: false,
		disableOnInteraction: false,
		reverseDirection: false
	},
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	},
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true
	}
});
});
