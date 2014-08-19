	<?php
	/* Grabs current uri to set active link */
	$active_uri = $this->uri->slash_segment(1);
	?>
	
	<!-- navbar
	==================== -->
	<div id="autocollapse" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">BootstrapIgniter</a>
			</div><!-- /navbar-header -->
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav navbar-right">
					<li <?php if($active_uri=="/"){ echo 'class="active"'; } ?>><a href="<?php echo base_url(); ?>">Home</a></li>
				</ul>
			</div><!--/.navbar-collapse -->
		</div><!--/container -->
	</div><!--/navbar-fixed-top -->