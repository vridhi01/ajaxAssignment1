$(document).ready(function() {
    $('#submit').click(function() {
        event.preventDefault();
        var name = $("#name").val();
        var email = $("#email").val();
        var message = $("#message").val();
        var date = $("#date").val();
        //name validation
        if (name == "") {
            alert("Please Input the name");
            document.getElementById("name").focus();
            return false;
        }
        //email validation
        if (email == "") {
            alert("Please Input the Email");
            document.getElementById("email").focus();
            return false;
        }
        var testEmail = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!testEmail.test(email)) {
            alert('wrong email entered');
            document.getElementById("email").focus();
            return false;
        }
        //message validation
        if (message == "") {
            alert("Please Input the message");
            document.getElementById("message").focus();
            return false;
        }
        //date validation
        if (date == "") {
            alert("Please Input the date");
            document.getElementById("date").focus();
            return false;
        }
        // passing data'
        var data = "name=" + name + "&email=" + email + "&message=" + message + "&date=" + date;
        $.ajax({
            url: 'insertdata.php',
            type: 'POST',
            data: data,
            success: function(returndata) {
                if (returndata == 'true') {
                    $('#sucfailmsg').append('<div class="alert alert-success" role="alert">form submitted successfully</div>');
                    setTimeout(function() {
                        $('#sucfailmsg').hide();
                    }, 10000);
                    $("#form")[0].reset();

                } else {
                    $('#sucfailmsg').append('<div class="alert alert-danger" role="alert">Error in submitting form</div>');
                    setTimeout(function() {
                        $('#sucfailmsg').hide();
                    }, 10000);
                }
            }
        });
    });

});