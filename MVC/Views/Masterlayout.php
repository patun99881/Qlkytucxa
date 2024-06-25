<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Ký túc xá</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/KiTucXa/Public/Css/dinhdang7.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            padding-top: 56px;
            width: 250px;
            background-color: #f8f9fa;
            overflow-y: auto;
        }
        .content {
            margin-left: 250px;
            padding-top: 56px;
            padding: 20px;
        }
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: bold;
        }
        .list-group-item:hover {
            background-color: #f1f1f1;
        }
        .header1 img {
            max-height: 100px;
        }
        .footer1 {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
        <a class="navbar-brand" href="#"><img src="http://localhost/KiTucXa/Public/img/logo.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="tel:0333444555">Điện thoại hỗ trợ: 0333444555</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Quyền của tôi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"> <img src="https://via.placeholder.com/30" class="rounded-circle" alt="User"></a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseRoom"><i class="fa-solid fa-hotel"></i> Quản lý phòng</a>
            <div class="collapse" id="collapseRoom">
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-brands fa-buromobelexperte"></i> Sơ đồ phòng</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Thêm phòng</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseStudent"><i class="fa-solid fa-person-walking"></i> Quản lý sinh viên</a>
            <div class="collapse" id="collapseStudent">
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-list"></i> Danh sách sinh viên</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Thêm sinh viên</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseStaff"> <i class="fa-solid fa-person"></i> Quản lý nhân viên</a>
            <div class="collapse" id="collapseStaff">
                <a href="#" class="list-group-item list-group-item-action"> <i class="fas fa-list"></i> Danh sách nhân viên</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Thêm nhân viên</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseCard"><i class="fa-solid fa-motorcycle"></i> Quản lý thẻ xe</a>
            <div class="collapse" id="collapseCard">
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-credit-card"></i> Danh sách thẻ xe</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-plus"></i> Thêm thẻ</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseReport"><i class="fa-solid fa-chart-line"></i> Báo cáo thống kê</a>
            <div class="collapse" id="collapseReport">
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-door-open"></i> Thống kê phòng</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-graduation-cap"></i> Thống kê sinh viên</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fa-solid fa-file-invoice"></i> Thống kê hóa đơn</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseAdmin"><i class="fa-solid fa-user-tie"></i> Quản trị viên</a>
            <div class="collapse" id="collapseAdmin">
                <div class="list-group-item list-group-item-action"><i class="fas fa-link"></i> Liên kết</div>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseAccount"><i class="fas fa-user-circle"></i> Quản lý tài khoản</a>
            <div class="collapse" id="collapseAccount">
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> Danh sách tài khoản</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Tạo tài khoản</a>
            </div>
            <a href="#" class="list-group-item list-group-item-action bg-light font-weight-bold" data-toggle="collapse" data-target="#collapseInvoice"><i class="fas fa-file-invoice"></i> Quản lý hóa đơn</a>
            <div class="collapse" id="collapseInvoice">
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-file-export"></i> Xuất hóa đơn</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-tint"></i> Hóa đơn điện nước</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-home"></i> Hóa đơn phòng</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="fas fa-bicycle"></i> Hóa đơn gửi xe</a>
            </div>
        </div>
    </div>
    <!-- main -->
    <div style="vertical-align: top; padding-top:10px;">
        <div class="content1">
            <?php 
                include_once './MVC/Views/Pages/'.$data['page'].'.php';
            ?>
        </div>
    </div>
</body>
</html>
