<?= $this->include('includes/header.php'); ?>

<style>
body{
  font-family: "TH Sarabun New", Arial, sans-serif;
  background:#f5f5f5;
}
.page{
  width: 210mm;
  min-height: 297mm;
  background:#fff;
  margin:20px auto;
  padding:20mm;
  box-sizing:border-box;
}

/* ===== Header ===== */
.header{
  display:flex;
  justify-content:space-between;
  align-items:flex-start;
}
.header-left{
  display:flex;
  gap:10px;
}
.logo{
  width: 100px;
}
.header-right{
  text-align:right;
  font-size:14px;
}
.title{
  text-align:center;
  font-size:26px;
  font-weight:bold;
  margin:15px 0;
}

/* ===== Info Section ===== */
.info{
  display:flex;
  gap:10px;
  margin-bottom:15px;
}
.info-box{
  border:1px solid #6f42c1;
  padding:10px;
  font-size:14px;
}
.info-left{
  flex:2;
}
.info-right{
  flex:1;
}
.info-row{
  display:flex;
  justify-content:space-between;
}

/* ===== Table ===== */
table{
  width:100%;
  border-collapse:collapse;
  font-size:14px;
}
th, td{
  border:1px solid #6f42c1;
  padding:6px;
}
th{
  background:#6f42c1;
  color:#fff;
  text-align:center;
}
td{
  vertical-align:top;
}
.text-center{ text-align:center; }
.text-right{ text-align:right; }

/* ===== Summary ===== */
.summary{
  display:flex;
  margin-top:10px;
}
.summary-left{
  flex:2;
  border:1px solid #6f42c1;
  padding:10px;
}
.summary-right{
  flex:1;
}
.summary-right table td{
  border:1px solid #6f42c1;
}
.summary-right .total{
  background:#6f42c1;
  color:#fff;
  font-weight:bold;
}

/* ===== Signature ===== */
.signature{
  display:flex;
  justify-content:space-between;
  margin-top:40px;
  text-align:center;
}
.sign{
  width:30%;
}
.sign-line{
  border-top:1px dashed #000;
  margin-bottom:5px;
}
</style>
</head>

<body>

<div class="page">

  <!-- HEADER -->
  <div class="header">
    <div class="header-left">
      <img src="<?= base_url('assets/img/login/logo-login1.svg'); ?>" class="logo">
    </div>

    <div class="header-right">
      CMU School of Lifelong Education<br>
      โทร 053-943695<br>
      Email: support_lifelong@cmu.ac.th
    </div>
  </div>

  <div class="title">ใบเสนอราคา</div>

  <!-- INFO -->
  <div class="info">
    <div class="info-box info-left">
      <b>ชื่อลูกค้า:</b> ALED จำกัด<br>
      <b>ชื่อผู้ติดต่อ:</b> คุณสมศักดิ์<br>
      <b>ที่อยู่:</b> 97/2 ต.สุเทพ อ.เมือง จ.เชียงใหม่ 50200<br>
      <b>โทรศัพท์:</b> 053-276160
    </div>

    <div class="info-box info-right">
      <div class="info-row"><span>เลขที่</span><span>QUS302-00001</span></div>
      <div class="info-row"><span>วันที่</span><span>26/12/2568</span></div>
      <div class="info-row"><span>วันกำหนดส่ง</span><span>30/12/2568</span></div>
      <div class="info-row"><span>วันหมดอายุ</span><span>02/01/2569</span></div>
    </div>
  </div>

  <!-- TABLE -->
  <table>
    <thead>
      <tr>
        <th width="5%">ลำดับ</th>
        <th>รายการ</th>
        <th width="10%">จำนวน</th>
        <th width="15%">ราคา/หน่วย</th>
        <th width="10%">ส่วนลด</th>
        <th width="15%">จำนวนเงิน</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-center">1</td>
        <td>คอร์ส AI ปัญญาประดิษฐ์</td>
        <td class="text-center">1</td>
        <td class="text-right">25,000.00</td>
        <td class="text-right">0.00</td>
        <td class="text-right">25,000.00</td>
      </tr>
      <tr style="height:120px;">
        <td></td><td></td><td></td><td></td><td></td><td></td>
      </tr>
    </tbody>
  </table>

  <!-- SUMMARY -->
  <div class="summary">
    <div class="summary-left">
      จำนวนเงิน (สองหมื่นห้าพันบาทถ้วน)
    </div>

    <div class="summary-right">
      <table width="100%">
        <tr><td>รวมเงิน</td><td class="text-right">25,000.00</td></tr>
        <tr><td>หักส่วนลดพิเศษ</td><td class="text-right">0.00</td></tr>
        <tr><td>ยอดรวมหลังหักส่วนลด</td><td class="text-right">25,000.00</td></tr>
        <tr><td>ภาษีมูลค่าเพิ่ม</td><td class="text-right">0.00</td></tr>
        <tr class="total"><td>จำนวนเงินรวมทั้งสิ้น</td><td class="text-right">25,000.00</td></tr>
      </table>
    </div>
  </div>

  <!-- SIGN -->
  <div class="signature">
    <div class="sign">
      <div class="sign-line"></div>
      ผู้อนุมัติซื้อ<br>วันที่
    </div>
    <div class="sign">
      <div class="sign-line"></div>
      พนักงานขาย<br>วันที่
    </div>
    <div class="sign">
      <div class="sign-line"></div>
      ผู้จัดการฝ่ายขาย<br>วันที่
    </div>
  </div>

</div>

</body>
</html>