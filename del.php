<?php
    include "conn.php";

    $ref_id = $_GET['id'];

    $delete = mysqli_query($conn, "DELETE FROM sheesh WHERE id='$ref_id'");

    if($delete == true){
        ?>
        <script>
            alert("Data deleted!");
            window.location.href="adminpov1.php";
        </script>
        <?php
    }else{
        if($delete == true){
            ?>
            <script>
                alert("Error!");
                window.location.href="adminpov1.php";
            </script>
            <?php
    }
    }
?>