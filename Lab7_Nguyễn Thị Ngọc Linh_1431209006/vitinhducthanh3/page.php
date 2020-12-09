<?php get_header() ?>
		</nav>
		<nav aria-label="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://www.vitinhducthanh.com">Trang chủ</a></li>
					<li class="breadcrumb-item active" aria-current="page"><?php wp_title() ?></li>
				</ol>
			</div>
		</nav>
		<main id="content">
			<div class="container">
				<?php 
	               while (have_posts()) {
	                  the_post();
             	?>
		            <article id="post-<?php the_ID();?>" class="post-7 page type-page status-publish hentry">
		               <h1 class="entry-title"><?php the_title();?></h1>
		               <div class="entry-content">
		                  <?php echo get_the_content(); ?>
		               </div>
		            </article>
        		 <?php } ?>
			</div>
		</main>
<?php get_footer() ?>