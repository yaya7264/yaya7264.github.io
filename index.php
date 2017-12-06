<?php

$username = $_REQUEST['username'];

$connection = new mysqli("localhost","Shinobi","Shinobi","akademia");

if ($connection->connect_error){
	echo "fail";
}	
else {
}
$sql = "CREATE TABLE $username (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
question VARCHAR(30) NOT NULL,
answer VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";
if ($connection->query($sql) === TRUE) {
} else {
    echo "Error creating table: " . $connection->error;
}

header("Location: http://localhost/main-page/index.html");

?>


<!DOCTYPE html>
<!-- Template by Quackit.com -->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Akademia</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS: You can use this stylesheet to override any Bootstrap styles and/or apply your own styles -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Logo and responsive toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><span class="glyphicon glyphicon-fire"></span> Akademia</a>
            </div>
            <!-- Navbar links -->
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Topics <span class="caret"></span></a>
						<ul class="dropdown-menu" aria-labelledby="about-us">
							<li><a href="math-page.html">Mathematics</a></li>
							<li><a href="#">Science</a></li>
							<li><a href="lit-page.html">Reading</a></li>
						</ul>
					</li>

                </ul>
				<form enctype="multipart/form-data"
				action=	"http://localhost/main-page/username.php">
				<form enctype="multipart/form-data"
				action=	"http://localhost/main-page/index.html">
				<ul style="text-align: right">
					<br/>
					<li>
					<input type="text" name="username" placeholder="Pick a Name" size="20"  />
					<input type="submit" value="Login"/>
					</li>
				</ul>
				</form>
				</form>
				<?php 
					$username = $_REQUEST['username'];
					if ($username) {
						 echo "Error creating table: "
					}
					else{
					
						echo "not working"
					}
				?>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<div class="jumbotron feature">
		<div class="container">

		<div id="feature-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#feature-carousel" data-slide-to="0" class="active"></li>
			  <li data-target="#feature-carousel" data-slide-to="1"></li>
			  <li data-target="#feature-carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<h1>Dynamically Engage</h1>
					<p>Engage students through learning activities on an interactive platform.</p>
				</div>
				<div class="item">
					<h1>Proactively Educate</h1>
					<p>Teach students the techniques needed to grasp concepts and ideas..</p>
				</div>
				<div class="item">
					<h1>Creatively Inspire</h1>
					<p>Inspire students by providing knowledge to succeed.</p>
				</div>
			</div>
			<a class="left carousel-control" href="#feature-carousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#feature-carousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>

		</div>
	</div>



    <!-- Content -->
    <div class="container">

        <!-- Page Intro -->
        <div class="row page-intro">
            <div class="col-lg-12">
                <h1>Veni, Vidi, Didici
                    <small>I Came, I Saw, I Learned</small>
                </h1>
                <p> Akademia provides students with the content and techniques to learn and understand topics quickly and affectively.</p>
              </div>
        </div>
        <!-- /.row -->

        <!-- Feature Row -->
        <div class="row">
            <article class="col-md-4 article-intro">
                <a href="math-page.html">
                    <img class="img-responsive img-rounded" src="https://i.pinimg.com/originals/b0/61/73/b06173cb3ff561f5c665a1e9dee496f8.jpg" style=" width: 500px; height: 200px;" alt="">
                </a>
                <h3>
                    <a href="math-page.html">Explore Mathematics</a>
                </h3>
                <p> Explore mathematics through lessons and activities on topics such as Trigonometry, Calculus, and Geomoetry. Learn about effective techniques that will help you grasp ideas and concepts presented in the lessons.</p>
              </article>
            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="https://www.wired.com/images_blogs/wiredscience/2014/01/books.jpg"style=" width: 500px; height: 200px;" alt="">
                </a>
                <h3>
                    <a href="#">Explore Reading</a>
                </h3>
                <p> Explore the best practices of identifying main ideas, plots, and author choices through our interactive reading activities.</p>
            </article>

            <article class="col-md-4 article-intro">
                <a href="#">
                    <img class="img-responsive img-rounded" src="https://vignette3.wikia.nocookie.net/powerlisting/images/b/b3/Chemical-science.jpg/revision/latest?cb=20170514083542"style=" width: 500px; height: 200px;" alt="">
                </a>
                <h3>
                    <a href="#">Explore Science</a>
                </h3>
                <p>Explore scientific ideas and concepts through learning activities and lessons. Learn the basics of chemistry and biology by interactively engaging in games and quizzes.</p>
              </article>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->


  	<footer>
  		<div class="footer-blurb">
  			<div class="container">
  				<div class="row">
  					<div class="col-sm-4 footer-blurb-item">
  						<h3><span class="glyphicon glyphicon-fire"></span> Productively Practice</h3>
              <p> At Akademia, we pride ourselves in providing students with an environment where they can practice learning techniques productivelly to master concepts in less time.</p>
            </div>
  					<div class="col-sm-4 footer-blurb-item">
  						<h3><span class="glyphicon glyphicon-cloud-upload"></span> Creatively Think</h3>
  						<p> By encouraging our students to think creatively through our interactive assignments and games, we open the door to greater opportunities. </p>

            </div>
  					<div class="col-sm-4 footer-blurb-item">
  						<h3><span class="glyphicon glyphicon-leaf"></span> Effectively Learn</h3>
              <p> Through our various lessons and learning activities, students are able to effectively learn and master concepts. </p>
            </div>

  				</div>
  				<!-- /.row -->
  			</div>
          </div>

          <div class="small-print">
          	<div class="container">
          		<p><a href="#">Terms &amp; Conditions</a> | <a href="#">Privacy Policy</a> | <a href="#">Contact</a></p>
          		<p>Copyright &copy; Akademia.com 2017 </p>
          	</div>
          </div>
  	</footer>



    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<!-- IE10 viewport bug workaround -->
	<script src="js/ie10-viewport-bug-workaround.js"></script>

	<!-- Placeholder Images -->
	<script src="js/holder.min.js"></script>

</body>

</html>
