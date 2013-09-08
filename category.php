<?
/* Category Template */

get_header(); 

?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<section class="col-xs-12 col-sm-12 col-med-12 col-lg-9">
				<div class="mod-content">
					
					<? 
					if ( have_posts() ) 
					{ 
					?>  
						<header id="header">
							<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'twentythirteen' ), single_cat_title( '', false ) ); ?></h1>
						</header>					  
					<? 
						get_template_part( 'snippet-blogloop', 'none' );
					} else {
						
						echo "<div>No posts available.</div>";
						
					}
					?>
					  
				</div>
			</section>
			
			<? get_sidebar(); ?>
			
			
		</div>
	</div>
</div>

<? get_footer(); ?>