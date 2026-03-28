<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Postagens</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="dashboard.php">Início</a></li>
                    <li><a href="usuarios.php">Usuários</a></li>
                    <li><a href="categoria.php">Categorias</a></li>
                </ul> 

                <div class="perfil-usuario">
                    <img src="https://pbs.twimg.com/profile_images/1945552875398045697/QiZGLVZ__400x400.jpg" alt="Avatar">
                    <span>Carlos Eduardo</span>
                </div>

            </nav>
        <main>
    <div class="header-content">
            <div class="header-title">
                <h2>Gestão de postagens</h2>
                <p>Visualize e gerencie as permissões dos postagens do sistema.</p>
            </div>

            <tr><td colspan="6" align="right"><a href="cad-postagens.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Postagens</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Conteudo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>EA fc 26</td>
                        <td>Midia Digital</td>
                        <td>Comprador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes">
                        <button class="btn-icon">
                            <i class="fa-solid fa-trash"></i>
                            
                        </button>           
                        <button class="btn-icon">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                        <td>02</td>
                        <td>EA fc 26</td>
                        <td>Midia Física</td>
                        <td>Comprador</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes">
                        <button class="btn-icon">
                            <i class="fa-solid fa-trash"></i>
                            
                        </button>           
                        <button class="btn-icon">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </td>
                    </tr>
                    <tr>
                        <td>03</td>
                        <td>FC coins</td>
                        <td>Ultimate Team</td>
                        <td>Cliente</td>
                        <td><span class="badge ativo">Ativo</span></td>
                        <td class="acoes">
                        <button class="btn-icon">
                            <i class="fa-solid fa-trash"></i>
                            
                        </button>           
                        <button class="btn-icon">
                            <i class="fa-solid fa-pen"></i>
                        </button>
                    </td>
                    </tr>
                </tbody>
                <tfoot>
             <tr>
                <td colspan="6" align="right">Informações de quantidade de registros...</td>
            </tr>
</tfoot>
            </table>
        </div>
        
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>