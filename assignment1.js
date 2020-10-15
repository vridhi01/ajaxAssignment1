$(document).ready(function() {
<<<<<<< HEAD
    setInterval(function() {
=======

    function getajax() {
>>>>>>> e13472c8908ac16926ded92af2ce0443bcd0d8e6
        $.ajax({
            url: 'ajaxfile.php',
            type: 'get',
            dataType: 'JSON',
            success: function(response) {
                console.log(response);
                var len = response.length;
<<<<<<< HEAD
=======
                var tr_str;
>>>>>>> e13472c8908ac16926ded92af2ce0443bcd0d8e6
                for (var i = 0; i < len; i++) {
                    var id = response[i].id;
                    var name = response[i].name;
                    var email = response[i].email;
                    var message = response[i].message;
                    var date = response[i].date;
<<<<<<< HEAD
                    var tr_str = "<tr>" +
=======
                    tr_str += "<tr>" +
>>>>>>> e13472c8908ac16926ded92af2ce0443bcd0d8e6
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + name + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + message + "</td>" +
                        "<td>" + date + "</td>" +
                        "</tr>";
<<<<<<< HEAD
                    $("#userTable tbody").html(tr_str);

                }
            }
        });
    }, 10000); //10000 milliseconds = 10 seconds
});
=======
                }
                $("#userTable tbody").html(tr_str);
            }
        });
    }
    getajax();
    setInterval(getajax, 10000); //10000 milliseconds = 10 seconds
});;
>>>>>>> e13472c8908ac16926ded92af2ce0443bcd0d8e6
