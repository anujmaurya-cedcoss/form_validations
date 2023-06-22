<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form Validations</title>
</head>

<body>
    <div class="wrapper col-12 ">
        <div class='header bg-danger'>
            <h1 class='text-center text-white'>Order/Delivery Tracking</h1>
            <h3 class='text-center text-white'>Trace Your Order</h3>
        </div>

        <form action="validate.php" method="post">
            <!-- personal info -->
            <div class="personalInfo">
                <h4 class='text-danger mt-5 ml-5'>Personal Info</h4>
                <hr>
                <div class="form-group col-6">
                    <!-- name -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        Name
                        <input type="text" class="form-control" name='name'>
                    </div>
                    <!-- e-mail -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        E-mail
                        <input type="text" class="form-control" name='email'>
                    </div>
                    <!-- contact-number -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        <label>Contact Number</label>
                        <input type="text" class="form-control" name='contact'>
                    </div>
                </div>
            </div>

            <!-- order info -->
            <div class="personalInfo">
                <h4 class='text-danger mt-5 ml-5'>Order Information</h4>
                <hr>
                <div class="form-group col-6">
                    <!-- order id -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        Order ID :
                        <input type="text" class="form-control" name='oid'>
                    </div>
                    <!-- address -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        Address :
                        <input type="text" class="form-control" name='address'>
                    </div>
                    <!-- contact-number -->
                    <div class="form-group mx-sm-3 mb-2 row">
                        <label>Date</label>
                        <input type="date" class="form-control" name='date'>
                    </div>
                </div>
            </div>
    </div>

    <button type="submit" class="btn btn-danger mb-2">Submit</button>
    </form>
    </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</html>