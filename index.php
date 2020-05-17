<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>193040149 - Rifqi Muliawan </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        h3{
            font-size: 30px;
            color: snow;
            
        }
        .color {
            border: none;
            padding: 12px 28px;
            font-size: 15px;
            color: snow;
            display:inline-block;
            cursor: pointer;
            text-decoration: none;
            background-color: coral;
        }
        .slider h5, h3 {
          text-shadow: 3px 3px 4px rgba(0,0,0,0.5);
          font-size: 60px;
        }
        }
        footer {
          padding: 20px 0;
        }

    
    </style>
</head>
<body>
        <!-- Navbar -->
<div class="navbar-fixed">
    <nav class="blue-grey darken-3">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Rifqi Muliawan</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#slider">Home</a></li>
            <li><a href="#pw">Index PW</a></li>
            
          </ul>
        </div>
      </div>
    </nav>
</div>

<!-- sidenav -->
<ul class="sidenav" id="mobile-nav">
    <li><a href="slider">Home</a></li>
    <li><a href="pw">Index PW</a></li>
    
  </ul>

 <section id="slider" class="slideer grey lighteen-3 scrollspay">
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="img/1.jpg">
        <div class="caption center-align">
          <h5 class="light grey-text text-lighten-3"><b>Selamat datang </b><br>
           di web <b> Tugas </b><br> 
          Rifqi Muliawan<br>
        <b>193040149 <b></h5>
        </div>
    </ul>
  </div>
</section>

<!-- index PW -->
<section id="pw" class="pw grey lighten-3 scrollspy">
         <div class="container">
           <div class="row">
             <h3 class="light center grey-text text-darken-3">Index PW</h3>
             <div class="col m4 s12">
               <div class="card-panel  light-blue lighten-1 center">
               <h3 align="center">Kuliah</h3>
		            <ul type="menu">
			          <li>
                  <a href="kuliah/pertemuan9" class="color">Pertemuan 9</a>
                </li>
                <br>
			          <li>
                  <a href="kuliah/pertemuan10" class="color">Pertemuan 10</a>
                </li>
                <br>
			          <li>
				          <a href="kuliah/pertemuan11" class="color">Pertemuan 11</a>
                </li>
                <br>
			          <li>
				          <a href="kuliah/pertemuan12" class="color">Pertemuan 12</a>
                </li>
                <br>
			          <li>
				          <a href="kuliah/pertemuan13" class="color">Pertemuan 13</a>
                </li>
                </ul>
                </div>
              </div>

             <div class="col m4 s12">
               <div class="card-panel  light-blue lighten-1 center">
               <h3 align="center">Praktikum</h3>
		            <ul type="menu">
		            	<li>
                    <a href="praktikum/P5_PW_193040149" class="color">P5_PW_193040149</a>
                  </li>
                  <br>
                  <li>
                    <a href="praktikum/P6_PW_193040149" class="color">P6_PW_193040149</a>
                  </li>
                  <br>
                  <li>
                    <a href="praktikum/P7_PW_193040149" class="color">P7_PW_193040149</a>
                  </li>
                </ul>  
               </div>
             </div>
             <div class="col m4 s12">
               <div class="card-panel  light-blue lighten-1 center">
               <h3 align="center">Tubes</h3>
		            <ul type="menu">
			            <li>
                    <a href="tubes/index.php" class="color">Tubes</a>
                  </li>
              </ul>
               </div>
             </div>
        </div>
    </div> 
</section>

    <!-- Floating -->

<div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">menu</i>
  </a>
  <ul>
    <li><a class="btn-floating blue"><i class="material-icons">insert_chart</i></a></li>
    <li><a class="btn-floating deep-orange darken-2"><i class="material-icons">local_see</i></a></li>
    <li><a class="btn-floating green"><i class="material-icons">call</i></a></li>
    <li><a class="btn-floating red"><i class="material-icons">email</i></a></li>
  </ul>
</div>

  
     <!-- Footer -->
<footer class="blue-grey darken-3 white-text center">
  <p class="flow-text">Rifqi Muliawan.Copyright &copy; 2020. </p>
</footer>

<script>
const slider = document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 2000
        });

 const sideNav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sideNav);

const floating = document.querySelectorAll('.fixed-action-btn');
        M.FloatingActionButton.init(floating);
</script>
</body>
</html>