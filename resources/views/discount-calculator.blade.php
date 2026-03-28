<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3 - Kalkulasi Diskon</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-zinc-950 min-h-screen text-zinc-100 flex flex-col items-center justify-center p-8">

    <div class="w-full max-w-xl">
        <a href="{{ route('dashboard') }}" class="text-sm text-zinc-500 hover:text-white transition-colors">← Kembali</a>

        <div class="mt-6 mb-6">
            <p class="text-xs text-zinc-500 mb-1">03</p>
            <h1 class="text-2xl font-semibold text-white mb-1">Kalkulasi Diskon</h1>
            <p class="text-sm text-zinc-500">Harga akhir berdasarkan tipe & jumlah barang</p>
        </div>

        {{-- Form --}}
        <form method="GET" class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5 mb-4">
            <div class="grid grid-cols-3 gap-3 mb-4">
                <div>
                    <label class="text-xs text-zinc-400 block mb-2">Tipe</label>
                    <select name="type" class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-3 py-2.5 text-sm text-white focus:outline-none focus:border-amber-500">
                        <option value="A" {{ $type === 'A' ? 'selected' : '' }}>Tipe A</option>
                        <option value="B" {{ $type === 'B' ? 'selected' : '' }}>Tipe B</option>
                    </select>
                </div>
                <div>
                    <label class="text-xs text-zinc-400 block mb-2">Qty</label>
                    <input type="number" name="qty" value="{{ $qty }}" min="1"
                        class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-3 py-2.5 text-sm text-white focus:outline-none focus:border-amber-500">
                </div>
                <div>
                    <label class="text-xs text-zinc-400 block mb-2">Hari</label>
                    <select name="day" class="w-full bg-zinc-800 border border-zinc-700 rounded-xl px-3 py-2.5 text-sm text-white focus:outline-none focus:border-amber-500">
                        @foreach(['Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu'] as $i => $nama)
                            <option value="{{ $i }}" {{ $day == $i ? 'selected' : '' }}>{{ $nama }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="bg-amber-600 hover:bg-amber-500 text-white text-sm font-medium px-5 py-2.5 rounded-xl transition-colors">
                Hitung
            </button>
        </form>

        {{-- Result --}}
        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl p-5 space-y-3 text-sm">
            <div class="flex justify-between text-zinc-400">
                <span>Subtotal</span>
                <span>Rp {{ number_format($subtotal, 0, ',', '.') }}</span>
            </div>
            <div class="flex justify-between text-emerald-400">
                <span>Diskon</span>
                <span>{{ $disc * 100 }}%</span>
            </div>
            <div class="flex justify-between font-semibold text-base border-t border-zinc-800 pt-3">
                <span class="text-white">Total</span>
                <span class="text-amber-400">Rp {{ number_format($final, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>

</body>
</html>