<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->

 <div class="content-wrapper">

      <!-- Content Header (Page header) -->

    <section class="content-header page_header_h1">

      <h1>

        Lista de Alunos da . <span><?php echo getUserName(); ?></span> 
       
      </h1>

      <ol class="breadcrumb">

        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>

        <li class="active"><a href="/admin/alunos">Usuários</a></li>

      </ol>

    </section>



                  <!-- Main content -->

  <section class="content">



   <div class="row">

  	 <div class="col-md-12 col-lg-12">

  		  <div class="box box-table">



                <div class="box-header box-header-list">

                  <a href="/admin/aluno/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo aluno</a>
                  <h3>Alunos</h3>
                </div>

             <div class="box-body no-padding">

                         <table class="table table-striped">

                                      <thead>

                                        <tr>

                                          <th>#</th>

                                          <th>Nome</th>

                                          <th>Phone</th>

                                          <th>Cidade</th>

                                           <th>Consultora</th>

                                          <th>Status</th>

                                        </tr>

                                      </thead>

                                  <tbody>

                              <?php $counter1=-1;  if( isset($sales) && ( is_array($sales) || $sales instanceof Traversable ) && sizeof($sales) ) foreach( $sales as $key1 => $value1 ){ $counter1++; ?>
                                    <tr>
                                    <td>
                                      <div class="kt-card-user">
                                        <div class="kt-card-user-details">
                                         <i class="fa fa-ellipsis-h count"> </i>
                                         <div class="box-dropdow">
                                             <a href="/admin/aluno/view/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-gg"></i> Visualizar</a>
                                              <a href="/admin/aluno/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                            </div>
                                        <a href="">
                                          <?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        </a>
                                    </div>
                                 </div>
                                    </td>
                                    <td><?php echo htmlspecialchars( $value1["desaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                    <td><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>

                                    <td>
                                      <?php if( $sale["idperson"] == $value1["idperson"] ){ ?><?php echo getUserName(); ?><?php } ?>
                                    </td>

                                    <td  style="width: 120px;">

                                      <div class="btn-group">

                                        <button type="button" class="btn status"><?php if( $value1["desstage"] == 1 ){ ?>ET-1<?php }elseif( $value1["desstage"] == 2 ){ ?>ET-2<?php }else{ ?>ET-3<?php } ?></button> 



                                        <div class="btn-group">

                                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">

                                            <i class="caret"></i>

                                          </button>

                                          <ul class="dropdown-menu">

                                            <li><a href="/admin/aluno/stage/s1/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">ET-1</a></li>

                                            <li><a href="/admin/aluno/stage/s2/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">ET-2</a></li>

                                            <li><a href="/admin/aluno/stage/s3/<?php echo htmlspecialchars( $value1["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">ET-3</a></li>

                                          </ul>

                                        </div>

                                      </div>

                                      </td>

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