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
    <title>Home Page</title>
</head>
<body>
    <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
    <div class="container">
        <div class="form-group col-14 has-warning" id="zipLabel">
            <label class="form-control-label">Zip Code:
                <input class="form-control" type="text" id="zipcode" name="zipcode" maxlength="5"></label>
        </div>
        <div class="btn-toolbar">
            <div class="btn-group mb-2">
                <button type="button" class="btn btn-primary" id="guestbtn">Guest Info</button>
                <button type="button" class="btn btn-primary" id="needbtn">Needs</button>
                <button type="button" class="btn btn-primary" id="incomebtn">Income</button>
                <button type="button" class="btn btn-primary" id="addressbtn">Address</button>
                <button type="button" class="btn btn-primary" id="housebtn">Household</button>
            </div>
        </div>
    </div> <!-- Table selection and zip checker -->

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
                <th>View / Edit Form</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($guests?:[]) as $guest): ?>
                <tr>
                    <td><?= ($guest['ClientId']) ?></td>
                    <td><?= ($guest['first']) ?> </td>
                    <td><?= ($guest['last']) ?></td>
                    <td><?= ($guest['birthdate']) ?></td>
                    <td><?= ($guest['phone']) ?></td>
                    <td><a href="<?= ($BASE) ?>/<?= ($guest['ClientId']) ?>" class="clickForm">View/Edit</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            <tfoot>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Birthdate</th>
                <th>Phone</th>
                <th>View / Edit Form</th>
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
                <?php if ($need['resource'] != null): ?>
                    <tr>
                        <td><?= ($need['Guests_ClientId']) ?></td>
                        <td><?= ($need['first']) ?> </td>
                        <td><?= ($need['last']) ?></td>
                        <td><?= ($need['resource']) ?></td>
                        <td><?= ($need['amount']) ?></td>
                        <td><?= ($need['visitDate']) ?></td>
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

    <div class="container" id="income">
        <h3 class="text-muted">Guest Income</h3>
        <table id="incomeInfo" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Monthly Income</th>
                <th>Monthly Rent</th>
                <th>Food Stamps</th>
                <th>Additional Support</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($guests?:[]) as $guest): ?>
                <tr>
                    <td><?= ($guest['ClientId']) ?></td>
                    <td><?= ($guest['first']) ?> </td>
                    <td><?= ($guest['last']) ?></td>
                    <td><?= ($guest['income']) ?></td>
                    <td><?= ($guest['rent']) ?></td>
                    <td><?= ($guest['foodStamp']) ?></td>
                    <td><?= ($guest['addSupport']) ?></td>
                </tr>
            <?php endforeach; ?>
               </tbody>
               <tfoot>
               <tr>
                   <th>ID</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Monthly Income</th>
                   <th>Monthly Rent</th>
                   <th>Food Stamps</th>
                   <th>Additional Support</th>
               </tr>
               </tfoot>
           </table> <!-- Income Table -->
    </div> <!-- Container -->
    <div class="container" id="address">
        <h3 class="text-muted">Guest Addresses</h3>
        <table id="addressInfo" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>City</th>
                <th>Street</th>
                <th>Zip</th>
                <th>Email</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($guests?:[]) as $guest): ?>
                <tr>
                    <td><?= ($guest['ClientId']) ?></td>
                    <td><?= ($guest['first']) ?> </td>
                    <td><?= ($guest['last']) ?></td>
                    <td><?= ($guest['city']) ?></td>
                    <td><?= ($guest['street']) ?></td>
                    <td><?= ($guest['zip']) ?></td>
                    <td><?= ($guest['email']) ?></td>
                </tr>
            <?php endforeach; ?>
             </tbody>
             <tfoot>
             <tr>
                 <th>ID</th>
                 <th>First Name</th>
                 <th>Last Name</th>
                 <th>City</th>
                 <th>Street</th>
                 <th>Zip</th>
                 <th>Email</th>
             </tr>
             </tfoot>
         </table> <!-- Address Table -->
    </div> <!-- Container -->

    <div class="container" id="household">
        <h3 class="text-muted">Household Info</h3>
        <table id="houseInfo" class="display">
            <thead>
            <tr>
                <th>ID</th>
                <th>First</th>
                <th>Last</th>
                <th>Household Member</th>
                <th>Age</th>
                <th>Gender</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach (($households?:[]) as $household): ?>
                <?php if ($household['name'] != null): ?>
                    <tr>
                        <td><?= ($household['ClientId']) ?></td>
                        <td><?= ($household['first']) ?> </td>
                        <td><?= ($household['last']) ?></td>
                        <td><?= ($household['name']) ?></td>
                        <td><?= ($household['age']) ?></td>
                        <td><?= ($household['gender']) ?></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>
             </tbody>
             <tfoot>
             <tr>
                 <th>ID</th>
                 <th>First</th>
                 <th>Last</th>
                 <th>Name</th>
                 <th>Age</th>
                 <th>Gender</th>
             </tr>
             </tfoot>
         </table> <!-- Houshold Table -->
    </div> <!-- Container -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="js/zipValidate.js"></script>
    <script src="js/showTables.js"></script>
    <script>
        $("#guestInfo").DataTable();
        $("#needInfo").DataTable();
        $("#incomeInfo").DataTable();
        $("#addressInfo").DataTable();
        $("#houseInfo").DataTable();
    </script>

</body>
</html>