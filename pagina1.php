<?php
header('Content-Type: text/html; charset=utf-8');

// Asegúrate de que 'cod' existe en $_REQUEST y es un número.
if (isset($_REQUEST['cod']) && is_numeric($_REQUEST['cod'])) {
    $cod = intval($_REQUEST['cod']);
    
    switch ($cod) {
        case 1:
            echo "<strong>Aries:</strong> Hoy los cambios serán físicos, personales, de carácter, Te sentirás impulsivo y tomarás iniciativas. Período en donde considerarás unirte a agrupaciones de beneficencia, o de ayuda a los demás.";
            break;
        case 2:
            echo "<strong>Tauro:</strong> Hoy los cambios serán privados, íntimos. Recuerdos. Ayuda, solidaridad. Asuntos en lugares de retiro. Tu cónyuge puede aportar buen status a tu vida o apoyo a tu profesión.";
            break;
        case 3:
            echo "<strong>Géminis:</strong> Los asuntos de hoy tienen que ver con las amistades, reuniones, actividades con ellos. Día esperanzado, ilusiones. Mucha energía sexual y fuerza emocional. Deseos difíciles de controlar.";
            break;
        case 4:
            echo "<strong>Cancer:</strong> Este día la profesión y las relaciones con superiores y con tu madre serán de importancia. Actividad en relación a estos temas. Momentos positivos con compañeros de trabajo. Actividad laboral agradable.";
            break;
        case 5:
            echo "<strong>Leo:</strong> Este día los estudios, los viajes, el extranjero y la espiritualidad serán lo importante. Pensamientos, religión y filosofía también. Vivencias kármicas de la época te vuelven responsable tomando decisiones.";
            break;
        case 6:
            echo "<strong>Virgo:</strong> Para este día toma importancia tu vida sexual, tal vez miedos, temas legales, juicios o herencias. Experiencias extrañas. Hay karma de prueba durante este período en tu parte psicológica, generándose algunos replanteos.";
            break;
        case 7:
            echo "<strong>Libra:</strong> Hoy todo asunto tiene que ver con tu pareja, también con socios, con la gente o el público. Ellos serán lo más importante del día. Ganancias a través de especulaciones o del juego. Actividades vocacionales artísticas.";
            break;
        case 8:
            echo "<strong>Escorpio:</strong> Hoy todo asunto tiene que ver con temas de trabajo y de salud. Presta atención a ambos. Experiencias diversas con compañeros. Durante este período tendrás muchos recursos para ganar dinero.";
            break;
        case 9:
            echo "<strong>Sagitario:</strong> Durante este día se vivirán cambios en relación a los noviazgos o a los hijos. Creatividad, actividad, diversiones y salidas. Período de encuentros con personas o situaciones que te impresionan.";
            break;
        case 10:
            echo "<strong>Capricornio:</strong> Los cambios del día tienen que ver con tu hogar, con la convivencia y con el padre. Asuntos relativos al carácter en la convivencia. El karma de responsabilidad de estos momentos te acercará al mundo de lo desconocido, mucha madurez y contacto con el más allá.";
            break;
        case 11:
            echo "<strong>Acuario:</strong> Hoy todo asunto tiene que ver con el entorno inmediato, hermanos y vecinos, con la comunicación, los viajes cortos o traslados frecuentes. El hablar y trasladarse será importante hoy. Mentalidad e ideas activas.";
            break;
        case 12:
            echo "<strong>Piscis:</strong> Durante este día se vivirán cambios en la economía, movimientos en los ingresos, negocios, valores. Momentos de gran fuerza y decisión profesionales, buscarás el liderazgo.";
            break;
        default:
            echo "Código de signo zodiacal no válido.";
    }
} else {
    echo "Código de signo zodiacal no proporcionado o no válido.";
}
?>
