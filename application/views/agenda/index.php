 
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Cadastro</a></li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
        
        <div class="input-group">
            <span class="input-group-addon">Filter</span>
            <input id="filter" type="text" class="form-control" placeholder="escreva aqui">

        </div>
        
        <table class="table table-striped">
            <thead>
           
                <th>id</th>
                <th>Agenda de</th>
                <th>Data</th>
                <th>Hora</th> 
                <th>Local</th> 
                <th>Pauta</th>
                <th> <center>Ação</center></th>
      
            </thead>
            <tbody class="searchable">
                <?php foreach ($selectAgendaPessoa as $value) { ?>
                <tr>            
                    <td><?php echo $value->id_agenda; ?> </td>
                    <td><?php echo $value->nome; ?> </td>
                    <td><?php echo $value->data; ?> </td>
                    <td><?php echo $value->hora; ?> </td>
                    <td><?php echo $value->local; ?> </td>
                    <td><?php echo $value->pauta; ?> </td>
                    <center>
                        <td><a  href="<?php echo base_url('Agenda_Ctr/eliminar')."/".$value->id_agenda; ?>" title="Apagar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
                        <td><a  href="<?php echo base_url('Agenda_Ctr/editar')."/".$value->id_agenda; ?>" title="Editar"><span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span></a></td>
                    </center>
                </tr>
                <?php } ?>
              
            </tbody>
        </table>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <div class="row" >
            <div class="col-md-8 col-md-offset-2">
                 <form method="POST" action="<?php echo base_url('Agenda_Ctr/insert')?>">
                    <div class="form-group">
                     <label for="exampleInputEmail1">Pessoa</label>
                     <select name="txtPessoa"  class="form-control">
                         <?php foreach ($selectPessoa as  $value) { ?>      

                         <option value=" <?php echo $value->id_pessoa ; ?>"> <?php echo $value->nome ; ?>  </option>
                          <?php } ?>

                     </select>
                   </div>
                   <div class="form-group col-xs-4">
                     <label for="exampleInputData1">Data</label>
                     <input type="date"  name="txtData" class="form-control" id="exampleInputData1" placeholder="Data" required="Obrigatório">
                   </div>
                   <div class="form-group col-xs-3">
                     <label for="exampleInputHora1">Hora</label>
                     <input type="time" name="txtHora" class="form-control" id="exampleInputHora1" placeholder="Hora" required="Obrigatório">
                   </div>

                     <div class="form-group col-xs-12">
                     <label for="exampleInputLocal1">Local</label>
                     <input type="text" name="txtLocal" class="form-control" id="exampleInputLocal1" placeholder="Local da reunião" required="Obrigatório">
                   </div>
                     <div class="form-group  col-xs-12">
                     <label for="exampleInputPauta1">Pauta</label>
                     <input type="text" name="txtPauta" class="form-control" id="exampleInputPauta1" placeholder="Pauta da Reunião" required="Obrigatório">
                   </div>

                   <button type="submit" class="btn btn-default btn-success  col-xs-12">Registrar compromisso</button>
                 </form>

            </div>                      
        </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});
</script>