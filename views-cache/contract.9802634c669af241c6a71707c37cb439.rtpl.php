<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Lista de Contratos <span>Listagem</span> </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="/admin/contratos">Listagem</a></li>
        </ol>
    </section>

              <!-- Main content -->
<section class="content">

     <div class="row">
                 <div class="col-md-12">
                    <div class="box box-table">
                      
                              <div class="box-header box-header-list">
                                                               <div class="form_search">
                                  <form action="/admin/contratos">
                                    <div class="box_search">
                                      <input type="text" name="search" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Faça uma Busca"> 
                                      <button type="submit" class="btn_search fa fa-search"></button>
                                    </div>
                                  </form>
                                </div>
                                <a href="/admin/contrato/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                              </div>
                             <div class="box-body no-padding">
                                <table class="table table-striped">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>CPF</th>
                                        <th>RG</th>
                                        <th>Turno</th>
                                        <th>Data</th>
                                      </tr>
                                  </thead>
                                    <tbody>
                                      <?php $counter1=-1;  if( isset($contract) && ( is_array($contract) || $contract instanceof Traversable ) && sizeof($contract) ) foreach( $contract as $key1 => $value1 ){ $counter1++; ?>
                                        <tr>
                                          <td>
                                            <div class="kt-card-user">
                                              <div class="kt-card-user-details">
                                               <i class="fa fa-ellipsis-h count"> </i>
                                               <div class="box-dropdow">
                                                   <a href="/admin/contrato/update/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                   <a href="/admin/contrato/view/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-print"></i> Imprimir</a>
                                                      <a href="/admin/contrato/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                  </div>
                                                  <a href="">
                                                    <?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                  </a>
             
                                                </div>
                                              </div>
                                          </td>
                                            <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["nrrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo encurtarTexto($value1["desperiod"], 8); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desstart"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <!-- <td>
                                            <a href="/admin/contrato/view/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> Visualizar</a>
                                            <a href="/admin/contrato/update/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn-warning btn-xs"><i class="fa fa-search"></i> editar</a>
                                            <a  href="/admin/contrato/<?php echo htmlspecialchars( $value1["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" onclick="return confirm('Deseja realmente excluir?')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Excluir</a>
                                            </td> -->
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