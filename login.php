<?php include 'header.php'?>
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-3">

    <form action="/login_handler.php" method="post">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    <div class="col-md-3"></div>
</div>

<?php include 'footer.php'?>


