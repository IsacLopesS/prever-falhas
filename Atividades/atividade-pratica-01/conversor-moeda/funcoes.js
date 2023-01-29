function preencherSelectMoedas(data){   
    let moedaOrigem = document.getElementById('moeda_origem');

    for (let index in data){
        const code = index
        const name = data[index]
        
        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = `${name}`;
        moedaOrigem.appendChild(option);
    }
    let meodaDestino = document.getElementById('meoda_destino');
    for (let index in data){
        const code = index
        const name = data[index]
        
        let option = document.createElement("option");
        option.value = code;
        option.innerHTML = `${name}`;
        meodaDestino.appendChild(option);
    }
}
function CarregarMoedas(){
    fetch('https://economia.awesomeapi.com.br/json/available/uniq')
        .then(response => response.json())
        .then(data => preencherSelectMoedas(data))
        .catch(error => console.error(error.message))
}
function tratarResultado(data,codigo){
    const  cotacao = data[codigo]['bid']
    const nome = data[codigo]['name']
    const data_cotacao = data[codigo]['create_date']

    const valor = document.getElementById('valor').value
    let input = document.getElementById('input')
    input.value = cotacao * valor

    let detalhes = document.getElementById('detalhes')
    detalhes.innerHTML = `<strong>Conversão: </strong>${nome}<br><br> <strong>cotação: </strong>${cotacao}<br><br> <strong>Data e Hora da cotação:</strong> ${data_cotacao} `
    
}
function BuscarResultado(){
    const code1 = document.getElementById("moeda_origem").value
    const code2 = document.getElementById("meoda_destino").value
    const codigo = `${code1}${code2}`
    fetch(`https://economia.awesomeapi.com.br/json/last/${code1}-${code2}`)
        .then(response => response.json())
        .then(data => tratarResultado(data,codigo))
        .catch(error => console.error(error.message))
}
