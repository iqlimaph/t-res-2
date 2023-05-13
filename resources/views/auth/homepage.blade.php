<!DOCTYPE html>

<html>
    <head>
        <title>T-RES</title>
        <link href="css/button.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" 
        crossorigin="anonymous">
        
        
        <style>
            body {
                background: url("{{ asset('/image/Hm.png') }}") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                overflow-y: auto;
            }
        </style>
    </head>
    <body>
        <button class="button4" onclick="account()">HIMA IF</button>

        <script>
            function account() {
            const url = "login"; 
            window.open(url, '_blank'); 
            }   
        </script>

        
    </body>

    
</html>




