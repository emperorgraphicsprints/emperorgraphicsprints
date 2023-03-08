const targets = document.querySelectorAll('[data-aos]');
targets.forEach(target => {
  observer.observe(target);
});

$(document).ready(function() {
    $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
    });  
  });

  AOS.init();