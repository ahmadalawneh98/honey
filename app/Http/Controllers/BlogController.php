<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // عرض كل المدونات
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    // صفحة إنشاء مدونة جديدة
    public function create()
    {
        return view('blogs.create');
    }

    // تخزين المدونة الجديدة
    public function store(Request $request)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
            'name_es' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_es' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|in:new,blog',
        ]);

        $data = $request->all();

        // حفظ الصورة
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        Blog::create($data);

        return redirect()->route('blogs.index')->with('success', 'تم إنشاء المدونة بنجاح');
    }

    // صفحة تعديل المدونة
    public function edit(Blog $blog)
    {
        return view('blogs.edit', compact('blog'));
    }

    // تحديث المدونة
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'name_ar' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'name_fr' => 'required|string|max:255',
            'name_es' => 'required|string|max:255',
            'description_ar' => 'required|string',
            'description_en' => 'required|string',
            'description_fr' => 'required|string',
            'description_es' => 'required|string',
            'image' => 'nullable|image',
            'status' => 'required|in:new,blog',
        ]);

        $data = $request->all();

        // تحديث الصورة إذا تم رفع صورة جديدة
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $data['image'] = $imageName;
        }

        $blog->update($data);

        return redirect()->route('blogs.index')->with('success', 'تم تعديل المدونة بنجاح');
    }

    // حذف المدونة
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'تم حذف المدونة');
    }
}
