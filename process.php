<?php
  include "conn.php";
  session_start();


  if(isset($_POST['regist'])){
    
    $name = $_POST['nm'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    

    $validate = mysqli_query($conn, "SELECT * FROM sheesh WHERE email='$email'");

    $val_num = mysqli_num_rows($validate);
     
    if($val_num <= 0){

        $insert = mysqli_query($conn, "INSERT INTO sheesh VALUES ('0','$name','$email','$pass')");
    
        if($insert==true){
           ?>
           <script>
            alert("DATA IS ISERTED!!");
            window.location.href="student-login.php";
            </script>
            <?php

        }else{
            ?>
            <script>
             alert("DATA IS NOT ISERTED!!");
             window.location.href="Student-register";
             </script>
             <?php
        }
    }else{
        ?>
        <script>
         alert("DATA IS ALREADy IN USE!!");
         window.location.href="Student-register.php";
         </script>
         <?php
    }

  }



  //this code is for login
  if(isset($_POST['login'])){
    
    $email = $_POST['email'];
    $pass = $_POST['password'];

      $check_login = mysqli_query($conn, "SELECT * FROM sheesh WHERE email='$email' AND password='$pass' " );
      $n = mysqli_num_rows($check_login);
      
      if($n <= 0){
        ?>
        <script>
            alert("WRONG USERNAME OR PASSWORD MO PREEE");
            window.location.href="student-login.php";
        </script>
      <?php
      }else{

        $_SESSION['email']=$email;

        ?>
        <script>
            alert("WELCOME PREE SUCCESS LOGIN MO");
            window.location.href="dashboard2.html";
        </script>
        <?php
      }

    }

// code for student info
include "conn.php";

if(isset($_POST['info'])){

    $a = $_POST['lrn'];
    $b = $_POST['peac_esic'];
    $c = $_POST['applicant_number'];
    $d = $_POST['date'];
    $e = $_POST['course'];
    $f = $_POST['major'];
    $g = $_POST['ln'];
    $i = $_POST['fn'];
    $k = $_POST['mn'];
    $h = $_POST['dateofbirth'];
    $j = $_POST['placeofbirth'];
    $l = $_POST['sex'];
    $m = $_POST['civil_status'];
    $n = $_POST['citizenship'];
    $o = $_POST['email'];
    $p = $_POST['religion'];
    $q = $_POST['permanent_address'];
    $r = $_POST['contact_number'];
    $s = $_POST['mother_name'];
    $t = $_POST['father_name'];
    $u = $_POST['elementary_school'];
    $v = $_POST['elementary_year'];
    $w = $_POST['high_school'];
    $x = $_POST['high_school_year'];
    $y = $_POST['college'];
    $z = $_POST['college_year'];
    $ab = $_POST['emergency_name'];
    $ac = $_POST['emergency_relationship'];
    $ad = $_POST['emergency_address'];
    $ae = $_POST['emergency_contact'];

    $insert=mysqli_query($conn, "INSERT INTO user3 VALUES('0','$a','$b','$c','$d','$e','$f','$g','$h',
    '$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$ab','$ac','$ad','$ae')");

if($insert == true){
?>
<script>
    alert("Data is successfully inserted");
    window.location.href="home.php";
</script>
<?php
}else{
?>
<script>
    alert("Data is not inserted");
    window.location.href="index.php";
</script>
<?php
}
    
      

 }



///code for registrar
if(isset($_POST['luffy'])){
    
  $email = $_POST['email'];
  $pass = $_POST['password'];

    $check_login = mysqli_query($conn, "SELECT * FROM luffy WHERE email='$email' AND password='$pass' " );
    $n = mysqli_num_rows($check_login);
    
    if($n <= 0){
      ?>
      <script>
          alert("WRONG USERNAME OR PASSWORD MO PREEE");
          window.location.href="registrar-login.php";
      </script>
    <?php
    }else{

      $_SESSION['email']=$email;

      ?>
      <script>
          alert("WELCOME PREE SUCCESS LOGIN MO");
          window.location.href="dashboard3.html";
      </script>
      <?php
    }

  }



  //code for admin
  if(isset($_POST['adminlog'])){
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
  
      $check_login = mysqli_query($conn, "SELECT * FROM adminlog WHERE email='$email' AND password='$pass' " );
      $n = mysqli_num_rows($check_login);
      
      if($n <= 0){
        ?>
        <script>
            alert("WRONG USERNAME OR PASSWORD MO PREEE");
            window.location.href="admin-login.php";
        </script>
      <?php
      }else{
  
        $_SESSION['email']=$email;
  
        ?>
        <script>
            alert("WELCOME PREE SUCCESS LOGIN MO");
            window.location.href="dashboard.html";
        </script>
        <?php
      }
  
    



    }



?>