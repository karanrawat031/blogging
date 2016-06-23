
<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('partials._headpar')
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  </head>

  <body>

   @include('partials._nav')

<div class="fullscreen-bg vid-container">
       <video preload="auto" class="bgvid fullscreen-bg__video" autoplay loop class="fillWidth">
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Relaxation.mp4" type="video/mp4" />
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Relaxation.webm" type="video/webm" />
            <source src="https://s3-us-west-2.amazonaws.com/coverr/mp4/Relaxation.ogv" type="video/ogv" />
        </video>   

      
    <div class="container">

     @yield('content')

     @include('partials._sidebar')

     </div><!-- /.row -->
      <br>
    

    </div><!-- /.container -->

    <br>

    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

    
  </body>
</html>
