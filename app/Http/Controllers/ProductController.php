<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->get();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title_ar'    => 'required',
            'images'      => 'nullable|array',
            'images.*'    => 'image|mimes:jpg,jpeg,png,webp',
        ]);

        $data = $request->except('images');

        // حفظ الصور المتعددة
        if ($request->hasFile('images')) {
            $images = [];

            foreach ($request->file('images') as $image) {
                $images[] = $image->store('products', 'public');
            }

            $data['images'] = $images; // Array يتخزن JSON تلقائيًا
        }

        Product::create($data);

        return redirect()->route('products.index')
            ->with('success', 'تم إضافة المنتج');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        $product->images = $product->images ?? [];

        return view('products.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'title_ar'    => 'required',
            'images'      => 'nullable|array',
            'images.*'    => 'image|mimes:jpg,jpeg,png,webp',

            // صور سيتم حذفها
            'remove_images'   => 'nullable|array',
            'remove_images.*' => 'string',

            // الأحجام
            'sizes' => 'nullable|array',
            'sizes.*' => 'nullable|string',
        ]);

        $data = $request->except('images', 'remove_images');

        // فلترة الأحجام لإزالة الفارغة
        if (isset($request->sizes)) {
            $data['sizes'] = array_values(array_filter($request->sizes, fn($size) => trim($size) !== ''));
        }

        // الصور الحالية
        $currentImages = $product->images ?? [];

        /* =======================
       حذف الصور المختارة
    ======================= */
        if ($request->filled('remove_images')) {
            foreach ($request->remove_images as $img) {
                if (in_array($img, $currentImages)) {
                    Storage::disk('public')->delete($img);
                    $currentImages = array_values(array_diff($currentImages, [$img]));
                }
            }
        }

        /* =======================
       إضافة صور جديدة
    ======================= */
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $currentImages[] = $image->store('products', 'public');
            }
        }

        // تحديث الصور
        $data['images'] = $currentImages;

        $product->update($data);

        return redirect()->route('products.index')
            ->with('success', 'تم تحديث المنتج');
    }

    public function destroy(Product $product)
    {
        if ($product->image && \Storage::disk('public')->exists($product->image)) {
            \Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'تم حذف المنتج');
    }
}
