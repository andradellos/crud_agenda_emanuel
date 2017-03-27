<!DOCTYPE html>

<html lang="br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Agenda</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        
        
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
       <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
        
        
    </head>    
    <body>        
        <div id="container">
           <!--carregue aqui o conteúdo das views-->
           <div class="col-md-10 col-md-offset-1">
               
               <nav class="navbar navbar-default">
                    <div class="container-fluid">
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Agenda de Compromissos</a>
                      </div>
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                           <li class="active"><a href="<?php echo base_url(''); ?>">Início <span class="sr-only">(current)</span></a></li>
                                                
                        </ul>
                       
                      </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                  </nav> 
               <div class="row">
                   <div class="col-md-12">
                        <?php 
                        $this->load->view($conteudo);
                        ?>                       
                   </div>   
               </div>
           <footer>
               <hr style="border-top: 2px solid #0086b ">
               <center>2017 - andradellos@hotmail.com</center>
           </footer>
           </div> 
           
        </div>
            
    </body>
   
</html>