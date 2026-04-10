# Quản lý Sinh viên - Student Management System
**Dự án Laravel - Bài Tập Áp Dụng**

## 📋 Tính năng

Ứng dụng quản lý sinh viên đầy đủ với các chức năng:

✅ **Xem danh sách sinh viên** - Hiển thị tất cả sinh viên trong hệ thống  
✅ **Lọc theo ngành học** - Chọn ngành để xem sinh viên theo ngành cụ thể  
✅ **Thêm sinh viên mới** - Form nhập đầy đủ thông tin sinh viên  
✅ **Cập nhật thông tin** - Chỉnh sửa thông tin chi tiết sinh viên  
✅ **Xóa sinh viên** - Xóa sinh viên khỏi hệ thống (có xác nhận)  

## 📊 Thông tin Sinh viên

Mỗi sinh viên lưu trữ các thông tin sau:

- **Mã SV** - Mã sinh viên (duy nhất)
- **Họ và Tên** - Tên đầy đủ sinh viên
- **Năm sinh** - Năm sinh (1900 - hiện tại)
- **Số ĐT** - Số điện thoại liên hệ
- **Email** - Email (duy nhất)
- **Địa chỉ** - Địa chỉ thường trú
- **Quê quán** - Quê quán của sinh viên
- **Lớp** - Lớp học của sinh viên
- **Ngành** - Ngành học (Kỹ thuật Phần mềm, Công nghệ Thông tin, v.v.)
- **Khoa** - Khoa/Bộ môn quản lý
- **Ghi chú** - Ghi chú thêm (không bắt buộc)

## 🏗️ Cấu trúc Dự án

```
quan-ly-sinh-vien/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── StudentController.php       # Xử lý logic CRUD
│   └── Models/
│       └── Student.php                     # Model sinh viên
├── database/
│   ├── migrations/
│   │   └── 2024_04_08_120000_create_students_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── StudentSeeder.php               # Dữ liệu mẫu (8 sinh viên)
├── resources/
│   └── views/
│       ├── layout.blade.php                # Layout chính
│       └── students/
│           ├── index.blade.php             # Danh sách sinh viên
│           ├── create.blade.php            # Form thêm sinh viên
│           └── edit.blade.php              # Form sửa sinh viên
└── routes/
    └── web.php                             # Định tuyến ứng dụng
```

## 🔧 Công nghệ Sử dụng

- **Framework**: Laravel 12.56.0
- **PHP**: 8.2.12
- **Database**: SQLite (database.sqlite)
- **Frontend**: Bootstrap 5.3.0
- **Blade Template Engine**: View rendering

## 🚀 Hướng dẫn Sử dụng

### 1. **Xem danh sách sinh viên**
- Truy cập: `http://localhost:8000/students`
- Xem tất cả sinh viên trong bảng
- Số lượng sinh viên hiển thị ở góc phải

### 2. **Lọc theo ngành**
- Chọn ngành từ dropdown "Tất cả ngành học"
- Bảng sẽ tự động cập nhật để chỉ hiển thị sinh viên của ngành đó
- Các ngành có sẵn:
  - Kỹ thuật Phần mềm
  - Công nghệ Thông tin
  - Quản lý Kinh doanh
  - Hệ thống Thông tin

### 3. **Thêm sinh viên mới**
- Click nút "➕ Thêm sinh viên mới"
- Điền đầy đủ các trường bắt buộc (*)
- Chọn ngành từ dropdown
- Click "💾 Lưu"

### 4. **Sửa thông tin sinh viên**
- Click nút "✏️ Sửa" trên hàng sinh viên
- Chỉnh sửa thông tin cần thiết
- Click "💾 Cập nhật"

### 5. **Xóa sinh viên**
- Click nút "🗑️ Xóa" trên hàng sinh viên
- Xác nhận khi hỏi

## 📦 Dữ liệu Mẫu

Hệ thống đã được cấy dữ liệu với 8 sinh viên mẫu từ các ngành khác nhau:

| Mã SV | Họ và Tên      | Năm sinh | Ngành                  | Lớp     |
|-------|----------------|----------|------------------------|---------|
| SV001 | Nguyễn Văn A   | 2003     | Kỹ thuật Phần mềm      | DHKTPM1 |
| SV002 | Trần Thị B     | 2003     | Kỹ thuật Phần mềm      | DHKTPM1 |
| SV003 | Phạm Văn C     | 2004     | Công nghệ Thông tin    | CNTT2   |
| SV004 | Lê Thị D       | 2003     | Quản lý Kinh doanh     | QLKD1   |
| SV005 | Hoàng Văn E    | 2004     | Hệ thống Thông tin     | HTTT3   |
| SV006 | Vũ Thị F       | 2003     | Kỹ thuật Phần mềm      | DHKTPM1 |
| SV007 | Đặng Văn G     | 2004     | Công nghệ Thông tin    | CNTT2   |
| SV008 | Bùi Thị H      | 2003     | Quản lý Kinh doanh     | QLKD1   |

## ✅ Xác thực Dữ liệu

form thêm/sửa sinh viên có xác thực các trường:

- **Mã SV**: Bắt buộc, duy nhất, tối đa 20 ký tự
- **Họ và Tên**: Bắt buộc, tối đa 100 ký tự
- **Năm sinh**: Bắt buộc, số nguyên từ 1900 đến năm hiện tại
- **Số ĐT**: Bắt buộc, tối đa 20 ký tự
- **Email**: Bắt buộc, định dạng email, duy nhất
- **Địa chỉ**: Bắt buộc, tối đa 255 ký tự
- **Quê quán**: Bắt buộc, tối đa 100 ký tự
- **Lớp**: Bắt buộc, tối đa 50 ký tự
- **Ngành**: Bắt buộc, tối đa 100 ký tự
- **Khoa**: Bắt buộc, tối đa 50 ký tự
- **Ghi chú**: Tùy chọn, tối đa 500 ký tự

## 🎨 Giao diện

- **Navbar**: Thanh điều hướng với logo và tên ứng dụng
- **Color Scheme**: Gradient tím (từ #667eea đến #764ba2)
- **Module Design**: Đơn giản, người dùng thân thiện
- **Responsive**: Thích ứng trên các thiết bị khác nhau

## 📝 Ghi chú

- Dữ liệu lưu trong cơ sở dữ liệu SQLite
- Không cần sắc phục cơ sở dữ liệu riêng
- Tất cả file config đã được tự động tạo
- Ứng dụng sẵn sàng chạy trên localhost:8000

## 🔗 URL Routes

- `GET /students` - Xem danh sách sinh viên
- `GET /students/create` - Form thêm sinh viên
- `POST /students` - Lưu sinh viên mới
- `GET /students/{id}/edit` - Form sửa sinh viên
- `PUT /students/{id}` - Cập nhật sinh viên
- `DELETE /students/{id}` - Xóa sinh viên

---

**Phát triển bởi:** GitHub Copilot  
**Ngôn ngữ**: Tiếng Việt  
**Phiên bản Laravel**: 12.56.0
