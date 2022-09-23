<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Covido</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout inner_page">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- Preloader Start-->
@include('layouts.header')
@extends('layouts.contents')
@section('content')
      <!-- end banner -->
     <!-- coronata -->
      <div class="coronata">
         <div class="container">
            <div class="row d_flex grid">
               <div class="col-md-7">
                  <div class="coronata_img text_align_center">
                     <figure><img src="images/corona.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-5 oder1">
                  <div class="titlepage text_align_left">
                     <h2>Gejala dan Pengobatan Infeksi Virus Covid-19?</h2><br></br>
                     <button class="btn btn-info"><h4>Gejala Infeksi Coronavirus</h4></button>
                     <p> 
                        (1)Hidung beringus.<br>
                        (2)Sakit kepala.<br>
                        (3)Batuk.<br>
                        (4)Sakit tenggorokan.<br>
                        (5)Demam.<br>
                        (6)Merasa tidak enak badan.<br>
                        (7)Hilangnya kemampuan indera perasa dan penciuman.<br>
                     </p>

                     <button class="btn btn-info"><h4>Pengobatan Infeksi Coronavirus</h4></button>
                     <p>
                           (1)Minum obat yang dijual bebas untuk mengurangi rasa sakit, demam, dan batuk. Namun, jangan berikan aspirin pada anak-anak. Selain itu, jangan berikan obat batuk pada anak di bawah empat tahun.<br>
                           (2)Gunakan pelembap ruangan atau mandi air panas untuk membantu meredakan sakit tenggorokan dan batuk.<br>
                           (3)Perbanyak istirahat.<br>
                           (4)Perbanyak asupan cairan tubuh.<br>
                     </p>

                     <a class="read_more" href="coronata.html">Read More</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end coronata -->
      @include('layouts.footer')
@endsection

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>