var setImgSize = function(){
  if (window.innerWidth < 475){
    imgSize = 360;
  } else if (window.innerWidth < 650){
    imgSize = 450;
  } else {
    imgSize = 500;
  }
};

setImgSize();

window.addEventListener('resize', function(e){
  setImgSize();
});


window.addEventListener('scroll', function(e){
  // console.log(window.pageYOffset);
  if (window.pageYOffset > imgSize) {
    // console.log("Over");
    scrolling(true, imgSize);
  } else {
    scrolling(false, imgSize);
  }
});

var scrolling = function (funBool, imgSize){
  var socialLinksScrollClass = document.getElementById('socialLinksScroll');
  var socialLinksFixedClass = document.getElementById('socialLinksFixed');
  var topTitleFixedClass = document.getElementById('topTitleFixed');
  var topTitleRespClass = document.getElementById('topTitleResp');
  var topTitleScrollClass = document.getElementById('topTitleScroll');
  if (funBool == true){
    // console.log("this")
    socialLinksFixedClass.style.display = "block";
    topTitleScrollClass.style.display = "block";
    socialLinksScrollClass.style.display = "none";
    topTitleFixedClass.style.display = "none";
    topTitleRespClass.style.display = "none";
  } else {
    socialLinksScrollClass.style.display = "block";
    topTitleFixedClass.style.display = "block";
    socialLinksFixedClass.style.display = "none";
    topTitleScrollClass.style.display = "none";
    if (imgSize != 500){
      topTitleRespClass.style.display = "block";
    }
  }
};
