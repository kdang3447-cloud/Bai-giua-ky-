# 🚀 Hướng Dẫn Khởi Đầu Nhanh

## Truy cập ứng dụng

Ứng dụng đã được cấu hình и sẵn sàng chạy!

### 1️⃣ Mở trình duyệt

Truy cập URL: **http://localhost:8000/students**

### 2️⃣ Xem danh sách sinh viên

Bạn sẽ thấy:
- ✅ Bảng danh sách 8 sinh viên mẫu
- ✅ Nút "➕ Thêm sinh viên mới"
- ✅ Dropdown lọc theo ngành
- ✅ Các nút hành động (Sửa/Xóa) cho mỗi sinh viên

### 3️⃣ Công Thức Sử Dụng Cơ Bản

#### **Lọc theo ngành**
```
Chọn từ dropdown → Bảng tự cập nhật
```

#### **Thêm sinh viên**
```
Nút "➕ Thêm sinh viên mới"
↓
Điền form (các trường *)
↓
Click "💾 Lưu"
```

#### **Sửa sinh viên**
```
Click "✏️ Sửa" trên hàng
↓
Chỉnh sửa thông tin
↓
Click "💾 Cập nhật"
```

#### **Xóa sinh viên**
```
Click "🗑️ Xóa"
↓
Xác nhận
↓
Sinh viên bị xóa
```

## 📂 Cấu trúc Thư Mục Quan Trọng

```
quan-ly-sinh-vien/
├── app/
│   ├── Http/Controllers/StudentController.php  ← Logic xử lý
│   └── Models/Student.php                      ← Model dữ liệu
├── database/
│   ├── migrations/                             ← Tạo bảng
│   └── seeders/StudentSeeder.php               ← Dữ liệu mẫu
├── resources/views/students/                   ← Giao diện
│   ├── index.blade.php                         ← Danh sách
│   ├── create.blade.php                        ← Thêm mới
│   └── edit.blade.php                          ← Sửa
├── routes/web.php                              ← Đường dẫn URL
└── database.sqlite                             ← CSDL
```

## 🔌 Các URL Chính

| URL | Mục đích |
|-----|---------|
| `/students` | Danh sách sinh viên |
| `/students/create` | Form thêm sinh viên |
| `/students/{id}/edit` | Form sửa sinh viên |

## ❌ Nếu có lỗi

### Lỗi: "Could not open input file: artisan"
```bash
# Chắc chắn đang ở thư mục quan-ly-sinh-vien
cd c:\xampp\htdocs\quan-ly-sinh-vien

# Khởi động lại server
c:\xampp\php\php.exe artisan serve --host=localhost --port=8000
```

### Lỗi: "Mã SV hoặc Email đã tồn tại"
- Mã SV và Email phải duy nhất trong hệ thống
- Hãy thử với giá trị khác

### Dữ liệu không hiển thị
```bash
# Chạy seeder lại
cd c:\xampp\htdocs\quan-ly-sinh-vien
c:\xampp\php\php.exe artisan db:seed
```

## 📚 Tính Năng Chính

✨ **Giao diện đẹp**: Bootstrap 5 với gradient màu tím  
✨ **Form xác thực**: Kiểm tra toàn bộ dữ liệu nhập vào  
✨ **Lọc dumpuk thông minh**: Lọc theo ngành học  
✨ **Responsive Design**: Thích ứng trên mobile/tablet  
✨ **Thông báo**: Hiển thị thông báo thành công/lỗi  

---

**Bắt đầu ngay!** → Mở http://localhost:8000/students 🎉
