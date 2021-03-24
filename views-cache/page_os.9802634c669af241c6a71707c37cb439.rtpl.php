<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Ordem de Serviço . <span>Lista das OS</span> </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="">Ordem de serviço</a></li>
        </ol>
    </section>

              <!-- Main content -->
<section class="content">

     <div class="row">
                 <div class="col-md-12">
                    <div class="box box-table">
                      
                              <div class="box-header box-header-list">
                                                                  <div class="form_search">
                                  <form action="/admin/os/preview">
                                    <div class="box_search">
                                      <input type="text" name="search" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Faça uma Busca"> 
                                      <button type="submit" class="btn_search fa fa-search"></button>
                                    </div>
                                  </form>
                                </div>
                                <h3>Ordem</h3>
                                <a href="/admin/os/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                              </div>
                             <div class="box-body no-padding">
                                <table class="table table-striped">
                                  <thead>
                                      <tr>
                                        <th>N.</th>
                                        <th>Cliente</th>
                                        <th>Status</th>
                                        <th>Colaborador</th>
                                        <th>Criado Em</th>
                                        <th>Valor</th>
                                      </tr>
                                  </thead>
                                    <tbody>
                                    <?php $counter1=-1;  if( isset($page_list) && ( is_array($page_list) || $page_list instanceof Traversable ) && sizeof($page_list) ) foreach( $page_list as $key1 => $value1 ){ $counter1++; ?>


                                        <tr>
                                           <td>
                                               <div class="kt-card-user">
                                                   <div class="kt-card-user-details">
                                                    <i class="fa fa-ellipsis-h count"> </i>
                                                    <div class="box-dropdow">
                                                        <a href="/admin/os/view/<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-gg"></i> Visualizar</a>
                                                        <a href="/admin/os/update/<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                        <?php if( $value1["found_defect"] == '' ){ ?>

                                                        <a href="/admin/os/print/start/<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-print"></i> Imprimir</a>
                                                        <?php }else{ ?>

                                                        <a href="/admin/os/print/<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-print"></i> Imprimir</a>
                                                        <?php } ?>

                                                           <a href="/admin/os/<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                       </div>
                                                   <a href="">
                                                    <?php if( $value1["id_os_service"] < 100 ){ ?>

                                                      00<?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                      <?php }else{ ?>

                                                      <?php echo htmlspecialchars( $value1["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                      <?php } ?>

                                                   </a>
                                                   <div class="kt-details-product">
                                                       <span><?php echo htmlspecialchars( $value1["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span> | <span><?php echo htmlspecialchars( $value1["product_brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span> | <span><?php echo htmlspecialchars( $value1["nr_imei"], ENT_COMPAT, 'UTF-8', FALSE ); ?></span>
                                                   </div>
                                               </div>
                                            </div>
                                            </td>
                                            <td><?php echo htmlspecialchars( $value1["first_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td>
                                                <?php if( $value1["stage_os"] == 2 ){ ?>

                                              <button class="btn btn-status bd-status-p">Pendente</button>
                                                <?php }else{ ?>

                                                <button class="btn btn-status bd-status-f">Finalizado</button>
                                                <?php } ?>

                                            </td>
                                            <td><?php echo htmlspecialchars( $value1["clerk"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo fomatDate($value1["dtregister"]); ?></td>
                                            <td>R$ <?php echo htmlspecialchars( $value1["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?><small><?php if( $value1["stage_os"] == 2 ){ ?>(A Pagar)<?php }else{ ?>(Pago)<?php } ?></small>
                                            
                                            </td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                  </table>

<!--                                   <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                      <ul class="pagination">
                                        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>

                                             <?php if( $value1["href"] == $value1["text"] ){ ?>

                                              <li class="active">
                                                  <a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" aria-controls="example2" data-dt-idx="1" tabindex="0"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                                              </li>
                                              <?php }else{ ?>

                                              <li>
                                                <a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                                            </li>
                                            <?php } ?>

                                         <?php } ?>

                                      </ul>
                                    </div>
                                  </div> -->
                                  <!-- end paginator -->
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

//times

var elements = document.querySelectorAll('.add');

var el = Array.prototype.slice.call(elements)

el.forEach(element => {

  var el = element.innerHTML;

if(el.indexOf('minutos')){
  element.classList.add('btn-success')
  console.log(el)
}
  
  var ele = element.innerHTML.replace('horas', '');

if(el.indexOf('horas')){
  if(parseInt(ele) <= 24){
    element.classList.add('btn-success')
  }else if(parseInt(ele) <= 48){
    element.classList.add('btn-warning')
  }else if(parseInt(ele) <= 72){
    element.classList.add('btn-danger')
  }else if(parseInt(ele) > 72){
    element.classList.add('btn-danger')
    element.innerHTML = "expirado"
  }else{
    element.classList.add('btn-danger')
    
  }
}


  
});
  


</script>