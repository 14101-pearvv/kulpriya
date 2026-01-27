<?php
    include_once("connectdb.php");

    // รับค่าจากฟอร์มค้นหาและตัวกรอง
    $search = isset($_GET['search']) ? mysqli_real_escape_string($conn, $_GET['search']) : '';
    $country_filter = isset($_GET['country']) ? mysqli_real_escape_string($conn, $_GET['country']) : '';

    // สร้าง SQL Query พื้นฐาน (เรียงลำดับจากน้อยไปมาก ASC)
    $sql = "SELECT * FROM `popsupermarket` WHERE 1";

    // เงื่อนไขการค้นหา (ค้นหาจากชื่อสินค้าหรือประเภท)
    if ($search != '') {
        $sql .= " AND (p_product_name LIKE '%$search%' OR p_category LIKE '%$search%')";
    }

    // เงื่อนไขการกรองประเทศ
    if ($country_filter != '') {
        $sql .= " AND p_country = '$country_filter'";
    }

    $sql .= " ORDER BY p_order_id ASC"; // เรียงลำดับจากน้อยไปมาก
    $rs = mysqli_query($conn, $sql);

    // ดึงรายชื่อประเทศทั้งหมดมาทำ Dropdown (ตัวกรอง)
    $sql_countries = "SELECT DISTINCT p_country FROM `popsupermarket` ORDER BY p_country ASC";
    $rs_countries = mysqli_query($conn, $sql_countries);

    $total = 0;
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ระบบค้นหาข้อมูล - กุลปริยา แก้วตา</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Sarabun', sans-serif; background-color: #f4f7f6; }
        .search-card { background: white; border-radius: 15px; border: none; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .table-container { background: white; padding: 20px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.08); }
        .product-img { width: 50px; height: 50px; object-fit: cover; border-radius: 8px; }
    </style>
</head>

<body>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="fw-bold text-primary">Pop Supermarket Inventory</h1>
        <p class="text-muted">ผู้จัดการ : กุลปริยา แก้วตา (แพรว)</p>
    </div>

    <div class="card search-card mb-4">
        <div class="card-body">
            <form method="GET" action="" class="row g-3">
                <div class="col-md-5">
                    <label class="form-label fw-bold">ค้นหาสินค้า</label>
                    <input type="text" name="search" class="form-control" placeholder="ชื่อสินค้า หรือ ประเภท..." value="<?php echo htmlspecialchars($search); ?>">
                </div>
                <div class="col-md-4">
                    <label class="form-label fw-bold">กรองตามประเทศ</label>
                    <select name="country" class="form-select">
                        <option value="">ทั้งหมดทุกประเทศ</option>
                        <?php while($c = mysqli_fetch_array($rs_countries)) { ?>
                            <option value="<?php echo $c['p_country']; ?>" <?php if($country_filter == $c['p_country']) echo 'selected'; ?>>
                                <?php echo $c['p_country']; ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div class="col-md-3 d-flex align-items-end gap-2">
                    <button type="submit" class="btn btn-primary w-100">ค้นหา</button>
                    <a href="index.php" class="btn btn-outline-secondary w-100">ล้างข้อมูล</a>
                </div>
            </form>
        </div>
    </div>

    <div class="table-container">
        <div class="table-responsive">
            <table class="table table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th class="text-center">Order ID</th>
                        <th>สินค้า</th>
                        <th>ประเภท</th>
                        <th>วันที่</th>
                        <th>ประเทศ</th>
                        <th class="text-end">จำนวนเงิน</th>
                        <th class="text-center">รูป</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (mysqli_num_rows($rs) > 0) {
                        while ($data = mysqli_fetch_array($rs)) {
                            $total += $data['p_amout'];
                    ?>
                    <tr>
                        <td class="text-center fw-bold text-secondary"><?php echo $data['p_order_id']; ?></td>
                        <td><span class="fw-bold"><?php echo $data['p_product_name']; ?></span></td>
                        <td><span class="badge rounded-pill bg-secondary"><?php echo $data['p_category']; ?></span></td>
                        <td><?php echo date('d/m/Y', strtotime($data['p_date'])); ?></td>
                        <td><i class="bi bi-geo-alt"></i> <?php echo $data['p_country']; ?></td>
                        <td class="text-end fw-bold text-dark"><?php echo number_format($data['p_amout'], 0); ?></td>
                        <td class="text-center">
                            <img src="<?php echo $data['p_product_name']; ?>.jpg" 
                                 class="product-img" 
                        </td>
                    </tr>
                    <?php 
                        } 
                    } else {
                        echo "<tr><td colspan='7' class='text-center py-5 text-danger'>ไม่พบข้อมูลที่ตรงกับการค้นหา</td></tr>";
                    }
                    ?>
                </tbody>
                <tfoot class="table-primary">
                    <tr class="fw-bold text-uppercase">
                        <td colspan="5" class="text-end">ยอดรวมทั้งสิ้น:</td>
                        <td class="text-end text-primary" style="font-size: 1.2rem;"><?php echo number_format($total, 0); ?></td>
                        <td>บาท</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>