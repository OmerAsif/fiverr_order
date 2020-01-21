<body style=" background-image: linear-gradient(to bottom , #1a1a1b, #d8d8d8); ">
    <div class="row" style="margin-top: 10%">
    <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4 col-xl4"></div>    
    <div class="col-xs-8 col-sm-6 col-md-4 col-lg-4 col-xl4" >
        <form class="login-form" action="<?php echo base_url().'dashboard/auth_user'?>" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="Password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-check">
<!--                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>    
    <div class="col-xs-2 col-sm-3 col-md-4 col-lg-4 col-xl4"></div>    
</div>
