<?php require('top.php'); ?>

<style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 400px;
            margin-top: 100px;
        }
</style>

<div class="container">
    <!-- Login Form -->
    <form id="loginForm">
        <h2 class="text-center">Login</h2>
        <div class="form-group">
            <label for="loginEmail">Email address</label>
            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
        </div>
        <div class="form-group">
            <label for="loginPassword">Password</label>
            <input type="password" class="form-control" id="loginPassword" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
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