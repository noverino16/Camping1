<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Images on Select Dropdown</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    
    <style type="text/css">
        .dd-selected {
            color: black;
        }
    </style>
</head>
<body>
   <div class="container">
       <div class="row">
           <div class="col-md-6 col-md-offset-3">
             <hr>  <h1 class="text-center">Images on Select Dropdown</h1><hr>
               <div class="form-group">
                   <select id="slick">
                       <option value="facebook" data-description="This is Facebook" data-imagesrc="http://i.imgur.com/XkuTj3B.png">Facebook</option>
                       <!-- Tambahkan opsi lain jika diperlukan -->
                   </select>
               </div>
               <div class="form-group">
                   Selected: <span id="selected"></span>
               </div>
           </div>
       </div>
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