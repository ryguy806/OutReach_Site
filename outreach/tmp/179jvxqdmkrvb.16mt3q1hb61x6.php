<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.4/css/jquery.dataTables.css">
    <link type="text/css" rel="stylesheet" href="styles/home.css">
    <style>

    </style>
    <title>Home Page</title>
</head>
<body>
<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<div class="container">
    <div class="row">

        <div class="col">
            <div class="form-group" id="searchFilter">
                <label class="input-group form-control-label">
                    <input class="form-control" type="search" id="startFilter" name="startFilter" autofocus>
                    <input id="search" class="btn" type="button" value="Search">
                </label>
            </div>
        </div>

        <div class="col"></div>

        <div class="col">
            <!--            <div class="form-group has-warning" id="zipasdf">-->
            <!--                <div class="input-group">-->
            <!--                    <div class="input-group-prepend">-->
            <!--                        <span class="input-group-text" id="zip">Zip Code:</span>-->
            <!--                    </div>-->
            <!--                    <input class="form-control" aria-label="Zip Code:" aria-describedby="zip" type="text" id="zipcode" name="zipcode" maxlength="5">-->
            <!--                </div>-->
            <!--            </div>-->

            <div class="input-group mb-3 has-warning" id="zipLabel">
                <div class="input-group-prepend mx-auto">
                    <div class="btn" id="zip">Zip Code:</div>
                </div>
                <input type="search" class="form-control" aria-label="Default" aria-describedby="zip" id="zipcode" name="zipcode" maxlength="5">
            </div>

        </div>

    </div>

    <!-- Button trigger modal -->

</div> <!-- Table selection and zip checker -->
<div id="hideTable">
    <div class="container">
        <div class="btn-toolbar">
            <div class="btn-group mb-2">
                <button type="button" class="btn btn-primary" id="guestbtn">Guest Info</button>
                <button type="button" class="btn btn-primary" id="needbtn">Needs</button>
<!--                <button type="button" class="btn btn-primary" id="incomebtn">Income</button>-->
<!--                <button type="button" class="btn btn-primary" id="addressbtn">Address</button>-->
<!--                <button type="button" class="btn btn-primary" id="housebtn">Household</button>-->
            </div>
        </div>
    </div>

    <div class="container" id="info">
        <h3 class="text-muted">Guest Info</h3>
        <table id="guestInfo" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Phone</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($guests?:[]) as $guest): ?>
                <?php if ($guest['hidden'] != 'y'): ?>
                    <tr class="clickableRow" data-href="<?= ($BASE) ?>/<?= ($guest['ClientId']) ?>">
                        <td><?= ($guest['ClientId']) ?></td>
                        <td><?= ($guest['first']) ?> </td>
                        <td><?= ($guest['last']) ?></td>
                        <td data-sort="<?= (strtotime($guest['birthdate'])) ?>"><?= ($guest['birthdate']) ?></td>
                        <td><?= ($guest['phone']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Phone</th>
            </tr>
            </tfoot>
        </table> <!-- Main Table -->
    </div> <!-- Container -->

    <div class="container" id="needs">
        <h3 class="text-muted">Guest Needs</h3>
        <table id="needInfo" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Resource</th>
                <th>Amount</th>
                <th>Visit Date</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($needs?:[]) as $need): ?>
                <?php if ($need['resource'] != null && $need['hidden'] != 'y'): ?>
                    <tr class="clickableRow" data-href="<?= ($BASE) ?>/<?= ($need['Guests_ClientId']) ?>">
                        <td><?= ($need['Guests_ClientId']) ?></td>
                        <td><?= ($need['first']) ?> </td>
                        <td><?= ($need['last']) ?></td>
                        <td><?= ($need['resource']) ?></td>
                        <td><?= ($need['amount']) ?></td>
                        <td data-sort="<?= (strtotime($need['visitDate'])) ?>"><?= ($need['visitDate']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Resource</th>
                <th>Amount</th>
                <th>Visit Date</th>
            </tr>
            </tfoot>
        </table> <!-- Need Table -->
    </div> <!-- Container -->
</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script src="js/zipValidate.js"></script>
<script src="js/showTables.js"></script>
</body>
</html>
