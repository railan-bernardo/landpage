<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
      <h1> Estoque . <span>Novo</span></h1>
      <ol class="breadcrumb">
        <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="/admin/os">OS</a></li>
        <li class="active"><a href="">Novo</a></li>
      </ol>
    </section>
  
    <!-- Main content -->
      <section class="content">
  
         <div class="row">
           <div class="col-md-12">
             <div class="box-panel">
                      <!-- /.box-header -->
                 <form class="form-os" role="form" action="/admin/service/create" method="post" enctype="multipart/form-data">
                             <div class="box-body">
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="service_name">* Nome</label>
                                        <input type="text" class="form-control" name="service_name" placeholder="Descreva o serviço prestado">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="service_price">$ Venda</label>
                                        <input type="numeric" class="form-control" name="service_price" placeholder="$0.00">
                                      </div>
                                    </div><!-- // -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                          <label for="supplier_price">$ Fornecedor</label>
                                          <input type="numeric" class="form-control" name="supplier_price" placeholder="$0.00">
                                        </div>
                                      </div><!-- // -->
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="cost_price">$ Custo</label>
                                        <input type="numeric" class="form-control" name="cost_price" placeholder="$0.00">
                                      </div>
                                    </div><!-- // -->

                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="product_compatibility">Compatibilidade</label>
                                        <input type="text" name="product_compatibility" class="form-control" placeholder="Compatiblidade">
                                      </div>
                                    </div><!-- // -->
                                
                                      <div class="col-md-6">
                                        <label for="amount_qtd">Quantidade</label>
                                        <div class="form-group">
                                            <input type="number" name="amount_qtd" class="form-control" placeholder="0">
                                          </div>

                                      </div><!-- // -->
                                      <div class="main_photo">
                                          <div class="box_group_file">
                                            <button type="button" class="btn btn_stage_up">Image 1</button>
                                            <input type="file" class="file_a" name="file_a" style="display: none;">
                                            <input type="text" class="upload_file up_a" name="image_a">
                                            
                                          </div>
                                          <div class="box_group_file">
                                            <button type="button" class="btn btn_stage_up">Image 2</button>
                                            <input type="file" class="file_a" name="file_b" style="display: none;">
                                            <input type="text" class="upload_file up_b" name="image_b">
                                          </div>
                                      </div>
                                       
                                   <!-- /.box-body -->
                            <div class="box-footer">
                              <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
                            </div>
                   </form>
  
             </div>
           </div>
  
      </section>
   <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <script>
  
  var uploader = document.querySelectorAll(".btn_stage_up")
  var up_a = document.querySelector(".up_a")
  var up_b = document.querySelector(".up_b")

  var up = Array.prototype.slice.call(uploader)

  up.forEach(upload => {
    
    upload.addEventListener("click", e =>{
  
        upload.nextElementSibling.click()
       
    })
   
    upload.nextElementSibling.addEventListener("change", e =>{

       var value_file = upload.nextElementSibling.value
       var inner_value = upload.nextElementSibling.nextElementSibling
        var replace_value = value_file.slice(12)

       inner_value.value = replace_value

     

    })

  });
  
     
  </script>