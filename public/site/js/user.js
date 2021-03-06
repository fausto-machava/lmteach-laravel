$('#pedi_nivel').change(function() {
    var nivel = $('#pedi_nivel').val()
    if (nivel == '') {
        $('#monografia').removeClass('d-none')
        $('#trabCurso').removeClass('d-none')
        $('#trabMestrado').removeClass('d-none')
        $('#teste').removeClass('d-none')
    } else if (nivel == 'Médio') {
        $('#monografia').addClass('d-none')
        $('#trabCurso').addClass('d-none')
        $('#trabMestrado').addClass('d-none')
        $('#teste').removeClass('d-none')
    } else if (nivel == 'Técnico profissional') {
        $('#monografia').addClass('d-none')
        $('#trabCurso').removeClass('d-none')
        $('#trabMestrado').addClass('d-none')
        $('#teste').removeClass('d-none')
    } else {
        $('#monografia').removeClass('d-none')
        $('#trabCurso').removeClass('d-none')
        $('#trabMestrado').removeClass('d-none')
        $('#teste').removeClass('d-none')
    }
})

$('#btnCadReg').click(function() {
    $('#login').modal('hide');
    $('#cadUsers').modal('toggle');
})
$('#btnTermos').click(function() {
    $('#cadUsers').modal('hide');
    $('#termosModal').modal('toggle');
})
$('#termosEsp').click(function() {
    $('#cadUsers').modal('hide');
    $('#termosEspModal').modal('toggle');
})
$('#termosCompro').click(function() {
    $('#cadUsers').modal('hide');
    $('#termosCompromisso').modal('toggle');
})
$('#turnEspec').click(function() {
    $('#cadUsers').modal('toggle');
})

$(function() {
    $('#formLogin').submit(function(e) {
        e.preventDefault();
        $.ajax({
            url: "/login",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    // $('#root').load("/usuario")
                    window.location.href = "/usuario"
                } else {
                    $('#logError').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })


    $('#regCliente').submit(function(e) {
        e.preventDefault();
        var senha = $('#cli_senha').val()
        var csenha = $('#cli_csenha').val()
        if (senha != csenha) {
            $('#txtConfirm').addClass('animate__animated animate__bounce')
            $('#txtConfirm').removeClass('d-none')
            return
        }

        $.ajax({
            url: "/addicionarCliente",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('.messageBox').removeClass('d-none').html(response.mensagem)
                } else {
                    $('.messageBox').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })

    $('#sendEmailPassReset').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "/resetPassword",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('#answer').removeClass('d-none').html(response.mensagem)
                } else {
                    $('#answer').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })

    $('#regEspecialista').submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: "/addicionarEspecialista",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('.load').removeClass('d-none')
            },
            complete: function() {
                $('.load').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('.espError').addClass('alert-success').html(response.mensagem)
                    $('.espError').removeClass('d-none').html(response.mensagem)
                } else {
                    $('.espError').addClass('alert-danger').html(response.mensagem)
                    $('.espError').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })



    $('#resetPass').submit(function(e) {
        e.preventDefault();
        var senha = $('#user_pass').val()
        var csenha = $('#user_cpass').val()

        if (senha != csenha) {
            $('#err_msg').addClass('animate__animated animate__bounce')
            $('#err_msg').removeClass('d-none')
            return
        }

        $.ajax({
            url: "/resetPasswordMain",
            method: 'POST',
            data: new FormData(this),
            contentType: false,
            processData: false,
            enctype: "multipart/form-data",
            beforeSend: function() {
                $('#loadReset').removeClass('d-none')
            },
            complete: function() {
                $('#loadReset').addClass('d-none')
            },
            success: function(response) {
                if (response.success === true) {
                    $('#mensagensResetPass').addClass('alert-success').removeClass('d-none').html(response.mensagem)
                } else {
                    $('#mensagensResetPass').addClass('alert-danger').removeClass('d-none').html(response.mensagem)
                }
            }
        })
    })

    $('input[type="file"][name="cli_img"]').val('');
    $('input[type="file"][name="cli_img"]').change(function() {
        var img_path = $(this)[0].value
        console.log($('input[type="file"][name="cli_img"]'))
        var img_holder = $('.img-holder')
        var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase()
        if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
            if (typeof(FileReader) != 'undefined') {
                img_holder.empty()
                var reader = new FileReader()
                reader.onload = function(e) {
                    $('<img/>', { 'src': e.target.result, 'class': 'img-fluid', 'style': 'max-width:150px; margin-bottom: 10px;' }).appendTo(img_holder);
                }
                img_holder.show()
                reader.readAsDataURL($(this)[0].files[0])
            } else {
                $(img_holder).html('Esse ficheiro não suporte leitura de ficheiro')
            }
        } else {
            $('.errorFileType').removeClass('d-none')
            $(img_holder).empty()
        }
    })

    $('input[type="file"][name="esp_img"]').val('');
    $('input[type="file"][name="esp_img"]').change(function() {
        var img_path = $(this)[0].value
        console.log($('input[type="file"][name="esp_img"]'))
        var img_holder = $('.img-holder-esp')
        var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase()
        if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
            if (typeof(FileReader) != 'undefined') {
                img_holder.empty()
                var reader = new FileReader()
                reader.onload = function(e) {
                    $('<img/>', { 'src': e.target.result, 'class': 'img-fluid', 'style': 'max-width:150px; margin-bottom: 10px;' }).appendTo(img_holder);
                }
                img_holder.show()
                reader.readAsDataURL($(this)[0].files[0])
            } else {
                $(img_holder).html('Tipo de ficheiro invalido')
            }
        } else {
            $('.errorFileType-esp').removeClass('d-none')
            $(img_holder).empty()
        }
    })
})

