<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductMovement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductMovementController extends Controller
{
    //

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|in:entrada,salida',
            'amount' => 'required|integer|min:1',
            'reason' => 'nullable|string',
        ]);

        try {
            $result = DB::transaction(function () use ($validated, $request) {
                $product = Product::findOrFail($validated['product_id']);

                if ($validated['type'] === 'salida') {
                    if ($product->stock_now < $validated['amount']) {
                        throw new \Exception('No existe stock suficiente para la operación.');
                    }
                    $product->stock_now -= $validated['amount'];
                } else {
                    $product->stock_now += $validated['amount'];
                }

                $product->save();

                return ProductMovement::create([
                    ...$validated,
                    'user_id' => $request->user()->id,
                ]);
            });

            return response()->json([
                'product_movement' => $result,
                'message' => 'Movimiento registrado con éxito.',
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
            ], 422);
        }
    }
    
    public function index(Request $request){
        if ($request->product_id) {
            $movements = ProductMovement::where('product_id', $request->product_id)->get();

        } else {
            $movements = ProductMovement::all();
        }
        return $movements;
    }

    
}
