<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Mock data - replaced with database later
    private $departments = [
        'DHKTPM' => 'Đại học Kinh tế - Kỹ thuật - Phần mềm',
        'CNTT' => 'Công nghệ Thông tin',
        'QLKD' => 'Quản lý Kinh doanh',
        'KTPM' => 'Kỹ thuật Phần mềm',
        'HTTT' => 'Hệ thống Thông tin',
        'KHUD' => 'Khoa học Ứng dụng',
    ];

    // Display list of students
    public function index(Request $request)
    {
        $department = $request->query('department', '');
        
        $students = Student::all();
        
        // Filter by department if selected
        if ($department) {
            $students = $students->filter(function ($student) use ($department) {
                return $student->nganh === $department;
            });
        }
        
        return view('students.index', [
            'students' => $students,
            'departments' => $this->departments,
            'selectedDepartment' => $department
        ]);
    }

    // Show create form
    public function create()
    {
        return view('students.create', [
            'departments' => $this->departments
        ]);
    }

    // Store new student
    public function store(Request $request)
    {
        $validated = $request->validate([
            'ma_sv' => 'required|unique:students|max:20',
            'ho_ten' => 'required|max:100',
            'nam_sinh' => 'required|integer|min:1900|max:' . date('Y'),
            'so_dt' => 'required|max:20',
            'email' => 'required|email|unique:students',
            'dia_chi' => 'required|max:255',
            'que_quan' => 'required|max:100',
            'lop' => 'required|max:50',
            'nganh' => 'required|max:100',
            'khoa' => 'required|max:50',
            'ghi_chu' => 'nullable|max:500'
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Thêm sinh viên thành công!');
    }

    // Show edit form
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('students.edit', [
            'student' => $student,
            'departments' => $this->departments
        ]);
    }

    // Update student
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validated = $request->validate([
            'ma_sv' => 'required|max:20|unique:students,ma_sv,' . $id,
            'ho_ten' => 'required|max:100',
            'nam_sinh' => 'required|integer|min:1900|max:' . date('Y'),
            'so_dt' => 'required|max:20',
            'email' => 'required|email|unique:students,email,' . $id,
            'dia_chi' => 'required|max:255',
            'que_quan' => 'required|max:100',
            'lop' => 'required|max:50',
            'nganh' => 'required|max:100',
            'khoa' => 'required|max:50',
            'ghi_chu' => 'nullable|max:500'
        ]);

        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Cập nhật sinh viên thành công!');
    }

    // Delete student
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Xóa sinh viên thành công!');
    }
}