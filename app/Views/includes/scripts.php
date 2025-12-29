<!------ไฟล์สำหรับแก้ไขjsแบบรวม -------->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <!-- ไฟล์ JS ภายในโปรเจค -->
  <script src="<?= base_url('assets/js/script.js'); ?>"></script>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <script>
  document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("loading-screen").style.opacity = 0;
    setTimeout(() => {
      document.getElementById("loading-screen").style.display = "none";
    }, 200);
  });
</script>

<script>
const ctx = document.getElementById('lineChart').getContext('2d');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['JAN', 'FEB', 'MAR', 'APL', 'MAY', 'JUN'],
        datasets: [{
            label: '',
            data: [10, 22, 40, 60, 85, 100],
            borderWidth: 3,
            borderColor: '#2FA4FF',
            pointBackgroundColor: '#2FA4FF',
            tension: 0.4
        }]
    },
    options: {
        plugins: { legend: { display: false }},
        scales: {
            y: {
                beginAtZero: true,
                ticks: { stepSize: 25 }
            }
        }
    }
});
</script>

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

    monthYearText.innerHTML = `${thaiMonths[month]} <span class="year-text">${year + 543}</span>`;

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