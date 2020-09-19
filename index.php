<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Go Goals ODS</title>
    <!-- CSS only -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Chewy&family=Indie+Flower&family=Lemonada:wght@300;500&family=Londrina+Solid:wght@300;400&family=Shadows+Into+Light&family=Sriracha&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Coming+Soon&family=Handlee&family=Lato:wght@300&family=Montserrat:ital,wght@1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b67648323f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- Header y nav -->
    <header>
      <?php require("Resources/header.php") ?>
    </header>

    <!-- Game web -->
  <div id="contenedor"class="container-fluid">

      <!-- checkboxes to control states and variables-->
    <input class="ocultar" type="radio" name="players" id="players1" checked="checked" value="1"/>
    <input class="ocultar" type="radio" name="players" id="players2" value="2"/>
    <input class="ocultar" type="radio" name="players" id="players3" value="3"/>
    <input class="ocultar" type="radio" name="players" id="players4" value="4"/>
    <input class="ocultar" type="radio" name="turn" id="turn1" checked="checked" value="1"/>
    <input class="ocultar" type="radio" name="turn" id="turn2" value="2"/>
    <input class="ocultar" type="radio" name="turn" id="turn3" value="3"/>
    <input class="ocultar" type="radio" name="turn" id="turn4" value="4"/>
    <input class="ocultar" type="radio" name="colors" checked="checked" id="colors1" value="colors1"/>
    <input class="ocultar" type="radio" name="colors" id="colors2" value="colors2"/>
    <input class="ocultar" type="radio" name="colors" id="colors3" value="colors3"/>
    <input class="ocultar" type="radio" name="colors" id="colors4" value="colors4"/>
    <input class="ocultar game-time" type="checkbox" id="game-time" name="game-time"/>
    <!--

    <input type=" checkbox" name="show-info" id="show-info"/>
    <input type=" checkbox" name="play-fx" id="play-fx"/>

    <input class="ocultar game-time" type="radio" id="show-instructions-1" name="show-instructions"/>
    <input class="ocultar game-time" type="radio" id="show-instructions-2" name="show-instructions"/>
    <input class="ocultar game-time" type="radio" id="show-instructions-3" name="show-instructions"/>
    <input class="ocultar game-time" type="radio" id="show-instructions-4" name="show-instructions"/>
    <input class="ocultar game-time" type="radio" id="show-instructions-5" name="show-instructions"/>
    inputs and labels that control the piece position for player 1-->



    <input class="cb cbInicio" type="radio" name="cb-player1" id="cb-pl1-0" value="0" checked="checked" />
    <!--<label class="dice" for="cb-pl1-0"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-1" value="1" />
    <!--<label class="dice" for="cb-pl1-1"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-2" value="2"/>
    <!--<label class="dice" for="cb-pl1-2"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-3"value="3"/>
    <!--<label class="dice" for="cb-pl1-3"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-4" value="4"/>
    <!--<label class="dice" for="cb-pl1-4"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-5" value="5"/>
    <!--<label class="dice" for="cb-pl1-5"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-6" value="6"/>
    <!--<label class="dice" for="cb-pl1-6"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-7" value="7"/>
    <!--<label class="dice" for="cb-pl1-7"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-8" value="8"/>
    <!--<label class="dice" for="cb-pl1-8"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player1" id="cb-pl1-9" value="9"/>
    <!--<label class="dice" for="cb-pl1-9"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-10" value="10"/>
    <!--<label class="dice" for="cb-pl1-10"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-11" value="11"/>
    <!--<label class="dice" for="cb-pl1-11"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-12" value="12"/>
    <!--<label class="dice" for="cb-pl1-12"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-13" value="13"/>
    <!--<label class="dice" for="cb-pl1-13"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-14" value="14"/>
    <!--<label class="dice" for="cb-pl1-14"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-15" value="15"/>
    <!--<label class="dice" for="cb-pl1-15"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player1" id="cb-pl1-16" value="16"/>
    <!--<label class="dice" for="cb-pl1-16"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-17" value="17"/>
    <!--<label class="dice" for="cb-pl1-17"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-18" value="18"/>
    <!--<label class="dice" for="cb-pl1-18"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-19" value="19"/>
    <!--<label class="dice" for="cb-pl1-19"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-20" value="20"/>
    <!--<label class="dice" for="cb-pl1-20"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-21" value="21"/>
    <!--<label class="dice" for="cb-pl1-21"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-22" value="22"/>
    <!--<label class="dice" for="cb-pl1-22"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player1" id="cb-pl1-23" value="23"/>
    <!--<label class="dice" for="cb-pl1-23"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-24" value="24"/>
    <!--<label class="dice" for="cb-pl1-24"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-25" value="25"/>
    <!--<label class="dice" for="cb-pl1-25"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-26" value="26"/>
    <!--<label class="dice" for="cb-pl1-26"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-27" value="27"/>
    <!--<label class="dice" for="cb-pl1-27"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-28"value="28"/>
    <!--<label class="dice" for="cb-pl1-28"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-29" value="29"/>
    <!--<label class="dice" for="cb-pl1-29"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-30" value="30"/>
    <!--<label class="dice" for="cb-pl1-30"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player1" id="cb-pl1-31" value="31"/>
    <!--<label class="dice" for="cb-pl1-31"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-32" value="32"/>
    <!--<label class="dice" for="cb-pl1-32"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-33" value="33"/>
    <!--<label class="dice" for="cb-pl1-33"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player1" id="cb-pl1-34" value="34"/>
    <!--<label class="dice" for="cb-pl1-34"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-35" value="35"/>
    <!--<label class="dice" for="cb-pl1-35"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-36" value="36"/>
    <!--<label class="dice" for="cb-pl1-36"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-37" value="37"/>
    <!--<label class="dice" for="cb-pl1-37"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-38" value="38"/>
    <!--<label class="dice" for="cb-pl1-38"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player1" id="cb-pl1-39" value="39"/>
    <!--<label class="dice" for="cb-pl1-39"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-40" value="40"/>
    <!--<label class="dice" for="cb-pl1-40"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-41" value="41"/>
    <!--<label class="dice" for="cb-pl1-41"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-42" value="42"/>
    <!--<label class="dice" for="cb-pl1-42"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-43" value="43"/>
    <!--<label class="dice" for="cb-pl1-43"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-44" value="44"/>
    <!--<label class="dice" for="cb-pl1-44"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-45" value="45"/>
    <!--<label class="dice" for="cb-pl1-45"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-46" value="46"/>
    <!--<label class="dice" for="cb-pl1-46"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-47" value="47"/>
    <!--<label class="dice" for="cb-pl1-47"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player1" id="cb-pl1-48" value="48"/>
    <!--<label class="dice" for="cb-pl1-48"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-49" value="49"/>
    <!--<label class="dice" for="cb-pl1-49"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-50" value="50"/>
    <!--<label class="dice" for="cb-pl1-50"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-51" value="51"/>
    <!--<label class="dice" for="cb-pl1-51"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-52" value="52"/>
    <!--<label class="dice" for="cb-pl1-52"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-53" value="53"/>
    <!--<label class="dice" for="cb-pl1-53"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-54" value="54"/>
    <!--<label class="dice" for="cb-pl1-54"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-55" value="55"/>
    <!--<label class="dice" for="cb-pl1-55"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-56" value="56"/>
    <!--<label class="dice" for="cb-pl1-56"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-57" value="57"/>
    <!--<label class="dice" for="cb-pl1-57"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-58" value="58"/>
    <!--<label class="dice" for="cb-pl1-58"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-59" value="59"/>
    <!--<label class="dice" for="cb-pl1-59"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-60" value="60"/>
    <!--<label class="dice" for="cb-pl1-60"></label>-->
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-61" value="61"/>
    <!--<label class="dice" for="cb-pl1-61"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player1" id="cb-pl1-62" value="62"/>
    <!--<label class="dice" for="cb-pl1-62"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player1" id="cb-pl1-63" value="63"/>
    <!--<label class="dice" for="cb-pl1-63"></label>-->
    <input class="cb cbLlegada" type="radio" name="cb-player1" id="cb-pl1-64" value="64"/>
    <!--<label class="dice" for="cb-pl1-64"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-65" value="65"/>
    <!--<label class="dice" for="cb-pl1-65"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-66" value="66"/>
    <!--<label class="dice" for="cb-pl1-66"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-67" value="67"/>
    <!--<label class="dice" for="cb-pl1-67"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-68" value="68"/>
    <!--<label class="dice" for="cb-pl1-68"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-69" value="69"/>
    <!--<label class="dice" for="cb-pl1-69"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player1" id="cb-pl1-70" value="70"/>
    <!--<label class="dice" for="cb-pl1-70"></label>-->
    <!--
    <input class="cb" type="radio" name="cb-player1" id="cb-pl1-71"/>
    <!-<label class="dice" for="cb-pl1-71"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-72"/> -->
    <!--<label class="dice" for="cb-pl1-72"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-73"/> -->
    <!--<label class="dice" for="cb-pl1-73"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-74"/> -->
    <!--<label class="dice" for="cb-pl1-74"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-75"/> -->
    <!--<label class="dice" for="cb-pl1-75"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-76"/> -->
    <!--<label class="dice" for="cb-pl1-76"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-77"/> -->
    <!--<label class="dice" for="cb-pl1-77"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-78"/> -->
    <!--<label class="dice" for="cb-pl1-78"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-79"/> -->
    <!--<label class="dice" for="cb-pl1-79"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-80"/> -->
    <!--<label class="dice" for="cb-pl1-80"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-81"/> -->
    <!--<label class="dice" for="cb-pl1-81"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-82"/> -->
    <!--<label class="dice" for="cb-pl1-82"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-83"/> -->
    <!--<label class="dice" for="cb-pl1-83"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-84"/> -->
    <!--<label class="dice" for="cb-pl1-84"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-85"/> -->
    <!--<label class="dice" for="cb-pl1-85"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-86"/> -->
    <!--<label class="dice" for="cb-pl1-86"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-87"/> -->
    <!--<label class="dice" for="cb-pl1-87"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-88"/> -->
    <!--<label class="dice" for="cb-pl1-88"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-89"/> -->
    <!--<label class="dice" for="cb-pl1-89"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-90"/> -->
    <!--<label class="dice" for="cb-pl1-90"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-91"/> -->
    <!--<label class="dice" for="cb-pl1-91"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-92"/> -->
    <!--<label class="dice" for="cb-pl1-92"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-93"/> -->
    <!--<label class="dice" for="cb-pl1-93"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-94"/> -->
    <!--<label class="dice" for="cb-pl1-94"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-95"/> -->
    <!--<label class="dice" for="cb-pl1-95"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-96"/> -->
    <!--<label class="dice" for="cb-pl1-96"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-97"/> -->
    <!--<label class="dice" for="cb-pl1-97"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-98"/> -->
    <!--<label class="dice" for="cb-pl1-98"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-99"/> -->
    <!--<label class="dice" for="cb-pl1-99"></label>-->
     <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-100"/> -->
    <!--<label class="dice" for="cb-pl1-100"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-101"/> -->
    <!--<label class="dice" for="cb-pl1-101"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-102"/> -->
    <!--<label class="dice" for="cb-pl1-102"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-103"/> -->
    <!--<label class="dice" for="cb-pl1-103"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-104"/> -->
    <!--<label class="dice" for="cb-pl1-104"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-105"/> -->
    <!--<label class="dice" for="cb-pl1-105"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player1" id="cb-pl1-106"/> -->
    <!--<label class="dice" for="cb-pl1-106"></label>-->
    <input class="cb cbInicio" type="radio" name="cb-player2" id="cb-pl2-0" value="0" checked="checked" />
    <!--<label class="dice" for="cb-pl2-0"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-1" value="1" />
    <!--<label class="dice" for="cb-pl2-1"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-2" value="2"/>
    <!--<label class="dice" for="cb-pl2-2"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-3"value="3"/>
    <!--<label class="dice" for="cb-pl2-3"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-4" value="4"/>
    <!--<label class="dice" for="cb-pl2-4"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-5" value="5"/>
    <!--<label class="dice" for="cb-pl2-5"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-6" value="6"/>
    <!--<label class="dice" for="cb-pl2-6"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-7" value="7"/>
    <!--<label class="dice" for="cb-pl2-7"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-8" value="8"/>
    <!--<label class="dice" for="cb-pl2-8"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player2" id="cb-pl2-9" value="9"/>
    <!--<label class="dice" for="cb-pl2-9"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-10" value="10"/>
    <!--<label class="dice" for="cb-pl2-10"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-11" value="11"/>
    <!--<label class="dice" for="cb-pl2-11"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-12" value="12"/>
    <!--<label class="dice" for="cb-pl2-12"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-13" value="13"/>
    <!--<label class="dice" for="cb-pl2-13"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-14" value="14"/>
    <!--<label class="dice" for="cb-pl2-14"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-15" value="15"/>
    <!--<label class="dice" for="cb-pl2-15"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player2" id="cb-pl2-16" value="16"/>
    <!--<label class="dice" for="cb-pl2-16"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-17" value="17"/>
    <!--<label class="dice" for="cb-pl2-17"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-18" value="18"/>
    <!--<label class="dice" for="cb-pl2-18"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-19" value="19"/>
    <!--<label class="dice" for="cb-pl2-19"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-20" value="20"/>
    <!--<label class="dice" for="cb-pl2-20"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-21" value="21"/>
    <!--<label class="dice" for="cb-pl2-21"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-22" value="22"/>
    <!--<label class="dice" for="cb-pl2-22"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player2" id="cb-pl2-23" value="23"/>
    <!--<label class="dice" for="cb-pl2-23"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-24" value="24"/>
    <!--<label class="dice" for="cb-pl2-24"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-25" value="25"/>
    <!--<label class="dice" for="cb-pl2-25"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-26" value="26"/>
    <!--<label class="dice" for="cb-pl2-26"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-27" value="27"/>
    <!--<label class="dice" for="cb-pl2-27"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-28"value="28"/>
    <!--<label class="dice" for="cb-pl2-28"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-29" value="29"/>
    <!--<label class="dice" for="cb-pl2-29"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-30" value="30"/>
    <!--<label class="dice" for="cb-pl2-30"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player2" id="cb-pl2-31" value="31"/>
    <!--<label class="dice" for="cb-pl2-31"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-32" value="32"/>
    <!--<label class="dice" for="cb-pl2-32"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-33" value="33"/>
    <!--<label class="dice" for="cb-pl2-33"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player2" id="cb-pl2-34" value="34"/>
    <!--<label class="dice" for="cb-pl2-34"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-35" value="35"/>
    <!--<label class="dice" for="cb-pl2-35"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-36" value="36"/>
    <!--<label class="dice" for="cb-pl2-36"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-37" value="37"/>
    <!--<label class="dice" for="cb-pl2-37"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-38" value="38"/>
    <!--<label class="dice" for="cb-pl2-38"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player2" id="cb-pl2-39" value="39"/>
    <!--<label class="dice" for="cb-pl2-39"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-40" value="40"/>
    <!--<label class="dice" for="cb-pl2-40"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-41" value="41"/>
    <!--<label class="dice" for="cb-pl2-41"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-42" value="42"/>
    <!--<label class="dice" for="cb-pl2-42"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-43" value="43"/>
    <!--<label class="dice" for="cb-pl2-43"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-44" value="44"/>
    <!--<label class="dice" for="cb-pl2-44"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-45" value="45"/>
    <!--<label class="dice" for="cb-pl2-45"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-46" value="46"/>
    <!--<label class="dice" for="cb-pl2-46"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-47" value="47"/>
    <!--<label class="dice" for="cb-pl2-47"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player2" id="cb-pl2-48" value="48"/>
    <!--<label class="dice" for="cb-pl2-48"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-49" value="49"/>
    <!--<label class="dice" for="cb-pl2-49"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-50" value="50"/>
    <!--<label class="dice" for="cb-pl2-50"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-51" value="51"/>
    <!--<label class="dice" for="cb-pl2-51"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-52" value="52"/>
    <!--<label class="dice" for="cb-pl2-52"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-53" value="53"/>
    <!--<label class="dice" for="cb-pl2-53"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-54" value="54"/>
    <!--<label class="dice" for="cb-pl2-54"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-55" value="55"/>
    <!--<label class="dice" for="cb-pl2-55"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-56" value="56"/>
    <!--<label class="dice" for="cb-pl2-56"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-57" value="57"/>
    <!--<label class="dice" for="cb-pl2-57"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-58" value="58"/>
    <!--<label class="dice" for="cb-pl2-58"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-59" value="59"/>
    <!--<label class="dice" for="cb-pl2-59"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-60" value="60"/>
    <!--<label class="dice" for="cb-pl2-60"></label>-->
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-61" value="61"/>
    <!--<label class="dice" for="cb-pl2-61"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player2" id="cb-pl2-62" value="62"/>
    <!--<label class="dice" for="cb-pl2-62"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player2" id="cb-pl2-63" value="63"/>
    <!--<label class="dice" for="cb-pl2-63"></label>-->
    <input class="cb cbLlegada" type="radio" name="cb-player2" id="cb-pl2-64" value="64"/>
    <!--<label class="dice" for="cb-pl2-64"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-65" value="65"/>
    <!--<label class="dice" for="cb-pl2-65"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-66" value="66"/>
    <!--<label class="dice" for="cb-pl2-66"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-67" value="67"/>
    <!--<label class="dice" for="cb-pl2-67"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-68" value="68"/>
    <!--<label class="dice" for="cb-pl2-68"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-69" value="69"/>
    <!--<label class="dice" for="cb-pl2-69"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player2" id="cb-pl2-70" value="70"/>
    <!--<label class="dice" for="cb-pl2-70"></label>--><!--
    <input class="cb" type="radio" name="cb-player2" id="cb-pl2-71"/>
    <!-<label class="dice" for="cb-pl2-71"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-72"/> -->
    <!--<label class="dice" for="cb-pl2-72"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-73"/> -->
    <!--<label class="dice" for="cb-pl2-73"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-74"/> -->
    <!--<label class="dice" for="cb-pl2-74"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-75"/> -->
    <!--<label class="dice" for="cb-pl2-75"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-76"/> -->
    <!--<label class="dice" for="cb-pl2-76"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-77"/> -->
    <!--<label class="dice" for="cb-pl2-77"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-78"/> -->
    <!--<label class="dice" for="cb-pl2-78"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-79"/> -->
    <!--<label class="dice" for="cb-pl2-79"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-80"/> -->
    <!--<label class="dice" for="cb-pl2-80"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-81"/> -->
    <!--<label class="dice" for="cb-pl2-81"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-82"/> -->
    <!--<label class="dice" for="cb-pl2-82"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-83"/> -->
    <!--<label class="dice" for="cb-pl2-83"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-84"/> -->
    <!--<label class="dice" for="cb-pl2-84"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-85"/> -->
    <!--<label class="dice" for="cb-pl2-85"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-86"/> -->
    <!--<label class="dice" for="cb-pl2-86"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-87"/> -->
    <!--<label class="dice" for="cb-pl2-87"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-88"/> -->
    <!--<label class="dice" for="cb-pl2-88"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-89"/> -->
    <!--<label class="dice" for="cb-pl2-89"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-90"/> -->
    <!--<label class="dice" for="cb-pl2-90"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-91"/> -->
    <!--<label class="dice" for="cb-pl2-91"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-92"/> -->
    <!--<label class="dice" for="cb-pl2-92"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-93"/> -->
    <!--<label class="dice" for="cb-pl2-93"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-94"/> -->
    <!--<label class="dice" for="cb-pl2-94"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-95"/> -->
    <!--<label class="dice" for="cb-pl2-95"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-96"/> -->
    <!--<label class="dice" for="cb-pl2-96"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-97"/> -->
    <!--<label class="dice" for="cb-pl2-97"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-98"/> -->
    <!--<label class="dice" for="cb-pl2-98"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-99"/> -->
    <!--<label class="dice" for="cb-pl2-99"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-100"/> -->
    <!--<label class="dice" for="cb-pl2-100"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-101"/> -->
    <!--<label class="dice" for="cb-pl2-101"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-102"/> -->
    <!--<label class="dice" for="cb-pl2-102"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-103"/> -->
    <!--<label class="dice" for="cb-pl2-103"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-104"/> -->
    <!--<label class="dice" for="cb-pl2-104"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-105"/> -->
    <!--<label class="dice" for="cb-pl2-105"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player2" id="cb-pl2-106"/> -->
    <!--<label class="dice" for="cb-pl2-106"></label>-->
    <input class="cb cbInicio" type="radio" name="cb-player3" id="cb-pl3-0" value="0" checked="checked" />
    <!--<label class="dice" for="cb-pl3-0"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-1" value="1" />
    <!--<label class="dice" for="cb-pl3-1"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-2" value="2"/>
    <!--<label class="dice" for="cb-pl3-2"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-3"value="3"/>
    <!--<label class="dice" for="cb-pl3-3"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-4" value="4"/>
    <!--<label class="dice" for="cb-pl3-4"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-5" value="5"/>
    <!--<label class="dice" for="cb-pl3-5"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-6" value="6"/>
    <!--<label class="dice" for="cb-pl3-6"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-7" value="7"/>
    <!--<label class="dice" for="cb-pl3-7"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-8" value="8"/>
    <!--<label class="dice" for="cb-pl3-8"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player3" id="cb-pl3-9" value="9"/>
    <!--<label class="dice" for="cb-pl3-9"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-10" value="10"/>
    <!--<label class="dice" for="cb-pl3-10"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-11" value="11"/>
    <!--<label class="dice" for="cb-pl3-11"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-12" value="12"/>
    <!--<label class="dice" for="cb-pl3-12"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-13" value="13"/>
    <!--<label class="dice" for="cb-pl3-13"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-14" value="14"/>
    <!--<label class="dice" for="cb-pl3-14"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-15" value="15"/>
    <!--<label class="dice" for="cb-pl3-15"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player3" id="cb-pl3-16" value="16"/>
    <!--<label class="dice" for="cb-pl3-16"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-17" value="17"/>
    <!--<label class="dice" for="cb-pl3-17"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-18" value="18"/>
    <!--<label class="dice" for="cb-pl3-18"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-19" value="19"/>
    <!--<label class="dice" for="cb-pl3-19"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-20" value="20"/>
    <!--<label class="dice" for="cb-pl3-20"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-21" value="21"/>
    <!--<label class="dice" for="cb-pl3-21"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-22" value="22"/>
    <!--<label class="dice" for="cb-pl3-22"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player3" id="cb-pl3-23" value="23"/>
    <!--<label class="dice" for="cb-pl3-23"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-24" value="24"/>
    <!--<label class="dice" for="cb-pl3-24"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-25" value="25"/>
    <!--<label class="dice" for="cb-pl3-25"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-26" value="26"/>
    <!--<label class="dice" for="cb-pl3-26"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-27" value="27"/>
    <!--<label class="dice" for="cb-pl3-27"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-28"value="28"/>
    <!--<label class="dice" for="cb-pl3-28"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-29" value="29"/>
    <!--<label class="dice" for="cb-pl3-29"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-30" value="30"/>
    <!--<label class="dice" for="cb-pl3-30"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player3" id="cb-pl3-31" value="31"/>
    <!--<label class="dice" for="cb-pl3-31"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-32" value="32"/>
    <!--<label class="dice" for="cb-pl3-32"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-33" value="33"/>
    <!--<label class="dice" for="cb-pl3-33"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player3" id="cb-pl3-34" value="34"/>
    <!--<label class="dice" for="cb-pl3-34"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-35" value="35"/>
    <!--<label class="dice" for="cb-pl3-35"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-36" value="36"/>
    <!--<label class="dice" for="cb-pl3-36"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-37" value="37"/>
    <!--<label class="dice" for="cb-pl3-37"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-38" value="38"/>
    <!--<label class="dice" for="cb-pl3-38"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player3" id="cb-pl3-39" value="39"/>
    <!--<label class="dice" for="cb-pl3-39"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-40" value="40"/>
    <!--<label class="dice" for="cb-pl3-40"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-41" value="41"/>
    <!--<label class="dice" for="cb-pl3-41"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-42" value="42"/>
    <!--<label class="dice" for="cb-pl3-42"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-43" value="43"/>
    <!--<label class="dice" for="cb-pl3-43"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-44" value="44"/>
    <!--<label class="dice" for="cb-pl3-44"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-45" value="45"/>
    <!--<label class="dice" for="cb-pl3-45"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-46" value="46"/>
    <!--<label class="dice" for="cb-pl3-46"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-47" value="47"/>
    <!--<label class="dice" for="cb-pl3-47"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player3" id="cb-pl3-48" value="48"/>
    <!--<label class="dice" for="cb-pl3-48"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-49" value="49"/>
    <!--<label class="dice" for="cb-pl3-49"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-50" value="50"/>
    <!--<label class="dice" for="cb-pl3-50"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-51" value="51"/>
    <!--<label class="dice" for="cb-pl3-51"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-52" value="52"/>
    <!--<label class="dice" for="cb-pl3-52"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-53" value="53"/>
    <!--<label class="dice" for="cb-pl3-53"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-54" value="54"/>
    <!--<label class="dice" for="cb-pl3-54"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-55" value="55"/>
    <!--<label class="dice" for="cb-pl3-55"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-56" value="56"/>
    <!--<label class="dice" for="cb-pl3-56"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-57" value="57"/>
    <!--<label class="dice" for="cb-pl3-57"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-58" value="58"/>
    <!--<label class="dice" for="cb-pl3-58"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-59" value="59"/>
    <!--<label class="dice" for="cb-pl3-59"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-60" value="60"/>
    <!--<label class="dice" for="cb-pl3-60"></label>-->
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-61" value="61"/>
    <!--<label class="dice" for="cb-pl3-61"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player3" id="cb-pl3-62" value="62"/>
    <!--<label class="dice" for="cb-pl3-62"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player3" id="cb-pl3-63" value="63"/>
    <!--<label class="dice" for="cb-pl3-63"></label>-->
    <input class="cb cbLlegada" type="radio" name="cb-player3" id="cb-pl3-64" value="64"/>
    <!--<label class="dice" for="cb-pl3-64"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-65" value="65"/>
    <!--<label class="dice" for="cb-pl3-65"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-66" value="66"/>
    <!--<label class="dice" for="cb-pl3-66"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-67" value="67"/>
    <!--<label class="dice" for="cb-pl3-67"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-68" value="68"/>
    <!--<label class="dice" for="cb-pl3-68"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-69" value="69"/>
    <!--<label class="dice" for="cb-pl3-69"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player3" id="cb-pl3-70" value="70"/>
    <!--<label class="dice" for="cb-pl3-70"></label>--><!--
    <input class="cb" type="radio" name="cb-player3" id="cb-pl3-71"/>
    <!-<label class="dice" for="cb-pl3-71"></label>-->
     
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-72"/> -->
    <!--<label class="dice" for="cb-pl3-72"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-73"/> -->
    <!--<label class="dice" for="cb-pl3-73"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-74"/> -->
    <!--<label class="dice" for="cb-pl3-74"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-75"/> -->
    <!--<label class="dice" for="cb-pl3-75"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-76"/> -->
    <!--<label class="dice" for="cb-pl3-76"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-77"/> -->
    <!--<label class="dice" for="cb-pl3-77"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-78"/> -->
    <!--<label class="dice" for="cb-pl3-78"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-79"/> -->
    <!--<label class="dice" for="cb-pl3-79"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-80"/> -->
    <!--<label class="dice" for="cb-pl3-80"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-81"/> -->
    <!--<label class="dice" for="cb-pl3-81"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-82"/> -->
    <!--<label class="dice" for="cb-pl3-82"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-83"/> -->
    <!--<label class="dice" for="cb-pl3-83"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-84"/> -->
    <!--<label class="dice" for="cb-pl3-84"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-85"/> -->
    <!--<label class="dice" for="cb-pl3-85"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-86"/> -->
    <!--<label class="dice" for="cb-pl3-86"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-87"/>
    <!-<label class="dice" for="cb-pl3-87"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-88"/> -->
    <!--<label class="dice" for="cb-pl3-88"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-89"/> -->
    <!--<label class="dice" for="cb-pl3-89"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-90"/> -->
    <!--<label class="dice" for="cb-pl3-90"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-91"/> -->
    <!--<label class="dice" for="cb-pl3-91"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-92"/> -->
    <!--<label class="dice" for="cb-pl3-92"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-93"/> -->
    <!--<label class="dice" for="cb-pl3-93"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-94"/> -->
    <!--<label class="dice" for="cb-pl3-94"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-95"/> -->
    <!--<label class="dice" for="cb-pl3-95"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-96"/> -->
    <!--<label class="dice" for="cb-pl3-96"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-97"/> -->
    <!--<label class="dice" for="cb-pl3-97"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-98"/> -->
    <!--<label class="dice" for="cb-pl3-98"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-99"/> -->
    <!--<label class="dice" for="cb-pl3-99"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-100"/> -->
    <!--<label class="dice" for="cb-pl3-100"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-101"/> -->
    <!--<label class="dice" for="cb-pl3-101"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-102"/> -->
    <!--<label class="dice" for="cb-pl3-102"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-103"/> -->
    <!--<label class="dice" for="cb-pl3-103"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-104"/> -->
    <!--<label class="dice" for="cb-pl3-104"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-105"/> -->
    <!--<label class="dice" for="cb-pl3-105"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player3" id="cb-pl3-106"/> -->
    <!--<label class="dice" for="cb-pl3-106"></label>-->
    <input class="cb cbInicio" type="radio" name="cb-player4" id="cb-pl4-0" value=0 checked="checked" />
    <!--<label class="dice" for="cb-pl4-0"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-1" value="1" />
    <!--<label class="dice" for="cb-pl4-1"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-2" value="2"/>
    <!--<label class="dice" for="cb-pl4-2"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-3"value="3"/>
    <!--<label class="dice" for="cb-pl4-3"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-4" value="4"/>
    <!--<label class="dice" for="cb-pl4-4"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-5" value="5"/>
    <!--<label class="dice" for="cb-pl4-5"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-6" value="6"/>
    <!--<label class="dice" for="cb-pl4-6"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-7" value="7"/>
    <!--<label class="dice" for="cb-pl4-7"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-8" value="8"/>
    <!--<label class="dice" for="cb-pl4-8"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player4" id="cb-pl4-9" value="9"/>
    <!--<label class="dice" for="cb-pl4-9"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-10" value="10"/>
    <!--<label class="dice" for="cb-pl4-10"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-11" value="11"/>
    <!--<label class="dice" for="cb-pl4-11"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-12" value="12"/>
    <!--<label class="dice" for="cb-pl4-12"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-13" value="13"/>
    <!--<label class="dice" for="cb-pl4-13"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-14" value="14"/>
    <!--<label class="dice" for="cb-pl4-14"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-15" value="15"/>
    <!--<label class="dice" for="cb-pl4-15"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player4" id="cb-pl4-16" value="16"/>
    <!--<label class="dice" for="cb-pl4-16"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-17" value="17"/>
    <!--<label class="dice" for="cb-pl4-17"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-18" value="18"/>
    <!--<label class="dice" for="cb-pl4-18"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-19" value="19"/>
    <!--<label class="dice" for="cb-pl4-19"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-20" value="20"/>
    <!--<label class="dice" for="cb-pl4-20"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-21" value="21"/>
    <!--<label class="dice" for="cb-pl4-21"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-22" value="22"/>
    <!--<label class="dice" for="cb-pl4-22"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player4" id="cb-pl4-23" value="23"/>
    <!--<label class="dice" for="cb-pl4-23"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-24" value="24"/>
    <!--<label class="dice" for="cb-pl4-24"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-25" value="25"/>
    <!--<label class="dice" for="cb-pl4-25"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-26" value="26"/>
    <!--<label class="dice" for="cb-pl4-26"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-27" value="27"/>
    <!--<label class="dice" for="cb-pl4-27"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-28"value="28"/>
    <!--<label class="dice" for="cb-pl4-28"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-29" value="29"/>
    <!--<label class="dice" for="cb-pl4-29"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-30" value="30"/>
    <!--<label class="dice" for="cb-pl4-30"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player4" id="cb-pl4-31" value="31"/>
    <!--<label class="dice" for="cb-pl4-31"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-32" value="32"/>
    <!--<label class="dice" for="cb-pl4-32"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-33" value="33"/>
    <!--<label class="dice" for="cb-pl4-33"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player4" id="cb-pl4-34" value="34"/>
    <!--<label class="dice" for="cb-pl4-34"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-35" value="35"/>
    <!--<label class="dice" for="cb-pl4-35"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-36" value="36"/>
    <!--<label class="dice" for="cb-pl4-36"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-37" value="37"/>
    <!--<label class="dice" for="cb-pl4-37"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-38" value="38"/>
    <!--<label class="dice" for="cb-pl4-38"></label>-->
    <input class="cb cbLadder" type="radio" name="cb-player4" id="cb-pl4-39" value="39"/>
    <!--<label class="dice" for="cb-pl4-39"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-40" value="40"/>
    <!--<label class="dice" for="cb-pl4-40"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-41" value="41"/>
    <!--<label class="dice" for="cb-pl4-41"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-42" value="42"/>
    <!--<label class="dice" for="cb-pl4-42"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-43" value="43"/>
    <!--<label class="dice" for="cb-pl4-43"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-44" value="44"/>
    <!--<label class="dice" for="cb-pl4-44"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-45" value="45"/>
    <!--<label class="dice" for="cb-pl4-45"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-46" value="46"/>
    <!--<label class="dice" for="cb-pl4-46"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-47" value="47"/>
    <!--<label class="dice" for="cb-pl4-47"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player4" id="cb-pl4-48" value="48"/>
    <!--<label class="dice" for="cb-pl4-48"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-49" value="49"/>
    <!--<label class="dice" for="cb-pl4-49"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-50" value="50"/>
    <!--<label class="dice" for="cb-pl4-50"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-51" value="51"/>
    <!--<label class="dice" for="cb-pl4-51"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-52" value="52"/>
    <!--<label class="dice" for="cb-pl4-52"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-53" value="53"/>
    <!--<label class="dice" for="cb-pl4-53"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-54" value="54"/>
    <!--<label class="dice" for="cb-pl4-54"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-55" value="55"/>
    <!--<label class="dice" for="cb-pl4-55"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-56" value="56"/>
    <!--<label class="dice" for="cb-pl4-56"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-57" value="57"/>
    <!--<label class="dice" for="cb-pl4-57"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-58" value="58"/>
    <!--<label class="dice" for="cb-pl4-58"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-59" value="59"/>
    <!--<label class="dice" for="cb-pl4-59"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-60" value="60"/>
    <!--<label class="dice" for="cb-pl4-60"></label>-->
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-61" value="61"/>
    <!--<label class="dice" for="cb-pl4-61"></label>-->
    <input class="cb cbOds" type="radio" name="cb-player4" id="cb-pl4-62" value="62"/>
    <!--<label class="dice" for="cb-pl4-62"></label>-->
    <input class="cb cbSlide" type="radio" name="cb-player4" id="cb-pl4-63" value="63"/>
    <!--<label class="dice" for="cb-pl4-63"></label>-->
    <input class="cb cbLlegada" type="radio" name="cb-player4" id="cb-pl4-64" value="64"/>
    <!--<label class="dice" for="cb-pl4-64"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-65" value="65"/>
    <!--<label class="dice" for="cb-pl4-65"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-66" value="66"/>
    <!--<label class="dice" for="cb-pl4-66"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-67" value="67"/>
    <!--<label class="dice" for="cb-pl4-67"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-68" value="68"/>
    <!--<label class="dice" for="cb-pl4-68"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-69" value="69"/>
    <!--<label class="dice" for="cb-pl4-69"></label>-->
    <input class="cb cbReturn" type="radio" name="cb-player4" id="cb-pl4-70" value="70"/>
    <!--<label class="dice" for="cb-pl4-70"></label>--><!--
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-71"/>
    <!-<label class="dice" for="cb-pl4-71"></label>
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-72"/>
    <!-<label class="dice" for="cb-pl4-72"></label>-->
    <!--
    <input class="cb" type="radio" name="cb-player4" id="cb-pl4-73"/>
    <!-<label class="dice" for="cb-pl4-73"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-74"/> -->
    <!--<label class="dice" for="cb-pl4-74"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-75"/> -->
    <!--<label class="dice" for="cb-pl4-75"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-76"/> -->
    <!--<label class="dice" for="cb-pl4-76"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-77"/> -->
    <!--<label class="dice" for="cb-pl4-77"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-78"/> -->
    <!--<label class="dice" for="cb-pl4-78"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-79"/> -->
    <!--<label class="dice" for="cb-pl4-79"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-80"/> -->
    <!--<label class="dice" for="cb-pl4-80"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-81"/> -->
    <!--<label class="dice" for="cb-pl4-81"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-82"/> -->
    <!--<label class="dice" for="cb-pl4-82"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-83"/> -->
    <!--<label class="dice" for="cb-pl4-83"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-84"/> -->
    <!--<label class="dice" for="cb-pl4-84"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-85"/> -->
    <!--<label class="dice" for="cb-pl4-85"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-86"/> -->
    <!--<label class="dice" for="cb-pl4-86"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-87"/> -->
    <!--<label class="dice" for="cb-pl4-87"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-88"/> -->
    <!--<label class="dice" for="cb-pl4-88"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-89"/> -->
    <!--<label class="dice" for="cb-pl4-89"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-90"/> -->
    <!--<label class="dice" for="cb-pl4-90"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-91"/> -->
    <!--<label class="dice" for="cb-pl4-91"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-92"/> -->
    <!--<label class="dice" for="cb-pl4-92"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-93"/> -->
    <!--<label class="dice" for="cb-pl4-93"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-94"/> -->
    <!--<label class="dice" for="cb-pl4-94"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-95"/> -->
    <!--<label class="dice" for="cb-pl4-95"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-96"/> -->
    <!--<label class="dice" for="cb-pl4-96"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-97"/> -->
    <!--<label class="dice" for="cb-pl4-97"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-98"/> -->
    <!--<label class="dice" for="cb-pl4-98"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-99"/> -->
    <!--<label class="dice" for="cb-pl4-99"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-100"/> -->
    <!--<label class="dice" for="cb-pl4-100"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-101"/> -->
    <!--<label class="dice" for="cb-pl4-101"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-102"/> -->
    <!--<label class="dice" for="cb-pl4-102"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-103"/> -->
    <!--<label class="dice" for="cb-pl4-103"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-104"/> -->
    <!--<label class="dice" for="cb-pl4-104"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-105"/> -->
    <!--<label class="dice" for="cb-pl4-105"></label>-->
    <!-- <input class="cb" type="radio" name="cb-player4" id="cb-pl4-106"/> -->
    <!--<label class="dice" for="cb-pl4-106"></label>-->
    <!-- game settings menu (# of players, colors) -->
    <div class="scrim" id="options">
      <div class="box">
        <h1>Configuración del Juego</h1>
        <div>
          <h2>Número de Jugadores</h2>
          <div class="flex option-players">
            <label for="players1">1</label>
            <label for="players2">2</label>
            <label for="players3">3</label>
            <label for="players4">4</label>
          </div>
          <h2>Colores de las fichas</h2>
          <div class="option-colors">

            <label class="flex selection" for="colors1">
              <span></span>
              <span><img src="img/peon3-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J1</h5></span>
              <span><img src="img/peon2-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J2</h5></span>
              <span><img src="img/peon1-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J3</h5></span>
              <span><img src="img/peon4-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J4</h5></span>
            </label>
            <label class="flex selection" for="colors2">
              <span></span>
              <span><img src="img/peon2-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J1</h5></span>
              <span><img src="img/peon1-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J2</h5></span>
              <span><img src="img/peon4-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J3</h5></span>
              <span><img src="img/peon3-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J4</h5></span>
            </label>
            <label class="flex selection" for="colors3">
              <span></span>
              <span><img src="img/peon1-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J1</h5></span>
              <span><img src="img/peon4-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J2</h5></span>
              <span><img src="img/peon3-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J3</h5></span>
              <span><img src="img/peon2-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J4</h5></span>
            </label>
            <label class="flex selection" for="colors4">
              <span></span>
              <span><img src="img/peon4-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J1</h5></span>
              <span><img src="img/peon3-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J2</h5></span>
              <span><img src="img/peon2-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J3</h5></span>
              <span><img src="img/peon1-01.png" class="d-inline" width=16px; alt=""><h5 class="playerN">J4</h5></span>
            </label>
          </div>
          <h2>Opciones de Sonido</h2>
          <div class="mt-3 mb-3 mx-auto">
            <span id="activateSound"><i class="fas fa-toggle-off"></i></span>
            <span class="subtitle">Música de fondo y efectos de sonido</span>

          </div>

          <div>
            <!-- este for es el que define a donde me manda el boton de iniciar juego. game-time me lleva a iniciar el juego. -->
            <label class="option-start" for="game-time">Iniciar Juego</label>
          </div>
        </div>
      </div>
    </div>
    <!-- pop-up with information about the game and the author-->
    <div class="scrim" id="info">
      <div class="box">
        <h1>Acerca de</h1>
        <div>
          <p>Este juego es una versión online del juego Go Goals para aprender de forma didáctica los Objetivos de Desarrollo Sostenible</p>
          <!--<p>Snakes and Ladders is an ancient Indian board game regarded today as a worldwide classic. A number of 'ladders' and 'snakes' are pictured on the board, each connecting two specific board squares. The object of the game is to navigate one's game piece, according to die rolls, from the start (bottom square) to the finish (top square), helped or hindered by ladders and snakes respectively.<sup><a href="https://en.wikipedia.org/wiki/Snakes_and_Ladders" target="_blank">[1]</a></sup></p>
          <p>This version was developed by <a href="https://github.com/alvaromontoro" target="_blank">Alvaro Montoro </a>using HTML and CSS, to practice Pug and Sass, and without any JavaScript line of code.</p>
          <p>The idea behind this project is that many classic board games are actually Finite-State Machines (FSM), so they can be recreated simulating the states of the automaton with radio buttons, labels, and some CSS styling.</p>
          <p>-->
            <label id="close-button" for="show-info">Close</label>
          </p>
        </div>
      </div>
    </div>
    <!-- animated instructions section

    <div id="instructions">
      <label id="go-to-game" for="game-time">SALTAR INSTRUCCIONES &rsaquo;</label>
      <div id="step">
        <div>
          <label for="show-instructions-2"></label>
          <label for="show-instructions-3"></label>
          <label for="show-instructions-4"></label>
          <label for="show-instructions-5"></label>
          <label for="game-time">PLAY &rsaquo;</label>
        </div>
      </div>
    </div>-->
    <!-- the game section: board, dice, snakes, ladders, and all that jazz...-->
    <div id="game">

      <div class="controlBoard float-left mt-3 " style="max-width: 16rem;">
        <div class="divRuleta text-center" >



          <img class="marker" src="img/MarkerODS.png">
          <img class="wheel" src="img/ruleta.png">
          <img class= "fondoRuleta" src="img/fondoRuleta.png" width="100%;" alt="">

          <button type="button" class="btn btn-success buttonWheel " name="button">Girá la ruleta</button>

    <div class="">
      <span class= "wheelTextBefore" >Mueve </span> <div id="wheelResult"></div> <span class ="wheelTextAfter"> Casilleros </span>
    </div>

      </div>
            <!-- <i class="fas fa-chess-pawn" id="wheelPlayer"></i> -->




      </div>


    <div class="float-right controlDerecha controlBoard" style="max-width: 16rem;">
    <div class="fondoDerecha">
      <img class = "imgFondoDer"src="img/fondo2.png" width="100%;" alt="">


      <!--label#dice.tab-->

      <div class="card  divTurno mb-3 " style="border-color: transparent; background-color:transparent;">

        <div class="divRueda">

        </div>


        <div class="tab" id="action">


          <div class="tab" id="">

            <span> Turno</span>
             <br>
             <div class="divPeonText" >

               <img class="turnPeon" src="img/peon3-01.png" id="turn-player-info" width= 20px; alt="">
               <span class="img-text" id="turn-player-number">""</span>
             </div>



              <!-- <i class="mb-3 fas fa-chess-pawn" id="turn-player-info"></i> -->







          </div>
          <div class="divNextButton">
            <button class=" btn-primary nextButton" type="button" name="button">Siguiente Turno</button>
          </div>

          <label id="turn-changer1" for="turn1"></label>
          <label id="turn-changer2" for="turn2"></label>
          <label id="turn-changer3" for="turn3"></label>
          <label id="turn-changer4" for="turn4"></label>

        </div>

      </div>

    <!-- Controles Para que suene y se detenga la música de fondo. -->


        <div class="divPlay mx-auto ">
          <button id="playButton"><i class="fas fa-music"></i></i></button>
        </div>

        <audio id="backgroundMusic">
          <source src='audio/mr_clown.mp3' type='audio/mpeg'/ >
        </audio>

        <audio id="wheelSound">
          <source src='audio/zapsplat_multimedia_wheel_of_fortune_style_wheel_spin_004_13212.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="wheelResultSound">
          <source src='audio/zapsplat_impacts_metal_hit_chime_scraper_002_10172.mp3' type='audio/mpeg'/>
        </audio>

        <audio id="moveForwardSound">
          <source src='audio/sport_badminton_racket_fast_movement_swoosh_003.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="slideSound">
          <source src='audio/zapsplat_cartoon_descend_whistle_air_001_28921.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="ladderSound">
          <source src='audio/zapsplat_cartoon_ascend_rise_short_slide_001_50521.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="returnSound">
          <source src='audio/zapsplat_multimedia_game_sound_wooden_light_delay_negative_001_40789.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="odsSound">
          <source src='audio/zapsplat_multimedia_game_sound_kids_game_bright_plucked_positive_ping_twingle_tone_002_53781.mp3' type='audio/mpeg'/>
        </audio>
        <audio id="llegadaSound">
            <source src='audio/zapsplat_multimedia_game_sound_bold_warm_70s_retro_synth_positive_gain_award_51321.mp3' type='audio/mpeg'/>
        </audio>








    </div>
    </div>

      <!-- Board based on the one from codewars: https://www.codewars.com/kata/snakes-and-ladders-1 -->
      <div id="board">
      <!--  <div class="tile tile100" data-index="100"></div>
        <div class="tile tile99" data-index="99"></div>
        <div class="tile tile98" data-index="98"></div>
        <div class="tile tile97" data-index="97"></div>
        <div class="tile tile96" data-index="96"></div>
        <div class="tile tile95" data-index="95"></div>
        <div class="tile tile94" data-index="94"></div>
        <div class="tile tile93" data-index="93"></div>
        <div class="tile tile92" data-index="92"></div>
        <div class="tile tile91" data-index="91"></div>
        <div class="tile tile81" data-index="81"></div>
        <div class="tile tile82" data-index="82"></div>
        <div class="tile tile83" data-index="83"></div>
        <div class="tile tile84" data-index="84"></div>
        <div class="tile tile85" data-index="85"></div>
        <div class="tile tile86" data-index="86"></div>
        <div class="tile tile87" data-index="87"></div>
        <div class="tile tile88" data-index="88"></div>
        <div class="tile tile89" data-index="89"></div>
        <div class="tile tile90" data-index="90"></div>
        <div class="tile tile80" data-index="80"></div>
        <div class="tile tile79" data-index="79"></div>
        <div class="tile tile78" data-index="78"></div>
        <div class="tile tile77" data-index="77"></div>
        <div class="tile tile76" data-index="76"></div>
        <div class="tile tile75" data-index="75"></div>
        <div class="tile tile74" data-index="74"></div>
        <div class="tile tile73" data-index="73"></div>
        <div class="tile tile72" data-index="72"></div>
        <div class="tile tile71" data-index="71"></div>
        <div class="tile tile64" data-index="64"></div>
        <div class="tile tile63" data-index="63"></div>-->
        <div class="tile tile61" data-index="61"></div>
        <div class="tile tile62" data-index="62"></div>
        <div class="tile tile63" data-index="63"></div>

        <div class="tile tile64" data-index="64"></div>
        <div class="tile tile65" data-index="65"></div>
        <div class="tile tile66" data-index="66"></div>
        <div class="tile tile67" data-index="67"></div>
        <div class="tile tile68" data-index="68"></div>
        <div class="tile tile69" data-index="69"></div>
        <div class="tile tile70" data-index="70"></div>

        <div class="tile tile60" data-index="60"></div>
        <div class="tile tile59" data-index="59"></div>
        <div class="tile tile58" data-index="58"></div>
        <div class="tile tile57" data-index="57"></div>
        <div class="tile tile56" data-index="56"></div>
        <div class="tile tile55" data-index="55"></div>
        <div class="tile tile54" data-index="54"></div>
        <div class="tile tile53" data-index="53"></div>
        <div class="tile tile52" data-index="52"></div>
        <div class="tile tile51" data-index="51"></div>
        <div class="tile tile41" data-index="41"></div>
        <div class="tile tile42" data-index="42"></div>
        <div class="tile tile43" data-index="43"></div>
        <div class="tile tile44" data-index="44"></div>
        <div class="tile tile45" data-index="45"></div>
        <div class="tile tile46" data-index="46"></div>
        <div class="tile tile47" data-index="47"></div>
        <div class="tile tile48" data-index="48"></div>
        <div class="tile tile49" data-index="49"></div>
        <div class="tile tile50" data-index="50"></div>
        <div class="tile tile40" data-index="40"></div>
        <div class="tile tile39" data-index="39"></div>
        <div class="tile tile38" data-index="38"></div>
        <div class="tile tile37" data-index="37"></div>
        <div class="tile tile36" data-index="36"></div>
        <div class="tile tile35" data-index="35"></div>
        <div class="tile tile34" data-index="34"></div>
        <div class="tile tile33" data-index="33"></div>
        <div class="tile tile32" data-index="32"></div>
        <div class="tile tile31" data-index="31"></div>
        <div class="tile tile21" data-index="21"></div>
        <div class="tile tile22" data-index="22"></div>
        <div class="tile tile23" data-index="23"></div>
        <div class="tile tile24" data-index="24"></div>
        <div class="tile tile25" data-index="25"></div>
        <div class="tile tile26" data-index="26"></div>
        <div class="tile tile27" data-index="27"></div>
        <div class="tile tile28" data-index="28"></div>
        <div class="tile tile29" data-index="29"></div>
        <div class="tile tile30" data-index="30"></div>
        <div class="tile tile20" data-index="20"></div>
        <div class="tile tile19" data-index="19"></div>
        <div class="tile tile18" data-index="18"></div>
        <div class="tile tile17" data-index="17"></div>
        <div class="tile tile16" data-index="16"></div>
        <div class="tile tile15" data-index="15"></div>
        <div class="tile tile14" data-index="14"></div>
        <div class="tile tile13" data-index="13"></div>
        <div class="tile tile12" data-index="12"></div>
        <div class="tile tile11" data-index="11"></div>


        <div class="tile tile1" data-index="1"></div>
        <div class="tile tile2" data-index="2"></div>
        <div class="tile tile3" data-index="3"></div>
        <div class="tile tile4" data-index="4"></div>
        <div class="tile tile5" data-index="5"></div>
        <div class="tile tile6" data-index="6"></div>
        <div class="tile tile7" data-index="7"></div>
        <div class="tile tile8" data-index="8"></div>
        <div class="tile tile9" data-index="9"></div>
        <div class="tile tile10" data-index="10"></div>






      <svg id="snakeladders" viewBox="0 0 600 600" preserveAspectRatio="none">
        <svg
           xmlns:svg="http://www.w3.org/2000/svg"
           xmlns="http://www.w3.org/2000/svg"
           xmlns:xlink="http://www.w3.org/1999/xlink"
           version="1.0"
           width="600"
           height="600"
           id="svg2">
          <defs
             id="defs4">
            <linearGradient
               id="linearGradient3181">
              <stop
                 id="stop3183"
                 style="stop-color:#7a5a36;stop-opacity:1"
                 offset="0" />
              <stop
                 id="stop3189"
                 style="stop-color:#a57948;stop-opacity:1"
                 offset="0.5" />
              <stop
                 id="stop3185"
                 style="stop-color:#decab2;stop-opacity:1"
                 offset="1" />
            </linearGradient>
            <linearGradient
               x1="-185.57915"
               y1="286.97354"
               x2="-165.57915"
               y2="286.97354"
               id="linearGradient4977"
               xlink:href="#linearGradient3181"
               gradientUnits="userSpaceOnUse" />
            <linearGradient
               x1="177.14287"
               y1="739.60913"
               x2="159.5"
               y2="-181.68291"
               id="linearGradient4979"
               xlink:href="#linearGradient3181"
               gradientUnits="userSpaceOnUse" />
          </defs>
          <g
             transform="matrix(.1 0 0 .5 250 280)"
             id="layer1">
            <g
               transform="scale(0.9,0.5)"
               id="g4959">
              <rect
                 width="19.255669"
                 height="186.14896"
                 ry="0"
                 x="-185.20697"
                 y="193.89906"
                 transform="matrix(0,-1,1,0,0,0)"
                 id="rect2387"
                 style="opacity:1;fill:url(#linearGradient4977);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.74433148;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
              <rect
                 width="34.389545"
                 height="649.70795"
                 ry="17.194773"
                 x="159.94809"
                 y="89.453125"
                 id="rect2383"
                 style="opacity:1; fill:url(#linearGradient4979);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.89617026px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
                 />
              <use
                 transform="translate(220,0)"
                 id="use2385"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2383" />
              <use
                 transform="translate(0,94.149658)"
                 id="use3159"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
              <use
                 transform="translate(0,94.149653)"
                 id="use3161"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,188.29932)"
                 id="use3163"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,282.44896)"
                 id="use3165"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,470.74829)"
                 id="use3191"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
            </g>
          </g>
          <g
             transform="matrix(.1 0 0 .5 365 110)"
             id="ladder2SVG">
            <g
               transform="scale(0.9,0.5)"
               id="g4960">
              <rect
                 width="19.255669"
                 height="186.14896"
                 ry="0"
                 x="-185.20697"
                 y="193.89906"
                 transform="matrix(0,-1,1,0,0,0)"
                 id="rect2387"
                 style="opacity:1;fill:url(#linearGradient4977);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.74433148;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
              <rect
                 width="34.389545"
                 height="649.70795"
                 ry="17.194773"
                 x="159.94809"
                 y="89.453125"
                 id="rect2383"
                 style="opacity:1; fill:url(#linearGradient4979);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.89617026px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
                 />
              <use
                 transform="translate(220,0)"
                 id="use2385"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2383" />
              <use
                 transform="translate(0,94.149658)"
                 id="use3159"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
              <use
                 transform="translate(0,94.149653)"
                 id="use3161"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,188.29932)"
                 id="use3163"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,282.44896)"
                 id="use3165"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,470.74829)"
                 id="use3191"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
            </g>
          </g>
          <g
             transform="matrix(.09 0 .15 .5 0 110)"
             id="ladder3SVG">
            <g
               transform="scale(0.9,0.5)"
               id="g4961">
              <rect
                 width="19.255669"
                 height="186.14896"
                 ry="0"
                 x="-185.20697"
                 y="193.89906"
                 transform="matrix(0,-1,1,0,0,0)"
                 id="rect2387"
                 style="opacity:1;fill:url(#linearGradient4977);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.74433148;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
              <rect
                 width="34.389545"
                 height="649.70795"
                 ry="17.194773"
                 x="159.94809"
                 y="89.453125"
                 id="rect2383"
                 style="opacity:1; fill:url(#linearGradient4979);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.89617026px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
                 />
              <use
                 transform="translate(220,0)"
                 id="use2385"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2383" />
              <use
                 transform="translate(0,94.149658)"
                 id="use3159"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
              <use
                 transform="translate(0,94.149653)"
                 id="use3161"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,188.29932)"
                 id="use3163"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,282.44896)"
                 id="use3165"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,470.74829)"
                 id="use3191"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
            </g>
          </g>
          <g
             transform="matrix(.09 0 -.15 .55 550 355)"
             id="ladder4SVG">
            <g
               transform="scale(0.9,0.5)"
               id="g4962">
              <rect
                 width="19.255669"
                 height="186.14896"
                 ry="0"
                 x="-185.20697"
                 y="193.89906"
                 transform="matrix(0,-1,1,0,0,0)"
                 id="rect2387"
                 style="opacity:1;fill:url(#linearGradient4977);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.74433148;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
              <rect
                 width="34.389545"
                 height="649.70795"
                 ry="17.194773"
                 x="159.94809"
                 y="89.453125"
                 id="rect2383"
                 style="opacity:1; fill:url(#linearGradient4979);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.89617026px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
                 />
              <use
                 transform="translate(220,0)"
                 id="use2385"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2383" />
              <use
                 transform="translate(0,94.149658)"
                 id="use3159"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
              <use
                 transform="translate(0,94.149653)"
                 id="use3161"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,188.29932)"
                 id="use3163"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,282.44896)"
                 id="use3165"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,470.74829)"
                 id="use3191"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
            </g>
          </g>
          <g
             transform="matrix(.09 0 .15 .5 485 110)"
             id="ladder5SVG">
            <g
               transform="scale(0.9,0.5)"
               id="g4963">
              <rect
                 width="19.255669"
                 height="186.14896"
                 ry="0"
                 x="-185.20697"
                 y="193.89906"
                 transform="matrix(0,-1,1,0,0,0)"
                 id="rect2387"
                 style="opacity:1;fill:url(#linearGradient4977);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.74433148;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate" />
              <rect
                 width="34.389545"
                 height="649.70795"
                 ry="17.194773"
                 x="159.94809"
                 y="89.453125"
                 id="rect2383"
                 style="opacity:1; fill:url(#linearGradient4979);fill-opacity:1;fill-rule:evenodd;stroke:#000000;stroke-width:0.89617026px;stroke-linecap:butt;stroke-linejoin:miter;marker:none;marker-start:none;marker-mid:none;marker-end:none;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1;visibility:visible;display:inline;overflow:visible;enable-background:accumulate"
                 />
              <use
                 transform="translate(220,0)"
                 id="use2385"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2383" />
              <use
                 transform="translate(0,94.149658)"
                 id="use3159"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
              <use
                 transform="translate(0,94.149653)"
                 id="use3161"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,188.29932)"
                 id="use3163"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,282.44896)"
                 id="use3165"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#use3159" />
              <use
                 transform="translate(0,470.74829)"
                 id="use3191"
                 x="0"
                 y="0"
                 width="744.09448"
                 height="1052.3622"
                 xlink:href="#rect2387" />
            </g>
          </g>

        </svg>

      <!--  <g class="ladders-big" >
          <path d="M89,574 140,392 M102,578 153,396 M388,581 385,508 M402,580 399,507 M449,552 554,395 M460,560 565,403 M320,516 333,444 M334,518 347,446 M24,436 74,329 M36,442 87,334 M430,458 210,99 M441,450 222,93 M264,393 214,339 M273,384 224,330 M563,284 391,203 M568,271 396,190 M570,149 559,31 M584,148 573,30 M142,158 155,40 M156,160 169,42 M397,101 379,30 M411,97 392,26"></path>
        </g>
        <g class="ladders-small">
          <path d="M91,568 104,573 M94,556 105,561 M97,544 108,549 M100,532 111,537 M103,520 114,525 M107,508 118,513 M111,496 122,501 M114,484 125,489 M117,472 128,477 M121,460 132,465 M124,448 135,453 M128,436 139,441 M131,424 142,429 M134,412 145,417 M138,400 149,405 M388,575 401,574 M388,563 401,562 M388,552 401,551 M388,541 401,540 M388,530 400,529 M388,518 400,517 M452,546 464,555 M459,536 470,544 M466,526 476,533 M473,516 482,522 M479,508 490,515 M485,498 496,506 M492,488 502,495 M498,479 509,486 M504,469 515,477 M512,459 522,467 M517,449 528,457 M523,440 534,448 M530,430 541,438 M536,421 548,429 M542,412 554,419 M549,402 560,409 M322,510 335,512 M324,498 337,500 M326,486 339,488 M328,475 341,477 M330,463 343,465 M332,452 345,454 M258,388 268,378 M250,379 260,369 M243,370 252,361 M235,362 245,352 M227,353 236,344 M219,345 229,335 M27,430 40,436 M32,419 45,425 M37,408 49,414 M42,398 54,404 M47,388 59,394 M51,377 64,383 M56,366 69,372 M61,356 75,362 M66,345 79,351 M71,335 84,341 M427,453 438,444 M420,443 432,434 M414,433 426,424 M408,423 420,414 M402,413 413,404 M395,402 407,393 M388,391 400,382 M381,379 393,370 M374,368 386,359 M367,356 378,347 M359,344 371,336 M352,332 364,324 M345,320 357,312 M338,308 350,300 M330,296 342,288 M323,284 335,276 M316,272 328,264 M308,260 320,252 M301,248 313,240 M294,236 305,228 M287,224 298,216 M280,212 291,205 M273,200 284,193 M267,188 277,181 M259,175 269,168 M251,163 261,156 M244,151 254,144 M236,139 246,132 M229,127 239,120 M222,115 232,108 M215,103 225,96 M143,152 157,154 M144,140 158,142 M145,128 159,130 M146,116 160,118 M147,104 161,106 M149,92 163,94 M150,80 164,82 M151,68 165,70 M153,56 167,58 M154,44 168,46 M396,95 409,91 M393,84 406,80 M390,73 403,69 M387,62 400,58 M384,51 397,47 M381,40 394,36 M570,143 583,142 M568,130 582,129 M566,117 580,116 M565,104 577,103 M564,91 576,90 M563,78 575,77 M562,65 574,64 M561,52 573,51 M560,38 572,37 M556,281 562,268 M546,276 552,263 M536,271 542,258 M526,266 532,254 M516,261 522,249 M506,255 512,244 M496,250 502,239 M486,245 492,235 M476,240 482,230 M466,236 472,225 M456,231 462,220 M446,226 451,216 M436,221 441,211 M425,218 431,206 M415,213 421,201 M405,208 411,196 M395,204 401,192"></path>
        </g>
    <a href="https://www.freepik.com/vectors/vintage">Vintage vector created by macrovector - www.freepik.com</a>-->

    <!--  <path d="M20,42 28,42 28,35 32,35 32,42 40,42 40,32 45,32 30,20 15,32 20,32 Z M20,578 30,578 30,583 40,570 30,557 30,562 20, 562Z" fill="rgba(0,0,0,0.25)"></path>
    -->

       <defs
              id="defs6"
            >
            <linearGradient
                id="linearGradient3760"
              >
              <stop
                  id="stop3762"
                  style="stop-color:#ff0000"
                  offset="0"
              />
              <stop
                  id="stop3764"
                  style="stop-color:#000000"
                  offset="1"
              />
            </linearGradient
            >
            <filter
                id="filter3798"
                height="1.916"
                width="1.8597"
                color-interpolation-filters="sRGB"
                y="-.45798"
                x="-.42986"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur3800"
                  stdDeviation="4.2729117"
                  inkscape:collect="always"
              />
            </filter
            >
            <linearGradient
                id="linearGradient3814"
                y2="92.04"
                xlink:href="#linearGradient3760"
                gradientUnits="userSpaceOnUse"
                x2="253.63"
                y1="67.853"
                x1="253.85"
                inkscape:collect="always"
            />
            <linearGradient
                id="linearGradient3816"
                y2="71.18"
                xlink:href="#linearGradient3760"
                gradientUnits="userSpaceOnUse"
                x2="254.89"
                gradientTransform="matrix(1 0 0 1.0361 -.20927 -2.18)"
                y1="32.047"
                x1="254.89"
                inkscape:collect="always"
            />
            <linearGradient
                id="linearGradient4729"
                y2="-96.183"
                gradientUnits="userSpaceOnUse"
                x2="469.08"
                y1="-50.311"
                x1="469.08"
                inkscape:collect="always"
              >
              <stop
                  id="stop4072-2-2"
                  style="stop-color:#000000"
                  offset="0"
              />
              <stop
                  id="stop4074-3-5"
                  style="stop-color:#000000;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <linearGradient
                id="linearGradient4731"
                y2="-76.669"
                gradientUnits="userSpaceOnUse"
                x2="471.74"
                y1="-84.66"
                x1="471.7"
                inkscape:collect="always"
              >
              <stop
                  id="stop4056-1-3"
                  style="stop-color:#cccccc"
                  offset="0"
              />
              <stop
                  id="stop4058-1-3"
                  style="stop-color:#cccccc;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <linearGradient
                id="linearGradient4733"
                y2="-79.43"
                gradientUnits="userSpaceOnUse"
                x2="485.56"
                y1="-99.735"
                x1="485.9"
                inkscape:collect="always"
              >
              <stop
                  id="stop4064-7-3"
                  style="stop-color:#ffe680"
                  offset="0"
              />
              <stop
                  id="stop4066-4-8"
                  style="stop-color:#ffe680;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <filter
                id="filter3798-7"
                width="1.8597"
                y="-.45798"
                x="-.42986"
                height="1.916"
                color-interpolation-filters="sRGB"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur3800-4"
                  stdDeviation="4.2729117"
                  inkscape:collect="always"
              />
            </filter
            >
            <filter
                id="filter6025"
                height="1.3933"
                width="1.1837"
                color-interpolation-filters="sRGB"
                y="-.19667"
                x="-.091847"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur6027"
                  stdDeviation="8.9247651"
                  inkscape:collect="always"
              />
            </filter
            >
            <filter
                id="filter6068"
                height="1.3872"
                width="1.0674"
                color-interpolation-filters="sRGB"
                y="-.19361"
                x="-.033689"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur6070"
                  stdDeviation="8.3084212"
                  inkscape:collect="always"
              />
            </filter
            >
            <linearGradient
                id="linearGradient7017"
                y2="-96.183"
                gradientUnits="userSpaceOnUse"
                x2="469.08"
                gradientTransform="matrix(-.068390 -3.4217 .72080 -.10252 -1324.1 1263.3)"
                y1="-50.311"
                x1="469.08"
                inkscape:collect="always"
              >
              <stop
                  id="stop4072-8-7-5-9"
                  style="stop-color:#000000"
                  offset="0"
              />
              <stop
                  id="stop4074-6-8-0-0"
                  style="stop-color:#000000;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <linearGradient
                id="linearGradient7019"
                y2="-76.669"
                gradientUnits="userSpaceOnUse"
                x2="471.74"
                gradientTransform="matrix(-.068390 -3.4217 .72080 -.10252 -1324.1 1263.3)"
                y1="-84.66"
                x1="471.7"
                inkscape:collect="always"
              >
              <stop
                  id="stop4056-2-35-9-8"
                  style="stop-color:#cccccc"
                  offset="0"
              />
              <stop
                  id="stop4058-8-9-3-5"
                  style="stop-color:#cccccc;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <linearGradient
                id="linearGradient7021"
                y2="-79.43"
                gradientUnits="userSpaceOnUse"
                x2="485.56"
                gradientTransform="matrix(-.068390 -3.4217 .72080 -.10252 -1324.1 1263.3)"
                y1="-99.735"
                x1="485.9"
                inkscape:collect="always"
              >
              <stop
                  id="stop4064-2-07-7-0"
                  style="stop-color:#ffe680"
                  offset="0"
              />
              <stop
                  id="stop4066-48-63-9-8"
                  style="stop-color:#ffe680;stop-opacity:0"
                  offset="1"
              />
            </linearGradient
            >
            <filter
                id="filter7060"
                height="1.3996"
                width="1.6008"
                color-interpolation-filters="sRGB"
                y="-.19981"
                x="-.30042"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur7062"
                  stdDeviation="29.967016"
                  inkscape:collect="always"
              />
            </filter
            >
            <filter
                id="filter7060-4"
                width="1.6008"
                y="-.19981"
                x="-.30042"
                height="1.3996"
                color-interpolation-filters="sRGB"
                inkscape:collect="always"
              >
              <feGaussianBlur
                  id="feGaussianBlur7062-7"
                  stdDeviation="29.967016"
                  inkscape:collect="always"
              />
            </filter
            >
            <linearGradient
                id="linearGradient4885"
                y2="314.48"
                xlink:href="#linearGradient3760"
                gradientUnits="userSpaceOnUse"
                x2="-233.96"
                y1="314.48"
                x1="-399.45"
                inkscape:collect="always"
            />
          </defs
          >
          <sodipodi:namedview
              id="namedview4"
              fit-margin-left="0"
              inkscape:zoom="0.42237137"
              borderopacity="1"
              inkscape:current-layer="svg2"
              inkscape:cx="56.160728"
              inkscape:cy="316.61859"
              inkscape:window-maximized="1"
              showgrid="false"
              fit-margin-right="0"
              bordercolor="#666666"
              inkscape:window-x="-8"
              guidetolerance="10"
              objecttolerance="10"
              inkscape:window-y="-8"
              fit-margin-bottom="0"
              inkscape:window-width="1280"
              inkscape:pageopacity="0"
              inkscape:pageshadow="2"
              pagecolor="#ffffff"
              gridtolerance="10"
              inkscape:window-height="738"
              showborder="true"
              fit-margin-top="0"
          />
          <g
              id="g4913"
              transform="translate(87.979 -135.33)"
            >

            <g
                id="g7321"
                transform="matrix(.05 0 0 .14 415.62 230.98)"
              >

              <path
                  id="rect7023"
                  sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#2b0000"
                  inkscape:connector-curvature="0"
                  d="m-1057.2 1126.5-54.966-118.9-30.228-53.351-12.621-14.542-16.665-14.414-11.977-7.0689-23.236-4.2596-14.956-18.096-3.2856-18.28-6.67-2.9353-0.7939-5.4942 2.8354-2.7213 7.6464 2.086-0.4963-71.515-4.2796-0.93187-0.3719-30.182 3.426-5.3986 5.0138-4.9031 8.1594-2.1339 12.512 0.57057 11.168 2.9846 12.247 3.8298 13.457 6.5691 18.888 11.524 14.289 11.821 10.297 9.6648 9.9962 9.3788 11.757 13.448 13.484 18.092 9.2505 15.065 147.99-16.537 7.0318-74.853 1.2126-22.504 8.9236-10.379 13.862-0.83736 19.629 3.8491 47.494 24.127 49.49 48.121 34.237 52.118 31.229 62.368 30.016 62.924 73.906 115.24 41.096 49.359 76.328 74.008 50.953 58.911 55.349 74.596 47.664 76.52 33.233 62.385 29.423 59.782 34.643 65.985 49.005 70.203 59.746 59.938 51.146 34.347 130.18 52.538 80.855 33.67 32.532 38.33 21.02 58.497 3.6518 40.602-4.8813 41.014-14.747 23.978-24.375 15.134-302.8 54.144-11.281-1.5343-130.9-73.17-57.622-25.482-55.157-26.21-49.637-31.758-49.597-41.89-46.388-50.94-41.844-57.32-33.869-53.622-23.005-43.082-49.611-107.22-51.444-98.429-85.584-120.8-103.84-113.67-35.447-49.084-45.138-69.577z"
              />
              <path
                  id="rect7046"
                  sodipodi:nodetypes="ccccccccccccccscccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#008000"
                  inkscape:connector-curvature="0"
                  d="m-1217.3 899.36-6.0262-139.87 11.033-9.7637 23.35-0.72938 32.058 13.787 35.432 24.248 40.471 46.304 10.419 17.613 31.58-2.3792 41.116-4.2688 71.907-8.43 5.3428-5.6326 4.1319-55.057 2.823-36.882s3.2723-6.4638 6.0998-8.5096c2.5395-1.8375 8.9728-2.8137 8.9728-2.8137l13.61 0.11108 14.899 3.3163 19.386 8.0218 34.978 21.625 45.565 45.489 39.052 61.147 23.259 53.375 23.624 46.93 32.702 61.928 49.719 71.016 48.898 56.138 57.553 51.301 73.357 84.544 110.23 172.57 58.443 119.12 37.101 66.838 41.192 48.342 44.73 46.607 53.265 36.992 146.14 57.372 55.44 21.504 24.833 18.516 15.271 20.935 17.478 38.838 9.2639 41.422 0.3325 36.612-3.4833 27.788-10.242 17.887-13.642 14.619-20.76 6.779-256.04 48.581-45.278 6.697-31.619-13.672-11.638-19.48-10.973-3.8993-109.58-48.718-97.679-46.267-44.74-29.57-24.34-21.604-24.996-21.148-40.727-46.507-62.815-85.205-51.409-98.207-33.702-76.465-66.588-121.26-37.005-55.864-59.909-72.42-40.027-40.35-44.333-51.785-24.489-33.366-23.848-33.96-20.195-33.351-18.18-31.046-13.718-28.256-27.944-54.888-33.022-75.784-23.435-41.856-21.69-23.513-18.794-17.216-22.353-4.4468z"
              />
              <path
                  id="rect7049"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-861.74 882.16 10.315-2.7564s63.214 124.39 98.064 179.7c36.652 58.168 131.02 157.88 131.02 157.88l-10.924 8.1675s-97.398-100.88-131.83-160.06c-34.356-59.051-96.647-182.94-96.647-182.94z"
              />
              <path
                  id="rect7049-4"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060-4);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-480.88 1388.4 10.315-2.7564s49.82 111 84.671 166.31c36.652 58.168 107.58 184.67 107.58 184.67l-10.924 8.1675s-73.96-127.66-108.39-186.84c-34.356-59.051-83.254-169.54-83.254-169.54z"
              />
              <path
                  id="rect7093"
                  sodipodi:nodetypes="cscsccccssssssssssssssssssssssssssssssssssssssssssssssssssscccsscccsccccscscc"
                  style="fill-rule:evenodd;fill:#004100"
                  inkscape:connector-curvature="0"
                  d="m-909.03 1202.9s59.773 61.077 84.924 91.616c22.608 27.45 58.352 82.35 58.352 82.35s48.951 63.756 69.283 100.96c27.017 49.437 72.765 158.97 72.765 158.97l116.13 167.55 147.96 89.335 118.77 47.795s30.758 24.868 37.759 42.469c22.048 55.433 15.014 62.41 21.748 67.967 24.6 20.304 24.137 20.896 68.552 37.216 3.346 1.2295-5.0628 8.9567 74.863-2.9166 12.574-1.868 137.72-31.051 149.58-33.532 3.7842-0.7914 19.856-3.8877 24.99-14.548 9.5383-19.804 8.9031-59.218 6.6723-75.315-1.1165-8.0572-6.6256-44.676-32.167-68.982-0.6257-0.5955-101-49.091-109.5-53.674-1.7358-0.9363-27.791-6.2364-82.914-30.69-24.057-10.672-71.405-41.874-75.15-45.117-0.7655-0.6629-53.036-50.669-62.252-61.508-1.083-1.2737-26.142-33.344-56.485-87.721-31.726-56.857-68.837-136.23-72.026-142.3-3.8067-7.2503-23.398-50.384-41.989-77.136-38.64-55.604-66.76-95.319-87.35-119.31-15.617-18.2-94.04-88.755-117.29-117.27-35.336-43.336-44.593-52.755-72.727-101.21-0.60489-1.0418-21.283-43.081-33.042-60.151-4.0049-5.8136-39.692-86.566-61.216-120.07-26.776-41.685-44.142-71.34-71.254-96.765-28.472-26.699-80.566-36.887-81.86-44.787-0.49596-3.0282 12.457-11.88 27.666-9.31 21.524 3.6377 47.986 20.08 50.871 21.178 10.312 3.9253 28.902 21.916 42.918 33.705 5.648 4.7504 39.206 50.253 47.163 67.425 3.0189 6.5146 54.824 109.65 64.553 129.77 2.4861 5.1397 43.885 77.112 52.225 88.342 21.236 28.596 69.815 85.213 73.784 89.889 2.2267 2.6234 29.488 22.935 54.409 48.906 22.477 23.424 44.024 50.302 47.193 53.733 2.9751 3.2214 24.143 26.009 46.121 56.059 25.154 34.393 51.37 76.483 52.585 78.534 8.6594 14.619 54.724 95.91 60.933 110.77 17.462 41.778 57.584 112.43 58.412 114.26 4.7575 10.514 45.202 64.256 46.45 66.423 4.8266 8.384 45.359 46.475 46.728 48.285 15.614 20.655 67.525 48.747 73.195 51.172 50.47 21.585 99.387 40.859 107.01 43.52 36.805 12.851 80.549 26.271 98.139 42.332 12.475 11.391 29.245 34.63 38.418 53.433 10.527 21.579 15.439 54.503 15.81 60.165 0.6781 10.343 0.4472 52.972-3.1911 60.832-11.573 25.002-17.656 29.662-33.124 37.313-17.398 8.6052-97.601 17.59-141.24 26.644-20.983 4.3532-140.65 26.023-162.22 29.583-13.316 2.1974-28.246-6.3282-41.141-16.097-15.418-11.68-6.6343-13.302-9.1221-14.435-69.116-31.48-186.83-81.974-204.5-89.397-22.89-9.6175-39.121-28.53-60.44-39.606-66.482-34.54-100.6-114.17-142.01-157.57-31.327-32.835-64.445-119.93-64.445-119.93l-72.93-149.7-45.69-77.269s-34.318-47.227-57.098-73.266c-21.824-24.946-52.525-51.627-76.363-79.632-25.938-30.47-72.265-95.856-72.265-95.856l-48.897-81.398-69.139-147.48s-29.272-55.574-48.052-73.891c-15.781-15.392-57.997-18.949-57.997-18.949l-0.1707-80.114-1.3523-30.298-2.5785-26.762s30.994 9.1829 45.308 18.51c12.57 8.1906 35.342 34.042 35.342 34.042s28.289 26.675 40.597 55.584c42.538 99.914 114.17 230.73 114.17 230.73z"
              />


            </g
            >
          </g
          >

          <g
              id="g4914"
              transform="translate(87.979 -135.33)"
            >

            <g
                id="g7322"
                transform="matrix(.05 0 0 .14 115.62 60.98)"

              >

              <path
                  id="rect7024"
                  sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#2b0000"
                  inkscape:connector-curvature="0"
                  d="m-1057.2 1126.5-54.966-118.9-30.228-53.351-12.621-14.542-16.665-14.414-11.977-7.0689-23.236-4.2596-14.956-18.096-3.2856-18.28-6.67-2.9353-0.7939-5.4942 2.8354-2.7213 7.6464 2.086-0.4963-71.515-4.2796-0.93187-0.3719-30.182 3.426-5.3986 5.0138-4.9031 8.1594-2.1339 12.512 0.57057 11.168 2.9846 12.247 3.8298 13.457 6.5691 18.888 11.524 14.289 11.821 10.297 9.6648 9.9962 9.3788 11.757 13.448 13.484 18.092 9.2505 15.065 147.99-16.537 7.0318-74.853 1.2126-22.504 8.9236-10.379 13.862-0.83736 19.629 3.8491 47.494 24.127 49.49 48.121 34.237 52.118 31.229 62.368 30.016 62.924 73.906 115.24 41.096 49.359 76.328 74.008 50.953 58.911 55.349 74.596 47.664 76.52 33.233 62.385 29.423 59.782 34.643 65.985 49.005 70.203 59.746 59.938 51.146 34.347 130.18 52.538 80.855 33.67 32.532 38.33 21.02 58.497 3.6518 40.602-4.8813 41.014-14.747 23.978-24.375 15.134-302.8 54.144-11.281-1.5343-130.9-73.17-57.622-25.482-55.157-26.21-49.637-31.758-49.597-41.89-46.388-50.94-41.844-57.32-33.869-53.622-23.005-43.082-49.611-107.22-51.444-98.429-85.584-120.8-103.84-113.67-35.447-49.084-45.138-69.577z"
              />
              <path
                  id="rect7047"
                  sodipodi:nodetypes="ccccccccccccccscccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#f04e39"
                  inkscape:connector-curvature="0"
                  d="m-1217.3 899.36-6.0262-139.87 11.033-9.7637 23.35-0.72938 32.058 13.787 35.432 24.248 40.471 46.304 10.419 17.613 31.58-2.3792 41.116-4.2688 71.907-8.43 5.3428-5.6326 4.1319-55.057 2.823-36.882s3.2723-6.4638 6.0998-8.5096c2.5395-1.8375 8.9728-2.8137 8.9728-2.8137l13.61 0.11108 14.899 3.3163 19.386 8.0218 34.978 21.625 45.565 45.489 39.052 61.147 23.259 53.375 23.624 46.93 32.702 61.928 49.719 71.016 48.898 56.138 57.553 51.301 73.357 84.544 110.23 172.57 58.443 119.12 37.101 66.838 41.192 48.342 44.73 46.607 53.265 36.992 146.14 57.372 55.44 21.504 24.833 18.516 15.271 20.935 17.478 38.838 9.2639 41.422 0.3325 36.612-3.4833 27.788-10.242 17.887-13.642 14.619-20.76 6.779-256.04 48.581-45.278 6.697-31.619-13.672-11.638-19.48-10.973-3.8993-109.58-48.718-97.679-46.267-44.74-29.57-24.34-21.604-24.996-21.148-40.727-46.507-62.815-85.205-51.409-98.207-33.702-76.465-66.588-121.26-37.005-55.864-59.909-72.42-40.027-40.35-44.333-51.785-24.489-33.366-23.848-33.96-20.195-33.351-18.18-31.046-13.718-28.256-27.944-54.888-33.022-75.784-23.435-41.856-21.69-23.513-18.794-17.216-22.353-4.4468z"
              />
              <path
                  id="rect7050"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-861.74 882.16 10.315-2.7564s63.214 124.39 98.064 179.7c36.652 58.168 131.02 157.88 131.02 157.88l-10.924 8.1675s-97.398-100.88-131.83-160.06c-34.356-59.051-96.647-182.94-96.647-182.94z"
              />
              <path
                  id="rect7050-4"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060-4);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-480.88 1388.4 10.315-2.7564s49.82 111 84.671 166.31c36.652 58.168 107.58 184.67 107.58 184.67l-10.924 8.1675s-73.96-127.66-108.39-186.84c-34.356-59.051-83.254-169.54-83.254-169.54z"
              />
              <path
                  id="rect7094"
                  sodipodi:nodetypes="cscsccccssssssssssssssssssssssssssssssssssssssssssssssssssscccsscccsccccscscc"
                  style="fill-rule:evenodd;fill:#a61e0c"
                  inkscape:connector-curvature="0"
                  d="m-909.03 1202.9s59.773 61.077 84.924 91.616c22.608 27.45 58.352 82.35 58.352 82.35s48.951 63.756 69.283 100.96c27.017 49.437 72.765 158.97 72.765 158.97l116.13 167.55 147.96 89.335 118.77 47.795s30.758 24.868 37.759 42.469c22.048 55.433 15.014 62.41 21.748 67.967 24.6 20.304 24.137 20.896 68.552 37.216 3.346 1.2295-5.0628 8.9567 74.863-2.9166 12.574-1.868 137.72-31.051 149.58-33.532 3.7842-0.7914 19.856-3.8877 24.99-14.548 9.5383-19.804 8.9031-59.218 6.6723-75.315-1.1165-8.0572-6.6256-44.676-32.167-68.982-0.6257-0.5955-101-49.091-109.5-53.674-1.7358-0.9363-27.791-6.2364-82.914-30.69-24.057-10.672-71.405-41.874-75.15-45.117-0.7655-0.6629-53.036-50.669-62.252-61.508-1.083-1.2737-26.142-33.344-56.485-87.721-31.726-56.857-68.837-136.23-72.026-142.3-3.8067-7.2503-23.398-50.384-41.989-77.136-38.64-55.604-66.76-95.319-87.35-119.31-15.617-18.2-94.04-88.755-117.29-117.27-35.336-43.336-44.593-52.755-72.727-101.21-0.60489-1.0418-21.283-43.081-33.042-60.151-4.0049-5.8136-39.692-86.566-61.216-120.07-26.776-41.685-44.142-71.34-71.254-96.765-28.472-26.699-80.566-36.887-81.86-44.787-0.49596-3.0282 12.457-11.88 27.666-9.31 21.524 3.6377 47.986 20.08 50.871 21.178 10.312 3.9253 28.902 21.916 42.918 33.705 5.648 4.7504 39.206 50.253 47.163 67.425 3.0189 6.5146 54.824 109.65 64.553 129.77 2.4861 5.1397 43.885 77.112 52.225 88.342 21.236 28.596 69.815 85.213 73.784 89.889 2.2267 2.6234 29.488 22.935 54.409 48.906 22.477 23.424 44.024 50.302 47.193 53.733 2.9751 3.2214 24.143 26.009 46.121 56.059 25.154 34.393 51.37 76.483 52.585 78.534 8.6594 14.619 54.724 95.91 60.933 110.77 17.462 41.778 57.584 112.43 58.412 114.26 4.7575 10.514 45.202 64.256 46.45 66.423 4.8266 8.384 45.359 46.475 46.728 48.285 15.614 20.655 67.525 48.747 73.195 51.172 50.47 21.585 99.387 40.859 107.01 43.52 36.805 12.851 80.549 26.271 98.139 42.332 12.475 11.391 29.245 34.63 38.418 53.433 10.527 21.579 15.439 54.503 15.81 60.165 0.6781 10.343 0.4472 52.972-3.1911 60.832-11.573 25.002-17.656 29.662-33.124 37.313-17.398 8.6052-97.601 17.59-141.24 26.644-20.983 4.3532-140.65 26.023-162.22 29.583-13.316 2.1974-28.246-6.3282-41.141-16.097-15.418-11.68-6.6343-13.302-9.1221-14.435-69.116-31.48-186.83-81.974-204.5-89.397-22.89-9.6175-39.121-28.53-60.44-39.606-66.482-34.54-100.6-114.17-142.01-157.57-31.327-32.835-64.445-119.93-64.445-119.93l-72.93-149.7-45.69-77.269s-34.318-47.227-57.098-73.266c-21.824-24.946-52.525-51.627-76.363-79.632-25.938-30.47-72.265-95.856-72.265-95.856l-48.897-81.398-69.139-147.48s-29.272-55.574-48.052-73.891c-15.781-15.392-57.997-18.949-57.997-18.949l-0.1707-80.114-1.3523-30.298-2.5785-26.762s30.994 9.1829 45.308 18.51c12.57 8.1906 35.342 34.042 35.342 34.042s28.289 26.675 40.597 55.584c42.538 99.914 114.17 230.73 114.17 230.73z"
              />


            </g
            >
          </g
          >

          <g
              id="g4915"
              transform="translate(87.979 -135.33)"
            >

            <g
                id="g7323"
                transform="matrix(.05 0 0 .14 125.62 410.98)"

              >

              <path
                  id="rect7024"
                  sodipodi:nodetypes="ccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#2b0000"
                  inkscape:connector-curvature="0"
                  d="m-1057.2 1126.5-54.966-118.9-30.228-53.351-12.621-14.542-16.665-14.414-11.977-7.0689-23.236-4.2596-14.956-18.096-3.2856-18.28-6.67-2.9353-0.7939-5.4942 2.8354-2.7213 7.6464 2.086-0.4963-71.515-4.2796-0.93187-0.3719-30.182 3.426-5.3986 5.0138-4.9031 8.1594-2.1339 12.512 0.57057 11.168 2.9846 12.247 3.8298 13.457 6.5691 18.888 11.524 14.289 11.821 10.297 9.6648 9.9962 9.3788 11.757 13.448 13.484 18.092 9.2505 15.065 147.99-16.537 7.0318-74.853 1.2126-22.504 8.9236-10.379 13.862-0.83736 19.629 3.8491 47.494 24.127 49.49 48.121 34.237 52.118 31.229 62.368 30.016 62.924 73.906 115.24 41.096 49.359 76.328 74.008 50.953 58.911 55.349 74.596 47.664 76.52 33.233 62.385 29.423 59.782 34.643 65.985 49.005 70.203 59.746 59.938 51.146 34.347 130.18 52.538 80.855 33.67 32.532 38.33 21.02 58.497 3.6518 40.602-4.8813 41.014-14.747 23.978-24.375 15.134-302.8 54.144-11.281-1.5343-130.9-73.17-57.622-25.482-55.157-26.21-49.637-31.758-49.597-41.89-46.388-50.94-41.844-57.32-33.869-53.622-23.005-43.082-49.611-107.22-51.444-98.429-85.584-120.8-103.84-113.67-35.447-49.084-45.138-69.577z"
              />
              <path
                  id="rect7047"
                  sodipodi:nodetypes="ccccccccccccccscccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc"
                  style="fill-rule:evenodd;fill:#f04e39"
                  inkscape:connector-curvature="0"
                  d="m-1217.3 899.36-6.0262-139.87 11.033-9.7637 23.35-0.72938 32.058 13.787 35.432 24.248 40.471 46.304 10.419 17.613 31.58-2.3792 41.116-4.2688 71.907-8.43 5.3428-5.6326 4.1319-55.057 2.823-36.882s3.2723-6.4638 6.0998-8.5096c2.5395-1.8375 8.9728-2.8137 8.9728-2.8137l13.61 0.11108 14.899 3.3163 19.386 8.0218 34.978 21.625 45.565 45.489 39.052 61.147 23.259 53.375 23.624 46.93 32.702 61.928 49.719 71.016 48.898 56.138 57.553 51.301 73.357 84.544 110.23 172.57 58.443 119.12 37.101 66.838 41.192 48.342 44.73 46.607 53.265 36.992 146.14 57.372 55.44 21.504 24.833 18.516 15.271 20.935 17.478 38.838 9.2639 41.422 0.3325 36.612-3.4833 27.788-10.242 17.887-13.642 14.619-20.76 6.779-256.04 48.581-45.278 6.697-31.619-13.672-11.638-19.48-10.973-3.8993-109.58-48.718-97.679-46.267-44.74-29.57-24.34-21.604-24.996-21.148-40.727-46.507-62.815-85.205-51.409-98.207-33.702-76.465-66.588-121.26-37.005-55.864-59.909-72.42-40.027-40.35-44.333-51.785-24.489-33.366-23.848-33.96-20.195-33.351-18.18-31.046-13.718-28.256-27.944-54.888-33.022-75.784-23.435-41.856-21.69-23.513-18.794-17.216-22.353-4.4468z"
              />
              <path
                  id="rect7050"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-861.74 882.16 10.315-2.7564s63.214 124.39 98.064 179.7c36.652 58.168 131.02 157.88 131.02 157.88l-10.924 8.1675s-97.398-100.88-131.83-160.06c-34.356-59.051-96.647-182.94-96.647-182.94z"
              />
              <path
                  id="rect7050-4"
                  sodipodi:nodetypes="ccsccsc"
                  style="filter:url(#filter7060-4);fill-rule:evenodd;fill:#ffffff;fill-opacity:.79365"
                  inkscape:connector-curvature="0"
                  d="m-480.88 1388.4 10.315-2.7564s49.82 111 84.671 166.31c36.652 58.168 107.58 184.67 107.58 184.67l-10.924 8.1675s-73.96-127.66-108.39-186.84c-34.356-59.051-83.254-169.54-83.254-169.54z"
              />
              <path
                  id="rect7094"
                  sodipodi:nodetypes="cscsccccssssssssssssssssssssssssssssssssssssssssssssssssssscccsscccsccccscscc"
                  style="fill-rule:evenodd;fill:#a61e0c"
                  inkscape:connector-curvature="0"
                  d="m-909.03 1202.9s59.773 61.077 84.924 91.616c22.608 27.45 58.352 82.35 58.352 82.35s48.951 63.756 69.283 100.96c27.017 49.437 72.765 158.97 72.765 158.97l116.13 167.55 147.96 89.335 118.77 47.795s30.758 24.868 37.759 42.469c22.048 55.433 15.014 62.41 21.748 67.967 24.6 20.304 24.137 20.896 68.552 37.216 3.346 1.2295-5.0628 8.9567 74.863-2.9166 12.574-1.868 137.72-31.051 149.58-33.532 3.7842-0.7914 19.856-3.8877 24.99-14.548 9.5383-19.804 8.9031-59.218 6.6723-75.315-1.1165-8.0572-6.6256-44.676-32.167-68.982-0.6257-0.5955-101-49.091-109.5-53.674-1.7358-0.9363-27.791-6.2364-82.914-30.69-24.057-10.672-71.405-41.874-75.15-45.117-0.7655-0.6629-53.036-50.669-62.252-61.508-1.083-1.2737-26.142-33.344-56.485-87.721-31.726-56.857-68.837-136.23-72.026-142.3-3.8067-7.2503-23.398-50.384-41.989-77.136-38.64-55.604-66.76-95.319-87.35-119.31-15.617-18.2-94.04-88.755-117.29-117.27-35.336-43.336-44.593-52.755-72.727-101.21-0.60489-1.0418-21.283-43.081-33.042-60.151-4.0049-5.8136-39.692-86.566-61.216-120.07-26.776-41.685-44.142-71.34-71.254-96.765-28.472-26.699-80.566-36.887-81.86-44.787-0.49596-3.0282 12.457-11.88 27.666-9.31 21.524 3.6377 47.986 20.08 50.871 21.178 10.312 3.9253 28.902 21.916 42.918 33.705 5.648 4.7504 39.206 50.253 47.163 67.425 3.0189 6.5146 54.824 109.65 64.553 129.77 2.4861 5.1397 43.885 77.112 52.225 88.342 21.236 28.596 69.815 85.213 73.784 89.889 2.2267 2.6234 29.488 22.935 54.409 48.906 22.477 23.424 44.024 50.302 47.193 53.733 2.9751 3.2214 24.143 26.009 46.121 56.059 25.154 34.393 51.37 76.483 52.585 78.534 8.6594 14.619 54.724 95.91 60.933 110.77 17.462 41.778 57.584 112.43 58.412 114.26 4.7575 10.514 45.202 64.256 46.45 66.423 4.8266 8.384 45.359 46.475 46.728 48.285 15.614 20.655 67.525 48.747 73.195 51.172 50.47 21.585 99.387 40.859 107.01 43.52 36.805 12.851 80.549 26.271 98.139 42.332 12.475 11.391 29.245 34.63 38.418 53.433 10.527 21.579 15.439 54.503 15.81 60.165 0.6781 10.343 0.4472 52.972-3.1911 60.832-11.573 25.002-17.656 29.662-33.124 37.313-17.398 8.6052-97.601 17.59-141.24 26.644-20.983 4.3532-140.65 26.023-162.22 29.583-13.316 2.1974-28.246-6.3282-41.141-16.097-15.418-11.68-6.6343-13.302-9.1221-14.435-69.116-31.48-186.83-81.974-204.5-89.397-22.89-9.6175-39.121-28.53-60.44-39.606-66.482-34.54-100.6-114.17-142.01-157.57-31.327-32.835-64.445-119.93-64.445-119.93l-72.93-149.7-45.69-77.269s-34.318-47.227-57.098-73.266c-21.824-24.946-52.525-51.627-76.363-79.632-25.938-30.47-72.265-95.856-72.265-95.856l-48.897-81.398-69.139-147.48s-29.272-55.574-48.052-73.891c-15.781-15.392-57.997-18.949-57.997-18.949l-0.1707-80.114-1.3523-30.298-2.5785-26.762s30.994 9.1829 45.308 18.51c12.57 8.1906 35.342 34.042 35.342 34.042s28.289 26.675 40.597 55.584c42.538 99.914 114.17 230.73 114.17 230.73z"
              />


            </g
            >
          </g
          >

          <metadata
            >
            <rdf:RDF
              >
              <cc:Work
                >
                <dc:format
                  >image/svg+xml</dc:format
                >
                <dc:type
                    rdf:resource="http://purl.org/dc/dcmitype/StillImage"
                />
                <cc:license
                    rdf:resource="http://creativecommons.org/licenses/publicdomain/"
                />
                <dc:publisher
                  >
                  <cc:Agent
                      rdf:about="http://openclipart.org/"
                    >
                    <dc:title
                      >Openclipart</dc:title
                    >
                  </cc:Agent
                  >
                </dc:publisher
                >
              </cc:Work
              >
              <cc:License
                  rdf:about="http://creativecommons.org/licenses/publicdomain/"
                >
                <cc:permits
                    rdf:resource="http://creativecommons.org/ns#Reproduction"
                />
                <cc:permits
                    rdf:resource="http://creativecommons.org/ns#Distribution"
                />
                <cc:permits
                    rdf:resource="http://creativecommons.org/ns#DerivativeWorks"
                />
              </cc:License
              >
            </rdf:RDF
            >
          </metadata
          >
    <!--
          <g class="ladders-big">
            <path d="M89,574 140,392 M102,578 153,396 M388,581 385,508 M402,580 399,507 M449,552 554,395 M460,560 565,403 M320,516 333,444 M334,518 347,446 M24,436 74,329 M36,442 87,334 M430,458 210,99 M441,450 222,93 M264,393 214,339 M273,384 224,330 M563,284 391,203 M568,271 396,190 M570,149 559,31 M584,148 573,30 M142,158 155,40 M156,160 169,42 M397,101 379,30 M411,97 392,26"></path>
          </g>
          <g class="ladders-small">
            <path d="M91,568 104,573 M94,556 105,561 M97,544 108,549 M100,532 111,537 M103,520 114,525 M107,508 118,513 M111,496 122,501 M114,484 125,489 M117,472 128,477 M121,460 132,465 M124,448 135,453 M128,436 139,441 M131,424 142,429 M134,412 145,417 M138,400 149,405 M388,575 401,574 M388,563 401,562 M388,552 401,551 M388,541 401,540 M388,530 400,529 M388,518 400,517 M452,546 464,555 M459,536 470,544 M466,526 476,533 M473,516 482,522 M479,508 490,515 M485,498 496,506 M492,488 502,495 M498,479 509,486 M504,469 515,477 M512,459 522,467 M517,449 528,457 M523,440 534,448 M530,430 541,438 M536,421 548,429 M542,412 554,419 M549,402 560,409 M322,510 335,512 M324,498 337,500 M326,486 339,488 M328,475 341,477 M330,463 343,465 M332,452 345,454 M258,388 268,378 M250,379 260,369 M243,370 252,361 M235,362 245,352 M227,353 236,344 M219,345 229,335 M27,430 40,436 M32,419 45,425 M37,408 49,414 M42,398 54,404 M47,388 59,394 M51,377 64,383 M56,366 69,372 M61,356 75,362 M66,345 79,351 M71,335 84,341 M427,453 438,444 M420,443 432,434 M414,433 426,424 M408,423 420,414 M402,413 413,404 M395,402 407,393 M388,391 400,382 M381,379 393,370 M374,368 386,359 M367,356 378,347 M359,344 371,336 M352,332 364,324 M345,320 357,312 M338,308 350,300 M330,296 342,288 M323,284 335,276 M316,272 328,264 M308,260 320,252 M301,248 313,240 M294,236 305,228 M287,224 298,216 M280,212 291,205 M273,200 284,193 M267,188 277,181 M259,175 269,168 M251,163 261,156 M244,151 254,144 M236,139 246,132 M229,127 239,120 M222,115 232,108 M215,103 225,96 M143,152 157,154 M144,140 158,142 M145,128 159,130 M146,116 160,118 M147,104 161,106 M149,92 163,94 M150,80 164,82 M151,68 165,70 M153,56 167,58 M154,44 168,46 M396,95 409,91 M393,84 406,80 M390,73 403,69 M387,62 400,58 M384,51 397,47 M381,40 394,36 M570,143 583,142 M568,130 582,129 M566,117 580,116 M565,104 577,103 M564,91 576,90 M563,78 575,77 M562,65 574,64 M561,52 573,51 M560,38 572,37 M556,281 562,268 M546,276 552,263 M536,271 542,258 M526,266 532,254 M516,261 522,249 M506,255 512,244 M496,250 502,239 M486,245 492,235 M476,240 482,230 M466,236 472,225 M456,231 462,220 M446,226 451,216 M436,221 441,211 M425,218 431,206 M415,213 421,201 M405,208 411,196 M395,204 401,192"></path>
          </g>-->
          <!--<path d="M20,42 28,42 28,35 32,35 32,42 40,42 40,32 45,32 30,20 15,32 20,32 Z M20,578 30,578 30,583 40,570 30,557 30,562 20, 562Z" fill="rgba(0,0,0,0.25)"></path>
          -->

    <!--
          <path class="snake" d="M 90,226 C 98,257 69,322 128,332 187,342 181,381 120,382 59,383 53,425 54,433 56,450 87,467 87,481 87,495 76,506 76,512 84,505 95,496 96,480 97,464 60,447 64,425 68,403 99,392 134,391 169,390 219,344 131,322 94,313 100,279 101,256 102,233 101,229 100,225 105,223.62 106,214 96,210 86,205 65.75,211 83,223 85.88,225 88,226 90,226 Z" fill="#73880A"></path>
          <circle class="eye" cx="97" cy="212" r="5"></circle>
          <path class="snake" d="M 22,282 C 35,271 58,266 81,273 104,280 144,278 145,253 146,228 175,208 193,213 204,198 220,210 220,216 220,222 201,229 193,221 182,222 157,229 156,252 155,275 139,297 86,281 33,268 22,283 22,283 Z" fill="#D15600"></path>
          <circle class="eye" cx="203" cy="210" r="5"></circle>
          <path class="snake" d="M 453,271 C 433,285 396,289 400,261 405,233 394,223 369,223 343,224 319,167 376,161 379,168 401,168 402,156 403,143 376,143 375,152 300,162 333,233 366,233 402,233 388,258 389,266 390,281 414,309 453,272 Z" fill="#6BBA70"></path>
          <circle class="eye" cx="387" cy="148" r="5"></circle>
          <path class="snake" d="M 457,199 C 429,161 465,134 489,158 512,182 542,159 540,129 538,99 523,98 522,98 528,91 505,75 495,97 503,113 518,105 519,105 519,105 530,110 531,130 532,150 513,169 492,149 471,129 445,143 443,159 442,174 449,194 457,200 Z" fill="#C79810"></path>
          <circle class="eye" cx="512" cy="90" r="5"></circle>
          <path class="snake" d="M 441,95 C 457,93 479,72 445,52 415,33 434,16 451,16 468,16 489,39 492,40 495,28 521,33 521,43 521,54 496,54 490,48 490,48 466,23 450,25 434,27 439,43 459,51 479,61 473,101 441,96 Z" fill="#356AA0"></path>
          <circle class="eye" cx="504" cy="35" r="5"></circle>
          <path class="snake" d="M 278,457 C 291,438 262,428 247,444 230,464 193,450 231,420 256,400 300,425 335,395 349,381 334,338 334,338 334,338 348,325 325,324 301,322 306,341 326,340 334,358 346,401 285,401 231,401 205,416 205,446 206,472 244,462 250,452 258,441 281,435 278,458 Z" fill="#3F4C6B"></path>
          <circle class="eye" cx="327" cy="325" r="5"></circle>
          <path class="snake" d="M 343,584 C 352,567 344,553 320,553 296,553 286,562 279,568 272,573 238,592 238,558 237,524 253,517 253,517 253,517 270,517 270,509 270,498 238,501 247,514 227,537 230,556 230,561 229,567 239,605 281,575 324,544 349,562 343,585 Z" fill="#008C00"></path>
          <circle class="eye" cx="257" cy="503" r="5"></circle>
          <path class="snake" d="M 572,506 C 555,514 511,516 518,456 526,396 518,380 490,388 457,397 436,346 492,335 507,341 518,334 518,326 518,317 494,313 489,326 422,337 448,410 489,398 525,384 510,449 510,456 510,462 502,547 572,508 Z" fill="#D01F3C"></path>
          <circle class="eye" cx="503" cy="320" r="5"></circle>
          <path class="snake" d="M 19,138 C 45,154 84,152 63,119 43,87 59,85 79,84 99,83 103,77 94,40 85,46 73,39 72,32 72,25 109,13 102,35 117,69 108,100 79,94 52,88 70,114 73,118 82,127 83,190 18,138 Z" fill="#2096cE"></path>
          <circle class="eye" cx="89" cy="27" r="5"></circle>
          <path class="snake" d="M 322,152 C 302,168 282,153 285,137 287,120 287,121 275,110 263,99 295,79 291,62 287,45 297,30 318,38 324,51 346,48 346,39 347,30 327,20 320,31 295,18 274,33 280,57 286,82 252,86 262,111 265,118 280,122 275,137 271,148 291,185 322,154 Z" fill="#CC4444"></path>
          <circle class="eye" cx="330" cy="30" r="5"></circle>
    -->

    <g>

      </svg>
    <img src="img/2030_ODS.png" class="llegada" width="100px" alt="">
    <img class="d-flex inicio" src="img/hexagono_inicio.png" width="100px" alt="">
        <svg class="piece" id="piece-player-1" viewBox="0 0 100 100">
          <g id="strokePlayer1" transform="scale(.7,.7)">
            <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
            <circle cx="50" cy="21" r="20"></circle>
            <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
          </g>
        </svg>
        <svg class="piece" id="piece-player-2" viewBox="0 0 100 100">
          <g id="strokePlayer2" transform="scale(.7,.7)">
            <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
            <circle cx="50" cy="21" r="20"></circle>
            <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
          </g>
        </svg>
        <svg class="piece" id="piece-player-3" viewBox="0 0 100 100">
          <g id="strokePlayer3" transform="scale(.7,.7)">
            <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
            <circle cx="50" cy="21" r="20"></circle>
            <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
          </g>
        </svg>
        <svg class="piece" id="piece-player-4" viewBox="0 0 100 100">
          <g id="strokePlayer4" transform="scale(.7,.7)">
            <path d="M 50,1 C 50,1 80,85 80,85 70,96 60,99 50,99 40,99 30,96 20,85 20,85 50,1 50,1 Z"></path>
            <circle cx="50" cy="21" r="20"></circle>
            <rect x="44" y="25" width="12" height="22" stroke="none"></rect>
          </g>
        </svg>

      </div>

    </div>
    <div class="scrim" id="slide-popup">
      <div class="box">
        <h1>Tobogán!!!</h1>
        <div>Oh no! Te caíste por el tobogán!
          <div>


            <label id="slide-pl1-23" for="cb-pl1-4">Baja</label>
            <label id="slide-pl1-48" for="cb-pl1-29">Baja</label>
            <label id="slide-pl1-63" for="cb-pl1-44">Baja</label>
            <label id="slide-pl2-23" for="cb-pl2-4">Baja</label>
            <label id="slide-pl2-48" for="cb-pl2-29">Baja</label>
            <label id="slide-pl2-63" for="cb-pl2-44">Baja</label>
            <label id="slide-pl3-23" for="cb-pl3-4">Baja</label>
            <label id="slide-pl3-48" for="cb-pl3-29">Baja</label>
            <label id="slide-pl3-63" for="cb-pl3-44">Baja</label>
            <label id="slide-pl4-23" for="cb-pl4-4">Baja</label>
            <label id="slide-pl4-48" for="cb-pl4-29">Baja</label>
            <label id="slide-pl4-63" for="cb-pl4-44">Baja</label>


    <!--
            <label id="snake-pl1-16" for="cb-pl1-6">Baja</label>
            <label id="snake-pl1-46" for="cb-pl1-25">Baja</label>
            <label id="snake-pl1-49" for="cb-pl1-11">Baja</label>
            <label id="snake-pl1-62" for="cb-pl1-19">Baja</label>
            <label id="snake-pl1-64" for="cb-pl1-60">Baja</label>
            <label id="snake-pl1-74" for="cb-pl1-53">Baja</label>
            <label id="snake-pl1-89" for="cb-pl1-68">Baja</label>
            <label id="snake-pl1-92" for="cb-pl1-88">Baja</label>
            <label id="snake-pl1-95" for="cb-pl1-75">Baja</label>
            <label id="snake-pl1-99" for="cb-pl1-80">Baja</label>
            <label id="snake-pl2-16" for="cb-pl2-6">Baja</label>
            <label id="snake-pl2-46" for="cb-pl2-25">Baja</label>
            <label id="snake-pl2-49" for="cb-pl2-11">Baja</label>
            <label id="snake-pl2-62" for="cb-pl2-19">Baja</label>
            <label id="snake-pl2-64" for="cb-pl2-60">Baja</label>
            <label id="snake-pl2-74" for="cb-pl2-53">Baja</label>
            <label id="snake-pl2-89" for="cb-pl2-68">Baja</label>
            <label id="snake-pl2-92" for="cb-pl2-88">Baja</label>
            <label id="snake-pl2-95" for="cb-pl2-75">Baja</label>
            <label id="snake-pl2-99" for="cb-pl2-80">Baja</label>
            <label id="snake-pl3-16" for="cb-pl3-6">Baja</label>
            <label id="snake-pl3-46" for="cb-pl3-25">Baja</label>
            <label id="snake-pl3-49" for="cb-pl3-11">Baja</label>
            <label id="snake-pl3-62" for="cb-pl3-19">Baja</label>
            <label id="snake-pl3-64" for="cb-pl3-60">Baja</label>
            <label id="snake-pl3-74" for="cb-pl3-53">Baja</label>
            <label id="snake-pl3-89" for="cb-pl3-68">Baja</label>
            <label id="snake-pl3-92" for="cb-pl3-88">Baja</label>
            <label id="snake-pl3-95" for="cb-pl3-75">Baja</label>
            <label id="snake-pl3-99" for="cb-pl3-80">Baja</label>
            <label id="snake-pl4-16" for="cb-pl4-6">Baja</label>
            <label id="snake-pl4-46" for="cb-pl4-25">Baja</label>
            <label id="snake-pl4-49" for="cb-pl4-11">Baja</label>
            <label id="snake-pl4-62" for="cb-pl4-19">Baja</label>
            <label id="snake-pl4-64" for="cb-pl4-60">Baja</label>
            <label id="snake-pl4-74" for="cb-pl4-53">Baja</label>
            <label id="snake-pl4-89" for="cb-pl4-68">Baja</label>
            <label id="snake-pl4-92" for="cb-pl4-88">Baja</label>
            <label id="snake-pl4-95" for="cb-pl4-75">Baja</label>
            <label id="snake-pl4-99" for="cb-pl4-80">Baja</label>-->
          </div>
        </div>
        <svg viewBox="0 0 100 100">
          <path d="M1,32 4,32 M6,34 4,32 M4,32 10,20" stroke="black" stroke-with="1"></path>
          <path d="M 30,70 C 49,56 60,84 33,92 -17,103 0,50 24,45 32,44 37,41 29,27 26,33 5,35 3,24 4,13 26,3 37,16 49,30 49,52 28,55 8,59 0,94 33,82 56,72 35,66 30,71 Z" fill="#73B80A" stroke-width="0"></path>
          <circle cx="18" cy="15" r="5" fill="black" stroke="white" stroke-width="6"></circle>
        </svg>
      </div>
    </div>
    <div class="scrim" id="ladder-popup">
      <div class="box">
        <h1>Escalera!</h1>
        <div>Wow! Encontraste una escalera! Sube!
          <div>

            <label class="sube" id="ladder-pl1-9" for="cb-pl1-30">Sube</label>
            <label class="sube" id="ladder-pl1-16" for="cb-pl1-36">Sube</label>
            <label class="sube" id="ladder-pl1-31" for="cb-pl1-52">Sube</label>
            <label class="sube" id="ladder-pl1-34" for="cb-pl1-54">Sube</label>
            <label class="sube" id="ladder-pl1-39" for="cb-pl1-60">Sube</label>
            <label class="sube" id="ladder-pl2-9" for="cb-pl2-30">Sube</label>
            <label class="sube" id="ladder-pl2-16" for="cb-pl2-36">Sube</label>
            <label class="sube" id="ladder-pl2-31" for="cb-pl2-52">Sube</label>
            <label class="sube" id="ladder-pl2-34" for="cb-pl2-54">Sube</label>
            <label class="sube" id="ladder-pl2-39" for="cb-pl2-60">Sube</label>
            <label class="sube" id="ladder-pl3-9" for="cb-pl3-30">Sube</label>
            <label class="sube" id="ladder-pl3-16" for="cb-pl3-36">Sube</label>
            <label class="sube" id="ladder-pl3-31" for="cb-pl3-52">Sube</label>
            <label class="sube" id="ladder-pl3-34" for="cb-pl3-54">Sube</label>
            <label class="sube" id="ladder-pl3-39" for="cb-pl3-60">Sube</label>
            <label class="sube" id="ladder-pl4-9" for="cb-pl4-30">Sube</label>
            <label class="sube" id="ladder-pl4-16" for="cb-pl4-36">Sube</label>
            <label class="sube" id="ladder-pl4-31" for="cb-pl4-52">Sube</label>
            <label class="sube" id="ladder-pl4-34" for="cb-pl4-54">Sube</label>
            <label class="sube" id="ladder-pl4-39" for="cb-pl4-60">Sube</label>


          </div>
        </div>
        <svg viewBox="0 0 100 100">
          <path d="M5,85 20,10" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path>
          <path d="M10,67 30,71 M15,45 35,49 M20,23 40,27" stroke="#aB6533" stroke-width="5" stroke-linecap="round"></path>
          <path d="M30,90 45,15" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path>
        </svg>
      </div>
    </div>
    <div class="scrim" id="home-popup">
      <div class="box">
        <h1>2030</h1>
        <div>Vuelve a intentarlo! Llegaste a la meta pero no llegaste con el número exacto así que te toca devolverte las celdas restantes.
          <div>



            <label id="home-pl1-65" for="cb-pl1-63">Retroceder</label>
            <label id="home-pl1-66" for="cb-pl1-62">Retroceder</label>
            <label id="home-pl1-67" for="cb-pl1-61">Retroceder</label>
            <label id="home-pl1-68" for="cb-pl1-60">Retroceder</label>
            <label id="home-pl1-69" for="cb-pl1-59">Retroceder</label>
            <label id="home-pl1-70" for="cb-pl1-58">Retroceder</label>
            <label id="home-pl2-65" for="cb-pl2-63">Retroceder</label>
            <label id="home-pl2-66" for="cb-pl2-62">Retroceder</label>
            <label id="home-pl2-67" for="cb-pl2-61">Retroceder</label>
            <label id="home-pl2-68" for="cb-pl2-60">Retroceder</label>
            <label id="home-pl2-69" for="cb-pl2-59">Retroceder</label>
            <label id="home-pl2-70" for="cb-pl2-58">Retroceder</label>
            <label id="home-pl3-65" for="cb-pl3-63">Retroceder</label>
            <label id="home-pl3-66" for="cb-pl3-62">Retroceder</label>
            <label id="home-pl3-67" for="cb-pl3-61">Retroceder</label>
            <label id="home-pl3-68" for="cb-pl3-60">Retroceder</label>
            <label id="home-pl3-69" for="cb-pl3-59">Retroceder</label>
            <label id="home-pl3-70" for="cb-pl3-58">Retroceder</label>
            <label id="home-pl4-65" for="cb-pl4-63">Retroceder</label>
            <label id="home-pl4-66" for="cb-pl4-62">Retroceder</label>
            <label id="home-pl4-67" for="cb-pl4-61">Retroceder</label>
            <label id="home-pl4-68" for="cb-pl4-60">Retroceder</label>
            <label id="home-pl4-69" for="cb-pl4-59">Retroceder</label>
            <label id="home-pl4-70" for="cb-pl4-58">Retroceder</label>
          </div>
        </div>
        <svg viewBox="0 0 100 100">
          <path d="M12,85 12,40 5,40 30,5 55,40 48,40 48,85 35,85 35,60 25,60 25,85 Z" fill="#8Ba5f3"></path>
          <path d="M30,65 C 30,60 25,55 20,55 15,55 10,60 10,65 10,70 15,75 20,75 20,75 20,75 50,75 M40,65 50,75 40,85" stroke="#eeee60" stroke-width="6" fill="none"></path>
        </svg>
      </div>
    </div>

    <div class="scrim ods-popup" id="ods-popup">
      <div class="box">
        <div class="ods-popupHeader">


        <h1>Casillero de Pregunta</h1>
        <span onclick="document.getElementById('ods-popup').style.display='none'" class="closePopUp">&times;</span>
        </div>
        <div>
          <p>Responde una pregunta y si es correcta puedes girar nuevamente la ruleta!</p>

          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ODS1Modal">
      Ver Pregunta
    </button>

          <div>


            <!--<label id="ods-pl1-3" for="cb-pl1-3">Confirmar</label>
            <label id="ods-pl1-7" for="cb-pl1-7">Confirmar</label>
            <label id="ods-pl1-12" for="cb-pl1-12">Confirmar</label>
            <label id="ods-pl1-15" for="cb-pl1-15">Confirmar</label>
            <label id="ods-pl1-18" for="cb-pl1-18">Confirmar</label>
            <label id="ods-pl1-20" for="cb-pl1-20">Confirmar</label>
            <label id="ods-pl1-24" for="cb-pl1-24">Confirmar</label>
            <label id="ods-pl1-28" for="cb-pl1-28">Confirmar</label>
            <label id="ods-pl1-32" for="cb-pl1-32">Confirmar</label>
            <label id="ods-pl1-35" for="cb-pl1-35">Confirmar</label>
            <label id="ods-pl1-38" for="cb-pl1-38">Confirmar</label>
            <label id="ods-pl1-42" for="cb-pl1-42">Confirmar</label>
            <label id="ods-pl1-45" for="cb-pl1-45">Confirmar</label>
            <label id="ods-pl1-48" for="cb-pl1-48">Confirmar</label>
            <label id="ods-pl1-53" for="cb-pl1-53">Confirmar</label>
            <label id="ods-pl1-56" for="cb-pl1-56">Confirmar</label>
            <label id="ods-pl1-62" for="cb-pl1-62">Confirmar</label>
            <label id="ods-pl1-35" for="cb-pl1-35">Confirmar</label>
            <label id="ods-pl2-3" for="cb-pl2-3">Confirmar</label>
            <label id="ods-pl2-7" for="cb-pl2-7">Confirmar</label>
            <label id="ods-pl2-12" for="cb-pl2-12">Confirmar</label>
            <label id="ods-pl2-15" for="cb-pl2-15">Confirmar</label>
            <label id="ods-pl2-18" for="cb-pl2-18">Confirmar</label>
            <label id="ods-pl2-20" for="cb-pl2-20">Confirmar</label>
            <label id="ods-pl2-24" for="cb-pl2-24">Confirmar</label>
            <label id="ods-pl2-28" for="cb-pl2-28">Confirmar</label>
            <label id="ods-pl2-32" for="cb-pl2-32">Confirmar</label>
            <label id="ods-pl2-35" for="cb-pl2-35">Confirmar</label>
            <label id="ods-pl2-38" for="cb-pl2-38">Confirmar</label>
            <label id="ods-pl2-42" for="cb-pl2-42">Confirmar</label>
            <label id="ods-pl2-45" for="cb-pl2-45">Confirmar</label>
            <label id="ods-pl2-48" for="cb-pl2-48">Confirmar</label>
            <label id="ods-pl2-53" for="cb-pl2-53">Confirmar</label>
            <label id="ods-pl2-56" for="cb-pl2-56">Confirmar</label>
            <label id="ods-pl2-62" for="cb-pl2-62">Confirmar</label>
            <label id="ods-pl2-35" for="cb-pl2-35">Confirmar</label>
            <label id="ods-pl3-3" for="cb-pl3-3">Confirmar</label>
            <label id="ods-pl3-7" for="cb-pl3-7">Confirmar</label>
            <label id="ods-pl3-12" for="cb-pl3-12">Confirmar</label>
            <label id="ods-pl3-15" for="cb-pl3-15">Confirmar</label>
            <label id="ods-pl3-18" for="cb-pl3-18">Confirmar</label>
            <label id="ods-pl3-20" for="cb-pl3-20">Confirmar</label>
            <label id="ods-pl3-24" for="cb-pl3-24">Confirmar</label>
            <label id="ods-pl3-28" for="cb-pl3-28">Confirmar</label>
            <label id="ods-pl3-32" for="cb-pl3-32">Confirmar</label>
            <label id="ods-pl3-35" for="cb-pl3-35">Confirmar</label>
            <label id="ods-pl3-38" for="cb-pl3-38">Confirmar</label>
            <label id="ods-pl3-42" for="cb-pl3-42">Confirmar</label>
            <label id="ods-pl3-45" for="cb-pl3-45">Confirmar</label>
            <label id="ods-pl3-48" for="cb-pl3-48">Confirmar</label>
            <label id="ods-pl3-53" for="cb-pl3-53">Confirmar</label>
            <label id="ods-pl3-56" for="cb-pl3-56">Confirmar</label>
            <label id="ods-pl3-62" for="cb-pl3-62">Confirmar</label>
            <label id="ods-pl3-35" for="cb-pl3-35">Confirmar</label>
            <label id="ods-pl4-3" for="cb-pl4-3">Confirmar</label>
            <label id="ods-pl4-7" for="cb-pl4-7">Confirmar</label>
            <label id="ods-pl4-12" for="cb-pl4-12">Confirmar</label>
            <label id="ods-pl4-15" for="cb-pl4-15">Confirmar</label>
            <label id="ods-pl4-18" for="cb-pl4-18">Confirmar</label>
            <label id="ods-pl4-20" for="cb-pl4-20">Confirmar</label>
            <label id="ods-pl4-24" for="cb-pl4-24">Confirmar</label>
            <label id="ods-pl4-28" for="cb-pl4-28">Confirmar</label>
            <label id="ods-pl4-32" for="cb-pl4-32">Confirmar</label>
            <label id="ods-pl4-35" for="cb-pl4-35">Confirmar</label>
            <label id="ods-pl4-38" for="cb-pl4-38">Confirmar</label>
            <label id="ods-pl4-42" for="cb-pl4-42">Confirmar</label>
            <label id="ods-pl4-45" for="cb-pl4-45">Confirmar</label>
            <label id="ods-pl4-48" for="cb-pl4-48">Confirmar</label>
            <label id="ods-pl4-53" for="cb-pl4-53">Confirmar</label>
            <label id="ods-pl4-56" for="cb-pl4-56">Confirmar</label>
            <label id="ods-pl4-62" for="cb-pl4-62">Confirmar</label>
            <label id="ods-pl4-35" for="cb-pl4-35">Confirmar</label>
    -->
          </div>

        </div>

    <div class="divImgPregunta">



        <img id ="imgPregunta" class = "imgTarjeta" src="img/Tarjeta2_pregunta.png" height="80px" alt="">
        <!-- <svg viewBox="0 0 100 100"> -->
          <!-- <path d="M5,85 20,10" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path> -->
          <!-- <path d="M10,67 30,71 M15,45 35,49 M20,23 40,27" stroke="#aB6533" stroke-width="5" stroke-linecap="round"></path> -->
          <!-- <path d="M30,90 45,15" stroke="#8B4513" stroke-width="10" stroke-linecap="round"></path> -->
        <!-- </svg> -->

    </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" style="margin-top: 20px;" id="ODS1Modal" tabindex="-1" aria-labelledby="ODS1ModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header headerODS1">
            <img class="hexagonoHeader" height="100px" src="img/hexagono_blanco.png" alt="">
            <img class="papelitosLeft" src="img/papelitos_left.png" height="60px" alt="">
            <h4 class="modal-title" id="ODS1ModalTitle">Fin de la Pobreza</h4>
            <img class="papelitosRight" src="img/papelitos_right.png" height="60px" alt="">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body ODSModalBody">
            <img class="imgODS1" src="img/Tarjeta1_papelitos.png" height="120px" alt="">
            <form action="#" class="customRadio">
              <p>¿Cómo dirías que alguien se encuentra en la pobreza?</p>
              <div class="divRadioODS">
                <ul class="px-3">
                  <li>
                    <input type="radio" name="textEditor" id="opcion1ODS1" value="1"><label for="opcion1ODS1">No tiene un SmartPhone</label>
                  </li>
                  <li>
                    <input type="radio" name="textEditor" id="opcion2ODS1" value="2"><label for="opcion2ODS1">No puede costear sus necesidades básicas como comida, servicios de salud, educación,etc.</label>
                  </li>
                  <li>
                    <input type="radio" name="textEditor" id="opcion3ODS1" value="3"><label for="opcion3ODS1">Está mal vestido/a</label>
                  </li>
                </ul>



              </div>



            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>


    <div class="scrim text-center" id="congratulations">
      <div class="box">

        <h1>Felicitaciones!</h1>
        <div>Llegaste a la meta 2030! Ganaste!</div>
        <div>Recarga la página para jugar nuevamente.</div>
        <svg viewBox="0 0 100 100">
          <path d="M5,10 C 5,10 65,10 65,10 65,10 65,40 65,40 65,50 55,70 35,70 15,70 5,50 5,40 Z" fill="#fede60"></path>
          <path d="M35,40 35,85 M20,85 50,85" stroke="#fede60" stroke-width="12" fill="none" stroke-linecap="round"></path>
        </svg>
      </div>
      <div>


        <iframe src="img/VideoLlegada.mp4" allow="autoplay" id="iframeVideo" style="display: none"></iframe>
        <video width="440px" id="videoLlegada" autoplay>
        <source  src="img/VideoLlegada.mp4" type="video/mp4">
        Tu navegador no permite reproducir este tipo de video.
        </video>
      </div>

    </div>

    <!-- Footer -->
    <footer>
      <?php require("Resources/footer.php") ?>
    </footer>

  </body>
  <!-- JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/scriptLadder.js" charset="utf-8"></script>
</html>