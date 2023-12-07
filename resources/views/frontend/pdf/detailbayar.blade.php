<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>body {
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: Arial, Helvetica, sans-serif;
        
    }
    
    .detail {
        width: 50%;
        text-align: left;
    }
    
    h1 {
        text-align: left;
        margin-top: 60px;
    }
    
    p {
        margin-bottom: 50px;
        margin-top: -10px;
    }
    
    table {
        width: 100%;
        border-collapse: collapse;
        background-color: #ffffff;
        /* border-radius: 10px; */
        margin-right: 20px;
    }
    
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ffffff;
    }
    
    img {
        width: 50px;
        height: auto;
        display: block; /* Center the image */
        margin: 0 auto 10px; /* Margin to position the image at the top */
        padding-top: 10px;
    }
    
    .btn {
        background-color: #ff8737;
        color: white;
        border: none;
        border-radius: 5px;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        height: 40px;
        width: 700px;
        justify-content: center;
        
    }
    
    .btn:hover {
        background-color: #d27638;
    }
    
    .image{
        /* background-color: #fcfcfc;
        width: 700px;
        height: 150px;
        border-bottom: 5px; */
         
    }
    
    .image p{
       align-content: center;
    
    }
    
    .image .imgprnt{
        margin-left: 660px;
        position: absolute;
        width: 20px;
        height: auto;
        
    }
    .image .imgcmplt{
        
        width: 80px;
        height: auto;
        
    }
    
    table .jumlahtf{
        font-size: 25px;
    } 
    
     </style>

    <title>Document</title>
</head>
<body>
    <h1>Detail Pembayaran</h1>
    <p> </p>
    {{-- <div class="image">
        <img class="imgprnt" src="/images/printer.png" alt="">
        <img class="imgcmplt" src="{{public_path('complate2.png')}}" alt="">
        
        
    </div> --}}
   <div class="detail">
    <table  >
        <tr aria-rowspan="">
            <th>Produk</th>
            <td>Tenda Arei isi 4 </td>
            </tr>
        <tr>
            <th>Tanggal dan Waktu</th>
            <td>########</td>
        </tr>
        <tr>
            <th>Kode Pembayaran</th>
            <td>########</td>
        </tr>
        <tr>
            <th>Jumlah Transfer</th>
            <td class=""><b>Rp 12x.xxxx</b></td>
        </tr>
        <tr>
            <th>Tujuan Transaksi</th>
            <td>########</td>
        </tr>
        <tr>
            <th>Metode Pembayaran</th>
            <td>########</td>
        </tr>
        
    </table>
    
</div>
</body>
</html>