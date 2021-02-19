const feedback = document.querySelector('#feedback');
const feedbackVideo = feedback.querySelectorAll('.feedback-item');

feedbackVideo.forEach(item => {
  const video = item.querySelector('video');

  feedbackSlider.on('slideChangeTransitionEnd', function (e) {
    const nextVideo = e.wrapperEl.querySelector('.swiper-slide-active video');
    video.pause();
    nextVideo.play();
  });
});


window.addEventListener('scroll', function (event) {
  if (isInViewport(feedback)) {
    const video = feedbackVideo[0].querySelector('video');
    video.play();
  }
}, false);

const isInViewport = function (elem) {
  var bounding = elem.getBoundingClientRect();
  return bounding.bottom <= (window.innerHeight || document.documentElement.clientHeight)
};