<?php
namespace App\Http\Controllers;

use App\Models\LoaiNuocHoa;

class ProductController extends Controller
{
    public function index($code)
{
    // Load all perfume types
    $loaiNuocHoas = LoaiNuocHoa::all();
    $loaiNuocHoa = LoaiNuocHoa::where('code', $code)->firstOrFail();

    // Get all perfumes associated with this type
    $nuocHoas = $loaiNuocHoa->nuocHoas;

    // Pass the data to the view
    return view('products.index', compact('nuocHoas', 'loaiNuocHoa'));
}

}