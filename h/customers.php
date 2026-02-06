<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการลูกค้า - Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #2c3e50;
            color: white;
        }
        .sidebar .nav-link {
            color: #bdc3c7;
            padding: 1rem 1.5rem;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            color: white;
            background-color: #34495e;
        }
        .sidebar .nav-link.active {
            background-color: #3498db;
        }
        .main-content {
            padding: 2.5rem;
        }
        .customer-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
        }
        .avatar-circle {
            width: 40px;
            height: 40px;
            background-color: #e9ecef;
            color: #6c757d;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: bold;
        }
        .search-box {
            border-radius: 10px;
            background-color: #fff;
            border: 1px solid #dee2e6;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="py-4 text-center border-bottom border-secondary mb-3">
                <h5 class="m-0 fw-bold text-white">Admin Panel</h5>
            </div>
            <div class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a>
                <a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link active" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 opacity-25 text-white">
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 fw-bold mb-0">จัดการลูกค้า</h2>
                <div class="d-flex gap-2">
                    <div class="input-group search-box">
                        <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-0 ps-0" placeholder="ค้นหารายชื่อลูกค้า...">
                    </div>
                </div>
            </div>

            <div class="customer-card">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="border-0">ลูกค้า</th>
                                <th class="border-0">ข้อมูลติดต่อ</th>
                                <th class="border-0">วันที่ลงทะเบียน</th>
                                <th class="border-0">ประเภท</th>
                                <th class="border-0 text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-circle me-3">ส</div>
                                        <div>
                                            <div class="fw-bold">สมชาย สายลม</div>
                                            <div class="text-muted small">ID: CUS-001</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small"><i class="bi bi-envelope me-1"></i> somchai@email.com</div>
                                    <div class="small text-muted"><i class="bi bi-phone me-1"></i> 081-234-5678</div>
                                </td>
                                <td>15 ม.ค. 2567</td>
                                <td><span class="badge bg-info-subtle text-info fw-normal p-2 px-3 rounded-pill">สมาชิกทั่วไป</span></td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-3"><i class="bi bi-pencil text-primary"></i></button>
                                    <button class="btn btn-light btn-sm rounded-3"><i class="bi bi-trash text-danger"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="avatar-circle me-3 bg-warning-subtle text-warning">ก</div>
                                        <div>
                                            <div class="fw-bold">กัญญา มั่งมี</div>
                                            <div class="text-muted small">ID: CUS-002</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small"><i class="bi bi-envelope me-1"></i> kanya@email.com</div>
                                    <div class="small text-muted"><i class="bi bi-phone me-1"></i> 089-999-8888</div>
                                </td>
                                <td>20 ม.ค. 2567</td>
                                <td><span class="badge bg-warning-subtle text-warning fw-normal p-2 px-3 rounded-pill">VIP</span></td>
                                <td class="text-center">
                                    <button class="btn btn-light btn-sm rounded-3"><i class="bi bi-pencil text-primary"></i></button>
                                    <button class="btn btn-light btn-sm rounded-3"><i class="bi bi-trash text-danger"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>