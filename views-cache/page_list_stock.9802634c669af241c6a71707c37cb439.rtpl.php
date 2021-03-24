<?php if(!class_exists('Rain\Tpl')){exit;}?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header page_header_h1">
     <h1>Estoque . <span>Listagem</span> </h1>
        <ol class="breadcrumb">
          <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="">Estoque</a></li>
        </ol>
    </section>

              <!-- Main content -->
<section class="content">

     <div class="row">
                 <div class="col-md-12">
                    <div class="box box-table">
                      
                              <div class="box-header box-header-list">
                                <h3>Itens</h3>
                                <a href="/admin/service/create" class="btn send-new pull-right"><i class="fa  fa-plus-circle"></i>Novo</a>
                              </div>
                             <div class="box-body no-padding">
                                <table class="table table-striped">
                                  <thead>
                                      <tr>
                                        <th>N.</th>
                                        <th>Nome</th>
                                        <th>Compatibilidade</th>
                                        <th>Qtd</th>
                                        <th>$ Preço</th>
                                        <th>$ Fornecedor</th>
                                        <th>$ Custo</th>
                                        <th>Images</th>
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
                                                           <a href="/admin/service/update/<?php echo htmlspecialchars( $value1["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" style="font-size: 1em !important;"><i class="fa fa-pencil"></i> Editar</a>
                                                           <a href="/admin/service/<?php echo htmlspecialchars( $value1["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/delete"><i class="fa fa-trash-o red"></i> Excluir</a>
                                                       </div>
                                                   <a href="">
                                                    <?php if( $value1["id_stock"] < 100 ){ ?>

                                                      00<?php echo htmlspecialchars( $value1["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                      <?php }else{ ?>

                                                      <?php echo htmlspecialchars( $value1["id_stock"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                      <?php } ?>

                                                   </a>

                                               </div>
                                            </div>
                                            </td>
                                            <td><?php echo htmlspecialchars( $value1["service_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["product_compatibility"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td> <?php echo htmlspecialchars( $value1["amount_qtd"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td> <?php echo htmlspecialchars( $value1["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["supplier_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td><?php echo htmlspecialchars( $value1["cost_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                            <td>
                                                <button class="btn btn_stage_p fa fa-photo img-m" style="font-size: 1em !important;"></button>
                                                <div class="slider-m">
                                                    <ul style="padding-left: 0;">
                                                       <li> <img src="/uploader/<?php echo htmlspecialchars( $value1["image_a"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></li>
                                                       <li> <img src="/uploader/<?php echo htmlspecialchars( $value1["image_b"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"></li>
                                                    </ul>
                                                </div>
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

var tr = document.querySelectorAll("td")
var dash = document.querySelectorAll('.count')
var drop = document.querySelectorAll('.box-dropdow')
var images = document.querySelectorAll(".img-m")
var ele = document.querySelectorAll(".slider-m")

var dash_count = Array.prototype.slice.call(dash)
var drop_dow = Array.prototype.slice.call(drop)
var img = Array.prototype.slice.call(images)
element = Array.prototype.slice.call(ele)

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

img.forEach(image => {

image.addEventListener("click", e =>{

    console.log(image.nextElementSibling)
   

        if(image.nextElementSibling.style.zIndex == "998"){
            image.nextElementSibling.style.left = "550px"
            image.nextElementSibling.style.zIndex = "-998"
            image.nextElementSibling.style.opacity = "0"
        }else{
           image.nextElementSibling.style.zIndex = "998"
           image.nextElementSibling.style.opacity = "1"
           image.nextElementSibling.style.left = "-550px"
            }


})

})

var tds = Array.prototype.slice.call(tr)

//console.log(tds.indexOf("Em analise Técnica"))

tds.forEach(td =>{
if(td.innerText == "Em analise Técnica"){
td.parentElement.style.display = "none"
}

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