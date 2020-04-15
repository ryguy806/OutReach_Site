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
    <link type="text/css" rel="stylesheet" href="styles/reports.css">
    <title>Reports</title>
</head>
<body>
<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<div class="container">
    <h3 class="text-muted">Select Dates</h3>
    <form action="#" method="post">
        <fieldset class="form-group">
            <div class="row">
                <div class="form-group col-3">
                    <label class="form-control-label">Start Date:</b></label><input type="date" class="form-control" id="start" name="start" value="<?= ($start) ?>" required>
                </div>
                <div class="form-group col-3">
                    <label class="form-control-label">End Date:</b></label><input type="date" class="form-control" id="end" name="end" value="<?= ($end) ?>" required>
                </div>
            </div>
        </fieldset>

        <input class="form-control-label" id="submit" name="submit" type="submit" value="Calculate &raquo;">
    </form> <!-- Date Selection -->

    <h3 class="text-muted">Reports Data</h3>
    <table id="resources">
        <thead>
        <tr>
            <th>Resource</th>
            <th>Number Given</th>
            <th>Amount Given</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (($thrift?:[]) as $data): ?>
            <tr>
                <td>Thrift</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($gas?:[]) as $data): ?>
            <tr>
                <td>Gas</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($water?:[]) as $data): ?>
            <tr>
                <td>Water</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($energy?:[]) as $data): ?>
            <tr>
                <td>Energy</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($food?:[]) as $data): ?>
            <tr>
                <td>Food</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($dol?:[]) as $data): ?>
            <tr>
                <td>Dept of Licensing</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($other?:[]) as $data): ?>
            <tr>
                <td>Other</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        <?php foreach (($total?:[]) as $data): ?>
            <tr>
                <td>Total</td>
                <td><?= ($data['COUNT(amount)']) ?> </td>
                <td><?= ($data['SUM(amount)']) ?> </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table> <!-- Reports Table -->
</div> <!-- container -->
<div class="container" id="voucher">
    <h3 class="text-muted">Vouchers/ Checks</h3>
    <table id="vouchers" class="display">
        <thead>
        <tr>
            <th>ID</th>
            <th>First</th>
            <th>Last</th>
            <th>Voucher</th>
            <th>Check</th>
            <th>Resource</th>
            <th>Amount</th>
            <th>Visit Date</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach (($needs?:[]) as $need): ?>
            <?php if ($need['hidden'] != 'y'): ?>
                <tr>
                    <td><?= ($need['ClientId']) ?> </td>
                    <td><?= ($need['first']) ?> </td>
                    <td><?= ($need['last']) ?></td>
                    <td><?= ($need['voucher']) ?></td>
                    <td><?= ($need['checkNum']) ?></td>
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
            <th>Voucher</th>
            <th>Check</th>
            <th>Resource</th>
            <th>Amount</th>
            <th>Visit Date</th>
        </tr>
        </tfoot>
    </table>
</div>



<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="//code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
<script>
    $("#vouchers").DataTable();
</script>
</body>
</html>