<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;600;700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="assets/css/estilos.css">
  <link rel="stylesheet" href="assets/css/ceck.css">
  <title>Atlanta Site</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Atlanta Site</title>

<body>    

  <!-- // aca empieza header -->
  <nav class="navbar navbar-expand-lg navbar-secondary bg-light ">
        <div class="container-fluid">
          <a class="navbar-brand text-black" href="#" ><img src="assets/img/iso-star.png" alt="Logo de el club atlanta" width="100px" height="100px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link text-white" href="index">INICIO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./noticia">NOTICIAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="./tienda?cat=todos">TIENDA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#">INSTITUCIONAL</a>
              </li>
              </ul>
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <!-- <a class="nav-link active text-white" aria-current="page" href="usuario"><i class="fa-solid fa-user"></i></a> -->
                <div class="dropdown">
                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa-solid fa-user"></i>
                  </a>
                  <ul class="dropdown-menu">
                    <li style="width: 10px !important;"><a class="dropdown-item" href="usuario/perfil?email=<?php echo $_SESSION['email']?>">Editar Perfil</a></li>
                    <li><a class="dropdown-item" href="usuario/logout">Cerrar Sesion</a></li>
                  </ul>
                </div>
              </li>
                <li class="nav-item">
                    <a href="./carrito/ver" class="nav-link text-white"><i class="fa-solid fa-cart-shopping"></i><span class="badge bg-success"><?php echo $cantidad;?></span></a>
                </li>
            </ul>
          </div>
        </div>
      </nav>
         <!-- // aca termina header -->
<div class="mt-5 text-center">
  <h1 style="color:white">H I S T O R I A</h1>
<img src="http://www.caatlanta.com.ar/wp-content/uploads/WhatsApp-Image-2020-10-09-at-15.13.42.jpeg" alt="">
</div>
<div class="par1">
<p style="color:#ecbe00;">El Club Atl??tico Atlanta fue fundado el 12 de octubre de 1904, fecha escogida con motivo del D??a de la Raza (de esa forma se denominaba al D??a de respeto a la diversidad cultural) .La historia comenz?? a escribirse con una reuni??n celebrada entre varios j??venes en la casa del comerciante Tom??s El??as Sanz ubicada en la calle Alsina 1119, en Capital Federal, aunque prosigui?? y tuvo final en la plaza Concepci??n, en Independencia y Buen Orden (hoy Bernardo de lrigoyen), donde qued?? concretada la constituci??n. En dicho encuentro se acord?? bautizar a la instituci??n como Atlanta Atlhetic Club. En torno a la elecci??n del nombre existen varias teor??as. Por un lado, se afirma que esta habr??a surgido en conmemoraci??n al terremoto ocurrido en la hom??nima ciudad de Estados Unidos unos meses antes de la fecha de fundaci??n del club, mientras que otra versi??n apunta a que el nombre provendr??a de un barco de guerra tambi??n estadounidense que habr??a arribado al puerto de Buenos Aires con motivo de la proclamaci??n de Manuel Quintana como presidente de la Rep??blica Argentina.
Por su parte, la interpretaci??n oficial sobre los colores del club, amarillo y azul a rayas verticales, indica que fueron escogidos en referencia a los matices de los toldos que cubr??an los negocios comerciales de los barrios en la ??poca.
La primera Comisi??n Directiva qued?? conformada con los siguientes nombres: Tom??s El??as Sanz, Emilio Bolinches, Juan Enrich, Fabi??n Orradre, Juan Escribano, Lu??s Sagardoy, Benigno Larrive, Trif??n Poggio, Rapallo, H??ctor Franco y Alfredo Giraud.
El primer campo de juego del club se ubic?? en Juan Bautista Alberdi y Escalada, en el barrio de Villa Luro. Sin embargo, Atlanta permaneci?? muy poco tiempo en aquel sitio, ya que, a causa de las dificultades econ??micas, cambi?? de terreno en diversas oportunidades, lo que le vali?? ganarse el apodo de ???Bohemios???, por el cual se identifica tanto a los hinchas como a los futbolistas del club hasta la actualidad.</p>     
</div>

