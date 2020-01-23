


<div style="margin-top: 10px" id="setting_section">
    <h3>Manage Orders</h3>


    <ul class="nav nav-tabs">
        <li class="active">
            <a data-toggle="tab" href="#ReceivedRequests">Received Orders</a>
        </li>
        <li>
            <a data-toggle="tab" href="#InactiveRequests">Reserved Orders</a>
        </li>
        <li>
            <a data-toggle="tab" href="#CompletedRequests">Completed Orders</a>
        </li>
        <li>
            <a data-toggle="tab" href="#DeletedRequests">Deleted Orders</a>
        </li>
    </ul>
    <hr/>
    <div class="tab-content">


        <div class="tab-pane fade active in" id="ReceivedRequests" style="overflow: scroll">
            <table class='table table-bordered table-condensed table-striped table-hover' id="all_requests">
                <thead> 
                    <tr>
                        <th colspan="9" style="text-align: center">Order Request</th>
                    </tr>
                    <tr data-toggle="modal" data-target="#exampleModal">
                        <th>Request ID</th>
                        <th>date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Cell Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Property ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($active_request as $key => $val) {
                        ?>
                        <tr class="table-row" data-toggle="modal" data-target="#request_detail">
                            <td id="id"><?php echo $val['id']; ?></td>
                            <td id="date"><?php echo $val['post_date']; ?></td>
                            <td id="name"><?php echo $val['name']; ?></td>
                            <td id="phone"><?php echo $val['phone']; ?></td>
                            <td id="cell_phone"><?php echo $val['cell_phone']; ?></td>
                            <td id="Email"><?php echo $val['Email']; ?></td>
                            <td id="Message"><?php echo $val['Message']; ?></td>
                            <td id="property_id"><?php echo $val['property_id']; ?></td>
                            <td id="property_status"><?php echo $val['status']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>

            </table>



        </div>

        <div class="tab-pane fade  in" id="InactiveRequests" style="overflow: scroll">
            <table class='table table-bordered table-condensed table-striped table-hover' id="all_requests">
                <thead> 
                    <tr>
                        <th colspan="9" style="text-align: center">Order Completed</th>
                    </tr>
                    <tr data-toggle="modal" data-target="#exampleModal">
                        <th>Request ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Cell Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Property ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($in_active_request as $key => $val) {
                        ?>
                        <tr class="table-row" data-toggle="modal" data-target="#request_detail">
                            <td id="id"><?php echo $val['id']; ?></td>
                            <td id="date"><?php echo $val['post_date']; ?></td>
                            <td id="name"><?php echo $val['name']; ?></td>
                            <td id="phone"><?php echo $val['phone']; ?></td>
                            <td id="cell_phone"><?php echo $val['cell_phone']; ?></td>
                            <td id="Email"><?php echo $val['Email']; ?></td>
                            <td id="Message"><?php echo $val['Message']; ?></td>
                            <td id="property_id"><?php echo $val['property_id']; ?></td>
                            <td id="property_status"><?php echo $val['status']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade  in" id="CompletedRequests" style="overflow: scroll">
            <table class='table table-bordered table-condensed table-striped table-hover' id="all_requests">
                <thead> 
                    <tr>
                        <th colspan="9" style="text-align: center">Order Completed</th>
                    </tr>
                    <tr data-toggle="modal" data-target="#exampleModal">
                        <th>Request ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Cell Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Property ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($complete_Request as $key => $val) {
                        ?>
                        <tr class="table-row" data-toggle="modal" data-target="#request_detail">
                            <td id="id"><?php echo $val['id']; ?></td>
                            <td id="date"><?php echo $val['post_date']; ?></td>
                            <td id="name"><?php echo $val['name']; ?></td>
                            <td id="phone"><?php echo $val['phone']; ?></td>
                            <td id="cell_phone"><?php echo $val['cell_phone']; ?></td>
                            <td id="Email"><?php echo $val['Email']; ?></td>
                            <td id="Message"><?php echo $val['Message']; ?></td>
                            <td id="property_id"><?php echo $val['property_id']; ?></td>
                            <td id="property_status"><?php echo $val['status']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade  in" id="DeletedRequests" style="overflow: scroll">
            <table class='table table-bordered table-condensed table-striped table-hover' id="all_requests">
                <thead> 
                    <tr>
                        <th colspan="9" style="text-align: center">Order Completed</th>
                    </tr>
                    <tr data-toggle="modal" data-target="#exampleModal">
                        <th>Request ID</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Cell Phone</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Property ID</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($Deleted_request as $key => $val) {
                        ?>
                        <tr class="table-row" data-toggle="modal" data-target="#request_detail">
                            <td id="id"><?php echo $val['id']; ?></td>
                            <td id="date"><?php echo $val['post_date']; ?></td>
                            <td id="name"><?php echo $val['name']; ?></td>
                            <td id="phone"><?php echo $val['phone']; ?></td>
                            <td id="cell_phone"><?php echo $val['cell_phone']; ?></td>
                            <td id="Email"><?php echo $val['Email']; ?></td>
                            <td id="Message"><?php echo $val['Message']; ?></td>
                            <td id="property_id"><?php echo $val['property_id']; ?></td>
                            <td id="status"><?php echo $val['status']; ?></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade bd-example-modal-lg" id="request_modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">  
                    <button type="button" class="close" data-dismiss="modal">&times;</button>  
                    <h4 class="modal-title">detalhes do pedido</h4>  
                </div>
                <div class="modal-body" id="modal_request_body">

                </div> 
                <div class="modal-footer">  
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
            </div>
        </div>
    </div>
