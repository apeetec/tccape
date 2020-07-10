function teste1() {
    var nome = document.getElementById('nome').value;
    var categoria = document.getElementById('categoria').value;
    var descricao = document.getElementById('descricao').value;
    var data = document.getElementById('data').value;
    var hora = document.getElementById('horario').value;
    var situacao = document.getElementById('situacao').value;
    var imagem = document.getElementById('imagem').files[0].name; 
    var responsavel = document.getElementById('responsavel').value;

    $.post("../sql/cadastro_objeto.php", {
        N: nome,
        CAT: categoria,
        D: descricao,
        DATA: data,
        H: hora,
        S: situacao,
        A: imagem,
        R: responsavel
    }, function (data) {
        alert(data);
    });

    return false;
}

function exibir(tipo) {
    $.post("../sql/exibir.php", {
        TIPO: tipo
    }, function (data) {
        $('#resultado').html(data);
    });

    return false;
}

function deletee(value) {
    $.post("../sql/excluir_objeto.php", {
        ITEM: value
    }, function (data) {
        alert(data);
    });
}

function busca_nome(nome) {
    $.post("../sql/busca_nome.php", {
        Nome: nome
    }, function (data) {
        $('#resultado').html(data);
    });
}

function atualizar_objeto(value) {
    $.post("../sql/atualizar_objeto.php", {
        ID: value
    }, function (data) {
        console.log(data);
        // document.getElementById('nome').value = data[Nome];
        // document.getElementById('categoria').value = data[2];
        // document.getElementById('descricao').value = data[3];
        // document.getElementById('data').value = data[4];
        // document.getElementById('horario').value = data[5];
        // document.getElementById('situacao').value = data[6];
        // document.getElementById('responsavel').value = data[7];

    });
}
function busca_solicitacao(CodUsuarioSolicitacao) {
    $.post("../sql/busca_solicitacao.php", {
        CodUsuarioSolicitacao:CodUsuarioSolicitacao
    }, function (data) {
        $('#resultado').html(data);
    });
}