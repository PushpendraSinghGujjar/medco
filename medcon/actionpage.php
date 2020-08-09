<!DOCTYPE html>
<html>
<head>
<link href="css/actionpage.css" rel="stylesheet" type="text/css">
</head>
<body>

<div class="table">
<h1><center>RESULTS</center></h1>
<?php
      
      $con = mysqli_connect('localhost','root','123456','medicaldatabase');
      if(!$con)
      {
          echo 'not connected to server';
      }
     

      $Disease = $_POST['disease'];

      $result =mysqli_query($con, "SELECT * FROM symptoms WHERE Disease='$Disease'");
      
      while($res=mysqli_fetch_assoc($result)){
        echo '<table class="tab">';
        echo '<tr>';
        echo '<th>'.'Disease'.'</th>';
        echo '<th>'.'Symptoms'.'</th>';
        echo '<th>'.'Medicines'.'</th>';
        echo '<th>'.'Precautions'.'</th>';
        echo '</tr>';         
          echo '<tr>';
          echo '<td>'.$res['Disease'].'</td>';
          echo '<td>'.$res['Symptoms'].'</td>';
          echo '<td>'.$res['Medicines'].'</td>';
          echo '<td>'.$res['Precautions'].'</td>';
          echo '</tr>';
          echo '</table>';
      }
      
      
?>
</div> 
</body>
</html>

