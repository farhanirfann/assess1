<?php
include "header.php";
?>

<div class="card text-center container mt-5 mb-5">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control">
            </div>
        </div>
    </div>
    <div class="card-footer text-body-secondary">
        <button type="button" class="btn btn-primary" onclick = "Redirect();">Log In</button>
    </div>
</div>


<?php
include "footer.php";
?>