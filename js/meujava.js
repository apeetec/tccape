$(document).scroll(function () {
    var tam = $(document).scrollTop();
  
    if (tam > 100 && tam <= 850) {
        $("#texto-menu").html("Missão");
    }
    else if(tam > 850 && tam <= 2000) {
        $("#texto-menu").html("Funcionalidades");
    }
    else{
        $("#texto-menu").html("A.P.E");
    }
});


