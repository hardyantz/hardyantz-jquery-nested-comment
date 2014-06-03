<html>
<head>
<title>Hardyantz - Jquery Nested Comment</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-comment.js"></script>
</head>
<body>
<div class="comment-container"></div> 
<script type='text/javascript'>
$(document).ready(function() {
	$('div.comment-container').comment({
        title: 'The Comments',
        url_get: 'read.php',
		url_submit: 'submit.php'
		
	});
});
</script>
</body>

</html>