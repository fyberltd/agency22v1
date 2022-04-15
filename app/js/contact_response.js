jQuery(document).ready(function($){
	if( $('#wpcf7-f26-o1').length ){
		var form = document.querySelector('#wpcf7-f26-o1');
		 
		form.addEventListener( 'wpcf7mailsent', function( event ) {
		    var html = '<div class="success_msg">Thank you for your message we will contact you shortly</div>';

		    $('#wpcf7-f26-o1').hide();
		    $('#contact_form_wrap').append( html );
		}, false );
	}
});