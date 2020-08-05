(function(){ //wrap everything on a function to keep the global scope clean.
  const wheel =document.querySelector('.wheel');
  const startButton = document.querySelector('.buttonWheel');
  const dice =document.querySelector('.dice');
  let deg=0;






  window.addEventListener('click', () => {
    var currentPosP1= document.querySelector('input[name="cb-player1"]:checked').value;
    var currentPosP2= document.querySelector('input[name="cb-player2"]:checked').value;
    var currentPosP3= document.querySelector('input[name="cb-player3"]:checked').value;
    var currentPosP4= document.querySelector('input[name="cb-player3"]:checked').value;
    var playerTurn= document.querySelector('input[name="turn"]:checked').value;

    console.log(currentPosP1);
    console.log(currentPosP2);
    console.log(currentPosP3);
    console.log(currentPosP4);
    console.log(playerTurn);
  });





  startButton.addEventListener('click', () => {
    startButton.style.pointerEvents = 'none'; //to disable the button until it finished so that you don;t spin again.
    deg = Math.floor(2000 + Math.random() * 2000);
    wheel.style.transition='all 10s ease-out'; //ease-out makes it slow down towards the end.
    wheel.style.transform=`rotate(${deg}deg)`;
    wheel.classList.add('blur');
  });

  wheel.addEventListener('transitionend',()=>{

      wheel.classList.remove('blur');
      startButton.style.pointerEvents = 'auto'; //to activate the button again.
      wheel.style.transition='none'; //so that it starts again from 0 and that it
      const actualDeg= deg%360;
      wheel.style.transform=`rotate(${actualDeg}deg)`;


      const nuevoP = document.createElement('p');
      const div = document.getElementById('app');
      var currentPosP1= document.querySelector('input[name="cb-player1"]:checked').value;
      var currentPosP1Int=parseInt(currentPosP1,10);
      var currentPosP2= document.querySelector('input[name="cb-player2"]:checked').value;
      var currentPosP2Int=parseInt(currentPosP2,10);
      var currentPosP3= document.querySelector('input[name="cb-player3"]:checked').value;
      var currentPosP3Int=parseInt(currentPosP3,10);
      var currentPosP4= document.querySelector('input[name="cb-player3"]:checked').value;
      var currentPosP4Int=parseInt(currentPosP4,10);
      var playerTurn= document.querySelector('input[name="turn"]:checked').value;
      if(`${actualDeg}`>0 && `${actualDeg}`<=60){
        var nuevoPText= document.createTextNode('6');
        console.log("PlayerTurn = " + playerTurn);
        if(playerTurn == "1"){var newPosP1= currentPosP1Int+6;
        }else if(playerTurn=="2"){var newPosP2= currentPosP2Int+6;
        }else if(playerTurn=="3"){var newPosP3= currentPosP3Int+6;
        }else{var newPosP4= currentPosP4Int+6;
        }
      }else if(`${actualDeg}`>60 && `${actualDeg}`<=120){
        var nuevoPText= document.createTextNode('5');
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
      }
      $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
      }else if(`${actualDeg}`>120 && `${actualDeg}`<=180){
          var nuevoPText= document.createTextNode('4');
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
            }
          $("input[name=cb-player4][value=" + newPosP4 + "]").attr('checked', 'checked');
        }else if(`${actualDeg}`>180 && `${actualDeg}`<=240){
          var nuevoPText= document.createTextNode('3');
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
          var nuevoPText= document.createTextNode('2');
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
        var nuevoPText= document.createTextNode('1');
      }


      div.append(nuevoP);
      nuevoP.append(nuevoPText);






      //294 deg = 2
});

})();
