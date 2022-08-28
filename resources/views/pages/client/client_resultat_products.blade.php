@extends('layout.client.client_template')
@section('headcss')
<link rel="stylesheet" href="{{asset('css/client/client_search_product_stylle.css')}}">
<link rel="stylesheet" href="{{asset('css/client/client_resultat_product_stylle.css')}}">

@endsection

@section('headJS')
<!-- <script src="{{asset('dist/bandelAmazone.js')}}" defer></script> -->
<!-- <script src="{{asset('js/app.js')}}" defer></script> -->
<!-- <script src="{{asset('scraper/amzonScrapper.js')}}" defer></script> -->
@endsection

@section('maincontent')
<form action="" class="form_resultat" method="get">
            <h1>Best retsults  </h1>
            <div class="resultat_container">
                <h3>amazone :</h3>
                <div class="product_amazone">

                       <!-- <a  href="https://www.amazon.com/Asus-NanoEdge-Ultra-Slim-NumberPad-Accessories/dp/B09B5L8DKT/ref=sr_1_3?keywords=laptop&qid=1659219676&sprefix=lap%2Caps%2C334&sr=8-3" class="product">
                            <img src="data/image/product_pc.jpg" alt="">
                            <h3>Newest Asus Zenbook 14" IPS FHD NanoEdge Bezel Display Ultra-Slim Laptop</h3>
                            <hr>
                            <h2>$1,137.49</h2>
                       </a>
                       <a  href="https://www.amazon.com/Asus-NanoEdge-Ultra-Slim-NumberPad-Accessories/dp/B09B5L8DKT/ref=sr_1_3?keywords=laptop&qid=1659219676&sprefix=lap%2Caps%2C334&sr=8-3" class="product">
                        <img src="data/image/product_pc.jpg" alt="">
                        <h3>Newest Asus Zenbook 14" IPS FHD NanoEdge Bezel Display Ultra-Slim Laptop</h3>
                        <hr>
                        <h2>$1,137.49</h2>
                       </a> -->

                </div>
                <h3>AliExpresse :</h3>
                <div class="product_aliexpresse">

                </div>
                <h3>Ebay :</h3>
                <div class="product_ebay">

                </div>
            </div>

          </form>


<!--
       <form action="" class="form_search" method="post">

         <input type="text" placeholder="Product name ..." name="search_target">
         <button type="submit"><img src="data/image/search_black.svg" alt=""></button>
       </form>

       <div class="ti_description">
      <strong> <h1>ONE SEARCH FOR ALL RESULTS YOU NEED</h1></strong>
       </div>
               -->


@endsection
@section('js_fotter')

<script src="https://cdn.socket.io/4.5.0/socket.io.min.js" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script>
<!-- <script src="{{asset('js/socket/socket.js')}}" integrity="sha384-7EyYLQZgWBi67fBtVxw60/OWl1kjsfrPFcaU0pp0nAh+i8FD068QogUvg85Ewy1k" crossorigin="anonymous"></script> -->
<script src="{{asset('js/client/socketconnectReelTime.js')}}"></script>
@endsection
