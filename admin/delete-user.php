<?php
    include "config.php";

    $userid = $_GET['id'];

    $sql = "DELETE FROM user WHERE user_id = {$userid}";

    if(mysqli_query($conn,$sql)){
        header("Location: {$hostname}/admin/users.php");
    }else{
        echo "<P>Can't delete the user record</P>";
    }

    mysqli_close($conn);

?>