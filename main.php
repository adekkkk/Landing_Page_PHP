<?php include "php/header.php" ?>

<div class="container d-flex flex-column min-vh-100 justify-content-center align-items-center mt-5 pt-5">
    <h1 class="title">Welcome to the sample PHP Landing Page</h1>
        <p>This page was created for practice of PHP</p>
        <p>its purpose is to simulate a potential environment used by a business.</p>
    <form id="main-form" class="mt-2 pt-2" action="main.php" method="post">
        <div class="">
            <div class="form-group">
                <label for="employeeID">Employee ID</label>
                <input type="number" class="form-control" id="employeeID" placeholder="Enter Employee ID">

            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input type="password" class="form-control" id="Password" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>
    </form>
</div>

<?php include "php/footer.php" ?>
