const swiper = new Swiper(".swiper", {
  direction: "vertical",
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },
});

swiper.on('transitionEnd', function (e) {
  if(this.realIndex==0){
    document.querySelector("#home_page").style.background = '#3DCFF7';
  }
  else if(this.realIndex==1){
    document.querySelector("#home_page").style.background = '#CC4DFF';
  }
  else if(this.realIndex==2){
    document.querySelector("#home_page").style.background = '#22588A';
  }
});

swiper.on('slideChange', function (e) {
  console.log('*** mySwiper.activeIndex', swiper.activeIndex);
});


