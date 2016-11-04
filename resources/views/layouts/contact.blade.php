<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page - Ustora Demo</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{URL::to('public/assets/css/bootstrap.min.css')}}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('public/assets/css/font-awesome.min.css')}}">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{URL::to('public/assets/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('public/assets/css/responsive.css')}}">
    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    @include('elements.header')
     <!-- End mainmenu area -->
    
   
    
     @yield('content')

     @include('elements.footer')
     
     
   
    <!-- Latest jQuery form server -->
     <script src="{{URL::to('public/assets/js/custom.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBQkcMzH3kaDQjwh_Zt3nOjfPSKSQox1Uw&callback=initMap">
    </script>
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{URL::to('public/assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::to('public/assets/js/jquery.sticky.js')}}"></script>
    
    <!-- jQuery easing -->
    <script src="{{URL::to('public/assets/js/jquery.easing.1.3.min.js')}}"></script>
    

    <script src="{{URL::to('public/assets/js/main.js')}}"></script>
       
  </body>
</html>