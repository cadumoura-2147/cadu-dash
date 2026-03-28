<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Usuários</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <div class="dashboard-container">
        <nav>
                <ul>
                    <li><a href="dashboard.php">Início</a></li>
                    <li><a href="categoria.php">Categorias</a></li>
                    <li><a href="postagens.php">Postagens</a></li>
                </ul> 

                <div class="perfil-usuario">
                    <img src="https://pbs.twimg.com/profile_images/1945552875398045697/QiZGLVZ__400x400.jpg" alt="Avatar">
                    <span>Carlos Eduardo</span>
                </div>

            </nav>
        <main>
        <div class="header-content">
            <div class="header-title">
                <h2>Gestão de Usuários</h2>
                <p>Visualize e gerencie as permissões dos usuários do sistema.</p>
            </div>

            <tr><td colspan="6" align="right"><a href="cad-ususario.php" class="btn-add"><i class="fa-solid fa-plus"></i> Adicionar Usuário</a>
        </div>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th>Açoes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Carlos Eduardo</td>
                        <td>cadu@gmail.com</td>
                        <td>Administrador</td>
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
                        <td>Murilo</td>
                        <td>murilo@gmail.com</td>
                        <td>Editor</td>
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
                        <td>Rafael</td>
                        <td>rafael@gmail.com</td>
                        <td>Usuário</td>
                        <td><span class="badge inativo">Inativo</span></td>
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
        </td>
    </tr>
</tfoot>
            </table>
        </div>
        
    </main>
    </div>
    <?php include 'rodape.php'; ?>
</body>
</html>
