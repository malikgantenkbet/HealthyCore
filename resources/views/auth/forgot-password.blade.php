<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
</head>
<body class="bg-yellow-100">
    <div class="flex h-screen items-center justify-center">
        <div class="bg-white p-8 rounded shadow-md w-96">
            <h2 class="text-2xl font-semibold mb-6">{{ $title }}</h2>
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <form action="{{ route('password.email') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                    <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-yellow-500" placeholder="Your email address" required autofocus>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-700">Send Password Reset Link</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
