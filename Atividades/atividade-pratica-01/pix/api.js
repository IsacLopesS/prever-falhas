function limparSelect(campo){
    while(campo.length>1){
        campo.remove(1);
    }
}

function preencherSelectestados(data){
    console.log(data)
    //let estados = document.getElementById(estados);
    let estados = document.frm.estados;
    limparSelect(estados);
    for (let index in data){
        // const {id, nome, sigla} = data[index];
        const id = data[index].id;
        const nome= data[index].nome;
        const sigla = data[index].sigla;

        let option = document.createElement("option");
        option.value = id;
        option.innerHTML = `${nome}-${sigla}`;

        estados.appendChild(option);
    }

}

function carregarEstados(){
    fetch('https://servicodados.ibge.gov.br/api/v1/localidades/estados')
        .then(response => response.json())
        .then(data => preencherSelectestados(data))
        .catch(error => console.error(error.message))

}

function preencherselectCidades(data){
   let cidades = document.getElementById("cidades");
    limparSelect(cidades);
   for(let index in data){
       let id = data[index].id;
       let cidade = data[index].nome;
       let option = document.createElement("option");
       option.value = id;
       option.innerHTML = cidade;
       cidades.appendChild(option);
   }

}
function carregarCidades(){
    const estados = document.getElementById("estados");
    const estado_index = estados.selectedIndex;
    const estado_id = estados.options[estado_index].value;
    fetch(`https://servicodados.ibge.gov.br/api/v1/localidades/estados/${estado_id}/municipios`)
        .then(response => response.json())
        .then(data => preencherselectCidades(data))
        .catch(error => console.error(error.message));

}