<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header page_header_h1">
            <h1>
                Agendados <span>Todos</span>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active"><a href="">agendados</a></li>
            </ol>
        </section>

<!-- Main content -->
<section class="content">

        <div class="row">
            <div class="col-lg-12">
                <div class="box box-table">
                    
                    <div class="box-header box-header-list">
                        <a href="/admin/schedule/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                        <h3>Lista de Agendamentos</h3>
                    </div>

                    <div class="box-body no-padding">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Aluno</th>
                            <th>Aula</th>
                            <th>Horário</th>
                            <th>Professor</th>
                            <th>Data</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php $counter1=-1;  if( isset($schedule) && ( is_array($schedule) || $schedule instanceof Traversable ) && sizeof($schedule) ) foreach( $schedule as $key1 => $value1 ){ $counter1++; ?>
                            <tr>
                                <td>
                                    <div class="kt-card-user">
                                        <div class="kt-card-user-details">
                                         <i class="fa fa-ellipsis-h count"> </i>
                                         <div class="box-dropdow">
                                             <!-- <a href="/admin/aluno/view/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-gg"></i> Visualizar</a> -->
                                              <a href="/admin/schedule/{$value.idshe/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                            </div>
                                        <a href="">
                                            <?php echo htmlspecialchars( $value1["idshe"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </a>
                                    </div>
                                 </div>
                                </td>
                                <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["desclass"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["destime"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo htmlspecialchars( $value1["desteacher"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                <td><?php echo fomatDate($value1["desdate"]); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
        </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script>
    var dash = document.querySelectorAll('.count')
  var drop = document.querySelectorAll('.box-dropdow')
  
  var dash_count = Array.prototype.slice.call(dash)
  var drop_dow = Array.prototype.slice.call(drop)
  
  dash_count.forEach(dash =>{
  
      dash.addEventListener("click", e =>{
  
         if(dash.nextElementSibling.style.zIndex === "99"){
              dash.nextElementSibling.style.transform = "translateY(100%)";
              dash.nextElementSibling.style.zIndex = "-99";
         }else{
              dash.nextElementSibling.style.transform = "translateY(0)";
              dash.nextElementSibling.style.zIndex = "99";
         }
      })
  
  })
  </script>