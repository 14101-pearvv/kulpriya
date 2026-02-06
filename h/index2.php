<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>หน้าหลักแอดมิน - Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        /* Sidebar Styles */
        .sidebar {
            min-height: 100vh;
            background-color: #2c3e50; /* สีกรมท่าเข้ม สบายตา */
            color: white;
        }
        .sidebar .nav-link {
            color: #bdc3c7;
            transition: 0.3s;
            padding: 1rem 1.5rem;
            border-radius: 0;
        }
        .sidebar .nav-link:hover {
            color: white;
            background-color: #34495e;
        }
        .sidebar .nav-link.active {
            background-color: #3498db;
            color: white;
        }
        .sidebar-heading {
            padding: 1.5rem;
            font-size: 1.2rem;
            font-weight: 600;
            border-bottom: 1px solid #3e4f5f;
        }
        /* Main Content */
        .main-content {
            padding: 2rem;
        }
        .card-stat {
            border: none;
            border-radius: 15px;
            transition: transform 0.3s;
        }
        .card-stat:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="sidebar-heading text-center">
                <i class="bi bi-person-circle me-2"></i> Admin Panel
            </div>
            <div class="nav flex-column mt-2">
                <a class="nav-link active" href="index2.php">
                    <i class="bi bi-house-door me-2"></i> หน้าหลัก
                </a>
                <a class="nav-link" href="products.php">
                    <i class="bi bi-box-seam me-2"></i> จัดการสินค้า
                </a>
                <a class="nav-link" href="orders.php">
                    <i class="bi bi-cart3 me-2"></i> จัดการออเดอร์
                </a>
                <a class="nav-link" href="customers.php">
                    <i class="bi bi-people me-2"></i> จัดการลูกค้า
                </a>
                <hr class="mx-3 opacity-25">
                <a class="nav-link text-danger" href="logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ
                </a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-4 border-bottom">
                <h1 class="h3 fw-bold mb-0 text-dark">Dashboard</h1>
                <div class="text-muted">ยินดีต้อนรับคุณ, <strong><?php echo $_SESSION['aname']; ?></strong></div>
            </div>

            <div class="row g-4">
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-stat shadow-sm bg-white p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-primary bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-box-seam text-primary fs-4"></i>
                            </div>
                            <div>
                                <div class="text-muted small">สินค้าทั้งหมด</div>
                                <div class="fw-bold fs-5">120 ชิ้น</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xl-3">
                    <div class="card card-stat shadow-sm bg-white p-3">
                        <div class="d-flex align-items-center">
                            <div class="bg-success bg-opacity-10 p-3 rounded-circle me-3">
                                <i class="bi bi-currency-dollar text-success fs-4"></i>
                            </div>
                            <div>
                                <div class="text-muted small">ยอดขายวันนี้</div>
                                <div class="fw-bold fs-5">฿15,400</div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

            <div class="mt-5">
                <h3>ยินดีต้อนรับสู่ระบบบริหารจัดการ</h3>
                <p class="text-muted">กรุณาเลือกเมนูทางด้านซ้ายมือเพื่อเริ่มต้นจัดการข้อมูลในส่วนต่างๆ ของเว็บไซต์</p>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>