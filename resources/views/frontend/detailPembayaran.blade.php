<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/detailPembayaran.css">

    <title>Document</title>
</head>
<body>
    <h1>Detail Pembayaran</h1>
    <p> </p>
    <div class="image">
        <a href="export-pembayaran"><img class="imgprnt" src="/images/printer.png" alt=""></a>
        <img class="imgcmplt" src="/images/complate2.png" alt="">
        
        
    </div>
   <div class="detail">
    <table  >
        <tr aria-rowspan="">

                <th>Produk</th>
                <td>{{ $pembayaran->product }}</td>
            </tr>
            <tr>
                <th>Tanggal dan Waktu</th>
                <td>{{ $pembayaran->datetime }}</td>
            </tr>
            <tr>
                <th>Kode Pembayaran</th>
                <td>{{ $pembayaran->payment_code }}</td>
            </tr>
            <tr>
                <th>Jumlah Transfer</th>
                <td class="jumlahtf"><b>Rp {{ $pembayaran->amount }}</b></td>
            </tr>
            <tr>
                <th>Tujuan Transaksi</th>
                <td>{{ $pembayaran->transaction_target }}</td>
            </tr>
            <tr>
                <th>Metode Pembayaran</th>
                <td>{{ $pembayaran->payment_method }}</td>
        </tr>
        
    </table>
    <a href="/perlengkapan">
    <button class="btn">Back Home</button>
    </a>
</div>
</body>
</html>