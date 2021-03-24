<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header page_header_h1">
    <h1> Atualizar . <span>Etapa 2</span></h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/admin/alunos">Usuários</a></li>
      <li class="active"><a href="/admin/aluno/create">Cadastrar</a></li>
    </ol>
  </section>

  <!-- Main content -->
    <section class="content">

       <div class="row">
         <div class="col-md-12">
           <div class="box box-table" style="box-shadow: 0 1px 1px #ffffff;">
                    <!-- /.box-header -->
               <form class="form-os" role="form" action="/admin/aluno/<?php echo htmlspecialchars( $aluno["idaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" method="post">
                           <div class="box-body">
                                  <div calss="etapa-1" style="display: none;">
                                      <div class="form-group">
                                        <label for="desaluno">Nome</label>
                                        <input type="text" class="form-control" id="desaluno" name="desaluno" value="<?php echo htmlspecialchars( $aluno["desaluno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="desemail">Email</label>
                                        <input type="email" class="form-control" id="desemail" name="desemail" value="<?php echo htmlspecialchars( $aluno["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                      <div class="form-group">
                                        <label for="nrphone">Telefone</label>
                                        <input type="tel" class="form-control" id="nrphone" value="<?php echo htmlspecialchars( $aluno["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="nrphone" data-inputmask="'mask': '(99) 99999-9999'" data-mask="">
                                      </div>
                                      <div class="form-group">
                                        <label for="desstate">Estado</label>
                                      <select name="desstate" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                                      <option selected  value="<?php echo htmlspecialchars( $aluno["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Goiania</option>
                                      </select>
                                      </div>


                                      <div class="form-group">
                                        <label for="descity">Cidade</label>
                                      <select name="descity" class="form-control select2 select2-hidden-accessible" style="width: 100%;">
                                        <option selected  value="<?php echo htmlspecialchars( $aluno["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">Goianira</option>
                                      </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="descurso">Curso de Interese</label>
                                        <input type="curso" class="form-control" id="descurso" name="descurso" value="<?php echo htmlspecialchars( $aluno["descurso"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                      <div class="form-group">
                                         <label>Consutor</label> 
                                          <input type="hidden" name="idperson" class="form-control" value="<?php echo getUserId(); ?>">
                                      </div>
                                      <div class="form-group">
                                        <label>Horário de Interese</label>
                                        <select name="desturno" class="form-control">
                                          <option selected value="<?php echo htmlspecialchars( $aluno["desturno"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $aluno["desturno"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>";
                                        </select>
                                    
                                      </div>
                                      <div class="form-group">
                                        <label>Unidade de Interese</label>
                                        <select name="desunity" class="form-control">
                                          <option selected  value="<?php echo htmlspecialchars( $aluno["desunity"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $aluno["desunity"], ENT_COMPAT, 'UTF-8', FALSE ); ?></option>
                                        </select>
                                        
                                      </div>

                                       <div class="form-group">
                                          <input type="hidden" name="desstage"  value="2">
                                           <input type="hidden" name="countlead"  value="<?php echo htmlspecialchars( $aluno["countlead"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                      </div>
                                  </div>
                                  <!-- end create -->
                                  <div>
                                      <div class="etapa-2">
                                          <div class="form-group">
                                            <h3>Envio de conteúdo</h3>

                                            <label> 
                                            <input type="checkbox" name="descontent" <?php if( $aluno["descontent"] == 'Blog' ){ ?>checked<?php } ?> value="Blog"/> &nbsp;
                                            Blog
                                            </label><br>

                                            <label>
                                            <input type="checkbox" name="descontent" <?php if( $aluno["descontent"] == 'Canal' ){ ?>checked<?php } ?> value="Canal"/> &nbsp;
                                            Canal 
                                            </label><br>

                                            <label>
                                            <input type="checkbox" name="descontent" <?php if( $aluno["descontent"] == 'Site' ){ ?>checked<?php } ?> value="Site"/>  &nbsp;
                                            Site 
                                            </label> 

                                            <h3>Tirou todas as Dúvidas</h3>

                                            <label> 
                                            <input type="checkbox" name="desboubt" <?php if( $aluno["desboubt"] == 'Sim' ){ ?>checked<?php } ?> value="Sim"/> &nbsp;
                                            Sim
                                            </label><br>

                                            <label>
                                            <input type="checkbox" name="desboubt" <?php if( $aluno["desboubt"] == 'Não' ){ ?>checked<?php } ?> value="Não"> &nbsp;
                                            Não 
                                            </label><br>
                                          </div>
                                       </div> <!-- end etapa 2  -->

                                          <div class="etapa-6" style="display: none;">
                                                <h3>Fechamento</h3>
                                                <div class="form-group col-xs-5">
                                                <label>Garantia de vaga Valor:</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-dollar"></i></span>
                                                    <input type="number" name="desprice" class="form-control" step="0.01" value="<?php echo htmlspecialchars( $aluno["desprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                  </div>
                                                </div>

                                                <div class="form-group col-xs-7">
                                                <label>Data da Garantia</label>
                                                <div class="input-group">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="date" name="gdate" class="form-control" value="<?php echo htmlspecialchars( $aluno["gdate"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                  <h3>Conta da Garantia</h3>
                                                  <label>
                                                  <input type="radio" name="desacount" <?php if( $aluno["desacount"] == 'Itaú: Agência 0147 conta 06260-8 Cristiano Alves' ){ ?>checked<?php } ?> value="Itaú: Agência 0147 conta 06260-8 Cristiano Alves"/>&nbsp;
                                                  Itaú: Agência 0147 conta 06260-8 Cristiano Alves
                                                  </label><br>

                                                  <label>
                                                  <input type="radio" name="desacount" <?php if( $aluno["desacount"] == 'Caixa: Agência 1340 conta 060020-6 Operação 013 Cristiano Alves' ){ ?>checked<?php } ?> value="Caixa: Agência 1340 conta 060020-6 Operação 013 Cristiano Alves"/>&nbsp;
                                                  Caixa: Agência 1340 conta 060020-6 Operação 013 Cristiano Alves
                                                  </label><br>

                                                  <label>
                                                  <input type="radio" name="desacount" <?php if( $aluno["desacount"] == 'Next / Bradesco: Agência 3925 conta 191654-8 Cristiano Alves' ){ ?>checked<?php } ?>  value="Next / Bradesco: Agência 3925 conta 191654-8 Cristiano Alves"/>&nbsp;
                                                  Next / Bradesco: Agência 3925 conta 191654-8 Cristiano Alves
                                                  </label><br>

                                                  <label>
                                                  <input type="radio" name="desacount" <?php if( $aluno["desacount"] == 'Pag Bank: Banco 290 Agência 0001 conta 06411913-4 Cristiano Alves' ){ ?>checked<?php } ?>  value="Pag Bank: Banco 290 Agência 0001 conta 06411913-4 Cristiano Alves"/>&nbsp;
                                                  Pag Bank: Banco 290 Agência 0001 conta 06411913-4 Cristiano Alves
                                                  </label><br>

                                                  <label>
                                                  <input type="radio" name="desacount" <?php if( $aluno["desacount"] == 'Mercado Pago: Link de Pagamento' ){ ?>checked<?php } ?>  value="Mercado Pago: Link de Pagamento"/>&nbsp;
                                                  Mercado Pago: Link de Pagamento
                                                  </label><br>
                                                </div>
                                            </div> 
                                          </div>
                                          <!-- end etapa 6 -->

                          </div>
                                 <!-- /.box-body -->
                          <div class="box-footer" style="border-top: none;  border-bottom: none;">
                            <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Atualizar</button>
                          </div>
                 </form>
           </div>
         </div>

    </section>
 <!-- /.content -->
</div>
<!-- /.content-wrapper -->
