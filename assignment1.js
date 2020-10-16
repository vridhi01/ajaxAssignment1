$(document).ready(function() {
    $(".page-link").click(function() {
        event.preventDefault();
        var id = $(this).attr("data-id");
        getajax(id);
        clearInterval(myVar);

    });

    function getajax(id) {
        $.ajax({
            url: 'ajaxfile.php',
            type: 'get',
            dataType: 'JSON',
            data: {
                page: id
            },
            success: function(response) {
                console.log(response);
                var len = response.length;
                var tr_str;

                for (var i = 0; i < len; i++) {
                    var id = response[i].id;
                    var name = response[i].name;
                    var email = response[i].email;
                    var message = response[i].message;
                    var date = response[i].date;
                    tr_str += "<tr>" +
                        "<td>" + (i + 1) + "</td>" +
                        "<td>" + name + "</td>" +
                        "<td>" + email + "</td>" +
                        "<td>" + message + "</td>" +
                        "<td>" + date + "</td>" +
                        "</tr>";
                }
                $("#userTable tbody").html(tr_str);
            }
        });
    }
    getajax();
    var myVar = setInterval(getajax, 10000); //10000 milliseconds = 10 seconds
});;