<!DOCTYPE html>
<html>
    <head>
        <title>Gambling Room</title>
        <link rel="stylesheet" href="main.css">
        <link rel="icon" type="image/x-icon" href="img/1.png">
    </head>
    <body>
        <h1>Gambling Room</h1>
        <div class="main">
            <form name="game" action="game.php" method="POST">
                <ul id="pl">
                    <li>
                        <div class="players">
                            <h3 class="top">FIRST</h3>
                            <h3 class="bottom">PLAYER</h3>
                            <h5>ENTER PLAYER NAME</h5>
                            <input type="text" name="play1" class="player" required>
                        </div>
                    </li>
                    <li>
                        <div class="players">
                            <h3 class="top">SECOND</h3>
                            <h3 class="bottom">PLAYER</h3>
                            <h5>ENTER PLAYER NAME</h5>
                            <input type="text" name="play2" class="player" required>
                        </div>
                    </li>
                    <li>
                        <div class="players">
                            <h3 class="top">THIRD</h3>
                            <h3 class="bottom">PLAYER</h3>
                            <h5>ENTER PLAYER NAME</h5>
                            <input type="text" name="play3" class="player" required>
                        </div>
                    </li>
                    <li>
                        <div class="players">
                            <br><br><span class="dice1">DICE</span><br>
                            <select name="dice">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select><br><br><br>
                            <span class="turns1">TURNS</span><br>
                            <select name="turns">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                    </li>
                </ul>
                <br><input type="submit" id="start" name="start" value="START">
            </form>
        </div>
    </body>
</html>