
<?php
$title = "Login | Resume Builder";
require './assets/includes/header.php';
$fn->nonAuthPage();
?>
<div class="d-flex align-items-center" style="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method="post" action="actions/login.action.php">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="./assets/images/logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1 " style="color:#910075"><b>Resumate</b></h1>
                        <p class="m-0">Login to your account</p>

                    </div>
                </div>



                <div class="form-floating my-1">
                    <input type="email" class="form-control" name="email_id" id="floatingEmail" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>


                <button class="btn w-100 py-2" type="submit" style="background-color: #910075;color:white; font-weight:600;">Login
                    <i class="bi bi-box-arrow-in-right"></i>
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="forgot-password.php" class="text-decoration-none" style="color: #910075; font-weight:500;">Forgot Password ?</a>
                    <a href="register.php" class="text-decoration-none" style="color: #910075; font-weight:500;">Register</a>

                </div>

            </form>
        </main>

    </div>



</div>

<?php
require './assets/includes/footer.php';
?>
