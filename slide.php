<div class='slider'>
	<div class='slider_container' id='slidesContainer'>
		<div class='slide'>
			<div class='slider_title'>
				<h2 class='YellowText'><img src='/img/price_tag.png'>&nbsp;Dota2vn Bet Group - website này để làm gì? //who we are.</h2>
			</div>
			<div class='spacer'></div>
			<div class='slide_block'>
				<ol>
					<li><span class='YellowText'>dota2vnbetgroup.com</span> là website đang thực hiện mục tiêu lưu lại những drama và những post có ý nghĩa được thực hiện bởi một thành viên có đam mê trong group, ko phải do <span class='YellowText'>ban quản trị</span>.</li>
				</ol>
			</div>
			<div class='slide_block'>
				<ol start='2'>
					<li>[English version] <span class='YellowText'>dota2vnbetgroup.com</span>, please copy text in (1) and paste to <span class='YellowText'>translate.google.com</span>, im not good at english or you can <a href="https://goo.gl/Tr0cvC" class="YellowText" target="_blank">click here</a></li>
				</ol>
			</div>
			<div class='clear'></div>
		</div>
		<div class='slide'>
			<div class='slider_title'>
				<h2 class='YellowText'><img src='/img/price_tag.png'>&nbsp; Chúng tôi đang rất cần sự đóng góp của các bạn.</h2>
			</div>
			<div class='spacer'></div>
			<div class=''>
				<ol>
					<li>Để lưu lại các <a href="/tag/drama" class='YellowText'>drama</a> của cộng đồng <strong>dota2 việt nam</strong> đây là mục tiêu chính của <span class='YellowText'>dota2vnbetgroup.com</span></li>
					<li>Bạn có thể gửi những bài viết về lịch sử trong drama, thông tin về những nhân vật huyền thoại như #S, Anh Hoang, Son Lambo,... cho chúng tôi để push lên <span class='YellowText'>wikiperama</span>.</li>
					<li>Hỗ trợ và đóng góp về thiết kế lại <span class='YellowText'>logo</span> cho website, về phần giao diện thì chúng tôi có ý nghĩa riêng, đây là vấn đề nhạy cảm ngại thay đổi!</li>
					<li>Các tính năng các bạn thích, đội ngũ sẽ cố gắng code nếu thầy phù hợp cho cộng đồng.</li>
					<li>Hiện tại chỉ như vậy, xin chân thành cảm ơn.</li>
				</ol>
			</div>
			<div style='margin:0px 0px 0px 20px;'>Anytime support for users: [<a href='/contacts' target=_blank>contact admin</a>]</div>
			<div class='clear'></div>
		</div>
	</div>
	<div class='slider_control_right control' id='rightControl'></div>
	<div class='clear'></div>
</div>

<?php
	include('include/config.php');
	//include('include/function.php');
	//get lastest 5 post from drama
	$content = file_get_contents($api_url.'/get_category_posts?slug=changelog&count=5');
	$return = json_decode($content, true);
	$posts = $return['posts'];
?>
<div class="changelog">
	<div class="category_title">
		<h2 style="text-align: left;">[ <a class='YellowText' href='/<?=$return['category']['slug']?>' ><?=$return['category']['title']?></a> ]</h2>
	</div>
	<div class="ExploitTable">
		<div class="ExploitTableHead">
			<div>-::DATE</div>
			<div>-::DESCRIPTION</div>
		</div>
	</div>
	<?php
		foreach ($posts as $post) { ?>
			<div class="ExploitTableContent">
				<div class="td"><a href='#'><?=$post['date']?></a></div>
				<div class="td"><a href='/detail/<?=$post['slug']?>'><?=$post['title']?></a></div>
			</div>
	<?php } ?>
</div>

<div class="clear"></div>
<div class='search_block'>
	<form method='get' action='/search'>
		<span class=''> Search:&nbsp;&nbsp;&nbsp;</span>
		<input type='text' name='search_request' size='30' value='' />&nbsp;&nbsp;&nbsp;
		<input type='submit' name='' class='button indev' value='Search'>
	</form>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.indev').click(function(e) {
			e.preventDefault();
			alert('hiện tại đéo dùng được');
		})
	})
</script>