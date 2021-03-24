<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Ordem de Serviço . <span>Visualizar OS</span> </h1>
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
                               <h2>N° <?php if( $os["id_os_service"] < 100 ){ ?>00<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?><?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h2>
                               <?php if( $os["found_defect"] == '' ){ ?>

                               <a href="/admin/os/print/start/<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn send-print pull-right"><i class="fa  fa-print"></i>Imprimir</a>
                                <?php }else{ ?>

                                <a href="/admin/os/print/<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn send-print pull-right"><i class="fa  fa-print"></i>Imprimir</a>
                                <?php } ?>

                               <a href="/admin/os/<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete" class="btn send-delete pull-right"><i class="fa  fa-trash-o"></i>Excluir</a>
                                <h2>Ordens de Serviço 
                                  <?php if( $os["stage_os"] == 1 ){ ?>

                                  <button class="btn bt_default btn_stage_f">Finalizado</button>
                                  <?php }else{ ?>

                                  <button class="btn bt_default btn_stage_p">Pendente</button>
                                  <?php } ?>

                                </h2>
                                <div class="box_pay pull-right">
                                  <?php if( $os["stage_os"] == '1' ){ ?>

                                 <p><span>(Pago)</span> R$ <?php echo htmlspecialchars( $os["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                 <?php }else{ ?>

                                 <p><span>(A Pagar)</span> R$ <?php echo htmlspecialchars( $os["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                 <?php } ?>

                                 <a href="">Visualizar Pagamento</a>
                                </div>
                              </div>
                             <div class="box-body no-padding">

                                <!-- header client -->
                                <div class="col-md-3">
                                    <div class="img-card">
                                        <img src="/res/admin/uploads/default.gif">
                                    </div>
                                </div>
                               <div class="col-md-4">
                                  <header class="header_first_name">
                                      <h2><?php echo htmlspecialchars( $os["first_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                                  </header>
                                    <ul class="user_information">
                                      <li>Contato:<small><?php echo htmlspecialchars( $os["nr_phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                      <li>CPF:<small><?php echo htmlspecialchars( $os["nr_cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                      <li>Cidade:<small><?php echo htmlspecialchars( $os["name_city"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                      <li>Bairro:<small><?php echo htmlspecialchars( $os["neighborhood"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                    </ul>
                               </div>
                               <div class="col-md-5">
                                   <div class="form_buttons">
                                      <a href="/admin/perfil/update/<?php echo htmlspecialchars( $os["id_os_client"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn_default btn_edit"><i class="fa fa-pencil"></i>Editar Perfil</a>
                                      <a href="/admin/os/create" class="btn btn_default btn_new_os"><i class="fa  fa-plus-circle"></i>Nova OS</a>
                                      <a href="/admin/perfil/<?php echo htmlspecialchars( $os["id_os_client"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" class="btn btn_default btn_profile"><i class="fa  fa-user"></i>Perfil Completo</a>
                                   </div>
                               </div>
                               <!-- geral -->
                               <div class="col-md-12" style="padding-left: 80px;">
                                   <div class="box-header-list">
                                     <h3><i class="fa  fa-files-o"></i>Geral</h3>
                                   </div>
                                   <ul class="list_general">
                                     <h4>Informações Gerais</h4>
                                      <li>Colaborador:<small><?php echo htmlspecialchars( $os["clerk"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                      <li>Metodo de Pg:<small><?php if( $os["stage_os"] == 2 ){ ?>A receber<?php }else{ ?>A vista - Dinheiro<?php } ?></small></li>
                                      <li>Técnico:<small><?php echo htmlspecialchars( $os["responsible_technician"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                   </ul>
                                   <ul class="list_general">
                                    <h4>Datas Importantes</h4>
                                     <li>Data de entrada:<small><?php echo htmlspecialchars( $os["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                     <li>Inicio:<small><?php echo htmlspecialchars( $os["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                     <li>Término:<small><?php echo htmlspecialchars( $os["end_date"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                  </ul>
                                  <ul class="list_general">
                                    <h4>Informações Relevantes</h4>
                                     <li style="font-family: 'Poppins',sans-serif; font-weight: 700; color:#6c7293;">Relato do Cliente</li>
                                     <small style="font-size: 1.1em;"><?php echo htmlspecialchars( $os["customer_report"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small>
                                     <li>Poblema constatado:<small><?php echo htmlspecialchars( $os["found_defect"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                  </ul>
                                  <ul class="list_general">
                                    <h4>Equipamentos</h4>
                                    <div class="box-body no-padding">
                                      <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              <th>Nome</th>
                                              <th>Modelo</th>
                                              <th>N.Série</th>
                                              <th>Marca</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                              <tr>
                                                 <td>
                                                     <div class="kt-card-user">
                                                         <div class="kt-card-user-details">
                                                            <?php echo htmlspecialchars( $os["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                     </div>
                                                  </div>
                                                  </td>
                                                  <td><?php echo htmlspecialchars( $os["product_model"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                  <td><?php echo htmlspecialchars( $os["nr_imei"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                  <td><?php echo htmlspecialchars( $os["product_brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                              </tr>

                                          </tbody>
                                        </table>
      
                                        <!-- end paginator -->
                                   </div>
                                  </ul>
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