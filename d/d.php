<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<title>กุลปริยา แก้วตา (แพรว)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light py-5">
<div class="container">
    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-body">
            <h1 class="text-center mb-4">ฟอร์มสมัครสมาชิก <br> กุลปริยา แก้วตา (แพรว) - ChatGPT</h1>

            <form method="post" action="" class="needs-validation" novalidate>

                <div class="mb-3">
                    <label class="form-label">ชื่อ-สกุล</label>
                    <input type="text" name="fullname" class="form-control" required autofocus>
                </div>

                <div class="mb-3">
                    <label class="form-label">เบอร์โทร</label>
                    <input type="text" name="phone" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">ความสูง (ซม.)</label>
                    <input type="number" name="height" class="form-control" step="5" min="100" max="250" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">สีที่ชอบ</label>
                    <input type="color" name="color" class="form-control form-control-color">
                </div>

                <div class="mb-3">
                    <label class="form-label">สาขาวิชา</label>
                    <select name="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" name="Submit" class="btn btn-primary flex-fill">สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-secondary flex-fill">Reset</button>
                    <button type="button" onclick="window.location='https://www.msu.ac.th';" class="btn btn-info flex-fill">Go to MSU</button>
                    <button type="button" onclick="window.print();" class="btn btn-warning flex-fill">พิมพ์</button>
                </div>
            </form>

            <hr class="my-4">

            <?php
            if (isset($_POST['Submit'])){
                $fullname = $_POST['fullname'];
                $phone = $_POST['phone'];
                $height = $_POST['height'];
                $color = $_POST['color'];
                $major = $_POST['major'];

                echo "<div class='p-3 bg-light border rounded'>";
                echo "<p><strong>ชื่อ-สกุล:</strong> $fullname</p>";
                echo "<p><strong>เบอร์โทร:</strong> $phone</p>";
                echo "<p><strong>ความสูง:</strong> {$height} ซม.</p>";
                echo "<p><strong>สีที่ชอบ:</strong> $color <span style='background:$color; padding:5px 20px; border-radius:5px; display:inline-block;'></span></p>";
                echo "<p><strong>สาขาวิชา:</strong> $major</p>";
                echo "</div>";
            }
            ?>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
