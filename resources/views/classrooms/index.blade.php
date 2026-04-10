@extends('layout')

@section('content')
<div class="container mt-5">
    <div class="row mb-4">
        <div class="col-md-8">
            <h2 class="display-5">
                <i class="fas fa-chalkboard"></i> Quản Lý Lớp Học
            </h2>
        </div>
        <div class="col-md-4 text-end">
            <a href="{{ route('classrooms.create') }}" class="btn btn-success btn-lg">
                <i class="fas fa-plus"></i> Thêm Lớp Học Mới
            </a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle"></i> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle"></i> {{ $message }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow-sm">
        <div class="card-body">
            @if ($classrooms->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <thead class="table-light">
                            <tr>
                                <th style="width: 5%;">STT</th>
                                <th>Tên Lớp</th>
                                <th>Mã Lớp</th>
                                <th>Mô Tả</th>
                                <th style="width: 15%;">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($classrooms as $key => $classroom)
                                <tr>
                                    <td>{{ ($classrooms->currentPage() - 1) * $classrooms->perPage() + $loop->iteration }}</td>
                                    <td>{{ $classroom->name }}</td>
                                    <td><span class="badge bg-info">{{ $classroom->code }}</span></td>
                                    <td>{{ Str::limit($classroom->description, 50) }}</td>
                                    <td>
                                        <a href="{{ route('classrooms.edit', $classroom->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i> Sửa
                                        </a>
                                        <form action="{{ route('classrooms.destroy', $classroom->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                                <i class="fas fa-trash"></i> Xóa
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <nav aria-label="Page navigation" class="mt-4">
                    {{ $classrooms->links() }}
                </nav>
            @else
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle"></i> Không có lớp học nào. 
                    <a href="{{ route('classrooms.create') }}">Tạo lớp học mới</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
