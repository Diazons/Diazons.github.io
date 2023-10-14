<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<!-- SITE TITLE -->
	<title>Ultra Profile HTML5 Template</title>

	<!-- STYLESHEETS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<link href='//fonts.googleapis.com/css?family=Raleway:400,300,600,700' rel='stylesheet' type='text/css'>
	
<!-- 

Ultra Profile

https://templatemo.com/tm-464-ultra-profile

-->
</head>
<body data-spy="scroll" data-target="#rock-navigation">
	<!-- START NAVIGATION -->
	<div class="navbar navbar-default bs-dos-nav navbar-fixed-top sticky-navigation" role="navigation">
		<div class="container">

			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target="#rock-navigation">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">PROFIL DIAZ</a>
			</div>
			<nav class="collapse navbar-collapse" id="rock-navigation">
				<ul class="nav navbar-nav navbar-right main-navigation text-uppercase">
					<li><a href="#home" class="smoothScroll">halaman utama</a></li>
					<li><a href="#work" class="smoothScroll">Pekerjaan</a></li>
					<li><a href="#porto" class="smoothScroll">PORTOFOLIO</a></li>
					<li><a href="#resumecv" class="smoothScroll">resume</a></li>
					<li><a href="#about" class="smoothScroll">tentang</a></li>
					<li><a href="#contact" class="smoothScroll">kontak</a></li>
				</ul>
			</nav>

		</div>
	</div>
	<!-- END NAVIGATION -->

	<!-- START HOME -->
	<section id="home" class="templatemo-home">
		<div class="container">
			<div class="row">
				<div class="col-md-2 col-sm-1"></div>
				<div class="col-md-8 col-sm-10">
					<h1 class="tm-home-title"><strong>Diaz Nur Muhammad Assayyid</strong></h1>
					<h2 class="tm-home-subtitle">Content Creator</h2>
					<p>Ini adalah desain <strong>Portofolio</strong> saya <strong>Untuk Kebutuhan Matakuliah Pemrograman Web</strong>  Selamat menjelajahi web ini.</p>
					<a href="#work" class="btn btn-default smoothScroll tm-view-more-btn">Mari Mulai</a>
				</div>
				<div class="col-md-2 col-sm-1"></div>
			</div>
		</div>
	</section>
	<!-- END HOME -->

	<!-- START work disini program perulangan untuk portofolio-->
	<section id="work" class="tm-padding-top-bottom-100">
		<div class="container">
			<div class="row">
			<h2 class="tm-portfolio-title">PEKERJAAN</h2>
			<h2 ></h2>
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXo8CA7FCAw99KcB1Up5" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
			<?php
				include("koneksi.php");
				$sql = "SELECT * FROM portofolio";
				$result = mysqli_query($conn, $sql);

				$jmlArtikel = mysqli_num_rows($result);

				if ($jmlArtikel > 0) {
					while($row = mysqli_fetch_assoc($result)){
				?>
				<div class="col-md-4 col-sm-4">
					<div class="work-wrapper">
					<i class=""> <?= $row["ikon"]; ?></i>

						<h3 class="text-uppercase tm-work-h3"><?= $row["judul"]?></h3>
						<hr>
						<p> <?= $row["isi"]; ?></p>
					</div>
				</div>
<?php
}
	}
