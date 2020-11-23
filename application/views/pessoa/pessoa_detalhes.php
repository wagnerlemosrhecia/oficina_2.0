<?php $this->load->view('header') ?>

<div class="container">
        <form action="" method="">
            <h2 style="text-align: center; margin-top: -20px">Detalhes</h2>
            <div class="row border" >
                <legend>Dados Pessoais</legend>
                <div class="form-group col-md-12">
                    <label>Nome: </label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="nome completo" value="<?php echo $pessoa_nome ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>CPF: </label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00 " value="<?php echo $pessoa_cpf ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>RG: </label>
                    <input type="text" class="form-control" id="RG" name="rg" placeholder="00.00.00.00-00" value="<?php echo $pessoa_rg ?>" disabled/>
                </div>
                
                <div class="form-group col-md-4">
                    <label>Telefone: </label>
                    <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(00) 0 0000-0000" value="<?php echo $pessoa_telefone ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Data de nascimento: </label>
                    <input type="date" class="form-control" id="nascimento" name="nascimento" value="<?php echo $pessoa_nascimento ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@email.com" value="<?php echo $pessoa_email ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Profissão: </label>
                    <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Gerente" value="<?php echo $pessoa_profissao ?>" disabled/>
                </div>
            </div>
            <div class="row border" >
                <legend>Endereço</legend>

                <div class="form-group col-md-4">
                    <label>Estado: </label>
                    <input type="text" class="form-control" id="estado" name="estado" placeholder="Estado" value="<?php echo $pessoa_estado ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Cidade: </label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $pessoa_cidade ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Bairro: </label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" value="<?php echo $pessoa_bairro ?>" disabled/>
                </div>
                
                <div class="form-group col-md-4">
                    <label>Rua: </label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="rua" value="<?php echo $pessoa_rua ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>Numero: </label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="0000" value="<?php echo $pessoa_numero ?>" disabled/>
                </div>
                <div class="form-group col-md-4">
                    <label>CEP: </label>
                    <input type="text" class="form-control" id="cep" name="cep" placeholder="cep" value="<?php echo $pessoa_cep ?>" disabled/>
                </div>
                <div class="form-group col-md-12">
                    <label>Complemento: </label>
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento" value="<?php echo $pessoa_complemento ?>" disabled/>
                </div>
            </div>
            <div class="btn">
                <a href="<?php echo base_url('cliente') ?>" class="btn btn-default btn-lg">voltar</a>
            </div>
        </form>
</div>


<?php $this->load->view('footer') ?>