(function () {
    "use strict";

    $('[data-toggle="sidebar"]').click(function(e){
        e.preventDefault();

        $('.app').toggleClass('sidebar-mini');
    });

    function fixSidebar() {
        let height = document.documentElement.clientHeight;

        if(height <= 768){
            $('.app').addClass('sidebar-mini');
        }else{
            $('.app').removeClass('sidebar-mini');
        }
    }

    fixSidebar();

    $(window).resize(function () {
        fixSidebar();
    });

})();
