!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
        <h1>Agendamentos</h1>
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
            <h2>Agende um Horário</h2>
            <form id="agendamentoForm">
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required><br><br>
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required><br><br>
                <button type="submit">Agendar</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Salão de Beleza Elis</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>
