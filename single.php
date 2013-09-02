<? get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<div class="col-xs-12 col-sm-12 col-med-12 col-lg-12">
				<div class="mod-content">
					<? while ( have_posts() ) : the_post(); ?>
					<header id="header">
						<h1 class="page-title"><a href="/blog">Blog</a></h1>
					</header>
					<section id="body">
						<h2><a href="<? the_permalink() ?>"><? the_title(); ?></a></h2>
						<? the_content(); ?>
						
						<p>&nbsp;</p>
						
						<p><a href="/blog">&laquo; Back to the Blog</a></p>
						
					</section>
					
					
                    <div id="comments-container">
                    	<h2>Comments <em class="comments-number"><?=get_comments_number();?></em></h2>
                    	<?php comments_template( '', true ); ?>
                    </div>

					<? endwhile; ?>  
				</div>
			</div>
		</div>
	</div>
</div>

<? get_footer(); ?>