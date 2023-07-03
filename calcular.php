<?php  

if (isset($_POST['plan']) && isset($_POST['cliente']) && isset($_POST['servicio']) && isset($_POST['submit']) && isset($_POST['sucursal'])) {
    
		$plan = $_POST['plan'];
		$servicios = $_POST['servicio'];
		$contara = count($servicios);
		$cliente = $_POST['cliente'];
        $sucursal = $_POST['sucursal'];
		

function ClienteNuevo($contara, $plan, $cliente){
    
        $tarifaPlan = array("diario" => 5000, "semanal" => 20000, "mensual" => 60000, "bimensual" => 100000, "semestral" => 500000, "anual" => 800000 );
		$descuentoNuevo = array("1" =>  0, "2" => 5, "3" => 10, "4" => 15);

    if ($contara < 5) {

		$subtotal = $contara * $tarifaPlan[$plan];
        $iva = 19 * $subtotal / 100;
		$descuento = $descuentoNuevo[$contara] * $subtotal / 100;
		$valortotal = $subtotal + $iva - $descuento;
        
        echo "El costo por servicio para el periodo que elegiste es de: $<b>$tarifaPlan[$plan]</b> <br><br>";
        echo "Este tiene un descuento del: <b>$descuentoNuevo[$contara] %</b> <br><br>";
        echo "Valor Neto: $<b>$subtotal</b> <br>";
        echo "Descuento: $<b>$descuento</b> <br>";
        echo "Subtotal: $<b>$subtotal</b> <br>";       
        echo "IVA 19%: $<b>$iva</b> <br>";
        echo "Total Venta: $<b>$valortotal</b> <br><br>";
	}

	else {

		$subtotal = $contara * $tarifaPlan[$plan];
        $iva = 19 * $subtotal / 100;
		$descuento = 20 * $subtotal / 100;
		$valortotal = $subtotal + $iva - $descuento;
        
        echo "El costo por servicio para el periodo que elegiste es de: $<b>$tarifaPlan[$plan]</b> <br><br>";
        echo "Este tiene un descuento del: <b>20%</b> <br><br>";
        echo "Valor Neto: $<b>$subtotal</b> <br>";
        echo "Descuento: $<b>$descuento</b> <br>";
        echo "Subtotal: $<b>$subtotal</b> <br>";
        echo "IVA 19%: $<b>$iva</b> <br>";
        echo "Total Venta: $<b>$valortotal</b> <br><br>";
	}

}

function ClienteAntiguo($contara, $plan, $cliente){

		$tarifaPlan = array("diario" => 5000, "semanal" => 20000, "mensual" => 60000, "bimensual" => 100000, "semestral" => 500000, "anual" => 800000 );
		$descuentoAntiguo = array("1" => 5, "2" => 10, "3" => 20, "4" => 30);

	if ($contara < 5) {

		$subtotal = $contara * $tarifaPlan[$plan];
        $iva = 19 * $subtotal / 100;
		$descuento = $descuentoAntiguo[$contara] * $subtotal / 100;
		$valortotal = $subtotal + $iva - $descuento;

		echo "El costo por servicio para el periodo que elegiste es de: $<b>$tarifaPlan[$plan]</b> <br><br>";
        echo "Este tiene un descuento del: <b>$descuentoAntiguo[$contara] %</b> <br><br>";
        echo "Valor Neto: $<b>$subtotal</b> <br>";
        echo "Descuento: $<b>$descuento</b> <br>";
        echo "Subtotal: $<b>$subtotal</b> <br>";       
        echo "IVA 19%: $<b>$iva</b> <br>";
        echo "Total Venta: $<b>$valortotal</b> <br><br>";
	}	

	else {

		$subtotal = $contara * $tarifaPlan[$plan];
        $iva = 19 * $subtotal / 100;
		$descuento = 40 * $subtotal / 100;
		$valortotal = $subtotal + $iva - $descuento;

		echo "El costo por servicio para el periodo que elegiste es de: $<b>$tarifaPlan[$plan]</b> <br><br>";
        echo "Este tiene un descuento del: <b>40%</b> <br><br>";
        echo "Valor Neto: $<b>$subtotal</b> <br>";
        echo "Descuento: $<b>$descuento</b> <br>";
        echo "Subtotal: $<b>$subtotal</b> <br>";
        echo "IVA 19%: $<b>$iva</b> <br>";
        echo "Total Venta: $<b>$valortotal</b> <br><br>";

	   }

    }
    
}

