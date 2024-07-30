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
                <div class="profile-details">
                    <h3>Detalhes do Perfil</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item" id="profileEmail">Email: usuario@email.com</li>
                        <li class="list-group-item" id="profilePhone">Telefone: (00) 00000-0000</li>
                        <li class="list-group-item" id="profileAddress">Endereço: Rua Exemplo, 123</li>
                    </ul>
                    <button class="btn btn-primary mt-3" id="edit-button">Editar</button>
                </div>
                <div class="edit-form">
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
                            <label for="profileImage" class="form-label">Imagem de Perfil</label>
                            <input type="file" class="form-control" id="profileImage" name="profileImage">
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                        <button type="button" class="btn btn-secondary" id="cancel-button">Cancelar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const editButton = document.getElementById('edit-button');
            const editForm = document.querySelector('.edit-form');
            const profileDetails = document.querySelector('.profile-details');
            const cancelButton = document.getElementById('cancel-button');
            const profileImageInput = document.getElementById('profileImage');
            const profileImagePreview = document.getElementById('profileImagePreview');
            const profileName = document.getElementById('profileName');
            const profileEmail = document.getElementById('profileEmail');
            const profilePhone = document.getElementById('profilePhone');
            const profileAddress = document.getElementById('profileAddress');
            const profileForm = document.getElementById('profile-form');

            editButton.addEventListener('click', function() {
                profileDetails.style.display = 'none';
                editForm.style.display = 'block';
            });

            cancelButton.addEventListener('click', function() {
                editForm.style.display = 'none';
                profileDetails.style.display = 'block';
            });

            profileImageInput.addEventListener('change', function() {
                const file = profileImageInput.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        profileImagePreview.src = e.target.result;
                    };
                    reader.readAsDataURL(file);
                }
            });

            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const email = document.getElementById('email').value;
                const phone = document.getElementById('phone').value;
                const address = document.getElementById('address').value;

                profileEmail.textContent = `Email: ${email}`;
                profilePhone.textContent = `Telefone: ${phone}`;
                profileAddress.textContent = `Endereço: ${address}`;

                editForm.style.display = 'none';
                profileDetails.style.display = 'block';
            });

            const asyncImages = document.querySelectorAll('.async-img');
            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        observer.unobserve(img);
                    }
                });
            });

            asyncImages.forEach(img => {
                observer.observe(img);
            });
        });
    </script>
</body>

</html>
