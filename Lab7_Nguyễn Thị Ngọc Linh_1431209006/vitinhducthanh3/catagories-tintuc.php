<?php get_header() ?>
		</nav>
		<nav aria-label="breadcrumb">
			<div class="container">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="https://www.vitinhducthanh.com">Trang chủ</a></li>
					<li class="breadcrumb-item active" aria-current="page">Tin tức</li>
				</ol>
			</div>
		</nav>
		<main id="content">
			<div class="container">
				<h1 class="entry-title"><span>Tin tức</span></h1>
				<div class="row san-pham-group">
					<?php
							$ar_array = array(
								'category_name' => 'tintuc',
								'posts_per_page' => 3
							);

							$tintuc = new WP_Query($ar_array);

							//the loop
							while ($tintuc -> have_posts()) {
								$tintuc->the_post();

					?>

					<div class="col-12 col-sm-6 col-md-4">
						<article class="news-item">
							<a href="<?php th_permalink() ?>">
								<div>
									<!-- <img class="img-fluid" src="https://www.vitinhducthanh.com/wp-content/uploads/2020/11/2068314-1024x476.jpg"> -->

									<?php 
										the_post_thumbnail('medium', ['class' => 'img-fluid']);
									?>
								</div>
								<div class="news-sub-title"><?php the_title() ?></div>
							</a>
							<div class="news-excerpt"><?php the_excerpt() ?></div>
							<a class="btn btn-outline-primary" href="https://www.vitinhducthanh.com/tin-tuc/intel-ra-mat-cpu-core-i9-10900k-10-nhan-20-luong-max-5-3ghz.html" role="button">Xem thêm</a>
						</article>
					</div>
					<?php } ?>
				</div>
				<div class="pagination-group">
					<ul class="pagination justify-content-center">
						<li class="page-item disabled">
							<a class="page-link" href="#" tabindex="-1" aria-disabled="true">Trước</a>
						</li>
						<li class="page-item active">
							<a class="page-link" >1</a>
						</li>
						<li class="page-item disabled">
							<a class="page-link" href="#">Sau</a>
						</li>
					</ul>
				</div>
			</div>
		</main>
		<?php get_footer() ?>