?>
</div>
		</div>	
	</section> 
	<!-- END work  -->

	<!-- START PORTFOLIO -->
		<section>
				<div class="col-md-12 wow bounce">
					<div class="title" id="porto">
						<h2 class="tm-portfolio-title">PORTOFOLIO</h2>
					</div>
		</section>
					<!-- START ISO SECTION -->
					<div class="iso-section">
						<ul class="filter-wrapper clearfix">
							<li><a href="#" class="opc-main-bg selected" data-filter="*">All</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".graphicdesign">Graphic Design</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".videography">Videography</a></li>
							<li><a href="#" class="opc-main-bg" data-filter=".photography">Photography</a></li>
							<!-- <li><a href="#" class="opc-main-bg" data-filter=".mobile">Mobile</a></li> -->
						</ul>
						<div class="iso-box-section">
							<div class="iso-box-wrapper col4-iso-box">
								<div class="iso-box graphicdesign col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
									<img src="images/designgrafis1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">Graphic Design</h3>
											<p>Ini adalah hasil dari graphic design</p>
										</div>
									</div>
								</div>
								<div class="iso-box graphicdesign col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/designgrafis2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">Graphic Design</h3>
											<p>Ini adalah hasil dari graphic design</p>
										</div>
									</div>
								</div>
								<div class="iso-box photography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/fotografi1.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">PHOTOGRAPHY</h3>
											<p>Ini adalah hasil photography</p>
										</div>
									</div>
								</div>
								<div class="iso-box photography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/fotografi4.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">PHOTOGRAPHY</h3>
											<p>Ini adalah hasil photography</p>
										</div>
									</div>
								</div>
								<div class="iso-box graphicdesign mobile col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/designgrafis4.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">Graphic Design</h3>
											<p>Ini adalah hasil dari graphic design</p>
										</div>
									</div>
								</div>
								<div class="iso-box photography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/fotografi2.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">PHOTOGRAPHY</h3>
											<p>Ini adalah hasil photography</p>
										</div>
									</div>
								</div>
								<div class="iso-box graphicdesign  col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/designgrafis3.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">Graphic Design</h3>
											<p>Ini adalah hasil dari graphic design</p>
										</div>
									</div>
								</div>
								<div class="iso-box videography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
									<iframe width="420" height="315"
									src="https://www.youtube.com/embed/FRDIrzcoNpw?si=uaurgNvy_Dp863gr">
									</iframe>
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">VIDEOGRAPHY</h3>
											<p>Ini adalah hasil videography</p>
										</div>
									</div>
								</div>
								<div class="iso-box videography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
									<iframe width="420" height="315"
									src="https://www.youtube.com/embed/Mw5gxBDZNNQ?si=rmYhXq6ANmvo_kcd">
									</iframe>
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">VIDEOGRAPHY</h3>
											<p>Ini adalah hasil videography</p>
										</div>
									</div>
								</div>
								<div class="iso-box videography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
									<iframe width="420" height="315"
									src="https://www.youtube.com/embed/-oYcSqdcCIw?si=bDx1R2PuZhehT4ym">
									</iframe>
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">VIDEOGRAPHY</h3>
											<p>Ini adalah hasil videography</p>
										</div>
									</div>
								</div>
								<div class="iso-box videography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
									<iframe width="420" height="315"
									src="https://www.youtube.com/embed/8Cpf4bjIZao?si=-qboaXJZjHY9FTZf">
									</iframe>
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">VIDEOGRAPHY</h3>
											<p>Ini adalah hasil videography</p>
										</div>
									</div>
								</div>
								<div class="iso-box photography col-md-3 col-sm-3 col-xs-12">
									<div class="portfolio-thumb">
										<img src="images/fotografi3.jpg" class="fluid-img" alt="portfolio img">
										<div class="portfolio-overlay">
											<h3 class="portfolio-item-title">PHOTOGRAPHY</h3>
											<p>Ini adalah hasil photography</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END PORTFOLIO -->

	<!-- START RESUME -->
<div class="container">
    <section>

        <div class="row" id="resumecv">
<?php
include "koneksi.php";
include "fungsi.php";

 //Query SQL
$sql = "SELECT * FROM resumecv";



//eksekusi SQL
$hasil = mysqli_query($conn,$sql);

//hitung data yang ada di tabel
$jmlData = mysqli_num_rows($hasil);

