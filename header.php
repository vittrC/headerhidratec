<!DOCTYPE html>
<html>
<head>
<title>Hidratec</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    margin-top: 13.5rem;
    color: #999;
    font: 400 16px/1.5 exo, ubuntu, "segoe ui", helvetica, arial, sans-serif;
    text-align: center;
    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAIAAACRXR/mAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAIGNIUk0AAHolAACAgwAA+f8AAIDpAAB1MAAA6mAAADqYAAAXb5JfxUYAAABnSURBVHja7M5RDYAwDEXRDgmvEocnlrQS2SwUFST9uEfBGWs9c97nbGtDcquqiKhOImLs/UpuzVzWEi1atGjRokWLFi1atGjRokWLFi1atGjRokWLFi1af7Ukz8xWp8z8AAAA//8DAJ4LoEAAlL1nAAAAAElFTkSuQmCC") repeat 0 0;
    animation: bg-scrolling-reverse 90s infinite linear; 
}

@keyframes bg-scrolling-reverse {
    from {
        background-position: 0 0;
    }
    to {
        background-position: 0 -100%;
    }
}

header {
    display: flex;
    color: white;
    padding: 50px 20px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    justify-content: space-around;
    align-items: center;
    background: #23232e;
    height: 8vh;
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
}

.navigation ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    gap: 20px;
}

.navigation a {
    color: rgb(242, 242, 242);
    text-decoration: none;
    font-weight: bold;
    padding: 5px 10px;
    border-radius: 4px;
    transition: background-color 0.3s;
}

.navigation a:hover {
    background-color: #848484; 
    color: rgb(14, 13, 13);
}

h1 {
    font-family: system-ui, -apple-system, Helvetica, Arial, sans-serif;
    letter-spacing: 15px;
    font-size: 40px;
    font-weight: bold;
}

h3 {
    font-size: 44px;
    padding-bottom: 70px;
}

</style>
</head>
<body>

<audio id="background-music" loop autoplay>
    <source src="audiobg1.mp3" type="audio/mpeg">
</audio>  

<header class="header">
    <div class="logo">
        <h1>HIDRATEC</h1>
    </div>
    <nav class="navigation">
        <ul>
            <li><a href="mkultra.php">Início</a></li>
            <li><a href=".php">Produtos</a></li>
            <li><a href=".php">Contratos de serviço</a></li>
            <li><a href=".php"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
</svg></li></a>
        </ul>
    </nav>
</header>



<footer class="w3-center w3-black w3-padding-64">
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</footer>

</body>
</html>
