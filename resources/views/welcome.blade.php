<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tic Tac Toe</title>
    <style>
        body {
            background-color: #000;
            color: #0f0;
            font-family: 'Courier New', monospace;
            text-align: center;
            position: relative;
        }
        .board {
            display: grid;
            grid-template-columns: repeat(3, 100px);
            grid-template-rows: repeat(3, 100px);
            gap: 2px;
            margin: auto;
            margin-bottom: 50px; /* Adjust margin-bottom to make space for the secret message */

        }
        .cell {
            width: 100px;
            height: 100px;
            background-color: #0f0;
            border: 2px solid #0f0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            cursor: pointer;
            border-style: dot-dot-dash;
            border-color: white;
            color: black;
        }
        .cell:hover {
            background-color: #090;
        }
        .secret-message {
            position: fixed;
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 1.2rem;
            color: greenyellow;
        }
        .second-secret-message {
            position: fixed;
            bottom: 40px; /* Adjust the position */
            left: 50%;
            transform: translateX(-50%);
            font-size: 0.8rem;
            color: white; /* Change color */
        }
    </style>
</head>
<body>

<div class="board">
    @for ($i = 0; $i < 9; $i++)
        <div class="cell" data-index="{{ $i }}"></div>
    @endfor
</div>

<div class="secret-message" id="secret-message" style="display: none;">
    <a href="/home">Entrar al sitio...</a>
</div>

<div class="second-secret-message" id="second-secret-message" style="display: none">
    <h3>...Ya mas ayuda no hay...</h3>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var currentPlayer = 'X';

        $('.cell').click(function() {
            var index = $(this).data('index');
            if (!$(this).text()) {
                $(this).text(currentPlayer);
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X'; // Switch player
            }
        });

        setInterval(function() {
            $('#secret-message').toggle();
        }, 10000); // Show/hide secret message every 10 seconds
    });
</script>
<script>
    $(document).ready(function() {
        var currentPlayer = 'X';

        $('.cell').click(function() {
            var index = $(this).data('index');
            if (!$(this).text()) {
                $(this).text(currentPlayer);
                currentPlayer = currentPlayer === 'X' ? 'O' : 'X'; // Switch player
            }
        });

        setInterval(function() {
            $('#second-secret-message').toggle();
        }, 27000); // Show/hide second secret message every 15 seconds
    });
</script>

</body>
</html>
