$('.colors').click(function() {

		  var chosen_color = $(this).css('background-color');
		 
		  $('#canvas').css('background-color', chosen_color);
		  $('.textures').css('background-color', chosen_color);
          $('.borders').css('background-color', chosen_color);
	 });

$('.borders').click(function() {
          var border_color = $(this).css('border-color');
          $('#canvas').css('border', '10px groove ' + border_color)
      });

$('.textures').click(function() {

		  var chosen_texture = $(this).css('background-image');
		 
		  $('#canvas').css('background-image', chosen_texture);
	 });

$('.messages').click(function() {

	 var radio_button = $(this);

	 var label = radio_button.next();

	 var message = label.html();
	 $('#message-output').html(message);

	var existing_text = $('#message-output').html();
	$('#message-output').html(existing_text);
});

	$('#recipient').keyup(function() {

		var recipient = $(this).val();
		$('#recipient-output').html(recipient + "!");
		
		var name_length = recipient.length;

		if(name_length == 14) {
			$('#recipient-error').html("14 characters max");	
		}
		else {
			$('#recipient-error').html("");	
		}
	});

    $('#controls').on('click', '.stickers', function () {
		var new_sticker = $(this).clone();
		new_sticker.addClass('stickers_on_card');
		$('#canvas').prepend(new_sticker);
		new_sticker.draggable({containment:'#canvas', opacity: 0.35});
	});


	$('#refresh-btn').click(function() {
		 
		  $('#canvas').css('background-color', 'white');
		  $('#canvas').css('background-image', "none");
          $('#canvas').css('border', "none");
		  $('#message-output').html("");
		  $('#recipient-output').html("");
    	  $('.stickers_on_card').remove();
	 });

	$('#print-btn').click(function() {
	
	    var canvas_clone = $('#canvas').clone();
        var canvas = canvas_clone.prop('outerHTML'); 
    	    
	    var new_tab_contents  = '<html>';
		new_tab_contents += '<head>';
  		new_tab_contents += '<link rel="stylesheet" href="css/main.css" type="text/css">'; 
    	new_tab_contents += '<link rel="stylesheet" href="css/features.css" type="text/css">';
    	new_tab_contents += '</head>';
    	new_tab_contents += '<body>'; 
    	new_tab_contents += canvas; // Here's where we add the card to our HTML for the new tab
    	new_tab_contents += '</body></html>';
    
    	var new_tab =  window.open();
	    new_tab.document.open();
	    new_tab.document.write(new_tab_contents);
	    new_tab.document.close();
    		
});

/*-------------------------------------------------------------------------------------------------
Sticker search with Ajax!
-------------------------------------------------------------------------------------------------*/
$('#sticker-search-btn').click(function() {

    // Clear out the results div in case we've already done a search
    $('#sticker-search-results').html('');

    // What search term did the user enter?
    var search_term = $('#sticker-search').val();

    // This is the URL we'll make the Ajax call to
    // Because it's a practice URL, it will only respond to
    // searches for "balloons", "unicorns", "sparkles", "kittens" or "puppies"
    var search_url = 'http://thewc.co/toys/image-search/' + search_term;

    // getJSON is a Ajax method provided to us by jQuery
    // It's going to make a call to the url we built above,
    // and let us work with the results that are sent back
    $.getJSON(search_url, function(data){

        // Only attempt to do the following if we had images...I.e there was more than 0 images
        if(data.length > 0){

            // .each() is a jQuery method that lets us loop through a set of data.
            // Here our data set is images
            $.each(data, function(key, image) {

                // Create a new image element
                var new_image_element = "<img class='stickers circular' src='" + image + "'>";

                // Now put the new image in our results div
                $('#sticker-search-results').prepend(new_image_element);

            });
        }
        else {
            $('#sticker-search-results').html('No images found :-(');
        }
    });
});


