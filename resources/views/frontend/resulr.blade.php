<h2>Search Results for "{{ $query }}"</h2>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
        <div class="navbar">
            <div class="logo"><a href="#">OneDayteam</a></div>
            <ul class="links">
                <li><a href="#">Home</a></li>
                <li><a href="/perlengkapan">Rental/Penyewaan</a></li>
                <li><a href="/promo">Promo</a></li>
                <li><a href="#">Lainnya</a></li>
            </ul>
            <a href="/login" class="action_btn">get Started</a>
            <div class="toggle_btn"><i class="fa-solid fa-bars"></i></div>
        </div>
    </header>
    <div class="gambar">
        <div class="gambar-text">
        <form action="{{ route('search') }}" method="post">
            @csrf
            <input type="text" name="query" placeholder="Search...">
            <button type="submit">Search</button>
        </form>

            <h1>OUTDOOR RENTAL SUMBAR</h1>
            <p>Melayani rental/sewa alat camping/kemah terlengkap di Sumatra Barat</p>

            <h2>Search Results for "{{ $query }}"</h2>

@if ($results->isEmpty())
    <p>No results found.</p>
@else
    <ul>
        @foreach ($results as $result)
            <li>{{ $result->name }}</li>
        @endforeach
    </ul>
@endif
        </div>
    </div>

</body>
</html>