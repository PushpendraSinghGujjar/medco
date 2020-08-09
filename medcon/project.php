<html>
<head>
     <link href="css\project.css" rel="stylesheet" type="text/css">
     <script> 
          // Get the modal
          var modal = document.getElementById('id02');
          
          // When the user clicks anywhere outside of the modal, close it
          window.onclick = function(event) {
            if (event.target == modal) {
              modal.style.display = "none";
            }
          }
     </script> 
</head>
<body>
<?php
      
      $con = mysqli_connect('localhost','root','123456');
      if(!$con)
      {
          echo 'not connected to server';
      }
      if(!mysqli_select_db($con,'medicaldatabase'))
      {
          echo 'database not selected';
      }
?>
<div class="main" id="id01">
<?php
include_once 'header.php';
?>
<div class="logo">
<div class="medcon animate">medCon</div>
<div class="sbar">
<form action="actionpage.php" method="POST">
<input type="text" name="disease" placeholder="Search...">
<button type="submit" value="insert">&#x1F50D</button>
</form>
</div>
</div>
<?php
include_once 'footer.php';
?>
<?php
include_once 'modal.php';
?>
</body>
</html>
