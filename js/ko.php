<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
  </head>
  <style media="screen">
    #main{
      color:red;
    }
  </style>
  <body>
    <a id="detailed">LINK</a>
    <div id="main" >Hello - This is my main Div that will be reloaded using Jquery.</div>
  </body>
</html>
<!-- <script type="text/javascript"> -->
<script type="text/javascript" language="javascript">
$(document).ready(function() { /// Wait till page is loaded
 $('#detailed').click(function(){
    $('#main').load('d.php #main', function() {
         /// can add another function here
    });
 });
}); //// End of Wait till page is loaded
</script>
<!-- </script> -->
