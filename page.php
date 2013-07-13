<? get_header(); ?>

<div id="content">
	<div class="container">
		<div class="row-fluid">
			<div class="span8">
				<div class="mod-content">
					<? while ( have_posts() ) : the_post(); ?>
					<header id="header">
						<h1 class="page-title"><? the_title(); ?></h1>
					</header>
					<section id="body">
						<? the_content(); ?>
					</section>
					<? endwhile; ?>  
				</div>
			</div>
		</div>
	</div>
</div>

<? get_footer(); ?>