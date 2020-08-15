
//Comentario V: para la música y efectos de sonido
var button = document.getElementById("playButton");
var ladderLabel= document.querySelector(".ladderLabel");
var audio = document.getElementById("backgroundMusic");
var odsSound = document.getElementById("ODSSound");
var beforeLadderSound = document.getElementById("beforeLadderSound");
var videoLlegada=document.getElementById("videoLlegada");

var toggleFx = document.getElementById("activateSound")

//Comentario V: para que suene la musica de fondo cuando se pone play y se detenga cuando se pone pause.
button.addEventListener("click", function(){
  if(audio.paused){
    audio.play();

    button.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    audio.pause();
    button.innerHTML = '<i class="fas fa-play"></i>';
  }
});


//Comentario V: para hacer el loop del backgroundMusic sin pausa se puede poner buffer de 13.1692 o de 2.
audio.addEventListener('timeupdate', function(){
    var buffer = 2;
    if(audio.currentTime > audio.duration - buffer){
        audio.currentTime = 0;
        audio.play()
    }
});

//Comentario V: para que suene la musica de fondo cuando se seleccionan las opciones de sonido.
toggleFx.addEventListener("click", function(){
  if(audio.paused){
    audio.play();
    toggleFx.innerHTML = '<i class="fas fa-toggle-on"></i>';
  } else {
    audio.pause();
    toggleFx.innerHTML = '<i class="fas fa-toggle-off"></i>';
  }
});


