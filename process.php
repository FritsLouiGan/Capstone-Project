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
            alert("DATA IS INSERTED!!");
            window.location.href="student-login.php";
            </script>
            <?php

        }else{
            ?>
            <script>
             alert("DATA IS NOT INSERTED!!");
             window.location.href="Student-register";
             </script>
             <?php
        }
    }else{
        ?>
        <script>
         alert("DATA IS ALREADY IN USE!!");
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
            alert("WRONG USERNAME OR PASSWORD");
            window.location.href="student-login.php";
        </script>
      <?php
      }else{

        $_SESSION['email']=$email;

        ?>
        <script>
            alert("WELCOME YOUR LOGIN IS SUCCESS");
            window.location.href="dashboard2.html";
        </script>
        <?php
      }

    }

// code for student info


if(isset($_POST['info'])){

    $a = $_POST['lrn'];
    $b = $_POST['peac_esic'];
    $c = $_POST['applicant_number'];
    $d = $_POST['date'];
    $e = $_POST['course'];
    $f = $_POST['major'];
    $g = $_POST['lastname'];
    $h = $_POST['fn'];
    $i = $_POST['mn'];
    $j = $_POST['dateofbirth'];
    $k = $_POST['sex'];
    $l = $_POST['placeofbirth'];
    $m = $_POST['civil_status'];
    $n = $_POST['citizenship'];
    $o = $_POST['email'];
    $p = $_POST['religion'];
    $q = $_POST['permanent_address'];
    $r = $_POST['mother_name'];
    $s = $_POST['father_name'];
    $t = $_POST['contact_number'];
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

    $insert=mysqli_query($conn, "INSERT INTO info1 VALUES('0','$a','$b','$c','$d','$e','$f','$g','$h',
    '$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y','$z','$ab','$ac','$ad','$ae')");

if($insert == true){
?>
<script>
    alert("Data is successfully inserted");
    window.location.href="appointment.php";
</script>
<?php
}else{
?>
<script>
    alert("Data is not inserted");
    window.location.href="student-information.php";
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
          alert("WRONG USERNAME OR PASSWORD");
          window.location.href="registrar-login.php";
      </script>
    <?php
    }else{

      $_SESSION['email']=$email;

      ?>
      <script>
          alert("WELCOME YOUR LOGIN IS SUCCESS");
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
            alert("WRONG USERNAME OR PASSWORD");
            window.location.href="admin-login.php";
        </script>
      <?php
      }else{
  
        $_SESSION['email']=$email;
  
        ?>
        <script>
            alert("WELCOME YOUR LOGIN IS SUCCESS");
            window.location.href="dashboard.php";
        </script>
        <?php
      }
  
    



    }
  //code for dean
  if(isset($_POST['dean'])){
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
      $check_login = mysqli_query($conn, "SELECT * FROM dean WHERE email='$email' AND password='$pass' " );
      $n = mysqli_num_rows($check_login);
        
      if($n <= 0){
        ?>
        <script>
            alert("WRONG USERNAME OR PASSWORD");
            window.location.href="admin-login.php";
        </script>
      <?php
      }else{
    
        $_SESSION['email']=$email;
    
        ?>
        <script>
            alert("WELCOME YOUR LOGIN IS SUCCESS");
            window.location.href="dashboard4.html";
        </script>
        <?php
      }
    
      
  
  
  
  }

//code for appointment


if(isset($_POST['appoint'])){

    $a = $_POST['SN'];
    $b = $_POST['Lastname'];
    $c = $_POST['Firstname'];
    $d = $_POST['mn'];
    $e = $_POST['Phone'];
    $f = $_POST['Email'];
    $g = $_POST['Address'];
    $h = $_POST['course'];
    $i = $_POST['YG'];
    $j = $_POST['Semester'];
    $k = $_POST['Date'];
    $l = $_POST['tor'];
    $m = $_POST['diploma'];
    $n = $_POST['hd'];
    $o = $_POST['AT'];
    $p = $_POST['cg'];
    $q = $_POST['ce'];
    $r = $_POST['cog'];
    $s = $_POST['nc'];
    $t = $_POST['reason'];
   

    $insert=mysqli_query($conn, "INSERT INTO appoint5 VALUES('0','$a','$b','$c','$d','$e','$f','$g','$h',
    '$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t')");
  if($insert) {

    if($insert == true){
      ?>
      <script>
          alert("Data is successfully inserted");
          window.location.href="book1.php";
      </script>
      <?php
      }else{
        ?>
        <script>
            alert("Data is not inserted");
            window.location.href="appointment.php";
        </script>
        <?php  
      }
  }
  
}

