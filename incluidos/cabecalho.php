<head>
  <link rel="stylesheet" type="text/css" href="../css/css.css"/>
</head>
<body>

  <center>
    <header>
      <a href="./index.php"><h1>Pelotão de Comunicações </h1></a>
      <!---Criando para falar mais sobre nós.-->
    </header>
    <nav>
      <div class="popup">
        <span class="popuptext" id="myPopup">Feito pelo Pelotão de Comunicações em 2022</span>
      </div>
      <p id="sobrenos"onclick="popup();">Sobre nós</p>
    </nav>
  </center>
  <script>
  function popup() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }
  </script>
</body>