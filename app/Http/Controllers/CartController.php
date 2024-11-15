<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NuocHoa;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('id');
        $quantity = $request->input('quantity', 1);

        // Kiểm tra sản phẩm có tồn tại
        $product = NuocHoa::find($productId);

        if (!$product) {
            return response()->json(['message' => 'Sản phẩm không tồn tại'], 404);
        }

        // Lấy giỏ hàng hiện tại hoặc khởi tạo mới
        $cart = Session::get('cart', []);

        // Thêm sản phẩm vào giỏ hàng hoặc cập nhật số lượng
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => $quantity,
                'image' => $product->images,
            ];
        }

        // Lưu giỏ hàng vào session
        Session::put('cart', $cart);

        return response()->json(['message' => 'Sản phẩm đã được thêm vào giỏ hàng thành công']);
    }
    public function showCart()
{
    $cart = Session::get('cart', []); // Lấy giỏ hàng từ session, nếu không có thì trả về mảng rỗng
    return view('cart.show', compact('cart')); // Truyền giỏ hàng đến view
}
public function cartCount()
{
    $cart = Session::get('cart', []);
    $totalQuantity = array_sum(array_column($cart, 'quantity'));
    $totalItems = count($cart);

    return response()->json([
        'totalQuantity' => $totalQuantity,
        'totalItems' => $totalItems,
    ]);
}



public function clearCart()
{
    Session::forget('cart');
    return redirect()->back()->with('message', 'Cart cleared successfully.');
}
public function updateCart(Request $request)
{
    $cart = Session::get('cart', []);
    $quantities = $request->input('quantities', []);
    
    foreach ($quantities as $id => $quantity) {
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = max(1, intval($quantity));
        }
    }

    Session::put('cart', $cart);

    return redirect()->route('cart.show')->with('message', 'Cart updated successfully.');
}
public function removeFromCart($id)
{
    $cart = Session::get('cart', []);
    if (isset($cart[$id])) {
        unset($cart[$id]);
        Session::put('cart', $cart);
    }
    return redirect()->back()->with('message', 'Product removed from cart.');
}



}
