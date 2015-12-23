<?php
	header('Content-Type: application/json');
	$channel = $_GET['channel'];
	$id = $_GET['id'];
	$title = '';
	$view = '';
	$status = '';
	$object = array();

	switch($channel) {
		case 'talktv':			
			$doc = new DomDocument();
			$doc->loadHTMLFile('http://talktv.vn/'.$id);
			//status
			$thediv = $doc->getElementById('stream-status-live');
			$status =  trim($thediv->textContent);
			if ($status == 'Đang phát') $status = 'live';
			else $status = 'offline';
			//view
			$thediv = $doc->getElementById('player-viewing-count');
			$view = trim($thediv->textContent);
			//title
			$thediv = $doc->getElementById('broadcast-title');
			$title = trim($thediv->textContent);
							
			break;

		case 'youtube':
			$view = file_get_contents('https://www.youtube.com/live_stats?v='.$id); //get view

			$content = file_get_contents('https://www.googleapis.com/youtube/v3/videos?id='.$id.'&key=%20AIzaSyBMYMSfAJMqIQTm4B_kCIkyKjA7J4aZ5W4&fields=items&part=snippet');
			$return = json_decode(json_decode(json_encode($content), true), true); //the fucking object ever
			$title = $return['items'][0]['snippet']['title'];
			$status = $return['items'][0]['snippet']['liveBroadcastContent'];
			if ($status != 'live') $status = 'offline';

			break;

		default:
			exit();
			break;	
	};

	$object['id'] = $id;
	$object['title'] = $title;
	$object['islive'] = $status;
	$object['view'] = $view;	
	$object = json_encode($object);
	echo $object;
?>