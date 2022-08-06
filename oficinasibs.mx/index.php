<?php

require_once __DIR__ . '/oficinasibsweb/vendor/autoload.php';

$app = new Silex\Application();

$env = getenv( 'APP_ENV' ) ? : 'prod';

$configProvider = new \Misantron\Silex\Provider\ConfigServiceProvider( new \Misantron\Silex\Provider\Adapter\JsonConfigAdapter(), [ __DIR__ . "/../config/$env.json", ] );
$app->register( $configProvider );

$app->register( new Silex\Provider\TwigServiceProvider(), array( 'twig.path' => __DIR__ . '/views', ) );
$app->register( new Silex\Provider\RoutingServiceProvider() );

$app->register( new Silex\Provider\DoctrineServiceProvider(), $app[ 'config' ][ 'doctrine' ] );

$app->register( new Silex\Provider\SwiftmailerServiceProvider() );

$app[ 'swiftmailer.options' ] = array( 'transport' => 'smpt', 'host' => 'email-smtp.us-east-1.amazonaws.com', 'port' => 587, 'username' => 'AKIAISY34VGWDEZTHKIA', 'password' => 'Al+yAnG0zEcWxHEcqZTufsryaCVjX5sZF3DO0ZBXHLf8', 'encryption' => 'tls', 'auth_mode' => 'login' );


$app->get( "", function () use ( $app ) {
    $with = array( 'curl' => 'home' );
    return $app[ 'twig' ]->render( '/amp-version/home.twig', $with );
} );


$app->get( "/home", function () use ( $app ) {
    $with = array( 'curl' => 'home' );
    return $app[ 'twig' ]->render( '/amp-version/home.twig', $with );
} );


$app->get( "/oficinas-virtuales-mexico", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-mexico' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-mexico.twig', $with );
} );


$app->get( "/alianzas", function () use ( $app ) {
    $with = array( 'curl' => 'alianzas' );
    return $app[ 'twig' ]->render( '/amp-version/alianzas.twig', $with );
} );

$app->get( "/worksafe", function () use ( $app ) {
    $with = array( 'curl' => 'worksafe' );
    return $app[ 'twig' ]->render( '/amp-version/worksafe.twig', $with );
} );

$app->get( "/nosotros", function () use ( $app ) {
    $with = array( 'curl' => 'nosotros' );
    return $app[ 'twig' ]->render( '/amp-version/nosotros.twig', $with );
} );


$app->get( "/centro-de-negocios", function () use ( $app ) {
    $with = array( 'curl' => 'centro-de-negocios' );
    return $app[ 'twig' ]->render( '/amp-version/centro-de-negocios.twig', $with );
} );

$app->get( "/oficina-virtual", function () use ( $app ) {
    $with = array( 'curl' => 'oficina-virtual' );
    return $app[ 'twig' ]->render( '/amp-version/oficina-virtual.twig', $with );
} );


$app->get( "/oficinas-virtuales", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales.twig', $with );
} );



$app->get( "/oficinas-ejecutivas", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-ejecutivas' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-ejecutivas.twig', $with );
} );

$app->get( "/oficinas-virtuales", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales.twig', $with );
} );

$app->get( "/renta-de-oficinas", function () use ( $app ) {
    $with = array( 'curl' => 'renta-de-oficinas' );
    return $app[ 'twig' ]->render( '/amp-version/renta-de-oficinas.twig', $with );
} );

$app->get( "/domicilio-fiscal", function () use ( $app ) {
    $with = array( 'curl' => 'domicilio-fiscal' );
    return $app[ 'twig' ]->render( '/amp-version/domicilio-fiscal.twig', $with );
} );


$app->get( "/salas-de-juntas-", function () use ( $app ) {
    $with = array( 'curl' => 'salas-de-juntas-' );
    return $app[ 'twig' ]->render( '/amp-version/salas-de-juntas-.twig', $with );
} );

$app->get( "/oficinas-virtuales-condesa", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-condesa' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-condesa.twig', $with );
} );

$app->get( "/oficinas-virtuales-polanco", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-polanco' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-polanco.twig', $with );
} );

$app->get( "/oficinas-virtuales-cdmx", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-cdmx' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-cdmx.twig', $with );
} );




$app->get( "/casos-de-exito-8-arquitectos", function () use ( $app ) {
    $with = array( 'curl' => 'casos-de-exito-8-arquitectos' );
    return $app[ 'twig' ]->render( '/amp-version/casos-de-exito-8-arquitectos.twig', $with );
} );

$app->get( "/oficinas-virtuales-en-cdmx", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-en-cdmx' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-en-cdmx.twig', $with );
} );

$app->get( "/oficinas-virtuales-mexico-df", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-mexico-df' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-mexico-df.twig', $with );
} );

