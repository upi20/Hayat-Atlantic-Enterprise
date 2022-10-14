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
    <title>Invoice</title>
    @include('templates.admin.pdf_style')
</head>


<body>
    <table style="width: 100%" class="tbl-2">
        <tr>
            <td style="width: 33%; padding: 2px 2px; ">
                <h3 class="p-title">CV. Hayat Atlantic Enterprise</h3>
                <span>Jalan Lodaya No. 27</span><br>
                <span>Bandung, Jawa Barat</span>
            </td>
            <td style="width: 33%; padding: 2px 2px;  vertical-align: middle; text-align: center">
                <h1 style="margin: 0; font-size: 2.5em">INVOICE</h1>
                <span>Nomor : {{$faktur->no}}</span>
            </td>
            <td style="width: 33%; padding: 2px 2px; ">
                <table class="tbl-2">
                    <tr>
                        <td>Surat Jalan </td>
                        <td>:</td>
                        <td>{{ $penyewaan->no_surat_jalan }}</td>
                    </tr>
                    <tr>
                        <td>Pemesanan </td>
                        <td>:</td>
                        <td>{{$penyewaan->no}}</td>
                    </tr>
                    <tr>
                        <td>Penawaran </td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr style="font-weight: bold">
                        <td>Referensi </td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="width: 100%" class="tbl-2">
        <tr>
            <td style="width: 50%">
                <table class="tbl-2">
                    <tr>
                        <td>No. Telepon </td>
                        <td>:</td>
                        <td>{{$penyewaan->customer_no_telepon}}</td>
                    </tr>
                    <tr>
                        <td>Tanggal </td>
                        <td>:</td>
                        <td>{{$faktur->tanggal_str}}</td>
                    </tr>
                </table>
            </td>
            <td style="width: 50%">
                <table>
                    <tr>
                        <td>Pelanggan</td>
                        <td>:</td>
                        <td>{{$penyewaan->customer_nama}}</td>
                    </tr>
                    <tr>
                        {{-- alamat --}}
                        <td></td>
                        <td></td>
                        <td>{{$penyewaan->customer_alamat}}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <table style="width: 100%; border-collapse:collapse" class="my-table">
        <thead>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Qty</th>
            <th>Harga</th>
            <th>Total Harga</th>
        </thead>
        <tbody>
            @foreach ($barangs as $key => $barang)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $barang->barang_nama }}</td>
                    <td>{{ $barang->keterangan }}</td>
                    <td class="text-right">{{ $barang->qty }}</td>
                    <td class="text-right format_rupiah">Rp {{ format_rupiah($barang->harga) }}</td>
                    <td class="text-right format_rupiah">Rp {{ format_rupiah($barang->harga_total) }}</td>
                </tr>
            @endforeach
            <tr>
                <td colspan="5" class="text-right no-border">Total:</td>
                <td class="no-border text-right format_rupiah">Rp {{ format_rupiah($faktur->total) }}</td>
            </tr>
            <tr>
                <td colspan="5" class="text-right no-border" style="font-weight: bold;">
                    {{ $model->nama }}:</td>
                <td class="no-border text-right format_rupiah" style="font-weight: bold;">Rp
                    {{ format_rupiah($faktur->jumlah) }}</td>
            </tr>
            @if ($faktur->pembayaran_sebelumnya > 0)
                <tr>
                    <td colspan="5" class="text-right no-border">Pembayaran Sebelumnya:</td>
                    <td class="no-border text-right format_rupiah">Rp
                        {{ format_rupiah($faktur->pembayaran_sebelumnya) }}
                    </td>
                </tr>
            @endif
            <tr>
                <td colspan="5" class="text-right no-border">Sisa:</td>
                <td class="no-border text-right format_rupiah">Rp {{ format_rupiah($faktur->sisa) }}</td>
            </tr>
        </tbody>
    </table>

    <table class="my-table" style="width: 15cm; border-collapse:collapse">
        <tr>
            <td>Terbilang: <i><small>{{ terbilang($faktur->jumlah) }} Rupiah</small></i></td>
        </tr>
    </table>

    <br>
    <p>Hormat Kami</p>
    <br><br>
    <p>Hayat Pesta</p>


</body>

</html>
