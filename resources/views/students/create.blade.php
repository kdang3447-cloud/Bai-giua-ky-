@extends('layout')

@section('title', 'Thêm Sinh viên mới')

@section('content')
<h1>Thêm Sinh viên mới</h1>

<div class="row">
    <div class="col-md-8 mx-auto">
        <form action="{{ route('students.store') }}" method="POST" class="bg-light p-4 rounded">
            @csrf

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="ma_sv" class="form-label">Mã SV <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('ma_sv') is-invalid @enderror" 
                           id="ma_sv" name="ma_sv" placeholder="VD: SV001" value="{{ old('ma_sv') }}" required>
                    @error('ma_sv') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="ho_ten" class="form-label">Họ và Tên <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('ho_ten') is-invalid @enderror" 
                           id="ho_ten" name="ho_ten" placeholder="Nguyễn Văn A" value="{{ old('ho_ten') }}" required>
                    @error('ho_ten') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="nam_sinh" class="form-label">Năm sinh <span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('nam_sinh') is-invalid @enderror" 
                           id="nam_sinh" name="nam_sinh" placeholder="2003" value="{{ old('nam_sinh') }}" required>
                    @error('nam_sinh') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="so_dt" class="form-label">Số điện thoại <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('so_dt') is-invalid @enderror" 
                           id="so_dt" name="so_dt" placeholder="0987123456" value="{{ old('so_dt') }}" required>
                    @error('so_dt') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" 
                       id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
                @error('email') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="dia_chi" class="form-label">Địa chỉ <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('dia_chi') is-invalid @enderror" 
                       id="dia_chi" name="dia_chi" placeholder="Số 12 Lê Lợi, Hà Nội" value="{{ old('dia_chi') }}" required>
                @error('dia_chi') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="que_quan" class="form-label">Quê quán <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('que_quan') is-invalid @enderror" 
                       id="que_quan" name="que_quan" placeholder="Thái Bình" value="{{ old('que_quan') }}" required>
                @error('que_quan') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="lop" class="form-label">Lớp <span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('lop') is-invalid @enderror" 
                           id="lop" name="lop" placeholder="DHKTPM1" value="{{ old('lop') }}" required>
                    @error('lop') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="nganh" class="form-label">Ngành <span class="text-danger">*</span></label>
                    <select class="form-select @error('nganh') is-invalid @enderror" 
                            id="nganh" name="nganh" required>
                        <option value="">-- Chọn ngành --</option>
                        @foreach ($departments as $code => $name)
                            <option value="{{ $name }}" @if(old('nganh') === $name) selected @endif>
                                {{ $name }}
                            </option>
                        @endforeach
                    </select>
                    @error('nganh') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
                </div>
            </div>

            <div class="mb-3">
                <label for="khoa" class="form-label">Khoa <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('khoa') is-invalid @enderror" 
                       id="khoa" name="khoa" placeholder="Công nghệ thông tin" value="{{ old('khoa') }}" required>
                @error('khoa') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="ghi_chu" class="form-label">Ghi chú</label>
                <textarea class="form-control @error('ghi_chu') is-invalid @enderror" 
                          id="ghi_chu" name="ghi_chu" rows="3" 
                          placeholder="Ghi chú thêm về sinh viên (nếu có)">{{ old('ghi_chu') }}</textarea>
                @error('ghi_chu') <div class="invalid-feedback d-block">{{ $message }}</div> @enderror
            </div>

            <div class="d-flex gap-2">
                <button type="submit" class="btn btn-primary btn-lg">💾 Lưu</button>
                <a href="{{ route('students.index') }}" class="btn btn-secondary btn-lg">⬅️ Quay lại</a>
            </div>
        </form>
    </div>
</div>
@endsection
