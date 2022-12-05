$('.youtube-placeholder i').click(function(){
	video = '<iframe src="'+ 
	$(this).attr('data-video') + '"></iframe>';
	$(this).replaceWith(video);
});


