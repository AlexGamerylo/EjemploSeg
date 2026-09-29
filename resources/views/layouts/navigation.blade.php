<nav class="bg-white shadow px-8 py-4 flex items-center justify-between">
    <a href="{{ route('dashboard') }}" class="text-xl font-bold text-blue-600">EjemploSeg</a>

    <div class="flex items-center gap-4">
        <span class="text-gray-600 text-sm">{{ Auth::user()->name }}</span>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="text-sm text-red-600 hover:underline">Cerrar sesión</button>
        </form>
    </div>
</nav>
