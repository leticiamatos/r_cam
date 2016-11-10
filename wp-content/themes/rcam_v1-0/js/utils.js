jQuery.noConflict();

jQuery(function($) {
	// $( function() {
	// 	$( ".modal_box" ).dialog({
	// 		width: 
	// 		modal: true,
	// 		resizable: false
	// 	});
	// } );

	// Home Highlight Slide
	$('.slide_wpr').bxSlider({
		infiniteLoop: true,
		pager: false,
		auto: true,
		pause: 5000
	});	

	// Home Serviços Carousel
	$('.slide_servicos_wpr, .slide_revista_wpr').bxSlider({
		infiniteLoop: false,
		pager: false,
		minSlides: 1,
		maxSlides: 4,
		slideWidth: 220,
		slideMargin: 10
	});	

	// Home News Ticker 
	$('.ticker_rss ul').addClass('ticker');
	$('.ticker a').each(function( ) {
		$(this).attr("target","_blank");
	});
	var newsTicker = $('.ticker').newsTicker({
	    row_height: 33,
	    max_rows: 1,
	    duration: 4000
	});

    $( "#tabs-ajax" ).tabs({
		active: false,
		collapsible: true,
	  	
		beforeActivate: function( event, ui ) {
          	// $('.submenu_loading').addClass('active');
          	$('.submenu_loading').removeClass('active');
		},
		beforeLoad: function( event, ui ) {
          	$('.submenu_loading').addClass('active');
	        ui.jqXHR.fail(function() {
			  	console.log("Ops! Um erro!" );
	        });
      	},
	  	load: function( event, ui ) {
          	$('.submenu_loading').removeClass('active');
            
	  	}
    });    
    $( "#tabs-ajax-caminhoes, #tabs-ajax-caminhoneiro, #tabs-ajax-entretenimento" ).tabs({
		show: { effect: "fade", duration: 800 },
		hide: { effect: "fade", duration: 800 },
		beforeLoad: function( event, ui ) {
			ui.jqXHR.fail(function() {
		  		console.log("Ops! Um erro!" );
        	});
            ui.jqXHR.success(function(){
                $('.banner_area a').each(function(){
		          $(this).attr("target","_blank");
	           });
                // console.log('Deu certo depois que eu click em uma tap');
            });
            
     	},
        load: function(event, ui){
            $('.banner_area a').each(function(){
		          $(this).attr("target","_blank");
	        });
            // console.log('Deu certo quando a página carrega');
        }
    });

	$( ".post , .page" ).each(function() {
  		$(this).addClass('post-item');
	});

	// Toggle class Highlight post home
	$('.btn.open, .btn.close').click(function(){
		$('.highlight.post').toggleClass('active');
	})

	// Select Menu
	$( ".selected-ui" ).selectmenu();

	// Fancybox Galery modal
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect	: 'none'
	});

	// Set Target Blank for social menu 
	$('#menu-social a, #menu-social-1 a').each(function( ) {
		$(this).attr("target","_blank");
		title = $(this).html();
		$(this).attr("title", title);
	});

	if ($('body').hasClass('post-blog') || $('body').hasClass('category-blog')){
		$('.menu .menu-blog').addClass('current');
	}

	// function scrollMenuPanel(){
	//   	var topPage = $(this).scrollTop();

	// 	if($('body').hasClass('home')){
	// 	 	//var video_height = $('.home_panel').height();
	// 	 	var scrollPosition = $('.fixed').offset().top;
	// 	 	var top_number = scrollPosition;

	// 		if (topPage >= 0 && topPage < scrollPosition){
	// 			$('body').addClass('header_extended');
	// 			$('body').removeClass('header_normal');
	// 		}else if (scrollPosition < 0 || topPage < 0){
	// 			$('body').addClass('header_extended');
	// 			$('body').removeClass('header_normal');
	// 		}else {
	// 	  		$('body').addClass('header_normal');
	// 	  		$('body').removeClass('header_extended');
	// 		}
	// 	} else{
	// 		//var video_height = $('.home_panel').height();
	// 	 	var scrollPosition = $('.fixed').offset().top;

	// 		if (topPage > 0){
	// 			$('body').addClass('header_normal');
	// 			$('body').removeClass('header_extended');
	// 		}else{
	// 			$('body').addClass('header_extended');
	// 			$('body').removeClass('header_normal');
	// 		}

	// 		if ($('body').hasClass('post-blog') || $('body').hasClass('category-blog')){
	// 			var top_number = 600;
	// 		}else{
	// 			var top_number = 200;
	// 		}
	// 	}
	  	
	      
	// 	if (topPage < top_number) {
	// 	  $('body').addClass('top');
	// 	  $('body').removeClass('not-top');
	// 	}
	// 	else{
	// 	  $('body').addClass('not-top');
	// 	  $('body').removeClass('top');
	// 	}
	// }
	// scrollMenuPanel();

	// // Panel
	// $(window).scroll(function () {
	// 	scrollMenuPanel();
 // 	});

 	// Fancybox
	if ( $(".gallery")) {
		$(".gallery img").each(function( ) {
			//console.log(output);
	  		$(this).parent().addClass('fancybox');
	  		$(this).parent().attr( "data-fancybox-group", "gallery" );
		});
	}

	// Fancybox Galery modal
	$(".fancybox").fancybox({
		openEffect  : 'none',
		closeEffect	: 'none'
	});
	$('.gallery-item a img').each(function(){
		img_description = $(this).attr('alt');
		$(this).parent().attr( 'title', img_description );
	});

	// Menu Dropdown 
	$( ".menu_link" ).click(function() {
		$( ".menu.responsive.cntt" ).toggleClass("active");
	});
	$( ".menu.responsive.cntt" ).click(function() {
		$( ".menu.responsive.cntt" ).removeClass("active");
	});

	// Home videos
	$first_click = true;
	$('.postlist_item .video_link').each(function() {
		$(this).click( function(e){
			e.preventDefault();

			var video_id = $(this).attr('data-videoid');
			// console.log(video_id);
			var container_id = $(this).attr('data-videocntt');
			// console.log(container_id);
			var post_link = $(this).attr('data-post-href');
			// console.log(post_link);
			var post_title = $(this).attr('data-posttitle');
			// console.log(post_title);
			var cat_link = $(this).attr('data-catlink');
			// console.log(cat_link);

			var embed_code = '<iframe src="https://www.youtube.com/embed/'+ video_id +'?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>';
			// var embed_code = 'video';
			var post_info_code = '<div class="post_info"></div>';
			post_info_code += '<ul class="post-categories"><li class="videos category"><a href="'+ cat_link +'" rel="tag">Videos</a></li></ul>';
			post_info_code +='<h3 class="title"><a href="'+ post_link +'">'+ post_title +'</a></h3><span class="clear"></span>';

		    $('#' + container_id + ' .video_cntt').html(embed_code+post_info_code);
		    // console.log(video_id);
		    $('#video_more_link').attr('href', post_link);
		    
		    if($first_click){
		    	$('#video_more_link').parent().addClass('visible');
		    	$('#video_more_link').parent().addClass('animate');
		    	$('#video_more_link').parent().removeClass('animate2');
				$first_click = false;
		    }else{
		    	$('#video_more_link').parent().toggleClass('animate');
		    	$('#video_more_link').parent().toggleClass('animate2');
				$first_click = true;
		    }

		    // Active effect li buttons video list
		 //    liparent = $(this).parent('.postlist_item');
		 //    liparent.siblings('.postlist_item').each(function() {
			// 	$(this).removeClass('current');
			// });
		 //    liparent.addClass('current');
			
			return false;
		});
	});
	if( $('.videodestaque') ){
		var video_id = $('.videodestaque').attr('data-videoid');
		var container_id = $('.videodestaque').attr('data-videocntt');
		var post_link = $('.videodestaque').attr('data-post-href');
		var post_title = $('.videodestaque').attr('data-posttitle');
		var cat_link = $('.videodestaque').attr('data-catlink');

		var embed_code = '<iframe src="https://www.youtube.com/embed/'+ video_id +'?rel=0&modestbranding=1&showinfo=0&controls=1&theme=light"  frameborder="0" allowfullscreen ></iframe>';
		// var embed_code = 'videohere!';
		var post_info_code = '<article class="post_info post type-post category-noticias">';
		post_info_code += '<ul class="post-categories"><li class="videos category"><a href="'+ cat_link +'" rel="tag">Videos</a></li></ul>';
		post_info_code +='<h3 class="title"><a href="'+ post_link +'">'+ post_title +'</a></h3><span class="clear"></span>';
		post_info_code += '</article>';
		

	    $('#' + container_id + ' .video_cntt').html(embed_code+post_info_code);
	}
	$("body.single .video_wpr").each(function() {
		$(this).fitVids();
	});
	
	// Menu Filtros SUbcategorias Tabs no Responsivo
	$('.responsive_menu_subcat_link').click(function() {
		$(this).parent().toggleClass('active');
	})

	// Menu Grupo TT Dropdown 
	$( ".menu_grupo_link" ).click(function() {
		$( ".menu_grupo.menu_cntt" ).toggleClass("active");
	});
	$( ".menu_grupo.menu_cntt" ).click(function() {
		$( ".menu_grupo.menu_cntt" ).removeClass("active");
	});

	// Hover effect search form
	$('.hover_effect').click(
		function(){
			$(this).addClass('active');
		}, function(){
			$(this).removeClass('active');
	});

	// Banner Area - Abrir em nova página
	$('.banner_area a').each(function(){
		$(this).attr("target","_blank");
	})

	// Banner Expansível header
	$('.adv_expansive.adv_header').each(function() {
		$(this).hover(function(e) {
			// console.log('over!');
			$(this).addClass('active');
			$('.adv_expanded_gap').addClass('active');
		}, function(e) {
			// console.log('still over!');
			// $(this).removeClass('active');
			// $('.adv_expanded_gap').removeClass('active');
		});
		$(this).find('.less').click(function(e) {
			$(this).closest('.adv_expansive').removeClass('active');
			$('.adv_expanded_gap').removeClass('active');
			// console.log('out!');
		});
	});

	// Banner Expansível footer
	$('.adv_expansive.adv_footer .adv_banner .adv_link').click(function(e) {
		$(this).closest('.adv_expansive').addClass('active');
	});
	$('.adv_expansive.adv_footer .adv_expanded .less').click(function(e) {
		$(this).closest('.adv_expansive').removeClass('active');
	});

	// Banner Expansível right side
	$('.adv_sidewpr .adv_expansive').hover(function(e) {
		$(this).addClass('active');
	}, function(e) {
		$(this).removeClass('active');
	});
	$('.adv_sidewpr .less').click(function(e) {
		$(this).closest('.adv_expansive').toggleClass('active');
	});

	function countSeconds(n){
		if( n >= 0 ){
			// console.log(n);
			$('.modal_bg .time').html(n);
			return true;
		}else{
			return false;
		}
	}
	// Home Popup
	if( $('.modal_bg .modal_header').length){
		var endTime = 5;
		$(this).delay(1000).queue(function(){
			countSeconds(endTime--);
			$(this).dequeue();
		}).delay(1000).queue(function(){
			countSeconds(endTime--);
			$(this).dequeue();
		}).delay(1000).queue(function(){
			countSeconds(endTime--);
			$(this).dequeue();
		}).delay(1000).queue(function(){
			countSeconds(endTime--);
			$(this).dequeue();
		}).delay(1000).queue(function(){
			countSeconds(endTime--);
			$(this).dequeue();
		}).delay(1000).queue(function(){
			countSeconds(endTime--);
			$('.modal_bg').addClass('inactive').delay(1000).remove();
			$(this).dequeue();
		});
  	};
	$('.modal_bg .close_btn').click(function(e) {
		console.log('olar');
		$(this).closest('.modal_bg').addClass('inactive').delay(1000).remove();
	});

})

