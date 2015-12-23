<!doctype html>
<html>
	<head>
		<meta charset=utf-8>
		
		<title><?=isset($title)?$title." - Dota2VN Bet Group":"Dota2VN Bet Group - Dota2vn Wikiperama"?></title>
		<meta name='description' content='<?=isset($description)?$description:"dota2vn bet group - cộng đồng người chơi dota2 tại việt nam và các trắng dái bet thủ"?>' /> 
		<meta name='keywords' content="đéo, cần, keywords"> 
		
		<link rel="shortcut icon" type="image/x-icon" href="/favicon.png">
		<link rel='stylesheet' href='/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' href='/css/green.css' type='text/css' media='all' />
		<link rel='stylesheet' href='/css/qtip.css' type='text/css' media='all' />
		<link rel='stylesheet' href='/css/fancybox.css' >
		<script type='text/javascript' src='/js/jquery.js'></script>
		<script type='text/javascript' src='/js/qtip.js'></script>
		<script type='text/javascript' src='/js/js.js'></script>
		<script type='text/javascript' src='/js/upl1.js'></script>
		<script type='text/javascript' src='/js/upl2.js'></script>
		<script type='text/javascript' src='/js/fancybox.js'></script>
		<script src='/js/chart.js'></script>
		<script src='https://www.google.com/recaptcha/api.js' async></script>
		<script type='text/javascript'>
			$(document).ready(function() {
				$('.popup').fancybox({
					fitToView	: true,
					autoSize	: true,
					closeClick	: false,
					
					openEffect	: 'elastic',
					closeEffect	: 'elastic'
				});
				$('.popup_modal').fancybox({
					modal	: true, 
					width   : '100%',
					height  : '100%',
					fitToView	: true,
					autoSize	: false,
					closeClick	: false,
					
					openEffect	: 'elastic',
					closeEffect	: 'elastic'
				});
			});
		</script>

	</head>
	<body  onload='onloadpage()' ><div class='menu' style='text-align:left; width:1024px; padding-bottom: 2px;'>
		[ <a href='/'>home</a> ]&nbsp;&nbsp;
		[ <a href='/faq' class=''>faq</a> ]&nbsp;&nbsp;
		[ <a href='/stream' class='WhiteText stream-icon'>streaming</a> ]&nbsp;&nbsp;
		[ <a href='/donate' class='YellowTextGold'> donate</a> ]&nbsp;&nbsp;
		
		<!--float right-->
		<span class="menu-stats" style="float: right">
		<span class='YellowText'>drama:</span> <span class='RedText'>24 650</span>&nbsp;&nbsp;&nbsp;&nbsp;
		<div class='menu_icon'>
			<a title='facebook' href='https://www.facebook.com/groups/Dota2VnBetGroup/' target='_Blank'>
				<img src='/img/fb.png' alt='Facebook'>
			</a>
		</div> 
		<div class='menu_icon'>
			<a title='twitter' href='#' target='_Blank'>
				<img src='/img/tw.png' alt='Twitter '>
			</a>
		</div> 
		<div class='menu_icon'>
			<a title='google plus' href='#' target='_Blank'>
				<img src='/img/gp.png' alt='Google Plus'>
		</a></div> 
		<div class='menu_icon'>
			<a title='rss' href='#' target='_Blank'>
				<img src='/img/rss.png' alt='RSS Channel'>
			</a></div> &nbsp;
		<div class='menu_icon'>
			<a title='site map' href='#'>
				<img src='/img/sitemap_green.png' alt='Sitemap'>
			</a>
		</div> 
		</span>
	</div><div class='content'>
		<div class='head_auth'>
				<div class='menu_icon'><img src='/img/lock.png'></a></div> 
				[ <a href='/auth' class='RedText'>authorization</a> ] 
				[ <a href='/reg' class='RedText'>registration</a> ] 
				[ <a href='/restore' class='RedText'>restore account</a> ] 
			</div>
			<div class='head_contacts RedText'>
				<a href='#contacts_popup' class='popup'>
				Contact us: 
				<img src='/img/skype.png'>
				<img src='/img/jabber.png'>
				<img src='/img/mail.png'>
				</a>
			</div>
			<div id='contacts_popup'>
				<div class='category_text strong'><span class='RedText'>You can contact us by:</span> </div>
				<div class='popup_contacts_page'>
					<div class='popup_contacts_items popup_contacts_mail'>
						<div class='popup_contacts_items_title YellowText'>Mail:</div> 
						<div class='popup_contacts_items_text'><a href='mailto:mr.inj3ct0r@gmail.com'>null</a></div> 
					</div>
					<div class='popup_contacts_items popup_contacts_skype'>
						<div class='popup_contacts_items_title YellowText'>Skype:</span></strong></div> 
						<div class='popup_contacts_items_text'>null</div> 
					</div>
					<div class='popup_contacts_items popup_contacts_fb'>
						<div class='popup_contacts_items_title '>Facebook:</span></strong></div>  
						<div class='popup_contacts_items_text'><a href='#' target='_blank'>null</a></div> 
					</div>
					<div class='popup_contacts_items popup_contacts_twitter'>
						<div class='popup_contacts_items_title '>Twitter:</span></strong></div>  
						<div class='popup_contacts_items_text'><a href='#' target='_blank'>null</a></div> 
					</div>
				</div>
			</div>
			
			
				<div class='head'>
					<div class='double_spacer'></div>
					<div class='double_spacer'></div>
					<img src='/img/logo_black.png' alt='dota2vn bet group'>
					<img src="/img/dota2tournament.png" alt='for dota2 champion ship viet nam' />
					<div class='double_spacer'></div>
					<div class='SmallYellowText'>
						Dota2vn Bet Group - Cộng đồng kỳ diệu giúp bạn có thể mua bugati, lamborghini, hay trắng dái một cách đơn giản nhất.
				<br />Bạn sẽ mở rộng tẩm hiểu biết, khả năng tổ lái, cứu post, nhận được thông tin "người thân" bởi những thánh tìm.
				<br />Tăng khả năng hiểu biết hơn về lịch sử cũng như tương lai và hiện tại bởi những nhân vật như #S, Anh Hoang,...
				<br />Và quan trọng nhất là có một cộng đồng vui vẻ, bựa vkl để chia sẻ tâm sự. dm lol , dm garena  // daudau
					</div>
					<div class='double_spacer'></div>
				</div>