?>  

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Healthy Body - Cotización</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="css/estiloscotizacion.css">
    
</head>
<body>
    <header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">Gimnasio Healthy Body</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                <p class="main-header__contactInfo__nit">
                <span class="">NIT 800528624-1</span>
                </p>
            </div>
        </div>
    </header>
        
     <section class="banner">
        <img src="imagenes/banner_cotizacion.jpg" alt="" class="banner__img">
        <div class="banner__content">Esta es tu mejor opción.</div>
    </section>
    
    <main class="main">
                
    <section>      
    
	    <div class="MuestraResultado">

				<?php  

				if (isset($_POST['plan']) && isset($_POST['cliente']) && isset($_POST['servicio']) && isset($_POST['submit']) && isset($_POST['sucursal'])) {
        
                              if(!empty($_POST['servicio'])){
                                    echo "Hola " .$_REQUEST['nombre']. ", Bienvenido(a)!!" . "<br><br>";
                                    echo "La sucursal que elegiste es: <b>$sucursal</b> <br><br>";
                                    echo "Así que eres un cliente: <b>$cliente</b> <br><br>";      
                                    echo "El plan que escogiste es: <b>$plan</b><br><br>";  
                                  
                                    echo "Acabas de cotizar <b>$contara</b> servicios, los cuales son:<br><br>";        
                                    foreach($_POST['servicio'] as $selected){
                                        echo $selected. "<br>";     
                                        }
                                    }
                                    echo"<br><br>";
                    
                            if ($cliente == "Nuevo") {
									
								ClienteNuevo($contara, $plan, $cliente);								
							}
							else {

								ClienteAntiguo($contara, $plan, $cliente);
							}
				        }

				else{

						echo "<b>Por favor diligenciar todos los campos del formulario para generar su cotización.<b> <br><br>";
					}

				?>

				<a href="Cotizar.html"><button class="btn_nuevo"> Cotiza de Nuevo</button></a>	
				
	    </div>
     
    </section>
    
    </main>
    <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                   <h3 class="column__title">¿Por qué visitarnos?</h3>
                   <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus dolores nobis harum accusantium, magni autem, vel, vero, blanditiis recusandae ipsam commodi est explicabo impedit pariatur assumenda dignissimos. Necessitatibus odio, laboriosam?</p> 
                </div>
                <div class="column column--33">
                   <h3 class="column__title">Contáctanos</h3>
                   <p class="column__txt"><a href="" class="icon-ubicacion"></a>Av 68 N° 87 a 45</p> 
                   <p class="column__txt"><a href="" class="icon-phone"></a>Teléfonos: 5788475 - 3215487965</p>
                   <p class="column__txt"><a href="" class="icon-whatsapp">Whatsapp: 3215487965</a></p>  
                   <p class="column__txt"><a href="" class="icon-mail"></a>consultas@gimnasiohealthybody.com.co</p> 
                </div>
                <div class="column column--33">
                   <h3 class="column__title">Síguenos en nuestras redes sociales</h3>
                   <p class="column__txt"><a href="" class="icon-facebook">Facebook</a></p> 
                   <p class="column__txt"><a href="" class="icon-twitter">Síguenos en twitter</a></p> 
                </div>
                <p class="copy">© 2020 Gimnasio Healthy Body │ Todos los derechos reservados</p>
            </div>
        </footer>
</body>
</html>





