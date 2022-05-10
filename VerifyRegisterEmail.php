<?php

include 'connection.php';
if(isset($_GET['email']) && isset($_GET['verifystatus']))
{
    $query="select * from register where email='$_GET[email]' && verifystatus='$_GET[verifystatus]'";
    $run=mysqli_query($conn,$query);
    if($run)
    {
        if(mysqli_num_rows($run)==1)
        {
            $result=mysqli_fetch_assoc($run);
            if($result['verifystatus']==0)
            {
                $update="update register set verifystatus=1 where email='$result[email]'";
                $run=mysqli_query($conn,$update);
                if($run)
                {
                    echo "<script>alert('Verified.. Thank You For Connecting Us.')</script>";
                }
                else
                {
                    echo "<script>alert('Wait For Sometime Internal Server Down')</script>";
                }
            }
        }
    }
    else{
        echo 'Not Verified';
    }
}

?>