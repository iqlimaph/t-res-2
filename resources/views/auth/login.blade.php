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
                background: url("{{ asset('/image/LoginPage.jpg') }}") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>
    </head>

    <body>
        <div style="position: absolute; 
                    left: 855px; 
                    top: 200px; 
                    width: 394px; 
                    height: 61px; 
                    font-weight: 500; 
                    font-size: 36px; 
                    font-family: Arial, sans-serif;
                    font-style: italic;
                    text-decoration: underline;
                    color: #020202; 
                    text-align: center;">
            Welcome, Telyutizen!
        </div>
        
        <button class="button">
            <input type="text" id="username" placeholder="username">
        </button>

        <script>
            const button = document.querySelector('.button');
            const inputField = document.querySelector('#username');

            button.addEventListener('click', () => {
                inputField.focus();
            });
        </script>

        <button class="button2">
            <input type="text" id="password" placeholder="password">
        </button>

        <script>
            const button = document.querySelector('.button2');
            const inputField = document.querySelector('#password');

            button.addEventListener('click', () => {
                inputField.focus();
            });
        </script>

        <button class="button3" onclick="login()">Login</button>

        <script>
        function login() {
            const url = "homepage"; // Ganti dengan URL halaman login yang sesuai
            window.open(url, '_blank'); // Membuka halaman login di tab atau jendela baru
        }
        </script>
    </body>
    
</html>




