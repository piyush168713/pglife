<!DOCTYPE html>
<html>

<head>
    <title>Cryptomine | Add bank details</title>
    <link rel="stylesheet" type="text/css" href="css/editProfile.css" />
</head>

<body>
    <br>
    <div class="container">
        <div class="row col-md-6 col-md-offset-3">
            <div class="panel panel-primary">

                <div class="panel-heading text-center">
                    <h1>Your bank details</h1>
                </div>
                <div class="panel-body">
                    <form action="editConnect.php" method="post">
                        <div class="form-group">
                            <label for="accountNumber">Account number</label>
                            <input type="text" class="form-control" id="accountNumber" name="accountNumber" />
                        </div>
                        <div class="form-group">
                            <label for="ifscCode">IFSC code</label>
                            <input type="text" class="form-control" id="ifscCode" name="ifscCode" />
                        </div>

                        <div class="form-group">
                            <label for="number">Email</label>
                            <input type="email" class="form-control" id="email" name="email" />
                        </div>
                        <input type="submit" class="btn btn-primary" />
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>