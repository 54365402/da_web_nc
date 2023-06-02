<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button class="a" style="width:100px; height:100px;"></button>

    <script>
        const a = document.querySelector(".a");
        var dem = 0;
        a.onclick = function(e){
            dem = dem+1;
            if(dem%2!=0)
            {
                e.target.innerHTML = "<h1>aaaaaa</h1>";
            }
            else{
                e.target.innerHTML = "<h1>bbbb</h1>";

            }
        }
    </script>
</body>
</html>