<div class="mt-5 text-center">
  <h1 style="color:white">D I R I G E N C I A </h1>
</div>
<div class="par2">
<div class="row" style="color:#ecbe00;">PRESIDENTE
GRECO GABRIEL MARIANO </div>
<br>
<div class="row" style="color:#ecbe00;">VICEPRESIDENTE 1??
CLAVELL PABLO IGNACIO</div>
<br>
<div class="row" style="color:#ecbe00;">VICEPRESIDENTE 2??
PAZ MARCELO</div>
<br>
<div class="row" style="color:#ecbe00;">SECRETARIO GENERAL
SANTORO MARCELO HECTOR</div>
<br>
<div class="row" style="color:#ecbe00;">SECRETARIO ADMINISTRATIVO
NICOLO GUSTAVO OSCAR</div>
<br>
<div class="row" style="color:#ecbe00;">SECRETARIO DEPORTIVO
GOMEZ FERNANDO DIEGO</div>
<br>
<div class="row" style="color:#ecbe00;">TESORERO
LORIZIO ROBERTO</div>
<br>
<div class="row" style="color:#ecbe00;">PROTESORERO
RUCKI HERNAN</div>
<br>
<div class="row" style="color:#ecbe00;">VOCAL TITULAR 1??
JABLKOWSKI JULIO ALBERTO</div>
<br>
<div class="row" style="color:#ecbe00;">VOCAL TITULAR 2??
LACHENER PABLO ERNESTO</div>
</div>

<div class="mt-5 text-center">
  <h1 style="color:white">E S T A D I O </h1>
<img src="https://www.caatlanta.com.ar/wp-content/uploads/Inauguraci%C3%B3n-estadio-1960-470x353.jpg" alt="">
</div>
<div class="par1">
<p style="color:#ecbe00;">En 1960 ocurrieron dos hechos importantes en la historia del club. Por un lado la obtenci??n de la Copa Suecia (que se hab??a iniciado en 1958), el 29 de abril de ese a??o tras vencer en la final a Racing Club por 3 a 1 que posibilit?? que Atlanta se convirtiera en el primer equipo fuera de los denominados cinco grandes del f??tbol argentino en obtener un torneo profesional entre clubes de primera divisi??n organizado por la AFA. El otro destacado fue que el 5 de junio el club disput?? el primer encuentro en su nuevo estadio frente a Argentinos Juniors por la octava fecha del campeonato oficial de primera.

Luego, el 18 de mayo de 2000 el estadio recibi?? el nombre de Le??n Kolbowski en honor al presidente bajo cuya administraci??n fue posible su construcci??n.
Es importante destacar que durante estos a??os y junto con el incremento del n??mero de socios del club, se inauguraron una serie de instalaciones deportivas en la sede social, entre las que destacan la piscina cubierta de nataci??n en 1963 y las canchas de tenis en 1964.
</p>     
</div>

<div class="mt-5 text-center">
  <h1 style="color:white"><pre>A S C E N S O   A   P R I M E R A</pre></h1>
