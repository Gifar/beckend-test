<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Sorting Manual</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body
        class="bg-zinc-950 min-h-screen text-zinc-100 flex flex-col items-center justify-center p-8"
    >
        <div class="w-full max-w-xl">
            <a
                href="{{ route('dashboard') }}"
                class="text-sm text-zinc-500 hover:text-white transition-colors"
            >
                <- Kembali
            </a>

            <div class="mt-6 mb-6">
                <p class="text-xs text-zinc-500 mb-1">02</p>
                <h1 class="text-2xl font-semibold text-white mb-1">
                    Sorting Manual
                </h1>
                <p class="text-sm text-zinc-500">Urutkan Array secara Manual</p>
            </div>

            {{-- Form --}}
            <form
                method="post"
                class="bg-zinc-900 border-zinc-800 rounded-2xl p-5 mb-4"
            >
                @csrf

                <label
                    for="input-string"
                    class="text-xs text-zinc-400 block mb-2"
                >
                    Masukkan Array (dipisah dengan koma)
                </label>
                <input
                    type="text"
                    value="{{ $input }}"
                    name="text"
                    class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-l-violet-500 mb-4"
                    placeholder="9,3,7,8,2,6,1,4,10,2,2,3"
                />

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-500 text-white text-sm font-medium px-5 py-2.5 rounded-xl transition-colors"
                >
                    Sort
                </button>
            </form>

            {{-- Result --}}
            <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5">
                <p class="text-xs text-zinc-500 mb-3">Hasil</p>
                <div class="flex items-center gap-3 font-mono text-sm">
                    <span
                        class="bg-zinc-800 px-3 py-2 rounded-lg text-zinc-300"
                    >
                        [{{ implode(", ", $ori) }}]
                    </span>
                    <span class="text-zinc-600">-></span>
                    <span
                        class="bg-emerald-500/10 ring-1 ring-emerald-500/20 px-3 py-2 rounded-lg text-emerald-400 font-medium"
                    >
                        [{{ implode(", ", $arr) }}]
                    </span>
                </div>
            </div>
        </div>
    </body>
</html>
