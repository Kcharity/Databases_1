<?php include 'header.php'?>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-3">

            <form action="/register_handler.php" method"POST">
                <div class="form-group">
                    <label for="firstname">Firstname</label>
                    <input type="text" class="form-control" id="firstname"  name="firstname">
                </div>

                <div class="form-group">
                    <label for="firstname">Password:</label>
                    <input type="text" class="form-control" id="email" name="lastname">
                </div>

                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
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