<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Postagens</title>
    <link rel="stylesheet" href="dashboard.css">
</head>

<body>

<div class="dashboard-container">

    <nav>
        <ul>
            <li><a href="dashboard.php">Início</a></li>
            <li><a href="usuarios.php">Usuários</a></li>
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
                <h2>Cadastro de Postagens</h2>
                <p>Preencha os campos abaixo para criar uma postagem.</p>
            </div>

            <!-- FORM CORRIGIDO -->
            <form id="formPostagem">

                <div class="form-group">
                    <label>Título</label>
                    <input type="text" id="titulo" placeholder="Digite o título" required>
                </div>

                <div class="form-group">
                    <label>Conteúdo</label>
                    <input type="text" id="conteudo" placeholder="Digite o conteúdo" required>
                </div>

                <div class="form-row">

                    <div class="form-group flex-1">
                        <label>Categoria</label>
                        <select id="categoria">
                            <option value="Cliente">Cliente</option>
                            <option value="Comprador">Comprador</option>
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
                    <button type="submit" class="btn-save">Salvar</button>
                    <button type="button" class="btn-cancel" onclick="limpar()">Cancelar</button>
                </div>

            </form>

            <br><br>

            <!-- TABELA -->
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Conteúdo</th>
                        <th>Categoria</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>

                <tbody id="tabelaPostagens"></tbody>
            </table>

        </section>

    </main>

</div>

<?php include 'rodape.php';?>

<script>

let postagens = JSON.parse(localStorage.getItem("postagens")) || [];
let editando = null;

const form = document.getElementById("formPostagem");
const tabela = document.getElementById("tabelaPostagens");

function salvar(){
    localStorage.setItem("postagens", JSON.stringify(postagens));
}

function renderizar(){

    tabela.innerHTML = "";

    postagens.forEach((p, i) => {

        tabela.innerHTML += `
            <tr>
                <td>${i + 1}</td>
                <td>${p.titulo}</td>
                <td>${p.conteudo}</td>
                <td>${p.categoria}</td>
                <td>${p.status}</td>
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

    const postagem = {
        titulo: document.getElementById("titulo").value,
        conteudo: document.getElementById("conteudo").value,
        categoria: document.getElementById("categoria").value,
        status: document.getElementById("status").value
    };

    if(editando !== null){
        postagens[editando] = postagem;
        editando = null;
    } else {
        postagens.push(postagem);
    }

    salvar();
    renderizar();
    form.reset();
});

window.editar = function(i){

    document.getElementById("titulo").value = postagens[i].titulo;
    document.getElementById("conteudo").value = postagens[i].conteudo;
    document.getElementById("categoria").value = postagens[i].categoria;
    document.getElementById("status").value = postagens[i].status;

    editando = i;
}

window.excluir = function(i){

    if(confirm("Deseja excluir esta postagem?")){
        postagens.splice(i, 1);
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