(function(){ //wrap everything on a function to keep the global scope clean.
  const wheel =document.querySelector('.wheel');
  const startButton = document.querySelector('.buttonWheel');
  const dice =document.querySelector('.dice');
  const closeQuestion=document.querySelector('.closeQuestion');


  let deg=0;

  function closePopup() {
    var x = document.querySelector('.ods-popup');

      x.style.display = "none";

  }







//Comentario V: Para ver el valor de la posición actual de cada jugador

  window.addEventListener('click', () => {
    var currentPosP1= document.querySelector('input[name="cb-player1"]:checked').value;
    var currentPosP2= document.querySelector('input[name="cb-player2"]:checked').value;
    var currentPosP3= document.querySelector('input[name="cb-player3"]:checked').value;
    var currentPosP4= document.querySelector('input[name="cb-player4"]:checked').value;
    var playerTurn= document.querySelector('input[name="turn"]:checked').value;
    var colorOption= document.querySelector('input[name="colors"]:checked').value;


//Comentario V: Para darle a cada peon el color correspondiente teniendo en cuenta la selección de color que hicieron los jugadores.
  console.log(colorOption);
    if(playerTurn == "1" && colorOption == "colors1"){

      document.getElementById("turn-player-info").style.color ='#4a5';

    }else if(playerTurn == "2" && colorOption == "colors1"){
      document.getElementById("turn-player-info").style.color ='#48c';

    }else if(playerTurn == "3" && colorOption == "colors1")
    {
      document.getElementById("turn-player-info").style.color ='#f55';
    }
    else if(playerTurn == "4" && colorOption == "colors1")
    {
      document.getElementById("turn-player-info").style.color ='#dd5';
    }
    else if(playerTurn == "1" && colorOption == "colors2"){

      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "2" && colorOption == "colors2"){

      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "3" && colorOption == "colors2")
    {
      document.getElementById("turn-player-3").style.color ='#4a5';
    }
    else if(playerTurn == "4" && colorOption == "colors2")
    {
      document.getElementById("turn-player-info").style.color ='#4a5';
    }
    else if(playerTurn == "1" && colorOption == "colors3"){
      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "2" && colorOption == "colors3"){
      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "3" && colorOption == "colors3")
    {
      document.getElementById("turn-player-3").style.color ='#4a5';
    }
    else if(playerTurn == "4" && colorOption == "colors3")
    {
      document.getElementById("turn-player-info").style.color ='#4a5';
    }
    else if(playerTurn == "1" && colorOption == "colors4"){
      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "2" && colorOption == "colors4"){
      document.getElementById("turn-player-info").style.color ='#4a5';
    }else if(playerTurn == "3" && colorOption == "colors4")
    {
      document.getElementById("turn-player-3").style.color ='#4a5';
    }
    else if(playerTurn == "4" && colorOption == "colors4")
    {
      document.getElementById("turn-player-info").style.color ='#4a5';
    }
    //Comentario V: Para poner el peon en la ruleta del color correspondiente al turno actual e iniciar con valor '' en el resultado de la ruleta antes que que gire la ruleta
    var wheelPlayer = document.getElementById("wheelPlayer");
    wheelPlayer.style.color='transparent';
    var wheelResult = document.getElementById('wheelResult');
    wheelResult.textContent = '';

    console.log(currentPosP1);
    console.log(currentPosP2);
    console.log(currentPosP3);
    console.log(currentPosP4);
    console.log(playerTurn);
  });



//Comentario V: Esto es para que gire la ruleta y suene la musica de la ruleta.



  startButton.addEventListener('click', () => {
    var wheelSound= document.getElementById("wheelSound");
    startButton.style.pointerEvents = 'none'; //to disable the button until it finished so that you don;t spin again.

    deg = Math.floor(2000 + Math.random() * 2000);
    wheel.style.transition='all 10s ease-out'; //ease-out makes it slow down towards the end.
    wheel.style.transform=`rotate(${deg}deg)`;
    wheel.classList.add('blur');
    wheelSound.play();

    wheelResult.textContent = '';
    wheelPlayer.style.color='transparent';


  });
//Comentario V: Esto es para transformar el resultado de la ruleta de grados a numeros del 1 al 6 y tocar el sonido de resultado de la ruleta.
  wheel.addEventListener('transitionend',()=>{
      var wheelResultSound=document.getElementById("wheelResultSound");

      wheel.classList.remove('blur');
      startButton.style.pointerEvents = 'auto'; //to activate the button again.
      wheel.style.transition='none'; //so that it starts again from 0 and that it
      const actualDeg= deg%360;
      wheel.style.transform=`rotate(${actualDeg}deg)`;
      wheelSound.pause();
      wheelResultSound.play();


      var wheelResult = document.getElementById('wheelResult');
      const div = document.getElementById('app');
      var currentPosP1= document.querySelector('input[name="cb-player1"]:checked').value;
      var currentPosP1Int=parseInt(currentPosP1,10);
      var currentPosP2= document.querySelector('input[name="cb-player2"]:checked').value;
      var currentPosP2Int=parseInt(currentPosP2,10);
      var currentPosP3= document.querySelector('input[name="cb-player3"]:checked').value;
      var currentPosP3Int=parseInt(currentPosP3,10);
      var currentPosP4= document.querySelector('input[name="cb-player4"]:checked').value;
      var currentPosP4Int=parseInt(currentPosP4,10);

      var playerTurn= document.querySelector('input[name="turn"]:checked').value;

      if(`${actualDeg}`>0 && `${actualDeg}`<=60){
        wheelPlayer.style.color= document.getElementById("turn-player-info").style.color;
        wheelResult.textContent = ' sacó 6'
        console.log("PlayerTurn = " + playerTurn);
        if(playerTurn == "1"){var newPosP1= currentPosP1Int+6;
          $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
        }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+6;
          $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
        }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+6;
          $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
        }else{var newPosP4= currentPosP4Int+6;
        $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
        }
      }else if(`${actualDeg}`>60 && `${actualDeg}`<=120){
        wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
        wheelResult.textContent = ' sacó 5'
        console.log("PlayerTurn = "+ playerTurn);
        if(playerTurn == "1"){var newPosP1= currentPosP1Int+5;
        console.log("newPosP1 "+ newPosP1);
        $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
      }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+5;
        $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
      }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+5;
        $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
      }else{
        var newPosP4= currentPosP4Int+5;
          $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
      }

    }else if(`${actualDeg}`>120 && `${actualDeg}`<=180){
      wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
          wheelResult.textContent = ' sacó 4'
          console.log("PlayerTurn = "+ playerTurn);
          if(playerTurn == "1"){var newPosP1= currentPosP1Int+4;
          console.log("newPosP1 "+ newPosP1);
          $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
        }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+4;
            $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
          }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+4;
            $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
          }else{
            var newPosP4= currentPosP4Int+4;
            $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
            }

        }else if(`${actualDeg}`>180 && `${actualDeg}`<=240){
          wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
          wheelResult.textContent = ' sacó 3'
          console.log("PlayerTurn = "+ playerTurn);
          if(playerTurn == "1"){
            var newPosP1= currentPosP1Int+3;
            console.log(newPosP1);
            $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
          }else if(playerTurn=="2"){
            var newPosP2= currentPosP2Int+3;
            $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
          }else if(playerTurn=="3"){
            var newPosP3= currentPosP3Int+3;
            $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
          }else{var newPosP4= currentPosP4Int+3;
            $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
          }
      }else if(`${actualDeg}`>240 && `${actualDeg}`<=300){
        wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
          wheelResult.textContent = ' sacó 2'
          console.log("PlayerTurn = "+ playerTurn);
          if(playerTurn == "1"){
            var newPosP1= currentPosP1Int+2;
            console.log(newPosP1);
            $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
          }else if(playerTurn=="2"){
            var newPosP2= currentPosP2Int+2;
            $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
          }
          else if(playerTurn=="3"){
            var newPosP3= currentPosP3Int+2;
            $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
          }else{
            console.log("PlayerTurn = "+ playerTurn);
            var newPosP4= currentPosP4Int+2;
            $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
          }
      }else{
        console.log("PlayerTurn = "+ playerTurn);
        if(playerTurn == "1"){var newPosP1= currentPosP1Int+1;
          console.log(newPosP1);
          $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
        }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+1;
          $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
        }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+1;
          $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
        }else{
          var newPosP4= currentPosP4Int+1;
            console.log("PlayerTurn = "+ playerTurn);
          $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
        }
        wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
        wheelResult.textContent = ' sacó 1';
      }


