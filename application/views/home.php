<div style="margin-top: 10px" id="setting_section">
    <h3>Change Website Info</h3>


    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">Change Site Email</a></li>
        <li><a data-toggle="tab" href="#menu1">User Settings</a></li>
        <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <br/>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <!--___________________________________form company info settings____________________________________________-->
                    <form >
                        <div class="form-group">
                            <label for="Email"><i class="fa fa-envelope"></i> Email address</label>
                            <input value="<?php echo $company_info[0]['company_email']; ?>" type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="tel"><i class="fa fa-phone"></i> Telephone</label>
                            <input type="tel" value="<?php echo $company_info[0]['contact_no']; ?>" class="form-control" id="tel" placeholder="Telephone">
                        </div>
                        <div class="form-group">
                            <label for="whatsapp"><i class="fa fa-whatsapp"></i> Whatsapp</label>
                            <input type="tel" value="<?php echo $company_info[0]['whatsapp']; ?>" class="form-control" id="whatsapp" placeholder="whatsapp">
                        </div>

                        <button type="button" class="btn btn-primary" id="update_contact_info">Submit</button>
                    </form>
                </div>

            </div>


        </div>
        <div id="menu1" class="tab-pane fade">
            <br/>
            <h3>Update User Info</h3>

            <!--___________________________________form info settings____________________________________________-->
            <form >
                <div class="form-group">

                    <label for="user_name"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" value="<?php echo $user_info[0]['user_name'] ?>" class="form-control" id="user_name" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password"><i class="fa fa-key"></i></i> password</label>
                    <input type="password" class="form-control" name ="password" id="password" placeholder="password">
                </div>
                <div class="form-group">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="email" value="<?php echo $user_info[0]['email'] ?>" class="form-control" id="email" placeholder="Email">
                </div>

                <div class="form-group form-inline">

                    <input type="hidden" value="1" id="status" name="status"  class="form-control" id="active" >


                </div>
                <button type="button" class="btn btn-primary" id="update_user_info">Submit</button>
            </form>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Completed Requests.</h3>
            <p>Some content in menu 2.</p>
        </div>
    </div>

</div>