// Ajax request for insert data into database...

$(document).ready(function () {

    function showdata() {
        output = "";
        $.ajax({

            url: "display.php",
            method: "POST",
            dataType: "json",
            success: function (data) {
                // console.log(data);
                if (data) {
                    x = data;
                } else {
                    x = "";
                }
                for (i = 0; i < x.length; i++) {
                    output += "<tr><td>" +
                        x[i].id +
                        "</td><td>" +
                        x[i].username +
                        "</td><td>" +
                        x[i].email +
                        "</td><td>" +
                        x[i].phone +
                        "</td><td>" +
                        x[i].password +
                        "</td><td><button class='btn btn-warning btn-sm btn-edit mb-2' data-id="+ x[i].id +">Edit</button> <button class='btn btn-danger btn-sm btn-delete' data-id="+ x[i].id +">Delete</button></td></tr>";
                }
                $("#tbody").html(output);
                // msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                // $(".msg").html(msg);
                // $("#myform")[0].reset();
            }
        });
    }
    showdata();

    $('#btn').click(function (e) {
        e.preventDefault();
        console.log("clicked btn");
        let id = $("#sid").val();
        let name = $("#name").val();
        let email = $("#email").val();
        let phone = $("#phone").val();
        let password = $("#password").val();
        // console.log(name);
        // console.log(email);
        // console.log(phone);
        // console.log(password);

        mydata = {id:id, name: name, email: email, phone: phone, password: password };
        // console.log(mydata);

        $.ajax({

            url: "insert.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                console.log(data);
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                $(".msg").html(msg);
                $("#myform")[0].reset();
                showdata();
            }
        });
    });

    $('#tbody').on("click",".btn-delete",function(){
        // console.log("delected btn clcked");
        let id = $(this).attr("data-id");

        mydata = {id:id};
        $.ajax({

            url: "delete.php",
            method: "POST",
            data: JSON.stringify(mydata),
            success: function (data) {
                console.log(data);
                msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
                $(".msg").html(msg);
                showdata();
            }
        });
    });

    $('#tbody').on("click",".btn-edit",function(){
        // console.log("delected btn clcked");
        let id = $(this).attr("data-id");

        mydata = {id:id};
        $.ajax({

            url: "edit.php",
            method: "POST",
            dataType: "json",
            data: JSON.stringify(mydata),
            success: function (data) {
                console.log(data);
                $('#sid').val(data.id);
                $('#name').val(data.username);
                $('#email').val(data.email);
                $('#phone').val(data.phone);
                $('#password').val(data.password);
            }
        });
    });

});