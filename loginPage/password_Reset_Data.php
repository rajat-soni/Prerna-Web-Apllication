<?php include'../header.php';?>
    <div class="container">
         <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="card mt-4">
                                <div class="   card-header text-center">
                                    <h3>Reset Password Page</h3>
                                </div>
                                <div class="card-body">
                                    <form action="passwordResetupdate.php" method="post">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">New Password</label>
                                            <input type="password" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">Please Enter Your New Password</small>
                                        </div>
                                         <div class="form-group">
                                            <label for="exampleInputEmail1">Re-Enter Password</label>
                                            <input type="text" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                                            <small id="emailHelp" class="form-text text-muted">Please Re-Enter Your Password</small>
                                        </div>
                                        <input type="submit" name="password-reset-token" class="btn btn-primary">
                                    </form>
                                </div>
                                <div class="card-footer" style="float:right;"> All rights reserved in CBSL 2020 &copy;</div>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>              
            </div>
        </div>
    </div>
<?php include '../footer.php';