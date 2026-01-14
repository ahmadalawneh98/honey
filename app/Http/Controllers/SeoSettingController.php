<?php

namespace App\Http\Controllers;

use App\Models\SeoSetting;
use Illuminate\Http\Request;

class SeoSettingController extends Controller
{
    //
    public function edit()
    {
        $seo = SeoSetting::first();
        return view('profile.seo.edit', compact('seo'));
    }

    public function update(Request $request)
    {
        SeoSetting::updateOrCreate(
            ['id' => 1],
            ['meta' => $request->meta]
        );

        return back()->with('success', 'تم حفظ إعدادات SEO');
    }
}