<img src="https://www.caatlanta.com.ar/wp-content/uploads/1983-BD-campe%C3%B2n-Atlanta-3-Armenio-2-vuelta-globos-470x356.jpg" alt="">
</div>
<div class="par1">
<p style="color:#ecbe00;">Luego de la enorme frustraci??n que signific?? la derrota con Temperley, el a??o siguiente fue la gloria para el bohemio. Con la dupla Oscar L??pez-Oscar Cavallero (de no muy buenos antecedentes hasta aquel momento), Atlanta empezaba renovado en 1983.El bohemio lideraba el torneo, pero hacia la mitad del mismo, ya no eran tantos buenos los resultados, por lo que la dupla renunci??, tomando la direcci??n t??cnica Juan Carlos ???Toto??? Lorenzo para los ??ltimos 12 partidos. El equipo reforz?? su defensa, pero empeor?? en ofensiva. As??, los primeros tres partidos terminaron empatados. Pese a ello, la pobre actuaci??n de sus rivales dej??, a nueve fechas del final, a Atlanta, junto a Brown y Sportivo Italiano a un punto del l??der Tigre. El equipo luego venci?? a El Porvenir y Banfield, pasando all?? a la punta. Cuando s??lo faltaban dos fechas frente a Central C??rdoba de Rosario lleg?? el festejo: en campo de Newell???s, Torres abri?? el marcador con un penal conseguido a los 20 minutos del primer tiempo. Finalmente fue empate, pero los hinchas bohemios ya estaban tranquilos: Chacarita (que luego ascendi?? en el octogonal) le dio una mano al ganarle 6 a 2 a Tigre. El 19 de noviembre de ese a??o fue tiempo de la vuelta ol??mpica. El plantel profesional que finaliz?? primero ten??a los siguientes nombres: Ra??l Dom??nguez, Avelino Ver??n, Rub??n G??mez, Adri??n Bianchi, Rodolfo Raffaelli, David Millicay, Jorge Villagra, Gustavo Jones, Lu??s D??az, Alfredo Torres, Rub??n Rojas, Horacio Alfredo Yonadi, Jorge Piaggio, Jorge Latreite, ??ngel Guerrero, Rub??n Bernardis, Horacio Bianchini, Daniel Cano, Ricardo Espala, H??ctor Milano y Alfredo Graciani. Es muy importante recordar que durante este lapso, bajo la presidencia de Hugo Masci, Atlanta adquiere como patrimonio y sin costo alguno el predio de Villa Madero, lugar donde hoy se asientan las inferiores del club. La vuelta a la primera divisi??n no fue la esperada. Luego de une p??sima campa??a, Atlanta terminaba su fugaz paso en la A y era tiempo de volver a luchar en el ascenso.
1983. El campe??n da la vuelta ol??mpica en el Le??n Kolbowski antes del inicio del cotejo con Armenio.
En 1985, el regreso estuvo cerca. El bohemio tuvo un buen torneo pero se frustr?? en la final ante Racing. Y para los a??os siguientes comenzaron a haber cambios. Los torneos pasar??an a jugarse con el calendario europeo, de julio a abril, y se creaba una nueva divisi??n: el Nacional B, que daba una oportunidad a que los mejores equipos del interior jueguen con los mejores del ascenso local. La vieja Primera B quedar??a desvalorizada por el ascenso de varios de la C. En un torneo corto, ese Apertura 86, se decidir??a cuales equipos de la B pasar??an a uno u otro torneo. Eran 20 equipos, en dos zonas.

La campa??a como local fue muy buena pero al no conseguir resultados como visitante el equipo fue condenado al descenso, lo que AFA consider?? como una permanencia. Para el torneo de Primera B 1986/87, Rub??n Glar??a fue el nuevo director t??cnico, que asumi?? la responsabilidad de sacar a este Atlanta a flote. La tarea fue olvidable, y el n??mero de jugadores empleados (46) lo demuestra a las claras. En los a??os que siguieron hasta el 90, el bohemio se mantuvo dentro de los octogonales pero siempre sin suerte.

Tampoco hubo grandes logros en otros deportes. Si no se volvieron a mencionar fue porque no se estaba pasando por un buen momento en esos tiempos.
</p>     
</div>


<div class="mt-5 text-center">
  <h1 style="color:white"><pre>L A  E T A P A  M A S  D U R A </pre></h1>
<img src="https://www.caatlanta.com.ar/wp-content/uploads/EdFZMXPXgAIMSxG.jpg" alt="">
</div>
<div class="par1">
<p style="color:#ecbe00;">Inmerso en una terrible crisis econ??mica, Atlanta volvi?? a la Primera B Metropolitana, la tercera categor??a de AFA. Y lleg?? a tocar fondo. Decidi?? encarar el torneo con los chicos que terminaron el Nacional B pasado. Eduardo Lendoiro ser??a el t??cnico, y se produjo la desvinculaci??n casi todos los jugadores del a??o anterior. Tras la declaraci??n de quiebra de la instituci??n el 25 de diciembre de 1991, por parte del juez Miguel Bargall??, Atlanta debi?? clausurar sus instalaciones, as?? como suspender sus actividades. A fin de afrontar la crisis, se form?? una comisi??n de apoyo encabezada por Ezequiel Kristal y en donde todos sus integrantes pusieron en juego sus patrimonios personales. Si bien logr?? que el club pudiese continuar con su actividad futbol??stica, no pudo evitar la venta de la sede social en septiembre de 1994.

