<!DOCTYPE html> 
<html>
    <head>
        <link href="css/loginpage.css" rel="stylesheet" type="text/css"> 
        <script>
            // Get the modal
            var modal = document.getElementById('id01'); 
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>
    </head>
    <body>   
        <div class="navbar">
            <div class="pname">
                Developers
            </div>
            <div class="options">
                <a href="#home">database</a>
                <a href="#quiz">design</a>
                <!-- <a href="#result">setting</a> -->
                <a href="#help">help</a>
            </div>
        </div>
        <br><br><br>
      <!--  on to open the modal login form -->
<button class="login" onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <!-- Modal Content -->
  <form class="modal-content animate" action="C:\Users\pushpendra singh\Desktop\check.php">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="close" title="Close Modal">&times;</span>
      
    <div class="imgcontainer">
      <img src="img/avatar.jpg" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <input type="text" placeholder="Username" name="uname" required>

      <input type="password" placeholder="Password" name="psw" required>

      <button class="login1" type="submit"><a href="collect.php">Login</a></button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancel" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
    </div>
    </body>
</html>