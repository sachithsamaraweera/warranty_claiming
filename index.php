<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>

</head>

<body>

    <div class="container col-md-6">
        <form action="insert.php" method="POST">
            <div class="form-group">
                <label for="inputEmail4">Item Name</label>
                <input type="text" name="item" class="form-control" id="inputEmail4" placeholder="">


                <label for="inputPassword4">Purchased Shop</label>
                <input type="text" name="shop" class="form-control" id="inputPassword4" placeholder="">



                <label for="inputAddress">Description</label>
                <input type="text" name="description" class="form-control" id="inputAddress" placeholder="">


                <label for="inputAddress2">Purchased Date</label>
                <input type="date" name="purchased_date" class="form-control" id="inputAddress2" placeholder="">

                <label for="inputAddress2">Warranty Coverage</label>
                <select name="warranty_month" id="inputState" class="form-control">
                    <option selected value="6">6 Months</option>
                    <option value="12">12 Months (1 Yr)</option>
                    <option value="24">24 Months (2 yr)</option>
                    <option value="36">36 Months (3 yr)</option>
                </select>
                <br>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>



        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>