<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="dashboard.php">Início</a></li>
                    <li><a href="usuarios.php">Usuários</a></li>
                    <li><a href="postagens.php">Postagens</a></li>
                </ul> 

                <div class="perfil-usuario">
                    <img src="https://t2.tudocdn.net/777122?w=1200&h=1200" alt="Avatar">
                    <span>Carlos Eduardo</span>
                </div>

        </nav>

    <main>
        <section class="card-form"> 
            <div class="form-header">
                
                <h2>Cadastro de Categorias</h2>
                <p>Preencha os campos abaixo para adicionar uma nova categoria no sistema.</p>
            </div>
            <form action="insere-categoria.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" id="nome" name="nome" placeholder="Nome comleto" required>
            </div>
            <div class="form-group">
               <label for="email">E-mail</label>
               <input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
           </div>
            
            <div class="form-row">
                <div class="form-group flex-1">
                    <label for="nivel">Categoria</label>
                    <select id="nivel" name="nivel">
                        <option value="1">Administrador</option>
                        <option value="2">Comprador</option>
                    </select>
                </div>
                <div class="form-group flex-1">
                    <label for="nivel">Status</label>
                    <select id="nivel" name="nivel">
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                    </select>
                </div>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn-save">Finalizar Cadastro</button>
                <a href="categoria.php" class="btn-cancel">Cancelar</a>
            </div>
        </form>
        
        </section>
    </main>
    </div>
    <?php include 'rodape.php';?>
</body>
</html>