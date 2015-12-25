<?php
	$title = "streaming zone";
	$description = 'khu vực dành cho việc xem stream sao cho tiện lợi nhất cho anh em và cộng đồng dota2vn và dota2vn bet group';
	include('header.php');
?>

<h1 class="RedText">streaming zone</h1>
<div class="SmallYellowText">Mọi đóng góp về thêm channel hay gì đó xin các bạn đóng góp bằng cách nhấn vào nút report cuối trang</div>
<div class="double_spacer"></div>

<h3 id='stream-title'>null =))</h3>
<div class="spacer"></div>

</div> <!--/close content div-->
<div id='stream-screen'>
	<iframe id='stream-watch' scrolling='no' src='http://talktv.vn/streaming/play/embed/pewpewvn' height='400' width='650'></iframe>
	<iframe id='stream-chat' scrolling='no' src='http://talktv.vn/streaming/chat/embed/pewpewvn' height='400' width='345'></iframe>	
</div>

<!--/reopen contetn div-->
<div class="content">
<div class="spacer"></div>
<div class="stream-action"><button class='button btnHideChat'>hide chat</button></div>


<div class="cold-half" style="width: 75%;">
	<!-- table streaming -->
	<h4 class="YellowText">-::list stream</h4>
	<table id='stream-table' class='table-stream'>
		<tr data-stream-channel='talktv' data-stream-id='lzstudio'>
			<td class="order" id='order-lsztudio'>1</td>
			<td id='name-lzstudio'><img src='/img/talktv.png' /> lzstudio</td>
			<td id='title-lzstudio'></td>
			<td id='status-lzstudio'></td>
			<td id='view-lzstudio'></td>
		</tr>
		<tr data-stream-channel='talktv' data-stream-id='pewpewvn'>
			<td class="order" id='order-pewpewvn'>2</td>
			<td id='name-pewpewvn'><img src='/img/talktv.png' /> pewpew studio</td>
			<td id='title-pewpewvn'></td>
			<td id='status-pewpewvn'></td>
			<td id='view-pewpewvn'></td>
		</tr>
		<tr data-stream-channel='talktv' data-stream-id='pota'>
			<td class="order" id='order-pota'>3</td>
			<td id='name-pota'><img src='/img/talktv.png' /> #pota luong</td>
			<td id='title-pota'></td>
			<td id='status-pota'></td>
			<td id='view-pota'></td>
		</tr>
		<tr data-stream-channel='youtube' data-stream-id='5QmuoNfge9Y'>
			<td class="order" id='order-5QmuoNfge9Y'>3</td>
			<td id='name-5QmuoNfge9Y'><img src='/img/youtube.png' /> esv tv</td>
			<td id='title-5QmuoNfge9Y'></td>
			<td id='status-5QmuoNfge9Y'></td>
			<td id='view-5QmuoNfge9Y'></td>
		</tr>
		<tr data-stream-channel='twitch' data-stream-id='beyondthesummit'>
			<td class="order" id='order-beyondthesummit'>4</td>
			<td id='name-beyondthesummit'><img src='/img/twitch.png' /> beyondthesummit</td>
			<td id='title-beyondthesummit'></td>
			<td id='status-beyondthesummit'></td>
			<td id='view-beyondthesummit'></td>
		</tr>
		<tr data-stream-channel='twitch' data-stream-id='dendi'>
			<td class="order" id='order-dendi'>4</td>
			<td id='name-dendi'><img src='/img/twitch.png' /> den<strong class='RedText'>dick</strong></td>
			<td id='title-dendi'></td>
			<td id='status-dendi'></td>
			<td id='view-dendi'></td>
		</tr>
	</table>
	<!-- end table streaming -->
	
	<!-- multi stream -->
	<h4>extra multi stream in 1 screen (up to unlimited) 1 link 1 line: </h4>
	<form action="/multistream" target="_blank" method="post">
		<textarea class='multistream-list' name="MultiStreamLinks" id="" cols="30" rows="10" placeholder='<iframe scrolling="no" src="http://talktv.vn/streaming/play/embed/daudau" height="376" width="622"></iframe>'></textarea>
		<button class="button" type="submit">enjoy</button>
	</form>
</div>

<!-- table schedule -->
<div class="cold-half" style="width: 25%;">
	<h4 class="YellowText">-::schedule fight</h4>
	<table id='schedule-table' class='table-stream'>
		<tr>
			<td>1</td>
			<td><img src='/img/talktv.png' /> talk tv</td>
			<td> - </td>
			<td><img src='http://dist.alternativeto.net/icons/youtube_72204.png?width=12&height=12&mode=crop&anchor=middlecenter' /> youtube</td>
			<td>live</td>
		</tr>
		<tr>
			<td>in working</td>
		</tr>
	</table>
</div>

<div class="clear"></div>



<!-- dit me choi full js luon, ke me cac ong =)) -->
<script src="/js/stream.js"></script>
<?php include('footer.php'); ?>