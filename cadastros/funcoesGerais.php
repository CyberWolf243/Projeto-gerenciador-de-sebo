<?php

function imprimirCabecalho($titulo = "Título desta página") {
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
            <title> <?php $titulo ?> </title>

            <link rel="stylesheet" type="text/css" href="/font-awesome/css/style.css">
            <link rel="stylesheet" type="text/css" href="/font-awesome/css/registro.css" media="all" />


            <link rel="stylesheet" href="/font-awesome/css/navbar_techandall.css"> <!-- Navigation CSS -->
            <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        </head>;

        <?php
    }
    
        function TabelaRelatorio($titulo) {
            ?>
          
    <?php
  require '../Login/conexao.php';
  
    $con = banco();
    ?>
        
        <?php
        }
    

    function imprimirMenu($titulo) {
        ?>
        <!-- inicio cor do fundo -->
        <BODY BGCOLOR="#515151" TEXT="000000" LINK="0000FF" VLINK="0000FF">
            <!-- fim cor do fundo -->

            <TABLE BORDER=0 WIDTH=10% BORDER=0 CELLPADDING=2 CELLSPACING=1 ALIGN=CENTER BGCOLOR="#000000">
                <TR BGCOLOR=#ffffff Height=60><TD colspan=3>
                <center><IMG src="/imgs/arvore1.png">



                    <div class="container">

                        <div>
                            <label class="mobile_menu" for="mobile_menu">
                                <span>Menu</span>
                            </label>
                            <input id="mobile_menu" type="checkbox">
                            <ul class="nav">
                                <li><a href="cadastroVenda.php"><i class="icon-home icon-large"></i></a></li>


                                <!----- Inicio nome completo da lista suspensa(cadastro) ----> 
                                <li class="dropdown"><a href="#">Cadastros</a><!----- primeiro nome do Menu---->    

                                    <div class="fulldrop">              
                                        <div class="column">
                                            <h3>Cadastros</h3><!----- nome do submenu ---->    
                                            <ul>
                                                <li><a href="cadastroFuncionarios.php">Cadastro Funcionario</a></li>
                                                <li><a href="cadastroFornecedor.php">Cadastro Fornecedor</a></li>                    
                                                <li><a href="cadastroLivro.php">Cadastro Estoque</a></li>

                                            </ul>
                                        </div> 
                                        <!----- Fim da lista completa de menus (cadastro)---->   

<!----------------------------------------------------------------------------------------------------------->

                                        <!----- Inicio nome completo da lista suspensa(controle) ----> 
                                        <li class="dropdown"><a href="#">Controle</a><!----- primeiro nome do Menu---->     

                                            <!----- Full Drop Down Contents  Starts Here---->    
                                            <div class="fulldrop">              
                                                <div class="column">
                                                    <h3>Controle</h3>
                                                    <ul>
                                                        <li><a href="controleLivro.php">Controle de Livro</a></li>
                                                        <li><a href="controleFuncionario.php">Controle de Funcionario</a></li>
                                                        <li><a href="controleFornecedor.php">Controle de Fornecedor</a></li>
                                                    </ul>
                                                </div> 
                                                <!----- Fim da lista completa de menus (controle)---->    
                                        
                                        
                                        <!----------------------------------------------------------------------------------------------------------->

                                        <!----- Inicio nome completo da lista suspensa(Relatório) ----> 
                                        <li class="dropdown"><a href="#">Relatórios</a><!----- primeiro nome do Menu---->     

                                            <!----- Full Drop Down Contents  Starts Here---->    
                                            <div class="fulldrop">              
                                                <div class="column">
                                                    <h3>Relatorios</h3>
                                                    <ul>
                                                        <li><a href="relatorioFuncionario.php">Relatorios de Funcionario</a></li>
                                                        <li><a href="relatorioFornecedor.php">Relatorios de Fornecedor</a></li>
                                                    </ul>
                                                </div> 
                                                <!----- Fim da lista completa de menus (Relatório)---->    

                                                <li><a href="../Login/sair.php"><i class="icon-signout icon-large"></i></a></li> <!---- botao sair ---->
                                                </TD></TR>
                                                <TR>
                                                    <TD VALIGN=top width="60%" BGCOLOR="FFFFFF">

                                                        <TABLE BORDER=0 WIDTH=99% ALIGN=CENTER>
                                                            <TR>

                                                                <TD VALIGN=top>
                                                                    <?php
                                                                }


  function Rodape($titulo) {
                ?>
                <!--//content-->
        </FONT>
                </TD></TR></TABLE>

              </TD>



                  </TR>


                                                </TABLE>

                                                <CENTER>
                                                    <!----- AQUI FICA O COPYRIGHt---->  
                                                </cENTER>


                                                </ul> 
                                            </div>
                                    </div>
                                    </body>
                                    </html>




                                    <?php
                                }

