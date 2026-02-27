document.addEventListener('DOMContentLoaded', () => {
    const tabela = document.querySelector('#tabela-fornecedores');

    if (!tabela) return;

    tabela.addEventListener('click', async (e) => {
        if (!e.target.classList.contains('btn-delete')) return;

        const id = e.target.dataset.id;
        if (!id) return;

        const confirmDelete = confirm('Deseja realmente excluir este fornecedor?');
        if (!confirmDelete) return;

        try {
            const response = await fetch(`../backend/excluir_fornecedor.php?id=${id}`);
            const data = await response.json();

            if (data.success) {
                // Remove a linha da tabela
                const row = e.target.closest('tr');
                if (row) row.remove();
                alert(data.msg);
            } else {
                alert(data.msg);
            }
        } catch (error) {
            alert('Erro na requisição: ' + error.message);
        }
    });
});