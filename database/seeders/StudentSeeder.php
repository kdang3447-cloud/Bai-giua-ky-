<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $students = [
            [
                'ma_sv' => 'SV001',
                'ho_ten' => 'Nguyễn Văn A',
                'nam_sinh' => 2003,
                'so_dt' => '0987123456',
                'email' => 'nguyenvana@example.com',
                'dia_chi' => 'Số 12 Lê Lợi, Hà Nội',
                'que_quan' => 'Thái Bình',
                'lop' => 'DHKTPM1',
                'nganh' => 'Kỹ thuật Phần mềm',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => 'Email đã xác thực'
            ],
            [
                'ma_sv' => 'SV002',
                'ho_ten' => 'Trần Thị B',
                'nam_sinh' => 2003,
                'so_dt' => '0901234567',
                'email' => 'tranthib@example.com',
                'dia_chi' => 'Số 45 Nguyễn Hữu Cảnh, TP.HCM',
                'que_quan' => 'Hải Phòng',
                'lop' => 'DHKTPM1',
                'nganh' => 'Kỹ thuật Phần mềm',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => 'Học sinh xuất sắc'
            ],
            [
                'ma_sv' => 'SV003',
                'ho_ten' => 'Phạm Văn C',
                'nam_sinh' => 2004,
                'so_dt' => '0912345678',
                'email' => 'phamvanc@example.com',
                'dia_chi' => 'Số 78 Hùng Vương, Đà Nẵng',
                'que_quan' => 'Quảng Nam',
                'lop' => 'CNTT2',
                'nganh' => 'Công nghệ Thông tin',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => null
            ],
            [
                'ma_sv' => 'SV004',
                'ho_ten' => 'Lê Thị D',
                'nam_sinh' => 2003,
                'so_dt' => '0923456789',
                'email' => 'lethid@example.com',
                'dia_chi' => 'Số 34 Trần Hưng Đạo, Hà Nội',
                'que_quan' => 'Hà Nội',
                'lop' => 'QLKD1',
                'nganh' => 'Quản lý Kinh doanh',
                'khoa' => 'Quản lý - Kinh tế',
                'ghi_chu' => 'Cần hỗ trợ thêm'
            ],
            [
                'ma_sv' => 'SV005',
                'ho_ten' => 'Hoàng Văn E',
                'nam_sinh' => 2004,
                'so_dt' => '0934567890',
                'email' => 'hoangvane@example.com',
                'dia_chi' => 'Số 56 Lý Tự Trọng, Cần Thơ',
                'que_quan' => 'An Giang',
                'lop' => 'HTTT3',
                'nganh' => 'Hệ thống Thông tin',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => 'Ưu tiên sinh viên xuất sắc'
            ],
            [
                'ma_sv' => 'SV006',
                'ho_ten' => 'Vũ Thị F',
                'nam_sinh' => 2003,
                'so_dt' => '0945678901',
                'email' => 'vuthif@example.com',
                'dia_chi' => 'Số 23 Ngô Quyền, Hải Phòng',
                'que_quan' => 'Hải Phòng',
                'lop' => 'DHKTPM1',
                'nganh' => 'Kỹ thuật Phần mềm',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => null
            ],
            [
                'ma_sv' => 'SV007',
                'ho_ten' => 'Đặng Văn G',
                'nam_sinh' => 2004,
                'so_dt' => '0956789012',
                'email' => 'dangvang@example.com',
                'dia_chi' => 'Số 89 Phan Dinh Phung, Hà Nội',
                'que_quan' => 'Vĩnh Long',
                'lop' => 'CNTT2',
                'nganh' => 'Công nghệ Thông tin',
                'khoa' => 'Công nghệ thông tin',
                'ghi_chu' => 'Cần theo dõi thêm'
            ],
            [
                'ma_sv' => 'SV008',
                'ho_ten' => 'Bùi Thị H',
                'nam_sinh' => 2003,
                'so_dt' => '0967890123',
                'email' => 'buithih@example.com',
                'dia_chi' => 'Số 12 Đào Tấn, Ba Đình, Hà Nội',
                'que_quan' => 'Hà Nam',
                'lop' => 'QLKD1',
                'nganh' => 'Quản lý Kinh doanh',
                'khoa' => 'Quản lý - Kinh tế',
                'ghi_chu' => null
            ]
        ];

        foreach ($students as $student) {
            Student::create($student);
        }
    }
}