//Comentario V: Esto es para que suene el sonido de ODS cuando cae en una casilla de ODS
      if(newPosP1== 3|| newPosP2==3||newPosP3==3||newPosP4==3||
          newPosP1==7|| newPosP2==7||newPosP3==7||newPosP4==7||
          newPosP1==12|| newPosP2==12||newPosP3==12||newPosP4==12||
          newPosP1==15|| newPosP2==15||newPosP3==15||newPosP4==15||
          newPosP1==18|| newPosP2==18||newPosP3==18||newPosP4==18||
          newPosP1==20|| newPosP2==20||newPosP3==20||newPosP4==20||
          newPosP1==24|| newPosP2==24||newPosP3==24||newPosP4==24||
          newPosP1==28|| newPosP2==28||newPosP3==28||newPosP4==28||
          newPosP1==32|| newPosP2==32||newPosP3==32||newPosP4==32||
          newPosP1==35|| newPosP2==35||newPosP3==35||newPosP4==35||
          newPosP1==38|| newPosP2==38||newPosP3==38||newPosP4==38||
          newPosP1==42|| newPosP2==42||newPosP3==42||newPosP4==42||
          newPosP1==45|| newPosP2==45||newPosP3==45||newPosP4==45||
          newPosP1==49|| newPosP2==49||newPosP3==49||newPosP4==49||
          newPosP1==53|| newPosP2==53||newPosP3==53||newPosP4==53||
          newPosP1==56|| newPosP2==56||newPosP3==56||newPosP4==56||
          newPosP1==62|| newPosP2==62||newPosP3==62||newPosP4==62){
          odsSound.play();

//Comentario V: Esto es para que suene el sonido de escalera cuando cae en una casilla donde comienza una escalera
        } if(
          newPosP1==9|| newPosP2==9||newPosP3==9||newPosP4==9||
          newPosP1==16|| newPosP2==16||newPosP3==16||newPosP4==16||
          newPosP1==31|| newPosP2==31||newPosP3==31||newPosP4==31||
          newPosP1==34|| newPosP2==34||newPosP3==34||newPosP4==34||
          newPosP1==39|| newPosP2==39||newPosP3==39||newPosP4==39){
            beforeLadderSound.play();
            ladderLabel.addEventListener("click",()=>{
              ladderSound.play();
            });

//Comentario V: Esto es para que suene el sonido de tobogán cuando cae en una casilla donde comienza un tobogán.
          } if(
            newPosP1==23|| newPosP2==23||newPosP3==23||newPosP4==23||
            newPosP1==48|| newPosP2==48||newPosP3==48||newPosP4==48||
            newPosP1==63|| newPosP2==63||newPosP3==63||newPosP4==63){
              beforeSlideSound.play();
              slideLabel.addEventListener("click",()=>{
                slideSound.play();
              });
          }if(
            newPosP1==64|| newPosP2==64||newPosP3==64||newPosP4==64){
              videoLlegada.play();
            }


        });



})();
