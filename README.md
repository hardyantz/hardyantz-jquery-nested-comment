hardyantz-jquery-nested-comment
===============================

hardyantz jquery nested comment, easily to create inifinty nested comment. easily to install and modified.
using bootstrap and jquery.


options
========
```
title: <title for your comment>,
url_get: <get url in json format>,
url_submit: <submit url json format, return response => true>,
```

how to use 
==========

include this file :
```
javascript  => 
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-comment.js"></script>

css =>
<link rel="stylesheet" href="css/bootstrap.min.css">
```

Example
========
```
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
```
Get JSON Example
```
{

    "comment_id": 1,
    "comment_content": "hello world, this is the content",
    "comment_author": "admin",
    "comment_date": "2014-06-1 08:10:15",
    "imgurl": "https:<image>.jpeg"

}
```


License
=======
This project is licensed under the terms of the MIT license.

		
