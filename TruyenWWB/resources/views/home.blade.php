{{-- resources/views/home.blade.php --}}
@extends('layouts.app')

@section('content')

{{-- Phần hero tồn tại như cũ --}}
<div class="hero">
    <h2>Chào mừng thiếu hiệp</h2>
</div>

{{-- Nhúng danh sách truyện --}}
@include('product.product-list')

@endsection
