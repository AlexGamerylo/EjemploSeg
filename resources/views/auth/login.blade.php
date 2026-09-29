<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EjemploSeg - Iniciar sesión</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 font-sans antialiased flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h1 class="text-2xl font-bold mb-6 text-center">Iniciar sesión</h1>

        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium mb-1">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                       class="w-full border rounded px-3 py-2">
                @error('email') <p class="text-red-500 text-sm">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium mb-1">Contraseña</label>
                <input type="password" name="password" id="password" required
                       class="w-full border rounded px-3 py-2">
            </div>

            <label class="flex items-center gap-2 mb-6 text-sm">
                <input type="checkbox" name="remember"> Recordarme
            </label>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                Entrar
            </button>
        </form>

        <p class="text-sm text-center mt-4">
            ¿No tienes cuenta? <a href="/register" class="text-blue-600 hover:underline">Regístrate</a>
        </p>
    </div>
</body>
</html>