//code for Certificate of Graduation
include "conn.php";

if(isset($_POST['file_submit'])){
    date_default_timezone_set('Asia/Manila');
    $date = date("F-d-Y");

    $name_file=$_POST['name_file'];
    
    $doc_type='Document';
    $fileName = $_FILES['myfile']['name'];
    $fileTmpName = $_FILES['myfile']['tmp_name'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('docs','docx','pdf','xlsx','jpg','jpeg','png');


    if(in_array($fileActualExt,$allowed)){
        
        $fileNameNew = $fileName;
        $fileDestination = '.. uploads/document/'.$fileNameNew;

        $insert = mysqli_query($conn,"INSERT INTO cg VALUES('0','$name_file','$fileNameNew','$date')");

        if($insert==TRUE){
           
            move_uploaded_file($fileTmpName,$fileDestination);
            ?>
            <script>
                alert("FILE WAS UPLOADED!!!!");
                window.location.href="dashboard2.html";
            </script>
            <?php
        }else{ 
            ?>
            <script>
                alert("ERROR FILE UPLOADED!!!!");
                window.location.href="certification-graduation.php";
            </script>
            <?php
        }
        

    }else{
            ?>
            <script>
                alert("FILE FORMAT IS NOT ACCEPTABLE!!!");
                window.location.href="certification-graduation.php";
            </script>
            <?php
        }
    }
   //code for update
    if(isset($_POST['update'])){
      $ref_id = $_GET['id'];
      
      $a = $_POST['up_name'];
      $b = $_POST['up_mail'];
      $c = $_POST['up_pass'];
  
      $update_xd = mysqli_query($conn, "UPDATE sheesh SET name='$a', email='$b', password='$c' WHERE
      id='$ref_id'");
  
      if($update_xd==true){
  
        ?>
        <script>
            alert("Data updated!");
            window.location.href="adminpov1.php";
        </script>
        <?php
  
      }else{
      ?>
      <script>
          alert("Error");
          window.location.href="adminpov1.php";
      </script>
      <?php
      }
    }
    
  
    //this code is for booking
    if(isset($_POST['bookz'])){
      
      
      $a = $_POST['Date'];
      $b = $_POST['Time'];
      $c = $_POST['lastname'];
      $d = $_POST['firstname'];
      
      
      
      $insert=mysqli_query($conn, "INSERT INTO book VALUES('0','$a','$b','$c','$d')");
   
      if($insert=true){
        ?>
        <script>
            alert("insert!!");
            window.location.href="succes.php";
        </script>
        <?php
        }else{
        ?>
        <script>
            alert("Data is not inserted");
            window.location.href="book1.php";
        </script>
        <?php
        }
  
  
  }
// Database configuration
if(isset($_POST['reports'])){
  $servername = "localhost";
  $username = "your_username";
  $password = "your_password";
  $database = "dashboard_db";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Process form submission
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Retrieve data from the form
      $sales = $_POST['sales'];
      $revenue = $_POST['revenue'];
      $customers = $_POST['customers'];

      // Prepare and bind SQL statement
      $stmt = $conn->prepare("INSERT INTO reports (sales, revenue, customers) VALUES (?, ?, ?)");
      $stmt->bind_param("iii", $sales, $revenue, $customers);

      // Execute the statement
      if ($stmt->execute() === TRUE) {
          echo "Data inserted successfully";
      } else {
          echo "Error: " . $stmt->error;
      }

      // Close statement and connection
      $stmt->close();
      $conn->close();
  }
}
if(isset($_POST['PR'])){

  $a = $_POST['FN'];
  $b = $_POST['about'];
  $c = $_POST['address'];
  $d = $_POST['phone'];
  $e = $_POST['email'];
  $f = $_POST['FBp'];
  $g = $_POST['TKp'];
 

  $insert=mysqli_query($conn, "INSERT INTO profiles VALUES('0','$a','$b','$c','$d','$e','$f','$g')");
if($insert) {

  if($insert == true){
    ?>
    <script>
        alert("You successfully change your profile");
        window.location.href="users-profile.php";
    </script>
    <?php
    }else{
      ?>
      <script>
          alert("Data is not inserted");
          window.location.href="users-profile.php";
      </script>
      <?php  
    }
}

}


?>

