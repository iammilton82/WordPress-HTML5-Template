<?
/* Template Name: Blog Template */
?>

<? get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<section class="col-xs-12 col-sm-12 col-med-12 col-lg-9">
				<div class="mod-content">
					  
					<? 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts('posts_per_page=8&paged=' . $paged);
					if ( have_posts() ) 
					{
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