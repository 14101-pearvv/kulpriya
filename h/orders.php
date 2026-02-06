<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการออเดอร์ - Admin Panel</title>
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
            padding: 2rem;
        }
        /* Table Styling */
        .table-container {
            background-color: white;
            border-radius: 15px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .table thead th {
            background-color: #f8f9fa;
            color: #718096;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.85rem;
            border-bottom: 2px solid #edf2f7;
        }
        .status-badge {
            font-weight: 400;
            padding: 0.5em 0.8em;
            border-radius: 8px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse shadow">
            <div class="py-4 text-center border-bottom border-secondary mb-3">
                <h5 class="m-0">Admin Panel</h5>
            </div>
            <div class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a>
                <a class="nav-link" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link active" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 opacity-25">
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h3 fw-bold mb-0">จัดการออเดอร์</h2>
                <button class="btn btn-outline-primary btn-sm"><i class="bi bi-download me-1"></i> Export รายงาน</button>
            </div>

            <div class="table-container">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>เลขที่คำสั่งซื้อ</th>
                                <th>ชื่อลูกค้า</th>
                                <th>วันที่สั่งซื้อ</th>
                                <th>ยอดรวม</th>
                                <th>สถานะ</th>
                                <th class="text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>#ORD-6701</strong></td>
                                <td>สมชาย รักดี</td>
                                <td>03 ก.พ. 2567</td>
                                <td>฿1,250.00</td>
                                <td><span class="badge bg-success-subtle text-success status-badge">ชำระเงินแล้ว</span></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-light btn-sm text-primary"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-light btn-sm text-danger"><i class="bi bi-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>#ORD-6702</strong></td>
                                <td>นางสาวใจดี เรียนเก่ง</td>
                                <td>02 ก.พ. 2567</td>
                                <td>฿450.00</td>
                                <td><span class="badge bg-warning-subtle text-warning status-badge">รอชำระเงิน</span></td>
                                <td class="text-center">
                                    <a href="#" class="btn btn-light btn-sm text-primary"><i class="bi bi-eye"></i></a>
                                    <a href="#" class="btn btn-light btn-sm text-danger"><i class="bi bi-trash"></i></a>
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