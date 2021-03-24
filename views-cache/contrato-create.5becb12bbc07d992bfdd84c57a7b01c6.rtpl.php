<?php if(!class_exists('Rain\Tpl')){exit;}?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header page_header_h1">
    <h1>Contrato . <span>Novo</span></h1>
    <ol class="breadcrumb">
      <li><a href="/admin"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="/admin/os">contrato</a></li>
      <li class="active"><a href="">Novo</a></li>
    </ol>
  </section>

  <!-- Main content -->
    <section class="content">

       <div class="row">
         <div class="col-md-12">
           <div class="box-panel">
            <div class="box-header " style="padding-bottom: 20px;">
              <a href="/admin/contratos" class="btn send-new pull-right"><i class="fa fa-mail-forward"></i>Vizualizar Todos</a>
            </div>
                    <!-- /.box-header -->
               <form class="form-os" role="form" action="/admin/contrato/create" method="post">
                           <div class="box-body">
                                  <div class="col-md-6"  style="padding-left: 0;">
                                    <div class="form-group">
                                      <label for="id_os_client">Cliente</label>
                                      <!-- <span class="pull-right new-link new-a">+ Novo Cliente</span> -->
                                      <input type="text" name="desname" class="form-control" placeholder="Nome do cliente">
                                    </div>
                                  </div>
                                  <div class="col-md-6"  style="padding-right: 0;">
                                    <div class="form-group">
                                      <label for="id_stock">Responsavel</label>
                                      <!-- <span class="pull-right new-link new-c">+ Cadastrar Novo</span> -->
                                      <input type="text" name="desparent" class="form-control"  placeholder="Responsavel pelo cliente">
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-6" style="padding-left: 0;">
                                    <div class="form-group">
                                      <label for="stage_os">E-mail</label>
                                      <input type="email" name="desemail" class="form-control"  placeholder="Email">
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-3">
                                    <div class="form-group">
                                      <label for="clerk">CPF</label>
                                      <input type="text" name="nrcpf" class="form-control" placeholder="CPF">
                                    </div>
                                  </div><!-- // -->
                                  <div class="col-md-3" style="padding-right: 0;">
                                    <div class="form-group">
                                      <label for="customer_report">RG</label>
                                      <input type="text" name="nrrg" class="form-control"  placeholder="RG">
                                    </div>
                                  </div><!-- // -->
                                     
                                      <div class="form-group">
                                        
                                        <div class="col-md-6" style="padding-left: 0;">
                                          <label for="desbirthday">Data de Nacimento</label>
                                          <input type="text" name="desbirthday" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                        </div>
                                       <div class="col-md-6"  style="padding-right: 0;">
                                          <label for="desbirthday">Assinatura do contratante, responsável legal e financeiro</label>
                                        <input type="text" name="descontractor" class="form-control" placeholder="Assinatura">
                                       </div>
                                        <div class="col-md-4" style="padding-left: 0; margin-top: 10px;">
                                            <label>Data do Contrato</label>
                                          <input type="text" name="descontractdate"  class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                        </div>
                                        <div class="col-md-4" style=" margin-top: 10px;">
                                          <label>Telefone</label>
                                          <input type="text" name="nrphone" class="form-control"   data-inputmask="'mask': '(99) 9999-9999'" data-mask="">
                                        </div>
                                        <div class="col-md-4" style="padding-right: 0; margin-top: 10px;">
                                          <label>Celular</label>
                                          <input type="text" name="nrcellphone" class="form-control" data-inputmask="'mask': '(99) 99999-9999'" data-mask="">
                                        </div><!-- // -->

                                        <div class="col-md-3" style="padding-left: 0; margin-top: 10px;">
                                          <label>Cidade</label>
                                          <input type="text" name="descity" class="form-control" placeholder="Cidade">
                                        </div>

                                        <div class="col-md-3" style="margin-top: 10px;">
                                          <label>Estado</label>
                                          <input type="text" name="desstate" class="form-control" placeholder="Estado">
                                        </div>
                                        <div class="col-md-6" style="padding-right: 0; margin-top: 10px;">
                                          <label>Bairro</label>
                                          <input type="text" name="neighborhood" class="form-control" placeholder="Bairro">
                                        </div>

                                        <div class="col-md-4" style="padding-left: 0; margin-top: 15px;">
                                          <label>Endereço</label>
                                          <input type="text" name="desadress" class="form-control" placeholder="Endereço">
                                        </div>

                                        <div class="col-md-4" style="margin-top: 15px;">
                                          <label>CEP</label>
                                          <input type="text" name="deszipcode" class="form-control" placeholder="CEP">
                                        </div>

                                        <div class="col-md-4" style="padding-right: 0; margin-top: 15px;">
                                          <label>Inicio da Turma</label>
                                          <input type="text" name="desstart" class="form-control"  data-inputmask="'alias': 'dd/mm/yyyy'" data-mask="">
                                        </div>

                                        <div class="col-md-6 col-xs-12" style="padding-left: 0; margin-top: 15px;">

                                          <label for="exampleInputCo">Consultora</label>

                                            <input type="text" class="form-control" name="desconsultant" id="exampleInputCo" placeholder="Consultora">

                                          </div>
                                          <div class="col-md-6 col-xs-12" style="padding-right: 0; margin-top: 15px;">

                                              <label for="exampleInputCo">Garantia do curso</label>

                                                <input type="number" class="form-control" name="desgarant" id="exampleInputCo">

                                              </div>

                                              <!-- curso contratado -->
                                              <div class="col-md-12 page_header_h1">
                                                  <h1 class="title">Curso Contratado:</h1>
                                              </div>

                                              <div class="col-md-12">
                                                  <div class="form-group">

                                                      <label> 

                                                      <input type="checkbox" name="descourse" value="Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets 40 horas – Valor total de 1399,90 (UM MIL TREZENTOS E NOVENTA E NOVE REAIS) no cartãoaté 12x sem Juros."/>&nbsp;

                                                      Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets 40 horas – Valor total de 1399,90 (UM MIL TREZENTOS E NOVENTA E NOVE REAIS) no cartãoaté 12x sem Juros.

                                                    </label>

                                                  </div>



                                                <div class="form-group">

                                                      <label> 

                                                      <input type="checkbox" name="descourse" value="Curso de Reparo em Placas de iPhone Nível l ao lll - Valor total de 1.899,00 (Um Mil Oitocentos e Noventa e Nove Reais)  cartão de crédito até 12 x sem juros"/>&nbsp;

                                                      Curso de Reparo em Placas de iPhone Nível l ao lll - Valor total de 1.899,00 (Um Mil Oitocentos e Noventa e Nove Reais)  cartão de crédito até 12 x sem juros

                                                    </label>

                                                  </div>



                                                  <div class="form-group">

                                                  <label>

                                                      <input type="checkbox" name="descourse" value="Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets + Software Livres (COMBO) – valor total de R$1.800,00 (UM MIL OITOCENTOS REAIS) no cartão de crédito até 12 x sem juros."/>  &nbsp;

                                                      Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets + Software Livres (COMBO) – valor total de R$1.800,00 (UM MIL OITOCENTOS REAIS) no cartão de crédito até 12 x sem juros.

                                                    </label>

                                                  </div>



                                                  <div class="form-group">

                                                  <label>

                                                      <input type="checkbox" name="descourse" value="Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets + Aulas Práticas (COMBO) – valor total de R$1.799,90 (UM MIL OITOCENTOS REAIS) no cartão de crédito 12x sem juros."/>  &nbsp;

                                                      Curso Profissionalizante Manutenção de Hardware + Software Básico em Celulares e Tablets + Aulas Práticas (COMBO) – valor total de R$1.799,90 (UM MIL OITOCENTOS REAIS) no cartão de crédito 12x sem juros.

                                                    </label>

                                                  </div>



                                                  <div class="form-group">

                                                  <label>

                                                      <input type="checkbox" name="descourse" value="Curso Profissionalizante de Software Livres – valor total de R$850,00 (OITOCENTOS E CINQUENTA REIAS) no cartão de crédito até 12x sem juros ."/>  &nbsp;

                                                      Curso Profissionalizante de Software Livres – valor total de R$850,00 (OITOCENTOS E CINQUENTA REIAS) no cartão de crédito até 12x sem juros .

                                                    </label>

                                                  </div>



                                                  <div class="form-group">

                                                  <label>

                                                      <input type="checkbox" name="descourse" value="Curso Profissionalizante de Software Avançado com BOX – valor total de R$850,00 (OITOCENTOS E CINQUENTA REIAS) no cartão de crédito até 12x sem juros."/>  &nbsp;

                                                      Curso Profissionalizante de Software Avançado com BOX – valor total de R$850,00 (OITOCENTOS E CINQUENTA REIAS) no cartão de crédito até 12x sem juros.

                                                    </label>

                                                  </div>

                                              <!-- end cursos contrato -->
                                              </div>

                                             <!-- periodo contratado -->
                                              <div class="col-md-12 page_header_h1">
                                                  <h1 class="title">Periodo Contratado:</h1>
                                              </div>

                                              <div class="col-md-12">
                                                  <div class="form-group">

                                                      <label>

                                                              <input type="checkbox" name="desperiod" value="Integral: Curso de Manutenção em Celulares e Tablets – Duração de (5 dias) de segunda a sexta das 08:45 ás 17:45"/>  &nbsp;

                                                              Integral: Curso de Manutenção em Celulares e Tablets – Duração de (5 dias) de segunda a sexta das 08:45 ás 17:45

                                                            </label>

                                                          </div>

                                                          

                                                          <div class="form-group">

                                                          <label>

                                                            <input type="checkbox" name="desperiod" value="Integral: Curso de Software Livres – Duração de 4 (Quatro) dias 30 horas  das 08:45 as 17:45"/>  &nbsp; 

                                                                Integral: Curso de Software Livres – Duração de 4 (Quatro) dias 30 horas  das 08:45 as 17:45
                                                            </label>

                                                            </div>



                                                            <div class="form-group">

                                                            <label>

                                                            <input type="checkbox" name="desperiod" value="Noturno Curso de Manutenção em Celulares e Tablets – Duração de duas semana de segunda a sexta das 18:30 ás 22:30."/>  &nbsp;

                                                                Noturno Curso de Manutenção em Celulares e Tablets – Duração de duas semana de segunda a sexta das 18:30 ás 22:30.

                                                            </label>

                                                            </div>



                                                            <div class="form-group">

                                                            <label>

                                                            <input type="checkbox" name="desperiod" value="Noturno: Curso de Software Livres – Duração de 8 (oito) dias de segunda a sexta de uma semana e finalizando  na quarta da proxima  semana."/>  &nbsp;

                                                                Noturno: Curso de Software Livres – Duração de 8 (oito) dias de segunda a sexta de uma semana e finalizando  na quarta da proxima  semana.

                                                            </label>

                                                            </div>



                                                            <div class="form-group">

                                                            <label>

                                                            <input type="checkbox" name="desperiod" value="Intensivo: Curso de Manutenção em Celulares e Tablets – Duração de 5 sábados seguidos – 09:00 as 18:00."/>  &nbsp;

                                                              Intensivo: Curso de Manutenção em Celulares e Tablets – Duração de 5 sábados seguidos – 09:00 as 18:00.

                                                            </label>

                                                            </div>



                                                            <div class="form-group">

                                                            <label> 

                                                            <input type="checkbox" name="desperiod" value="Intensivo: Curso de Software Livres – Duração de 4 (quatro ) sábados das 09:00 ás 17:00"/>  &nbsp;

                                                                Intensivo: Curso de Software Livres – Duração de 4 (quatro ) sábados das 09:00 ás 17:00

                                                            </label>

                                                            </div>

                                                            

                                                            <div class="form-group">

                                                            <label>

                                                            <input type="checkbox"name="desperiod" value="Matutino – Duração de 10 dias das 08:45 a 12:30 "/>  &nbsp;

                                                              Matutino – Duração de 10 dias das 08:45 a 12:30 

                                                            </label>

                                                            </div>



                                                            <div class="form-group">

                                                            <label>

                                                            <input type="checkbox" name="desperiod" value="Vespertino  – Durante 10 dias  das 13:45 as 17:45"/>  &nbsp;

                                                              Vespertino  – Durante 10 dias  das 13:45 as 17:45

                                                            </label>

                                                            </div>
                                              </div>
                                      </div>
                                    </div><!-- // -->
                                  
                                     
                                 <!-- /.box-body -->
                          <div class="box-footer">
                            <button type="submit" class="btn send-os pull-right"><i class="fa fa-floppy-o"></i> Salvar</button>
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