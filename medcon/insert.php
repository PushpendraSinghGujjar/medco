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

      $Disease = $_POST['disease'];
      $Symptoms = $_POST['symptoms'];
      $Medicines = $_POST['medicines'];
      $Precautions = $_POST['precautions'];

      $sql = "INSERT INTO symptoms (Disease,Symptoms,Medicines,Precautions) VALUES ('$Disease','$Symptoms','$Medicines','$Precautions')";

      if(!mysqli_query($con,$sql))
      {
          echo 'not inserted';
      }
      else
      {
          echo 'updated successfully';
      }

      header("refresh:2; url=collect.php");


?>