<? get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<section class="col-xs-12 col-sm-12 col-med-12 col-lg-9">
				<div class="mod-content">
					<? while ( have_posts() ) { 
						the_post(); 
					?>
					
					<header id="header">
						<h1 class="page-title">404 &mdash; Page Cannot Be Found...</h1>
					</header>
					
					<section id="body">
						<h2>Now this is embarassing!</h2>
						<p>The content you are looking for cannot be found at this time!</p>
					</section>
					<? 
					
					} 
					
					wp_reset_postdata();	
						
					?>  
				</div>
			</section>
			
			<? get_sidebar(); ?>
			
		</div>
	</div>
</div>

<? get_footer(); ?>