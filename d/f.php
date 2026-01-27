<?php
// ตรวจสอบว่ามีการส่งข้อมูลผ่านปุ่ม Submit มาหรือไม่
if (isset($_POST['Submit'])) {
    // ดึงข้อมูลจากฟอร์ม
    $position = $_POST['position'] ?? 'N/A';
    $prefix = $_POST['prefix'] ?? 'N/A';
    $fullname = $_POST['fullname'] ?? 'N/A';
    $dob = $_POST['dob'] ?? 'N/A';
    $education = $_POST['education'] ?? 'N/A';
    $skills = $_POST['skills'] ?? 'ไม่มี';
    $experience = $_POST['experience'] ?? 'ไม่มี';
    
?>
<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ผลการสมัครงาน</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    body {
        background-color: #e9ecef; /* สีพื้นหลังอ่อน ๆ */
        padding-top: 40px;
    }
    .result-card {
        max-width: 900px;
        margin: auto;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    }
</style>
</head>
<body>

<div class="container">
    <div class="card result-card border-0">
        <div class="card-header bg-primary text-white text-center py-3" style="border-top-left-radius: 12px; border-top-right-radius: 12px;">
            <h3 class="mb-0"><i class="bi bi-patch-check-fill me-2"></i> การส่งใบสมัครสำเร็จ</h3>
        </div>
        <div class="card-body p-4">
            <h4 class="card-title text-success mb-3">ขอบคุณสำหรับความสนใจ คุณ <?php echo htmlspecialchars($fullname); ?>!</h4>
            <p class="card-text mb-4">เราได้รับใบสมัครของคุณในตำแหน่ง **<?php echo htmlspecialchars($position); ?>** เรียบร้อยแล้ว ทีมงานจะดำเนินการตรวจสอบและติดต่อกลับโดยเร็วที่สุด</p>

            <h5 class="text-secondary mb-3"><i class="bi bi-file-earmark-text-fill me-2"></i> สรุปข้อมูลที่ได้รับ</h5>
            
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th style="width: 35%;">รายการ</th>
                        <th>ข้อมูลที่ระบุ</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>**ตำแหน่งที่ต้องการสมัคร**</td>
                        <td><span class="badge bg-info text-dark"><?php echo htmlspecialchars($position); ?></span></td>
                    </tr>
                    <tr>
                        <td>**ชื่อ-สกุล (คำนำหน้า)**</td>
                        <td><?php echo htmlspecialchars($prefix) . " " . htmlspecialchars($fullname); ?></td>
                    </tr>
                    <tr>
                        <td>**วัน/เดือน/ปีเกิด**</td>
                        <td><?php echo htmlspecialchars($dob); ?></td>
                    </tr>
                    <tr>
                        <td>**ระดับการศึกษาสูงสุด**</td>
                        <td><?php echo htmlspecialchars($education); ?></td>
                    </tr>
                    <tr>
                        <td>**ความสามารถพิเศษ / ทักษะ**</td>
                        <td><?php echo nl2br(htmlspecialchars($skills)); ?></td>
                    </tr>
                    <tr>
                        <td>**ประสบการณ์ทำงาน**</td>
                        <td><?php echo nl2br(htmlspecialchars($experience)); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-center bg-light">
            <button class="btn btn-outline-primary" onclick="window.history.back();"><i class="bi bi-arrow-left me-2"></i> กลับสู่หน้าสมัครงาน</button>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

<?php
} else {
    // กรณีมีการเข้าถึง f.php โดยตรงโดยไม่ได้ผ่านการกด Submit
    echo "<!DOCTYPE html><html lang='th'><head><link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet'></head><body><div class='container mt-5'><div class='alert alert-warning text-center'><h4><i class='bi bi-exclamation-triangle-fill'></i> ข้อผิดพลาด</h4><p>กรุณากรอกข้อมูลผ่านแบบฟอร์มใบสมัครงาน</p><button class='btn btn-warning' onclick='window.history.back();'>กลับไปที่ฟอร์ม</button></div></div></body></html>";
}
?>