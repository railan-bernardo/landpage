<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
      <h1>Contrato . <span>Atualizar</span></h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/os">contrato</a></li>
        <li class="active"><a href="">Atualizar</a></li>
      </ol>
    </section>
  
    <!-- Main content -->
      <section class="content">
  
         <div class="row">
           <div class="col-md-12">
             <div class="box-panel">
                      <!-- /.box-header -->
                 <form class="form-os" role="form" action="/admin/contrato/update/<?php echo htmlspecialchars( $contract["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                             <div class="box-body">
                                    <div class="col-md-6"  style="padding-left: 0;">
                                      <div class="form-group">
                                        <label for="id_os_client">Cliente</label>
                                        <!-- <span class="pull-right new-link new-a">+ Novo Cliente</span> -->
                                        <input type="text" name="desname" class="form-control" value="<?php echo htmlspecialchars( $contract["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-6"  style="padding-right: 0;">
                                      <div class="form-group">
                                        <label for="id_stock">Responsavel</label>
                                        <!-- <span class="pull-right new-link new-c">+ Cadastrar Novo</span> -->
                                        <input type="text" name="desparent" class="form-control"  value="<?php echo htmlspecialchars( $contract["desparent"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                    </div><!-- // -->
                                    <div class="col-md-6" style="padding-left: 0;">
                                      <div class="form-group">
                                        <label for="stage_os">E-mail</label>
                                        <input type="email" name="desemail" class="form-control"  value="<?php echo htmlspecialchars( $contract["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                    </div><!-- // -->
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="clerk">CPF</label>
                                        <input type="text" name="nrcpf" class="form-control" value="<?php echo htmlspecialchars( $contract["nrcpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                    </div><!-- // -->
                                    <div class="col-md-3" style="padding-right: 0;">
                                      <div class="form-group">
                                        <label for="customer_report">RG</label>
                                        <input type="text" name="nrrg" class="form-control"  value="<?php echo htmlspecialchars( $contract["nrrg"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                    </div><!-- // -->
                                       
                                        <div class="form-group">
                                          
                                          <div class="col-md-6" style="padding-left: 0;">
                                            <label for="desbirthday">Data de Nacimento</label>
                                            <input type="text" name="desbirthday" class="form-control" value="<?php echo htmlspecialchars( $contract["desbirthday"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>
                                         <div class="col-md-6"  style="padding-right: 0;">
                                            <label for="desbirthday">Assinatura do contratante, responsável legal e financeiro</label>
                                          <input type="text" name="descontractor" class="form-control" value="<?php echo htmlspecialchars( $contract["descontractor"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                         </div>
                                          <div class="col-md-4" style="padding-left: 0; margin-top: 10px;">
                                              <label>Data do Contrato</label>
                                            <input type="text" name="descontractdate"  class="form-control" value="<?php echo htmlspecialchars( $contract["descontractdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                          </div>
                                          <div class="col-md-4" style=" margin-top: 10px;">
                                            <label>Telefone</label>
                                            <input type="text" name="nrphone" class="form-control" value="<?php echo htmlspecialchars( $contract["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  data-inputmask="'mask': '(99) 9999-9999'" data-mask="">
                                          </div>
                                          <div class="col-md-4" style="padding-right: 0; margin-top: 10px;">
                                            <label>Celular</label>
                                            <input type="text" name="nrcellphone" class="form-control" value="<?php echo htmlspecialchars( $contract["nrcellphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"  data-inputmask="'mask': '(99) 99999-9999'" data-mask="">
                                          </div><!-- // -->

                                          <div class="col-md-3" style="padding-left: 0; margin-top: 10px;">
                                            <label>Cidade</label>
                                            <input type="text" name="descity" class="form-control" value="<?php echo htmlspecialchars( $contract["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>

                                          <div class="col-md-3" style="margin-top: 10px;">
                                            <label>Estado</label>
                                            <input type="text" name="desstate" class="form-control" value="<?php echo htmlspecialchars( $contract["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>
                                          <div class="col-md-6" style="padding-right: 0; margin-top: 10px;">
                                            <label>Bairro</label>
                                            <input type="text" name="neighborhood" class="form-control" value="<?php echo htmlspecialchars( $contract["neighborhood"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>

                                          <div class="col-md-4" style="padding-left: 0; margin-top: 15px;">
                                            <label>Endereço</label>
                                            <input type="text" name="desadress" class="form-control" value="<?php echo htmlspecialchars( $contract["desadress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>

                                          <div class="col-md-4" style="margin-top: 15px;">
                                            <label>CEP</label>
                                            <input type="text" name="deszipcode" class="form-control" value="<?php echo htmlspecialchars( $contract["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                          </div>

                                          <div class="col-md-4" style="padding-right: 0; margin-top: 15px;">
                                            <label>Inicio da Turma</label>
                                            <input type="text" name="desstart" class="form-control" value="<?php echo htmlspecialchars( $contract["desstart"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                          </div>

                                          <div class="col-md-6 col-xs-12" style="padding-left: 0; margin-top: 15px;">

                                            <label for="exampleInputCo">Consultora</label>

                                              <input type="text" class="form-control" name="desconsultant" id="exampleInputCo" value="<?php echo htmlspecialchars( $contract["desconsultant"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                            </div>
                                            <div class="col-md-6 col-xs-12" style="padding-right: 0; margin-top: 15px;">

                                                <label for="exampleInputCo">Garantia do curso</label>

                                                  <input type="number" class="form-control" name="desgarant" id="exampleInputCo"value="<?php echo htmlspecialchars( $contract["desgarant"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                                </div>

                                                <!-- curso contratado -->
                                                <div class="col-md-12 page_header_h1">
                                                    <h1 class="title">Curso Contratado:</h1>
                                                </div>

                                                <div class="col-md-12">
                                                    <input type="checkbox" checked name="descourse" value="<?php echo htmlspecialchars( $contract["descourse"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                    <?php echo htmlspecialchars( $contract["descourse"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                </div>

                                               <!-- periodo contratado -->
                                                <div class="col-md-12 page_header_h1">
                                                    <h1 class="title">Periodo Contratado:</h1>
                                                </div>

                                                <div class="col-md-12">
                                                    <label>
                                                        <input type="checkbox" checked name="desperiod" value="<?php echo htmlspecialchars( $contract["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                        <?php echo htmlspecialchars( $contract["desperiod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                    </label>
                                                </div>
                                        </div>
                                      </div><!-- // -->
                                    
                                       
                                   <!-- /.box-body -->
                            <div class="box-footer">
                              <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Atualiar</button>
                            </div>
                   </form>
  
             </div>
           </div>
          </div>
      </section>
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  </div>
  </div>
  </div>
  
  <script>
    var linka = document.querySelector(".new-a");
    var body = document.querySelector(".body-modal");
    var md = document.querySelector(".body-md");
    var headding = document.querySelector(".delete");
  
      
      linka.addEventListener("click", e =>{
  
          body.style.zIndex = "9999";
         body.style.transition = "0.3s ease-in-out";
         body.style.opacity = "1";
  
          md.style.transition = "0.5s ease-in-out";
          md.style.transform = "translateY(0)";
          md.style.opacity = "1";
  
      })
  
  
      headding.addEventListener("click", e =>{
        
          body.style.zIndex = "-9999";
         body.style.transition = "0.4s ease-in-out";
         body.style.opacity = "0";
  
          md.style.transition = "0.1s ease-in-out";
          md.style.transform = "translateY(-100%)";
          md.style.opacity = "0";
  
    })
  
    var click = document.querySelector(".new-c");
    var box = document.querySelector(".body");
    var modal = document.querySelector(".md");
    var del = document.querySelector(".remove");
  
      
      click.addEventListener("click", e =>{
          box.style.zIndex = "9999";
         box.style.transition = "0.3s ease-in-out";
         box.style.opacity = "1";
  
          modal.style.transition = "0.5s ease-in-out";
          modal.style.transform = "translateY(0)";
          modal.style.opacity = "1";
  
      })
  
  
      del.addEventListener("click", e =>{
        
          box.style.zIndex = "-9999";
         box.style.transition = "0.4s ease-in-out";
         box.style.opacity = "0";
  
          modal.style.transition = "0.1s ease-in-out";
          modal.style.transform = "translateY(-100%)";
          modal.style.opacity = "0";
  
     })
  
  var option = document.querySelectorAll("select > option")
     
     var opt = Array.prototype.slice.call(option)
  
     opt.forEach(opts => {
        if(opts.value == "1" && !opts.selected && opts.innerHTML == "Em analise Técnica"){
           console.log(opts.remove(this))
        }
     });
  </script>