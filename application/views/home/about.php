<?php $this->load->view('template/headerHome'); ?>
<!-- Home -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!-- <div class="home">
	
	Home Slider

	<div class="home_slider_container">
		
		<div class="owl-carousel owl-theme home_slider">

			Slider Item
			<div class="owl-item home_slider_item">
				
				<div class="home_slider_background" style="background-image:url(images/about_background.jpg)"></div>

				<div class="home_slider_content text-center">
					<div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
						<h1>Daftar</h1>
						<h1>Pegawai</h1>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div> -->
	<!-- Begin page content -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<h2 class="section_title">Daftar Hotel</h2>
				</div>
			</div>
			<div class="row offers_items">

<?php foreach ($gambar as $gbr) { ?>

				<!-- Offers Item -->
				<div class="col-lg-6 offers_col">
					<div class="offers_item">
						<div class="row">
							<div class="col-lg-6">
								<div class="offers_image_container">
									<!-- Image by https://unsplash.com/@kensuarez -->
									<div class="offers_image_background" style="background-image:url(<?php echo base_url().'assets/hotel/'. $gbr->gambar_hotel ?>)"></div>
									<div class="offer_name"><a href=""><?php echo $gbr->nama_hotel ?></a></div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="offers_content">
									<div class="offers_price">Rp. <?php echo $gbr->harga_hotel ?>,-</div>
									<div class="">
										<i></i>
										<i></i>
										<i></i>
										<i></i>
										<i></i>
									</div>
									<p class="offers_text"><pre>Alamat: <?php echo $gbr->alamat_hotel?></pre></p>
									<p class="offers_text"><pre>Fasilitas: <?php echo $gbr->fasilitas_hotel?></pre></p>
							
									<div class="offers_icons">
										<ul class="offers_icons_list">
										
											<li class="offers_icons_item"><img src="images/suitcase.png" alt=""></li>
										
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
			</div>
			<?php 
				if(isset($links))
				{
					echo $links;
				}
			 ?>
		</div>
	</div>

<?php $this->load->view('template/footerHome'); ?>