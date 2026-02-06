<?php
	session_start();
?>
<!doctype html>
<html lang="th">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>เข้าสู่ระบบ - กุลปริยา แก้วตา (แพรว)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Sarabun', sans-serif;
            background-color: #f0f2f5; /* เทาอ่อน สบายตา */
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .login-card {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05); /* เงาจางๆ ดูนุ่มนวล */
            background-color: #ffffff;
        }
        .login-title {
            color: #4a5568;
            font-weight: 600;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .btn-primary {
            background-color: #5a8dee; /* สีน้ำเงินนุ่มๆ ไม่ฉูดฉาด */
            border: none;
            padding: 0.6rem;
        }
        .btn-primary:hover {
            background-color: #4877d1;
        }
        .form-label {
            color: #718096;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="login-card mx-auto">
        <h4 class="login-title">เข้าสู่ระบบ</h4>
        <p class="text-center text-muted small mb-4">กุลปริยา แก้วตา (แพรว)</p>

        <form method="post" action="">
            <div class="mb-3">
                <label for="auser" class="form-label">ชื่อผู้ใช้งาน</label>
                <input type="text" class="form-control" id="auser" name="auser" placeholder="Username" autofocus required>
            </div>
            <div class="mb-4">
                <label for="apwd" class="form-label">รหัสผ่าน</label>
                <input type="password" class="form-control" id="apwd" name="apwd" placeholder="Password" required>
            </div>
            <div class="d-grid">
                <button type="submit" name="Submit" class="btn btn-primary shadow-sm">เข้าสู่ระบบ</button>
            </div>
        </form>

        <?php
        if(isset($_POST['Submit'])) {
            include_once("connectdb.php");
            
            $user = $_POST['auser'];
            $pwd = $_POST['apwd'];

            // Prepared Statement
            $stmt = mysqli_prepare($conn, "SELECT a_id, a_name, a_password FROM admin WHERE a_username = ?");
            mysqli_stmt_bind_param($stmt, "s", $user);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($data = mysqli_fetch_assoc($result)) {
                // ตรวจสอบรหัสผ่าน
                if (password_verify($pwd, $data['a_password'])) {
                    $_SESSION['aid'] = $data['a_id'];
                    $_SESSION['aname'] = $data['a_name'];
                    
                    echo "<div class='alert alert-success mt-3 py-2 text-center' role='alert'>กำลังเข้าสู่ระบบ...</div>";
                    echo "<script>setTimeout(function(){ window.location='index2.php'; }, 1500);</script>";
                } else {
                    echo "<div class='alert alert-danger mt-3 py-2 text-center' role='alert small'>รหัสผ่านไม่ถูกต้อง</div>";
                }
            } else {
                echo "<div class='alert alert-danger mt-3 py-2 text-center' role='alert small'>ไม่พบชื่อผู้ใช้งานนี้</div>";
            }
            mysqli_stmt_close($stmt);
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>