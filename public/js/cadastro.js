function store() {
    var cep = $('#CEP').val();

    if (cep.length === 8) {

        $.get(`https://viacep.com.br/ws/${cep}/json/`, function (data) {

            $('#logradouro').val(data.logradouro || '');
            $('#localidade').val(data.localidade || '');
            $('#bairro').val(data.bairro || '');
            $('#uf').val(data.uf || '');


        });

    }
}
