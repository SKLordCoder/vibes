var x = document.getElementById('myAudio')
let play1 = document.querySelector('.fa-play')
let pause1 = document.querySelector('.fa-pause')
pause1.style.display = 'none'
function playAudio () {
  x.play()
  play1.style.display = 'none'
  pause1.style.display = 'inline-block'
}

function pauseAudio () {
  x.pause()
  play1.style.display = 'inline-block'
  pause1.style.display = 'none'
}
