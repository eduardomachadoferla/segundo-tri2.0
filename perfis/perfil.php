
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./perfis/css/perfil.css">
    <title>Perfil do Usuário</title>

    <style>
    /* Estilizações específicas para esta página */

    body {
        background-color: rgb(76, 7, 145);
        color: #fff;
        /* texto branco */
    }

    .navbar {
        background-color: #4a148c !important;
        /* fundo da barra de navegação */
    }

    .profile-card {
        background-color: rgba(76, 7, 145, 0.8);
        /* fundo do card de perfil */
        border-radius: 200px;
        box-shadow: 0 4px 8px rgba(20, 0, 0, 0.1);
        /* sombra suave */
        overflow: hidden;
        /* garante que a sombra seja exibida corretamente */
    }

    .profile-card img {
        object-fit: cover;
        height: 200px;
        border-radius: 10px 10px 9 9;
    }

    .profile-details {
        background-color: rgba(76, 7, 145, 0.6);
        /* fundo dos detalhes do perfil */
        color: #fff;
        /* texto branco nos detalhes do perfil */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* sombra suave */
        padding: 20px;
    }

    .profile-details h3 {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .edit-form {
        background-color: rgba(76, 7, 145, 0.6);
        /* fundo do formulário de edição */
        color: rgb(76, 7, 145);
        /* texto roxo nos formulários de edição */
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* sombra suave */
        padding: 20px;
        display: none;
        /* oculto inicialmente */
    }

    .edit-form .form-label {
        font-weight: bold;
        font-size: 1rem;
        color: #fff;
        /* Texto branco */
    }

    .edit-form .form-control {
        font-size: 1rem;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 15px;
        background-color: #fff;
        /* Fundo branco para os campos de formulário */
        color: #6f42c1;
        /* Texto roxo para os campos de formulário */
    }

    .edit-form .btn-primary {
        background-color: #fff;
        /* Botão de salvar com fundo branco */
        color: #6f42c1;
        /* Texto roxo */
    }

    .edit-form .btn-primary:hover {
        background-color: #6f42c1;
        /* Cor de fundo roxa no hover */
        color: #fff;
        /* Texto branco no hover */
    }

    .edit-form .btn-secondary {
        background-color: #fff;
        /* Botão de cancelar com fundo branco */
        color: #6f42c1;
        /* Texto roxo */
        border-color: #6f42c1;
        /* Cor da borda roxa */
    }

    .edit-form .btn-secondary:hover {
        background-color: #6f42c1;
        /* Cor de fundo roxa no hover */
        color: #fff;
        /* Texto branco no hover */
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="#">Vendas Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="../index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-house-door" viewBox="0 0 16 16">
                                <path
                                    d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                            </svg>
                            Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logim/index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Deslogar
                        </a>
                    </li>
                    <!-- Outros itens de navegação -->
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card profile-card">
                    <img data-src="path/to/profile-image.jpg" class="card-img-top async-img" alt="Foto do Perfil">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Usuário</h5>
                        <p class="card-text">Breve descrição do usuário.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="profile-details">
                    <h3>Detalhes do Perfil</h3>
                    <ul class="list-group mb-3" id="profileDetails">
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 3a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm0 9.5a3.5 3.5 0 0 1-2.5-1.06c.014-1.277.618-2.413 1.618-3.115-.087-.209-.142-.434-.158-.665a1.75 1.75 0 1 1 3.376-.865c.124.484.124.984 0 1.468a1.75 1.75 0 0 1-3.376-.865c-.016-.231-.071-.456-.158-.665a3.49 3.49 0 0 1 1.618 3.115 3.5 3.5 0 0 1-3.5 3.5z" />
                            </svg>
                            <strong>Nome Completo:</strong> <span id="fullName">Nome do Usuário</span>
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 4.012C0 2.899.897 2 2 2h12c1.103 0 2 .898 2 2.012v7.976A2.01 2.01 0 0 1 15.002 14H1.998A2.01 2.01 0 0 1 0 11.988V4.012zM1.293 3.293a1 1 0 0 1 1.414 0L8 8.586l5.293-5.293a1 1 0 1 1 1.414 1.414L8.707 10.5a1 1 0 0 1-1.414 0L1.293 4.707a1 1 0 0 1 0-1.414z" />
                            </svg>
                            <strong>Email:</strong> <span id="email">email@example.com</span>
                        </li>
                        <li class="list-group-item">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path
                                    d="M11.93 3.07a14.17 14.17 0 0 1 1.62 1.81l-.79.79a1 1 0 0 0-.29.71l-.19 2.11a11.21 11.21 0 0 1-2.04-.55l-.29-.13-.41.41c-.26.26-.59.39-.93.39-.34 0-.67-.13-.93-.39l-.42-.42-.3.14a11.21 11.21 0 0 1-2.03.55l-.2-2.11a1 1 0 0 0-.29-.71l-.79-.79a14.17 14.17 0 0 1 1.62-1.81l.92.92c-.15.29-.27.59-.36.91l-.27 1.52a12.7 12.7 0 0 1-.65-.12l-1.5-1.5a1 1 0 0 0-1.42 1.42l2.12 2.12a1 1 0 0 0 .7.29l1.52-.27a12.7 12.7 0 0 1-.12-.65l-1.49-1.5a1 1 0 0 0-1.42 1.42l2.12 2.12a1 1 0 0 0 .7.29l1.51-.27c.32.32.64.59.96.83l-.95.95a1 1 0 0 0 .71 1.7 16.24 16.24 0 0 0 1.61-.82l1.39.7a1 1 0 0 0 1.15-.26l2.12-2.12a1 1 0 0 0 0-1.41l-1.5-1.5a1 1 0 0 0-1.42 0l-1.12 1.12c-.31-.23-.63-.49-.95-.81l-.97-.97c-.33.25-.65.53-.96.84l1.12 1.12a1 1 0 0 0 1.41 0l1.5-1.5a1 1 0 0 0 0-1.42l-2.12-2.12a1 1 0 0 0-.7-.29l-1.51.27a16.24 16.24 0 0 0-1.6-.82zm-4.18 2.56a1 1 0 0 0 1.42 0l.71-.71.71.71a1 1 0 0 0 1.42-1.42l-.71-.71.71-.71a1 1 0 0 0-1.42-1.42l-.71.71-.71-.71a1 1 0 0 0-1.42 1.42l.71.71-.71.71a1 1 0 0 0 0 1.42z" />
                            </svg>
                            <strong>Telefone:</strong> <span id="telefone">(00) 12345-6789</span>
                        </li>
                        <!-- Mais detalhes do perfil -->
                    </ul>
                    <button class="btn btn-primary mb-3" id="editProfileBtn">Editar Perfil</button>
                    <div class="edit-form">
                        <form id="profileForm">
                            <div class="mb-3">
                                <label for="fullNameInput" class="form-label">Nome Completo:</label>
                                <input type="text" class="form-control" id="fullNameInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="emailInput" required>
                            </div>
                            <div class="mb-3">
                                <label for="phoneInput" class="form-label">Telefone:</label>
                                <input type="tel" class="form-control" id="phoneInput" required>
                            </div>
                            <!-- Mais campos de formulário -->
                            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                            <button type="button" class="btn btn-secondary ms-2" id="cancelEditBtn">Cancelar</button>
                            <a class="nav-link" href="logout.php">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-Xy4pV4yKRnypHtYXYc3FsxExdfvTlBZvGO3ya98u/07D8JYNTp4Tfn+BR9Fip0M1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-nQfpum1j+nayHw4yUlMzy+Sf6m6p6h72yHPpJjUau7BHl0gd+PI+8G/F9Xim7jN8" crossorigin="anonymous">
    </script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Botão de editar perfil
        const editProfileBtn = document.getElementById('editProfileBtn');
        const editForm = document.querySelector('.edit-form');
        const cancelEditBtn = document.getElementById('cancelEditBtn');
        const profileDetails = document.getElementById('profileDetails');
        const fullNameSpan = document.getElementById('fullName');
        const emailSpan = document.getElementById('email');
        const phoneSpan = document.getElementById('telefone');

        editProfileBtn.addEventListener('click', function() {
            editForm.style.display = 'block';
            profileDetails.style.display = 'none';

            // Preencher campos do formulário com informações atuais
            document.getElementById('fullNameInput').value = fullNameSpan.textContent;
            document.getElementById('emailInput').value = emailSpan.textContent;
            document.getElementById('phoneInput').value = phoneSpan.textContent;
        });

        cancelEditBtn.addEventListener('click', function() {
            editForm.style.display = 'none';
            profileDetails.style.display = 'block';
        });

        // Submeter formulário de edição de perfil
        const profileForm = document.getElementById('profileForm');

        profileForm.addEventListener('submit', function(event) {
            event.preventDefault();

            // Atualizar informações do perfil com novos valores
            fullNameSpan.textContent = document.getElementById('fullNameInput').value;
            emailSpan.textContent = document.getElementById('emailInput').value;
            phoneSpan.textContent = document.getElementById('phoneInput').value;

            // Ocultar formulário de edição e mostrar detalhes do perfil atualizados
            editForm.style.display = 'none';
            profileDetails.style.display = 'block';
        });
    });
    </script>
</body>

</html>