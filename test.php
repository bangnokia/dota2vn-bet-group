<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script  src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
		$(document).ready(function() {
			$.ajax({
			    url: 'http://talktv.vn/lzstudio',
			    crossOrigin: true,
			    type: 'POST',
			    //dataType: 'jsonp',
			    success: function(res) {
			        console.log(res);
			    },
			    error: function(res, status, error) {
			    	console.log(res);
			    	console.log(status);
			    	console.log(error);
			    }

			});
		})
	</script>
</head>
<body>
	
	<div id='result'></div>
</body>
</html>
