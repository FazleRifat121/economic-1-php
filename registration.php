<?php require_once "header.php" ;
    if(isset($_POST["register"])){
        $yourName = $_POST["yourName"];
        $yourEmail = $_POST["yourEmail"];
        $yourPassword = $_POST["yourPassword"];
        $confirmPassword = $_POST["confirmPassword"];
        if($yourPassword === $confirmPassword){
            $sql = "INSERT INTO users (name,email,password) VALUES ('$yourName','$yourEmail','$yourPassword')";
            if($conn->query($sql) === TRUE){
               echo "<script>toastr.succcess('Register Successfull');setTimeout(()=> {location.href='login.php'},2000)</script>";
            }
            else{
               echo "<script>toastr.error('Registration Failed')</script>";
            }
        }
        else{
            echo "<script>toastr.error('Password not match')</script>";
         }
    }
?>
<div class="container">
    <div class="row py-5">
        <div class="col-md-4 mx-auto p-4 shadow border rounded">
            <h1>Register</h1>
            <form action="" method="post">
                <div class="mb-3">
                    <label for="yourName">Your Name:</label>
                    <input type="text" name="yourName" class="form-control" id="yourName" required>
                </div>
                <div class="mb-3">
                    <label for="yourEmail">Your Email:</label>
                    <input type="email" name="yourEmail" class="form-control" id="yourEmail" required>
                </div>
                <div class="mb-3">
                    <label for="yourPassword">Your Password:</label>
                    <input type="password" name="yourPassword" class="form-control" id="yourPassword" required>
                </div>
                <div class="mb-3">
                    <label for="confirmPassword">Confirm Password:</label>
                    <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
                </div>
                <button class="btn btn-success " type="submit" name="register">Register</button>
            </form>
        </div>
    </div>
</div>
<?php require_once "footer.php" ?>