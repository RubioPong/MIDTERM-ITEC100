
<!DOCTYPE html>
<html>
<head>
  <title> Modal</title>
  <link rel="stylesheet"
  href="modal1.css">
</head>
<?php include 's2.php' ?>
<body>
  

<div class="container">

    <button class="btn" id="myBtn">Open Modal</button>
        <div id="myModal" class="modal">
        <div class="modal-content">
        <form  method= "POST"  action = "">
              
                
        <span class="close">&times;</span>
      <p>Verification code:</p>

      
  
       <p id="demo"></p>
         <?php 

                      $phpvar="30"; 
                      ?> 
                      <script>
                      function countDown(secs,elem) {
                      var element = document.getElementById(elem);
                      element.innerHTML = "Timer: "+secs+" seconds";
                      if(secs < 1) {
                      clearTimeout(timer);
                      element.innerHTML = '<h2>BOOOOOOOOM</h2>';
                      element.innerHTML += '<a href="s1.php">Reset</a>';
                      $("#btn-submit").attr("disabled", true);
                      }
                      secs--;
                      var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
                      }
                      </script>
                      <div id="status"style="font-size:20px;"></div>
                      <script>countDown(<?php echo $phpvar; ?>,"status");</script>

                       <input type="text" name="code"><br><br>
                          <button type="submit" name="pota" class="btnm" id="btn-submit">Submit</button><br><br><br>
              <?php     
      $code1=rand(111111,999999);
      echo ($code1);

       ?>

      </form>
  </div>


</div>

</div>



<script>

document.getElementById("demo").innerHTML;


var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



</body>
</html>
