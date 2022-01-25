 <!-- import Font Awesome -->
 @php
     $tittle = isset($pageTittle) ? $pageTittle : 'Leverage Point';
 @endphp
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>{{$tittle}}</title>

 <!-- import Font Awesome -->
     <link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
rel="stylesheet">

   <!-- import Material Icons from Google Fonts -->
   <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">

   <!-- import MDB Pro -->
   <link rel="stylesheet" href="/css/mdb.min.css" />

   <link rel="stylesheet" href="/assets/css/styles.css" />
   @livewireStyles
   @yield('css')
 </head>
 <body>

  <!-- Start your project here-->
  @yield('content')
    <!-- End your project here-->

 <!-- import the MDB javascript file https://mdbootstrap.com/ -->
<script
    type="text/javascript"
    src="{{ asset('js/mdb.min.js') }}">
</script>
 @livewireScripts
 </body>



 </html>
