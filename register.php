
<?php
$title = "Register | Resume Builder";
require './assets/includes/header.php';
$fn->nonAuthPage();
?>
<div class="d-flex align-items-center" style="height:100vh">
    <div class="w-100">
        <main class="form-signin w-100 m-auto bg-white shadow rounded">
            <form method="post" action="actions/register.action.php">
                <div class="d-flex gap-2 justify-content-center">
                    <img class="mb-4" src="./assets/images/logo.png" alt="" height="70">

                    <div>
                        <h1 class="h3 fw-normal my-1" style="color:#910075"><b>Resumate</b></h1>
                        <p class="m-0">Create your new account</p>

                    </div>
                </div>


                <div class="form-floating my-1" >
                    <input type="text" class="form-control" name="full_name" id="floatingName" placeholder="" required>
                    <label for="floatingInput"><i class="bi bi-person"></i> Full Name</label>
                </div>
                <div class="form-floating my-1">
                    <input type="email" class="form-control" name="email_id" id="floatingEmail" placeholder="name@example.com" required>
                    <label for="floatingInput"><i class="bi bi-envelope"></i> Email address</label>
                </div>
                <div class="form-floating my-1">
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword"><i class="bi bi-key"></i> Password</label>
                </div>


                <button class="btn w-100 py-2" type="submit" style="background-color: #910075;color:white; font-weight:600;"><i class="bi bi-person-plus-fill"></i> Register
                </button>
                <div class="d-flex justify-content-between my-3">

                    <a href="forgot-password.php" class="text-decoration-none" style="color: #910075; font-weight:500;">Forgot Password ?</a>
                    <a href="login.php" class="text-decoration-none" style="color: #910075; font-weight:500;">Login</a>

                </div>

            </form>
        </main>

    </div>

</div>
<?php
require './assets/includes/footer.php';
?>
