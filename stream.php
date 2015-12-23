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
<div id='stream-screen'>
	<iframe scrolling='no' src='http://talktv.vn/streaming/play/embed/pewpewvn' height='400' width='650'></iframe>
	<iframe scrolling='no' src='http://talktv.vn/streaming/chat/embed/pewpewvn' height='400' width='345'></iframe>

	<div class="stream-action"><button>close chat</button></div>
</div>

<!-- table streaming -->
<div class="cold-half" style="width: 75%;">
	<h4 class="YellowText">-::list stream</h4>
	<table id='stream-table' class='table-stream'>
		<tr data-stream-channel='talktv' data-stream-id='lzstudio'>
			<td class="order" id='order-lsztudio'>1</td>
			<td id='name-lzstudio'><img src='/img/talktv.png' /> lzstudio</td>
			<td id='title-lzstudio'></td>
			<td id='status-lzstudio'>asdasd</td>
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
			<td id='title-5QmuoNfge9Y'>working</td>
			<td id='status-5QmuoNfge9Y'></td>
			<td id='view-5QmuoNfge9Y'></td>
		</tr>
	</table>
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

<h4>extra multi streaming: </h4><span>coming soon</span>
<div class="clear"></div>


<!-- dit me choi full js luon, ke me cac ong =)) -->
<script src="/js/stream.js"></script>
<?php include('footer.php'); ?>