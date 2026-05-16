<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

<div class="dashboard-container">

    <nav>
        <ul>
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="usuarios.php">Usuários</a></li>
            <li><a href="categoria.php">Categorias</a></li>
            <li><a href="https://www.playstation.com/pt-br/games/ea-sports-fc/">Produtos</a></li>
        </ul> 

        <div class="perfil-usuario">
            <img src="https://t2.tudocdn.net/777122?w=1200&h=1200" alt="Avatar">
            <span>Carlos Eduardo</span>
        </div>
    </nav>

    <main>

        <section class="card-form"> 

            <div class="form-header">
                <h2>Cadastro de Usuário</h2>
                <p>Preencha os campos abaixo para criar um novo usuário no sistema.</p>
            </div>

            <!-- FORM CORRIGIDO -->
            <form id="formUsuario">

                <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" id="nome" required>
                </div>

                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" id="email" required>
                </div>

                <div class="form-group">
                    <label>Senha</label>
                    <input type="password" id="senha" required>
                </div>

                <div class="form-row">

                    <div class="form-group flex-1">
                        <label>Acesso</label>
                        <select id="acesso">
                            <option value="Usuário">Usuário</option>
                            <option value="Administrador">Administrador</option>
                        </select>
                    </div>

                    <div class="form-group flex-1">
                        <label>Status</label>
                        <select id="status">
                            <option value="Ativo">Ativo</option>
                            <option value="Inativo">Inativo</option>
                        </select>
                    </div>

                </div>

                <div class="form-actions">
                    <button type="submit" class="btn-save">Finalizar Cadastro</button>
                    <button type="button" class="btn-cancel" onclick="limpar()">Cancelar</button>
                </div>

            </form>

            <br><br>

            <!-- TABELA CORRETA -->
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Acesso</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody id="tabelaUsuarios"></tbody>
            </table>

        </section>

    </main>

</div>

<?php include 'rodape.php';?>

<script>

let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];
let editando = null;

const form = document.getElementById("formUsuario");
const tabela = document.getElementById("tabelaUsuarios");

function salvar(){
    localStorage.setItem("usuarios", JSON.stringify(usuarios));
}

function renderizar(){

    tabela.innerHTML = "";

    usuarios.forEach((u, i) => {

        tabela.innerHTML += `
            <tr>
                <td>${i + 1}</td>
                <td>${u.nome}</td>
                <td>${u.email}</td>
                <td>${u.acesso}</td>
                <td>${u.status}</td>
                <td>
                    <button onclick="editar(${i})">Editar</button>
                    <button onclick="excluir(${i})">Excluir</button>
                </td>
            </tr>
        `;
    });
}

form.addEventListener("submit", function(e){
    e.preventDefault();

    const usuario = {
        nome: document.getElementById("nome").value,
        email: document.getElementById("email").value,
        senha: document.getElementById("senha").value,
        acesso: document.getElementById("acesso").value,
        status: document.getElementById("status").value
    };

    if(editando !== null){
        usuarios[editando] = usuario;
        editando = null;
    } else {
        usuarios.push(usuario);
    }

    salvar();
    renderizar();
    form.reset();
});

window.editar = function(i){

    document.getElementById("nome").value = usuarios[i].nome;
    document.getElementById("email").value = usuarios[i].email;
    document.getElementById("senha").value = usuarios[i].senha;
    document.getElementById("acesso").value = usuarios[i].acesso;
    document.getElementById("status").value = usuarios[i].status;

    editando = i;
}

window.excluir = function(i){

    if(confirm("Deseja excluir este usuário?")){
        usuarios.splice(i, 1);
        salvar();
        renderizar();
    }
}

function limpar(){
    form.reset();
    editando = null;
}

renderizar();

</script>

</body>
</html>
