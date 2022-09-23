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
    
    <!-- cases -->
      <div class="cases">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage text_align_center ">
                  <h2>Jenis-Jenis Varian (Mutasi) Virus Corona</h2>
                     <p>Sejak awal kemunculannya, virus corona telah bermutasi menjadi berbagai varian. Hal ini karena pada dasarnya virus dapat bereplikasi dan membuat dirinya menjadi banyak.
                        Ketika melakukan hal ini, virus corona mengubah “gen”-nya sedikit. Inilah yang disebut mutasi virus. Mutasi dari virus disebut variasi atau varian dari virus yang asli</p>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
            <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                      <a class="read_more" href="/action">Read More</a>
                     <div class="nostrud">
                        <h3>Varian Alfa</h3>
                        <p>Varian Alfa pertama kali ditemukan pada September 2020 di Inggris, dan dikenal dengan kode varian B. 1.1.7. Tingkat penularan varian virus ini adalah 43-90 persen lebih tinggi dari virus sebelumnya.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                      <a class="read_more" href="/action">Read More</a>
                     <div class="nostrud">
                        <h3>Varian Beta</h3>
                        <p>Varian Beta adalah mutasi virus corona yang pertama kali ditemukan pada Oktober 2020 di Afrika Selatan. Varian dengan kode B. 1.351 ini diketahui 50 persen lebih mudah menular dari varian sebelumnya.</p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases3.png" alt="#"/></figure>
                      <a class="read_more" href="/action">Read More</a>
                     <div class="nostrud">
                        <h3>Varian Delta</h3>
                        <p>Sempat menjadi penyebab gelombang kedua di berbagai negara, varian Delta pertama kali ditemukan pada Oktober 2020 di India. Varian ini juga disebut dengan kode B.1.617.2.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end cases -->
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