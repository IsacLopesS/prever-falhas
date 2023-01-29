
function CarregarSelect() {
    let select = document.getElementById('origem')
    console.log(select)

   /* for (let index in data){
        // const {id, nome, sigla} = data[index];
        const id = data[index].id;
        const nome= data[index].nome;
        const sigla = data[index].sigla;

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = `${nome}-${sigla}`;

        estados.appendChild(option);
    }*/
}

function AssentoEsclhido(id){
    let poltrona = document.getElementById('num_assento')
    let trocaCor = document.getElementById('id')
    poltrona.value = id;

    trocaCor.style.backgroundColor = 'red'
}

function funcao(){

    let t = document.getElementById('id_pessoa')
    t.value = document.getElementById('idpessoa').value;
}