$app->get( "/oficinas-virtuales-reforma", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-reforma' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-reforma.twig', $with );
} );

$app->get( "/oficinas-virtuales-tecamachalco", function () use ( $app ) {
    $with = array( 'curl' => 'oficinas-virtuales-tecamachalco' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales-tecamachalco.twig', $with );
} );

$app->get( "/servicios", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/servicios.twig', $with );
} );

$app->get( "/oficinas-virtuales/por-que", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales/oficinas-virtuales-por-que.twig', $with );
} );

$app->get( "/oficinas-virtuales/soluciones", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales/oficinas-virtuales-soluciones.twig', $with );
} );


$app->get( "/oficinas-virtuales/valores-agregados", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-virtuales/oficinas-virtuales-valores-agregados.twig', $with );
} );

$app->get( "/videoconferencia", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/videoconferencia.twig', $with );
} );

$app->get( "/oficinas-fisicas/por-que", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-fisicas/oficinas-fisicas-por-que.twig', $with );
} );

$app->get( "/oficinas-fisicas/valores-agregados", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/oficinas-fisicas/oficinas-fisicas-valores-agregados.twig', $with );
} );

$app->get( "/ubicacion", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones.twig', $with );
} );

$app->get( "/ubicaciones", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones.twig', $with );
} );

$app->get( "/ubicaciones/insurgentes-sur", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/insurgentes-sur.twig', $with );
} );
$app->get( "/ubicaciones/paseo-reforma", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/paseo-reforma.twig', $with );
} );
$app->get( "/ubicaciones/lomas-de-tecamachalco", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/lomas-de-tecamachalco.twig', $with );
} );

$app->get( "/ubicaciones/polanco-masaryk", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/polanco-masaryk.twig', $with );
} );

$app->get( "/ubicaciones/condesa", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/condesa.twig', $with );
} );

$app->get( "/ubicaciones/santafe", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/santa-fe.twig', $with );
} );
$app->get( "/ubicaciones/monterrey", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/monterrey-nuevo-leon.twig', $with );
} );
$app->get( "/ubicaciones/queretaro", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/queretaro.twig', $with );
} );

$app->get( "/ubicaciones/saltillo-coahuila", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/saltillo-coahuila.twig', $with );
} );

$app->get( "/ubicaciones/torreon-coahuila", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/torreon-coahuila.twig', $with );
} );
$app->get( "/ubicaciones/aguascalientes", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/aguascalientes.twig', $with );
} );
$app->get( "/ubicaciones/guadalajara-zapopan-jalisco", function () use ( $app ) {
    $with = array( 'curl' => 'ubicaciones' );
    return $app[ 'twig' ]->render( '/amp-version/ubicaciones/guadalajara-zapopan-jalisco.twig', $with );
} );
$app->get( "/servicios-adicionales/basicos", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( "/amp-version/servicios-adicionales/servicios-adicionales-basicos.twig", $with );
} );
$app->get( "/servicios-adicionales/premium", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( "/amp-version/servicios-adicionales/servicios-adicionales-premium.twig", $with );
} );

$app->get( "/salas-de-juntas", function () use ( $app ) {
    $with = array( 'curl' => 'servicios' );
    return $app[ 'twig' ]->render( '/amp-version/salas-de-juntas.twig', $with );
} );

$app->get( "/app", function () use ( $app ) {
    $with = array( 'curl' => 'app' );
    return $app[ 'twig' ]->render( '/amp-version/app.twig', $with );
} );

