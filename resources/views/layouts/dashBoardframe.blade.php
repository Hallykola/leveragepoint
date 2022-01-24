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

   @yield('css')
 </head>
 <body>

    <!-- Start your project here-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 p-0">
                @include('components.sideNav')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col">
                        @include('components.topBar')
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <!-- End your project here-->

 <!-- import the MDB javascript file https://mdbootstrap.com/ -->
<script
    type="text/javascript"
    src="{{ asset('js/mdb.min.js') }}">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </body>



 </html>
