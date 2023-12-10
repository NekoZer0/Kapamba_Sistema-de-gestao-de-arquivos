<?php include("../../seccoes/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">Dados dos Funcionarios</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="primeironome" class="form-label">Primeiro nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="primeironome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Primeiro nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="Segundo Nome" class="form-label">Segundo nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="Segundo nome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Segundo nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="primeironome" class="form-label">Primeiro nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="primeironome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Primeiro nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="segundonome" class="form-label">Segundo nome</label>
                <input
                    type="text"
                    class="form-control"
                    name="segundonome"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Segundo nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input
                    type="file"
                    class="form-control"
                    name="foto"
                    id="foto"
                    aria-describedby="helpId"
                    placeholder="Segundo nome ..."
                />
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV (PDF)</label>
                <input
                    type="file"
                    class="form-control"
                    name="cv"
                    id="cv"
                    aria-describedby="helpId"
                    placeholder="cv"
                />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Posição</label>
                <select
                    class="form-select form-select-sm"
                    name=""
                    id="idposicao"
                >
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Data de admissão</label>
                <input
                    type="date"
                    class="form-control"
                    name="datadeadmissao"
                    id="iddatadeadmissao"
                    aria-describedby="emailHelpId"
                    placeholder="abc@mail.com"
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