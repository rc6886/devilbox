<nav class="navbar navbar-full footer navbar-dark bg-inverse">
	<div class="container">
		<p class="text-muted">Render time: <?php echo round((microtime(true) - $TIME_START), 2); ?> sec</p>
	</div>
</nav>
<?php my_mysqli_close($GLOBALS['MY_MYSQL_LINK']); ?>

<?php /*
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="/vendor/jquery/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/vendor/bootstrap/bootstrap.min.js"></script>
*/
?>
