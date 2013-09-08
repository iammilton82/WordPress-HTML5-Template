<aside id="sidebar" class="col-xs-12 col-sm-12 col-med-12 col-lg-3">
	<ul>
		<? 	
			if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) :
				// if no sidebar, show latest 3 blog articles
				query_posts('posts_per_page=3');
				if ( have_posts() ) : 
					echo "<ul id='articles'>";
					while ( have_posts() ) : the_post();		  
				?>
				<li class="article">
					<div class="post-info">
						<div class="post-date"><? the_date('l F, d, Y')?></div>
					</div>
					
					<div class="clearfix"></div>
					
					<header class="post-header">
						<h1><a href="<? the_permalink() ?>"><? the_title() ?></a></h1>
					</header>
	
					<div class="clearfix"></div>
	
				</li>
				<?	  
					endwhile;
					echo "</ul>";
				endif;
				
				
				// display list of blog categories
				wp_list_categories(array(
				'orderby' => 'name', // alphabetical
				'order' => 'ASC', // starting at A
				'show_count' => 1, // do NOT show # of posts per cat
				'depth' => 0 // levels deep to go down cat tree
				));
				
					  
		
		<? endif; ?>
	</ul>
</aside>
