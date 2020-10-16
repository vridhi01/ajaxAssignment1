$(document).ready(function() {
    $('#submit').click(function() {
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
                alert(returndata);
                window.location.href = "assignment1.php";


            }
        });


    });
});