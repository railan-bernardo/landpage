<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header page_header_h1">
         <h1>Lista de Consultores . <span>Todos</span></h1>
            <ol class="breadcrumb">
              <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
              <li class="active"><a href="/admin/users/create">Consultores</a></li>
            </ol>
        </section>

                  <!-- Main content -->
    <section class="content">

         <div class="row">
                     <div class="col-md-12">
                        <div class="box box-table">
                          
                              <div class="box-header box-header-list">
                                <a href="/admin/users/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                              <h3>Usuários</h3>
                              </div>
                                 <div class="box-body no-padding">
                                    <table class="table table-striped">
                                      <thead>
                                          <tr>
                                            <th>#</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Login</th>
                                            <th>Admin</th>
                                          </tr>
                                      </thead>
                                        <tbody>
                                          <?php $counter1=-1;  if( isset($users) && ( is_array($users) || $users instanceof Traversable ) && sizeof($users) ) foreach( $users as $key1 => $value1 ){ $counter1++; ?>
                                            <tr>
                                              <td>
                                                <div class="kt-card-user">
                                                  <div class="kt-card-user-details">
                                                   <i class="fa fa-ellipsis-h count"> </i>
                                                   <div class="box-dropdow">
                                                       <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                        <a href="/admin/users/<?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                      </div>
                                                  <a href="">
                                                    <?php echo htmlspecialchars( $value1["iduser"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                  </a>
                                              </div>
                                           </div>
                                              </td>
                                                <td><?php echo htmlspecialchars( $value1["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php echo htmlspecialchars( $value1["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php echo htmlspecialchars( $value1["deslogin"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                <td><?php if( $value1["inadmin"] == 1 ){ ?>Sim<?php }else{ ?>Não<?php } ?></td>
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