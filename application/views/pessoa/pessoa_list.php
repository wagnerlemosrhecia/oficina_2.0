<?php $this->load->view('header'); ?>

<div class="container ">

    <h2 style="text-align: center; margin-top: 0px">Clientes</h2>
    <div class="col-16" style="margin-top: 30px">
            <a href="pessoa/cadastro" class="btn btn-default">Novo Cadastro</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Profissão</th>
                        <th scope="col">Email</th>
                        <th scope="col">Opções</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php 
                    foreach ($pessoa as $p){?>
                        <td scope="row"><?php echo $p->pessoa_nome ?></td>
                        <td scope="row"><?php echo $p->pessoa_cpf ?></td>
                        <td scope="row"><?php echo $p->pessoa_telefone ?></td>
                        <td scope="row"><?php echo $p->pessoa_profissao ?></td>
                        <td scope="row"><?php echo $p->pessoa_email ?></td>
                        <td scope="row">
                            <a href="cliente/pessoa_detalhes?id=<?php echo $p->pessoa_id?>" class="glyphicon glyphicon-search" title="Consulta"></a> |
                            <a href="cliente/update?id=<?php echo $p->pessoa_id?>" class="glyphicon glyphicon-pencil" title="Editar"></a> |
                            <a href="cliente/delete?id=<?php echo $p->pessoa_id?>" class="glyphicon glyphicon-trash" title="excluir" onClick="javasciprt: return confirm('Tem certeza que deseja apagar o Registro?')"></a>
                            </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        
    </div>
</div>


<?php $this->load->view('footer'); ?>