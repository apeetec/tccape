$(document).ready(function () {
        $('#caixa1,#caixa2,#caixa3,#caixa4,#caixa5').mouseenter(function () {
                $(this).addClass('hoverable efeito_mouse');
                $("#" + this.id + " h4").animate({
                        opacity: '1',
                        fontSize: '40px'
                      }).addClass('cor')


        });
        $('#caixa1,#caixa2,#caixa3,#caixa4,#caixa5').mouseleave(function () {
                $(this).removeClass('hoverable efeito_mouse');
                $("#" + this.id + " h4").animate({
                        opacity: '1',
                        fontSize: '35px'
                      }).removeClass('cor')
        });
});