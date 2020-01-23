
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url() . "assets/plugins/jquery/jquery.min.js"; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url() . "assets/plugins/jquery-ui/jquery-ui.min.js"; ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url() . "assets/plugins/bootstrap/js/bootstrap.bundle.min.js"; ?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url() . "assets/plugins/chart.js/Chart.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() . "assets/plugins/sparklines/sparkline.js"; ?>"></script>
<!-- JQVMap -->
<!--<script src="<?php echo base_url() . "assets/plugins/jqvmap/jquery.vmap.min.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/jqvmap/maps/jquery.vmap.usa.js"; ?>"></script>-->
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() . "assets/plugins/jquery-knob/jquery.knob.min.js"; ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url() . "assets/plugins/moment/moment.min.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url() . "assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"; ?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url() . "assets/plugins/summernote/summernote-bs4.min.js"; ?>"></script>
<!-- overlayScrollbars -->
<!--<script src="<?php echo base_url() . "assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"; ?>"></script>-->
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "assets/js/adminlte.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php // echo base_url() . "assets/js/pages/dashboard.js";  ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "assets/js/demo.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/datatables/jquery.dataTables.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js"; ?>"></script>
<script>
    $(document).ready(function () {
        $('#homepage').on('click', function () {
            $('#DashBoardBody').load('<?php echo base_url() . "dashboard/get_body/dashboard_homepage"; ?>')
        });
    });
    $(document).ready(function () {
        $('#setting').on('click', function () {
            $('#DashBoardBody').load('<?php echo base_url() . "dashboard/get_body/setting"; ?>')
        });
    });
    $(document).ready(function () {
        $('#product_page').on('click', function () {
            $('#DashBoardBody').load('<?php echo base_url() . "dashboard/get_body/product_view"; ?>')
        });
    });
    $(document).ready(function () {
        $('#partner_page').on('click', function () {
            $('#DashBoardBody').load('<?php echo base_url() . "dashboard/AddPartmerForm"; ?>')
        });
    });
    $(document).ready(function () {
        $(document).on('click', '#update_contact_info', function () {
            var email = $('#Email').val();
            var tel = $('#tel').val();
            var whatsapp = $('#whatsapp').val();
            if (email == "" || tel == "" || whatsapp == "") {
                alert("Please Fill All Fields");
            } else {
                var update_data = {"company_email": email, "contact_no": tel, "whatsapp": whatsapp};
                $.ajax({
                    method: "POST",
                    url: "<?php echo base_url() . "Dashboard/update_company_data" ?>",
                    data: update_data,
                    success: function (data) {
                        alert(data);
                    }

                });
            }


        });
    });
    $(document).on('click', '#update_user_info', function () {
        var user_name = $('#user_name').val();
        var Password = $('#password').val();
        var email = $('#email').val();
        var status = $('#status').val();
        if (user_name == "" || password == "" || email == "" || status == "") {
            alert("Please Fill All Fields");
        } else {
            var update_data = {"user_name": user_name, "password": Password, "email": email, "status": status};
            $.ajax({
                method: "POST",
                url: "<?php echo base_url() . "Dashboard/update_user_data" ?>",
                data: update_data,
                success: function (data) {
                    alert(data);
                }

            });
        }


    });
    var request_id = 0;
    $(document).on('click', '#all_requests tbody tr', function () {
        request_id = $(this).find('td#id').text();
        console.log(request_id)
        $.ajax({
            method: "POST",
            url: "<?php echo base_url() . 'Dashboard/received_request'; ?>",
            data: {request_id},
            async: false,
            success: function (data) {
                $('#modal_request_body').html(data);
                $('#request_modal').modal('show');
            }

        });
    });
    $(document).on('click', '#save_action', function () {
        var action = $('#action_option option:selected').attr('id');
        console.log(action);
        $.ajax({
            url: "<?php echo base_url() . "Dashboard/UpdateRequestStatus" ?>",
            method: "POST",
            data: {request_id, action},
            success: function (data) {
                console.log(data);
            }



        });
        $('#request_modal').modal('hide');
    });
    $(document).on('click', '#save', function () {
        var val1 = [];
        val1.push(
                {
                    'property_type': $('#contact_form #p_type option:selected').val(),
                    'property_type_id': $('#contact_form #p_type option:selected').attr('id'),
                    'credit': $('#contact_form #credit').val(),
                    'input': $('#contact_form #input').val(),
                    'installments': $('#contact_form #installments').val(),
                    'administrator': $('#contact_form #administrator').val(),
                    'situation': $('#contact_form #status option:selected').val(),
                    'note': $('#contact_form #note').val(),
//                    'property_typeval1': $('#contact_form #status option:selected').attr('id'),
                }
        );

        console.log(val1);

        $.ajax({
            url: "<?php echo base_url() . "Dashboard/save_new_product" ?>",
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(val1),
            success: function (data) {
                console.log(data);
                if (data == 'OK') {
                    console.log(data);
                    $('#success_message').removeClass('alert-warning');
                    $('#success_message h5').text('Successfully Saved..');
                    $('#success_message').addClass('alert-success');


                }

            }
        });
    });

    $(document).on('click', '#all_active', function () {
        getAllActive()
    });

    function getAllActive() {
        $.ajax({
            method: "POST",
            url: "<?php echo base_url() . 'Dashboard/get_body/get_active_products'; ?>",
            async: true,
            success: function (data) {
                $('#show_all_active').html(data);
                $("#all_active_product_tbl").DataTable({
                    scrollY: '50vh',
                    scrollCollapse: true,
                    paging: true
                });

            }

        });

    }

    $(document).on('click', '#all_active_product_tbl tbody tr td button', function () {
        var type = "";
        var product_id = "";
        type = $(this).attr('id');
        if (type == "edit") {
            product_id = $(this).attr('product_id');

            $.ajax({
                method: "POST",
                url: "<?php echo base_url() . 'Dashboard/get_body/product_edit_vies'; ?>",
                data: {product_id},
                async: false,

                success: function (data) {
                    $('#request_body').html(data);
                    $('#request_modal').modal('show');


                }

            });


        } else if (type == 'delete') {
            product_id = $(this).attr('product_id');
            var result = confirm("Do you realy want to delete this product");

            if (result) {

            }


            $.ajax({
                method: "POST",
                url: "<?php echo base_url() . 'Dashboard/delete_product'; ?>",
                data: {product_id},
                async: true,

                success: function (data) {
                    console.log(data);
                    $(this).parent().parent().remove();
                }

            });

        }


    });



    $(document).on('click', '#btn_edit', function () {
        var val1 = [];
        var ID = $('#edit_product > input[type=hidden]').val();
        var property_type = $('#edit_product #p_type option:selected').val();
        var property_type_id = $('#edit_product #p_type option:selected').attr('id');
        var credit = $('#edit_product #credit').val();
        var input = $('#edit_product #input').val();
        var installments = $('#edit_product #installments').val();
        var administrator = $('#edit_product #administrator').val();
        var situation = $('#edit_product #edit_status option:selected').val();
        var note = $('#edit_product #note').val();
        var edit_status = $('#edit_product #edit_status option:selected').attr('id');
        if (edit_status == 1) {
            edit_status = 9;
        }

        val1.push(
                {
                    'ID': ID,
                    'property_type': property_type,
                    'property_type_id': property_type_id,
                    'credit': credit,
                    'input': input,
                    'installments': installments,
                    'administrator': administrator,
                    'note': note,
                    'situation': situation,
                    'status': edit_status,
                }
        );
        $.ajax({
            url: "<?php echo base_url() . "Dashboard/edit_product" ?>",
            method: 'POST',
            contentType: 'application/json',
            data: JSON.stringify(val1),
            async: false,
            success: function (data) {
                if (data == 'ok') {
                    $('#all_active').trigger('click');
                    $('#edit_success_message').removeClass('alert-warning');
                    $('#edit_success_message h5').text('Successfully Updated..');
                    $('#edit_success_message').addClass('alert-success');
                    $('#request_modal').modal('hide');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();



                }
            },

        });
    });
    $(document).on('click', '#AddNewPartner', function () {
        var name = $('#partner_name').val();
        var partner_address = $('#partner_address').val();
        var partner_telephone = $('#partner_telephone').val();
        var data = {name, partner_address, partner_telephone};
        $.ajax({
            method: "POST",
            url: "<?php echo base_url() . 'dashboard/SavePartnerData' ?>",
            data: JSON.stringify(data),
            contentType: 'application/json',
            success: function (data) {
                console.log(data);
            }

        });
    });
</script>


</body>
</html>
