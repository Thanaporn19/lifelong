<!------ไฟล์สำหรับแก้ไขNAVBARรวม -------->

<!-- ========== หน้าจอโหลด ========== -->
<div id="loading-screen"><div class="spinner-border"></div></div>

<!-- NAVBAR -->
<header class="shadow-sm ">

  <!-- ==== ชั้นที่ 1 : TOP BAR ==== -->
  <div class="topbar d-flex justify-content-between align-items-center px-4 py-2">

      <!-- โลโก้ -->
      <div class="d-flex align-items-center">
          <img src="assets/img/logo.svg" height="40" class="me-2 ms-5">
      </div>

      <!-- ไอคอน + โปรไฟล์ -->
      <div class="d-flex align-items-center gap-4">

          <!-- Notification -->
          <div class="position-relative">
              <i class="bi bi-bell fs-4"></i>
              <span class="badge bg-danger rounded-circle position-absolute" style="top: -6px; left: 17px;">4</span>
          </div>

            <!-- Profile -->
            <div class="dropdown">
                    <a href="#"
                class="d-flex align-items-center text-decoration-none dropdown-toggle profile-toggle"
                data-bs-toggle="dropdown"
                role="button">

                <img src="assets/img/desktop/pro.svg" class="rounded-circle me-2" width="38">

                        <div class="d-flex flex-column">
                            <span class="fw-semibold text-dark">ทศพล ศรีนุญ</span>
                            <small class="text-muted" style="margin-top:-2px;">โปรไฟล์</small>
                        </div>
                    </a>
            </div>
      </div>
  </div>

  <!-- ==== ชั้นที่ 2 : MENU BAR ==== -->
  <nav class="menubar border-top">
      <ul class="nav justify-content-center py-2 gap-3">

        <li class="nav-item">
            <a class="nav-link home-active" href="#">
                <i class="bi bi-grid menu-icon"></i> หน้าหลัก
            </a>
        </li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  <i class="bi bi-mortarboard menu-icon"></i> การเรียนรู้
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item">หน้ารวมการเรียนรู้</a></li>
                    <div class="col-12">
                        <hr style="border: -1px solid gray !important;">
                    </div>
                  <li><a class="dropdown-item">การเรียนรู้อปท.</a></li>
              </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-journal-bookmark menu-icon"></i> จัดการโครงการ</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-folder2-open menu-icon"></i> กิจกรรม</a></li>

          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                  <i class="bi bi-graph-up menu-icon"></i> ระบบประเมิน
              </a>
              <ul class="dropdown-menu">
                  <li><a class="dropdown-item">ระบบประเมินผู้เรียน</a></li>
                    <div class="col-12">
                        <hr style="border: -1px solid gray !important;">
                    </div>
                  <li><a class="dropdown-item">ระบบประเมินวิทยากร</a></li>
                    <div class="col-12">
                        <hr style="border: 1px solid gray !important;">
                    </div>
                  <li><a class="dropdown-item">ระบบประเมินชุมชน</a></li>
              </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-pie-chart menu-icon"></i> ผลการดำเนินงาน</a></li>

      </ul>
  </nav>

</header>

    

