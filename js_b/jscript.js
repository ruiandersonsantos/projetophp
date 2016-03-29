$(document).ready(function () {

    $(".scp_btn").click(function () {

        var url = $(this).attr("itemid");
        
        var idBotao = $(this).attr("id");

        var id = url.substr(url.indexOf("=") + 1, 100000000);

        var status = "status" + id;

        var statuValor = $("#" + status).html();
                   
        

         $.get(url+"&status="+statuValor)
         .success(function () {
         //window.location.href = url;
         
             if (statuValor == 0) {
                    $("#" + status).html(1);
                    status = 1;
                    $("#"+idBotao).html("Desativar").removeClass("btn-primary").addClass("btn-success");
                } else {
                    $("#" + status).html(0);
                    status = 0;
                    $("#"+idBotao).html("Ativar").removeClass("btn-success").addClass("btn-primary");
                }
         
         })
         .error(function (error) {
         alert('ERROR');
         });
        
    });

});
