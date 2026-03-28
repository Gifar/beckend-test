<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillTestController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function compressionString(Request $request)
    {
        $input = $request->input('text', 'aaabbcccddeddbzaa');
        $freq = array_count_values(str_split($input));

        $result = collect($freq)
            ->map(fn($count, $char) => $count > 1 ? $char . $count : $char)
            ->implode('');

        return view('string-compression', compact('input', 'result'));
    }

    public function sortingManual(Request $request)
    {
        $input = $request->input('numbers', '9,3,7,8,2,6,1,4,10,2,2,3');
        $arr = array_map('intval', explode(',',  $input));
        $ori = $arr;
        $n = count($arr);

        for ($i = 0; $i < $n - 1; $i++)
            for ($j = 0; $j < $n - $i - 1; $j++)
                if ($arr[$j] > $arr[$j + 1])
                    [$arr[$j], $arr[$j + 1]]  = [$arr[$j + 1], $arr[$j]];
        return view('sorting-manual', compact('input', 'ori', 'arr'));
    }

    public function discountCalculator(Request $request)
    {
        $type = strtoupper($request->input('type', 'A'));
        $qty = (int) $request->input('qty', 10);
        $day = (int) $request->input('day', now()->dayOfWeek());

        $price = $type === 'A' ? 99900 : 49900;
        $subtotal = $price * $qty;
        $disc = 0;

        if ($type === 'A') {
            if ($qty > 50) $disc += 0.05;
            if ($day == 1 || $day == 4) $disc += 0.10;
        } else {
            if ($qty > 100) $disc += 0.10;
            if ($day == 5) $disc += 0.05;
        }
        $final = $subtotal * (1 - $disc);

        return view('discount-calculator', compact('type', 'qty', 'day', 'subtotal', 'disc', 'final'));
    }
}
