<div class="tab-content" style="height: 600px; overflow: scroll">

    <div class="tab-pane fade active in" id="ReceivedRequests" style="overflow: visible">
        <table class='table table-bordered table-condensed table-striped table-hover' id="all_active_product_tbl" style="font-size: 12px;">
            <thead> 
                <tr>
                    <th colspan="10" style="text-align: center">Order Request</th>
                </tr>
                <tr data-toggle="modal" data-target="#exampleModal">
                    <th>Property ID</th>
                    <th>Property Type</th>
                    <th>Credit</th>
                    <th>Input</th>
                    <th>Installments</th>
                    <th>Administrator</th>
                    <th>Situation</th>
                    <th>Note</th>
                    <th>Satus</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                    foreach ($all_products as $key => $val) {
                        if($val['situation']==="Reservada"){
                            $row_background= 'bg-success';
                        }else if($val['situation']==="Vendida"){
                            $row_background= 'bg-danger';
                        }else{
                            $row_background ="";
                        }
                    ?>
                    <tr class="table-row <?php echo $row_background?>" data-toggle="modal">
                        <td id="id"><?php echo $val['ID']; ?></td>
                        <td id="name"><?php echo $val['property_type']; ?></td>
                        <td id="phone"><?php echo $val['credit']; ?></td>
                        <td id="cell_phone"><?php echo $val['input']; ?></td>
                        <td id="Email"><?php echo $val['installments']; ?></td>
                        <td id="Message"><?php echo $val['administrator']; ?></td>
                        <td id="property_id"><?php echo $val['situation']; ?></td>
                        <td id="property_status"><?php echo $val['note']; ?></td>
                        <td id="property_status"><?php echo $val['status']; ?></td>
                        <td id="property_status">
                            <div style=" display: flex">
                                <button style="margin: 5px;" class="btn btn-sm btn-danger" type="button" id="edit"  product_id="<?php echo $val['ID']; ?>" data-target="#request_detail">Edit</button>
                                <button style="margin: 5px;" class="btn btn-sm btn-danger" type="button" id = "delete"  product_id="<?php echo $val['ID']; ?>" data-target="#request_detail"> Delete</button>

                            </div>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>

        </table>



    </div>
    <div class="modal fade bd-example-modal-lg" id="request_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">  
                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                    <h4 class="modal-title">detalhes do pedido</h4>  
                </div>
                <div class="modal-body" id="request_body">

                </div> 
                <div class="modal-footer">  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
            </div>
        </div>
    </div>



</div>