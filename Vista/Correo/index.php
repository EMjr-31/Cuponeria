<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotizacion</title>
    <?php
        include './Vista/cabecera.php';
        require '../../vendor/autoload.php';
    ?>
</head>
<body>
    <?php
        include './Vista/menu.php';
$nombre = $_POST['nombre'];
$identificacion_cliente = $_POST['identificacion_cliente'];
$correo_usuario = $_POST['correo_usuario'];
$titulo_cupon = $_POST['titulo_cupon'];
$precio_oferta_cupon = $_POST['precio_oferta_cupon'];
$descripccion = $_POST['descripccion'];
$fecha_compra_ventas = $_POST['fecha_compra_ventas'];
$id_cliente = $_POST['id_cliente'];
$id_cupon=$_POST['id_cupon'];
$fechaActual = date('d-m-Y');

$html='
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
    *{font-family: Quicksand, sans-serif;}
    
        h1{color:green;}

        table,tr,td,th{
        border:1px solid black;
        border-collapse:collapse;
        }

        table{
        width:50%;
        align:center;
        }

        #columna1 {
        position:absolute;
        top:60px;
        left:0px;
        width:300px;
        margin-top:10px;
        }

        #columna2 {
        border-radius: 10px;
        margin-left:420px;
        margin-right:150px;
        margin-top:10px;
        background-color:#ffffbb;
        }

        #columna2>p {
            font-size: 13px;
            }
        
            #footer>p>a {
            color: blue;
            font-size: 15px;
        }
</style>
</head>
<body>
    <h1>DBI</h1>
    <div id="columna1">
    <h4>Calle a Plan del Pino Km 1 1/2.<br/> Ciudadela Don Bosco<br/> Soyapango, El Salvador<br />
    www.dbi.github.com<br />
    (+503) 2251-8241</h4>
    </div>
    <div id="columna2">
    <h3>CUPON</h3>
    <p>
    Fecha '.$fechaActual.'<br />
    IDCupon #    '.$id_cupon.'<br />
    Valido Hasta    '.$fecha_compra_ventas.'<br />
    </p >
    </p>
    <p>Datos del Cliente
    </p>
    </div>
    <p><b><br/>ID Cliente: </b>'
    .$id_cliente.
    '<b><br/>Nombre: </b>'
    .$nombre.
    '<b><br/>DUI: </b>'
    .$identificacion_cliente.
    '<b><br/>Correo: </b>'
    .$correo_usuario.
    '</p>
    <p><br><br>Detalle de su Cupon
    </p>

    <p>
    1. <b>ID del Cupon: </b>'.$id_cupon.'<br/>
    2. <b>Fecha de Compra: </b>'.$fecha_compra_ventas.'<br/>
    3. <b>PrecioCosto pagado: </b> $'.$precio_oferta_cupon.'<br/>
    4. <b>Nombre del Cupon: </b>'.$titulo_cupon.'<br/>
    5. <b>Detalle del Cupon: </b>'.$descripccion.'<br/>
    </p>

    <br/>
    <h4><br />Terminos y Condiciones<br/></h4>
    <p>
    * Último día para usar el cupón: '.$fecha_compra_ventas.'<br/>
    * Debe llevar impreso el cupón para poderlo canjear en tienda<br/>
    * Realizar la reservación con 24 horas de anticipación<br/>
    * Propina no incluida
    </p>
    <div id="footer">
    Alguna duda sobre su compra, por favor contactarse al correo: <b/>
    <p>
    <a>alumnos.udb.investigacion@gmail.com</a><br/>
    </p>
    </div>
    <p><br/>¡Gracias y que tenga un Excelente dia!</p>
</body>
</html>
';
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$dompdf->load_html($html);
$dompdf->render();
$output = $dompdf->output();
$namepdf = $id_cliente.'-'.$id_cupon.".pdf";
$path = './Vista/pdfDoc/'.$namepdf;
file_put_contents($path, $output);
    ?>
    <?php
        include '../footer.php';
    ?>
</body>
</html>