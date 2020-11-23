<?php $this->load->view('header') ?>

<!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.js"></script>
    <script src="//irql.bipbop.com.br/js/jquery.bipbop.min.js"></script>

    <!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#cidade").val("");
                $("#uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#cidade").val("...");
                        $("#uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#cidade").val(dados.localidade);
                                $("#uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>

<div class="container">
        <form action="cadastro" method="POST">
                <h2 style="text-align: center">Dados Pessoais</h2>
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
                    <label>RG: </label>
                    <input type="text" class="form-control" data-mask="00000000-00" id="RG" name="rg" placeholder="00000000-00" required>
                </div>
                
                <div class="form-group col-md-4">
                    <label>Telefone: </label>
                    <input type="tel" class="form-control" data-mask="(00) 0 0000-0000" id="telefone" name="telefone" placeholder="(00) 0 0000-0000" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Data de nascimento: </label>
                    <input type="date" class="form-control" id="nascimento" name="nascimento" placeholder="" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Email: </label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="nome@email.com" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Profissão: </label>
                    <input type="text" class="form-control" id="profissao" name="profissao" placeholder="Gerente" required>
                </div>
            </div>
            <div class="row border" >
                <legend>Endereço</legend>

                <div class="form-group col-md-4">
                    <label>CEP: </label>
                    <input type="text" class="form-control" data-mask="00000-000" id="cep" name="cep" placeholder="cep" required>               
                </div>
                <div class="form-group col-md-4">
                    <label>Estado: </label>
                    <input type="text" class="form-control" text-mask="00" id="uf" name="estado" placeholder="BA" MAXLENGTH=2 required/>
                </div>
                <div class="form-group col-md-4">
                    <label>Cidade: </label>
                    <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Bairro: </label>
                    <input type="text" class="form-control" id="bairro" name="bairro" placeholder="bairro" required>
                </div>
                
                <div class="form-group col-md-4">
                    <label>Rua: </label>
                    <input type="text" class="form-control" id="rua" name="rua" placeholder="rua" required>
                </div>
                <div class="form-group col-md-4">
                    <label>Numero: </label>
                    <input type="text" class="form-control" id="numero" name="numero" placeholder="0000" MAXLENGTH=4 required>
                </div>  
                <div class="form-group col-md-12">
                    <label>Complemento: </label>
                    <input type="text" class="form-control" id="complemento" name="complemento" placeholder="complemento" required>
                </div>
                <div class="">
                    <a href="<? echo base_url('cliente') ?>" class="btn btn-danger" onclick="javasciprt: return confirm('Tem certeza que deseja Cancelar?')">Cancelar</a>
                    <input type="submit" class="btn btn-primary " value="Enviar" />
                </div>
            </div>
        </form>
</div>


<?php $this->load->view('footer') ?>