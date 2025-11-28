<?php
    // Bạn có thể thay đổi tên ở đây
    $name = "Thiếu hiệp";
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Welcome Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Gọi file CSS nằm cùng thư mục -->
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link href="https://fonts.googleapis.com/css2?family=Marcellus&display=swap" rel="stylesheet">

</head>
<body>
    <div class="wrapper">
        <div class="welcome-card">
            <h1>Xin chào, <?php echo htmlspecialchars($name); ?> 👋</h1>
            <p>
                Chào mừng bạn đến với TruyenWWB<br>
                Hãy cùng nhau đọc những cuốn truyện hấp dẫn!
            </p>

            <a href="{{route('home')}}" class="primary-btn">Bắt đầu khám phá</a>
        </div>
    </div>
</body>
</html>
