<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

            <!-- Content Header (Page header) -->
            <section class="content-header page_header_h1">

                <h1>
                  Dashboard
                  <span>Sistema de gerenciamento de Alunos</span>
                </h1>

                <ol class="breadcrumb">
                  <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  <li class="active">Home</li>
                </ol>
            </section>

        <!-- Main content -->
             <section class="content">
                  <div class="row">
                              <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                  <div class="inner">
                                    <h3>
                                      <?php $counter1=-1;  if( isset($statinguser) && ( is_array($statinguser) || $statinguser instanceof Traversable ) && sizeof($statinguser) ) foreach( $statinguser as $key1 => $value1 ){ $counter1++; ?>
                                      <?php echo htmlspecialchars( $value1["users"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                      <?php } ?>
                                    </h3>
                                    <p>Consultores</p>
                                  </div>
                                  <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                  </div>
                                  <a href="/admin/users" class="small-box-footer">Listar de  Consultores<i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                              </div>

                              <!-- ./col -->

                              <div class="col-lg-3 col-xs-6">
                                      <!-- small box -->
                                  <div class="small-box bg-yellow">
                                    <div class="inner">
                                          <h3>
                                            <?php $counter1=-1;  if( isset($statingstudant) && ( is_array($statingstudant) || $statingstudant instanceof Traversable ) && sizeof($statingstudant) ) foreach( $statingstudant as $key1 => $value1 ){ $counter1++; ?>
                                            <?php echo htmlspecialchars( $value1["studant"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                            <?php } ?>
                                          </h3>
                                          <p>Total de Alunos</p>
                                        </div>
                                        <div class="icon">
                                          <i class="ion ion-person"></i>
                                        </div>
                                        <a href="/admin/users" class="small-box-footer">Listar Usuários <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                  </div>
                              

                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-purple">
                                      <div class="inner">
                                        <h3 style="font-size: 1.2em; padding-bottom: 0px;">Ranking</h3>
                                        <h2 style="font-size: 1.3em;">
                                          <?php $counter1=-1;  if( isset($statingconsultantd) && ( is_array($statingconsultantd) || $statingconsultantd instanceof Traversable ) && sizeof($statingconsultantd) ) foreach( $statingconsultantd as $key1 => $value1 ){ $counter1++; ?>
                                          <?php echo htmlspecialchars( $value1["consultantd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                          <?php } ?>
                                        </h2>
                                        <p style="padding-bottom: 0px;"> usuários Cadastrado</p>
                                      </div>
                                      <div class="icon">
                                        <i class="ion ion-stats-bars"></i>
                                      </div>
                                      <a href="" class="small-box-footer">Larissa <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>

                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                              <div class="small-box bg-teal">
                                    <div class="inner">
                                      <h3 style="font-size: 1.2em; padding-bottom: 0px;">Ranking</h3>
                                      <h2 style="font-size: 1.3em;">
                                        <?php $counter1=-1;  if( isset($statingconsultante) && ( is_array($statingconsultante) || $statingconsultante instanceof Traversable ) && sizeof($statingconsultante) ) foreach( $statingconsultante as $key1 => $value1 ){ $counter1++; ?>
                                        <?php echo htmlspecialchars( $value1["consultantd"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                        <?php } ?>
                                      </h2>
                                      <p style="padding-bottom: 0px;">usuários Cadastrado</p>
                                    </div>
                                    <div class="icon">
                                      <i class="ion ion-stats-bars"></i>
                                    </div>
                                    <a href="" class="small-box-footer">Dorilene <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                                <div class="col-md-12">
                                        <div class="box-header with-border box-navy">
                                              <h3 class="box-title">Total de usuários por etapa</h3>
                                              <!-- /.box-tools -->
                                        </div>
                                    <div>
                              <div class="col-md-4 col-sm-6 col-xs-12">
                                    <a href="/admin/alunos/stage-a">
                                      <div class="info-box bg-aqua">
                                          <span class="info-box-icon"><i class="fa fa-get-pocket"></i></span>
                                          <div class="info-box-content">
                                            <span class="info-box-text">Etapa 1</span>
                                            <span class="info-box-number">
                                              <?php $counter1=-1;  if( isset($stagea) && ( is_array($stagea) || $stagea instanceof Traversable ) && sizeof($stagea) ) foreach( $stagea as $key1 => $value1 ){ $counter1++; ?>
                                              <?php echo htmlspecialchars( $value1["stages"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                              <?php } ?>
                                               Pessoas
                                              </span>
                                          </div>
                                          <!-- /.info-box-content -->
                                      </div>
                                      <!-- /.info-box -->
                                    </a>
                              </div>
                                <!-- ./col -->

                                  <div class="col-md-4 col-sm-6 col-xs-12">

                                    <a href="/admin/alunos/stage-b">
                                        <div class="info-box bg-yellow">
                                              <span class="info-box-icon"><i class="fa fa-get-pocket"></i></span>
                                              <div class="info-box-content">
                                                <span class="info-box-text">Etapa 2</span>
                                                <span class="info-box-number">
                                                  <?php $counter1=-1;  if( isset($stageb) && ( is_array($stageb) || $stageb instanceof Traversable ) && sizeof($stageb) ) foreach( $stageb as $key1 => $value1 ){ $counter1++; ?>
                                                  <?php echo htmlspecialchars( $value1["stages"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                                  <?php } ?>
                                                   Pessoas
                                                  </span>
                                              </div>
                                            <!-- /.info-box-content -->
                                        </div>
                                        <!-- /.info-box -->
                                    </a>
                                </div>
                        <!-- ./col -->

                              <div class="col-md-4 col-sm-6 col-xs-12">

                                  <a href="/admin/alunos/stage-c">

                                        <div class="info-box bg-olive">

                                          <span class="info-box-icon"><i class="fa fa-get-pocket"></i></span>


                                          <div class="info-box-content">

                                            <span class="info-box-text">Etapa 3</span>

                                            <span class="info-box-number">
                                              <?php $counter1=-1;  if( isset($stagec) && ( is_array($stagec) || $stagec instanceof Traversable ) && sizeof($stagec) ) foreach( $stagec as $key1 => $value1 ){ $counter1++; ?>
                                              <?php echo htmlspecialchars( $value1["stages"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                              <?php } ?>
                                               Pessoas
                                              </span>

                                          </div>
                                          <!-- /.info-box-content -->
                                        </div>

                                        <!-- /.info-box -->
                                  </a>
                              </div>

                        <!-- ./col -->
                      </div>

                    <!-- Your Page Content Here -->
                        <div class="col-md-12">
                            
                          </div>
                      <div class="row">
                          <div class="col-md-7">
                            <div class="box box-primary">
                              <div class="box-header with-border">
                                <h3 class="box-title">Usuários Cadastrados No Sistema hoje</h3>
                  
                                <div class="box-tools pull-right">
                                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                                  </button>
                                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                                </div>
                              </div>
                              <!-- /.box-header -->
                              <div class="box-body">
                                <ul class="products-list product-list-in-box">
                                  <?php $counter1=-1;  if( isset($month) && ( is_array($month) || $month instanceof Traversable ) && sizeof($month) ) foreach( $month as $key1 => $value1 ){ $counter1++; ?>
                                  <?php if( fomatDate($value1["dtregister"]) == date('d/m/Y') ){ ?>

                                        <li class="item">
                                          <div class="product-info">
                                            <a href="javascript:void(0)" class="product-title"> <?php echo htmlspecialchars( $value1["desaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>
                                             </a>
                                          </div>
                                        </li>
                                        <!-- /.item -->
                                  <?php } ?>
                                  <?php } ?>
                                </ul>
                              </div>
                              <!-- /.box-body -->

                            </div><!-- // end list de hoje -->
                          </div>
                          
                <div class="col-md-5 col-xs-6 ">

               <div class="box box-danger box-solid">
                       <div class="box-header with-border">
                         <h1>Leads Google</h1>
                      </div>
                <div class="box-body">
                    <?php $counter1=-1;  if( isset($leads) && ( is_array($leads) || $leads instanceof Traversable ) && sizeof($leads) ) foreach( $leads as $key1 => $value1 ){ $counter1++; ?>
                  <div style="display:inline;width:120px;height:120px;">
                       
                      <canvas width="150" height="150"></canvas>
                                            <button type="button" class="knob"  data-skin="tron" data-thickness="0.2" data-width="150" data-height="150" data-fgcolor="#3c8dbc" data-readonly="true" readonly="readonly" style="width: 49px; height: 30px; position: absolute; vertical-align: middle; margin-top: 30px; margin-left: -69px; border: 0px; background: none; font: bold 18px Arial; text-align: center; color: rgb(60, 141, 188); padding: 0px; appearance: none;"><?php echo htmlspecialchars( $value1["nrleads"], ENT_COMPAT, 'UTF-8', FALSE ); ?></button>

                    
                      </div>
                         <?php } ?>
                      </div>
                      </div>
                    </div> 
                      </div>
                   <!-- /.content -->
                  </div>
           </section>
 </div>
  <!-- /.content-wrapper -->
<script>
  var kn = document.querySelector('.knob-label')
  var inp = document.querySelector('.knob')

  var value = kn.innerHTML
  inp.value = value

</script>
   
   