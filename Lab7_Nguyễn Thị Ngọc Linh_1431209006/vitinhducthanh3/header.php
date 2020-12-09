<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
		<?php wp_head() ?>
		<link rel="icon" href="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/logo.ico" type="image/png">
	</head>
	<body data-rsssl=1 class="page-template-default page page-id-7">
		<header>
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-5">
							<a href="https://www.vitinhducthanh.com">
								<div class="media logo-groups">
									<img src="https://www.vitinhducthanh.com/wp-content/themes/ducthanh/images/logo.png" class="mr-3" alt="Vi tính - laptop - camera Đức Thành">
									<div class="media-body">
										<h5 class="mt-0">VI TÍNH - LAPTOP - CAMERA</h5>
										<p>ĐỨC THÀNH</p>
									</div>
								</div>
							</a>
						</div>
						<div class="col-12 col-md-3">
							<form action="https://www.vitinhducthanh.com" method="GET">
								<div class="input-group search-groups">
									<input type="text" class="form-control" name="s" placeholder="Nhập từ khóa">
									<div class="input-group-append">
										<button class="btn btn-outline-secondary" type="submit">Tìm</button>
									</div>
								</div>
							</form>
						</div>
						<div class="col-12 col-md-4 righ-logo-groups">
							<div class="righ-logo">
								<i class="fa fa-phone"></i> <a href="tel:0969609639"><b>0969.609.639</b></a> - Mr. Đức						
							</div>
							<div>
								<i class="fa fa-clock-o"></i> Mở cửa từ 8h - 19h các ngày trong tuần
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="bottom-header">
				<div class="container">
					<div class="row">
						<!-- <div class="col-12 col-md-4">
							<div class="title-menu-groups">
								<i class="fas fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
							</div>
							<div class="menu-groups">
													</div> -->
						<!-- &nbsp; -->
						<!-- </div> -->
						<div class="d-none d-md-block col-md-8 offset-md-4">
							<!-- <div class="left-menu">
								<ul id="menu-top-menu" class="left-menu">
									<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-12"><a href="https://www.vitinhducthanh.com/">Trang chủ</a></li>
									<li id="menu-item-14" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-7 current_page_item menu-item-14"><a href="https://www.vitinhducthanh.com/gioi-thieu" aria-current="page">Giới thiệu</a></li>
									<li id="menu-item-46" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-46"><a href="https://www.vitinhducthanh.com/./tin-tuc">Tin tức</a></li>
									<li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13"><a href="https://www.vitinhducthanh.com/bao-hanh">Bảo hành</a></li>
									<li id="menu-item-15" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-15"><a href="https://www.vitinhducthanh.com/lien-he">Liên hệ</a></li>
								</ul>
							</div> -->

							<?php wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_class' =>'left-menu',
									'menu-id' => 'menu-top',
									'container' => 'div',
									'container_class' => 'div',
								)
							); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-4 menu-position">
						<div class="title-menu-groups mobile-show d-block d-md-none">
							<i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
						</div>
						<div class="title-menu-groups d-none d-md-block">
							<i class="fa fa-align-justify mgr-5"></i> <span>DANH MỤC SẢN PHẨM</span>
						</div>
						<div class="menu-groups">
							<!-- <ul id="menu-main-menu" class="main-menu">
								<li id="menu-item-31" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-31">
									<a href="https://www.vitinhducthanh.com/./laptop">Laptop</a>
									<ul class="sub-menu">
										<li id="menu-item-90" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-90"><a href="https://www.vitinhducthanh.com/./laptop/laptop-moi">Laptop mới</a></li>
										<li id="menu-item-89" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-89"><a href="https://www.vitinhducthanh.com/./laptop/laptop-cu">Laptop cũ</a></li>
									</ul>
								</li>
								<li id="menu-item-33" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-33">
									<a href="https://www.vitinhducthanh.com/./may-bo">Máy bộ</a>
									<ul class="sub-menu">
										<li id="menu-item-92" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-92"><a href="https://www.vitinhducthanh.com/./may-bo/may-bo-moi">Máy bộ mới</a></li>
										<li id="menu-item-91" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-91"><a href="https://www.vitinhducthanh.com/./may-bo/may-bo-cu">Mãy bộ cũ</a></li>
									</ul>
								</li>
								<li id="menu-item-32" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-32">
									<a href="https://www.vitinhducthanh.com/./man-hinh">Màn hình</a>
									<ul class="sub-menu">
										<li id="menu-item-112" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-112"><a href="https://www.vitinhducthanh.com/./man-hinh/man-hinh-moi">Màn hình mới</a></li>
										<li id="menu-item-111" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-111"><a href="https://www.vitinhducthanh.com/./man-hinh/man-hinh-cu">Màn hình cũ</a></li>
									</ul>
								</li>
								<li id="menu-item-17" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-17">
									<a href="https://www.vitinhducthanh.com/./linh-kien">Linh kiện</a>
									<ul class="sub-menu">
										<li id="menu-item-22" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-22"><a href="https://www.vitinhducthanh.com/./linh-kien/mainboard">Mainboard</a></li>
										<li id="menu-item-20" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-20"><a href="https://www.vitinhducthanh.com/./linh-kien/bo-vi-xu-ly-cpu">Bộ vi xử lý &#8211; CPU</a></li>
										<li id="menu-item-19" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-19"><a href="https://www.vitinhducthanh.com/./linh-kien/bo-nho-ram">Bộ nhớ RAM</a></li>
										<li id="menu-item-24" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-24"><a href="https://www.vitinhducthanh.com/./linh-kien/o-cung-ssd-hdd">Ổ cứng SSD &#8211; HDD</a></li>
										<li id="menu-item-21" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-21"><a href="https://www.vitinhducthanh.com/./linh-kien/card-do-hoa-vga">Card Đồ họa &#8211; VGA</a></li>
										<li id="menu-item-18" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-18"><a href="https://www.vitinhducthanh.com/./linh-kien/bo-nguon-psu">Bộ nguồn &#8211; PSU</a></li>
										<li id="menu-item-27" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-27"><a href="https://www.vitinhducthanh.com/./linh-kien/vo-may-tinh-case">Vỏ máy tính &#8211; CASE</a></li>
										<li id="menu-item-26" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-26"><a href="https://www.vitinhducthanh.com/./linh-kien/quat-tan-nhiet-fan-led">Quạt tản nhiệt &#8211; FAN LED</a></li>
										<li id="menu-item-25" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-25"><a href="https://www.vitinhducthanh.com/./linh-kien/phu-kien">Phụ kiện</a></li>
										<li id="menu-item-23" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-23"><a href="https://www.vitinhducthanh.com/./linh-kien/may-in">Máy in</a></li>
									</ul>
								</li>
								<li id="menu-item-30" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-30"><a href="https://www.vitinhducthanh.com/./gears">GEARS</a></li>
								<li id="menu-item-28" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-28"><a href="https://www.vitinhducthanh.com/./ban-ghe-gaming">Bàn ghế Gaming</a></li>
								<li id="menu-item-29" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-29"><a href="https://www.vitinhducthanh.com/./camera">Camera</a></li>
							</ul> -->

							<?php  
								wp_nav_menu(
										array(
											'theme_location' => 'catagories-menu',
											'menu_class' =>'main-menu',
											'menu-id' => 'menu-main-menu',
										)
								);
							?>
						</div>
					</div>
				</div>
			</div>
		</header>