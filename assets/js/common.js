
$(function() {

	  $('.pop-img').magnificPopup({type:'image',fixedContentPos: false,});
	$('.popup').magnificPopup({fixedContentPos: false,});

	popupGal(".sl-fd")
	function popupGal(it) {
		$(it).magnificPopup({
			delegate: 'a',
			type: 'image',
			tLoading: 'Loading image #%curr%...',
			mainClass: 'mfp-img-mobile',
			fixedContentPos: false,
			gallery: {
				enabled: true,
				navigateByImgClick: true,
				preload: [0,1] // Will preload 0 - before current, and 1 after the current image
			}
		});
	}

	$(".mask-phone").inputmask({"mask": "+7 (999) 999-99-99", "clearIncomplete": true, showMaskOnHover: false})


	var checkGo = true;
	$(".check-block input").on("change", function() {
		if ($(this).prop("checked")) {
			$(this).parents("label").addClass('active');
			$(this).parents("form").find(".button").removeAttr("disabled");
			checkGo = true;
		} else {
			$(this).parents("label").removeClass('active');
			checkGo = false;
			$(this).parents("form").find(".button").prop("disabled", true);
		}
	})

	$(".form-temp").submit(function(e) { //Change
		var th = $(this);
		var go = true;
		$(".error").hide();
		th.find(".filling").each(function() {
			if ($(this).val() == "") {
				$(this).parents("label").find(".error").show();
				go = false;
			} 
		})
		if (go == true && checkGo == true) {
			
			$.ajax({
				type: "POST",
				url: "ss-maill.php", //Change
				data: th.serialize()
			}).done(function() {
				$.magnificPopup.close();
				$.magnificPopup.open({
			       items: {
			           src: '#thanks'
			       }
			    });
			    //document.location.href = "thanks.php"
				setTimeout(function() {
					// Done Functions
					th.trigger("reset");
				}, 1000);
			});
			return false;
		}
		return false;
	});

	$(".toggle-mnu").click(function() {
		$(this).toggleClass("on");
		$(".header .navigation").slideToggle();
		return false;
	});

	$(".close").on("click", function() {
		$(".header .navigation").slideUp();
		$(this).removeClass("on");
	})

	if ($(window).width() <= 992) {
		$(".navigation").on("click", function() {
			$(this).slideUp();
			$(".toggle-mnu").removeClass('on');
		})
	}

	console.log("Ширина " + $(window).width())
	console.log("Длина " + $(window).height())

	$(".button.popup").on("click", function() {
		let ttl = $(this).attr("data-title");
		$("#form-1 .form-title").text(ttl)
		$("#form-1 .place-form").val(ttl)
	})


	 setTimeout(function() {
		let map = $(".map").attr("data-map");
		$(".map").html(map)
	 }, 2000);


	/* 
	для фиксированного хедера
	let headerHeight = $("header.header").height();
		 headerFix()
		$(window).scroll(function() {
			 headerFix()
		})

		function headerFix() {
			if ($(window).width() >= 992) {
				if ($(window).scrollTop() >= headerHeight) {
					$("header.header").addClass('fix')
				} else {
					$("header.header").removeClass('fix')
				}
			}
		}*/


		/*для лендинга начало*/

	/*$(".navigation-wrap a[href*='#']").on("click", function(e) {
		e.preventDefault();
		var link = $(this).attr("href");
		var h = $(link);
		$("body, html").animate({
			scrollTop: h.offset().top
		}, 1000)
		console.log(link)
		console.log($("#contacts").offset().top)
	})

	if ($(window).width() < 992) {
		$(".navigation-wrap a").on("click", function(e) {
			$(".top-header-wrap .navigation").slideUp();
			$(".toggle-mnu").removeClass('on');
		})
	}

	секции для листания c id дать сласс s-attr класс active давай li
		.s-attr {
	    top: -180px;
	    position: relative;
	}
	$(window).scroll(function() {
		var $sections = $('.s-attr');
		$sections.each(function(i,el){
	        var top  = $(el).offset().top-100;
	        var bottom = top +$(el).height();
	        var scroll = $(window).scrollTop();
	        var id = $(el).attr('id');
	    	if( scroll > top && scroll < bottom){
	            $('li.active').removeClass('active');
				$('a[href="#'+id+'"]').parents("li").addClass('active');

	        }
	    })
	})*/


	/*для лендинга конец*/

	/*tabMy(".s-select-fasade")
	function tabMy(parent) {
		//let that = $(this);
		$(`${parent} .tab_item`).not(":first").hide();
		$(`${parent} .wrapper-tabs .tab`).click(function() {
			$(`${parent}  .wrapper-tabs .tab`).removeClass("active").eq($(this).index()).addClass("active");
			$(`${parent}  .tab_item`).hide().eq($(this).index()).fadeIn()
		}).eq(0).addClass("active");
	}*/


})






	


	
	
	
	
	$('.your-class .wrap-slider').slick({
	   dots: true,
	   arrows: false
	});
  
	$(".your-class .wrap-slider").slick({
		slidesToShow: 6,
  		slidesToScroll: 1,
  		autoplay: true,
  		autospeed: 1000,
  		responsive: [
	    {
			breakpoint: 992,
			settings: {
			slidesToShow: 4,
			arrow: false,
  		}
	    },
	      {
			breakpoint: 767,
			settings: {
			slidesToShow: 3,
	      }
	    },
	    {
			breakpoint: 580,
			settings: {
			slidesToShow: 2,
	      }
	    }
	    ]
	});



	