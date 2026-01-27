<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - บริษัท กุลปริยา แก้วตา (แพรว)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    /* Custom CSS สำหรับการจัดวางและตกแต่ง */
    body {
        background-color: #f0f2f5; /* สีพื้นหลังอ่อน ๆ */
        padding-top: 20px;
    }
    .card-application {
        max-width: 800px;
        margin: auto;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
</style>
</head>

<body>
<div class="container">
    <div class="card card-application border-0">
        <div class="card-body">
            <h1 class="card-title text-center mb-4 text-primary">
                <i class="bi bi-person-workspace me-2"></i> ใบสมัครงาน
            </h1>
            <h5 class="card-subtitle text-center mb-5 text-muted">
                บริษัท กุลปริยา แก้วตา (แพรว)
            </h5>

				<form method="post" action="">
                <div class="mb-4">
                    <label for="position" class="form-label fw-bold">1. ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                    <select name="position" id="position" class="form-select" required>
                        <option value="" selected disabled>-- เลือกตำแหน่งงานที่สนใจ --</option>
                        <option value="Software Developer">Software Developer</option>
                        <option value="Data Scientist">Data Scientist</option>
                        <option value="UX/UI Designer">UX/UI Designer</option>
                        <option value="Marketing Specialist">Marketing Specialist</option>
                        <option value="Project Manager">Project Manager</option>
                    </select>
                </div>

                <hr>

                <h5 class="mb-3 text-secondary"><i class="bi bi-person-vcard me-2"></i> ข้อมูลส่วนตัว</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select name="prefix" id="prefix" class="form-select" required>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                        <input type="text" name="fullname" id="fullname" class="form-control" placeholder="ชื่อและนามสกุล" required>
                    </div>

                    <div class="col-md-5">
                        <label for="dob" class="form-label">วัน/เดือน/ปีเกิด <span class="text-danger">*</span></label>
                        <input type="date" name="dob" id="dob" class="form-control" required>
                    </div>
                </div>

                <hr>

                <h5 class="mb-3 text-secondary"><i class="bi bi-mortarboard me-2"></i> การศึกษาและทักษะ</h5>
                <div class="row g-3 mb-4">
                    <div class="col-md-6">
                        <label for="education" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select name="education" id="education" class="form-select" required>
                            <option value="" selected disabled>-- เลือกระดับการศึกษา --</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                            <option value="ปวส.">ปวส. / อนุปริญญา</option>
                            <option value="มัธยมปลาย">มัธยมปลาย / ปวช.</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="skills" class="form-label">ความสามารถพิเศษ / ทักษะเด่น (เช่น ภาษา, โปรแกรม, เครื่องมือ)</label>
                        <textarea name="skills" id="skills" class="form-control" rows="3" placeholder="ระบุทักษะที่โดดเด่น เช่น ภาษาอังกฤษระดับดี, Python, Figma, Microsoft Project"></textarea>
                    </div>

                    <div class="col-12">
                        <label for="experience" class="form-label">ประสบการณ์ทำงานโดยสังเขป</label>
                        <textarea name="experience" id="experience" class="form-control" rows="4" placeholder="ระบุประสบการณ์ทำงานที่เกี่ยวข้องกับตำแหน่งงานที่สมัคร หรือโครงการที่เคยทำ"></textarea>
                    </div>
                </div>

                <hr class="mt-4">

                <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                    <button type="submit" name="Submit" class="btn btn-primary btn-lg px-4 me-md-2">
                        <i class="bi bi-send-fill me-2"></i> ส่งใบสมัคร
                    </button>
                    <button type="reset" class="btn btn-outline-secondary btn-lg px-4">
                        <i class="bi bi-arrow-counterclockwise me-2"></i> ล้างข้อมูล
                    </button>
                </div>

            </form>
        </div>
    </div>
    <div class="container mt-5">
        <?php
        if (isset($_POST['Submit'])){
            $position =$_POST['position'] ;
            $prefix =$_POST['prefix'] ;
            $fullname =$_POST['fullname'] ;
            $dob =$_POST['dob'] ;
            $education =$_POST['education'] ;
			$skills =$_POST['skills'] ;
			$experience =$_POST['experience'] ;
			
			include_once("connectdb.php");
			
			$sql = "INSERT INTO application (a_id, a_position, a_prefix, a_name, a_dob, a_education, a_skills, a_experience) VALUES (null, '{$position}', '{$prefix}', '{$fullname}', '{$dob}', '{$education}', '{$skills}', '{$experience}');";
			mysqli_query($conn, $sql) or die ("insert ไม่ได้");

			echo "<script>";
			echo "alert('เพิ่มข้อมูลสำเร็จ');";
			echo "</script>";
					   	   
        }
        ?>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>