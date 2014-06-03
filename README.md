hardyantz-jquery-nested-comment
===============================

hardyantz jquery nested comment, easily to create inifinty nested comment. easily to install and modified.
using bootstrap and jquery.


options
========
title: <title for your comment>,
url_get: <get url in json format>,
url_submit: <submit url json format, return response => true>,


how to use 
==========

include this file :
javascript  => 
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-comment.js"></script>

css =>
<link rel="stylesheet" href="css/bootstrap.min.css">


Example
========

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


License
=======
This project is licensed under the terms of the MIT license.

		
