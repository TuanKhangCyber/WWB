{{-- resources/views/product.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1 class="page-title">Danh sách truyện</h1>

    @php
        $stories = [
            [
                'title' => 'Đỉnh cấp khí vận lặng lẽ tu luyện ngàn năm',
                'url'   => 'https://truyenqqno.com/truyen-tranh/dinh-cap-khi-van-lang-le-tu-luyen-ngan-nam-12788',
                'img'   => 'img/Dinh_cap_khi_van_lang_le_tu_luyen_ngan_nam.png',
                'alt'   => 'Đỉnh cấp khí vận lặng lẽ tu luyện ngàn năm',
                'desc'  => 'Manhua, Mystery, Martial Arts, Chuyển Sinh, Truyện Màu • 281 chương',
            ],
            [
                'title' => 'Đảo Hải Tặc',
                'url'   => 'https://truyenqqno.com/truyen-tranh/one-piece-128',
                'img'   => 'img/one_picece.png',
                'alt'   => 'Đảo Hải Tặc',
                'desc'  => 'Manga, Hành động, Phiêu lưu • 1166 chương',
            ],
            [
                'title' => 'Đại quản gia là ma hoàng',
                'url'   => 'https://truyenqqno.com/truyen-tranh/dai-quan-gia-la-ma-hoang-7015',
                'img'   => 'img/dai_quan_gia_LMH.png',
                'alt'   => 'Đại quản gia là ma hoàng',
                'desc'  => 'Manhua, Trùng sinh, Xuyên không, Truyện Màu • 783 chương',
            ],
            [
                'title' => 'Võ Luyện Đỉnh Phong',
                'url'   => 'https://truyenqqno.com/truyen-tranh/vo-luyen-dinh-phong-3926',
                'img'   => 'img/vo_luyen_dinh_phong.png',
                'alt'   => 'Võ Luyện Đỉnh Phong',
                'desc'  => 'Manhua, Tu luyện, Võ thuật, Huyền huyễn • Đang cập nhật chương',
            ],
            [
                'title' => 'Tinh Võ Thần Quyết',
                'url'   => 'https://truyenqqno.com/truyen-tranh/tinh-vo-than-quyet-1893',
                'img'   => 'img/tinh_vo_than_quyet.png',
                'alt'   => 'Tinh Võ Thần Quyết',
                'desc'  => 'Manhua, Tu luyện, Huyền huyễn, Tình cảm • Đang cập nhật chương',
            ],
            [
                'title' => 'Hồi Quy Giả',
                'url'   => 'https://truyenqqno.com/truyen-tranh/hoi-quy-gia-13408',
                'img'   => 'img/hoi_quy_gia.png',
                'alt'   => 'Hồi Quy Giả',
                'desc'  => 'Manhua, Trùng sinh, Hệ thống, Hành động • Đang cập nhật chương',
            ],
            [
                'title' => 'Toàn Trí Độc Giả',
                'url'   => 'https://truyenqqno.com/truyen-tranh/toan-tri-doc-gia-9702',
                'img'   => 'img/toan_tri_doc_gia.png',
                'alt'   => 'Toàn Trí Độc Giả',
                'desc'  => 'Manhwa, Hành động, Viễn tưởng, Sinh tồn • Đang cập nhật chương',
            ],
            [
                'title' => 'Cuốn sách chiến lược hàng đầu',
                'url'   => 'https://truyenqqno.com/truyen-tranh/cuon-sach-chien-luoc-hang-dau-ma-chi-toi-moi-co-the-nhin-thay-15655',
                'img'   => 'img/cuon_sach_chien_luoc.png',
                'alt'   => 'Cuốn sách chiến lược hàng đầu',
                'desc'  => 'Manhwa, Hệ thống, Chiến lược, Sinh tồn • Đang cập nhật chương',
            ],
            [
                'title' => 'Uzumaki Boruto',
                'url'   => 'https://truyenqqno.com/truyen-tranh/uzumaki-boruto-2577',
                'img'   => 'img/uzumaki_boruto.png',
                'alt'   => 'Uzumaki Boruto',
                'desc'  => 'Manga, Hành động, Phiêu lưu, Ninja • Đang cập nhật chương',
            ],
        ];
    @endphp

    <div class="product-section">
        <h2 class="section-title">Truyện nổi bật</h2>

        <div class="product-grid">
            @foreach ($stories as $story)
                <div class="product-card">
                    <a href="{{ $story['url'] }}"
                       target="_blank"
                       class="product-link">
                        <img src="{{ asset($story['img']) }}"
                             alt="{{ $story['alt'] }}">

                        <h3>{{ $story['title'] }}</h3>

                        <p>{{ $story['desc'] }}</p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
