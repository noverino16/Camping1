<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/pembayaran.css">

    <title>Document</title>
</head>

<body>
    <h1>Jelajah Alam</h1>
    <p>Sumbar</p>
     
    <h1>Pilih Metode Pembayaran</h1>

    <div class="detail">
        <table>
            <tr aria-rowspan="">
                <th>Metode Pembayaran</th>
                <td></td>
            </tr>
            <tr>
                <th>COD</th>
                <td>
                    <input type="checkbox" name="" id="">
                </td>
            </tr>
            <tr>
                <th>E-Wallet</th>
                <td>
                    <select class="form-select" aria-label="E-Wallet">
                        <option selected hidden>Select E-Wallet</option>
                        <option value="1">PayPal</option>
                        <option value="2">Skrill</option>
                        <option value="3">Google Pay</option>
                    </select>
                </td>
            </tr>
            <tr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                           
                            <div class="form-group">
                                <select id="slick">
                                    <option value="facebook" data-description="This is Facebook" data-imagesrc="http://i.imgur.com/XkuTj3B.png">Facebook</option>
                                    <!-- Tambahkan opsi lain jika diperlukan -->
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>  
            </tr>
        </table>
        
        <!-- Next button with inline styling for width adjustment -->
        <a href="/frontend/detailPembayaran">
            <button class="btn" style="width: 100%;">Next</button>
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA712mCWNlpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/prashantchaudhary/ddslick/master/jquery.ddslick.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#slick").ddslick({
                width: "100%", // Terdapat kesalahan penulisan pada properti width
                imagePosition: "left",
                selectText: "Select Your Social Network",
                onSelected: function(data){
                    $("#selected").html(data.selectedData.value);
                }
            });
        });
    </script>
</body>

</html>