$app->get( "/zoom-rooms", function () use ( $app ) {
    $with = array( 'curl' => 'zoom-rooms' );
    return $app[ 'twig' ]->render( '/amp-version/zoom-rooms.twig', $with );
} );
//$app->post( '/contacto', function () use ( $app ) {
//    $error = [];
//    if ( $_POST[ 'name' ] != "" ) {
//        $_POST[ 'name' ] = filter_var( $_POST[ 'name' ], FILTER_SANITIZE_STRING );
//        if ( $_POST[ 'name' ] == "" ) {
//            $errors[] = 'Por favor ingresa un nombre válido.<br/><br/>';
//        }
//    } else {
//        $errors[] = 'Por favor escribe tu nombre.<br/>';
//    }
//
//    if ( $_POST[ 'email' ] != "" ) {
//        $_POST[ 'email' ] = filter_var( $_POST[ 'email' ], FILTER_SANITIZE_EMAIL );
//        if ( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ) {
//            $errors[] = $_POST[ 'email' ] . " <strong>no</strong> tiene un formato válido.<br/><br/>";
//        }
//    } else {
//        $errors[] = 'Por favor proporciona tu correo electrónico.<br/>';
//    }
//
//    if ( $_POST[ 'phone' ] != "" ) {
//        $_POST[ 'phone' ] = filter_var( $_POST[ 'phone' ], FILTER_SANITIZE_STRING );
//        if ( $_POST[ 'phone' ] == "" ) {
//            $errors[] = 'Por favor ingresa un teléfono válido.<br/><br/>';
//        }
//    } else {
//        $errors[] = 'Por favor escribe un teléfono.<br/>';
//    }
//
//    if ( $_POST[ 'msg' ] != "" ) {
//        $_POST[ 'msg' ] = filter_var( $_POST[ 'msg' ], FILTER_SANITIZE_STRING );
//        if ( $_POST[ 'msg' ] == "" ) {
//            $errors[] = 'Por favor ingresa un mensaje.<br/>';
//        }
//    } else {
//        $errors[] = 'Por favor ingresa un mensaje.<br/>';
//    }
//
//    if ( empty($error) ) {
//        $with = array( 'name' => $_POST[ 'name' ], 'email' => $_POST[ 'email' ], 'phone' => $_POST[ 'phone' ], 'msg' => $_POST[ 'msg' ] );
//
////        $message = \Swift_Message::newInstance()->setSubject( 'Forma de contacto IBS' )->setFrom( array( 'contacto@oficinasvirtuales.mx' ) )->setTo( array( $with[ 'email' ] ) )->setBody( $app[ 'twig' ]->render( '/amp-version/contactoMail.twig', $with ), 'text/html' );
//
//        if ( $app[ 'mailer' ]->send( $message ) ) {
//            echo '<div class="ok"> <img src="../img/action_check.gif" />Muchas gracias por tu mensaje</div>';
////            return $app->redirect( 'gracias_contacto/' );
//        } else {
//            $response = "";
//            foreach ( $errors as $error ) {
//                $response .= '<div class="notOk"><img src="../img/action_delete.gif" /> ' . $error . '</div>';
//            }
//            return $response;
//        }
//    }
//
//} );

