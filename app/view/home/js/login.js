/**
 * Created by Attila on 2016. 09. 11..
 */
document.getElementById('enter').onclick = function() {


    var user_email = $('#email').val();

        $.ajax({
            url: "/loc/app/login.php",
            type: "post",
            data: {
                user_email: user_email
            },
            success: function (data) {
                // you will get response from your php page (what you echo or print)
                $('#login').html(data);
            },
        });
    }
