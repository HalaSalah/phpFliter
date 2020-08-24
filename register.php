<?php

include "navbar.php";



if(isset($_SESSION['errors2']))
{
    foreach($_SESSION['errors2'] as $error)
    {
        echo "
        <div class='alert alert-danger' role='alert'>
            ".$error."
        </div>
        ";
    }
}

?>


<div class="container mt-5">
    

<form class="fotm-group" method="post" action="handleRegister.php">
    <input class="form-control" type="text" name="userName" placeholder="enter tour name"><br>
    <input class="form-control" type="text" name="email" placeholder="enter tour email"><br>
    <input class="form-control" type="password" name="password" placeholder="enter tour password"><br>
    <input class="form-control" type="text" name="phone" placeholder="enter tour phone"><br>
    <input class="form-control" type="text" name="facebook" placeholder="enter tour facebook"><br>
    <input class="form-control" type="text" name="twitter" placeholder="enter tour twitter"><br>
    <input class="form-control" type="text" name="instagram" placeholder="enter tour instagram"><br>

    <input class="btn btn-success" type="submit" value="update">
</form>
</div>