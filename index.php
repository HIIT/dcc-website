<!DOCTYPE html>
<html>
<head>

   <title>Digital Content Communities @ Aalto</title>

<!-- bootstrap 4 -->
<link rel="stylesheet" 
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" 
integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" 
crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" 
integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" 
crossorigin="anonymous"></script>
<script 
src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" 
integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
crossorigin="anonymous"></script>
<script 
src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" 
integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
crossorigin="anonymous"></script>

<link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="jumbotron">
  <div class="container">
    <?php include("intro.html") ?>
  </div>
</div>

<div class="container">

  <div class="row">
    <div class="col-md-4">
      <?php foreach( glob('./sidebar_*.html') as $file) { include( $file ); } ?>
    </div>

   <div class="col-md-8">

   <div class="row"><h3 class="col-md-12">Research areas</h3></div>

<?php foreach( glob('./module_*.html') as $file) {  
 echo '<div class="row"><div class="col-md-10">';
 include( $file );
 echo '</div><div class="col-md-2">';
 foreach( glob('./module_data_*.png') as $image) {
    echo '<img src="'.$image.'" width="100%" />';
 }
 echo '</div></div>';
}
?>

   </div>

</div>
<footer>
        <p>&copy; Company 2017</p>
      </footer>
    </div> <!-- /container -->


</body>
</html>
