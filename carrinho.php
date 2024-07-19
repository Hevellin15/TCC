!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Carrinho de Compras</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="agendamentos.php">Agendamentos</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Seus Produtos</h2>
            <ul id="carrinho">
                <!-- Produtos serão adicionados aqui -->
            </ul>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Salão de Beleza Elis</p>
    </footer>
    <script src="js/script.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('/api/produtos')
                .then(response => response.json())
                .then(produtos => {
                    const carrinho = document.getElementById('carrinho');
                    produtos.forEach(produto => {
                        const li = document.createElement('li');
                        li.textContent = `${produto.nome} - R$${produto.preco.toFixed(2)}`;
                        carrinho.appendChild(li);
                    });
                })
                .catch(error => {
                    console.error('Erro:', error);
                });
        });
    </script>
</body>
</html>