<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashbor</title>
    <link rel="stylesheet" href="/css/dashbor.css">
</head>
<body>
    
    <header>
    <div class="navbar">
        <div class="logo"><a href="#">OneDayteam</a></div>
        <ul class="links">
            <li><a href="#">barang</a></li>
            <li><a href="#">keranjang</a></li>
            <li><a href="#">pembayaran</a></li>
            <li><a href="#">pelanggan</a></li>
            <li><a href="#">Lainnya</a></li>
        </ul>
        <a href="/login" class="action_btn">get Started</a>
        <div class="toggle_btn"><i class="fa-solid fa-bars"></i>
    </div>
    </div>
    </header>

    <div class="gambar">
        <div class="gambar-text">
            <h1>OUTDOOR RENTAL SUMBAR</h1>
            <p>Melayani rental/sewa alat camping/kemah terlengkap di Sumatra Barat</p>
        </div>
    </div>

    <h1>Daftar Barang Sewa</h1>
    <a href="/crud-barang/create" class="btn btn-primary"> <span data-feather="plus-circle"></span>
    Create Barang </a>
    <table class="table table-bordered">
        <tr>
            <th>ID Barang</th>
            <th>Id Toko</th>
            <th>Nama Barang</th>
            <th>jenis Barang</th>
            <th>Harga Sewa</th>
            <th>Stockt</th>
        </tr>
        @foreach ($barangs as $barang)
            <tr>
                <td>{{$barang->id_barang}}</td>
                <td>{{$barang->id_toko}}</td>
                <td>{{$barang->nama_barang}}</td>
                <td>{{$barang->jenis_barang}}</td>
                <td>{{$barang->harga_sewa}}</td>
                <td>{{$barang->stock_barang}}</td>

                <td>
                <a href="/crud-barang/{{ $item->id }}/edit" class="btn btn-warning btn-sm"> <span data-feather="edit">
                </span>Edit</a>
                <form action="crud-barang/{{$item->id }}" method="post" class="d-inline">
                @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data ?')"><span data-feather="trash-2"></span>Delete</button>
            </form>
            </td>
            </tr>
        @endforeach
    </table> 
    {{$dosens->links()}}

    

</body>
</html>