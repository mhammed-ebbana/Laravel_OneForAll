<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>OneForAll</title>
<link rel="stylesheet" href="{{asset('css/client/client_search_product_stylle.css')}}">
@yield('headcss')
@yield('headJS')
</head>
<body>
    <header class="search_header">
        <div class="title_header">
        <h2>OneForAll</h2>
        </div>
        <div class="icons">
        <img class="log_in_out_icon" src="data/image/search_icon.svg" title="search" onClick="window.location='/search'">

        <img class="log_in_out_icon" src="data/image/person-white.svg" title="Compt" onClick="window.location='/compt'">

        <img class="compt_detail_icon" src="data/image/clarity-shutdown-icon.png" title="Log Out" onClick="window.location='/logout'">
        </div>

    </header>

  <section class="all_body">

    <main>
    @yield('maincontent')

    </main>
  </section>
</body>
@yield('js_fotter')
</html>
