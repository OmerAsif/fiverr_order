
<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url()."assets/plugins/jquery/jquery.min.js";?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url()."assets/plugins/jquery-ui/jquery-ui.min.js";?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()."assets/plugins/bootstrap/js/bootstrap.bundle.min.js";?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url()."assets/plugins/chart.js/Chart.min.js";?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/plugins/sparklines/sparkline.js";?>"></script>
<!-- JQVMap -->
<script src="<?php echo base_url()."assets/plugins/jqvmap/jquery.vmap.min.js";?>"></script>
<script src="<?php echo base_url()."assets/plugins/jqvmap/maps/jquery.vmap.usa.js";?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/plugins/jquery-knob/jquery.knob.min.js";?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url()."assets/plugins/moment/moment.min.js";?>"></script>
<script src="<?php echo base_url()."assets/plugins/daterangepicker/daterangepicker.js";?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url()."assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js";?>"></script>
<!-- Summernote -->
<script src="<?php echo base_url()."assets/plugins/summernote/summernote-bs4.min.js";?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url()."assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js";?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/js/adminlte.js";?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/js/pages/dashboard.js";?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/js/demo.js";?>"></script>

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
        $('#requests_page').on('click', function () {
            $('#DashBoardBody').load('<?php echo base_url() . "dashboard/get_body/requests_page"; ?>')
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

</script>


</body>
</html>
