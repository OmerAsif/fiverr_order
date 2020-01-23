
<div style="margin-top: 10px" id="setting_section">
    <h3>Manage Products</h3>
    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#AddNew">Add New</a>
        </li>
        <li>
            <a data-toggle="tab" id="all_active" href="#show_all_active">Show All</a>
        </li>


    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="AddNew" >
            <div class="container">

                <form class="well form-horizontal" action=" " method="post"  id="contact_form">


                    <fieldset>

                        <!-- Form Name -->
                        <legend><center><h2><b>Registration Form</b></h2></center></legend><br>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Tipo de Produto</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
                                    <select name="property_type" id ="p_type" class="form-control selectpicker">
                                        <?php
                                        foreach ($property_type as $key => $val) {


                                            echo "<option id='" . $val['ID'] . "'>" . $val['type'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Crédito</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-bitcoin"></i></span>
                                    <input name="credit" id="credit" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group"> 
                            <label class="col-md-4 control-label">Entrada</label>
                            <div class="col-md-4 selectContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-bitcoin"></i></span>
                                    <input name="input" id="input"  class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label">Parcelas</label>  
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input  name="installments" id="installments" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >Situation</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>


                                    <select name="status" id="status" class="form-control selectpicker">
                                        <?php
                                        foreach ($status_type as $key => $val) {


                                            echo "<option id='" . $val['id'] . "'>" . $val['name'] . "</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" >Administradora</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="administrator" id="administrator"  class="form-control"  type="text">
                                </div>
                            </div>
                        </div>

                        <!-- Text input-->

                        <div class="form-group">
                            <label class="col-md-4 control-label" >EObservação</label> 
                            <div class="col-md-4 inputGroupContainer">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input name="note" id='note' placeholder="Observação" class="form-control"  type="text">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="interested" value="Estou interessado">




                        <!-- Success message -->
                        <div class="alert alert-warning" role="alert" id="success_message"><h5>Please fill all fields</h5></div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label"></label>
                            <div class="col-md-4"><br>
                                <button type="button" class="btn btn-warning" id ='save'>SUBMIT<span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
                            </div>
                        </div>

                    </fieldset>
                    <input type="reset" style="visibility: hidden;" id="reset_product_save_form">

                </form>
            </div>
        </div><!-- /.container -->
        <div class="tab-pane fade  in" id="show_all_active">
            
        </div>
    </div>

</div>