Hasta la octava fecha, el equipo hab??a realizado una interesante campa??a, pero luego de decretada la quiebra, el club no pudo participar del torneo. Se lleg?? a pensar que no se volver??a a ver la gloriosa divisa, pero luego de algunos manejos jur??dicos, lleg?? la habilitaci??n provisoria. El 27 de noviembre, Atlanta reapareci?? para jugar el primer partido de la segunda rueda pero deb??a nueve partidos y fue forzado a jugarlos entre semana, en muchos casos martes y jueves seguidos. En algunas oportunidades arm?? el equipo directamente con suplentes y en otros partidos, directamente con juveniles. Fernando Zappia ya cumpl??a la doble funci??n de jugar, y ser el director t??cnico. Surgi?? una nueva camada de chicos, con Ariel P??rez y Ariel Alcami a la cabeza. Atlanta miraba la tabla desde abajo, con la tranquilidad que daba el puntaje del torneo de dos a??os atr??s, que lo dejaba a salvo y lejos de la zona del descenso. Se termin?? pen??ltimo pero valorando mucho el trabajo y esfuerzo de todos los juveniles.

Al quedar eliminado el puntaje para los promedios del Torneo 1989/90, Atlanta comenzaba la temporada 1992/93 seriamente afectado con la tabla del descenso. Como t??cnico asumi?? Jorge Ghiso, un hombre que hasta entonces ten??a pocos antecedentes.
Dados los problemas econ??micos, se mantuvo la base del a??o anterior, pero con refuerzos como Fabi??n ???el Pepe??? Castro (volv??a de un corto paso por San Lorenzo) y Hugo ???Pachorra??? Smaldone (de San Telmo). Se esperaba que la campa??a sea para salvarse del descenso pero estos j??venes se hicieron cada vez m??s fuertes y con la aparici??n de Cristian Castillo, con solo 17 a??os, el bohemio se meti?? entre los l??deres antes de finalizar la primera rueda. En el reinicio, el equipo no pudo sostener lo bueno que hab??a hecho y qued?? afuera del ingreso al octogonal, pero la campa??a hab??a sido m??s que digna para lo que se esperaba en un principio, y Ghiso tuvo mucho que ver en estos resultados.

Por primera vez en mucho tiempo, Atlanta reten??a a su t??cnico para el siguiente torneo. Y la misma base del a??o anterior. Se cambiaba el sistema de juego: pasaron a ser dos torneos, cada uno de una rueda, para enfrentar a los dos campeones por el primer ascenso. Pese a lo bueno hecho en el Apertura, Ghiso renunci?? en el Clausura y en su lugar apareci?? Jorge ???Puchero??? Dom??nguez. El equipo sigui?? con buena racha y lleg?? al octogonal, lugar del que fue eliminado en la semifinal por Deportivo Armenio.
</p>     
</div>



<div class="mt-5 text-center">
  <h1 style="color:white"><pre>L A  E S P E R A N Z A  Y  R E N A C I M I E N T O </pre></h1>
<img src="https://www.caatlanta.com.ar/wp-content/uploads/110-Peretti-02-Platea-850x570.jpg" alt="">
</div>
<div class="par1">
<p style="color:#ecbe00;">Por ese dicho que las ??nicas batallas que se pierden son las que se abandonan, un grupo de socios decidi?? no bajar los brazos y luchar por la recuperaci??n institucional. Todo comenz?? con movilizaciones y protestas que ped??an la restituci??n del terreno de la sede social para Atlanta.

Hacia fines de 2003 la Legislatura porte??a oy?? los reclamos y aprob?? por unanimidad el proyecto para declarar de utilidad p??blica el espacio. Meses m??s tarde sali?? la ley de expropiaci??n y la ilusi??n as?? se puso en marcha.

Ya en diciembre de 2006, luego del pago correspondiente a los due??os del predio, la Procuraci??n de la Ciudad de Buenos Aires solicit?? por escrito la posesi??n del predio de la calle Humboldt. La justicia dio lugar y acto seguido se le dio a Atlanta el predio para su utilizaci??n.

