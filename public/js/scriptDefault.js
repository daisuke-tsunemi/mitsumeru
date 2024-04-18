// Lenis 慣性スクロール
const lenis = new Lenis({
    smoothTouch: true, 
});
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

// マウスストーカー
const stalker = document.getElementById('stalker');
//aタグにホバー中かどうかの判別フラグ
let hovFlag = false;
document.addEventListener('mousemove', function (e) {
    if (!hovFlag) {
    stalker.style.transform = 'translate(' + e.clientX + 'px, ' + e.clientY + 'px)';
    }
});
const linkElem = document.querySelectorAll('a:not(.no_stick_)');
for (let i = 0; i < linkElem.length; i++) {
    linkElem[i].addEventListener('mouseover', function (e) {
        hovFlag = true;
        stalker.classList.add('is-hov');
        let rect = e.target.getBoundingClientRect();
        let posX = rect.left + (rect.width / 2);
        let posY = rect.top + (rect.height / 2);
        stalker.style.transform = 'translate(' + posX + 'px, ' + posY + 'px)';
    });
    linkElem[i].addEventListener('mouseout', function (e) {
        hovFlag = false;
        stalker.classList.remove('is-hov');
    });
}

// ヨコスクロールエリア
  const stickySections = [...document.querySelectorAll('.pWorks__sticky')]
  window.addEventListener('scroll', (e) => {
      for(let i = 0; i < stickySections.length; i++){
          transform(stickySections[i])
      }
  })
  function transform(section) {
      const offsetTop = section.parentElement.offsetTop;
      const scrollSection = section.querySelector('.pWorks__scroll')
      let percentage = ((window.scrollY - offsetTop) / window.innerHeight) * 100;
      percentage = percentage < 0 ? 0 : percentage > 300 ? 300 : percentage;
      scrollSection.style.transform = `translate3d(${-(percentage)}vw, 0, 0)`
  }