$(document).ready(function () {
    
    //função simples só para atualizar os arquivos do diretório após uma nova imagem ser enviada
    function updateList(){
        
        $.ajax({
            url: "list-dirAjax.php",
            type: "POST",
            data: "data",
            success: function (data) {
                
                $(".list-dir").html(data);
            }
        });
    }

    //configuracao base do toast.
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
    });

    $("#form").on('submit', (function (e) {

        e.preventDefault();

        $.ajax({
            url: "formAjax.php",
            type: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {

                if (data == "success") {

                    Toast.fire({
                        icon: 'success',
                        color: '#98d874',
                        background: '#f5fdf0',
                        title: 'Imagem enviada com sucesso!'
                    });

                    //reseta o form
                    $('#form').trigger("reset");
                    
                    //atualiza a listagem do diretório
                    updateList();
                } else {

                    Toast.fire({
                        icon: 'error',
                        color: '#ef6a6a',
                        background: '#ffcccc',
                        title: 'O envio de imagem é obrigatório!'
                    });
                }
            },
            error: function (data) {

                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Estamos com problemas no momento, tenta novamente mais tarde!',
                });
            }
        });
    }));
});