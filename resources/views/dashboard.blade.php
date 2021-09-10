<h1>ini dashboard</h1>
<h1>{{auth()->user()->email}}, {{auth()->user()->roles->first()->name}}</h1>


@can('Dashboard', Model::class)
    'Dashboard', <br>
    'Dashboard Dashboard Utama',<br>
    'Dashboard Peta',<br>
    'Dashboard Polling Engine',<br>
    'Dashboard Restitusi',<br>
    'Dashboard SLA',<br>
    'Dashboard BA SITE',<br>
@endcan

@can('Aktifitas', Model::class)
    'Aktifitas',<br>
    'Aktifitas Referensi Site',<br>
    'Aktifitas Aktifitas Pengguna',<br>
    'Verifikasi',<br>
    'Verifikasi Klarifikasi',<br>
    'Verifikasi Validasi',<br>
@endcan

    'Laporan',<br>
    'Laporan Restitusi',<br>
    'Pengaturan',<br>
    'Pengaturan Pengguna',<br>
    'Pengaturan Konfigurasi',<br>
    'Pengaturan Master Site',<br>
    'Pengaturan Perangkat',<br>
    'Pengaturan Kalender',<br>
    'Pengaturan Polling Engine Server',<br>
    'Pengaturan Mitra',<br>
    'Pengaturan Harga',<br>
    'Pengaturan Closing SLA & BA',<br>
    'Pengaturan Referensi Klarifikasi',<br>


    <form action="{{ route('core.logout') }}" method="POST" style="display: inline-block; width: 100%">
        @csrf
        <button class="dropdown-item notify-item text-danger">
        <i class="fe-log-out"></i>
        <span>Logout</span>
        </button>
    </form>
