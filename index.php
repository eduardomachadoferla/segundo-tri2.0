<?php
include('includes/conf.ini.php');
$css = '<link rel="stylesheet" href="' . BASE_URL . '/css/index.css">';
include('includes/header.php');
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark animate__animated animate__fadeInDown">
    <div class="container">
        <a class="navbar-brand" href="../img/logo.png">
            <img class="logo-small" src="./img/logo.png" alt="Logo da Modern Muse">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item me-3">
                    <a class="nav-link active" aria-current="page" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                        </svg>
                        Início
                    </a>
                </li>

                <style>
                    .logo-small {
                        width: 50px;
                        /* Defina a largura desejada */
                        height: auto;
                        /* Mantém a proporção da imagem */
                    }


                    /* Estilização básica do dropdown */
                    .dropdown {
                        position: relative;
                        display: inline-block;
                    }

                    .dropbtn {
                        background-color: #f1f1f100;
                        color: white;
                        font-size: 15px;
                        border: none;
                        cursor: pointer;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 16000px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                    }

                    .dropdown-content a {
                        color: black;
                        padding: 12px 2px;
                        text-decoration: none;
                        display: block;
                    }

                    .dropdown-content a:hover {
                        background-color: #f1f1f1
                    }

                    .show {
                        display: block;
                    }

                    .dropdown-content {
                        display: none;
                        position: absolute;
                        background-color: #f9f9f9;
                        min-width: 160px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                        border-radius: 8px;
                        padding: 12px 16px;
                    }

                    .dropdown-content a {
                        color: black;
                        padding: 8px 12px;
                        text-decoration: none;
                        display: block;
                        border-radius: 4px;
                    }

                    .dropdown-content a:hover {
                        background-color: #f1f1f1;
                    }

                    .show {
                        display: block;
                    }
                </style>

                </head>

                <body>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0" />
                                <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52z" />
                            </svg>
                            <button onclick="toggleDropdown()" class="btn btn-light dropbtn">Serviços</button>
                        </a>
                        <div id="myDropdown" class="dropdown-content">
                            <a href="./catalogo/index.php">Masculino</a>
                            <a href="./catalogo/fem.php">Feminino</a>
                            <a href="./catalogo/inf.php">Infantil</a>
                        </div>
                    </div>

                    <script>
                        function toggleDropdown() {
                            var dropdown = document.getElementById("myDropdown");
                            dropdown.classList.toggle("show");
                        }

                        // Fecha o dropdown se o usuário clicar fora dele
                        window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {
                                var dropdowns = document.getElementsByClassName("dropdown-content");
                                for (var i = 0; i < dropdowns.length; i++) {
                                    var openDropdown = dropdowns[i];
                                    if (openDropdown.classList.contains('show')) {
                                        openDropdown.classList.remove('show');
                                    }
                                }
                            }
                        }
                    </script>

                    <!-- <li class="nav-item me-3">
                        <a class="nav-link" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                            </svg>
                            Contato
                        </a>
                    </li> -->

                    </head>

                    <body>
                        <ul class="nav">
                            <li class="nav-item me-3">
                                <a class="nav-link" href="#" id="dropdownToggle">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send" viewBox="0 0 16 16">
                                        <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z" />
                                    </svg>
                                    Contato
                                </a>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                                    </svg>
                                </a>
                            </li>
                            <!-- Adicione um link para a página de perfil -->
                            <li class="nav-item">
                                <?php
                                if (!isset($_SESSION['name'])) { ?>
                                    <a class="nav-link" href="logim/index.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                        </svg>
                                        Logar
                                    </a>
                                <?php } else { ?>
                                    <a class="nav-link" href="./perfis/perfil.php">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                                        </svg>
                                        Perfil
                                    </a>
                                <?php } ?>
                            </li>
                        </ul>

        </div>
    </div>
</nav>

