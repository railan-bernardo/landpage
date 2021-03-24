<?php if(!class_exists('Rain\Tpl')){exit;}?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" >
    <!-- Content Header (Page header) -->

              <!-- Main content -->
<section class="content">

     <div class="row">
                 <div class="col-md-12">
                    <div class="box box-table">
                        <div class="col-md-12" style="display: flex; justify-content: space-between;">
                           <div class="col-md-2">
                            <div class="img-card" style="width: 160px; display: flex; flex-wrap: wrap; align-items: center;">
                                <img src="/res/admin/dist/img/logomarca-1.png">
                            </div>
                           </div>
                           <div class="col-md-7" style="text-align: center;">
                               <h3 style="font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 14px; font-weight: 600;">Contato CAcursos</h3>
                                <span style="font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 12px; font-weight: 600;">Email:<small style=" padding: 0 5px; font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 1em; font-weight: 400;">cacursos1@gmail.com</small> |</span>
                                <span style="font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 10px; font-weight: 600;"> &nbsp; Telefone:<small style=" padding: 0 5px; font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 1em; font-weight: 400;">(62) 982001842</small></span>
                           </div>
                           <div class="col-md-3" style="display: flex; justify-content: flex-end; padding-right: 0;">
                            <h2 style="display: block; width: 100%; text-align: right; font-family: 'Poppins', sans-serif; color: #6c7293; font-size: 1.1em; font-weight: 600;">N°: <?php if( $os["id_os_service"] < 100 ){ ?>00<?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php }else{ ?><?php echo htmlspecialchars( $os["id_os_service"], ENT_COMPAT, 'UTF-8', FALSE ); ?><?php } ?></h2>
                           </div>
                        </div>
                    </div>
                              <div class="box-header box-header-list" style="margin-top: 20px !important; padding: 0 !important; border-bottom: none;">
                                  
                              </div>
                              <div class="box-header box-header-list" style="margin-top: 20px !important; padding: 0 !important; border-bottom: none;">
                                <h2 style="color: #6c7293; padding: 20px 0 0 0; font-size: 14px;">Atendimento:</h2>
                                <ul class="list_general trip">
                                  <span style="font-size: 13px;">Atendente:<small><?php echo htmlspecialchars( $os["clerk"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                   <span style="font-size: 13px;">Técnico:<small><?php echo htmlspecialchars( $os["responsible_technician"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                </ul>
                            </div>
                             <div class="box-body no-padding">
                                <!-- <a href="#" class="btn send-print pull-right"><i class="fa  fa-print"></i>Imprimir</a> -->
                                <!-- header client -->
                          
                                <div class="col-md-12" style="padding-left: 0; padding-right: 0;">
                                    <div class="trip_border">
                                        <span>Cliente</span>
                                        <span><?php echo htmlspecialchars( $os["first_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,</span>
                                        <span>CPF:<small><?php echo htmlspecialchars( $os["nr_cpf"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                      
                                        <span>Contato: <small><?php echo htmlspecialchars( $os["nr_phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                        <span>Cidade:<small><?php echo htmlspecialchars( $os["name_city"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                      </div>
                                </div>

                               <!-- geral -->
                               <div class="col-md-12" style="margin-top: 15px; padding-left: 0; padding-right: 0;">
                                 
                                  <div class="trip_border" style=" padding: 15px">
                                   <ul class="list_general">
                                     <h4>Informações Gerais</h4>
                                      <span>Relato do Cliente:<small><?php echo htmlspecialchars( $os["customer_report"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                      <span>Poblema constatado:<small><?php echo htmlspecialchars( $os["found_defect"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                      <span>Acessório deixado:<small><?php echo htmlspecialchars( $os["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                   </ul>
                                </div>
                              </div>
                              <div class="col-md-12" style="margin-top: 15px; padding-left: 0; padding-right: 0;">
                                <div class="trip_border">
                                    <span>Equipamento</span>
                                    <span><?php echo htmlspecialchars( $os["name_product"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,</span>
                                    <span>Modelo:<small><?php echo htmlspecialchars( $os["product_model"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                    <span>N.Série: <small><?php echo htmlspecialchars( $os["nr_imei"], ENT_COMPAT, 'UTF-8', FALSE ); ?>,</small></span>
                                    <span>Marca: <small><?php echo htmlspecialchars( $os["product_brand"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></span>
                                  </div>
                            </div>
                                <div class="col-md-6">
                                   <ul class="list_general">
                                    <h4>Datas Importantes</h4>
                                     <li>Data de entrada:<small><?php echo htmlspecialchars( $os["dtregister"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                     <li>Término:<small><?php echo htmlspecialchars( $os["end_date"], ENT_COMPAT, 'UTF-8', FALSE ); ?></small></li>
                                  </ul>
                                </div>
                                <div class="col-md-12">
                                  <ul class="list_general">

                                    <div class="box-body no-padding">
                                      <table class="table table-striped">
                                        <thead>
                                            <tr>
                                              <th>Serviço</th>
                                              <th>Qtd</th>
                                              <th>Valor Unitário</th>
                                              <th>Sub Total</th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                              <tr>
                                                 <td>
                                                     <div class="kt-card-user">
                                                         <div class="kt-card-user-details">
                                                            <?php echo htmlspecialchars( $os["service_name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

                                                     </div>
                                                  </div>
                                                  </td>
                                                  <td><?php echo htmlspecialchars( $os["amount_qtd_os"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                  <td><?php echo htmlspecialchars( $os["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                                  <td><?php echo htmlspecialchars( $os["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                                              </tr>

                                          </tbody>
                                        </table>

                                        <div class="col-md-12 pull-right">
                                            <div class="list_general" style=" margin: 15px 0 0 0; display: flex; justify-content: flex-end; width: 100%;">
                                                <h4 style="padding-right: 10px; font-size: 1.3em;">Valor Total</h4>
                                                <div class="box_pay" style="position: static; width: auto; padding-top: 6px;">
                                                    <p> R$ <?php echo htmlspecialchars( $os["service_price"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
                                                </div>
                                              
                                            </div>
                                            
                                        </div>
                                    </div>
                                        <div class="col-md-12" style="margin-top: 10px;">
                                            <p style="display: block; text-justify:newspaper;">
                                                OBS.:
                        - Relatório técnico em até 72 hrs
                        - Ao assinar este documento o Cliente concorda com os termos de prestação de serviço da Empresa CA cursos.
                        - Na empresa o produto somente será entregue com a apresentação deste documento ou do titular desta O.S.
                        - Produtos com mais de 90 dias na empresa sera cobrado multa de 10% do valor da O.S mais 1,00 real de mora diária.
                        - As partes elegem o fóro da Comarca de Goiânia-GO. "onde os serviçoes de assistência técnica serão prestados"
                        - O aparelho poderá ocorrer risco de uma perca total devido a tentativa de reparo discriminado.
                        - Não nos responsabilizamos por dados perdidos é recomendavel ao cliente salvar todos arquivos antes dar entrada na assistência.
                        - É cobrado uma taxa de vistória no valor de <span style="font-size: 1.3em;"><strong>80,00</strong></span> reais caso o orçamento não seja aprovao.
                        - Garantia de 90 dias nos serviços prestados não valendo em caso de mau uso (contato ou queda) e somente com a apresentação deste documento.
                                            </p>

                                            <div style="padding-top: 40px; width: 100%; display: flex; justify-content: center; align-items: center;">
                                                    <span style="font-family: 'Poppins', sans-sereif; font-weight: 600; color: #6c7293; padding-right: 7px;">Retirado Por:</span>
                                               
                                                <span style="width: 20%; border-bottom: 1px solid #6c7293; "></span>
                                                <p style="padding-left: 6px;">Em &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/</p>
                                            </div>

                                        </div>
                                        <!-- end paginator -->
                                   </div>
                                  </ul>
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

window.onload = function() {

        var footer = document.querySelector("footer");


            // print.addEventListener("click", e =>{

             footer.style.display = "none"
             if(footer.style.display == "none"){
              window.print();
             }
		        
                
		    	var time = window.setTimeout(function() {
                    footer.style.display = "block";
				//	window.location.href = '/admin/contratos'

		    	}, 1000);
            // })


	}

</script>