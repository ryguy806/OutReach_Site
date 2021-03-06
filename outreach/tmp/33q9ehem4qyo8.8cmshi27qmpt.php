<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav">
    <h1><a class="navbar-brand"><img id="logo" src="./images/StJamesLogo.png" alt="St. James Outreach"/></a></h1>
</nav>
<div class="container">
    <?php if (isset($error)): ?>
        <p class="text-danger"><?= ($error) ?></p>
    <?php endif; ?>

    <form class="form-signin" action="" method="post">

        <label> Username:
            <input type="text" name="username" placeholder="username"></label><br>
        <label> Password:
            <input type="password" name="password" placeholder="password"></label><br>
        <button class="btn btn-lg btn-primary btn-block" type="submit" value="Login" name="login">Sign in</button>

    </form>
</div>

</body>
</html>