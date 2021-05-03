function leDados () {
    let strDados = localStorage.getItem('db');
    let objDados = {};

    if (strDados) {
        objDados = JSON.parse (strDados);
    }
    else {
        objDados = {  comentarios: [ 
                        {nome: "Diego", comentario: "Esse projeto é muito bacana!"}, 
                        {nome: "Maria", comentario: "Gostaria de obter mais informações sobre esse projeto!"}, 
                        {nome: "Gabriel", comentario: "Como faço para investir nessa ideia?"} 
                    ]}
    }

    return objDados;
}

function salvaDados (dados) {
    localStorage.setItem ('db', JSON.stringify (dados));
}

function incluirComentario (){
    // Ler os dados do localStorage
    let objDados = leDados();

    // Incluir um novo comentario
    let strNome = document.getElementById ('campoNome').value;
    let strComentario = document.getElementById ('campoComentario').value;
    let novoComentario = {
        nome: strNome,
        comentario: strComentario
    };
    objDados.comentarios.push (novoComentario);

    // Salvar os dados no localStorage novamente
    salvaDados (objDados);

    // Atualiza os dados da tela
    imprimeDados ();
}

function imprimeDados () {
    let tela = document.getElementById('tela');
    let strHtml = '';
    let objDados = leDados ();

    for (i=0; i< objDados.comentarios.length; i++) {
        strHtml += `<p>${objDados.comentarios[i].nome} - ${objDados.comentarios[i].comentario}</p>`
    }

    tela.innerHTML = strHtml;
}

// Configura os botões
document.getElementById ('btnCarregaDados').addEventListener ('click', imprimeDados);
document.getElementById ('btnIncluirComentario').addEventListener ('click', incluirComentario);

