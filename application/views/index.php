<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evently</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/modern-business.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/lambangevent.ico" />

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg bg-white fixed-top">
      <div class="container">

        <!-- <a class="navbar-brand" href="beranda">Evently</a> -->
        <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> -->
          <!-- <span class="navbar-toggler-icon"></span> -->
        <!-- </button> -->

        <!-- LOGO -->
        <div class="logo" style="width: 250px"> 
          <a href="index.php" title="Evently"><img src="assets/images/evently.png" alt="Evently" /></a>
        </div>


    
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Kontak</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active">
            <img src="assets/poster/vocomfest.jpg">
            <!-- <div class="carousel-caption d-none d-md-block"> -->
              <!-- <h3>First Slide</h3> -->
              <!-- <p>This is a description for the first slide.</p> -->
            <!-- </div> -->
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" >
            <img src="assets/poster/child.jpg">
            <!-- <div class="carousel-caption d-none d-md-block"> -->
              <!-- <h3>Second Slide</h3> -->
              <!-- <p>This is a description for the second slide.</p> -->
            <!-- </div> -->
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item">
            <img src="assets/poster/algorithm.jpg">
            <!-- <div class="carousel-caption d-none d-md-block"> -->
              <!-- <h3>Third Slide</h3> -->
              <!-- <p>This is a description for the third slide.</p> -->
            <!-- </div> -->
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>

    <div class="container">
    <!-- Page Content 

      <h1 class="my-4">Welcome to Modern Business</h1>

      <!-- Marketing Icons Section
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Card Title</h4>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>-->
      <!-- /.row -->

		<!-- Portfolio Section -->
		<br>
		<center><h2>Evently</h2></center>
		<br>
      <div class="row">
		<?php
			if(!empty($threadRecords))
			{
				foreach($threadRecords as $record)
				{
		?>
		<div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="<?php echo base_url(); ?>assets/poster/<?php echo $record->poster; ?>" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#"><?php echo $record->nama; ?></a>
              </h4>
              <p class="card-text"><i>"<?php echo $record->judul; ?>"</i></p>
              <p class="card-text"><?php echo $record->deskripsi; ?></p>
              <p class="card-text">Mapping Event ID : <?php echo $record->id_mapping_event; ?></p>
              <p class="card-text">Event ID : <?php echo $record->id_event; ?></p>
              <p class="card-text">Thread ID : <?php echo $record->id_thread; ?></p>
            </div>
			     <a href="<?php echo base_url(); ?>viewDetail/<?php echo $record->id_mapping_event; ?>" type="button" class="btn btn-info">DETAIL</a>
          </div>
        </div>
		<?php
				}
			}
		?>
      <!-- /.row -->

      <!-- Features Section
      <div class="row">
        <div class="col-lg-6">
          <h2>Modern Business Features</h2>
          <p>The Modern Business template by Start Bootstrap includes:</p>
          <ul>
            <li>
              <strong>Bootstrap v4</strong>
            </li>
            <li>jQuery</li>
            <li>Font Awesome</li>
            <li>Working contact form with validation</li>
            <li>Unstyled page elements for easy customization</li>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6">
          <img class="img-fluid rounded" src="http://placehold.it/700x450" alt="">
        </div>
      </div>-->
      <!-- /.row -->


      <!-- Call to Action Section 
      <hr>
      <div class="row mb-4">
        <div class="col-md-8">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
        </div>
        <div class="col-md-4">
          <a class="btn btn-lg btn-secondary btn-block" href="#">Call to Action</a>
        </div>
      </div>-->

    </div>
	</div>
    <!-- /.container -->

  </body>
    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <p class="m-0 text-center text-white">Copyright &copy; Evently 2017</p>

      <!-- /.container -->
    </footer>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url(); ?>/assets/jQueryUI/jquery.min.js">
  </script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js">
  </script>
</html>