//tabs
var tab1 = document.getElementById("tab1");
var tab2 = document.getElementById("tab2");
var tab3 = document.getElementById("tab3");

//set active step
tab1.style.display = "block";

//proximo btn
var next1 = document.getElementById('next1')
var next2 = document.getElementById('next2')

//anterior btn
var ant1 = document.getElementById('ante1')
var ant2 = document.getElementById('ante2')


next1.onclick = function() {

    var senha = $('#esp_senha').val()
    var csenha = $('#esp_csenha').val()
    var nome = $('#esp_nome').val()
    var email = $('#esp_email').val()
    var telefone = $('#esp_telefone').val()
    if (nome == "") {
        $('#esp_nome').focus();
        $('#esp_nome').css('border-color', 'red');
        $('#esp_nome').addClass('bounce');
    } else if (telefone == "") {
        $('#esp_telefone').focus();
        $('#esp_telefone').css('border-color', 'red');
        $('#esp_telefone').addClass('bounce');
    } else if (email == "") {
        $('#esp_email').focus();
        $('#esp_email').css('border-color', 'red');
        $('#esp_email').addClass('bounce');
    } else if (senha == "") {
        $('#esp_senha').focus();
        $('#esp_senha').css('border-color', 'red');
        $('#esp_senha').addClass('bounce');
    } else if (csenha == "") {
        $('#esp_csenha').focus();
        $('#esp_csenha').css('border-color', 'red');
        $('#esp_csenha').addClass('bounce');
    } else if (senha != csenha) {
        $('#txtEspConfirm').removeClass('d-none')
        return
    } else {
        $('#esp_nome').css('border-color', '');
        $('#esp_nome').removeClass('bounce');
        $('#esp_telefone').css('border-color', '');
        $('#esp_telefone').removeClass('bounce');
        $('#esp_email').css('border-color', '');
        $('#esp_email').removeClass('bounce');
        $('#esp_senha').css('border-color', '');
        $('#esp_senha').removeClass('bounce');
        $('#esp_csenha').css('border-color', '');
        $('#esp_csenha').removeClass('bounce');
        tab1.style.display = "none";
        tab2.style.display = "block";
    }

}


next2.onclick = function() {
    var instituicao = $('#esp_instituicao').val()
    var especialidade = $('#esp_especialidade').val()
    var estado = $('#esp_estado').val()
    var nivel = $('#esp_nivel').val()
    if (instituicao == "") {
        $('#esp_instituicao').focus();
        $('#esp_instituicao').css('border-color', 'red');
        $('#esp_instituicao').addClass('bounce');
    } else if (especialidade == "") {
        $('#esp_especialidade').focus();
        $('#esp_especialidade').css('border-color', 'red');
        $('#esp_especialidade').addClass('bounce');
    } else if (nivel == "") {
        $('#esp_nivel').focus();
        $('#esp_nivel').css('border-color', 'red');
        $('#esp_nivel').addClass('bounce');
    } else {
        $('#esp_instituicao').css('border-color', '');
        $('#esp_instituicao').removeClass('bounce');
        $('#esp_especialidade').css('border-color', '');
        $('#esp_especialidade').removeClass('bounce');
        $('#esp_estado').css('border-color', '');
        $('#esp_estado').removeClass('bounce');
        tab2.style.display = "none";
        tab3.style.display = "block";
    }

}

ant1.onclick = function() {
    tab2.style.display = "none";
    tab1.style.display = "block";
}

ant2.onclick = function() {
    tab3.style.display = "none";
    tab2.style.display = "block";
}