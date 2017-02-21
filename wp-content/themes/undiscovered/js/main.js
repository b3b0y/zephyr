(function($) {
	var UndiscoveredTheme = {
		init: function(){
			this.nav();
			this.backToTop();
			this.initGallery();
		},

		nav: function(){
			$('.main-navigation .menu').slicknav({
				label: ''
			});
		},

		backToTop: function(){
			$().UItoTop({
				inDelay: 300,
				outDelay: 200,
				scrollSpeed: 350,
				text: ''
			});
		},

		initGallery: function(){
			$('.gallery').bxSlider({
				slideSelector: '.gallery-item',
				pager: false
			});
		}
	};

	$(document).ready(function($) {
		UndiscoveredTheme.init();

		$('#toggle').click(function() {
			$(this).toggleClass('active');
			$('#overlay').toggleClass('open');
			$('.search-icon').toggleClass('hide')
		});


	});

	$(document).ready(function () {
    $(".zephyr-header").before($(".zephyr-header").clone().addClass("animateIt"));
    $(window).on("scroll", function () {
        $("body").toggleClass("down", ($(window).scrollTop() > 100));
    });
});

})(jQuery);
