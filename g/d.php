<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>กุลปริยา แก้วตา (แพรว)</title>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<style>
    .chart-container {
        width: 80%;
        margin: auto;
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }
    .chart-box {
        width: 450px;
        margin-bottom: 50px;
    }
</style>
</head>

<body>
<h1>กุลปริยา แก้วตา (แพรว)</h1>

<table border="1" width="50%">
<tr>
    <th>ประเทศ</th>
    <th>ยอดขาย</th>
</tr>
<?php
include_once("connectdb.php");

$sql = "SELECT p_country , SUM(p_amout) AS total FROM popsupermarket GROUP BY p_country ";
$rs = mysqli_query($conn, $sql);

$countries = [];
$totals = [];

while ($data = mysqli_fetch_array($rs)){
    // เก็บข้อมูลลงใน PHP Array เพื่อส่งต่อให้ JavaScript
    $countries[] = $data['p_country'];
    $totals[] = $data['total'];
?>
<tr>
    <td><?php echo $data['p_country'];?></td>
    <td align="right"><?php echo number_format($data['total'],0);?></td>
</tr>
<?php } ?>
</table>

<br><hr><br>

<div class="chart-container">
    <div class="chart-box">
        <h3>ยอดขายแยกตามประเทศ (Bar Chart)</h3>
        <canvas id="barChart"></canvas>
    </div>
    <div class="chart-box">
        <h3>สัดส่วนยอดขาย (Pie Chart)</h3>
        <canvas id="pieChart"></canvas>
    </div>
</div>

<script>
// 3. แปลงข้อมูล PHP Array เป็น JavaScript Array
const labels = <?php echo json_encode($countries); ?>;
const dataValues = <?php echo json_encode($totals); ?>;

// ตั้งค่าสีสุ่มหรือสีที่กำหนดเอง
const colors = [
    'rgba(255, 99, 132, 0.7)',
    'rgba(54, 162, 235, 0.7)',
    'rgba(255, 206, 86, 0.7)',
    'rgba(75, 192, 192, 0.7)',
    'rgba(153, 102, 255, 0.7)'
];

// กราฟแท่ง (Bar Chart)
const ctxBar = document.getElementById('barChart').getContext('2d');
new Chart(ctxBar, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'ยอดขาย',
            data: dataValues,
            backgroundColor: colors,
            borderWidth: 1
        }]
    }
});

// กราฟวงกลม (Pie Chart)
const ctxPie = document.getElementById('pieChart').getContext('2d');
new Chart(ctxPie, {
    type: 'pie',
    data: {
        labels: labels,
        datasets: [{
            data: dataValues,
            backgroundColor: colors,
            borderWidth: 1
        }]
    }
});
</script>

</body>
</html>
