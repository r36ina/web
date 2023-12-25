document.getElementById("signInLink").addEventListener("click", function(e) {
    e.preventDefault();
     document.getElementById("signInContainer").style.display = "block";
});
let currentIndex = 0;
const reviews = document.querySelectorAll('.reviews__card');
const indicators = document.querySelectorAll('.reviews__cell-indicator');

function showReview(index) {
  if (index >= 0 && index < reviews.length) {
    reviews.forEach(review => review.style.display = 'none');
    indicators.forEach(indicator => indicator.classList.remove('indicator__active'))
    
    reviews[index].style.display = 'block';
    indicators[index].classList.add('indicator__active');
    currentIndex = index;
  }
}

function showNextReview() {
  let nextIndex = (currentIndex + 1) % reviews.length;
  showReview(nextIndex);
}

function showPrevReview() {
  let prevIndex = (currentIndex - 1 + reviews.length) % reviews.length;
  showReview(prevIndex);
}

document.querySelector('.reviews__cell-but-left').addEventListener('click', showPrevReview);
document.querySelector('.reviews__cell-but-right').addEventListener('click', showNextReview);
