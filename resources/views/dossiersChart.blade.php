<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>gggg</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <canvas id="canvas" height="280" width="600"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    // INFORMATIONS -----------------------------------------------------
    // Obligatoires
    var y_data = <?php echo $y_data; ?>;
    var x_data = <?php echo $x_data; ?>;
    var x_label = <?php echo $x_label; ?>;

    // Dynamiques
    var title = <?php echo (isset($title)) ? $title : "'TIIIIIIIIIIIIIIIITREEEEEEEEEEEEEEEE'"; ?>;
    var chart_type = <?php echo (isset($chart_type)) ? $chart_type : "'bar'"; ?>;
    var chart_color = <?php echo (isset($chart_color)) ? $chart_color : "'skyblue'"; ?>;
    var border_color = <?php echo (isset($border_color)) ? $border_color : "'skyblue'"; ?> // line
    var fill = <?php echo (isset($fill)) ? $fill : "false"; ?> // line
    
    // CHART ---------------------------------------------------------------
    var barChartData = {
       
            datasets: [{
                label: 'line',
                type: 'line',
                data: [10, 20, 30, 40],
                fill: false,
                borderColor: 'blue',
                lineTension: 0.4
            }, {
                label: 'Line Dataset',
                data: [10, 20, 50, 10],
                type: 'line',
                fill: false,
                borderColor: 'red'
            }],
            labels: ['January', 'February', 'March', 'April']
    };

    window.onload = function() {
        var ctx = document.getElementById("canvas").getContext("2d");

        window.myBar = new Chart(ctx, {
            type: 'bar',
            data: {
                datasets: [{
                    label: 'line',
                    type: 'line',
                    data: [10, 20, 30, 40],
                    fill: false,
                    borderColor: 'blue',
                }, {
                    label: 'Line Dataset',
                    data: [10, 20, 50, 10],
                    type: 'line',
                    fill: false,
                    borderColor: 'red',
                }],
                    tension: 0.1,
                labels: ['January', 'February', 'March', 'April']
            },
            width: '100px',
            height: '100px'
        });
    };
</script>
</body>
</html>