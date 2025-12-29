<?= $this->include('includes/header.php'); ?>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/quotation.css'); ?>">
</head>

<body class="bg-purple">

<div class="container py-5">
  <div class="form-card mx-auto">

    <!-- Header -->
    <div class="text-center mb-4">
      <h4 class="fw-bold">แบบฟอร์มใบเสนอราคาสำหรับองค์กร</h4>
    </div>

    <!-- Banner -->
    <div class="mb-4 text-center">
      <img src="<?= base_url('assets/img/form.png'); ?>" class="img-fluid rounded">
    </div>

    <!-- Description -->
    <p class="small text-muted mb-4">
     วิทยาลัยการศึกษาตลอดชีวิต มหาวิทยาลัยเชียงใหม่ ขอความกรุณาท่านกรอกข้อมูลใน 
     แบบฟอร์มนี้ให้ครบถ้วน เพื่อการนำเสนอรายละเอียดเกี่ยวกับการจัดอบรมเชิงปฏิบัติการ (Workshop) ให้ตรงตามความต้องการของท่านได้มากที่สุด โดยทีมงานจะติดต่อกลับหา ท่านโดยเร็วที่สุด  
     </p>
     <p class="small text-muted mb-4">หากมีข้อสอบถามเพิ่มเติม กรุณาติดต่อได้ที่ โทรศัพท์ : 053 943 695 และ 053 940 204 (ในวันและเวลาทำการ วันจันทร์-ศุกร์ เวลา 08.30-16.30 น.) 
     Email : support_lifelong@cmu.ac.th Line OA: @cmulifelong Facebook Page : CMU School of Lifelong Education
      
    </p>

    <!-- Form -->
    <form>

      <div class="row g-3">

        <div class="col-md-6">
          <label class="form-label">ชื่อผู้ติดต่อ</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">นามสกุล</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">E-mail</label>
          <input type="email" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">หมายเลขโทรศัพท์</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">ชื่อองค์กร</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">ตำแหน่ง</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">เลขประจำตัวผู้เสียภาษี</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">การศึกษา ณ ที่ใด</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-12">
          <label class="form-label">ที่อยู่</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">คอร์สที่สนใจสมัคร</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-md-6">
          <label class="form-label">ราคา</label>
          <input type="text" class="form-control">
        </div>

        <div class="col-12">
          <label class="form-label">เงื่อนไขอื่นๆ สำหรับการติดต่อกลับ</label>
          <input type="text" class="form-control">
        </div>

      </div>

      <div class="text-center mt-4">
        <a href="<?= base_url('invoice'); ?>" class="btn-outline-submit px-5">
  ส่งข้อมูลที่กรอก
</a>

      </div>

    </form>

  </div>
</div>

</body>
</html>