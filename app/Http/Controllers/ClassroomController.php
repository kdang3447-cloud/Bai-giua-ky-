<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the classrooms with pagination.
     */
    public function index(Request $request)
    {
        $perPage = 10;
        $classrooms = Classroom::paginate($perPage);
        
        return view('classrooms.index', compact('classrooms'));
    }

    /**
     * Show the form for creating a new classroom.
     */
    public function create()
    {
        return view('classrooms.create');
    }

    /**
     * Store a newly created classroom in database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:classrooms',
            'description' => 'nullable|string',
        ]);

        Classroom::create($validated);

        return redirect()->route('classrooms.index')
                        ->with('success', 'Lớp học đã được tạo thành công!');
    }

    /**
     * Show the form for editing the specified classroom.
     */
    public function edit(Classroom $classroom)
    {
        return view('classrooms.edit', compact('classroom'));
    }

    /**
     * Update the specified classroom in database.
     */
    public function update(Request $request, Classroom $classroom)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:50|unique:classrooms,code,' . $classroom->id,
            'description' => 'nullable|string',
        ]);

        $classroom->update($validated);

        return redirect()->route('classrooms.index')
                        ->with('success', 'Lớp học đã được cập nhật thành công!');
    }

    /**
     * Remove the specified classroom from database.
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('classrooms.index')
                        ->with('success', 'Lớp học đã được xóa thành công!');
    }
}
