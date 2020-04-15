<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <link type="text/css" rel="stylesheet" href="styles/home.css">
    <title>Profile</title>
</head>
<body>
    <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
    <div class="container">
        <h3 class="text-muted">Profile</h3>
        <br>

        <form action="" method="post">
            <div class="form-inline">
                <h4>User to change:</h4>
                <select name="username" id="username" class="custom-select custom-select-lg">
                    <option value="petero">Peter</option>
                    <option value="volunteer">Volunteer</option>
                </select>
            </div>

            <br>
            <div class="form-group">
                <h4>Change Password</h4>
                <div class="form-group">
                    <label for="current"><strong>Current Password: </strong></label>
                    <input type='password' name='currentPassword' id="current" class="form-control col-sm-10 col-md-4">
                </div>
                <div class="form-group">
                    <label for="new"><strong>New Password: </strong></label>
                    <input type='password' name='newPassword' id="new" class="form-control col-sm-10 col-md-4">
                </div>
                <div class="form-group">
                    <label for="confirm"><strong>Confirm New Password: </strong></label>
                    <input type='password' name='confirmPassword' id="confirm" class="form-control col-sm-10 col-md-4">
                </div>
            </div>
            <button class="btn btn-primary" type="submit" name="changePassword">Change Password</button>

            <?php if ($passChanged): ?>
                <p class="text-success" role="alert"><?= ($userUpdate) ?> Password Changed</p>
            <?php endif; ?>
            <?php if (isset($error)): ?>
                <p class="text-danger"><?= ($error) ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>