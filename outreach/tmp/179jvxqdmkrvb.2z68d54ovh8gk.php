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
    <link type="text/css" rel="stylesheet" href="styles/demographics.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <title>Demographics</title>


    <script type="text/javascript">

        var ethnicity = [];
        var total = [];
        <?php foreach (($ethnicity?:[]) as $each): ?>
            ethnicity.push("<?= ($each["Label"]) ?>");
            total.push(<?= ($each["Value"]) ?>);
        <?php endforeach; ?>


        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        // create ethnicity pie chart
        function drawChart() {
            // send to data table

            var data = google.visualization.arrayToDataTable([
                ['Ethnicity', 'Number of guests'],
                [ethnicity[0],total[0]],
                [ethnicity[1],total[1]],
                [ethnicity[2],total[2]],
                [ethnicity[3],total[3]],
                [ethnicity[4],total[4]],
                [ethnicity[5],total[5]],
                [ethnicity[6],total[6]],
                [ethnicity[7],total[7]],
                [ethnicity[8],total[8]]

                ]);

            // customize chart
            var options = {
                title: 'Ethnicity',
                is3D: true
            };

            // draw chart at id
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
    <!-- Gender -->
    <script type="text/javascript">

        var gender = [];
        var genderTotal = [];
        <?php foreach (($gender?:[]) as $each): ?>
            gender.push("<?= ($each["Label"]) ?>");
            genderTotal.push(<?= ($each["Value"]) ?>);
        <?php endforeach; ?>

        // load chart package
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);

        // create gender pie chart
        function drawChart() {
            // send to data table
            var data = google.visualization.arrayToDataTable([
                ['Gender', 'Number of guests'],
                [gender[0],genderTotal[0]],
                [gender[1],genderTotal[1]],
                [gender[2],genderTotal[2]]
        ]);
            // customize chart
            var options = {
                title: 'Gender',
                is3D: true,
            };

            // draw chart to id
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
            chart.draw(data, options);
        }
    </script>
    <!-- Zips -->
    <script type="text/javascript">
        var zips = [];
        var zipsTotal = [];
        <?php foreach (($zips?:[]) as $each): ?>
            zips.push("<?= ($each["Label"]) ?>");
            zipsTotal.push(<?= ($each["Value"]) ?>);
        <?php endforeach; ?>

        // load chart package
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        // create zip code pie chart
        function drawChart() {
            // send to data table
            var data = google.visualization.arrayToDataTable([
                ['Zip Code', 'Number of guests'],
                [zips[0],zipsTotal[0]],
                [zips[1],zipsTotal[1]],
                [zips[2],zipsTotal[2]],
                [zips[3],zipsTotal[3]],
                [zips[4],zipsTotal[4]],
                [zips[5],zipsTotal[5]],
                [zips[6],zipsTotal[6]],
                [zips[7],zipsTotal[7]]

        ]);

            // customize chart
            var options = {
                title: 'Zip Codes',
                is3D: true,
            };

            // draw chart at id
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d3'));
            chart.draw(data, options);
        }
    </script>
    <!--Disabilities -->
    <script type="text/javascript">
        var disabilities = [];
        var disabilitiesTotal = [];
        <?php foreach (($disabilities?:[]) as $each): ?>
            disabilities.push("<?= ($each["Label"]) ?>");
            disabilitiesTotal.push(<?= ($each["Value"]) ?>);
        <?php endforeach; ?>

        // load chart package
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        // create disability pie chart
        function drawChart() {
            // send to data table
            var data = google.visualization.arrayToDataTable([
                ['Disability', 'Number of guests'],
                [disabilities[0],disabilitiesTotal[0]],
                [disabilities[1],disabilitiesTotal[1]],
                [disabilities[2],disabilitiesTotal[2]],
                [disabilities[3],disabilitiesTotal[3]]

        ]);

            // customize chart
            var options = {
                title: 'Disabilities',
                is3D: true,
            };

            // draw chart at id
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d4'));
            chart.draw(data, options);
        }
    </script>
    <!-- Veterans-->
    <script type="text/javascript">

        var veterans = [];
        var veteransTotal = [];
        <?php foreach (($veterans?:[]) as $each): ?>
            veterans.push("<?= ($each["Label"]) ?>");
            veteransTotal.push(<?= ($each["Value"]) ?>);
        <?php endforeach; ?>
        console.log(veterans);
        console.log(veteransTotal);

        // load chart package
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        // create veteran pie chart
        function drawChart() {
            // send to data table
            var data = google.visualization.arrayToDataTable([
                ['Veteran status', 'Number of guests'],
                [veterans[0],veteransTotal[0]],
                [veterans[1],veteransTotal[1]]
        ]);

            // customize options
            var options = {
                title: 'Veterans',
                is3D: true,
            };

            // draw chart at id
            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d5'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<div class='row'>
    <div class="col-6">
        <!--Ethnicity -->
        <div id="piechart_3d"></div>
    </div>
    <div class="col-6">
        <!-- Gender-->
        <div id="piechart_3d2"></div>
    </div>
</div>
<div class='row'>
    <div class="col-6">
        <!-- Zips -->
        <div id="piechart_3d3"></div>
    </div>
    <div class="col-6">
        <!-- Disabilities -->
        <div id="piechart_3d4"></div>
    </div>
</div>
<div class='row'>
    <div class="col-6">
        <!-- Veterans -->
        <div id="piechart_3d5"></div>
    </div>
</div>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>
</html>