<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Chewy&family=Indie+Flower&family=Lemonada:wght@300;500&family=Londrina+Solid:wght@300;400&family=Shadows+Into+Light&family=Sriracha&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
  <link href="css/stylesMemoTestV2.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Alegreya:ital,wght@0,800;1,400&display=swap" rel="stylesheet">
  <script src="js/scriptMemoTestCountDown.js" async></script>
  <title>MemoTest (Cuenta Regresiva)</title>
</head>
<body>
  <!-- Header y nav -->
  <header>
    <?php require("resources/header.php") ?>
  </header>

  <!-- Game web -->
  <h1 class="page-title">Encuentra las parejas!</h1>
  <div class="overlay-text visible text-center">
    Haz click para empezar
  </div>
  <div id="game-over-text" class="overlay-text">
    <h2>Se acabó el tiempo...</h2>
    <p>Sigue intentando!</p>

    <span class="overlay-text-small">Click para comenzar de nuevo</span>
  </div>
  <div id="victory-text" class="overlay-text">
    <h2>Felicitaciones!</h2>
    <p>Lo Lograste</p>
    <span class="overlay-text-small">Click para comenzar de nuevo</span>
  </div>

  <div class="game-container">
    <div class="game-info-container">
      <div class="game-info">
        Tiempo <span id="time-remaining">100</span>
      </div>
      <div class="game-info">
        Intentos <span id="flips">0</span>
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/memoTest_ODS1Fondo.png">
        <img class="card-value ods1" src="img/ODS1_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/memoTest_ODS1Fondo.png">
        <img class="card-value ods1" src="img/ODS1_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS2_fondo.png">
        <img class="card-value ods2" src="img/ODS2_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS2_fondo.png">
        <img class="card-value ods2" src="img/ODS2_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS3_fondo.png">
        <img class="card-value ods3" src="img/ODS3_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS3_fondo.png">
        <img class="card-value ods3" src="img/ODS3_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS4_fondo.png">
        <img class="card-value ods4" src="img/ODS4_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS4_fondo.png">
        <img class="card-value ods4" src="img/ODS4_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS5_fondo.png">
        <img class="card-value ods5" src="img/ODS5_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS5_fondo.png">
        <img class="card-value ods5" src="img/ODS5_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS6_fondo.png">
        <img class="card-value ods6" src="img/ODS6_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS6_fondo.png">
        <img class="card-value ods6" src="img/ODS6_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS7_fondo.png">
        <img class="card-value ods7" src="img/ODS7_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS7_fondo.png">
        <img class="card-value ods7" src="img/ODS7_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">

        <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS8_fondo.png">
        <img class="card-value ods8" src="img/ODS8_imagen.png">
      </div>
    </div>
    <div class="card">
      <div class="card-back card-face">
          <img class="objectives" src="img/reverso_Memo.png">
      </div>
      <div class="card-front card-face">
        <img class="card-face" src="img/ODS8_fondo.png">
        <img class="card-value ods8" src="img/ODS8_imagen.png">
      </div>
    </div>
    <div class="card">
    <div class="card-back card-face">
      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS9_fondo.png">
      <img class="card-value ods9" src="img/ODS9_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS9_fondo.png">
      <img class="card-value ods9" src="img/ODS9_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">
      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS10_fondo.png">
      <img class="card-value ods10" src="img/ODS10_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS10_fondo.png">
      <img class="card-value ods10" src="img/ODS10_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS11_fondo.png">
      <img class="card-value ods11" src="img/ODS11_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS11_fondo.png">
      <img class="card-value ods11" src="img/ODS11_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS12_fondo.png">
      <img class="card-value ods12" src="img/ODS12_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS12_fondo.png">
      <img class="card-value ods12" src="img/ODS12_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS13_fondo.png">
      <img class="card-value ods13" src="img/ODS13_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS13_fondo.png">
      <img class="card-value ods13" src="img/ODS13_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS14_fondo.png">
      <img class="card-value ods14" src="img/ODS14_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS14_fondo.png">
      <img class="card-value ods14" src="img/ODS14_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">

      <img class="card-face" src="img/ODS15_fondo.png">
      <img class="card-value ods15" src="img/ODS15_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS15_fondo.png">
      <img class="card-value ods15" src="img/ODS15_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS16_fondo.png">
      <img class="card-value ods15" src="img/ODS16_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">
        <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS16_fondo.png">
      <img class="card-value ods16" src="img/ODS16_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS17_fondo.png">
      <img class="card-value ods17" src="img/ODS17_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">
        <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">
      <img class="card-face" src="img/ODS17_fondo.png">
      <img class="card-value ods17" src="img/ODS17_imagen.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">

      <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">

      <img class="card-value ods2030" src="img/ODS2030.png">
    </div>
  </div>
  <div class="card">
    <div class="card-back card-face">
        <img class="objectives" src="img/reverso_Memo.png">
    </div>
    <div class="card-front card-face">

      <img class="card-value ods2030" src="img/ODS2030.png">
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <?php require("resources/footer.php") ?>
    </footer>
  </body>

  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</html>
