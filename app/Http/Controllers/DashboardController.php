<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductMovement;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function stockBajo(Request $request)
    {
        $umbral = $request->query('umbral', 10);

        $products = Product::where('stock_now', '<=', $umbral)->get();

        return response()->json(['message' => 'Lista de productos enviado con exito,', 'productos' => $products], 200);
    }

    public function resumen()
    {
        $total_productos = Product::count();

        $valor_inventario = Product::selectRaw('SUM(price * stock_now) as total')->value('total');

        $top_productos = ProductMovement::select('product_id')
            ->selectRaw('COUNT(*) as total_movimientos')
            ->groupBy('product_id')
            ->orderByDesc('total_movimientos')
            ->limit(5)
            ->get();

        return response()->json([
            'total_productos' => $total_productos,
            'valor_inventario' => $valor_inventario,
            'top_productos' => $top_productos,
        ], 200);
    }
}
