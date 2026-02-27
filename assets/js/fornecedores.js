document.addEventListener('DOMContentLoaded', () => {
    const deleteButtons = document.querySelectorAll('.btn-delete');

    deleteButtons.forEach(button => {
        button.addEventListener('click', (event) => {
            event.preventDefault();
            const id = button.dataset.id;

            if (!confirm('Deseja realmente excluir este fornecedor?')) return;

            fetch(`../backend/excluir_fornecedor.php?id=${id}`)
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert(data.success);
                        // Remove a linha da tabela
                        const row = button.closest('tr');
                        if (row) row.remove();
                    } else if (data.error) {
                        alert(data.error);
                    }
                })
                .catch(err => {
                    console.error('Erro na requisição:', err);
                    alert('Erro ao excluir fornecedor');
                });
        });
    });
});