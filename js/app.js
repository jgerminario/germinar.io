window.addEventListener('scroll', function(e){
  // console.log(window.pageYOffset);
  if (window.pageYOffset > 600) {
    // console.log("Over");
    scrolling(true);
  } else {
    scrolling(false);
  }
});

var scrolling = function (funBool){
  var socialLinksScrollClass = document.getElementById('socialLinksScroll');
  var socialLinksFixedClass = document.getElementById('socialLinksFixed');
  var topTitleFixedClass = document.getElementById('topTitleFixed');
  var topTitleScrollClass = document.getElementById('topTitleScroll');
  if (funBool == true){
    // console.log("this")
    socialLinksFixedClass.style.display = "block"
    topTitleScrollClass.style.display = "block"
    socialLinksScrollClass.style.display = "none"
    topTitleFixedClass.style.display = "none"
  } else {
    socialLinksScrollClass.style.display = "block"
    topTitleFixedClass.style.display = "block"
    socialLinksFixedClass.style.display = "none"
    topTitleScrollClass.style.display = "none"
  }
};
