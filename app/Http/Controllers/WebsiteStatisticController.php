<?php

namespace App\Http\Controllers;

use App\Models\WebsiteStatistic;
use Illuminate\Http\Request;

class WebsiteStatisticController extends Controller
{
    // Fungsi untuk menambah view
    public function addView()
    {
        // Ambil data statistik pertama, atau buat jika tidak ada
        $statistic = WebsiteStatistic::first();

        if (!$statistic) {
            // Jika tidak ada data, buat data baru
            $statistic = WebsiteStatistic::create(['views' => 1, 'button_clicks' => 0]);
        } else {
            // Tambahkan jumlah views
            $statistic->increment('views');
        }

        // Kirim variabel $statistic ke view
        return view('welcome', compact('statistic'));
    }

    // Fungsi untuk menambah klik tombol
    public function addButtonClick()
    {
        $statistic = WebsiteStatistic::first();

        if ($statistic) {
            $statistic->increment('button_clicks');
        } else {
            $statistic = WebsiteStatistic::create(['views' => 0, 'button_clicks' => 1]);
        }

        return redirect()->back();
    }
    
}

