<div class="row">
    <div class="col-md-10 col-md-offset-1">    

        <form method="POST" action="<?php echo base_url('Agenda_Ctr/update')?>">
             <?php 
             foreach ($editeCompromisso as $value) {   ?> 
                 <input type="hidden" name="txtIdAgenda"   value="<?php echo $value->id_agenda?>">

                 <div class="form-group">
                    <label for="exampleInputEmail1">Pessoa</label>

                        <?php 
                         $lista = array();
                        foreach ($selectPessoa as  $registro) {     
                         $lista[$registro->id_pessoa]= $registro->nome;                
                        }
                        echo form_dropdown('txtPessoa', $lista, $value->id_pessoa, 'class="form-control"');
                        ?>

                  </div>
                  <div class="form-group col-xs-4">
                    <label for="exampleInputData1">Data</label>
                    <input type="date"  name="txtData" class="form-control" id="exampleInputData1" value="<?php echo $value->data?>" required="Obrigatório">
                  </div>
                  <div class="form-group col-xs-3">
                    <label for="exampleInputHora1">Hora</label>
                    <input type="time" name="txtHora" class="form-control" id="exampleInputHora1" value="<?php echo $value->hora?>" required="Obrigatório">
                  </div>

                    <div class="form-group col-xs-12">
                    <label for="exampleInputLocal1">Local</label>
                    <input type="text" name="txtLocal" class="form-control" id="exampleInputLocal1" value="<?php echo $value->local?>" required="Obrigatório">
                  </div>
                    <div class="form-group  col-xs-12">
                    <label for="exampleInputPauta1">Pauta</label>
                    <input type="text" name="txtPauta" class="form-control" id="exampleInputPauta1" value="<?php echo $value->pauta?>" required="Obrigatório">
                  </div>

            <?php }  ?> 
                  <button type="submit" class="btn btn-default btn-success  col-xs-12">Modificar compromisso</button>
                </form>
    </div>  
    
</div>


<?php
//print_r($editeCompromisso);