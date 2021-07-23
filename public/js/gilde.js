new Glide (".images",{
    type:'carousel',
    
    perView:3,
    perTouch: 2,
    autoplay: 3000,
    hoverpause: true,
    // rewindDuration: 800,
    // animationDuration: 400,
    focusAt:'center',
    gap:80,
    breakpoints: {
        1024: {
          perView: 2
        },
        650:{
          perView:1
        },
        
      }
    
}).mount();