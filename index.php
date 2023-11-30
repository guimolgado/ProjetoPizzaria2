
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria UNIFAA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://getbootstrap.com/docs/5.3/assets/css/docs.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="icon" type="image/x-icon" href="https://icons.iconarchive.com/icons/iconarchive/fat-sugar-food/64/Pizza-icon.png" width="64" height="64">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar-custom">
        <div class="container-fluid navbar-custom">
            <a class="navbar-brand navbar-custom" href="#">Pizzaria Unifaa</a>
            <button
                class="navbar-toggler navbar-custom"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon navbar-custom"></span>
            </button>
            <div class="collapse navbar-collapse navbar-custom" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item navbar-custom">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cardapio.php">Cardápio</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img id="imagem1" src="https://i.gifer.com/SjCn.gif">

    <div class="apresentação">
    <section>
        <h2>Conheça nossas deliciosas pizzas!</h2>
        <p>Olá! Seja bem-vindo à Pizzaria UNIFAA, a maior rede de pizzarias para universitários do Brasil!</p>
        <p>Todos os nossos funcionários começaram como estagiários, estudantes da própria UNIFAA. Estamos sempre precisando de gente nova. É aluno FAA? Venha você também!</p>
        <p>Acesse o nosso cardápio para comprar nossas deliciosas pizzas! </p>
        <p>Estudantes que apresentarem sua carteirinha de estudante com a carteira de identidate têm 20% de desconto, alunos FAA têm 45% de desconto!</p>
    </section>

    </div>

    <footer class="footer">
        <p>&copy; <?php echo date('Y'); ?> Pizzaria UNIFAA. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

