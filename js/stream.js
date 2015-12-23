$(document).ready(function() {
	//load streaming on or off
	var channel = '';
	var id = '';

	$('#stream-table tr').each(function() {
		channel = $(this).data('stream-channel');
		id = $(this).data('stream-id');
		console.log(id);
		console.log(channel);

		$.ajax({
			url : '/streamstatus.php',
			data : {
				'channel' : channel,
				'id' : id
			},
			success: function(r) {
				//console.log(r);
				$('#title-'+r.id).hide().html('<span class="stream-title">'+r.title+'</span>').fadeIn('slow');
				$('#status-'+r.id).hide().html('<span class="stream-'+r.islive+'">'+r.islive+'</span>').fadeIn('slow');
				$('#view-'+r.id).hide().html('<span class="stream-view">'+r.view+'</span>').fadeIn('slow');
				console.log(r);
				//console.log(r.islive);
			},
			error: function(r) {
				console.log(r);
			}
		});

	});
	//end streaming load

	//click event change stream-screen
	var streamScreen = $('#stream-screen');
	$('#stream-table').on('click', 'tr', function() {
		$('iframe').remove();
		streamScreen.find('iframe').hide('slow');
		var streamChannel = $(this).data('stream-channel');
		var streamId = $(this).data('stream-id');
		var streamTitle = $('#title-'+streamId).html();
		streamTitle += ' - ' + $('#name-'+streamId).html();

		if (streamChannel == 'talktv') {
			streamUrl = "<iframe scrolling='no' src='http://talktv.vn/streaming/play/embed/"+streamId+"' height='400' width='650'></iframe>"
						+"<iframe scrolling='no' src='http://talktv.vn/streaming/chat/embed/"+streamId+"' height='400' width='340'></iframe>";
		}
		else if (streamChannel == 'youtube') {
			streamUrl = "<iframe width='1000' height='500' src='https://www.youtube.com/embed/"+streamId+"?ps=gaming&autoplay=1' frameborder='0' allowfullscreen></iframe>";
						// +"<iframe src='https://www.youtube.com/live_chat?is_popout=1&v="+streamId+"' frameborder='0' height='400' width='340'></iframe>";
		}
		console.log(streamUrl);
		$('#stream-title').hide().html(streamTitle).fadeIn('slow');
		streamScreen.hide().html(streamUrl).fadeIn('slow');
	});
	// end this shit
})