Adem??s, por esos mismos a??os, luego de reiteradas clausuras e inhabilitaciones, la Comisi??n Directiva decidi?? encarar un ambicioso proyecto de construcci??n de nuevas y modernas tribunas de cemento en el estadio.

El 29 de marzo de 2009, ante m??s de 12 mil bohemios presentes, Atlanta inaugur?? formalmente su remodelado estadio en un partido contra Deportivo Espa??ol, por la 32?? fecha del Campeonato de Primera B Metropolitana Temporada 2008/2009.

Los avances institucionales abrieron paso a los logros deportivos, y el 7 de mayo de 2011 luego de una campa??a futbol??stica espectacular en donde el bohemio estuvo durante m??s de 20 fechas puntero, el primer equipo de Atlanta se coron?? campe??n del Torneo de Primera B Metropolitana Temporada 2010/2011 y sell?? as?? su ascenso a la B Nacional. La experiencia no pudo colmar las expectativas, y nuevamente el bohemio pugna por retornar a esa categor??a, la antesala de su h??bitat natural: la primera divisi??n. Fue fracaso y ense??anza, retornando a segunda categor??a en 2019 de la mano del Pepe Castro y Orfila.

El progreso y el crecimiento del Club Atl??tico Atlanta se hace cada d??a m??s pronunciado y la vuelta a primera divisi??n, junto con el funcionamiento pleno de sus actividades sociales, deportivas y culturales, es un sue??o cada vez m??s cercano.
</p>     
</div>




 <!-- // aca empieza footer -->
 <div class="container-fluid footer " >

<div class="row footer-row">
  <div class="col-lg-4 ">
    <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.4060446348776!2d-58.44908378433159!3d-34.593892580462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4aaa2050037d7f%3A0xe875c1520516320d!2sClub%20Atl%C3%A9tico%20Atlanta!5e0!3m2!1ses-419!2sar!4v1663208888576!5m2!1ses-419!2sar" width="350" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-lg-4 text-ce logonter redes-sociales ">
    <div class="row">
      <img src="assets/img/iso-star.png" class="logo-footer" alt="">
    </div>
  <ul class="logo-container">
    <li style="--clr:#1da1f2" class="logo"><a href="https://twitter.com/atlantaoficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target="_blank"><i class="fa fa-twitter logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#dd2a7b" class="logo"><a href="https://www.instagram.com/clubatlantaoficial/?hl=es" target="_blank"><i class="fa fa-instagram logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#3b5998" class="logo"><a href="https://www.facebook.com/ClubAtleticoAtlantaOficial/" target="_blank"><i class="fa fa-facebook-official logo-img" aria-hidden="true"></i></a></li>
    <li style="--clr:#ff0000" class="logo"><a href="https://www.youtube.com/@atlantatvoficial" target="_blank"><i class="fa fa-youtube-play logo-img" aria-hidden="true"></i></a></li>
  </ul>

  </div>
  
    <hr class="aside">
  
  <div class="col-lg-3 text-center ">
    <div class="row">
      <p class="info-title" >Sede Social "Ezequiel Kristal"</p>
      <p class="info">Humboldt 540 - Ciudad de Buenos Aires - Pcia de Bs As</p>
      <p class="info">Tel.(54-11)4856-5999</p>
    </div>
    <hr>
    <div class="row">
      <p class="info-title">Centro de Formaci??n y Alto Rendimiento ???Antonio Carbone???</p>
      <p class="info">Avenida San Mart??n  7281 - Villa Madero</p>
      <p class="info">Tel.(54-11)4462-7590</p>
    </div>
    <hr>
    <div class="row">
      <p class="info-title">Complejo Open Dorrego</p>
      <p class="info">Avenida Dorrego 457 - CABA - Pcia de Bs As</p>
      <p class="info">Tel.(54-11)4856-7252</p>
    </div>
  </div>
</div>
<div class="row text-center">
  
  <div class="col-lg-12 text-center">
    <hr>
    <p class="copyright">Todos los derechos reservados Grupo 1 ?? 2022</p>
  </div>
</div>
</div>
       <!-- // aca termina footer -->

       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        </body>

</html>