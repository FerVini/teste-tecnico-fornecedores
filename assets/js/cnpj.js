$(document).ready(function () {
    const $cnpjInput = $('#cnpj');

    if ($cnpjInput.length === 0) {
        console.error('Campo CNPJ não encontrado');
        return;
    }

    console.log('Campo CNPJ encontrado');

    $cnpjInput.on('input', function () {
        let value = $(this).val();

        // Remove tudo que não for número
        value = value.replace(/\D/g, '');

        // Limita a 14 dígitos
        if (value.length > 14) {
            value = value.substring(0, 14);
        }

        // Aplica a máscara
        value = value
            .replace(/^(\d{2})(\d)/, '$1.$2')
            .replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3')
            .replace(/\.(\d{3})(\d)/, '.$1/$2')
            .replace(/(\d{4})(\d)/, '$1-$2');

        $(this).val(value);
    });

    $cnpjInput.on('blur', function () {
        const cnpj = $(this).val();

        if (!cnpj) return;

        if (!validarCNPJ(cnpj)) {
            alert('CNPJ inválido');
            return;
        }

        console.log('CNPJ válido:', cnpj);
        buscarDadosCNPJ(cnpj);
    });
});

function validarCNPJ(cnpj) {
    cnpj = cnpj.replace(/[^\d]+/g, '');

    if (cnpj.length !== 14) return false;

    // Elimina CNPJs inválidos conhecidos
    if (/^(\d)\1+$/.test(cnpj)) return false;

    let tamanho = cnpj.length - 2;
    let numeros = cnpj.substring(0, tamanho);
    let digitos = cnpj.substring(tamanho);
    let soma = 0;
    let pos = tamanho - 7;

    for (let i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
    }

    let resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
    if (resultado !== parseInt(digitos.charAt(0))) return false;

    tamanho += 1;
    numeros = cnpj.substring(0, tamanho);
    soma = 0;
    pos = tamanho - 7;

    for (let i = tamanho; i >= 1; i--) {
        soma += numeros.charAt(tamanho - i) * pos--;
        if (pos < 2) pos = 9;
    }

    resultado = soma % 11 < 2 ? 0 : 11 - (soma % 11);
    return resultado === parseInt(digitos.charAt(1));
}

function buscarDadosCNPJ(cnpj) {
    console.log('Simulando busca de dados para:', cnpj);

    // Simulação de resposta de API
    const dadosMock = {
        razao_social: 'EMPRESA TESTE LTDA',
        nome_fantasia: 'EMPRESA TESTE',
        endereco: 'Rua Exemplo',
        bairro: 'Centro',
        municipio: 'São Paulo',
        estado: 'SP',
        cep: '01000-000',
        situacao: 'Ativa',
        icms: 'Contribuinte'
    };

    preencherFormularioCNPJ(dadosMock);
}

function preencherFormularioCNPJ(dados) {
    $('#razao_social').val(dados.razao_social);
    $('#nome_fantasia').val(dados.nome_fantasia);
    $('#endereco').val(dados.endereco);
    $('#bairro').val(dados.bairro);
    $('#municipio').val(dados.municipio);
    $('#estado').val(dados.estado);
    $('#cep').val(dados.cep);
    $('#situacao').val(dados.situacao);
    $('#icms').val(dados.icms);

    console.log('Formulário preenchido automaticamente');
}