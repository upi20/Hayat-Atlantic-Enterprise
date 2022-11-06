<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" href="{{ public_path('favicon/favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ public_path('favicon/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ public_path('favicon/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ public_path('favicon/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ public_path('favicon/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ public_path('favicon/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ public_path('favicon/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ public_path('favicon/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ public_path('favicon/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ public_path('favicon/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ public_path('favicon/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ public_path('favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ public_path('favicon/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ public_path('favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ public_path('favicon/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="theme-color" content="#0191D7">
    <meta name="msapplication-TileImage" content="{{ public_path('favicon/icon-144x144.png') }}">
    <title>Laporan Ganti Rugi Barang</title>
    @include('templates.admin.pdf_style')
</head>

<body>
    <table>
        <tr>
            <td>
                <img src="{{ public_path(settings()->get(set_admin('app.foto_light_mode'))) }}" alt=""
                    style="height: 30mm;">
            </td>
            <td>
                <h2 class="p-title">CV. HAYAT ATLANTIC ENTERPRISE</h2>
                <p class="p-title">Jl. Lodaya No.27, Malabar, Kec. Lengkong, Kota Bandung, Jawa Barat 40262</p>
                <p class="p-title">Telp:
                    <a href="tel:0227303759">0227303759</a> –
                    <a href="tel:0227900502">0227900502</a> /
                    WA: <a href="https://wa.me/081214886315">081214886315</a> –
                    <a href="https://wa.me/081214939435">081214939435</a>
                </p>
                <p class="p-title">Website: <a href="http://hayatpesta.com">hayatpesta.com</a>
                    / Email: <a href="mailto:INFO@HAYATPESTA.COM">info@hayatpesta.com</a></p>
            </td>
        </tr>
    </table>
    <hr class="garis">
    <h2 class="text-center">Laporan Ganti Rugi Barang</h2>
    <h4 class="text-center">Periode: {{ $dari_tanggal }} s/d {{ $sampai_tanggal }}
        {{ $search ? "Dengan Kata Kunci: \"$search\"" : '' }}</h4>

    @foreach ($ganti_rugis as $ganti_rugi)
        <table>
            <tr>
                <td>Penyewaan</td>
                <td>:</td>
                <td>{{ $ganti_rugi->penyewaan_number }}</td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
                <td>{{ $ganti_rugi->keterangan }}</td>
            </tr>
        </table>

        @if (!$ganti_rugi->uangs->isEmpty())
            <br>
            <b style="margin-left: 4px">Ganti Rugi Uang</b>
            <table class="tbl-10 w-100">
                <thead>
                    <tr>
                        <th class="b-all">No</th>
                        <th class="b-all">Faktur</th>
                        <th class="b-all">Oleh</th>
                        <th class="b-all">Keterangan</th>
                        <th class="b-all">Tanggal</th>
                        <th class="b-all">Nominal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ganti_rugi->uangs as $key => $uang)
                        <tr>
                            <td class="b-all"style="text-align: center">{{ $key + 1 }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $uang->no_surat }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $uang->oleh }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $uang->nama }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $uang->tanggal_str }}</td>
                            <td class="text-right b-all" style="padding: 8px 10px!important">
                                Rp {{ format_rupiah($uang->nominal) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        @if (!$ganti_rugi->barangs->isEmpty())
            <br>
            <b style="margin-left: 4px">Ganti Rugi Barang</b>
            <table class="tbl-10 w-100">
                <thead>
                    <tr>
                        <th class="b-all">No</th>
                        <th class="b-all">Faktur</th>
                        <th class="b-all">Oleh</th>
                        <th class="b-all">Tanggal</th>
                        <th class="b-all">Kode</th>
                        <th class="b-all">Barang</th>
                        <th class="b-all">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ganti_rugi->barangs as $key => $barang)
                        <tr>
                            <td class="b-all"style="text-align: center">{{ $key + 1 }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $barang->no_surat }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $barang->oleh }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $barang->tanggal_str }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $barang->kode }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">{{ $barang->barang }}</td>
                            <td class="b-all"style="padding: 8px 10px!important">
                                {{ $barang->qty . ' ' . $barang->satuan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        <br>
        <br>
        <br>
        {{-- <div class="breakNow"></div> --}}
    @endforeach
</body>

</html>
