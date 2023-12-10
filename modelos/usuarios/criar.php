<?php include("../../seccoes/header.php"); ?>
Criar Usuarios
<br/>
<div class="card">
    <div class="card-header">Dados dos usuário</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomeusuario" class="form-label">Nome do usuário</label>
                <input
                    type="text"
                    class="form-control"
                    name="nomedousuario"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Nome do usuário ..."
                />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="password"
                    aria-describedby="helpId"
                    placeholder="Sua senha ..."
                />
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    name="email"
                    id=""
                    aria-describedby="helpId"
                    placeholder="exmplo@email.com"
                />
            </div>
            
            <button
                type="submit"
                class="btn btn-success"
            >
                Adicionar Registro
            </button>
            <a
                name=""
                id=""
                class="btn btn-primary"
                href="index.php"
                role="button"
                >Cancelar</a
            >
            
            
        
        </form>
    </div>
    <div class="card-footer text-muted">Footer</div>
</div>

<?php include("../../seccoes/footer.php"); ?>