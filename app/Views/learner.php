<?= $this->include('includes/header.php'); ?>
<?= $this->include('includes/nav.php'); ?>

<!-- CSS -->
<link rel="stylesheet" href="<?= base_url('assets/css/learner.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">

<!-- CONTENT -->
<div class="container-fluid px-4 mt-4">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center flex-wrap mb-3">

    <div>
      <h3 class="fw-kanit m-0">สวัสดี, คุณ ทศพล ศรีนุญ</h3>
      <p class="text-muted m-0">
        ยินดีต้อนรับเข้าสู่ระบบ ProMPT การจัดการเรียนรู้ครบวงจร
      </p>
    </div>

    <div class="d-flex mt-2 mt-md-0">
      <a href="<?= base_url('desktop'); ?>" class="btn btn-outline-secondary me-2 btn-twin-left">
           Manage view
          </a>
      <button class="btn btn-success btn-twin-right">
        Learner view
      </button>
    </div>

  </div>

  <!-- Divider -->
  <div class="row">
    <div class="col-8">
      <hr>
    </div>
  </div>

  <!-- Main Content -->
  <div class="row g-4">

    <!-- Left Content -->
    <div class="col-lg-9">
      <div class="row g-4">

        <div class="col-md-4">
          <div class="card card-prompt position-relative">
            <img
              src="<?= base_url('assets/img/learner/img11.png'); ?>"
              class="img-fluid img-learner"
              alt="Learner Image"
            >
            <a href="<?= base_url('quotation'); ?>" class="btn btn-outline-secondary me-2 btn-twin-right">
            ขอใบเสนอราคา
          </a>
          </div>
        </div>

      </div>
    </div>

    <!-- Calendar -->
    <div class="col-lg-3">
      <div class="calendar-box p-3">

        <!-- Calendar Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="fw-bold mb-0" id="cal-month-year"></h4>
          <div>
            <button class="btn btn-light btn-sm" id="prevMonth">
              <i class="bi bi-chevron-left"></i>
            </button>
            <button class="btn btn-light btn-sm" id="nextMonth">
              <i class="bi bi-chevron-right"></i>
            </button>
          </div>
        </div>

        <!-- Calendar Table -->
        <table class="table text-center mb-0">
          <thead>
            <tr class="text-muted">
              <th>จ.</th>
              <th>อ.</th>
              <th>พ.</th>
              <th>พฤ.</th>
              <th>ศ.</th>
              <th>ส.</th>
              <th>อา.</th>
            </tr>
          </thead>
          <tbody id="calendar-body"></tbody>
        </table>

      </div>
    </div>

  </div>
</div>

<!-- SCRIPT : Calendar -->
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

  const firstDay = new Date(year, month, 1).getDay();
  const daysInMonth = new Date(year, month + 1, 0).getDate();
  const startDay = (firstDay + 6) % 7;

  monthYearText.textContent = `${thaiMonths[month]} ${year + 543}`;

  let date = 1;

  for (let i = 0; i < 6; i++) {
    const row = document.createElement("tr");

    for (let j = 0; j < 7; j++) {
      const cell = document.createElement("td");

      if (i === 0 && j < startDay) {
        cell.textContent = "";
      } else if (date > daysInMonth) {
        cell.textContent = "";
      } else {
        cell.textContent = date;

        if (
          date === today.getDate() &&
          month === today.getMonth() &&
          year === today.getFullYear()
        ) {
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
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear--;
  }
  renderCalendar(currentMonth, currentYear);
});

document.getElementById("nextMonth").addEventListener("click", () => {
  currentMonth++;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear++;
  }
  renderCalendar(currentMonth, currentYear);
});

renderCalendar(currentMonth, currentYear);
</script>

<?= $this->include('includes/scripts.php'); ?>
<?= $this->include('includes/footer.php'); ?>
