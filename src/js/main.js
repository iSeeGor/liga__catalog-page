
// Nice  Select
$(function() {

  preventDefaultLinks();
  selectCustom();
  filterTabsToggle();
  categoryLinksToggle();
  bgLinesResize();
  hamburgerToggle();
 
});


// Custom Select's
const selectCustom = () => {
  
  $('select').niceSelect();

}


// Prevent Defult for all 'a' tag's
const preventDefaultLinks = () => {

  const prventLinks = document.querySelectorAll('a');

  for(let i = 0; i < prventLinks.length; i++){

    prventLinks[i].addEventListener('click', function(e){
      
      e.preventDefault();
    
    })
  
  }
}


// Toggle for Filter Tabs
const filterTabsToggle = () => {

  const tabs = document.querySelectorAll('.button__filter-tab');

  function toggle(tab){

    for(let i = 0; i < tab.length; i++){

      tab[i].addEventListener('click', function(e){

        let currentTab = this;     


        for(let i = 0; i < tab.length; i++){

          if(currentTab == tab[i]){
            currentTab.classList.add('filter-tab--active')
          }else{
            tab[i].classList.remove('filter-tab--active')
          }

        }

        e.preventDefault();
      })

    }
    
  }
  toggle(tabs);

}


// Toggle Class for Category List Links
const categoryLinksToggle = () => {

  const catLinks = document.querySelectorAll('.category-list__link');

  for(let i = 0; i < catLinks.length; i++ ){

    catLinks[i].addEventListener('click', function(e){     
      
      const currentLink = this;

      for(let i = 0; i < catLinks.length; i++ ){

        if(currentLink != catLinks[i]){
          catLinks[i].classList.remove('category-list__link--active')
        } else {
          currentLink.classList.add('category-list__link--active')
        }

      }
      
      e.preventDefault();
    })
  }
}
  

// Header Sticky + Add Class

// window.onscroll = () => { sticky() };

// let stickyHeader = document.querySelector('.site__header');
// let paddingTop = document.querySelector('.site');


// function sticky() {
//   if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0){
//     stickyHeader.classList.add('site__header--sticky');
//     paddingTop.style.paddingTop = '120px';
//   } else {
//     stickyHeader.classList.remove('site__header--sticky');
//     paddingTop.style.paddingTop = '0';
//   }
// };


// Background Lines Grig Risize
const bgLinesResize = () => {

  (function() {
    var throttle = function(type, name, obj) {
        obj = obj || window;
        var running = false;
        var func = function() {
            if (running) { return; }
            running = true;
            requestAnimationFrame(function() {
                obj.dispatchEvent(new CustomEvent(name));
                running = false;
            });
        };
        obj.addEventListener(type, func);
    };

    throttle("resize", "optimizedResize");
  })();

  window.addEventListener("optimizedResize", function() {

    // call function background resize
    bgLinesResize();

  });

  const bgLinesResize = () => {
    const firstBgLine = document.querySelector('.bg-lines>span');
    const container = document.querySelector('main .container');
    const containerWidth = container.clientWidth;
    const windowWidth = document.body.clientWidth;

    let bgLineMargin = 0;

    if(windowWidth <= 1920 &&  windowWidth >= 1500){
      bgLineMargin = ((windowWidth - containerWidth)/2) - 192;      

    } else {
      bgLineMargin = ((windowWidth - containerWidth)/2)-1;
    }

    // bgLineMargin = (windowWidth - containerWidth)/2;

    firstBgLine.style.marginLeft = Math.floor(bgLineMargin) + 'px';
    
  }

  bgLinesResize();
};

// Hanburger Toggle
const hamburgerToggle = () => {

  const hamburger = document.querySelector('.mobile-header__hamburger');

  hamburger.addEventListener('click', function(){  

    hamburger.classList.toggle('mobile-header__hamburger--active');

  })
  
};







