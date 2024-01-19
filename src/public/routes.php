<?php

$routesStatics = [
    '/' => '../views/visitorsViews/homepage.php',
    '/toriteny' => '../views/visitorsViews/toriteny.php',
    '/fotoamBavaka' => '../views/visitorsViews/fotoamBavaka.php',
    '/tetiandro' => '../views/visitorsViews/tetiandro.php',
    '/sampana?sampana=tanora' => '../views/visitorsViews/sampanaTanora.php',
    '/sampana?sampana=ankizy' => '../views/visitorsViews/sampanaAnkizy.php',
    '/sampana?sampana=vehivavy' => '../views/visitorsViews/sampanaVehivavy.php',
    '/sampana?sampana=lehilahy' => '../views/visitorsViews/sampanaLehilahy.php',
    '/fanohanana' => '../views/visitorsViews/fanohanana.php',
    '/fiandohanNyFiangoanana' => '../views/visitorsViews/niandohany.php',
    '/faritraSahanina' => '../views/visitorsViews/faritraSahanina.php',
    '/nyMpiangona' => '../views/visitorsViews/nyMpiangona.php',
    '/fototraFiangonana' => '../views/visitorsViews/fototraFiangonana.php',
    '/nyFiasanAndriamanitra' => '../views/visitorsViews/nyFiasanAndriamanitra.php',
    '/nyTakianaAminFiangonana' => '../views/visitorsViews/nyTakianaAminFiangonana.php',
    '/nyFirenena' => '../views/visitorsViews/nyFirenena.php',
    '/baibolyFilazantsara' => '../views/visitorsViews/baibolyFilazantsara.php',
    '/baibolyEpistily' => '../views/visitorsViews/baibolyEpistily.php',
    '/baibolyBokinLalana' => '../views/visitorsViews/baibolyBokyLalana.php',
    '/baibolyMpaminany' => '../views/visitorsViews/baibolyBokyMpaminany.php',
    '/fiangonanaFiarahamiasa' => '../views/visitorsViews/fiangonanaFiarahamiasa.php',
    '/fiangonanaZanaPiangonana' => '../views/visitorsViews/fiangonanaZanaPiangonana.php',
    '/fiangonanaSosialy' => '../views/visitorsViews/fiangonanaSosialy.php',
    '/volaFiangonana' => '../views/visitorsViews/volaFiangonana.php',
    '/mpikambana' => '../views/users/login.php',
    '/mpikambana//fandraisana' => '../views/users/homepage.php',
];

$routesDynamics = [
    '/^\/user\?role=(?:admin|moderator|user|visitor)$/' => '../views/users/homepage.php',
];

$errorRoutes = [
    '/olana-teknika' => '../views/errors/errorsNotFound.php'
];

return [ $routesStatics, $routesDynamics,  $errorRoutes];
