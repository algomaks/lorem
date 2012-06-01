<!DOCTYPE html> 
<html>
<head>
	
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="description" content=""/>
	<meta name="keywords" content=""/>
	
    <link rel="stylesheet" href="css/global.css" type="text/css" media="all" />
    <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    
    
    
</head>
<body>

<div id="page">

<div id="header">

	<h1>Lorem</h1>

	<div id="logo"></div>
	
	<div class="clear"></div>

</div> <!-- header -->


<?php ?>

<?php echo $content_for_layout ?>


<?php ?>



</div> <!-- page -->

<div id="footer">

<?php if (!empty($currentUser)): ?>
		<a href="#" onclick="FB.logout(function(response) {window.location.reload()});">Logout2</a>
	<?php else: ?>
		<fb:login-button perms="publish_stream, create_event, email"></fb:login-button>
	<?php endif; ?>

	

    <div id="fb-root"></div>
    <script>
		window.fbAsyncInit = function() {
			FB.init({
				appId: '<?php echo $fbAppId; ?>',
				cookie: true,
				xfbml: true,
				oauth: true
			});
			FB.Event.subscribe('auth.login', function(response) {
				window.location.reload();
			});
			FB.Event.subscribe('auth.logout', function(response) {
				window.location.reload();
			});
		};
		(function() {
			var e = document.createElement('script'); e.async = true;
			e.src = document.location.protocol +
				'//connect.facebook.net/en_US/all.js';
			document.getElementById('fb-root').appendChild(e);
		}());
    </script>

<ul>
<li><a href="contact.php">Contact</a></li>
<li><a href="about.php">About Sociomaps</a></li>
</ul>

</div> <!-- footer -->


</body>
</html>