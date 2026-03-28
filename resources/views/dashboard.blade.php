<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Skill Test Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-zinc-950 min-h-screen flex items-center justify-center p-8">
        <div>
            <p class="text-xs text-zinc-500 mb-6">
                Beckend Skill Test - Gifar Haidar
            </p>
            <div
                class="grid grid-cols-3 gap-px bg-zinc-800 border border-zinc-800 rounded-2xl overflow-hidden"
            >
                <a
                    href="{{ route('string-compression') }}"
                    class="bg-zinc-800 hover:bg-zinc-900 p-6 transition-colors"
                >
                    <p class="text-xs text-zinc-500 mb-4">01</p>
                    <p class="text-white font-semibold mb-1">
                        String Compression
                    </p>
                    <p class="text-xs text-zinc-500 mb-4">
                        Hitung Frekuensi Karakter
                    </p>
                </a>

                <a
                    href="{{ route('sorting-manual') }}"
                    class="bg-zinc-800 hover:bg-zinc-900 p-6 transition-colors"
                >
                    <p class="text-xs text-zinc-500 mb-4">02</p>
                    <p class="text-white font-semibold mb-1">Sorting Manual</p>
                    <p class="text-xs text-zinc-500 mb-4">
                        Bubble Sort Tanpa Fungsi Bawaan
                    </p>
                </a>

                <a
                    href="{{ route('discount-calculator') }}"
                    class="bg-zinc-800 hover:bg-zinc-900 p-6 transition-colors"
                >
                    <p class="text-xs text-zinc-500 mb-4">03</p>
                    <p class="text-white font-semibold mb-1">
                        Kalkulator Diskon
                    </p>
                    <p class="text-xs text-zinc-500 mb-4">
                        Hitung Harga Setelah Diskon
                    </p>
                </a>
            </div>
        </div>
    </body>
</html>
