<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>วิทยาลัยการศึกษาตลอดชีวิต</title>

  <link rel="icon" type="image/png" href="<?= base_url('assets/img/logo_lifelong11.png') ?>">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />

  <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">

  <style>

  .navbar-prompt { background:#fff; box-shadow:0 2px 6px rgba(0,0,0,0.08); }
  .menu-icon { font-size:20px; margin-right:6px; }

  .card-prompt { border-radius:20px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08); }
  .card-prompt img { width:100%; height:160px; object-fit:cover; }
  .card-prompt-number { position:absolute; bottom:12px; left:12px; font-size:32px; font-weight:700; color:#fff; text-shadow:0 2px 6px rgba(0,0,0,0.4);}

  /* ปฏิทิน */
  .calendar-box { background:#fff; padding:24px; border-radius:24px; box-shadow:0 3px 10px rgba(0,0,0,0.08); }

  #calendar-body td { 
    height:42px; 
    cursor:pointer; 
    vertical-align:middle; 
    position: relative;
  }

  #calendar-body td:hover {
    background:#eee; 
    border-radius:50%;
  }

  /* วันที่เป็นวันนี้ */
  .today { 
    background:#1abc9c !important; 
    color:#fff !important; 
    border-radius:50%; 
    font-weight:bold;
    width:40px;
    height:40px;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
  }

  /* Loading screen */
  #loading-screen { 
    position: fixed; 
    top:0; left:0; 
    width:100%; height:100%; 
    background:#fff; 
    display:flex; 
    align-items:center; 
    justify-content:center; 
    z-index:9999; 
  }

</style>
</head>
<body>

<!-- Loading Screen -->
<div id="loading-screen"><div class="spinner-border"></div></div>
<script> window.addEventListener("load", () => document.getElementById("loading-screen").style.display = "none"); </script>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-prompt py-2">
  <div class="container-fluid px-4">

    <div class="d-flex align-items-center">
      <img src="assets/img/logo.svg" height="32" class="me-2">
    </div>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav mx-auto gap-3">
        <li class="nav-item"><a class="nav-link active" href="#"><i class="bi bi-grid-fill menu-icon"></i>หน้าหลัก</a></li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-mortarboard-fill menu-icon"></i> การเรียนรู้
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">หน้ารวมการเรียนรู้</a></li>
          </ul>
        </li>

        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-journal-text menu-icon"></i>จัดการโครงการ</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-folder2-open menu-icon"></i>กิจกรรม</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-clipboard2-check menu-icon"></i>ระบบประเมิน</a></li>
        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-pie-chart-fill menu-icon"></i>ผลการดำเนินงาน</a></li>
      </ul>

      <div class="d-flex align-items-center gap-3">

        <div class="position-relative">
          <i class="bi bi-bell fs-4"></i>
          <span class="badge bg-danger rounded-circle position-absolute" style="top:-4px; right:-4px;">4</span>
        </div>

        <div class="dropdown">
          <a class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" href="#">
            <img src="assets/user.jpg" class="rounded-circle me-2" width="36">
            <span class="fw-semibold">ทศพล ศรีนุญ</span>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">โปรไฟล์</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</nav>

<!-- CONTENT -->
<div class="container-fluid px-4 mt-4">

  <h3 class="fw-bold">สวัสดี, คุณ ทศพล ศรีนุญ</h3>
  <p class="text-muted">ยินดีต้อนรับเข้าสู่ระบบ ProMPT การจัดการเรียนรู้ครบวงจร</p>

  <div class="mb-4">
    <button class="btn btn-outline-secondary me-2">Manage view</button>
    <button class="btn btn-success">Learner view</button>
  </div>

  <div class="row g-4">

    <!-- การ์ดด้านซ้าย -->
    <div class="col-lg-9">
      <div class="row g-4">

        <div class="col-md-3"><div class="card card-prompt position-relative"><img src="assets/img/img-desktop1.svg"><div class="card-prompt-number">12</div></div></div>
        <div class="col-md-3"><div class="card card-prompt position-relative"><img src="assets/img/img-desktop2.svg"><div class="card-prompt-number">6</div></div></div>
        <div class="col-md-3"><div class="card card-prompt position-relative"><img src="assets/img/img-desktop3.svg"><div class="card-prompt-number">124</div></div></div>
        <div class="col-md-3"><div class="card card-prompt position-relative"><img src="assets/img/img-desktop4.svg"><div class="card-prompt-number">321</div></div></div>

      </div>
    </div>

    <!-- ปฏิทินใหม่ด้านขวา -->
    <div class="col-lg-3">
      <div class="calendar-box">

        <!-- หัวปฏิทิน -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="fw-bold mb-0" id="cal-month-year"></h4>
          <div>
            <button class="btn btn-light btn-sm" id="prevMonth"><i class="bi bi-chevron-left"></i></button>
            <button class="btn btn-light btn-sm" id="nextMonth"><i class="bi bi-chevron-right"></i></button>
          </div>
        </div>

        <!-- ตารางปฏิทิน -->
        <table class="table text-center mb-0">
          <thead>
            <tr class="text-muted">
              <th>จ.</th><th>อ.</th><th>พ.</th><th>พฤ.</th><th>ศ.</th><th>ส.</th><th>อา.</th>
            </tr>
          </thead>
          <tbody id="calendar-body"></tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<!-- SCRIPT ปฏิทิน -->
<script>
  const thaiMonths = [
    "มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน",
    "กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"
  ];

  let today = new Date();
  let currentMonth = today.getMonth();
  let currentYear = today.getFullYear();

  const monthYearText = document.getElementById("cal-month-year");
  const calendarBody = document.getElementById("calendar-body");

  function renderCalendar(month, year) {
    calendarBody.innerHTML = "";

    let firstDay = new Date(year, month, 1).getDay();
    let daysInMonth = new Date(year, month + 1, 0).getDate();

    let startDay = (firstDay + 6) % 7;

    monthYearText.innerHTML = `${thaiMonths[month]} ${year + 543}`;

    let date = 1;
    for (let i = 0; i < 6; i++) {
      let row = document.createElement("tr");

      for (let j = 0; j < 7; j++) {
        let cell = document.createElement("td");

        if (i === 0 && j < startDay) {
          cell.innerHTML = "";
        } else if (date > daysInMonth) {
          break;
        } else {
          cell.innerHTML = date;

          if (date === today.getDate() && year === today.getFullYear() && month === today.getMonth()) {
            cell.classList.add("today");
          }

          date++;
        }
        row.appendChild(cell);
      }
      calendarBody.appendChild(row);
    }
  }

  document.getElementById("prevMonth").addEventListener("click", () => {
    currentMonth--;
    if (currentMonth < 0) { currentMonth = 11; currentYear--; }
    renderCalendar(currentMonth, currentYear);
  });

  document.getElementById("nextMonth").addEventListener("click", () => {
    currentMonth++;
    if (currentMonth > 11) { currentMonth = 0; currentYear++; }
    renderCalendar(currentMonth, currentYear);
  });

  renderCalendar(currentMonth, currentYear);
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