$app->post( '/contacto', function () use ( $app ) {

    if ( $_POST[ 'name' ] != "" ) {
        $_POST[ 'name' ] = filter_var( $_POST[ 'name' ], FILTER_SANITIZE_STRING );
        if ( $_POST[ 'name' ] == "" ) {
            $errors[] = 'Por favor ingresa un nombre válido.<br/><br/>';
        }
    } else {
        $errors[] = 'Por favor escribe tu nombre.<br/>';
    }

    if ( $_POST[ 'email' ] != "" ) {
        $_POST[ 'email' ] = filter_var( $_POST[ 'email' ], FILTER_SANITIZE_EMAIL );
        if ( !filter_var( $_POST[ 'email' ], FILTER_VALIDATE_EMAIL ) ) {
            $errors[] = "$email <strong>no</strong> tiene un formato válido.<br/><br/>";
        }
    } else {
        $errors[] = 'Por favor proporciona tu correo electrónico.<br/>';
    }

    if ( $_POST[ 'phone' ] != "" ) {
        $_POST[ 'phone' ] = filter_var( $_POST[ 'phone' ], FILTER_SANITIZE_STRING );
        if ( $_POST[ 'phone' ] == "" ) {
            $errors[] = 'Por favor ingresa un teléfono válido.<br/><br/>';
        }
    } else {
        $errors[] = 'Por favor escribe un teléfono.<br/>';
    }

//    if ($_POST['company'] != "") {
//        $_POST['company'] = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
//        if ($_POST['company'] == "") {
//            $errors[] = 'Por favor ingresa una compañia.<br/><br/>';
//        }
//    } else {
//        $errors[] = 'Por favor ingresa una compañia.<br/>';
//    }

    if ( $_POST[ 'sucursal' ] != "" ) {
        $_POST[ 'sucursal' ] = filter_var( $_POST[ 'sucursal' ], FILTER_SANITIZE_STRING );
        if ( $_POST[ 'sucursal' ] == "" ) {
            $errors[] = 'Por favor selecciona una sucursal.<br/><br/>';
        }
    } else {
        $errors[] = 'Por favor selecciona una sucursal.<br/>';
    }
    $service = false;
    for ( $i = 1; $i < 4; $i++ ) {
        if ( isset( $_POST[ "checkbox$i" ] ) ) {
            if ( $i == 1 || !$service )
                $service .= $_POST[ "checkbox$i" ]; else
                $service .= ' ' . $_POST[ "checkbox$i" ];
        }
    }
    if ( $service )
        $_POST[ 'service' ] = $service;
//    if ($_POST['service'] != "") {
//        $_POST['service'] = filter_var($_POST['service'], FILTER_SANITIZE_STRING);
//        if ($_POST['service'] == "") {
//            $errors[] = 'Por favor dinos que tipo de servicio deseas.<br/><br/>';
//        }
//    } else {
//        $errors[] = 'Por favor dinos que tipo de servicio deseas.<br/>';
//    }

//    if ($_POST['mkt'] != "") {
//        $_POST['mkt'] = filter_var($_POST['mkt'], FILTER_SANITIZE_STRING);
//        if ($_POST['mkt'] == "") {
//            $errors[] = 'Por favor dinos como te enteraste de nosotros.<br/><br/>';
//        }
//    } else {
//        $errors[] = 'Por favor dinos como te enteraste de nosotros.<br/>';
//    }


    if ( $_POST[ 'msg' ] != "" ) {
        $_POST[ 'msg' ] = filter_var( $_POST[ 'msg' ], FILTER_SANITIZE_STRING );
        if ( $_POST[ 'msg' ] == "" ) {
            $errors[] = 'Por favor ingresa un mensaje.<br/>';
        }
    } else {
        $errors[] = 'Por favor ingresa un mensaje.<br/>';
    }

    $with = array( 'name' => $_POST[ 'name' ], 'email' => $_POST[ 'email' ], 'phone' => $_POST[ 'phone' ], //            'company' => $_POST['company'],
        'sucursal' => $_POST[ 'sucursal' ], 'service' => $_POST[ 'service' ], //            'mkt' => $_POST['mkt'],
        'msg' => $_POST[ 'msg' ] );

    $message = \Swift_Message::newInstance()->setSubject( 'Contacto de la https://oficinasibs.mx' )->setFrom( array( $_POST[ 'email' ] ) )->setTo( array( 'webleads@oficinasibs.com.mx', 'alcides_rodriguez@unah.edu.cu', 'alcides@arena-park.ch' ) )->setBody( $app[ 'twig' ]->render( '/amp-version/contactoMail.twig', $with ), 'text/html' );
    if ( $app[ 'mailer' ]->send( $message ) ) {
        $response = new \Symfony\Component\HttpFoundation\JsonResponse(['successmsg' => 'Los datos fueron enviados correctamente']);
        $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
        $response->headers->set( 'Access-Control-Allow-Origin', '*' );
        $response->headers->set( 'AMP-Access-Control-Allow-Source-Origin', $request->get( '__amp_source_origin', 'https://oficinasibs.mx' ) );
        $response->headers->set( 'AMP-Redirect-To', 'https://oficinasibs.mx/contacto?sentMail=true' );
        $response->headers->set( 'Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin, AMP-Redirect-To' );
        return $response;
//        return $app[ 'twig' ]->render( '/amp-version/contacto.twig', [ 'success' => true, 'curl' => 'contacto' ], $response );
    } else {
        $response = new \Symfony\Component\HttpFoundation\JsonResponse(['errmsg' => 'Hubo un error, intentelo mas tarde']);
        $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
        $response->headers->set( 'Access-Control-Allow-Origin', '*' );
        $response->headers->set( 'AMP-Access-Control-Allow-Source-Origin', $request->get( '__amp_source_origin', 'https://oficinasibs.mx' ) );
        $response->headers->set( 'AMP-Redirect-To', 'https://oficinasibs.mx/contacto?errorMail=true' );
        $response->headers->set( 'Access-Control-Expose-Headers', 'AMP-Access-Control-Allow-Source-Origin, AMP-Redirect-To' );
        return $response;
//        return $app[ 'twig' ]->render( '/amp-version/contacto.twig', [ 'fail' => true, 'curl' => 'contacto' ], $response );
    }

} );

$app->get( "/contacto", function () use ( $app ) {
    $with = array( 'curl' => 'contacto' );
    $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
    if($request->get('sentMail'))
        $with['success'] = true;
    if($request->get('errorMail'))
        $with['fail'] = true;
    return $app[ 'twig' ]->render( '/amp-version/contacto.twig', $with );
} );

$app->get( "/14", function () use ( $app ) {
    $with = array( 'curl' => '/14' );
    return $app[ 'twig' ]->render( '/amp-version/14.twig', $with );
} );
$app->get( "/faq", function () use ( $app ) {
    $with = array( 'curl' => 'faq' );
    return $app[ 'twig' ]->render( '/amp-version/faq.twig', $with );
} );

$app->get( "/aviso-de-privacidad", function () use ( $app ) {
    $with = array( 'curl' => '/aviso-de-privacidad' );
    return $app[ 'twig' ]->render( '/amp-version/aviso.twig', $with );
} );
$app->get( "/faq", function () use ( $app ) {
    $with = array( 'curl' => 'faq' );
    return $app[ 'twig' ]->render( '/amp-version/faq.twig', $with );
} );


$app->error( function ( \Exception $e, $code ) use ( $app ) {
    if ( $app[ 'debug' ] ) {
        return;
    }
    switch ( $code ) {
        case 404:
            $message = 'The requested page could not be found.';
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }
    return $app[ 'twig' ]->render( 'default.twig' );
} );

$app->run();
