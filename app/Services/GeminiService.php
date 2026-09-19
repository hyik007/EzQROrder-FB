<?php
namespace App\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
class GeminiService {
    public function generate(string $prompt): string {
        $apiKey = DB::table('settings')->where('key', 'gemini_api_key')->value('value') ?? env('GEMINI_API_KEY');
        if (!$apiKey) return 'AI API Key not configured. Please visit /setup.';
        $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent?key={$apiKey}";
        $response = Http::post($url, ['contents' => [['parts' => [['text' => $prompt]]]]]);
        if ($response->successful()) return $response->json('candidates.0.content.parts.0.text') ?? 'No response content.';
        return 'Error communicating with Gemini: ' . $response->body();
    }
}
