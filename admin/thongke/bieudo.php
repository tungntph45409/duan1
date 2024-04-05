<div class="row">

<div id="piechart"></div>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">

// Load google charts

google.charts.load('current', {'packages': ['corechart']}); 
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values 
function drawChart() { var data = google.visualization.arrayToDataTable([
['Danh mục', 'Số lượng sản phẩm' ],

<?php
$tongdm=count($listthongke);
$i=1;
foreach ($listthongke as $thongke) { 
extract($thongke);
if($i==$tongdm) $dauphay=""; 
else $dauphay=",";
echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
$i+=1;
}
?>

]);

// Optional; add a title and set the width and height of the chart

var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':500, 'height':500};
// Display the chart inside the <div> element with id="piechart" 
var chart = new google.visualization.PieChart (document.getElementById('piechart')); chart.draw(data, options);

}

</script>

</div>
<section class="content" id="orders">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="monthlyRevenueChart" width="400" height="200"></canvas>

    <h3>Thống kê doanh thu theo tháng:</h3>
    <ul id="monthlyRevenueList"></ul>

    <?php
    $monthlyRevenue = array();

    foreach ($listbilladmin as $bill) {
        // ... (code của bạn)

        // Lấy tháng từ ngày đặt hàng
        $month = date('m', strtotime($bill['ngaydathang']));

        // Tính tổng giá trị đơn hàng theo tháng
        if (!isset($monthlyRevenue[$month])) {
            $monthlyRevenue[$month] = 0;
        }
        $monthlyRevenue[$month] += $bill['total'];
    }

    // Hiển thị thông tin thống kê theo tháng
    foreach ($monthlyRevenue as $month => $revenue) {
        echo '<script>document.getElementById("monthlyRevenueList").innerHTML += "<li>Tháng ' . $month . ': <span>' . number_format($revenue) . ' VNĐ</span></li>";</script>';
    }
    ?>

    <script>
        var monthlyRevenue = <?php echo json_encode($monthlyRevenue); ?>;
        var months = Object.keys(monthlyRevenue);
        var revenues = Object.values(monthlyRevenue);

        var ctx = document.getElementById('monthlyRevenueChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: months.map(function (month) {
                    return 'Tháng ' + month;
                }),
                datasets: [{
                    label: 'Doanh thu (VNĐ)',
                    data: revenues,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</section>
<section class="content" id="orders">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <canvas id="yearlyRevenueChart" width="400" height="200"></canvas>

    <h3>Thống kê doanh thu theo năm:</h3>
    <ul id="yearlyRevenueList"></ul>

    <?php
    $yearlyRevenue = array();

    foreach ($listbilladmin as $bill) {
        // ... (code của bạn)

        // Lấy năm từ ngày đặt hàng
        $year = date('Y', strtotime($bill['ngaydathang']));

        // Tính tổng giá trị đơn hàng theo năm
        if (!isset($yearlyRevenue[$year])) {
            $yearlyRevenue[$year] = 0;
        }
        $yearlyRevenue[$year] += $bill['total'];
    }

    // Hiển thị thông tin thống kê theo năm
    foreach ($yearlyRevenue as $year => $revenue) {
        echo '<script>document.getElementById("yearlyRevenueList").innerHTML += "<li>Năm ' . $year . ': <span>' . number_format($revenue) . ' VNĐ</span></li>";</script>';
    }
    ?>

    <script>
        var yearlyRevenue = <?php echo json_encode($yearlyRevenue); ?>;
        var years = Object.keys(yearlyRevenue);
        var revenues = Object.values(yearlyRevenue);

        var ctx = document.getElementById('yearlyRevenueChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: years.map(function (year) {
                    return 'Năm ' + year;
                }),
                datasets: [{
                    label: 'Doanh thu (VNĐ)',
                    data: revenues,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</section>
