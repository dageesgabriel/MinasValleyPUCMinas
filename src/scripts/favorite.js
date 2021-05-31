function initPage (){

    dale();
}

window.onload = initPage;

document.querySelector('.like-button').addEventListener('click', (e) => {
    e.currentTarget.classList.toggle('liked');
  });

function dale (){

    let divTela = document.getElementById('psqsalvas');
    let texto = '';

    let dados = JSON.parse (window.localStorage.getItem("nomes"));
    console.log(dados);
    for (i=0; i< Object.keys(dados).length; i++) {

        let chave = Object.keys(dados)[i];
        let pesquisa = dados[Object.keys(dados)[i]];

        texto = texto + `
        <a onclick="location.href = 'https://minasvalley.herokuapp.com/src/front-end/startup.php'" />${pesquisa}</a>
        `;
    };

    divTela.innerHTML = texto;
    

}

function saveLocal (){

    var favorito = document.getElementById("fav").value;


    var lista = JSON.parse(localStorage.getItem("nomes"));
    
if (!lista) {
lista = {};
    
}
    lista = favorito;
    localStorage.setItem("nomes", JSON.stringify(lista));

    dale();

}

document.getElementById ('btnfav').addEventListener ('click', saveLocal);
