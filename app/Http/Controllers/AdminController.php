<?php

namespace App\Http\Controllers;

use App\Models\HomepageSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function index(): View
    {
        return view('admin.index');
    }

    public function editHomepage(): View
    {
        return view('admin.homepage-edit', [
            'homepage' => HomepageSetting::homepageContent(),
            'fields' => HomepageSetting::defaults(),
        ]);
    }

    public function updateHomepage(Request $request): RedirectResponse
    {
        $rules = collect(HomepageSetting::defaults())
            ->mapWithKeys(fn (string $value, string $key): array => [$key => ['nullable', 'string', 'max:1000']])
            ->all();

        $validated = $request->validate($rules);

        foreach (HomepageSetting::defaults() as $key => $defaultValue) {
            HomepageSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $validated[$key] ?? $defaultValue],
            );
        }

        return redirect()
            ->route('admin.homepage.edit')
            ->with('status', 'Homepage content updated successfully.');
    }
}
