<?php
    include("../../bd.php");

    if(isset($_GET['txtID'])){

        $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";

        $sentencia=$conexao->prepare("DELETE FROM tb_posicao WHERE id=:id");
        $sentencia->bindParam(":id",$txtID);      
        $sentencia->execute();
        header("Location:index.php");
    }

    $sentencia=$conexao->prepare("SELECT * FROM `tb_posicao`");
    $sentencia->execute();
    $lista_tb_posicao=$sentencia->fetchAll(PDO::FETCH_ASSOC);
    //print_r($lista_tb_posicao);
?>

<?php include("../../seccoes/header.php"); ?>
Lista Posicoes
<br/>
    <div class="card">
        <div class="card-header">
           <a
            name=""
            id=""
            class="btn btn-primary"
            href="criar.php"
            role="button"
            >Adicionar Registro</a
           >
           
        </div>
        <div class="card-body">
            <div
                class="table-responsive-sm"
            >
                <table
                    class="table"
                >
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nome da Posição</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($lista_tb_posicao as $registro){ ?>
                            <tr class="">
                            <td scope="row"><?php echo $registro['id'];?></td>
                            <td><?php echo $registro['nomedaposicao'];?></td>
                            <td>
                                <a
                                    name="nameeditar"
                                    id="ideditar"
                                    class="btn btn-info"
                                    href="#"
                                    role="button"
                                    >Editar
                                </a>
                                <a
                                    class="btn btn-danger"
                                    href="index.php?txtID=<?php echo $registro['id'];?>"
                                    role="button"
                                    >Eliminar
                                </a>
                          </td>
                        </tr>
                        <?php } ?>    
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
    
<?php include("../../seccoes/footer.php"); ?>