<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header page_header_h1">
    <h1> Ordem de Serviço . <span>Atualizar OS</span></h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/admin/os">OS</a></li>
      <li class="active"><a href="">atualizar</a></li>
    </ol>
  </section>

  <!-- Main content -->
    <section class="content">

       <div class="row">
         <div class="col-md-12">
           <div class="box-panel">
                    <!-- /.box-header -->
               <form class="form-os" role="form" action="/admin/os/update/<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                           <div class="box-body">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="id_os_client">Cliente</label>
                                      <!-- <span class="pull-right new-link new-a">+ Novo Cliente</span> -->
                                      <select name="id_os_client" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                                           <option value="<?php echo htmlspecialchars( $os["id_os_client"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $os["first_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                      </select>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="id_stock">Equipamento do cliente</label>
                                      <!-- <span class="pull-right new-link new-c">+ Cadastrar Novo</span> -->
                                      <select name="id_services" class="form-control  select2 select2-hidden-accessible" style="width: 100%;">
                                        <option value="<?php echo htmlspecialchars( $os["id_services"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $os["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                      </select>
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="stage_os">Status</label>
                                      <select name="stage_os" class="form-control  select2 select2-hidden-accessible" style="width: 100%;">
                                        <?php if( $os["stage_os"] == 2 ){ ?>
                                        <option value="<?php echo htmlspecialchars( $os["stage_os"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Pendente</option>
                                        <option value="1">Finalizado</option>
                                        <?php }else{ ?>
                                        <option value="<?php echo htmlspecialchars( $os["stage_os"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Finalizado</option>
                                        <option value="2">Pendente</option>
                                        <?php } ?>
                                      </select>
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="clerk">Colaborador</label>
                                      <input type="text" name="clerk" class="form-control" value='<?php echo htmlspecialchars( $os["clerk"], ENT_COMPAT, 'UTF-8', FALSE ); ?>'>
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="customer_report">Relato do cliente</label>
                                      <textarea name="customer_report" class="form-control"><?php echo htmlspecialchars( $os["customer_report"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-12">
                                    <div class="form-group">
                                      <label for="found_defect">Defeito Constatado</label>
                                      <textarea name="found_defect" class="form-control"><?php echo htmlspecialchars( $os["found_defect"], ENT_COMPAT, 'UTF-8', FALSE ); ?></textarea>
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="responsible_technician">Técnico Responsavel</label>
                                      <input name="responsible_technician" class="form-control" value="<?php echo htmlspecialchars( $os["responsible_technician"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-6">
                                    <div class="form-group">
                                      <label for="found_defect">Data de Finalização</label>
                                      <input type="date" name="end_date" class="form-control" value="<?php echo htmlspecialchars( $os["end_date"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                    </div>
                                  </div><!-- // -->
                                  <div class="main-service">
                                    <div class="col-md-12">
                                      <label for="id_stock">Serviço</label>
                                      <div class="form-group">
                                        
                                        <div class="col-md-7" style="padding-left: 0;">
                                          <select name="id_stock" id="selecteds" class="form-control  select2 select2-hidden-accessible" style="width: 100%;">
                                            <option selected value="<?php echo htmlspecialchars( $os["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $os["service_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                            <?php $counter1=-1;  if( isset($stock) && ( is_array($stock) || $stock instanceof Traversable ) && sizeof($stock) ) foreach( $stock as $key1 => $value1 ){ $counter1++; ?>
                                            <option value="<?php echo htmlspecialchars( $value1["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["service_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                           <?php } ?>
                                          </select>
                                        </div>
                                       <div class="col-md-2">
                                        <input type="text"  disabled class="form-control" placeholder="Valor">
                                       </div>
                                        <div class="col-md-1">
                                          <input type="number" id="qtd" name="amount_qtd_os"  class="form-control" value="1">
                                        </div>
                                        <div class="col-md-2" style="padding-right: 0;">
                                          <input type="text" disabled class="form-control" value="Unidade">
                                        </div>
                                      </div>
                                    </div><!-- // -->
                                  </div>
                                     
                                 <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Atualizar</button>
                          </div>
                 </form>

           </div>
         </div>

    </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<div class="body-modal">
  <div class="col-md-8 body-md">
    <header class="headding">
      <span class="pull-right delete">X</span>
      <h3>Dados</h3>
      <p>Preencha os dados abaixo</p>
    </header>
   <form class="form-os" role="form" action="/admin/client/create" method="post">
     <div class="box-body  modal-client">
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="form-group">
                <label for="first_name">Cliente</label>
                <input type="text" name="first_name" class="form-control" placeholder="EX: Fulano dos Santos">
              </div>
            </div>
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="form-group">
                <label for="nr_cpf">CPF</label>
                <input type="text" name="nr_cpf" class="form-control" placeholder="EX: 000.000.000-00">
              </div>
            </div><!-- // -->

            <div class="col-md-6">
              <div class="form-group">
                <label for="nr_phone">Telefone</label>
                <input type="text" name="nr_phone" class="form-control" placeholder="EX: (00) 000-000-000">
              </div>
            </div><!-- // -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="name_city">Cidade</label>
                <input type="text" name="name_city" class="form-control" placeholder="EX: Goiânia">
              </div>
            </div><!-- // -->
            <div class="main-service">
              <div class="col-md-8">
                <label for="neighborhood">Bairro</label>
                <div class="form-group">
                    <input type="text" name="neighborhood" class="form-control" placeholder="EX: Jardim Pinheiros">
                </div>
              </div><!-- // -->
            </div>
               
           <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
    </div>
</form>
  </div>
</div>
</div>
<div class="body">
  <div class="col-md-8 md">
    <header class="headding">
      <span class="pull-right remove">X</span>
      <h3>Dados</h3>
      <p>Preencha os dados abaixo</p>
    </header>
   <form class="form-os" role="form" action="/admin/product/create" method="post">
     <div class="box-body  modal-client">
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="form-group">
                <label for="name_product">Tipo</label>
                <input type="text" name="name_product" class="form-control" placeholder="EX: Smartphone">
              </div>
            </div>
            <div class="col-md-6" style="padding-top: 15px;">
              <div class="form-group">
                <label for="product_brand">Marca</label>
                <input type="text" name="product_brand" class="form-control" placeholder="EX: Samsumg">
              </div>
            </div><!-- // -->

            <div class="col-md-6">
              <div class="form-group">
                <label for="product_model">Modelo</label>
                <input type="text" name="product_model" class="form-control" placeholder="EX: Galaxy s3">
              </div>
            </div><!-- // -->
            <div class="col-md-6">
              <div class="form-group">
                <label for="nr_imei">IMEI</label>
                <input type="text" name="nr_imei" class="form-control" placeholder="EX: 0000555000ooos5">
              </div>
            </div><!-- // -->
            </div>
               
           <!-- /.box-body -->
    <div class="box-footer">
      <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
    </div>
</form>
  </div>
</div>
</div>
</div>
<script>


  var option = document.querySelectorAll("select > option")

   var opt = Array.prototype.slice.call(option)

   opt.forEach(opts => {
      if(opts.value == "1" && !opts.selected && opts.innerHTML == "Em analise Técnica"){
        opts.remove(this)
      }
   });



  // var linka = document.querySelector(".new-a");
  // var body = document.querySelector(".body-modal");
  // var md = document.querySelector(".body-md");
  // var headding = document.querySelector(".delete");

    
  //   linka.addEventListener("click", e =>{

  //       body.style.zIndex = "9999";
  //      body.style.transition = "0.3s ease-in-out";
  //      body.style.opacity = "1";

  //       md.style.transition = "0.5s ease-in-out";
  //       md.style.transform = "translateY(0)";
  //       md.style.opacity = "1";

  //   })


  //   headding.addEventListener("click", e =>{
      
  //       body.style.zIndex = "-9999";
  //      body.style.transition = "0.4s ease-in-out";
  //      body.style.opacity = "0";

  //       md.style.transition = "0.1s ease-in-out";
  //       md.style.transform = "translateY(-100%)";
  //       md.style.opacity = "0";

  // })

  // var click = document.querySelector(".new-c");
  // var box = document.querySelector(".body");
  // var modal = document.querySelector(".md");
  // var del = document.querySelector(".remove");

    
  //   click.addEventListener("click", e =>{
  //       box.style.zIndex = "9999";
  //      box.style.transition = "0.3s ease-in-out";
  //      box.style.opacity = "1";

  //       modal.style.transition = "0.5s ease-in-out";
  //       modal.style.transform = "translateY(0)";
  //       modal.style.opacity = "1";

  //   })


  //   del.addEventListener("click", e =>{
      
  //       box.style.zIndex = "-9999";
  //      box.style.transition = "0.4s ease-in-out";
  //      box.style.opacity = "0";

  //       modal.style.transition = "0.1s ease-in-out";
  //       modal.style.transform = "translateY(-100%)";
  //       modal.style.opacity = "0";

  //  })


   
</script>