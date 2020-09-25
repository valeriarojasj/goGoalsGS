//Aca voy a empezar lo que necesito para el Modal
(function() {
  var questionSet1 = [{
    question: "¿Cómo dirías que alguien está viviendo,en una situación de pobreza?",
    choices: [ "No tiene un Smartphone", "No es capaz de costear sus necesidades básicas como comida, cuidados médicos,educación…", "No está bien vestido/a"],
    correctAnswer: 1 //el conteo empieza desde 0, osea que 1 es la segunda respuesta
  }, {
    question: "¿Hay menos gente viviendo en situación de pobreza que hace 25 años?",
    choices: [ "No; 1000 millones de personas más están viviendo en la pobreza", "Sí; 1000 millones de personas han conseguido salir de la pobreza"],
    correctAnswer: 1
  }, {
    question: "¿Cuánta gente vive en situación de pobreza en el mundo?",
    choices: ["Más de 800 personas","Más de 8000 personas", "Más de 800 millones de personas"],
    correctAnswer: 2
  }, {
    question: "La mayoría de la gente en situación de pobreza vive en:",
    choices: ["Europa","Norte y Sudamérica","África y Asia"],
    correctAnswer: 2
  }, {
    question: "En 1990, casi 4 de cada 10 personas (38%) vivía en una situación de pobreza extrema. ¿Cuánta gente vive hoy en día en esta situación?",
    choices: ["1 de cada 10","3 de cada 10","5 de cada 10"],
    correctAnswer: 0
  }];

  var questionSet2 = [{
    question: "¿Se produce suficiente comida en el mundo para alimentar a todos sus habitantes?",
    choices: ["No; porque me entra hambre todo el tiempo", "Sí; se produce suficiente comida sana, pero no se producen suficientes dulces y refrescos", "Sí que se produce suficiente comida, pero no todo el mundo puede permitirse comprarla"],
    correctAnswer: 2
  }, {
    question: "Verdadero o falso: El número de personas con hambre en el mundo está disminuyendo",
    choices: ["Verdadero","Falso"],
    correctAnswer: 0
  }, {
    question: "¿Cuánta gente en el mundo no come lo suficiente para poder tener una buena salud?",
    choices: ["Más de 90 personas", "Más de 9000 personas", "Más de 900 millones de personas"],
    correctAnswer: 2
  }, {
    question: "¿Cuál de los siguientes enunciados es verdadero?",
    choices: ["Necesitas al menos tomar un refresco al día para estar sano y en buena forma", "Hay suficiente comida en el mundo para alimentar a todas las personas", "Te puedes mantener sano si no comes ni frutas ni verduras"],
    correctAnswer: 1
  }, {
    question: "¿Qué es la malnutrición?",
    choices: ["Cuando no comes 3 platos al día", "Cuando no comes carne cada día", "Cuando no comes suficiente comida sana durante un cierto periodo de tiempo"],
    correctAnswer: 2
  }];

  var questionSet3 = [{
    question: "¿Cuál es la esperanza de vida media en el mundo?",
    choices: ["50 años", "60 años", "70 años"],
    correctAnswer: 2
  }, {
    question: "Qué cosas podrían ayudar a que no muriesen más niños menores?",
    choices: ["Comida nutritiva y agua potable", "Refrescos y teléfonos móviles", "Refrescos y agua potable"],
    correctAnswer: 0
  }, {
    question: "¿Qué es lo mejor para un bebé recién nacido?",
    choices: ["Ser alimentado mediante un biberón", "Beber agua", "Que su madre le dé el pecho"],
    correctAnswer: 2
  }, {
    question: "¿Cuántos minutos de ejercicio deben hacer los niños de entre 7 y 17 años cada día?",
    choices: ["60 minutos", "30 minutos","No necesitan hacer ejercicio cada día"],
    correctAnswer: 0
  }, {
    question: "¿Cuál de estos insectos ha ayudado a propagar la malaria?",
    choices: ["Mosquitos","Libélulas","Luciérnagas" ],
    correctAnswer: 0
  }];




  var questionCounter = 0; //Tracks question number
  var selections = []; //Array containing user choices
  var quiz = $('#quiz'); //Quiz div object

  // Display initial question
  displayNext();

  // Click handler for the 'next' button
  $('#next').on('click', function (e) {
    e.preventDefault();

    // Suspend click listener during fade animation
    if(quiz.is(':animated')) {
      return false;
    }
    choose();

    // If no user selection, progress is stopped
    if (isNaN(selections[questionCounter])) {
      alert('Please make a selection!');
    } else {
      questionCounter++;
      displayNext();
    }
  });

  // Click handler for the 'prev' button
  $('#prev').on('click', function (e) {
    e.preventDefault();

    if(quiz.is(':animated')) {
      return false;
    }
    choose();
    questionCounter--;
    displayNext();
  });

  // Click handler for the 'Start Over' button
  $('#start').on('click', function (e) {
    e.preventDefault();

    if(quiz.is(':animated')) {
      return false;
    }
    questionCounter = 0;
    selections = [];
    displayNext();
    $('#start').hide();
  });

  // Animates buttons on hover
  $('.button').on('mouseenter', function () {
    $(this).addClass('active');
  });
  $('.button').on('mouseleave', function () {
    $(this).removeClass('active');
  });

  // Creates and returns the div that contains the questions and
  // the answer selections
  function createQuestionElement(index) {
    var qElement = $('<div>', {
      id: 'question'
    });

    var header = $('<h2>Question ' + (index + 1) + ':</h2>');
    qElement.append(header);

    var question = $('<p>').append(questions[index].question);
    qElement.append(question);

    var radioButtons = createRadios(index);
    qElement.append(radioButtons);

    return qElement;
  }

  // Creates a list of the answer choices as radio inputs
  function createRadios(index) {
    var radioList = $('<ul>');
    var item;
    var input = '';
    for (var i = 0; i < questions[index].choices.length; i++) {
      item = $('<li>');
      input = '<input type="radio" name="answer" value=' + i + ' />';
      input += questions[index].choices[i];
      item.append(input);
      radioList.append(item);
    }
    return radioList;
  }

  // Reads the user selection and pushes the value to an array
  function choose() {
    selections[questionCounter] = +$('input[name="answer"]:checked').val();
  }

  // Displays next requested element
  function displayNext() {
    quiz.fadeOut(function() {
      $('#question').remove();

      if(questionCounter < questions.length){
        var nextQuestion = createQuestionElement(questionCounter);
        quiz.append(nextQuestion).fadeIn();
        if (!(isNaN(selections[questionCounter]))) {
          $('input[value='+selections[questionCounter]+']').prop('checked', true);
        }

        // Controls display of 'prev' button
        if(questionCounter === 1){
          $('#prev').show();
        } else if(questionCounter === 0){

          $('#prev').hide();
          $('#next').show();
        }
      }else {
        var scoreElem = displayScore();
        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
    });
  }

  // Computes score and returns a paragraph element to be displayed
  function displayScore() {
    var score = $('<p>',{id: 'question'});

    var numCorrect = 0;
    for (var i = 0; i < selections.length; i++) {
      if (selections[i] === questions[i].correctAnswer) {
        numCorrect++;
      }
    }

    score.append('You got ' + numCorrect + ' questions out of ' +
                 questions.length + ' right!!!');
    return score;
  }
})();
