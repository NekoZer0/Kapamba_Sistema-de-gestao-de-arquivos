<?php
    include("../../bd.php");
    if($_POST){
        print_r($_POST);

        //Recebemos os dados do metodo POST
        $nomedaposicao=(isset($_POST["nomedaposicao"])?$_POST["nomedaposicao"]:"");
        //Preparar as inserções dos dados
        $sentencia=$conexao->prepare("INSERT INTO tb_posicao(id,nomedaposicao)VALUE(null, :nomedaposicao)");
        //Atribuídos os valores que vêm do método POST (Os que são inserido no formulário)
        $sentencia->bindParam(":nomedaposicao",$nomedaposicao);      
        $sentencia->execute();
        header("Location:index.php");
    }

?>

<?php include("../../seccoes/header.php"); ?>
Criar Posicoes
<br/>
<div class="card">
    <div class="card-header">Dados das Posições</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nomedaposicao" class="form-label">Nome da Posição</label>
                <input
                    type="text"
                    class="form-control"
                    name="nomedaposicao"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Nome da posição de trabalho ..."
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
    <div class="card-footer text-muted"></div>
</div>
<?php include("../../seccoes/footer.php"); ?>