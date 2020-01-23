
<script src="<?php echo base_url() . "assets/js/jquery-3.4.1.min.js" ?>"></script>
<script src="<?php echo base_url() . "assets/js/bootstrap.min.js" ?>"></script>
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
