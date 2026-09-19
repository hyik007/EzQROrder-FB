<!DOCTYPE html>
<html><head><title>POS Setup</title><script src="https://cdn.tailwindcss.com"></script></head>
<body class="bg-gray-100 p-8">
    <div class="max-w-md mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">1-Click POS Setup</h2>
        @if(session('success'))<div class="bg-green-100 text-green-700 p-2 mb-4 rounded">{{ session('success') }}</div>@endif
        <form method="POST" action="/setup">
            @csrf
            <div class="mb-4"><label class="block text-sm font-semibold mb-1">Restaurant Name</label><input type="text" name="restaurant_name" value="{{ $restaurantName }}" class="w-full border p-2 rounded" required></div>
            <div class="mb-4"><label class="block text-sm font-semibold mb-1">Gemini API Key</label><input type="text" name="gemini_api_key" value="{{ $apiKey }}" class="w-full border p-2 rounded" required></div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Save Settings</button>
        </form>
    </div>
</body></html>
