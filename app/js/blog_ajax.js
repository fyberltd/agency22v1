jQuery(document).ready(function($){
	// archive page ajax
	$(document).on('click', '#archive_load_more:not(.loading)', function(){
		var btn = $(this);
		// get current page number
		var cur_page = btn.data('page');
		// get next page number
		var next_page = btn.data('page')+1;
		// add loading class so fuction cannot be run while already running
		btn.addClass('loading');

		$.ajax({
			url: ajax_url,
			type: 'post',
			dataType: 'json',
			data: { 
				page: next_page,
				action: 'archive_load_more' 
			},
			error : function(response){
				console.log(response);
			},
			beforeSend: function(){
     			$('#blog_archive .blog_posts .loading_icon').addClass('loading');
   			},
			success : function(response){
				// update to new page num
				btn.data('page', next_page);

				for(var i = 0; i < response.blog_data.length; i++){

					var html = ''+
						'<div class="col-4 post">'+
							'<a href="' + response.blog_data[i].permalink + '">' +
								'<img src="' + response.blog_data[i].thumbnail + '" alt="">' +
								'<h3 class="title">' + response.blog_data[i].title + '</h3>' +
							'</a>' +
							'<p class="date">' + response.blog_data[i].date + '</p>' +
							'<p class="excerpt">' + response.blog_data[i].excerpt + '</p>' +
							'<p class="categories">Categories: ' + response.blog_data[i].cat_list + '</p>' +
							'<p class="tags">Tags: ' + response.blog_data[i].tag_list + '</p>' +
						'</div>';

					$('#blog_archive .blog_posts').append(html);
				}

				// remove button if max num of post has been reached
				if( $('#blog_archive .blog_posts .post').length >= response.max_posts[0].no_of_posts ){
					btn.hide();
				}
			},
			complete : function(response){
				$('#blog_archive .blog_posts .loading_icon').removeClass('loading');
				btn.removeClass('loading');
			}
		});
	}); 

	// tag page ajax
	$(document).on('click', '#tag_load_more:not(.loading)', function(){
		var btn = $(this);
		// get current page number
		var cur_page = btn.data('page');
		// get next page number
		var next_page = btn.data('page')+1;
		// get the tag slug from button
		var cur_tag = btn.data('tag');
		// add loading class so fuction cannot be run while already running
		btn.addClass('loading');

		$.ajax({
			url: ajax_url,
			type: 'post',
			dataType: 'json',
			data: { 
				page: next_page,
				tag: cur_tag,
				action: 'tag_load_more' 
			},
			error : function(response){
				console.log(response);
			},
			beforeSend: function(){
     			$('#blog_tag_page .blog_posts .loading_icon').addClass('loading');
   			},
			success : function(response){
				// update to new page num
				btn.data('page', next_page);

				for(var i = 0; i < response.blog_data.length; i++){

					var html = ''+
						'<div class="col-4 post">'+
							'<a href="' + response.blog_data[i].permalink + '">' +
								'<img src="' + response.blog_data[i].thumbnail + '" alt="">' +
								'<h3 class="title">' + response.blog_data[i].title + '</h3>' +
							'</a>' +
							'<p class="date">' + response.blog_data[i].date + '</p>' +
							'<p class="excerpt">' + response.blog_data[i].excerpt + '</p>' +
							'<p class="categories">Categories: ' + response.blog_data[i].cat_list + '</p>' +
							'<p class="tags">Tags: ' + response.blog_data[i].tag_list + '</p>' +
						'</div>';

					$('#blog_tag_page .blog_posts').append(html);
				}

				// remove button if max num of post has been reached
				if( $('#blog_tag_page .blog_posts .post').length >= response.max_posts[0].no_of_posts ){
					btn.hide();
				}
			},
			complete : function(response){
				$('#blog_tag_page .blog_posts .loading_icon').removeClass('loading');
				btn.removeClass('loading');
			}
		});
	}); 

	// category page ajax
	$(document).on('click', '#cat_load_more:not(.loading)', function(){
		var btn = $(this);
		// get current page number
		var cur_page = btn.data('page');
		// get next page number
		var next_page = btn.data('page')+1;
		// get the category slug from button
		var cur_cat = btn.data('cat');
		// add loading class so fuction cannot be run while already running
		btn.addClass('loading');

		$.ajax({
			url: ajax_url,
			type: 'post',
			dataType: 'json',
			data: { 
				page: next_page,
				cat: cur_cat,
				action: 'category_load_more' 
			},
			error : function(response){
				console.log(response);
			},
			beforeSend: function(){
     			$('#blog_category_page .blog_posts .loading_icon').addClass('loading');
   			},
			success : function(response){
				// update to new page num
				btn.data('page', next_page);

				for(var i = 0; i < response.blog_data.length; i++){

					var html = ''+
						'<div class="col-4 post">'+
							'<a href="' + response.blog_data[i].permalink + '">' +
								'<img src="' + response.blog_data[i].thumbnail + '" alt="">' +
								'<h3 class="title">' + response.blog_data[i].title + '</h3>' +
							'</a>' +
							'<p class="date">' + response.blog_data[i].date + '</p>' +
							'<p class="excerpt">' + response.blog_data[i].excerpt + '</p>' +
							'<p class="categories">Categories: ' + response.blog_data[i].cat_list + '</p>' +
							'<p class="tags">Tags: ' + response.blog_data[i].tag_list + '</p>' +
						'</div>';

					$('#blog_category_page .blog_posts').append(html);
				}

				// remove button if max num of post has been reached
				if( $('#blog_category_page .blog_posts .post').length >= response.max_posts[0].no_of_posts ){
					btn.hide();
				}
			},
			complete : function(response){
				$('#blog_category_page .blog_posts .loading_icon').removeClass('loading');
				btn.removeClass('loading');
			}
		});
	}); 
});








































