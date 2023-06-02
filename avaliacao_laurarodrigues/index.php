<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <style>
    
            
            body{
            
                background-image: url("img/honda.png");
                
                color: white;
            }
            
           
            h1{
                text-align: center;
            }
            
            .btn-alert{
                color: red;
            }
            
        </style>
        
        <title>Formulário de Seleção de Acessórios- Montadora HONDA Veículos</title>
           <h1>Formulário de Seleção de Acessórios- Montadora HONDA Veículos</h1>
    </head>
    <body>
        
        <div class="container">
            <form method="post" action ="index.php">
                <div class="col-lg-6">         
                </div>
                <div class="col-lg-12"> 
                    <div class="form-group">
                        <label for="Cor do veículo">Cor do veículo:</label>
                        <input type ="text" class="form-control" id="Cor_do_veículo"
                               placeholder="Digite a cor do veículo">
                </div>
                    <div class="col-lg-12"> 
                    <div class="form-group">
                        <label for="modelo"> Modelo do veículo:</label>
                        <select class="form-control"id="modelo"name="modelo">
                            <option name="modelo"value="">selecione o modelo</option>
                            <option name="modelo" value="Civic">Civic</option>
                            <option name="modelo" value="Accord">Accord</option>
                            <option name="modelo" value="CR-VR">CR-VR</option>
                            <option name="modelo" value="HR-V">HR-V</option>
                            <option name="modelo" value="Fit">Fit</option>
                            <option name="modelo" value="WR-V">WR-V</option>
                            <option name="modelo" value="Jazz">Jazz</option>
                            <option name="modelo" value="Pilot">Pilot</option>
                            <option name="modelo" value="Odyssey">Odyssey</option>
                            
                        </select>
                      
                </div>
                 
                </div>
                    <div>
                    <div class="form-group"></div>
                    <label>Acessórios:</label>
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Rodas de Liga Leve">Rodas de Liga Leve</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Teto Solar">Teto solar</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Ar-condicionado Digital">Ar-condicionado digital</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Central Multimidia">Central Multimidia</label>
                </div>
                    
                <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Sensor de Estacionamento">Sensor de Estacionamento</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Camêra de ré">Camêra de ré</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Faroís de led">Faroís de led</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Bancos de aquecimentnto">Bancos de aquecimentnto</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Sistema de Navegação GPS">Sistema de Navegação GPS</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Sensor de chuva">Sensor de chuva</label>
                </div>
                    
                    <div>
                    <label><input type="checkbox" name="checkbox[]"  value="Controle de Cruzeiro">Controle de Cruzeiro</label>
                </div>
            
                    <div class = "form-group">
                        <label for="Observações">Observações:</label>
                        <textarea class="form-control" id="Observação" rows="5" placeholder="Digite qualquer observação"></textarea>
                    </div>
                    
                    <div class="btn btn-alert">
                        <label> <input type="submit" value="Confirmar seleção de acessórios" class="bnt bnt-alert">
                            </label>
                        
                    </div>
        <?php
       if($_POST){
           @$_Cor_do_veículo= $_POST['Cor_do_veículo'];
           @$Modelo_do_veículo= $_POST['modelo'];
           @$Acessórios=$_POST['Checkbox'];
           @$Observação=$_POST['Observação'];
           
           
           
       
      // if(empty($Cor_do_veículo)|| (empty($Modelo_do_veículo) || (empty($Checkbox) || (empty($Observação))){
           //Todos os campos obrigatórios
       }
       //echo ()
       ?>
        
       </div>
       </form>
    </body>
</html>
