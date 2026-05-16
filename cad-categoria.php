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

                    <p>
                        Preencha os campos abaixo para adicionar 
                        uma nova categoria no sistema.
                    </p>
                </div>

                <!-- FORMULÁRIO -->
                <form id="categoriaForm">

                    <div class="form-group">

                        <label for="nome">
                            Nome Completo
                        </label>

                        <input 
                            type="text" 
                            id="nome" 
                            name="nome" 
                            placeholder="Nome completo"
                            required
                        >

                    </div>

                    <div class="form-row">

                        <div class="form-group flex-1">

                            <label for="nivel">
                                Status
                            </label>

                            <select id="nivel" name="nivel">

                                <option value="Ativo">
                                    Ativo
                                </option>

                                <option value="Inativo">
                                    Inativo
                                </option>

                            </select>

                        </div>

                    </div>

                    <div class="form-actions">

                        <button 
                            type="submit" 
                            class="btn-save"
                        >
                            Finalizar Cadastro
                        </button>

                        <button 
                            type="button"
                            class="btn-cancel"
                            onclick="limparFormulario()"
                        >
                            Cancelar
                        </button>

                    </div>

                </form>

                <br><br>

                <!-- TABELA -->
                <table border="1" width="100%">

                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>

                    </thead>

                    <tbody id="tabelaCategorias">

                    </tbody>

                </table>

            </section>

        </main>

    </div>

    <?php include 'rodape.php';?>

    <script>

        // ARRAY LOCALSTORAGE
        let categorias = JSON.parse(
            localStorage.getItem("categorias")
        ) || [];

        // CONTROLE DE EDIÇÃO
        let editando = null;

        // SALVAR NO LOCALSTORAGE
        function salvarLocalStorage(){

            localStorage.setItem(
                "categorias",
                JSON.stringify(categorias)
            );
        }

        // MOSTRAR TABELA
        function renderizarTabela(){

            const tabela = document.getElementById(
                "tabelaCategorias"
            );

            tabela.innerHTML = "";

            categorias.forEach((categoria, index) => {

                tabela.innerHTML += `
                    <tr>

                        <td>${index + 1}</td>

                        <td>${categoria.nome}</td>

                        <td>${categoria.status}</td>

                        <td>

                            <button 
                                onclick="editarCategoria(${index})"
                            >
                                Editar
                            </button>

                            <button 
                                onclick="excluirCategoria(${index})"
                            >
                                Excluir
                            </button>

                        </td>

                    </tr>
                `;
            });
        }

        // CADASTRAR / EDITAR
        document
        .getElementById("categoriaForm")
        .addEventListener("submit", function(e){

            e.preventDefault();

            const nome = document.getElementById("nome").value;

            const status = document.getElementById("nivel").value;

            // EDITAR
            if(editando !== null){

                categorias[editando] = {
                    nome,
                    status
                };

                editando = null;

            } else {

                // CADASTRAR
                categorias.push({
                    nome,
                    status
                });
            }

            salvarLocalStorage();

            renderizarTabela();

            limparFormulario();
        });

        // EDITAR
        function editarCategoria(index){

            document.getElementById("nome").value =
                categorias[index].nome;

            document.getElementById("nivel").value =
                categorias[index].status;

            editando = index;
        }

        // EXCLUIR
        function excluirCategoria(index){

            let confirmar = confirm(
                "Deseja excluir esta categoria?"
            );

            if(confirmar){

                categorias.splice(index, 1);

                salvarLocalStorage();

                renderizarTabela();
            }
        }

        // LIMPAR FORMULÁRIO
        function limparFormulario(){

            document
            .getElementById("categoriaForm")
            .reset();

            editando = null;
        }

        // INICIAR TABELA
        renderizarTabela();

    </script>

</body>
</html>
