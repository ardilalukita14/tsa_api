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
                  <h2>DATA KASUS COVID-19 DI INDONESIA</h2><br></br>
                  <button class="btn btn-warning"><h3>Data di update</h3></button><br>
                        <h4>{{ Carbon\Carbon::parse($listdata['lastReported'])->diffForHumans()  }}</h4>
                  </div>
               </div>
            </div>
            <div class="row d_flex">
            <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases1.png" alt="#"/></figure>
                      <a class="read_more" href="/covid">INDONESIA</a>
                     <div class="nostrud">
                        <h3>Kasus Terverifikasi</h3><br>
                        <p><button class="btn btn-info"><h4>{{ $listdata['confirmed'] }} KASUS</h4></button></p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases2.png" alt="#"/></figure>
                      <a class="read_more" href="/action">INDONESIA</a>
                     <div class="nostrud">
                        <h3>Kasus Meninggal</h3><br>
                        <p><button class="btn btn-danger"><h4>{{ $listdata['deaths'] }} KASUS</h4></button></p>
                     </div>
                  </div>
               </div>
               <div class=" col-md-4">
                  <div class="latest text_align_center">
                     <figure><img src="images/cases3.png" alt="#"/></figure>
                      <a class="read_more" href="/action">INDONESIA</a>
                     <div class="nostrud">
                        <h3>Kasus Sembuh</h3><br>
                        <p><button class="btn btn-success"><h4>@if (isset($listdata['recovered'])) @else 0 @endif KASUS</h4></button></p>
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