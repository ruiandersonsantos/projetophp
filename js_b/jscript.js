$(document).ready(function () {

    $(".scp_btn").click(function () {

        var url = $(this).attr("id");

        var id = url.substr(url.indexOf("=") + 1, 100000000);

        var status = "status" + id;

        var statuValor = $("#" + status).html();
                        
        $.ajax({
            url: url+"&status="+statuValor, //caminho do arquivo a ser executado
            dataType: 'html', //tipo do retorno
            type: 'get', //metodo de envio
            success: function (data, textStatus) {
                //retorno dos dados
                if (statuValor == 0) {
                    $("#" + status).html(1);
                    status = 1;
                } else {
                    $("#" + status).html(0);
                    status = 0;
                }
            },
            error: function (xhr, er) {
                //tratamento de erro
            }
        });

        /*
         $.get(url)
         .success(function () {
         //window.location.href = url;
         
         if (statuValor == 0) {
         $("#" + status).html(1);
         } else {
         $("#" + status).html(0);
         }
         
         })
         .error(function (error) {
         alert('ERROR');
         });
         */
    });

});