//--------------------------------------------------------------------------
                                function formularioVenda($titulo) {
                                    ?>

                                    <B>Cadastro de Venda</B><BR><BR>

                                    <FONT SIZE=2>

                                    <!--content-->
                                    <div class="register_account">
                                        <div class="wrap">

                                            <form action>
                                                <div class="col_1_of_2 span_1_of_2">
                                                    <div><input name='idVenda' type="text" value="id"></div>
                                                    <div><input natype="text" value="ValorTotal"></div>	
                                                    <div><input type="text" value="data"></div>
                                                    <div><input type="text" value="Cpf do Funcionario"></div>

                                                    <button class="grey">	Finalizar cadastro</button>

                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

// TABELA FUNCIONARIO --------------------------------------------------------------------------------------------------------------------------------
                                function formularioFuncionarios($titulo) {
                                    ?>

                                    <B>Cadastro de Funcionario</B><BR><BR>

                                    <FONT SIZE=2>

                                    <div class="register_account">
                                        <div class="wrap">

                                            <form action="Controle.php?op=Funcionario_Cadastro" method="POST" >
                                                <div class="col_1_of_2 span_1_of_2">

                                                    <div><input name="cpf" autocomplete="off"   type="text" maxlength="14"  placeholder="CPF"></div>	
                                                    <div><input name="nome" autocomplete="off"  type="text" maxlength="85"  placeholder="Nome"></div>
                                                    <div><input name="enderecadastro" autocomplete="off"   type="text" maxlength="60"  placeholder="Endereço"></div>
                                                    <div><input name="telefone" autocomplete="off"   type="text" maxlength="11"  placeholder="Telefone ex:(11)98765-4321"></div>
                                                    <div><input name="dataNascimento" type="date" placeholder="data de nascimento"></div>
                                                    <div><input name="sexo" autocomplete="off"   type="text" maxlength="9"  placeholder="Sexo"></div>
                                                    <div><input name="tipo" autocomplete="off"   type="text" maxlength="45"  placeholder="Tipo de Funcionario"></div>
                                                    <div><input name="senha" autocomplete="off"   type="text" maxlength="45"  placeholder="Senha"></div>
                                                    <div><input name="situacao_id" autocomplete="off"   type="number" maxlength="11"  placeholder="Id Situaçao"></div>
                                                    <div><input name="idNivelAcesso" autocomplete="off"   type="number" maxlength="11"  placeholder="Id Nivel de Acesso (1=Adm, 2=Funcionario)"></div>

                                                    <button type="submit" class="grey">Finalizar Cadastro</button>
                                                    <a href="controleFuncionario.php"><input type="button"value="Voltar controle"></a>
                                                    

                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

                                function cadastro_Funcionarios($con, $cpf, $nome, $endereco, $telefone, $nascimento, $sexo, $tipo, $senha, $situacao_id, $niveis_acessos_id_nivelAcesso) {

                                    $sql = "INSERT INTO Funcionarios VALUES('$cpf', '$nome', '$endereco', '$telefone', '$nascimento', '$sexo', '$tipo', '$senha', $situacao_id, $niveis_acessos_id_nivelAcesso)";

                                    mysqli_query($con, $sql);

                                    header('Location: cadastroFuncionarios.php');
                                }
                                
function excluir_Funcionario($con, $excluirF){
$sql = "DELETE FROM Funcionarios WHERE cpf = '$excluirF'";
mysqli_query($con, $sql);
    
header('Location: controleFuncionario.php');
}


function um_Funcionario($con, $cpfantigo){
    $sql = "SELECT * FROM Funcionarios Where cpf = '$cpfantigo'";
    $resultF = mysqli_query($con, $sql);
    
    
    $linhaF = mysqli_fetch_assoc($resultF);
   
    return $linhaF;
    
}                                
function tras_Funcionario($con){
    $sql = "SELECT * FROM Funcionarios";
    
    $resultF = mysqli_query($con, $sql);
    
    while($linhaF = mysqli_fetch_assoc($resultF)){
        $vetF[] = $linhaF;
    }
    if(isset($vetF)){}else $vetF = NULL;
    return $vetF;
}

function editar_Funcionario($con, $cpf, $cpfantigo, $Nome, $Endereco, $Telefone, $Nascimento, $Sexo, $Tipo, $senha){
    $sql = "UPDATE Funcionarios SET cpf = '$cpf', Nome = '$Nome', Endereco = '$Endereco', Telefone = '$Telefone',Nascimento = '$Nascimento', Sexo = '$Sexo', Tipo = '$Tipo', senha = '$senha' where cpf = '$cpfantigo'";
    
    mysqli_query($con, $sql);
 
   header('Location: controleFuncionario.php');
    
}

// TABELA FORNECEDO--------------------------------------------------------------------------------------------------------------------------------
                                function formularioFornecedor($titulo) {
                                    ?>
                                    
                                    
                                    <B>Cadastro de Fornecedor</B><BR><BR>

                                    <FONT SIZE=2>

                                    <div class="register_account">
                                        <div class="wrap">

                                            <form action="Controle.php?op=Fornecedor_Cadastro" method="POST" >
                                                <div class="col_1_of_2 span_1_of_2">
                                                    <div><input name='Cnpj' autocomplete="off" type="text" maxlength="19" placeholder="Cnpj"></div>
                                                    <div><input name='Empresa' autocomplete="off" type="text" maxlength="50"  placeholder="Empresa"></div>
                                                    
                      
                                                    <button type="submit" class="grey">Finalizar cadastro</button>
                                                    <a href="controleFornecedor.php"><input type="button"value="Voltar controle"></a>
                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

                                /* Funções de Crud - Fornecedor

                                 */

                                function cadastro_Fornecedor($con, $cnpj, $empresa) {

                                    $sql = "INSERT INTO Fornecedor VALUES('$cnpj', '$empresa')";

                                    mysqli_query($con, $sql);

                                    header('Location: cadastroFornecedor.php');
                                }
                                
function excluir_Fornecedor($con, $excluir){
$sql = "DELETE FROM Fornecedor WHERE Cnpj = '$excluir'";
mysqli_query($con, $sql);
    
header('Location: controleFornecedor.php');
}


function um_Fornecedor($con, $CnpjAntigo){
    $sql = "SELECT * FROM Fornecedor Where Cnpj = '$CnpjAntigo'";
    $result = mysqli_query($con, $sql);
    
    
    $linha = mysqli_fetch_assoc($result);
   
    return $linha;
    
}
function tras_Fornecedores($con){
    $sql = "SELECT * FROM Fornecedor";
    
    $result = mysqli_query($con, $sql);
    
    while($linha = mysqli_fetch_assoc($result)){
        $vet[] = $linha;
    }
    if(isset($vet)){}else $vet = NULL;
    return $vet;
}
function editar_Fornecedor($con, $Cnpj, $CnpjAntigo, $Empresa){
    $sql = "UPDATE Fornecedor SET Cnpj = '$Cnpj', Empresa = '$Empresa' where Cnpj = '$CnpjAntigo'";
    
    mysqli_query($con, $sql);
 
   header('Location: controleFornecedor.php');
    
}


// TABELA LIVRO--------------------------------------------------------------------------------------------------------------------------------
                                function formularioLivro($titulo) {
                                    ?>
                                    <B>Cadastro de Livro</B><BR><BR>

                                    <FONT SIZE=2>

                                    <div class="register_account">
                                        <div class="wrap">

                                            <form action="Controle.php?op=Livro_Cadastro" method="POST" >
                                                <div class="col_1_of_2 span_1_of_2">

                                                    <div><input name='codigo' autocomplete="off" type="number"  placeholder="codigo"></div>
                                                    <div><input name='valor' autocomplete="off" type="number"  placeholder="valor"></div>	
                                                    <div><input name='descricao' autocomplete="off" type="text" maxlength="200" placeholder="descricao"></div>
                                                    <div><input name='nome' autocomplete="off" type="text" maxlength="200"  placeholder="nome"></div>
                                                    <div><input name='categoria' autocomplete="off" type="text" maxlength="90"  placeholder="categoria"></div>

                                                    <button type="submit" class="grey">Finalizar Cadastro</button>
                                                    <a href="controleLivro.php"><input type="button"value="Voltar controle"></a>

                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

                                /* Funções de Crud - Fornecedor

                                 */

                                function cadastro_Livro($con, $codigo, $valor, $descricao, $nome, $categoria) {

                                    $sql = "INSERT INTO Livro VALUES($codigo, $valor,'$descricao', '$nome','$categoria')";

                                    mysqli_query($con, $sql);

                                    header('Location: cadastroLivro.php');
                                }

function excluir_Livro($con, $excluir){
$sql = "DELETE FROM Livro WHERE Codigo = '$excluir'";
mysqli_query($con, $sql);
    
header('Location: controleLivro.php');
}


function um_Livro($con, $codigoAntigo){
    $sql = "SELECT * FROM Livro Where codigo = '$codigoAntigo'";
    $resultL = mysqli_query($con, $sql);
    
    
    $linhaLiv = mysqli_fetch_assoc($resultL);
   
    return $linhaLiv;
    
}
function tras_Livro($con){
    $sql = "SELECT * FROM Livro";
    
    $resultL = mysqli_query($con, $sql);
    
    while($linhaLiv = mysqli_fetch_assoc($resultL)){
        $vetL[] = $linhaLiv;
    }
    if(isset($vetL)){}else $vetL = NULL;
    return $vetL;
}
function editar_Livro($con, $Codigo, $codigoAntigo, $Valor, $Descricao ,$Nome, $Categoria){
    $sql = "UPDATE Livro SET Codigo = '$Codigo', Valor = '$Valor', Descricao = '$Descricao', Nome = '$Nome', Categoria = '$Categoria' where Codigo = '$codigoAntigo'";
  
    mysqli_query($con, $sql);
 
   header('Location: relatorioLivro.php');
    
}

//--------------------------------------------------------------------------------------------------------------------------------

                                function formularioEstoque($titulo) {
                                    ?>

                                    <B>Cadastro de Estoque</B><BR><BR>

                                    <FONT SIZE=2>

                                    <!--content-->
                                    <div class="register_account">
                                        <div class="wrap">

                                            <form>
                                                <div class="col_1_of_2 span_1_of_2">
                                                    <div><input type="text" value="Codigo"></div>
                                                    <div><input type="text" value="Valor"></div>	
                                                    <div><input type="text" value="Descricao"></div>
                                                    <div><input type="text" value="Nome"></div>
                                                    <div><input type="text" value="Tipo"></div>
                                                    <div><input type="text" value="Local"></div>

                                                    <button class="grey">	Finalizar cadastro</button>

                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

// TABELA COMPRA--------------------------------------------------------------------------------------------------------------------------------
                                function formularioCompra($titulo) {
                                    ?>
                                    <B>Cadastro de Compra</B><BR><BR>

                                    <FONT SIZE=2>

                                    <div class="register_account">
                                        <div class="wrap">

                                            <form action="Controle.php?op=Compra_Cadastro" method="POST" >
                                                <div class="col_1_of_2 span_1_of_2">

                                                    <div><input name='CodigCompra' autocomplete="off" type="number"  placeholder="codigo"></div>
                                                    <div><input name='Total' autocomplete="off" type="number"  placeholder="valor"></div>	
                                                    <div><input name='Data' autocomplete="off" type="text" maxlength="200" placeholder="descricao"></div>
                                                    <div><input name='Valor' autocomplete="off" type="text" maxlength="200"  placeholder="nome"></div


                                                    <div>
                                                        <?php
                                                            require '../Crud_Fornecedor/Funcoes.php';
                                                            require '../Login/conexao.php';
                                                            $con = banco();
                                                            $lista = tras_Fornecedores($con);
                                                            
                                                                ?>
                                                        <select name='Fornecedor_Cnpj'>
                                                                <?php foreach ($lista as $dado) { ?>
                                                                 <option value='<?php echo $dado['Cnpj']; ?>'><?php echo $dado['Empresa']; ?></option>
                                                                <?php } ?>
                                                        </select>
                                                          <button type="submit" class="grey">Finalizar Cadastro</button>
                                                    </div>

                                                  

                                                </div>

                                                <div class="clear"></div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                }

                                /* Funções de Crud - Fornecedor

                                 */

                                function cadastro_Compra($con, $CodigCompra, $Total, $Data, $Valor, $Fornecedor_Cnpj) {

                                    $sql = "INSERT INTO Compra VALUES($CodigCompra, $Total, '$Data' $Valor,'$Fornecedor_Cnpj')";

                                    mysqli_query($con, $sql);

                                    header('Location: cadastroLivro.php');
                                }

//--------------------------------------------------------------------------------------------------------------------------------




