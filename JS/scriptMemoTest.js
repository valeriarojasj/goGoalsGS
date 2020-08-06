document.addEventListener('DOMContentLoaded', () => {
  //card options
  const cardArray = [
    {
      name: 'memoTest_ODS1',
      img: 'IMG/memoTest_ODS1.png'
    },
    {
      name: 'memoTest_ODS2',
      img: 'IMG/memoTest_ODS2.png'
    },
    {
      name: 'memoTest_ODS3',
      img: 'IMG/memoTest_ODS3.png'
    },
    {
      name: 'memoTest_ODS4',
      img: 'IMG/memoTest_ODS4.png'
    },
    {
      name: 'memoTest_ODS5',
      img: 'IMG/memoTest_ODS5.png'
    },
    {
      name: 'memoTest_ODS6',
      img: 'IMG/memoTest_ODS6.png'
    },
    {
      name: 'memoTest_ODS7',
      img: 'IMG/memoTest_ODS7.png'
    },
    {
      name: 'memoTest_ODS8',
      img: 'IMG/memoTest_ODS8.png'
    },
    {
      name: 'memoTest_ODS9',
      img: 'IMG/memoTest_ODS9.png'
    },
    {
      name: 'memoTest_ODS10',
      img: 'IMG/memoTest_ODS10.png'
    },
    {
      name: 'memoTest_ODS11',
      img: 'IMG/memoTest_ODS11.png'
    },
    {
      name: 'memoTest_ODS12',
      img: 'IMG/memoTest_ODS12.png'
    },
    {
      name: 'memoTest_ODS13',
      img: 'IMG/memoTest_ODS13.png'
    },
    {
      name: 'memoTest_ODS14',
      img: 'IMG/memoTest_ODS14.png'
    },
    {
      name: 'memoTest_ODS15',
      img: 'IMG/memoTest_ODS15.png'
    },
    {
      name: 'memoTest_ODS16',
      img: 'IMG/memoTest_ODS16.png'
    },
    {
      name: 'memoTest_ODS17',
      img: 'IMG/memoTest_ODS17.png'
    },
    {
      name: 'memoTest_ODS2030',
      img: 'IMG/memoTest_ODS2030.png'
    },
    {
      name: 'memoTest_ODS1',
      img: 'IMG/memoTest_ODS1.png'
    },
    {
      name: 'memoTest_ODS2',
      img: 'IMG/memoTest_ODS2.png'
    },
    {
      name: 'memoTest_ODS3',
      img: 'IMG/memoTest_ODS3.png'
    },
    {
      name: 'memoTest_ODS4',
      img: 'IMG/memoTest_ODS4.png'
    },
    {
      name: 'memoTest_ODS5',
      img: 'IMG/memoTest_ODS5.png'
    },
    {
      name: 'memoTest_ODS6',
      img: 'IMG/memoTest_ODS6.png'
    },
    {
      name: 'memoTest_ODS7',
      img: 'IMG/memoTest_ODS7.png'
    },
    {
      name: 'memoTest_ODS8',
      img: 'IMG/memoTest_ODS8.png'
    },
    {
      name: 'memoTest_ODS9',
      img: 'IMG/memoTest_ODS9.png'
    },
    {
      name: 'memoTest_ODS10',
      img: 'IMG/memoTest_ODS10.png'
    },
    {
      name: 'memoTest_ODS11',
      img: 'IMG/memoTest_ODS11.png'
    },
    {
      name: 'memoTest_ODS12',
      img: 'IMG/memoTest_ODS12.png'
    },
    {
      name: 'memoTest_ODS13',
      img: 'IMG/memoTest_ODS13.png'
    },
    {
      name: 'memoTest_ODS14',
      img: 'IMG/memoTest_ODS14.png'
    },
    {
      name: 'memoTest_ODS15',
      img: 'IMG/memoTest_ODS15.png'
    },
    {
      name: 'memoTest_ODS16',
      img: 'IMG/memoTest_ODS16.png'
    },
    {
      name: 'memoTest_ODS17',
      img: 'IMG/memoTest_ODS17.png'
    },
    {
      name: 'memoTest_ODS2030',
      img: 'IMG/memoTest_ODS2030.png'
    }
  ]

  cardArray.sort(() => 0.5 - Math.random())

  const myGrid = document.querySelector('.myGrid')
  const resultDisplay = document.querySelector('#result')
  var cardsChosen = []
  var cardsChosenId = []
  const cardsWon = []

  //create your board
  function createBoard() {
    for (let i = 0; i < cardArray.length; i++) {
      var card = document.createElement('img')
      card.setAttribute('src', 'IMG/memoTest_blank.png')
      card.setAttribute('height', 100)
      card.setAttribute('width', 100)
      card.setAttribute('data-id', i)


      card.addEventListener('click', flipCard)
      myGrid.appendChild(card)
    }
  }

  //check for matches
  function checkForMatch() {
    var cards = document.querySelectorAll('img')
    const optionOneId = cardsChosenId[0]
    const optionTwoId = cardsChosenId[1]

    if(optionOneId == optionTwoId) {
      cards[optionOneId].setAttribute('src', 'IMG/memoTest_blank.png')
      cards[optionTwoId].setAttribute('src', 'IMG/memoTest_blank.png')
      alert('You have clicked the same image!')
    }
    else if (cardsChosen[0] === cardsChosen[1]) {
      alert('You found a match')
      cards[optionOneId].setAttribute('src', 'IMG/memoTest_white.png')
      cards[optionTwoId].setAttribute('src', 'IMG/memoTest_white.png')
      cards[optionOneId].removeEventListener('click', flipCard)
      cards[optionTwoId].removeEventListener('click', flipCard)
      cardsWon.push(cardsChosen)
    } else {
      cards[optionOneId].setAttribute('src', 'IMG/memoTest_blank.png')
      cards[optionTwoId].setAttribute('src', 'IMG/memoTest_blank.png')
      alert('Sorry, try again')
    }
    cardsChosen = []
    cardsChosenId = []
    resultDisplay.textContent = cardsWon.length
    if  (cardsWon.length === cardArray.length/2) {
      resultDisplay.textContent = 'Congratulations! You found them all!'
    }
  }

  //flip your card
  function flipCard() {
    var cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenId.push(cardId)
    this.setAttribute('src', cardArray[cardId].img)
    if (cardsChosen.length ===2) {
      setTimeout(checkForMatch, 500)
    }
  }

  createBoard()
})
