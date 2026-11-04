'use strict';
const questions = [
  { text: 'Maybe you should work on yourself before trying to fill some void.', answer: 'boyfriend' },
  { text: '<em>Oooh</em>, what kind?', answer: 'dog' },
  { text: 'I think it’s better to let it come along on its own time instead of trying to force it. If it’s meant to be, it will be.', answer: 'boyfriend' },
  { text: 'Make sure that you are getting a breed that is well suited for your home size and the general weather of your area!', answer: 'dog' },
  { text: 'Once you start actively looking, you are trying <em>way</em> too hard.', answer: 'boyfriend' },
  { text: 'It’s a huge commitment, but so rewarding!', answer: 'dog' },
  { text: 'You should learn to spend some time alone with your thoughts, then you won’t need one.', answer: 'dog' },
  { text: 'Do your research. Make sure you get one from a reputable breeder.', answer: 'boyfriend' },
  { text: 'Honestly… when I stopped thinking about it, I was so much happier.', answer: 'dog' },
  { text: 'There are so many that need good homes.', answer: 'dog' },
  { text: 'It is the best friendship you can possible have. No matter how bad your day was, when you walk through the door and see how excited and happy they are to see you, you’ll instantly feel uplifted.', answer: 'boyfriend' }
];
const byId = id => document.getElementById(id);
const buttons = [...document.querySelectorAll('.answer')];
let index = 0;
let score = 0;
let answered = false;
function showScreen(id) {
  ['intro', 'quiz', 'results'].forEach(name => { byId(name).hidden = name !== id; });
  window.scrollTo({ top: 0, behavior: 'instant' });
}
function renderQuestion() {
  answered = false;
  const question = questions[index];
  byId('progress').textContent = `${index + 1} of ${questions.length}`;
  byId('quote').innerHTML = question.text;
  byId('quote').className = question.text.length < 30 ? 'short' : question.text.length > 135 ? 'long' : '';
  byId('feedback').textContent = '';
  byId('next').hidden = true;
  buttons.forEach(button => {
    button.disabled = false;
    button.className = 'answer';
    button.querySelector('.mark').textContent = '';
  });
  byId('quote').focus();
}
function start() {
  index = 0;
  score = 0;
  showScreen('quiz');
  renderQuestion();
}
buttons.forEach(button => button.addEventListener('click', () => {
  if (answered) return;
  answered = true;
  const correct = questions[index].answer;
  const success = button.dataset.answer === correct;
  if (success) score++;
  buttons.forEach(option => {
    option.disabled = true;
    if (option.dataset.answer === correct) {
      option.classList.add('correct');
      option.querySelector('.mark').innerHTML = '<img src="check.svg" alt="">';
    } else if (option === button) {
      option.classList.add('wrong');
      option.querySelector('.mark').innerHTML = '<img src="close.svg" alt="">';
    }
  });
  byId('feedback').textContent = success ? 'Correct!' : 'Sorry, incorrect.';
  byId('next').textContent = index === questions.length - 1 ? 'See my score →' : 'Next →';
  byId('next').hidden = false;
  byId('next').focus({ preventScroll: true });
}));
byId('next').addEventListener('click', () => {
  if (!answered) return;
  index++;
  if (index < questions.length) renderQuestion();
  else {
    byId('score').textContent = `${score} out of ${questions.length}`;
    showScreen('results');
    byId('restart').focus({ preventScroll: true });
  }
});
byId('start').addEventListener('click', start);
byId('restart').addEventListener('click', start);
