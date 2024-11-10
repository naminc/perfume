<?php
namespace App\Http\Controllers;

use App\Models\LoaiNuocHoa;

class ProductController extends Controller
{
    public function index()
{
    // Load all perfume types
    $loaiNuocHoas = LoaiNuocHoa::all();

    // Pass the data to the view
    return view('products.loai', compact('loaiNuocHoas'));
}

}
