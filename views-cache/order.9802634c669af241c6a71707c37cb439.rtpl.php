<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Ordem de Serviço . <span>Todos</span> </h1>
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
                                <a href="/admin/order/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>

                  <div class="form_search">
                    <form action="/admin/orders">
                      <div class="box_search">
                        <input type="text" name="search" value="<?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?>" placeholder="Faça uma Busca"> 
                        <button type="submit" class="btn_search fa fa-search"></button>
                      </div>
                    </form>
                  </div>
                              </div>
                             <div class="box-body no-padding">
                                <table class="table table-striped">
                                  <thead>
                                      <tr>
                                        <th>#</th>
                                        <th>Nome</th>
                                        <th>Cidade</th>
                                        <th>Turno</th>
                                        <th>Consultora</th>
                                        <th>Professor</th>
                                        <th>Valor</th>
                                        <th>Pagamento</th>
                                        <th>Auxiliar</th>
                                        <th>Data</th>
                                      </tr>
                                  </thead>
                                    <tbody>
                                      <?php $counter1=-1;  if( isset($order) && ( is_array($order) || $order instanceof Traversable ) && sizeof($order) ) foreach( $order as $key1 => $value1 ){ $counter1++; ?>
                                        <tr>
                                          <td>
                                            <div class="kt-card-user">
                                              <div class="kt-card-user-details">
                                               <i class="fa fa-ellipsis-h count"> </i>
                                               <div class="box-dropdow">
                                                   <a href="/admin/order/<?php echo htmlspecialchars( $value1["idcontrol"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                    <a href="/admin/order/<?php echo htmlspecialchars( $value1["idcontrol"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                  </div>
                                              <a href="">
                                                <?php echo htmlspecialchars( $value1["idcontrol"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                              </a>
                                          </div>
                                       </div>
                                          </td>
                                            <td><?php echo htmlspecialchars( $value1["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desshift"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desconsultant"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desteacher"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["desprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                             <td><?php if( $value1["payment"] == 1 ){ ?>A vista<?php }elseif( $value1["payment"] == 2 ){ ?>Cartão de Crédito<?php }else{ ?>***<?php } ?></td>
                                            <td><?php echo htmlspecialchars( $value1["deshelp"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo fomatDate($value1["dtregister"]); ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                  </table>
                                  <div class="col-sm-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                                      <ul class="pagination">
                                        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
                                             <li class="active">
                                  <a href="<?php echo htmlspecialchars( $value1["previous"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" aria-controls="example2" data-dt-idx="1" tabindex="0">Anterior</a>
                              </li>

                              <li>
                                <a href="<?php echo htmlspecialchars( $value1["href"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["text"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                            </li>
                              <li class="active">
                                  <a href="<?php echo htmlspecialchars( $value1["next"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" aria-controls="example2" data-dt-idx="1" tabindex="0">Próximo</a>
                              </li>
                                         <?php } ?>
                                      </ul>
                                    </div>
                                  </div>
                                  <!-- end paginator -->
                                  <div class="col-md-12">
                                      <div class="row">
                                        <div class="col-md-3 col-sm-6 col-xs-12">
                                            <a href="/admin/starting/murilo">
                                              <div class="info-box bg-aqua">
                                                  <span class="info-box-icon"><i class="fa fa-get-pocket"></i></span>
                                                  <div class="info-box-content">
                                                    <span class="info-box-text">Professores</span>
                                                    <span style="font-weight: 200;"> <?php if( $search !== 'Murilo' && $search !== 'murilo' && $search !== 'Danilo' && $search !== 'danilo' && $search !== 'Alex' && $search !== 'alex' && $search !== 'Rafael' && $search !== 'rafael' ){ ?><?php }else{ ?><?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></span>
                                                    <span class="info-box-number"> <?php $counter1=-1;  if( isset($prof) && ( is_array($prof) || $prof instanceof Traversable ) && sizeof($prof) ) foreach( $prof as $key1 => $value1 ){ $counter1++; ?><?php if( $value1["mest"] > 0 ){ ?> <?php echo htmlspecialchars( $value1["mest"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <span style="font-weight: 200;">Aulas</span><?php } ?><?php } ?></span>
                                                    <span style="font-weight: 200;">Mês <?php echo date('m'); ?></span>
                                                  </div>
                                                  <!-- /.info-box-content -->
                                              </div>
                                              <!-- /.info-box -->
                                            </a>
                                      </div>

                                      <div class="col-md-3 col-sm-6 col-xs-12">
                                        <a href="/admin/starting/murilo">
                                          <div class="info-box bg-green">
                                              <span class="info-box-icon"><i class="fa fa-get-pocket"></i></span>
                                              <div class="info-box-content">
                                                <span class="info-box-text">Consultores</span>
                                                <span style="font-weight: 200;"> <?php if( $search !== 'Dorilene' && $search !== 'dorilene' && $search !== 'Larissa' && $search !== 'larissa' ){ ?><?php }else{ ?><?php echo htmlspecialchars( $search, ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></span>
                                                <span class="info-box-number lari_result"> <?php $counter1=-1;  if( isset($lari) && ( is_array($lari) || $lari instanceof Traversable ) && sizeof($lari) ) foreach( $lari as $key1 => $value1 ){ $counter1++; ?> <?php echo htmlspecialchars( $value1["mes"], ENT_COMPAT, 'UTF-8', FALSE ); ?> <span style="font-weight: 200;"><?php if( $value1["mes"] > 0 ){ ?>Venda<?php } ?></span><?php } ?></span>
                                                <span style="font-weight: 200;">Mês <?php echo date('m'); ?></span>
                                              </div>
                                              <!-- /.info-box-content -->
                                          </div>
                                          <!-- /.info-box -->
                                        </a>
                                  </div>
                                      </div>
                                  </div>
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