class AudioController {
    constructor() {
        this.bgMusic = new Audio('audio/african_fun_long.mp3');
        this.flipSound = new Audio('audio/office_ball_point_pen_click.mp3');
        this.matchSound = new Audio('audio/zapsplat_multimedia_game_sound_fun_arcade_organ_positive_win_expression_54270.mp3');
        this.victorySound = new Audio('audio/zapsplat_multimedia_game_sound_soft_warm_subtle_complete_success_53012.mp3');
        this.gameOverSound = new Audio('audio/zapsplat_multimedia_game_sound_fun_arcade_organ_short_negative_fail_lose_003_54276.mp3');
        this.bgMusic.volume = 0.3;
        this.bgMusic.loop = true;
        /*Me modificaron el nombre*/

    }
    startMusic() {
        this.bgMusic.play();
    }
    stopMusic() {
        this.bgMusic.pause();
        this.bgMusic.currentTime = 0;
    }
    flip() {
        this.flipSound.play();
    }
    match() {
        this.matchSound.play();
    }
    victory() {
        this.stopMusic();
        this.victorySound.play();
    }
}

class MixOrMatch {
    constructor(initialTime, cards) {
        this.cardsArray = cards;
        this.initialTime = initialTime;
        //Create minutes to count
        this.minutes = "0" + 0;
        this.seconds = initialTime;
        this.timer = document.getElementById('total-time')
        this.ticker = document.getElementById('flips');
        this.audioController = new AudioController();
    }

    startGame() {
        this.totalClicks = 0;
        this.seconds = this.initialTime;
        this.cardToCheck = null;
        this.matchedCards = [];
        this.busy = true;
        setTimeout(() => {
            this.audioController.startMusic();
            this.shuffleCards(this.cardsArray);
            this.countUp = this.startCountup();
            this.busy = false;
        }, 500)
        this.hideCards();
        this.timer.innerText = "00:00";
        this.ticker.innerText = this.totalClicks;
    }
    startCountup() {
        return setInterval(() => {
          //Getting seconds and minutes
            this.seconds++;
            if (this.seconds < 10) {
              this.seconds = "0" + this.seconds;
            }
            if (this.seconds == 60) {
              this.minutes++;
              if (this.minutes < 10) this.minutes = "0" + this.minutes;
              this.seconds = "0" + 0;
            }
            this.timer.innerText = this.minutes + ":" + this.seconds;
        }, 1000);
    }
    victory() {
        clearInterval(this.countUp);
        this.audioController.victory();
        document.getElementById('victory-text').classList.add('visible');
    }
    hideCards() {
        this.cardsArray.forEach(card => {
            card.classList.remove('visible');
            card.classList.remove('matched');
        });
    }
    flipCard(card) {
        if(this.canFlipCard(card)) {
            this.audioController.flip();
            this.totalClicks++;
            this.ticker.innerText = this.totalClicks;
            card.classList.add('visible');

            if(this.cardToCheck) {
                this.checkForCardMatch(card);
            } else {
                this.cardToCheck = card;
            }
        }
    }
    checkForCardMatch(card) {
        if(this.getCardType(card) === this.getCardType(this.cardToCheck))
            this.cardMatch(card, this.cardToCheck);
        else
            this.cardMismatch(card, this.cardToCheck);

        this.cardToCheck = null;
    }
    cardMatch(card1, card2) {
        this.matchedCards.push(card1);
        this.matchedCards.push(card2);
        card1.classList.add('matched');
        card2.classList.add('matched');
        this.audioController.match();
        if(this.matchedCards.length === this.cardsArray.length)
            this.victory();
    }
    cardMismatch(card1, card2) {
        this.busy = true;
        setTimeout(() => {
            card1.classList.remove('visible');
            card2.classList.remove('visible');
            this.busy = false;
        }, 1000);
    }
    shuffleCards(cardsArray) { // Fisher-Yates Shuffle Algorithm.
        for (let i = cardsArray.length - 1; i > 0; i--) {
            let randIndex = Math.floor(Math.random() * (i + 1));
            cardsArray[randIndex].style.order = i;
            cardsArray[i].style.order = randIndex;
        }
    }
    getCardType(card) {
        return card.getElementsByClassName('card-value')[0].src;
    }
    canFlipCard(card) {
        return !this.busy && !this.matchedCards.includes(card) && card !== this.cardToCheck;
    }
}

if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', ready);
} else {
    ready();
}

function ready() {
    let overlays = Array.from(document.getElementsByClassName('overlay-text'));
    let cards = Array.from(document.getElementsByClassName('card'));
    let game = new MixOrMatch(0, cards);

    overlays.forEach(overlay => {
        overlay.addEventListener('click', () => {
            overlay.classList.remove('visible');
            game.startGame();

        });
    });

    cards.forEach(card => {
        card.addEventListener('click', () => {
            game.flipCard(card);
        });
    });
}