<section class="features-section py-5">
    <!-- HTML do modal para adicionar avaliação e comentário -->
    <div class="modal fade" id="ratingAndCommentModal" tabindex="-1" aria-labelledby="ratingAndCommentModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ratingAndCommentModalLabel">Avaliação e Comentário</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Selecione sua avaliação:</p>
                    <div class="av" id="starRating">
                        <span class="star" onclick="toggleStar(this)"></span>
                        <span class="star" onclick="toggleStar(this)"></span>
                        <span class="star" onclick="toggleStar(this)"></span>
                        <span class="star" onclick="toggleStar(this)"></span>
                        <span class="star" onclick="toggleStar(this)"></span>
                    </div>
                    <div class="mb-3">
                        <label for="commentText" class="form-label">Adicione seu comentário:</label>
                        <textarea class="form-control" id="commentText" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitRatingAndComment()">Adicionar
                        Avaliação e Comentário</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row g-4">
            <!-- Produto 1 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="img/download (2).jpg" class="card-img-top" alt="Conjunto Moletom" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Conjunto Moletom</h5>
                        <p class="card-text">Conjunto moletom com calça</p>
                        <p class="fw-bold mt-auto">R$ 120,00</p>
                        <button class="btn btn-primary mt-2" onclick="addToCart('Conjunto Moletom', 120)">Comprar</button>
                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Conjunto Moletom')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Conjunto Moletom')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Produto 2 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="<?php echo BASE_URL; ?>./img/download (3).jpg" class="card-img-top" alt="Moletom Branco" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Moletom</h5>
                        <p class="card-text">Moletom branco</p>
                        <p class="fw-bold mt-auto">R$ 90,00</p>

                        <button class="btn btn-primary mt-2" onclick="addToCart('Moletom Branco', 90)">Comprar</button>

                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Moletom Branco')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Moletom Branco')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Produto 3 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="img/download (4).jpg" class="card-img-top" alt="Moletom Bege" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Moletom</h5>
                        <p class="card-text">Moletom bege para dias de frio</p>
                        <p class="fw-bold mt1-auto">R$ 100,00</p>
                        <button class="btn btn-primary mt-2" onclick="addToCart('Moletom Bege', 100)">Comprar</button>
                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Moletom Branco')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Moletom Branco')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Produto 4 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="img/images (7).jpg" class="card-img-top" alt="Camisa Polo" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Camisa Polo</h5>
                        <p class="card-text">Camisa polo masculina</p>
                        <p class="fw-bold mt-auto">R$ 70,00</p>
                        <button class="btn btn-primary mt-2" onclick="addToCart('Camisa Polo', 70)">Comprar</button>
                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Moletom Branco')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Moletom Branco')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Produto 5 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="img/download (7).jpg" class="card-img-top" alt="Calça Jeans" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Calça Jeans</h5>
                        <p class="card-text">Calça jeans azul escura</p>
                        <p class="fw-bold mt-auto">R$ 150,00</p>
                        <button class="btn btn-primary mt-2" onclick="addToCart('Calça Jeans', 150)">Comprar</button>
                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Moletom Branco')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Moletom Branco')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <!-- Produto 6 -->
            <div class="col-6 col-md-4">
                <div class="card mx-auto animate__animated animate__fadeInUp h-100">
                    <img src="img/download (6).jpg" class="card-img-top" alt="Jaqueta de Couro" onclick="openModal(this)">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">Jaqueta de Couro</h5>
                        <p class="card-text">Jaqueta de couro preta</p>
                        <p class="fw-bold mt-auto">R$ 300,00</p>
                        <button class="btn btn-primary mt-2" onclick="addToCart('Jaqueta de Couro', 300)">Comprar</button>
                        <button class="btn btn-sm btn-outline-secondary mt-2" onclick="openCommentsModal('Moletom Branco')">Comentários</button>
                        <?php if (isset($_SESSION['name'])) { ?>
                            <button class="btn btn-sm btn-outline-primary mt-2" onclick="openRatingAndCommentModal('Moletom Branco')">Avaliar</button>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>



<footer class="footer bg-dark text-white py-4 animate__animated animate__fadeIn">
    <div class="container text-center">
        <p>&copy; 2024 Todos os direitos reservados a Eduardo Machado Ferla.</p>
        <div>
            <a href="#" class="text-white mx-2"><i class="bi bi-facebook"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-twitter"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-instagram"></i></a>
            <a href="#" class="text-white mx-2"><i class="bi bi-linkedin"></i></a>
        </div>
    </div>
</footer>

<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="imageModalLabel">Visualização de Imagem</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img src="" id="modalImage" class="img-fluid" alt="Imagem do Produto">
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="commentsModal" tabindex="-1" aria-labelledby="commentsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentsModalLabel">Comentários</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Aqui estão os comentários sobre o produto.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="ratingAndCommentModal" tabindex="-1" aria-labelledby="ratingAndCommentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratingAndCommentModalLabel">Avaliação e Comentário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Selecione sua avaliação:</p>
                <div id="starRating">
                    <span class="star" onclick="toggleStar(this)"></span>
                    <span class="star" onclick="toggleStar(this)"></span>
                    <span class="star" onclick="toggleStar(this)"></span>
                    <span class="star" onclick="toggleStar(this)"></span>
                    <span class="star" onclick="toggleStar(this)"></span>
                </div>
                <div class="mb-3">
                    <label for="commentText" class="form-label">Adicione seu comentário:</label>
                    <textarea class="form-control" id="commentText" rows="3"></textarea>
                </div>
                <button type="button" class="btn btn-primary" onclick="submitRatingAndComment()">Adicionar
                    Avaliação e Comentário</button>
            </div>
        </div>
    </div>
</div>

<!-- star modal -->
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="cart-section py-5 bg-light animate__animated animate__fadeInUp">
                    <div class="container">

                        <div class="table-responsive">
                            <table class="table table-bordered" id="cart-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items"></tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3" class="text-end">Total Geral</th>
                                        <th colspan="2" id="cart-total">R$ 0,00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-success" onclick="finalizePurchase()">Finalizar
                                Compra</button>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div> -->

    <!-- js de compra  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <section class="cart-section py-5 bg-light animate__animated animate__fadeInUp">
                    <div class="container">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="cart-table">
                                <thead>
                                    <tr>
                                        <th scope="col">Imagem</th>
                                        <th scope="col">Produto</th>
                                        <th scope="col">Quantidade</th>
                                        <th scope="col">Preço</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Ação</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-items"></tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" class="text-end">Total Geral</th>
                                        <th colspan="2" id="cart-total">R$ 0,00</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-center">

                            <button class="btn btn-success" onclick="finalizePurchase()">Finalizar Compra</button>
                        </div>
                    </div>
                </section>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<script>
    let cartItems = [];

    function addToCart(name, image, price) {
        const existingItem = cartItems.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
            existingItem.total = existingItem.quantity * existingItem.price;
        } else {
            const newItem = {
                image: image,
                name: name,
                quantity: 1,
                price: price,
                total: price
            };
            cartItems.push(newItem);
        }
        renderCartItems();
    }

    function renderCartItems() {
        const cartItemsContainer = document.getElementById('cart-items');
        cartItemsContainer.innerHTML = '';

        cartItems.forEach((item, index) => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name}" style="width: 50px; height: auto;"></td>
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>R$ ${item.price.toFixed(2)}</td>
                <td>R$ ${item.total.toFixed(2)}</td>
                <td><button class="btn btn-danger" onclick="removeItemFromCart(${index})">Remover</button></td>
            `;
            cartItemsContainer.appendChild(row);
        });

        updateCartTotal();
    }

    function updateCartTotal() {
        const total = cartItems.reduce((sum, item) => sum + item.total, 0);
        document.getElementById('cart-total').textContent = `R$ ${total.toFixed(2)}`;
    }

    function removeItemFromCart(index) {
        cartItems.splice(index, 1);
        renderCartItems();
    }

    function finalizePurchase() {
        alert('Compra finalizada com sucesso!');
    }

    renderCartItems();
</script>
</script>
</div>
<!-- end modal -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="./js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>