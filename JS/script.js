(function(){ //wrap everything on a function to keep the global scope clean.
  const wheel =document.querySelector('.wheel');
  const startButton = document.querySelector('.button');
  let deg=0;

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
      if(`${actualDeg}`>0 && `${actualDeg}`<=60){
        var nuevoPText= document.createTextNode('Salió 6');
      }else if(`${actualDeg}`>60 && `${actualDeg}`<=120){
          var nuevoPText= document.createTextNode('Salió 5');
      }else if(`${actualDeg}`>120 && `${actualDeg}`<=180){
          var nuevoPText= document.createTextNode('Salió 4');
      }else if(`${actualDeg}`>180 && `${actualDeg}`<=240){
          var nuevoPText= document.createTextNode('Salió 3');
      }else if(`${actualDeg}`>240 && `${actualDeg}`<=300){
          var nuevoPText= document.createTextNode('Salió 2');
      }else{
        var nuevoPText= document.createTextNode('Salió 1');
      }


      div.append(nuevoP);
      nuevoP.append(nuevoPText);






      //294 deg = 2
});

})();
