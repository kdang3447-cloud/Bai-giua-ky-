#!/usr/bin/env python3
# -*- coding: utf-8 -*-

content = """@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4 mb-3">
            <i class="fas fa-graduation-cap"></i> Hệ Thống Quản Lý Sinh Viên
        </h1>
        <p class="text-muted fs-5 mb-4">Quản lý thông tin sinh viên hiệu quả và dễ dàng</p>

        @if (Auth::check())
        <div class="alert alert-info d-inline-block mb-4">
            <i class="fas fa-check-circle"></i> Xin chào, <strong>{{ Auth::user()->name }}</strong>!
        </div>
        <div>
            <a href="{{ route('students.index') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-list"></i> Xem Danh Sách Sinh Viên
            </a>
            <a href="{{ route('students.create') }}" class="btn btn-success btn-lg ms-2">
                <i class="fas fa-plus"></i> Thêm Sinh Viên Mới
            </a>
        </div>
        @else
        <p class="mb-4 fs-5">Vui lòng đăng nhập hoặc đăng ký để bắt đầu</p>
        <div>
            <a href="{{ route('auth.login') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-sign-in-alt"></i> Đăng Nhập
            </a>
            <a href="{{ route('auth.register') }}" class="btn btn-success btn-lg ms-2">
                <i class="fas fa-user-plus"></i> Đăng Ký
            </a>
        </div>
        @endif
    </div>

    <hr class="my-5">

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <i class="fas fa-users text-primary fa-2x mb-2"></i>
                        <div>Quản Lý Sinh Viên</div>
                    </h5>
                    <p class="card-text">Tạo, cập nhật và quản lý thông tin sinh viên một cách dễ dàng</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <i class="fas fa-lock text-success fa-2x mb-2"></i>
                        <div>Bảo Mật</div>
                    </h5>
                    <p class="card-text">Tài khoản của bạn được bảo vệ bằng mật khẩu mạnh</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <i class="fas fa-tachometer-alt text-warning fa-2x mb-2"></i>
                        <div>Nhanh Chóng</div>
                    </h5>
                    <p class="card-text">Giao diện thân thiện, dễ sử dụng và nhanh chóng</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection"""

with open(r'c:\xampp\htdocs\quan-ly-sinh-vien\resources\views\welcome.blade.php', 'w', encoding='utf-8') as f:
    f.write(content)
print('File written successfully')