//cek apakah ada datanya
if ($jmlData > 0) {

    //tampilkan datanya
    while ($row = mysqli_fetch_assoc($hasil)) {

 ?>
 
                <div class="col-md-6 col-sm-6">	
					<h2 class="title"><strong><?= $row["header"]; ?></strong></h2>
					<p><?= $row["kolom1"]; ?></p>
					<p><?= $row["kolom2"]; ?></p>
					<p><?= $row["kolom3"]; ?></p>
					<p><?= $row["kolom4"]; ?></p>
					<p><?= $row["kolom5"]; ?></p>
					<p><?= $row["kolom6"]; ?></span><a href="https://www.youtube.com/channel/UCL45_V0cBX4TaQwTXgTQbsg" class="tm-red-text">Daizzu</a></p>
				</div> 
				<div class="col-md-6 col-sm-6">
					<h2 class="title"><strong><?= $row["header2"]; ?></strong></h2>
					<p><?= $row["kolom7"]; ?></p>
					<h4 class="tm-progress-label">Adobe Premiere Pro <small class="progress-percent-small">80%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<h4 class="tm-progress-label">Photoshop <small class="progress-percent-small">80%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
					</div>
					<h4 class="tm-progress-label">CorelDraw <small class="progress-percent-small">70%</small></h4>
					<div class="progress tm-progress">
						<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
					</div>
				</div>
			</div>
			</div>
			</div>

            </div>
        </section>
    </div>  
		</script>					
	
	<!-- END RESUME -->

	<!-- START ABOUT -->
	<section id="about" class="tm-about">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-6 col-md-6 col-sm-offset-6 col-sm-7">
					<div class="title">
						<h2 class="tm-red-text"><?= $row["headerabout"]; ?></h2>
						<h1 class="text-success"><?= $row["subheaderabout"]; ?></h1>
					</div>
					<p class="white-text"><?= $row["isiheaderabout"]; ?></p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- END ABOUT -->

	<!-- START SOCIAL -->
	<section id="social" class="tm-social">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.3s">
					<div class="media facebook">
						<a href="https://web.facebook.com/diaznurmuhammadassayyid/">
							<div class="media-object pull-left">
								<i class="fa fa-facebook"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title"><?= $row["fb"]; ?></h4>
								<h3><?= $row["isifb"]; ?></h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.6s">
					<div class="media twitter">
						<a href="https://twitter.com/Daizzu__">
							<div class="media-object pull-left">
								<i class="fa fa-twitter"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title"><?= $row["twitter"]; ?></h4>
								<h3><?= $row["isitwitter"]; ?></h3>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 wow rotateInUpLeft" data-wow-delay="0.9s">
					<div class="media pinterest">
						<a href="https://id.pinterest.com/diaznurmuhammad/">
							<div class="media-object pull-left">
								<i class="fa fa-pinterest"></i>
							</div>
							<div class="media-body">
								<h4 class="media-heading tm-social-title"><?= $row["pinterest"]; ?></h4>
								<h3><?= $row["isipinterest"]; ?></h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END SOCIAL -->

	<!-- START CONTACT -->
	<section id="contact" class="tm-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-12">					
					<h2 class="title">HUBUNGI <strong> SAYA</strong></h2>
					<hr>					
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-10 col-sm-10">
				
					<form action="simpandatakontak.php" method="post">
						<div class="col-md-6 col-sm-6">
							<input class="form-control" type="text" placeholder="Nama" name="nama">
						</div>
						<div class="col-md-6 col-sm-6">
							<input class="form-control" type="email" placeholder="Email" name="email">
						</div>
						<div class="col-md-12 col-sm-12">
							<input class="form-control" type="text" placeholder="Keterangan" name="keterangan">
							<textarea class="form-control" placeholder="Pesanmu" name="pesanmu" rows="6"></textarea>
						</div>
						<div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
							<input class="form-control" type="submit" value="kirim">
						</div>
					</form>
				</div>
				<div class="col-md-1 col-sm-1"></div>
				<div class="col-md-12 col-sm-12">
					<p>Copyright &copy; 2018 Diaz Nur Muhammad Assayyid
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTACT -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/imagesloaded.min.js"></script>
	<script src="js/custom.js"></script>
	
<?php
    }
}
?>
	
</body>
</html> 