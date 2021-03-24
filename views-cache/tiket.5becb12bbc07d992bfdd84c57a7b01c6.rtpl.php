<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html>
<head>
    <title>ticketo</title>
    <style type="text/css">
        .content-sales{
            width: 100%;
            display: flex;
            padding: 15px 0;
        }
        .table{
            width: 80%;
        }

        .table > header{
            width: 100%;
            height: auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px;
            background: #F0F2F2;
        }

        .table > header h1{
            font-weight: 600;
            font-size: 1.1em;
            color: #555555;
            text-transform: uppercase;
        }


        .brand{
            width: 30%;
        }

        .brand img{
            width: 100%;
        }

        .text h2{
            font-size: 1.2em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
        }

        .text span{
            font-size: 1em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
        }

        .p_order{
            width: 100%;
            display: flex;
            justify-content: space-between;
            padding: 15px 0;
        }

        .p_order h2{
            background: #F0F2F2;

        }

        .p_order h2,
        .p_order small{
            font-size: 1.2em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
            padding: 8px;
        }

        .box_adress{
            width: 100%;
        }

        .box_adress ol{
            display: flex;
            flex-direction: column;
            font-size: 1em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
            list-style: none;
        }

        .box_adress ol li strong{
            font-weight: 600;
        }

        .ol_li{
            display: flex;
            justify-content: space-between;
            padding-right: 15px;
        }

        .details_p{
            width: 100%;
            margin: 15px 0;
        }

        .details_p h2{
            display: block;
            text-align: center;
            font-size: 1em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
            text-transform: uppercase;
        }

        .details_p p{
            display: flex;
            justify-content: space-between;
            font-size: 1em;
            font-family: 'Roboto', sans-serif
            font-weight: bold;
            color: #555555;
        }
        .details_p p span strong{
            font-weight: 600;

        }
        .right-control{
            width: 50%;
            display: flex;
            justify-content: flex-end;
        }

        .box_adress{
            font-size: 1.1em;
            font-weight: 400;
            color: #555555;
        }

        .box_adress p{
            margin: 0 0 8px 0 !important;
        }


        .locale{
            display: block;
            padding: 15px 0;
            font-size: 1.1em;
            font-weight: 400;
            color: #000;
        }

        .locale strong{
            font-weight: 600;
        }

    </style>
</head>
<body>
<main style="width: 800px; margin: 0 auto;padding: 30px 0; font-family: 'Roboto', sans-serif;">
    <section class="content-sales" id="none">
        <article class="table" style="width: 100%;">
            <header>
                <div class="brand">
                    <img src="/res/admin/dist/img/logomarca-1.png"/>
                </div>
                <div class="right-control text" style="flex-direction: column;">
                    <h2>CA Cursos</h2>
                    <span><strong>CNPJ: </strong>09.068.723/0001-05.</span>
                    <span><strong>Endereço: </strong>sediada na Rua 02, N° 115 - Centro</span>
                    <span><strong>Cidade: </strong>Goiânia - GO</span>
                    <span><strong>Fone: </strong>(62) 98400-2318</span>
                </div>
            </header>

            <div class="p_order">
                <h2> Ticket: <?php echo htmlspecialchars( $ticket["idcontract"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </h2>
                <small>Data: <?php echo date('d/m/Y'); ?></small>
            </div>
            <div class="box_adress">
                <p>Nome: <strong><?php echo htmlspecialchars( $ticket["desname"], ENT_COMPAT, 'UTF-8', FALSE ); ?></strong></p>
                <p>CPF: <strong><?php echo formatDocument($ticket["nrcpf"]); ?></strong></p>
                <p>Telefone: <strong><?php echo htmlspecialchars( $ticket["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?> </strong> </p>
            </div>

            <p class="locale">Inicio do Curso: <strong><?php echo fomatDate($ticket["descontractdate"]); ?></strong></p>
            

        </article>
    </section>
</main>
</body>
<script>

    window.onload = function() {

        window.print();

        var time = window.setTimeout(function() {

            //  window.location.href = '/admin/contratos'

        }, 1000);

    }


</script>
</html>