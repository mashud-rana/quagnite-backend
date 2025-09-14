<?php

namespace App\Http\Controllers\Admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Services\Utils\FileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    private $disk;

    public function __construct(protected FileService $fileService)
    {
        $this->middleware('permission:All Settings|Update Settings', ['only' => ['index', 'cache']]);
        $this->middleware('permission:Update Settings', ['only' => ['updateSettings', 'cacheUpdate']]);

        $this->disk = config('settings.storage_driver');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        set_page_meta('Settings');

        return view('admin.settings.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function updateSettings(Request $request)
    {
        $settings = $request->except('_token');

        foreach ($settings as $key => $setting) {
            // Setting::updateOrCreate(
            //     [
            //         'setting_key' => $key,
            //     ],
            //     [
            //         'setting_value' => $setting,
            //     ]
            // );

            $this->settingsUpdateOrCreate($key, $setting);
        }
        Cache::forget('global_settings');
        record_updated_flash();

        return back();
    }

    public function updateSettingsImage(Request $request)
    {
        $request->validate([
            'site_logo' => 'nullable|image|max:20000',
            'favicon_logo' => 'nullable|image|max:20000',
            'footer_logo' => 'nullable|image|max:20000',
            'login_image' => 'nullable|image|max:20000',
            'data_notfound' => 'nullable|image|max:20000',
        ]);

        if ($request->hasFile('site_logo')) {
            $key = 'site_logo';
        }

        if ($request->hasFile('favicon_logo')) {
            $key = 'favicon_logo';
        }

        if ($request->hasFile('footer_logo')) {
            $key = 'footer_logo';
        }

        if ($request->hasFile('login_image')) {
            $key = 'login_image';
        }

        if ($request->hasFile('data_notfound')) {
            $key = 'data_notfound';
        }

        if (isset($key)) {

            if ($prevFile = config('settings.'.$key)) {
                $this->fileService->delete($prevFile);
            }

            $path = $this->fileService->upload($request->file($key), 'settings/images');

            $this->settingsUpdateOrCreate($key, $path);

            Cache::forget('global_settings');

            $url = Storage::disk($this->disk)->url($path);

            return response()->json([
                'url' => $url,
                'path' => $path,
            ]);
        } else {
            return response()->json(['success' => false], 404);
        }
    }

    public function cache()
    {
        set_page_meta('Cache Settings');

        return view('admin.settings.cache');
    }

    public function cacheUpdate($id)
    {
        if ($id == 1) {
            Artisan::call('view:clear');
            record_updated_flash('Views cache cleared successfully.');

            return redirect()->back();
        } elseif ($id == 2) {
            Artisan::call('route:clear');
            record_updated_flash('Route cache cleared successfully.');

            return redirect()->back();
        } elseif ($id == 3) {
            Artisan::call('config:clear');
            record_updated_flash('Configuration cache cleared successfully.');

            return redirect()->back();
        } elseif ($id == 4) {
            Artisan::call('cache:clear');
            record_updated_flash('Application cache cleared successfully.');

            return redirect()->back();
        }

        return redirect()->back();
    }

    public function settingsUpdateOrCreate($key, $setting)
    {
        Setting::updateOrCreate(
            [
                'setting_key' => $key,
            ],
            [
                'setting_value' => $setting,
            ]
        );
    }
}
