@extends('layout')

@section('title', 'Danh sách Sinh viên')

@section('content')
<div class="mb-4 d-flex justify-content-between align-items-center">
    <h1>Danh sách Sinh viên</h1>
    <a href="{{ route('students.create') }}" class="btn btn-primary btn-lg">
        ➕ Thêm sinh viên mới
    </a>
</div>

<!-- Filter by Department -->
<div class="row mb-4">
    <div class="col-md-4">
        <form method="GET" action="{{ route('students.index') }}" class="d-flex gap-2">
            <select name="department" class="form-select" onchange="this.form.submit()">
                <option value="">Tất cả ngành học</option>
                @foreach ($departments as $code => $name)
                    <option value="{{ $code }}" @if($selectedDepartment === $code) selected @endif>
                        {{ $name }}
                    </option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="col-md-4">
        <p class="text-muted mb-0">
            <strong>Tổng cộng:</strong> {{ count($students) }} sinh viên
        </p>
    </div>
</div>

@if (count($students) > 0)
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Mã SV</th>
                    <th>Họ và Tên</th>
                    <th>Năm sinh</th>
                    <th>Số ĐT</th>
                    <th>Email</th>
                    <th>Lớp</th>
                    <th>Ngành</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td><span class="badge bg-info">{{ $student->ma_sv }}</span></td>
                        <td>{{ $student->ho_ten }}</td>
                        <td>{{ $student->nam_sinh }}</td>
                        <td>{{ $student->so_dt }}</td>
                        <td><small>{{ $student->email }}</small></td>
                        <td>{{ $student->lop }}</td>
                        <td>{{ $student->nganh }}</td>
                        <td>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-sm btn-warning">
                                ✏️ Sửa
                            </a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" 
                                        onclick="return confirm('Bạn có chắc muốn xóa sinh viên này?')">
                                    🗑️ Xóa
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="alert alert-info text-center py-5">
        <h5>Không có sinh viên nào</h5>
        <p class="mb-0">Hãy <a href="{{ route('students.create') }}" class="alert-link">thêm sinh viên mới</a></p>
    </div>
@endif
@endsection
