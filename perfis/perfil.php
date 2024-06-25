<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="./css/perfil.css">
    <title>Perfil do Usuário</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark animate__animated animate__fadeInDown">
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
                        <a class="nav-link" href="../perfis/perfil.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
                            </svg>
                            Perfil
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
                <div class="card">
                    <img src="path/to/profile-image.jpg" class="card-img-top" alt="Foto do Perfil">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Usuário</h5>
                        <p class="card-text">Breve descrição do usuário.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3>Detalhes do Perfil</h3>
                <ul class="list-group mb-3" id="profileDetails">
                    <li class="list-group-item"><strong>Nome Completo:</strong> <span id="fullName">Nome do Usuário</span></li>
                    <li class="list-group-item"><strong>Email:</strong> <span id="email">usuario@example.com</span></li>
                    <li class="list-group-item"><strong>Telefone:</strong> <span id="phone">(11) 1234-5678</span></li>
                    <li class="list-group-item"><strong>Endereço:</strong> <span id="address">Rua Exemplo, 123, Cidade, Estado</span></li>
                </ul>
                <a href="#" class="btn btn-primary mt-3" onclick="toggleEditForm()">Editar Perfil</a>
                <a href="../index.php" class="btn btn-secondary mt-3">Início</a>

                <!-- Formulário de edição -->
                <form id="editForm" class="mt-3" style="display: none;" onsubmit="updateProfile(event)">
                    <div class="mb-3">
                        <label for="editFullName" class="form-label">Nome Completo</label>
                        <input type="text" class="form-control" id="editFullName" value="Nome do Usuário">
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="editEmail" value="usuario@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="editPhone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="editPhone" value="(11) 1234-5678">
                    </div>
                    <div class="mb-3">
                        <label for="editAddress" class="form-label">Endereço</label>
                        <input type="text" class="form-control" id="editAddress" value="Rua Exemplo, 123, Cidade, Estado">
                    </div>
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <button type="button" class="btn btn-secondary" onclick="toggleEditForm()">Cancelar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function toggleEditForm() {
            var editForm = document.getElementById('editForm');
            var profileDetails = document.getElementById('profileDetails');
            if (editForm.style.display === 'none') {
                editForm.style.display = 'block';
                profileDetails.style.display = 'none';
            } else {
                editForm.style.display = 'none';
                profileDetails.style.display = 'block';
            }
        }

        function updateProfile(event) {
            event.preventDefault();

            var fullName = document.getElementById('editFullName').value;
            var email = document.getElementById('editEmail').value;
            var phone = document.getElementById('editPhone').value;
            var address = document.getElementById('editAddress').value;

            document.getElementById('fullName').textContent = fullName;
            document.getElementById('email').textContent = email;
            document.getElementById('phone').textContent = phone;
            document.getElementById('address').textContent = address;

            toggleEditForm();
        }
    </script>
</body>

</html>