// Responsive debugger script
jQuery(document).ready(function ($) {
	// var MEASUREMENTS_ID = 'measurements'; // abstracted-out for convenience in renaming
	// $("body").append('<div id="'+MEASUREMENTS_ID+'"></div>');
	// $("#"+MEASUREMENTS_ID).css({
	//     'position': 'fixed',
	//     'bottom': '0',
	//     'right': '0',
	//     'background-color': 'black',
	//     'color': 'white',
	//     'padding': '5px',
	//     'font-size': '10px',
	//     'opacity': '0.4',
	//     'font-family': 'Arial, Sans',
	//     'z-index': '100'
	// });
	getDimensions = function(){
	    return $(window).width() + ' (' + $(document).width() + ') x ' + $(window).height() + ' (' + $(document).height() + ')';
	}
	getOrientation = function(){
		if ($(window).width() >= $(window).height()){
			return 'horizontal';
		}else{
			return 'vertical';
		}
	}
	setOrientation = function(){
	    if (getOrientation() == 'vertical' && !$('body').hasClass('vertical')){
	    	$('body').addClass('vertical');
	    } else if (getOrientation() == 'horizontal' && $('body').hasClass('vertical')){
	    	$('body').removeClass('vertical');
	    }
	}
	setOrientation();
    
    // Não apagar
    /*
    * Rastreamento de clicks nos banners da Revista caminhoneiro
    */
    jQuery('#banner-scania a').click(function() {
        ga('send', 'event', 'Banner','click', 'banner-Scania');
                });
    jQuery('#banner-texaco a').click(function() {
        ga('send', 'event', 'Banner','click', 'banner-Texaco');
                });
    jQuery('#banner-iveco a').click(function() {
        ga('send', 'event', 'Banner','click', 'banner-IVECO');
                });
    jQuery('#banner-alliance a').click(function() {
        ga('send', 'event', 'Banner','click', 'banner-Alliance');
                });
    
    
	// $("#"+MEASUREMENTS_ID).text(getDimensions());
	// $(window).on("resize", function(){
	//     $("#"+MEASUREMENTS_ID).text(getDimensions());
	//     setOrientation();
	// });

 });
