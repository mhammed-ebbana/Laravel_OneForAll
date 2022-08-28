@extends('layout.client.client_template')
@section('headcss')
<link rel="stylesheet" href="{{asset('css/client/client_search_product_stylle.css')}}">
@endsection

@section('maincontent')

<form action="result" class="form_search" method="">
        <input type="number" placeholder="Your budget $ ..." name="search_target_price" required min="1" >
         <input type="text" placeholder="Product name ..." name="search_target_name" required>
         <button type="submit"><img src="data/image/search_black.svg" alt=""></button>
       </form>

       <div class="ti_description">
      <strong> <h1>ONE SEARCH FOR ALL RESULTS YOU NEED</h1></strong>
       </div>
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
