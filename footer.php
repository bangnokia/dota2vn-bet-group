<div class='spacer'></div>
<div class='center'>
	<div class='border padding_2'>
		Exploits in [ December ]: <span class='RedText'>38</span>&nbsp; Critical: <font color='#FF0000'>5</font> High: <font color='#FFBF00'>15</font> Medium: <font color='#FFFF00'>18</font> Low: <font color='green'>0</font> &nbsp;&nbsp;&nbsp;
	</div>
	<div class='spacer'></div>
<!--google analytics-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-37232412-14', 'auto');
  ga('send', 'pageview');
</script>
<!--end google analytics-->

<!-- facebooka app -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1657393487869073',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- end facebook app -->

<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,3269595,4,1034,150,25,00001000']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('http://s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?3269595&101" alt="advanced web statistics" border="0"></a></noscript>
<!-- Histats.com  END  -->

	<div class='footer'>
		<div id='qtip-growl-container'></div>
<!-- 		<audio id='audio_receive_message' src='/receive_msg.mp3'></audio> -->
		
		<div class="footer-left">
			<h2><a href='/'>Dota2vn Bet Group | Dota2 Vietnam Comunication</a></h2> Store information about dota2 vn (drama, funny, legend,...)
			<br>Send all submissions to <a href='mailto:#'>not-now-available@gmail.com</a>
			<br /> Copyright &copy; 2015 <a href='/'>//daudau</a>
		</div>

		<div class="footer-right">
			<!-- Histats.com  (div with counter) --><div id="histats_counter"></div>
			<div class='bugs' onclick='popup("popup_error")'></div>
		</div>
		
		<div class='spacer'></div>
	</div>
</div>

<!--contact msg -->
<div class='popup_error' id='popup_error_div'>
	<a href='#popup_error_div' class='popup' id='popup_error'>&nbsp;</a>
	<div class='exploit_title'>
		<h1 class='YellowText'>Report to us</h1></div>
	<form name='auth' method='post' class='error_form' action='/' id="report-form">
		<div class='reg_line'>
			<label><strong>Nội dung</strong></label>
			<br>
			<textarea name='entry.1795961158' required></textarea>
		</div>
		<div class='reg_line'>
			<div class="g-recaptcha" data-sitekey="6LdVyxITAAAAANlOFA8pi-w_zuEDTsaG5yDuK78F"></div>
		</div>
		<div class='reg_line'>
			<input type='hidden' name='error_submit'>
			<button type='submit' name='error_submit' class='button'>Submit</button
		</div>
	</form>
</div>


<div class='popup_error' id='report_error_finish_div'>
	<a href='#report_error_finish_div' class='popup' id='popup_error_finish'>&nbsp;</a>
	<div class='error_form'>
		Thank you for your report, necessary we will contact you if you put your information in content!
	</div>
</div>

<script>
	var form = $('#report-form');
	function submitError() {
		$.post('https://docs.google.com/forms/d/1GSjOYApLbTXZw3xNtuD56O2V_25eigS5jr1l_K9HNgA/formResponse', form.serialize())
			.done(function() {
				$('#report_error_finish_div').show(300);
			})
			.fail(function() {
				$('#report_error_finish_div').show(300);
			})
	}
	$(document).ready(function() {
		form.submit(function(e) {
			e.preventDefault();
			var res = grecaptcha.getResponse();
			if (res.length == 0) {
				alert('error')
			}
			else {
				submitError();
			}
		})
	})
</script>
</body>

</html>