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
			url : '/streamcore.php',
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
			streamUrl = "<iframe id='stream-watch' scrolling='no' src='http://talktv.vn/streaming/play/embed/"+streamId+"' height='400' width='660'></iframe>"
						+"<iframe id='stream-chat' scrolling='no' src='http://talktv.vn/streaming/chat/embed/"+streamId+"' height='400' width='357'></iframe>";
		}
		else if (streamChannel == 'youtube') {
			streamUrl = "<iframe id='stream-watch' width='1022' height='574' src='https://www.youtube.com/embed/"+streamId+"?ps=gaming&autoplay=1' frameborder='0' allowfullscreen></iframe>";
						// +"<iframe src='https://www.youtube.com/live_chat?is_popout=1&v="+streamId+"' frameborder='0' height='400' width='340'></iframe>";
		}
		else if (streamChannel == 'twitch') {
			streamUrl = "<iframe id='stream-watch' scrolling='no' src='http://player.twitch.tv/?channel="+streamId+"' height='394' width='660'></iframe>"
						+"<iframe id='stream-chat' scrolling='no' src='http://www.twitch.tv/"+streamId+"/chat?popout=' height='394' width='357'></iframe>";
		}

		console.log(streamUrl);
		$('#stream-title').hide().html(streamTitle).fadeIn('slow');
		streamScreen.hide().html(streamUrl).fadeIn('slow');
	});
	// end this shit

	//close chat frame 
	$('.stream-action').on('click', '.btnHideChat', function() {
		$('#stream-chat').hide();
		$('#stream-watch').animate({
			'height' : '574px',
			'width' : '1022px'
		}, 300);
	});
})