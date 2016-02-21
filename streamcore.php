<?php
	if (isset($_GET['action'])) 
	{
		$action = $_GET['action'];
		if ($action == 'multistream') {
			header("X-XSS-Protection: 0");

			$links = trim($_POST['MultiStreamLinks']);
			$links = explode(PHP_EOL, $links);
			$total = count($links);
			if ($total == 1) exit('con cec');
			$cell_number = 0;

			$total_root =  sqrt($total);
			$total_ceil = ceil($total_root);
			$total_floor = floor($total_root);
			//echo $total_root.'-'.$total_ceil.'-'.$total_floor;
			if ($total_ceil == $total_floor) $cell_number = $total;
			else if ($total_ceil*$total_floor >= $total) $cell_number = $total_floor*$total_ceil;
			else $cell_number = $total_ceil*$total_ceil;
			if ($cell_number < 4) $cell_number = 4;

			//echo $cell_number;
			$width = 100/ceil(sqrt($cell_number));
			$height = 100/floor(sqrt($cell_number));
			?>
			<title>Multi stream - dota2vn bet group</title>
			<style type="text/css">
				body {padding:0; margin:0;}
				div {float: left; margin: 0; padding: 0}
				iframe{width:100%; height: 100%}
			</style>
			<?php 
			foreach($links as $link) {
				echo "<div style='height: ".$height."%; width: ".$width."%'>".$link."</div>";
			}

		}
	} 
	else 
	{
		$channel = $_GET['channel'];
		$id = $_GET['id'];
		$title = '';
		$view = '';
		$status = '';
		$object = array();

		switch($channel) {
			case 'talktv':	
				// enable user error handling
				libxml_use_internal_errors(true);

				$doc = new DomDocument();
				//$doc->loadHTMLFile('http://talktv.vn/'.$id);
				if (!$doc->loadHTMLFile('http://talktv.vn/'.$id)) {
				    foreach (libxml_get_errors() as $error) {
				        // handle errors here
				    }

				    libxml_clear_errors();
				}
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

			case 'twitch':
				$content =  file_get_contents('https://api.twitch.tv/kraken/streams/'.$id);
				$result = json_decode(json_decode(json_encode($content), true), true);
				if ($result['stream'] == null) {
					$status = 'offline';
					$view = '';
				} else {
					$status = 'live';
					$view = $result['stream']['viewers'];
					$title = $result['stream']['channel']['status'];
				}
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

		header('Content-Type: application/json');
		echo $object;
	}
?>