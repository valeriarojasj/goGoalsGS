var button = document.getElementById("playButton");
var audio = document.getElementById("backgroundMusic");
var toggleFx = document.getElementById("activateSound")


button.addEventListener("click", function(){
  if(audio.paused){
    audio.play();
    button.innerHTML = '<i class="fas fa-pause"></i>';
  } else {
    audio.pause();
    button.innerHTML = '<i class="fas fa-play"></i>';
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










      //294 deg = 2
});

})();
