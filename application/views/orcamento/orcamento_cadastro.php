<?php $this->load->view('header'); ?>
<script>

        $(document).ready(function() {
          
            //Quando o campo cep perde o foco.
            $("#produto").blur(function() {

                $("#valor").val(dados.logradouro);
                
                
            });
        });

    </script>
<div class="container">
    <div class="container col-2">
        <h1 style="margin-top: -20px">Orçamento</h1>
    </div>
    <div class="form-gruop">
        <form style="margin-top : 10px">          
        <div class="row border" >
                <div class="form-group col-md-12">
                    <label>Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo" required/>
                </div>
                <div class="form-group col-md-4">
                    <label>CPF: </label>
                    <input type="text" class="form-control" data-mask="000.000.000-00" id="cpf" name="cpf" placeholder="000.000.000-00" required>
                </div>
               
                <div class="form-group col-md-4">
                    <label>Telefone: </label>
                    <input type="tel" class="form-control" data-mask="(00) 0 0000-0000" id="telefone" name="telefone" placeholder="(00) 0 0000-0000" required>
                </div>
               
                <div class="form-group col-md-4">
                    <label>Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@email.com" required>
                </div>
            </div>
            <table class="table" style="margin-top:10px">
                <thead>
                    <tr>
                        <th scope="col" style="text-align: center">Quantidade</th>
                        <th scope="col" style="text-align: center">Produto/Serviços</th>
                        <th scope="col" style="text-align: center">Valor</th>
                        <th scope="col" style="text-align: center">Desconto</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row" class="col-sm-1"><input type="text" name="quantidade" class="form-control"></inpunt></td>
                        <td scope="row" class="col-sm-10">
                            <select class="selectpicker col-12" style="font-size: 20px" name="select_produto" id="select_produto" data-live-search="true" required>
                                <option value="">Selecione o Produto/serviço</option>
                                <?php foreach ($produto as $p){?>
                                    <option name="produto" id="produto" value="<?php echo $p->produto_id;?>"><?php echo $p->produto_nome;?></option>
                                    <?php }?>
                            </select>
                        </td>
                        <td scope="row" class="col-sm-1"><input type="number" name="valor" class="form-control" value=""></inpunt></td>
                        <td scope="row" class="col-sm-1"><input type="number" name="desconto" class="form-control"></inpunt></td>
                    </tr>
                </tbody>
            </table> 
            <input type="submit" class="btn btn-primary btn-block" style="margin-top: -10px" value="Gerar">
        </form>              
    </div>
</div>


<?php $this->load->view('footer'); ?>