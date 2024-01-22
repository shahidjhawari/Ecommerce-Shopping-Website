<?php require('top.php'); ?>

<style>
    body {
        background-color: #f8f9fa;
    }
    .container {
        display: flex;
        justify-content: space-around;
        max-width: 800px; /* Adjust the width according to your design */
        margin: 100px auto;
    }
    #loginForm,
    #registerForm {
        width: 45%; /* Adjust the width of the forms as needed */
    }
    @media (max-width: 767px) {
        .container {
            flex-direction: column; /* Stack forms on top of each other for small screens */
            align-items: center; /* Center forms horizontally */
        }
        #loginForm,
        #registerForm {
            width: 100%; /* Take up full width on small screens */
        }
    }
</style>

<div class="container">
    <!-- Login Form -->
    <form id="loginForm" method="post">
        <h2 class="text-center">Login</h2>
        <div class="form-group">
            <label for="loginEmail">Email address</label>
            <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" name="login_password" id="login_password" placeholder="Password" required>
        </div>
        <button type="button" class="btn btn-primary btn-block" onclick="user_login()">Login</button>
    </form>

    <hr>

    <!-- Registration Form -->
    <form id="registerForm">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="registerName">Full Name</label>
            <input type="text" class="form-control" id="registerName" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="registerEmail">Email address</label>
            <input type="email" class="form-control" id="registerEmail" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="registerPassword">Mobile</label>
            <input type="text" class="form-control" id="registerPassword" placeholder="Phone number" required>
        </div>
        <div class="form-group">
            <label for="registerPassword">Password</label>
            <input type="password" class="form-control" id="registerPassword" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Register</button>
    </form>
</div>


<?php require('footer.php'); ?>