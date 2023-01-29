/*<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

<script type="text/javascript">$("#data").mask("(00) 0000-00009");</script>
*/

var saldo =0.0;
function LimparInput(){
    document.getElementById('div-chave-pix-escolhida').innerHTML = "";
    
}

function TipoDeChavePIX(chave_escolhida){
    let campopix = document.getElementById('div-chave-pix-escolhida');
    LimparInput();
    let texto = document.createElement('input');
    texto.type = 'text';
    texto.name = 'chave-pix';
    texto.id = 'chave-pix';
    texto.placeholder = chave_escolhida;
    campopix.appendChild(texto);

}

function preencherSelecBancos(data){
    let banco = document.getElementById('banco');
    for (let index in data){
        const id = index;
        const nome = data[index].name;
        const code = data[index].code;

        let option = document.createElement('option');
        option.value = nome;
        option.innerHTML = `CODE: ${code}   NOME: ${nome}`;

        banco.appendChild(option);
    }
}

function CarregarBancos(){
    fetch('https://brasilapi.com.br/api/banks/v1')
        .then(response => response.json())
        .then(data => preencherSelecBancos(data))
        .catch(error => console.error(error.message))
}

function atualizarSaldo(){
    let computar = document.getElementById('saldo');
    computar.innerHTML = '';
    let tipoOperação = document.querySelector('input[name="enviar_receber"]:checked').value;
    let valor = document.querySelector('#valor').value;
    valor = parseFloat(valor);
    if (tipoOperação=='enviar'){
        saldo = saldo - valor;
    }else{
        saldo = saldo + valor;
    }
   let span = document.createElement('span');
   let saldoformatado = saldo.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
   span.innerHTML = `<strong>Saldo total: ${saldoformatado}</strong>`;
   computar.appendChild(span);
   
}

function carregarTabela(){
    let tabela = document.getElementById("tabela");
    let linha = document.createElement('tr');
    let tipoOperacao = document.querySelector('input[name="enviar_receber"]:checked').value;
    let data = document.querySelector("#data").value;
    let valor = document.querySelector('#valor').value;
    let tipoChave = document.querySelector('#tipo-chave').value;
    let chave_pix = document.querySelector('#chave-pix').value;
    let banco = document.querySelector('#banco').value; 
    linha.innerHTML = 
    `<tr> <td>${tipoOperacao}</td><td>${data}</td><td>R$ ${valor}</td><td>${tipoChave}: ${chave_pix}</td><td>${banco}</td></tr>`
    tabela.appendChild(linha);   
    
    atualizarSaldo();
}
