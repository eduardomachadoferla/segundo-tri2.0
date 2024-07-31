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
        body {
            background-color: #f8f9fa;
            color: #000;
        }

        .navbar {
            background-color: #343a40 !important;
        }

        .navbar-brand,
        .nav-link {
            color: #fff !important;
        }

        .profile-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .profile-card img {
            object-fit: cover;
            height: 200px;
            width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .profile-details,
        .edit-form {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .profile-details h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .edit-form .form-label {
            font-weight: bold;
            font-size: 1rem;
        }

        .edit-form .form-control {
            font-size: 1rem;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 15px;
        }

        .edit-form .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .edit-form .btn-secondary {
            background-color: #6c757d;
            color: #fff;
        }

        .dark-mode {
            background-color: #343a40;
            color: #fff;
        }

        .dark-mode .profile-card,
        .dark-mode .profile-details,
        .dark-mode .edit-form {
            background-color: #495057;
            color: #fff;
        }

        .dark-mode .navbar,
        .dark-mode .btn-secondary {
            background-color: #6c757d !important;
        }

        .alert {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg animate__animated animate__fadeInDown">
        <div class="container">
            <a class="navbar-brand" href="#">Vendas Online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="../index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                                <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4z" />
                            </svg>
                            Início
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Perfil
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../logout.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M10 15.5a.5.5 0 0 1-.5.5H3a1 1 0 0 1-1-1V1a1 1 0 0 1 1-1h6.5a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v14a.5.5 0 0 0 .5.5h6.5a.5.5 0 0 1 .5.5z" />
                                <path fill-rule="evenodd" d="M15.354 7.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 1 1-.708-.708L14.293 8H5.5a.5.5 0 0 1 0-1h8.793l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3z" />
                            </svg>
                            Deslogar
                        </a>
                    </li>
                    <!-- Outros itens de navegação -->
                </ul>
                <button class="btn btn-outline-light ms-3" id="theme-toggle">Alternar Tema</button>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="card profile-card">
                    <img id="profileImagePreview" src="path/to/default-image.jpg" class="card-img-top async-img" alt="Foto do Perfil">
                    <div class="card-body text-center">
                        <h5 class="card-title" id="profileName">Nome do Usuário</h5>
                        <p class="card-text">Descrição breve ou slogan do usuário.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div id="feedback-message" class="alert" style="display:none;"></div>
                <div class="profile-details">
                    <h3>Detalhes do Perfil</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="profileEmail">Email: usuario@email.com</li>
                        <li class="list-group-item" id="profilePhone">Telefone: (00) 00000-0000</li>
                        <li class="list-group-item" id="profileAddress">Endereço: Rua Exemplo, 123</li>
                        <li class="list-group-item" id="profileBio">Bio: Uma breve descrição sobre o usuário.</li>
                    </ul>
                    <button id="edit-button" class="btn btn-primary mt-3">Editar Perfil</button>
                </div>
                <div class="edit-form" style="display:none;">
                    <form id="profile-form">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="bio" class="form-label">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="profileImage" class="form-label">Imagem de Perfil</label>
                            <input type="file" class="form-control" id="profileImage" name="profileImage" accept="image/*">
                            <img id="imagePreview" src="#" alt="Pré-visualização da Imagem" style="display:none;width:100%;height:auto;margin-top:10px;">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" id="cancel-button">Cancelar</button>
                    </form>
                </div>
                <div class="purchase-history mt-5">
                    <h3>Histórico de Compras</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Compra #1 - Data: 01/01/2023 - Valor: R$ 100,00</li>
                        <li class="list-group-item">Compra #2 - Data: 15/02/2023 - Valor: R$ 200,00</li>
                        <li class="list-group-item">Compra #3 - Data: 30/03/2023 - Valor: R$ 150,00</li>
                        <!-- Adicionar mais itens conforme necessário -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const profileForm = document.getElementById('profile-form');
            const feedbackMessage = document.getElementById('feedback-message');
            const imagePreview = document.getElementById('imagePreview');
            const profileImageInput = document.getElementById('profileImage');
            const profileImagePreview = document.getElementById('profileImagePreview');

            const editButton = document.getElementById('edit-button');
            const cancelButton = document.getElementById('cancel-button');
            const profileDetails = document.querySelector('.profile-details');
            const editForm = document.querySelector('.edit-form');

            const themeToggle = document.getElementById('theme-toggle');
            let isDarkMode = false;

            themeToggle.addEventListener('click', function() {
                isDarkMode = !isDarkMode;
                document.body.classList.toggle('dark-mode', isDarkMode);
            });

            profileImageInput.addEventListener('change', function() {
                const file = profileImageInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImagePreview.src = e.target.result;
                        imagePreview.src = e.target.result;
                        imagePreview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });

            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const address = document.getElementById('address').value;
                const bio = document.getElementById('bio').value;

                profileDetails.querySelector('#profileEmail').textContent = `Email: ${email}`;
                profileDetails.querySelector('#profilePhone').textContent = `Telefone: ${phone}`;
                profileDetails.querySelector('#profileAddress').textContent = `Endereço: ${address}`;
                profileDetails.querySelector('#profileBio').textContent = `Bio: ${bio}`;

                feedbackMessage.textContent = 'Perfil atualizado com sucesso!';
                feedbackMessage.classList.add('alert-success');
                feedbackMessage.style.display = 'block';

                setTimeout(() => {
                    feedbackMessage.style.display = 'none';
                }, 3000);

                editForm.style.display = 'none';
                profileDetails.style.display = 'block';
            });

            editButton.addEventListener('click', function() {
                editForm.style.display = 'block';
                profileDetails.style.display = 'none';
            });

            cancelButton.addEventListener('click', function() {
                editForm.style.display = 'none';
                profileDetails.style.display = 'block';
            });
        });
    </script>
</body>

</html>
