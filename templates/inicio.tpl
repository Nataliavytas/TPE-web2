<!DOCTYPE html>
<html>
 <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title> Minimalismo </title>

     <base href="http://{$smarty.server.SERVER_NAME}:{$smarty.server.SERVER_PORT}{dirname($smarty.server.PHP_SELF)}/">

     <link rel="stylesheet" href="./css/main.css">

     {*vue.js*}
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.css">
    <link rel="stylesheet" href="estilos/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.css">
    <link rel="stylesheet" href="estilos/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="icon" href="images/aguacate.png?v1" type="image/x-icon" />
<link rel="shortcut icon" href="images/aguacate.png?v1" type="image/x-icon" />
</head>
<body>

    {include file= "administrador.tpl"}

    <div class="jumbotron">
    <h2> <a href="revistas"> Quiero ingresar anonimamente. </a> </h2>
    </div>

    {include file="footer.tpl"}
    </body>
 </html>
