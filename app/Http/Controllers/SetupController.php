<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SetupController extends Controller {
    public function show() {
        $restaurantName = DB::table('settings')->where('key', 'restaurant_name')->value('value') ?? 'My Cafe';
        $apiKey = DB::table('settings')->where('key', 'gemini_api_key')->value('value') ?? '';
        return view('setup', compact('restaurantName', 'apiKey'));
    }
    public function store(Request $request) {
        DB::table('settings')->updateOrInsert(['key' => 'restaurant_name'], ['value' => $request->restaurant_name, 'updated_at' => now(), 'created_at' => now()]);
        DB::table('settings')->updateOrInsert(['key' => 'gemini_api_key'], ['value' => $request->gemini_api_key, 'updated_at' => now(), 'created_at' => now()]);
        return back()->with('success', 'Settings saved! Zero-config AI ready.');
    }
}
