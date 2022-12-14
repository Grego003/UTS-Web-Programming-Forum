<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="css/forget.css" rel="stylesheet">
    <title>User Forgot Password</title>
</head>

<body>
    <div class=" main container d-flex flex-column justify-content-center align-items-center mt-5">
        <div class="text-center mt-4 header mx-auto">
            <img src="img/SPACELY.svg" class="logo mt-2 mb-4" alt="...">
            <header>
                <p class="h3" style="font-weight:100;">Forgot Your Password</p>
            </header>
        </div>
        <div class="login d-flex justify-content-center align-items-center mt-4">
            <form action="forgot_process.php" method="POST" autocomplete="off">
                <div class="row form-group">
                    <div class="col">
                        <label for="email" class="form-label mt-4 mb-2"> Email </label>
                        <br />
                        <label style="opacity: 0.5;"> Enter registered email</label>
                        <?php
                        if (isset($_SESSION['ERROR'])) {
                            if($_SESSION['ERROR'] != ''){?>
                                <div id="alert"><?php echo $_SESSION['ERROR']; ?></div>
                            <?php
                            $_SESSION['ERROR'] = '';
                            }
                        }
                        ?>
                        <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Ex: Spacely@gmail.com" require />
                        <div class="button-container mt-3 mb-4 text-center">
                            <input type="submit" class="mt-2 mb-2 btn btn-danger" name="forgot_password" value="Check">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="footer mt-4 d-flex text-center justify-content-center">
            <p>Don't have an Account yet? &nbsp;</p>
            <a href="create_account_form.php"> Sign up here</a>
        </div>

        <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>