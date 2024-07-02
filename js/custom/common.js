(function($) {
	$(document).ready( function() {
		var homeUrl = myScriptData.homeUrl;
		$('.user_menu_open').on('click', function () {
			$( '#profile_display_container').slideDown('fast', function() {
				$('.profile_data .user_menu_open').hide();
				$('.profile_data .user_menu_close').show();
			});
			console.log(settings);
			$.ajax({
				type : 'post',
				dataType : 'json',
				url: settings.ajaxUrl,
				data : {action: 'load_profile_menu_content'},
				success: function(response) {
					if(response.status === 'success') {
						$('#profile_display_container .content').html(response.data);
					} else {
						console.log('Unknown error');
					}
				}
			})
		});

		$('.user_menu_close').on('click', function () {
			$( '#profile_display_container').slideUp('fast', function() {
				$('.profile_data .user_menu_close').hide();
				$('.profile_data .user_menu_open').show();
			});
		});

		$('.non-popup-menu').hover(
			function() {
				$('.popupbox').hide();
			},
			function() {
				$('.popupbox').hide();
			}
		)

		$('.features-menu').hover(
			function() {
				$('#preparation-box').hide();
				$('#suitability-box').hide();
				$('#features-box').show();
			},
			function() {
				// $('#features-box').hide();
			}
		);
		$('.preparation-menu').hover(
			function() {
				$('#preparation-box').show();
				$('#suitability-box').hide();
				$('#features-box').hide();
			},
			function() {
				// $('#features-box').hide();
			}
		);
		$('.suitability-menu').hover(
			function() {
				$('#preparation-box').hide();
				$('#features-box').hide();
				$('#suitability-box').show();
			},
			function() {
				// $('#features-box').hide();
			}
		);

		$('.secondary-menu li a').hover(
			function(){
				$('.secondary-menu li a').css('background', 'transparent');
				$(this).css('background', 'rgba(44, 131, 199, 1)');
			},
			function(){

			}
		);

		$('.popupbox').hover(
			function(){

			},
			function(){
				$('.popupbox').hide();
				$('.secondary-menu li a').css('background', 'transparent');
			}
		)
		var desc_max_length = 100;
		$('.desc').each(function(){
			var orign_text = $(this).text();
			if (orign_text.length > desc_max_length){
				$(this).text(orign_text.substring(0, desc_max_length) + "...");
			}
			
		});
		
		$('.find-btn').on('click', function(){
			var target_url = $('.select-tag', $(this).parent()).val();
			window.location.href = homeUrl + target_url;
		})

		$('#faq-search-input').on('keyup', function(){
			var search_text = $(this).val();
			if (search_text != ''){
				search_text = search_text.toLowerCase();
				$('#itemsList li').each(function(){
					var list_content = $(this).html();
					list_content = list_content.toLowerCase();
					if (list_content.indexOf(search_text) > -1){
						$(this).show();
					} else {
						$(this).hide();
					}
				});
			} else {
				$('#itemsList li').hide();
			}
		})
		$('#itemsList li').on('click', function(){
			var target = $(this).attr('data-target');
			$('html, body').animate({
				scrollTop: $('#' + target).offset().top - $(".site-header-main").height(),
			}, 1000);
			$('#faq-search-input').val($(this).html());
			// window.find($('#faq-search-input').val());
			$('#itemsList li').hide();
		})

		$('.homepage-tab-links a').on('click', function(){
			$('.homepage-tab-links li.active').removeClass('active');
			$('.home-tab-contents .active').removeClass('active');
			$(this).parent().addClass('active');
			var active_content_id = $(this).attr('data-href');
			$(active_content_id).addClass('active');
		})
	});
})(jQuery);
