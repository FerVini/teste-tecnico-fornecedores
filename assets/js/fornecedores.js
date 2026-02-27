// fornecedores.js
$(document).ready(function() {
    $('.btn-delete').click(function() {
        const id = $(this).data('id');
        if (!id) return;

        if (!confirm('Deseja realmente excluir este fornecedor?')) return;

        $.ajax({
            url: '../backend/excluir_fornecedor.php',
            type: 'GET',
            data: { id },
            dataType: 'json',
            success: function(res) {
                if (res.success) {
                    $('#fornecedor-' + id).fadeOut(500, function() { $(this).remove(); });
                    alert(res.message);
                } else {
                    alert(res.message);
                }
            },
            error: function() {
                alert('Erro na requisição');
            }
        });
    });
});