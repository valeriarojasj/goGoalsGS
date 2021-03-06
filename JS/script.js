var button = document.getElementById("playButton");
var audio = document.getElementById("backgroundMusic");

var toggleFx = document.getElementById("activateSound");

function slide(){
  if(newPosP1==23){
    $("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');
    newPosP1=4;
  }
  if(newPosP1==48){
    $("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');
    newPosP1=29;

  }
  if(newPosP1==63){
    $("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');
    newPosP1=44;

  }
}

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









  window.addEventListener('click', () => {
    var currentPosP1= document.querySelector('input[name="cb-player1"]:checked').value;
    var currentPosP2= document.querySelector('input[name="cb-player2"]:checked').value;
    var currentPosP3= document.querySelector('input[name="cb-player3"]:checked').value;
    var currentPosP4= document.querySelector('input[name="cb-player4"]:checked').value;
    var playerTurn= document.querySelector('input[name="turn"]:checked').value;
    var colorOption= document.querySelector('input[name="colors"]:checked').value;

  console.log(colorOption);
    if(playerTurn == "1" && colorOption == "colors1"){

      document.getElementById("turn-player-info").src ='img/peon3-01.png';
      document.getElementById("turn-player-number").textContent ='1';





    }if(playerTurn == "2" && colorOption == "colors1"){
      document.getElementById("turn-player-info").src ='img/peon2-01.png';
      document.getElementById("turn-player-number").textContent ='2';

    }if(playerTurn == "3" && colorOption == "colors1")
    {
      document.getElementById("turn-player-info").src ='img/peon1-01.png';
      document.getElementById("turn-player-number").textContent ='3';

    }
    if(playerTurn == "4" && colorOption == "colors1")
    {
      document.getElementById("turn-player-info").src ='img/peon4-01.png';
      document.getElementById("turn-player-number").textContent ='4';

    }
  if(playerTurn == "1" && colorOption == "colors2"){
      document.getElementById("turn-player-info").src ='img/peon2-01.png';
        document.getElementById("turn-player-number").textContent ='1';
    }if(playerTurn == "2" && colorOption == "colors2"){
      document.getElementById("turn-player-info").src ='img/peon1-01.png';
        document.getElementById("turn-player-number").textContent ='2';
    }if(playerTurn == "3" && colorOption == "colors2")
    {
      document.getElementById("turn-player-info").src ='img/peon4-01.png';
        document.getElementById("turn-player-number").textContent ='3';
    }
    if(playerTurn == "4" && colorOption == "colors2")
    {
      document.getElementById("turn-player-info").src ='img/peon3-01.png';
        document.getElementById("turn-player-number").textContent ='4';
    }
    if(playerTurn == "1" && colorOption == "colors3"){
      document.getElementById("turn-player-info").src ='img/peon1-01.png';
        document.getElementById("turn-player-number").textContent ='1';
    }else if(playerTurn == "2" && colorOption == "colors3"){
      document.getElementById("turn-player-info").src ='img/peon4-01.png';
        document.getElementById("turn-player-number").textContent ='2';
    }else if(playerTurn == "3" && colorOption == "colors3")
    {
      document.getElementById("turn-player-info").src ='img/peon3-01.png';
        document.getElementById("turn-player-number").textContent ='3';
    }
    else if(playerTurn == "4" && colorOption == "colors3")
    {
      document.getElementById("turn-player-info").src ='img/peon2-01.png';
        document.getElementById("turn-player-number").textContent ='4';
    }
    else if(playerTurn == "1" && colorOption == "colors4"){
      document.getElementById("turn-player-info").src ='img/peon4-01.png';
        document.getElementById("turn-player-number").textContent ='1';
    }else if(playerTurn == "2" && colorOption == "colors4"){
      document.getElementById("turn-player-info").src ='img/peon3-01.png';
        document.getElementById("turn-player-number").textContent ='2';
    }else if(playerTurn == "3" && colorOption == "colors4")
    {
      document.getElementById("turn-player-info").src ='img/peon2-01.png';
        document.getElementById("turn-player-number").textContent ='3';
    }
    else if(playerTurn == "4" && colorOption == "colors4")
    {
      document.getElementById("turn-player-info").src ='img/peon1-01.png';
        document.getElementById("turn-player-number").textContent ='4';
    }
    // var wheelPlayer = document.getElementById("wheelPlayer");
    // wheelPlayer.style.color='transparent';
    var wheelResult = document.getElementById('wheelResult');
    wheelResult.textContent = '';

    console.log(currentPosP1);
    console.log(currentPosP2);
    console.log(currentPosP3);
    console.log(currentPosP4);
    console.log(playerTurn);
  });





  startButton.addEventListener('click', () => {
    var wheelSound= document.getElementById("wheelSound");
    startButton.style.pointerEvents = 'none'; //to disable the button until it finished so that you don;t spin again.

    deg = Math.floor(2000 + Math.random() * 2000);
    wheel.style.transition='all 10s ease-out'; //ease-out makes it slow down towards the end.
    wheel.style.transform=`rotate(${deg}deg)`;
    wheel.classList.add('blur');
    wheelSound.play();

    wheelResult.textContent = '';
    // wheelPlayer.style.color='transparent';


  });

  wheel.addEventListener('transitionend',()=>{
      var wheelResultSound=document.getElementById("wheelResultSound");

      wheel.classList.remove('blur');
      startButton.style.pointerEvents = 'auto'; //to activate the button again.
      wheel.style.transition='none'; //so that it starts again from 0
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
        // wheelPlayer.style.color= document.getElementById("turn-player-info").style.color;
        wheelResult.textContent = ' 6'
        console.log("PlayerTurn = " + playerTurn);
        if(playerTurn == "1"){var newPosP1= currentPosP1Int+6;
          $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
//if there is a slide
          if(newPosP1==23){
            $("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');
            newPosP1=4;
          }
          if(newPosP1==48){
            $("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');
            newPosP1=29;

          }
          if(newPosP1==63){
            $("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');
            newPosP1=44;

          }
          //if there is a ladder
          if(newPosP1==9){
            $("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');
            newPosP1=30;
          }
          if(newPosP1==16){
            $("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');
            newPosP1=36;

          }
          if(newPosP1==31){
            $("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');
            newPosP1=52;

          }
          if(newPosP1==34){
            $("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');
            newPosP1=54;

          }
          if(newPosP1==39){
            $("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');
            newPosP1=60;

          }
          //if you go past the finish tile
          if(newPosP1>64){
            newPosP1=64-(64-newPosP1);
            $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
          }

        }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+6;
          $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
          //if there is a slide
                    if(newPosP2==23){
                      $("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');
                      newPosP2=4;
                    }
                    if(newPosP2==48){
                      $("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');
                      newPosP2=29;

                    }
                    if(newPosP2==63){
                      $("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');
                      newPosP2=44;

                    }
                    //if there is a ladder
                    if(newPosP2==9){
                      $("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');
                      newPosP2=30;
                    }
                    if(newPosP2==16){
                      $("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');
                      newPosP2=36;

                    }
                    if(newPosP2==31){
                      $("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');
                      newPosP2=52;

                    }
                    if(newPosP2==34){
                      $("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');
                      newPosP2=54;

                    }
                    if(newPosP2==39){
                      $("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');
                      newPosP2=60;

                    }
                    //if you go past the finish tile
                    if(newPosP2>64){
                      newPosP2=64-(64-newPosP2);
                      $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                    }
                  }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+6;
                    $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                    //if there is a slide
                    if(newPosP3==23){
                      $("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');
                      newPosP3=4;
                    }
                    if(newPosP3==48){
                      $("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');
                      newPosP3=29;

                    }
                    if(newPosP3==63){
                      $("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');
                      newPosP3=44;

                    }
                    //if there is a ladder
                    if(newPosP3==9){
                      $("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');
                      newPosP3=30;
                    }
                    if(newPosP3==16){
                      $("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');
                      newPosP3=36;

                    }
                    if(newPosP3==31){
                      $("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');
                      newPosP3=52;

                    }
                    if(newPosP3==34){
                      $("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');
                      newPosP3=54;

                    }
                    if(newPosP3==39){
                      $("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');
                      newPosP3=60;

                    }
                    //if you go past the finish tile
                    if(newPosP3>64){
                      newPosP3=64-(64-newPosP3);
                      $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                    }
                  }else{var newPosP4= currentPosP4Int+6;
                    $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                    //if there is a slide
                  if(newPosP4==23){
                    $("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');
                    newPosP4=4;
                  }
                  if(newPosP4==48){
                    $("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');
                    newPosP4=29;

                  }
                  if(newPosP4==63){
                    $("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');
                    newPosP4=44;

                  }
                  //if there is a ladder
                  if(newPosP4==9){
                    $("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');
                    newPosP4=30;
                  }
                  if(newPosP4==16){
                    $("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');
                    newPosP4=36;

                  }
                  if(newPosP4==31){
                    $("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');
                    newPosP4=52;

                  }
                  if(newPosP4==34){
                    $("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');
                    newPosP4=54;

                  }
                  if(newPosP4==39){
                    $("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');
                    newPosP4=60;

                  }
                  //if you go past the finish tile
                  if(newPosP4>64){
                    newPosP4=64-(64-newPosP4);
                    $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                  }
                }
              }else if(`${actualDeg}`>60 && `${actualDeg}`<=120){
                // wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
                wheelResult.textContent = ' 5'
                console.log("PlayerTurn = "+ playerTurn);
                if(playerTurn == "1"){var newPosP1= currentPosP1Int+5;
                console.log("newPosP1 "+ newPosP1);
                $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');

                  //if there is a slide
                  if(newPosP1==23){
                    $("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');
                    newPosP1=4;
                  }
                  if(newPosP1==48){
                    $("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');
                    newPosP1=29;

                  }
                  if(newPosP1==63){
                    $("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');
                    newPosP1=44;

                  }
                  //if there is a ladder
                  if(newPosP1==9){
                    $("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');
                    newPosP1=30;
                  }
                  if(newPosP1==16){
                    $("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');
                    newPosP1=36;

                  }
                  if(newPosP1==31){
                    $("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');
                    newPosP1=52;

                  }
                  if(newPosP1==34){
                    $("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');
                    newPosP1=54;

                  }
                  if(newPosP1==39){
                    $("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');
                    newPosP1=60;

                  }
                  //if you go past the finish tile
                  if(newPosP1>64){
                    newPosP1=64-(64-newPosP1);
                    $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
                  }

                }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+5;
                  $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                  //if there is a slide
                  if(newPosP2==23){
                    $("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');
                    newPosP2=4;
                  }
                  if(newPosP2==48){
                    $("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');
                    newPosP2=29;

                  }
                  if(newPosP2==63){
                    $("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');
                    newPosP2=44;

                  }
                  //if there is a ladder
                  if(newPosP2==9){
                    $("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');
                    newPosP2=30;
                  }
                  if(newPosP2==16){
                    $("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');
                    newPosP2=36;

                  }
                  if(newPosP2==31){
                    $("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');
                    newPosP2=52;

                  }
                  if(newPosP2==34){
                    $("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');
                    newPosP2=54;

                  }
                  if(newPosP2==39){
                    $("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');
                    newPosP2=60;

                  }
                  //if you go past the finish tile
                  if(newPosP2>64){
                    newPosP2=64-(64-newPosP2);
                    $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                  }
                }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+5;
                  $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                  //if there is a slide
                  if(newPosP3==23){
                    $("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');
                    newPosP3=4;
                  }
                  if(newPosP3==48){
                    $("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');
                    newPosP3=29;

                  }
                  if(newPosP3==63){
                    $("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');
                    newPosP3=44;

                  }
                  //if there is a ladder
                  if(newPosP3==9){
                    $("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');
                    newPosP3=30;
                  }
                  if(newPosP3==16){
                    $("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');
                    newPosP3=36;

                  }
                  if(newPosP3==31){
                    $("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');
                    newPosP3=52;

                  }
                  if(newPosP3==34){
                    $("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');
                    newPosP3=54;

                  }
                  if(newPosP3==39){
                    $("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');
                    newPosP3=60;

                  }
                  //if you go past the finish tile
                  if(newPosP3>64){
                    newPosP3=64-(64-newPosP3);
                    $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                  }
                }else{
                  var newPosP4= currentPosP4Int+5;
                  $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                  //if there is a slide
                    if(newPosP4==23){
                      $("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');
                      newPosP4=4;
                    }
                    if(newPosP4==48){
                      $("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');
                      newPosP4=29;

                    }
                    if(newPosP4==63){
                      $("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');
                      newPosP4=44;

                    }
                    //if there is a ladder
                    if(newPosP4==9){
                      $("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');
                      newPosP4=30;
                    }
                    if(newPosP4==16){
                      $("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');
                      newPosP4=36;

                    }
                    if(newPosP4==31){
                      $("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');
                      newPosP4=52;

                    }
                    if(newPosP4==34){
                      $("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');
                      newPosP4=54;

                    }
                    if(newPosP4==39){
                      $("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');
                      newPosP4=60;

                    }
                    //if you go past the finish tile
                    if(newPosP4>64){
                      newPosP4=64-(64-newPosP4);
                      $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                    }
                  }

                }else if(`${actualDeg}`>120 && `${actualDeg}`<=180){
                  // wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
                  wheelResult.textContent = ' 4'
                  console.log("PlayerTurn = "+ playerTurn);
                  if(playerTurn == "1"){var newPosP1= currentPosP1Int+4;
                    console.log("newPosP1 "+ newPosP1);
                    $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
                    //if there is a slide
                    if(newPosP1==23){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);

                      newPosP1=4;
                    }
                    if(newPosP1==48){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=29;

                    }
                    if(newPosP1==63){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);

                      newPosP1=44;

                    }
                    //if there is a ladder
                    if(newPosP1==9){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);

                      newPosP1=30;
                    }
                    if(newPosP1==16){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);

                      newPosP1=36;

                    }
                    if(newPosP1==31){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=52;

                    }
                    if(newPosP1==34){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=54;

                    }
                    if(newPosP1==39){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=60;

                    }
                    //if you go past the finish tile
                    if(newPosP1>64){
                      newPosP1=64-(64-newPosP1);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');  }, 2000);
                    }
                  }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+4;
                    $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                    //if there is a slide
                      if(newPosP2==23){
                        setTimeout(function(){$("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=4;
                      }
                      if(newPosP2==48){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=29;

                      }
                      if(newPosP2==63){
                        setTimeout(function(){$("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=44;

                      }
                      //if there is a ladder
                      if(newPosP2==9){
                        setTimeout(function(){$("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=30;
                      }
                      if(newPosP2==16){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=36;

                      }
                      if(newPosP2==31){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=52;

                      }
                      if(newPosP2==34){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=54;

                      }
                      if(newPosP2==39){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=60;

                      }
                      //if you go past the finish tile
                      if(newPosP2>64){
                        newPosP2=64-(64-newPosP2);
                        setTimeout(function(){$("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+4;
                      $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP3==23){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=4;
                      }
                      if(newPosP3==48){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=29;

                      }
                      if(newPosP3==63){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=44;

                      }
                      //if there is a ladder
                      if(newPosP3==9){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=30;
                      }
                      if(newPosP3==16){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=36;

                      }
                      if(newPosP3==31){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=52;

                      }
                      if(newPosP3==34){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=54;

                      }
                      if(newPosP3==39){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=60;

                      }
                      //if you go past the finish tile
                      if(newPosP3>64){
                        newPosP3=64-(64-newPosP3);
                      setTimeout(function(){$("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else{
                      var newPosP4= currentPosP4Int+4;
                      $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP4==23){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=4;
                      }
                      if(newPosP4==48){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=29;

                      }
                      if(newPosP4==63){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=44;

                      }
                      //if there is a ladder
                      if(newPosP4==9){
                    setTimeout(function(){$("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=30;
                      }
                      if(newPosP4==16){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=36;

                      }
                      if(newPosP4==31){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=52;

                      }
                      if(newPosP4==34){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=54;

                      }
                      if(newPosP4==39){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=60;

                      }
                      //if you go past the finish tile
                      if(newPosP4>64){
                        newPosP4=64-(64-newPosP4);
                      setTimeout(function(){$("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }

                  }else if(`${actualDeg}`>180 && `${actualDeg}`<=240){
                    // wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
                    wheelResult.textContent = ' 3'
                    console.log("PlayerTurn = "+ playerTurn);
                    if(playerTurn == "1"){
                      var newPosP1= currentPosP1Int+3;
                      console.log(newPosP1);
                      $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP1==23){
                        setTimeout(function(){$("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=4;
                      }
                      if(newPosP1==48){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=29;

                      }
                      if(newPosP1==63){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=44;

                      }
                      //if there is a ladder
                      if(newPosP1==9){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=30;
                      }
                      if(newPosP1==16){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=36;

                      }
                      if(newPosP1==31){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=52;

                      }
                      if(newPosP1==34){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=54;

                      }
                      if(newPosP1==39){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=60;

                      }
                      //if you go past the finish tile
                      if(newPosP1>64){
                        newPosP1=64-(64-newPosP1);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else if(playerTurn=="2"){
                      var newPosP2= currentPosP2Int+3;
                      $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP2==23){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=4;
                      }
                      if(newPosP2==48){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=29;

                      }
                      if(newPosP2==63){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=44;

                      }
                      //if there is a ladder
                      if(newPosP2==9){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=30;
                      }
                      if(newPosP2==16){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=36;

                      }
                      if(newPosP2==31){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=52;

                      }
                      if(newPosP2==34){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=54;

                      }
                      if(newPosP2==39){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=60;

                      }
                      //if you go past the finish tile
                      if(newPosP2>64){
                        newPosP2=64-(64-newPosP2);
                      setTimeout(function(){$("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else if(playerTurn=="3"){
                      var newPosP3= currentPosP3Int+3;
                      $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP3==23){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=4;
                      }
                      if(newPosP3==48){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=29;

                      }
                      if(newPosP3==63){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=44;

                      }
                      //if there is a ladder
                      if(newPosP3==9){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=30;
                      }
                      if(newPosP3==16){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=36;

                      }
                      if(newPosP3==31){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=52;

                      }
                      if(newPosP3==34){
                    setTimeout(function(){$("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=54;

                      }
                      if(newPosP3==39){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=60;

                      }
                      //if you go past the finish tile
                      if(newPosP3>64){
                        newPosP3=64-(64-newPosP3);
                        setTimeout(function(){$("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else{var newPosP4= currentPosP4Int+3;
                      $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP4==23){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=4;
                      }
                      if(newPosP4==48){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=29;

                      }
                      if(newPosP4==63){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=44;

                      }
                      //if there is a ladder
                      if(newPosP4==9){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=30;
                      }
                      if(newPosP4==16){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=36;

                      }
                      if(newPosP4==31){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=52;

                      }
                      if(newPosP4==34){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=54;

                      }
                      if(newPosP4==39){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=60;

                      }
                      //if you go past the finish tile
                      if(newPosP4>64){
                        newPosP4=64-(64-newPosP4);
                    setTimeout(function(){$("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }
                  }else if(`${actualDeg}`>240 && `${actualDeg}`<=300){
                    // wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
                    wheelResult.textContent = ' 2'
                    console.log("PlayerTurn = "+ playerTurn);
                    if(playerTurn == "1"){
                      var newPosP1= currentPosP1Int+2;
                      console.log(newPosP1);
                      $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP1==23){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=4;
                      }
                      if(newPosP1==48){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=29;

                      }
                      if(newPosP1==63){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=44;

                      }
                      //if there is a ladder
                      if(newPosP1==9){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=30;
                      }
                      if(newPosP1==16){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=36;

                      }
                      if(newPosP1==31){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=52;

                      }
                      if(newPosP1==34){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=54;

                      }
                      if(newPosP1==39){
                    setTimeout(function(){$("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP1=60;

                      }
                      //if you go past the finish tile
                      if(newPosP1>64){
                        newPosP1=64-(64-newPosP1);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else if(playerTurn=="2"){
                      var newPosP2= currentPosP2Int+2;
                      $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP2==23){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=4;
                      }
                      if(newPosP2==48){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=29;

                      }
                      if(newPosP2==63){
                    setTimeout(function(){$("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=44;

                      }
                      //if there is a ladder
                      if(newPosP2==9){
                    setTimeout(function(){$("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=30;
                      }
                      if(newPosP2==16){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=36;

                      }
                      if(newPosP2==31){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=52;

                      }
                      if(newPosP2==34){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=54;

                      }
                      if(newPosP2==39){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP2=60;

                      }
                      //if you go past the finish tile
                      if(newPosP2>64){
                        newPosP2=64-(64-newPosP2);
                        setTimeout(function(){$("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }
                    else if(playerTurn=="3"){
                      var newPosP3= currentPosP3Int+2;
                      $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP3==23){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=4;
                      }
                      if(newPosP3==48){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=29;

                      }
                      if(newPosP3==63){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=44;

                      }
                      //if there is a ladder
                      if(newPosP3==9){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=30;
                      }
                      if(newPosP3==16){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=36;

                      }
                      if(newPosP3==31){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=52;

                      }
                      if(newPosP3==34){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=54;

                      }
                      if(newPosP3==39){
                        setTimeout(function(){$("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP3=60;

                      }
                      //if you go past the finish tile
                      if(newPosP3>64){
                        newPosP3=64-(64-newPosP3);
                        setTimeout(function(){$("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }else{
                      console.log("PlayerTurn = "+ playerTurn);
                      var newPosP4= currentPosP4Int+2;
                      $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP4==23){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=4;
                      }
                      if(newPosP4==48){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=29;

                      }
                      if(newPosP4==63){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=44;

                      }
                      //if there is a ladder
                      if(newPosP4==9){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=30;
                      }
                      if(newPosP4==16){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=36;

                      }
                      if(newPosP4==31){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=52;

                      }
                      if(newPosP4==34){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=54;

                      }
                      if(newPosP4==39){
                        setTimeout(function(){$("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                        newPosP4=60;

                      }
                      //if you go past the finish tile
                      if(newPosP4>64){
                        newPosP4=64-(64-newPosP4);
                    setTimeout(function(){$("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');  }, 2000);
                      }
                    }
                  }else{
                    console.log("PlayerTurn = "+ playerTurn);
                    if(playerTurn == "1"){var newPosP1= currentPosP1Int+1;
                      console.log(newPosP1);
                      $("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');
                      //if there is a slide
                      if(newPosP1==23){
                        setTimeout(function(){$("input[name=cb-player1][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=4;
                    }
                    if(newPosP1==48){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=29;

                    }
                    if(newPosP1==63){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=44;

                    }
                    //if there is a ladder
                    if(newPosP1==9){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=30;
                    }
                    if(newPosP1==16){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=36;

                    }
                    if(newPosP1==31){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=52;

                    }
                    if(newPosP1==34){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=54;

                    }
                    if(newPosP1==39){
                      setTimeout(function(){$("input[name=cb-player1][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP1=60;

                    }
                    //if you go past the finish tile
                    if(newPosP1>64){
                      newPosP1=64-(64-newPosP1);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP1 + "]").attr('checked', 'checked');  }, 2000);
                    }
                  }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+1;
                    $("input[name=cb-player2][value=" + newPosP2 + "]").attr('checked', 'checked');
                    //if there is a slide
                    if(newPosP2==23){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=4;
                    }
                    if(newPosP2==48){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=29;

                    }
                    if(newPosP2==63){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=44;

                    }
                    //if there is a ladder
                    if(newPosP2==9){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=30;
                    }
                    if(newPosP2==16){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=36;

                    }
                    if(newPosP2==31){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=52;

                    }
                    if(newPosP2==34){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=54;

                    }
                    if(newPosP2==39){
                      setTimeout(function(){$("input[name=cb-player2][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP2=60;

                    }
                    //if you go past the finish tile
                    if(newPosP2>64){
                      newPosP2=64-(64-newPosP2);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP2 + "]").attr('checked', 'checked');  }, 2000);
                    }
                  }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+1;
                    $("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');
                      //if there is a slide
                    if(newPosP3==23){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=4;
                    }
                    if(newPosP3==48){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=29;

                    }
                    if(newPosP3==63){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=44;

                    }
                    //if there is a ladder
                    if(newPosP3==9){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=30;
                    }
                    if(newPosP3==16){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=36;

                    }
                    if(newPosP3==31){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=52;

                    }
                    if(newPosP3==34){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=54;

                    }
                    if(newPosP3==39){
                      setTimeout(function(){$("input[name=cb-player3][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP3=60;

                    }
                    //if you go past the finish tile
                    if(newPosP3>64){
                      newPosP3=64-(64-newPosP3);
                      setTimeout(function(){$("input[name=cb-player3][value=" + newPosP3 + "]").attr('checked', 'checked');  }, 2000);
                    }
                  }else{
                    var newPosP4= currentPosP4Int+1;
                    console.log("PlayerTurn = "+ playerTurn);
                    $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
                    //if there is a slide
                    if(newPosP4==23){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 4 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=4;
                    }
                    if(newPosP4==48){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 29 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=29;

                    }
                    if(newPosP4==63){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 44 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=44;

                    }
                    //if there is a ladder
                    if(newPosP4==9){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 30 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=30;
                    }
                    if(newPosP4==16){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 36 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=36;

                    }
                    if(newPosP4==31){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 52 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=52;

                    }
                    if(newPosP4==34){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 54 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=54;

                    }
                    if(newPosP4==39){
                      setTimeout(function(){$("input[name=cb-player4][value=" + 60 + "]").attr('checked', 'checked');  }, 2000);
                      newPosP4=60;

                    }
                    //if you go past the finish tile
                    if(newPosP4>64){
                      newPosP4=64-(64-newPosP4);
                      setTimeout(function(){$("input[name=cb-player1][value=" + newPosP4 + "]").attr('checked', 'checked');  }, 2000);
                    }

        }
        // wheelPlayer.style.color=document.getElementById("turn-player-info").style.color;
        wheelResult.textContent = ' 1';
      }

      //294 deg = 2
    });

})();
