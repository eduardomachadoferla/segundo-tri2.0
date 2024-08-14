<?php
session_start();

// Verifica se os parâmetros para adicionar um produto estão presentes
if (isset($_GET['add']) && isset($_GET['product']) && isset($_GET['price'])) {
    $productName = htmlspecialchars($_GET['product']);
    $productPrice = htmlspecialchars($_GET['price']);

    // Inicia o carrinho se não existir
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Adiciona o produto ao carrinho
    $_SESSION['cart'][] = [
        'name' => $productName,
        'price' => $productPrice
    ];

    // Redireciona para evitar que o usuário reenvie o formulário ao atualizar a página
    header('Location: carrinho.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        .cart-item {
            border-bottom: 1px solid #ddd;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Carrinho de Compras</h1>

        <?php
        if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            $total = 0;
            foreach ($_SESSION['cart'] as $item) {
                $total += $item['price'];
                echo '<div class="cart-item d-flex justify-content-between align-items-center">';
                echo '<span>' . htmlspecialchars($item['name']) . '</span>';
                echo '<span>R$ ' . number_format($item['price'], 2, ',', '.') . '</span>';
                echo '</div>';
            }
        ?>
        
        <div class="d-flex justify-content-between mt-3">
            <h4>Total</h4>
            <h4>R$ <?php echo number_format($total, 2, ',', '.'); ?></h4>
        </div>

        <a href="index.php" class="btn btn-secondary mt-3">Voltar às Compras</a>
        <a href="finalizar-compra.php" class="btn btn-primary mt-3">Finalizar Compra</a>

        <?php
        } else {
            echo '<p>Seu carrinho está vazio.</p>';
            echo '<a href="index.php" class="btn btn-secondary">Voltar às Compras</a>';
        }
        ?>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
