<?php include("../../seccoes/header.php"); ?>
Lista Usuarios
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
                            <th scope="col">Nome do usuário</th>
                            <th scope="col">Email</th>
                            <th scope="col">Senha</th>
                            <th scope="col">Acções</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="">
                            <td scope="row">1</td>
                            <td>José de Almeida</td>
                            <td>jose.almeida@unki.co.ao</td>
                            <td>*******</td>
                            <td>
                                <a
                                    name="nameeditar"
                                    id="ideditar"
                                    class="btn btn-info"
                                    href="#"
                                    role="button"
                                    >Editar</a
                                >
                                <a
                                    name="nameeliminar"
                                    id="idemilinar"
                                    class="btn btn-danger"
                                    href="#"
                                    role="button"
                                    >Eliminar
                                </a>
                          </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
            
        </div>
        
    </div>
    
<?php include("../../seccoes/footer.php"); ?>