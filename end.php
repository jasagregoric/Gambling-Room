<?php
    session_start();
    $p1=$_SESSION["p1Score"];
    $p2=$_SESSION["p2Score"];
    $p3=$_SESSION["p3Score"];
    $a1=array(array($p1,$p2,$p3), array($_SESSION["p1"],$_SESSION["p2"],$_SESSION["p3"]));
    array_multisort($a1[0], $a1[1]);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gambling Room</title>
    <link rel="stylesheet" href="end.css">
    <link rel="icon" type="image/x-icon" href="img/1.png">
</head>
<body>
    <div class="bac"></div>
    <h1>CONGRATULATIONS</h1>
    <div class="main">
        <table>
            <tr>
                <td>
                    <div id="td1">
                        <h2>3RD</h2>
                        <h3><?php echo $a1[1][0]?></h3>
                        <h4><?php echo $a1[0][0]." Points"?></h4>
                    </div>
                </td>
                <td>
                    <div id="td2">
                        <h2>1ST</h2>
                        <h3><?php echo $a1[1][2]?></h3>
                        <h4><?php echo $a1[0][2]." Points"?></h4>
                    </div>
                </td>
                <td>
                    <div id="td3">
                        <h2>2ND</h2>
                        <h3><?php echo $a1[1][1]?></h3>
                        <h4><?php echo $a1[0][1]." Points"?></h4>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <h5 id="cnt">You can roll again in 15</h5>
</body>
<script src="https://cdn.jsdelivr.net/npm/fireworks-js@2.x/dist/index.umd.js"></script>
<script src="https://unpkg.com/fireworks-js@2.x/dist/index.umd.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function(){
        const container = document.querySelector('.main')
        const fireworks = new Fireworks.default(container)
        fireworks.start()
        const canvas = container.querySelector('canvas');
        if (canvas) {
            canvas.style.position = 'absolute';
            canvas.style.width = '1700px';
            canvas.style.height = '919px';
            canvas.style.left = '50%';
            canvas.style.marginLeft='-850px'
            canvas.style.zIndex='1';
            canvas.style.top='0px'
        }
        const a=document.getElementById("cnt");
        i=15;
        setInterval(function(){
            i--;
            a.innerText="You can roll again in "+i;
            if(i==0){
                window.location.href = 'index.php';
            }
        },1000)
    });
</script>
</html>