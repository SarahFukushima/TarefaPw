$(document).ready(function(){

    // Monitorar o clique em cima do botão btn-send
    $('.btn-send').click(function(e){
        e.preventDefault()

        let dados = $("#form").serialize()
        
        $.ajax({
            type: 'POST',
            dataType: 'JSON',
            assync: true,
            data: dados,
            url: '../modelo/retorno.php',
            success: function(){}
        })

    })

})