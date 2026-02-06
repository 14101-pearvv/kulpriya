<?php
    include_once("check_login.php");
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>จัดการสินค้า - Admin Panel</title>
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
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
        }
        .sidebar .nav-link {
            color: #bdc3c7;
            padding: 1rem 1.5rem;
            transition: all 0.2s;
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
        .product-table-card {
            background: white;
            border-radius: 15px;
            border: none;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            padding: 1.5rem;
        }
        .img-product {
            width: 50px;
            height: 50px;
            object-fit: cover;
            border-radius: 8px;
        }
        .btn-add {
            background-color: #27ae60;
            color: white;
            border-radius: 10px;
            padding: 0.5rem 1.2rem;
        }
        .btn-add:hover {
            background-color: #219150;
            color: white;
        }
        /* สีสถานะสต็อก */
        .badge-stock {
            font-weight: 400;
            padding: 0.5em 0.7em;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="py-4 text-center border-bottom border-secondary mb-3">
                <h5 class="m-0 text-white fw-bold">Admin Panel</h5>
            </div>
            <div class="nav flex-column">
                <a class="nav-link" href="index2.php"><i class="bi bi-house-door me-2"></i> หน้าหลัก</a>
                <a class="nav-link active" href="products.php"><i class="bi bi-box-seam me-2"></i> จัดการสินค้า</a>
                <a class="nav-link" href="orders.php"><i class="bi bi-cart3 me-2"></i> จัดการออเดอร์</a>
                <a class="nav-link" href="customers.php"><i class="bi bi-people me-2"></i> จัดการลูกค้า</a>
                <hr class="mx-3 opacity-25 text-white">
                <a class="nav-link text-danger" href="logout.php"><i class="bi bi-box-arrow-right me-2"></i> ออกจากระบบ</a>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 main-content">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h2 class="h3 fw-bold mb-0 text-dark">จัดการสินค้า</h2>
                    <p class="text-muted small mb-0">เพิ่ม แก้ไข และตรวจสอบรายการสินค้าในระบบ</p>
                </div>
                <a href="add_product.php" class="btn btn-add shadow-sm">
                    <i class="bi bi-plus-circle me-1"></i> เพิ่มสินค้าใหม่
                </a>
            </div>

            <div class="product-table-card">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th class="border-0">รูปภาพ</th>
                                <th class="border-0">ชื่อสินค้า</th>
                                <th class="border-0">หมวดหมู่</th>
                                <th class="border-0">ราคา</th>
                                <th class="border-0">สต็อก</th>
                                <th class="border-0 text-center">จัดการ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="1.jpg" class="img-product" alt="product"></td>
                                <td><strong>เสื้อยืด Oversize สีขาว</strong></td>
                                <td>เครื่องแต่งกาย</td>
                                <td>฿350.00</td>
                                <td><span class="badge bg-success-subtle text-success badge-stock">คงเหลือ 25</span></td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm">
                                        <a href="#" class="btn btn-white btn-sm border" title="แก้ไข"><i class="bi bi-pencil-square text-primary"></i></a>
                                        <a href="#" class="