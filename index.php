<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- // bootstrap -->

    <!-- manual add css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- // manual add css -->
    <title>JQueryAjaxPhp</title>
</head>

<body>

    <div class="container mt-5">
        <h1 class="alert-info text-center mb-4 p-3">
            AJAX --PHP -- BOOTSTRAP -- JQUERY
        </h1>
        <div class="row">
            <form class="col-sm-5" id="myform" method="POST">
                <h2 class="alert-warning text-center p-2">ADD/UPDATE STUDENT</h2>
                <div>
                    <input type="text" class="form-control" id="sid" style="display:none;" />
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" autocomplete="off">
                </div>
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" autocomplete="off">
                </div>
                <div>
                    <label for="phone" class="form-label">Mobile No.</label>
                    <input type="email" class="form-control" id="phone" autocomplete="off">
                </div>
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" autocomplete="off">
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn btn-primary" id="btn">Save</button>
                </div>
                <div class="msg"></div>
            </form>
            <div class="col-sm-7 text-center">
                <h3 class="alert-secondary text-center p-2">Table</h3>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">USERNAME</th>
                            <th scope="col">EMAIL ID</th>
                            <th scope="col">MOBILE NO.</th>
                            <th scope="col">PASSWORD</th>
                            <th colspan="2">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>
            </div>
        </div>
    </div>




    <!-- javascript  code -->

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jqajax.js"></script>
    <!-- // javascript  code -->

</body>

</html>