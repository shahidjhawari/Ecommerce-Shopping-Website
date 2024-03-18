<?php require('top.php'); ?>

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        display: flex;
        justify-content: space-around;
        max-width: 800px;
        margin: 100px auto;
    }
    span {
        color: red;
    }
    .form-messege {
        color: green;
    }
    #login-form,
    #register-form {
        width: 45%; 
    }
    @media (max-width: 767px) {
        .container {
            flex-direction: column; 
            align-items: center; 
        }
        #login-form,
        #register-form {
            width: 100%; 
        }
    }
</style>

<div class="container">
    <!-- Login Form -->
    <form id="login-form" method="post">
        <h2 class="text-center">Login</h2>
        <div class="form-group">
            <label for="loginEmail">Email address</label>
            <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Enter email" required>
            <span class="field_error" id="login_email_error"></span>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" required>
            <span class="field_error" id="login_password_error"></span>
        </div>
        <button type="button" class="btn btn-primary btn-block" onclick="user_login()"><b>Login</b></button>
        <div class="form-output login_msg">
			<p class="form-messege field_error"></p>
		</div>
    </form>

    <hr>

    <!-- Registration Form -->
    <form id="register-form" method="post">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="registerName">Full Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your full name" required>
            <span class="field_error" id="name_error"></span>
        </div>
        <div class="form-group">
            <label for="registerEmail">Email address</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter email" required>
            <span class="field_error" id="email_error"></span>
        </div>
        <div class="form-group">
            <label for="registerPassword">Mobile</label>
            <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Phone number" required>
            <span class="field_error" id="mobile_error"></span>
        </div>
        <div class="form-group">
            <label for="registerPassword">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            <span class="field_error" id="password_error"></span>
        </div>
        <button type="button" class="btn btn-primary btn-block" onclick="user_register()"><b>Register</b></button>
        <div class="form-output register_msg">
			<p class="form-messege field_error"></p>
		</div>
    </form>
</div>


<?php require('footer.php'); ?>