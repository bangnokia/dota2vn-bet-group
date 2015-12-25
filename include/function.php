<?php
	include('config.php');
	
    function notfound() {
        echo "<script>window.location='404.php'</script>";
    }

    //printf post from json
    function loop_post($posts) {
    	foreach ($posts as $post) { ?>
    		<div class='ExploitTableContent'>
				<div class='td'><a href='#'><?=$post['date']?></a></div>
				<div class='td<?php if($post['categories'][0]['slug'] == 'drama') echo ' RedText'; ?>'>
					<h3><a href='/detail/<?=$post['slug']?>'><?=$post['title']?></a></h3>
				</div>
				<div class='td hit'>6969</div>
				<div class='td'>
					<?php
						foreach ($post['tags'] as $tag) { ?>
							<span class='tag'><a href='/tag/<?=$tag['slug']?>'><?=$tag['title']?></a></span>,
					<?php } ?>		
				</div>
				<div class='td'>
					<a href='/author/<?=$post['author']['slug']?>'><?=$post['author']['nickname']?></a>
				</div>
			</div>
    	<?php
    	}
    }
    	
?>