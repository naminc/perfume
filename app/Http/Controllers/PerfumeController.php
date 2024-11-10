<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NuocHoa;
use App\Models\LoaiNuocHoa;

class NuocHoaController extends Controller
{
    // Phương thức hiển thị danh sách nước hoa
    public function index()
    {
        $nuocHoas = NuocHoa::with('loaiNuocHoa')->get(); // Lấy tất cả nước hoa cùng loại nước hoa
        return view('nuochoa.index', compact('nuocHoas')); // Trả về view danh sách nước hoa
    }

    // Phương thức hiển thị form tạo nước hoa mới
    public function create()
    {
        $loaiNuocHoas = LoaiNuocHoa::all(); // Lấy tất cả các loại nước hoa để hiển thị trong form
        return view('nuochoa.create', compact('loaiNuocHoas')); // Trả về view form tạo nước hoa mới
    }

    // Phương thức lưu trữ nước hoa mới
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'id_type' => 'required|exists:loainuochoas,id',
        ]);

        NuocHoa::create($request->all()); // Lưu trữ nước hoa mới

        return redirect()->route('nuochoa.index')->with('success', 'Nước hoa đã được thêm thành công.');
    }

    // Phương thức hiển thị chi tiết một nước hoa
    public function show($id)
    {
        $nuocHoa = NuocHoa::with('loaiNuocHoa')->findOrFail($id); // Lấy nước hoa theo ID
        return view('nuochoa.show', compact('nuocHoa')); // Trả về view chi tiết nước hoa
    }

    // Phương thức hiển thị form chỉnh sửa nước hoa
    public function edit($id)
    {
        $nuocHoa = NuocHoa::findOrFail($id); // Lấy nước hoa theo ID
        $loaiNuocHoas = LoaiNuocHoa::all(); // Lấy danh sách loại nước hoa để hiển thị
        return view('nuochoa.edit', compact('nuocHoa', 'loaiNuocHoas')); // Trả về view chỉnh sửa nước hoa
    }

    // Phương thức cập nhật thông tin nước hoa
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric|min:0',
            'id_type' => 'required|exists:loainuochoas,id',
        ]);

        $nuocHoa = NuocHoa::findOrFail($id); // Lấy nước hoa theo ID
        $nuocHoa->update($request->all()); // Cập nhật nước hoa

        return redirect()->route('nuochoa.index')->with('success', 'Nước hoa đã được cập nhật thành công.');
    }

    // Phương thức xóa nước hoa
    public function destroy($id)
    {
        $nuocHoa = NuocHoa::findOrFail($id); // Lấy nước hoa theo ID
        $nuocHoa->delete(); // Xóa nước hoa

        return redirect()->route('nuochoa.index')->with('success', 'Nước hoa đã được xóa thành công.');
    }
}
