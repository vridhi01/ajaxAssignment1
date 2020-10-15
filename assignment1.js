$(document).ready(function() {
    $(".page-link").click(function() {
        // e.preventDefaut();
        var id = $(this).attr("data-id");
        var select_id = $(this).parent().attr("id");
        getajax(id, select_id);

    });

    function getajax(getid, select_id) {
        $.ajax({
            url: 'ajaxfile.php',
            type: 'get',
            data: {
                page: getid
            },
            dataType: 'JSON',
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
    setInterval(getajax, 10000); //10000 milliseconds = 10 seconds



});