// Colored title
$(function(){
	$('h1.colored-title').each(function(){
		var text = $(this).text().split(' ');
		var len = text.length;
		if(len < 1)
			return;
			for ( var i=0; i< len; i++ ) {
			  if (((i+1) % 5 ) === 1 ) {
        	text[i] = '<span class="color-purple">'+text[i]+'</span>';
				}	else if (((i+1) % 5 ) === 2 ) {
        	text[i] = '<span class="color-blue">'+text[i]+'</span>';
			  } else if (((i+1) % 5 ) === 3 ) {
        	text[i] = '<span class="color-green">'+text[i]+'</span>';
			  } else if (((i+1) % 5 ) === 4 ) {
        	text[i] = '<span class="color-sunflower">'+text[i]+'</span>';
			  } else if (((i+1) % 5 ) === 0 ) {
        	text[i] = '<span class="color-amber">'+text[i]+'</span>';
			  }
			}
		$(this).html(
				text.join(' ')
		);
	});
});
// end
