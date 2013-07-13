<?
/* Template Name: Blog Template */
?>

<? get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<div class="span7">
				<div class="mod-content">
					  
					<? 
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					query_posts('posts_per_page=5&paged=' . $paged);
					if ( have_posts() ) : 
					echo "<ul id='articles'>";
					while ( have_posts() ) : the_post();		  
					?>
					<li class="article">
						<div class="post-info">
							<div class="post-date"><? the_date('l, F j, Y')?></div>
							<div class="comments">Comments: <?=get_comments_number()?></div>
						</div>
						
						<div class="clearfix"></div>
						
						<header class="post-header">
							<h1><a href="<? the_permalink() ?>"><? the_title() ?></a></h1>
						</header>

						<div class="clearfix"></div>

						<section class="excerpt">
							<? the_excerpt() ?>
						</section>

						<div class="clearfix"></div>

						<footer class="post-footer">
							<a href="<? the_permalink() ?>">Keep Reading...</a>
						</footer>
					</li>
					<?	  
					endwhile;
					echo "</ul>";
					endif;	  
					?>
					
					<div id="pagination">
						<div id="newer"><?php previous_posts_link('&laquo; Previous Page', 0) ?></div>
						<div id="older"><? next_posts_link('Next Page &raquo;', 0); ?></div>
					</div>  
					  
				</div>
			</div>
		</div>
	</div>
</div>

<? get_footer(); ?>