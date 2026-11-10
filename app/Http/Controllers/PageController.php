<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //Data jadwal

        private function jadwal(): array
    {
        return [
            ['hari' => 'Senin', 'jam' => '16.00', 'latihan' => 'Push Up & Sit Up (4 set x 15)', 'durasi' => 45, 'status' => 'Terjadwal'],
            ['hari' => 'Selasa', 'jam' => '06.00', 'latihan' => 'Lari Pagi 5 km', 'durasi' => 35, 'status' => 'Terjadwal'],
            ['hari' => 'Rabu', 'jam' => '-', 'latihan' => 'Istirahat Total', 'durasi' => 0, 'status' => 'Istirahat'],
            ['hari' => 'Kamis', 'jam' => '16.00', 'latihan' => 'Push Up, Sit Up, Plank', 'durasi' => 50, 'status' => 'Terjadwal'],
            ['hari' => 'Jumat', 'jam' => '16.30', 'latihan' => 'Push Up, Sit Up, Plank', 'durasi' => 50, 'status' => 'Terjadwal'],
            ['hari' => 'Sabtu', 'jam' => '06.30', 'latihan' => 'Lari Santai 3 km', 'durasi' => 30, 'status' => 'Terjadwal'],
            ['hari' => 'Minggu', 'jam' => '08.00', 'latihan' => 'Renang 20 Putaran', 'durasi' => 45, 'status' => 'Terjadwal'],
        ];
    }


    private function ambilUsername(Request $request): ?string
    {
        $username = trim((string) $request->query('username', ''));

        return $username === '' ? null : $username;
    }

    public function login()
    {
        return view('login');
    }

    //login
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|string|min:3|max:20',
        ], [
            'username.required' => 'Username wajib diisi.',
            'username.min' => 'Username minimal 3 karakter.',
        ]);

        return redirect()->route('dashboard', ['username' => $request->input('username')]);
    }

    //Dashboard
    public function dashboard(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (!$username) {
            return redirect()->route('login');
        }

        $jadwal = $this->jadwal();

        $hariIni = ucfirst(Carbon::now()->locale('id')->isoFormat('dddd'));
        $jadwalHariIni = collect($jadwal)->firstWhere('hari', $hariIni);

        $ringkasan = [
            'total_sesi' => collect($jadwal)->where('status', 'Terjadwal')->count(),
            'total_menit' => collect($jadwal)->sum('durasi'),
            'hari_rest' => collect($jadwal)->where('status', 'Istirahat')->count(),
        ];

        return view('dashboard', [
            'username' => $username,
            'hariIni' => $hariIni,
            'jadwalHariIni' => $jadwalHariIni,
            'ringkasan' => $ringkasan,
        ]);
    }

    //Pengelolaan
    public function pengelolaan(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (!$username) {
            return redirect()->route('login');
        }

        return view('pengelolaan', [
            'username' => $username,
            'jadwal' => $this->jadwal(),
        ]);
    }

    //Profile
    public function profile(Request $request)
    {
        $username = $this->ambilUsername($request);
        if (!$username) {
            return redirect()->route('login');
        }

        $profil = [
            'target' => 'Menambah massa otot & stamina',
            'berat' => '65 kg',
            'tinggi' => '170 cm',
        ];

        return view('profile', [
            'username' => $username,
            'profil' => $profil,
        ]);
    }
}
