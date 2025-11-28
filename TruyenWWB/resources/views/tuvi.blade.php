{{-- resources/views/tuvi.blade.php --}}
@extends('layouts.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/tuvi.css') }}">
@endpush
@section('content')
    <h1 class="page-title">Tu vi của thiếu hiệp</h1>

    <div class="tuvi-layout">
        {{-- Cột trái: các cảnh giới tu luyện --}}
        <section class="tuvi-realms card-shadow">
            <h2 class="tuvi-title">Cảnh giới tu luyện</h2>
            <p class="tuvi-intro">
                Dưới đây là lộ trình tu luyện cơ bản trong thế giới TruyenWWB. 
                Mỗi thiếu hiệp có thể tu luyện, tích lũy linh lực để bước lên cảnh giới cao hơn.
            </p>

            <ol class="tuvi-realm-list">
                <li>
                    <h3>Luyện Khí</h3>
                    <p>Giai đoạn nhập môn, bước đầu hấp thu linh khí thiên địa, rèn luyện thân thể và kinh mạch.</p>
                </li>
                <li>
                    <h3>Trúc Cơ</h3>
                    <p>Ngưng tụ linh lực thành linh căn vững chắc, là nền tảng quan trọng cho con đường trường sinh.</p>
                </li>
                <li>
                    <h3>KIM ĐAN</h3>
                    <p>Ngưng kết kim đan trong Đan Điền, pháp lực đại tăng, một lời có thể khuynh đảo sơn hà.</p>
                </li>
                <li>
                    <h3>Nguyên Anh</h3>
                    <p>Hóa thân linh hồn thành Nguyên Anh, có thể du tẩu thiên địa, thần thức mạnh mẽ.</p>
                </li>
                <li>
                    <h3>Hóa Thần</h3>
                    <p>Thân cùng đạo dung hợp, pháp tắc bao quanh, một niệm hóa vạn pháp.</p>
                </li>
                <li>
                    <h3>Đại Thừa</h3>
                    <p>Cảnh giới đỉnh phong của phàm trần, đứng trên vạn người, dưới trời xanh, chỉ còn thiếu một bước phi thăng.</p>
                </li>
                <li>
                    <h3>Phi Thăng / Tiên Nhân</h3>
                    <p>Rời khỏi phàm giới, bước chân vào tiên vực, mở ra một chương mới trên con đường trường sinh bất tử.</p>
                </li>
            </ol>
        </section>

        {{-- Cột phải: bảng tu vi cá nhân (sau này có thể gắn dữ liệu thật) --}}
        <section class="tuvi-profile card-shadow">
            <h2 class="tuvi-title">Hồ sơ tu luyện</h2>

            <div class="tuvi-profile-box">
                <div class="tuvi-row">
                    <span class="tuvi-label">Danh hiệu</span>
                    <span class="tuvi-value">Bất Bại Thiên Tôn</span>
                </div>
                <div class="tuvi-row">
                    <span class="tuvi-label">Cảnh giới hiện tại</span>
                    <span class="tuvi-value tuvi-highlight">Đại Thừa kỳ</span>
                </div>

                <div class="tuvi-row">
                    <span class="tuvi-label">Kinh nghiệm</span>
                    <span class="tuvi-value">999999 / 9999999 linh lực</span>
                </div>
                <div class="tuvi-row">
                    <span class="tuvi-label">Môn phái</span>
                    <span class="tuvi-value">Thiên Địa Phi Thăng Thánh Tông</span>
                </div>
                <div class="tuvi-row">
                    <span class="tuvi-label">Vũ khí</span>
                    <span class="tuvi-value">Nguyên Tôn Ý Kiếm</span>
                </div>
            </div>

           <div class="tuvi-progress">
                <span class="tuvi-label">Tiến độ phi thăng tiên giới</span>
                <div class="tuvi-progress-bar">
                    <div class="tuvi-progress-fill" style="width: 99%;"></div>
                </div>
                <p class="tuvi-progress-note">
                    Thiếu hiệp đã bước vào Đại Thừa kỳ, chỉ còn một bước nữa là phi thăng tiên giới.
                </p>
            </div>



            <div class="tuvi-actions">

                <a href="{{ route('products') }}" class="btn-primary">Đọc truyện tăng tu vi</a>

                <a href="{{ route('home') }}" class="btn-ghost">Quay về trang chủ</a>
            </div>
        </section>
    </div>

    {{-- Gợi ý ghi chú / lore --}}
    <section class="tuvi-note card-shadow">
        <h2 class="tuvi-title">Ghi chú</h2>
        <p>
            Hệ thống Tu Vi trên TruyenWWB hiện đang trong giai đoạn thử nghiệm. 
            Trong tương lai, tài khoản đăng nhập có thể:
        </p>
        <ul>
            <li>Nhận điểm tu luyện khi đọc truyện, bình luận hoặc đề xuất truyện mới.</li>
            <li>Mở khóa danh hiệu, vũ khí, môn phái riêng cho tài khoản.</li>
            <li>Tham gia bảng xếp hạng tu luyện giữa các thiếu hiệp.</li>
        </ul>
    </section>
@endsection
