// $(document).scroll(function () {
//     var tam = $(document).scrollTop();
  
//     if (tam > 270 && tam <= 850) {
//         $("#texto-menu").html("Funcionalidades");
//     }
//     // else if(tam > 850 && tam <= 1500) {
//     //     $("#texto-menu").html("Funcionalidades");
//     // }
//     else if(tam > 850 && tam <= 1500){
//         $("#texto-menu").html("Dados");
//     }
//     // else if(tam > 2400 && tam <= 3000){
//     //     $("#texto-menu").html("Dados");
//     // }
//     else{
//         $("#texto-menu").html("");
//     }
// });




$(document).scroll(function () {
     var tam = $(document).scrollTop();
  
    if (tam > 90 && tam <= 850) {
        $("#texto-menu").html("Nossa Missão");
    }
      else if(tam > 980 && tam <= 1500) {
          $("#texto-menu").html("Funcionalidades");
      }
     else if(tam > 2100 && tam <= 2400){
         $("#texto-menu").html("Eventos");
     }
     else if(tam > 2400 && tam <= 3000){
        $("#texto-menu").html("Pesquisa");
      }
      else if(tam > 3500 && tam <= 4100){
        $("#texto-menu").html("Dados");
      }
     else{
         $("#texto-menu").html("A.P.E");
     }
 });


