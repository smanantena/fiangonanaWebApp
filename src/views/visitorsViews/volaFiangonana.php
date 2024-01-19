<?php
require_once dirname(__DIR__, 2) . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . 'DateRecuperation.php';
$title = 'Fiangonana';
$pageStyle = 'visitor-style.css';

$sundayDateReturn = DateRecuperation::sundayDateReturn();

$numberOfTitleSection;

function initNumberOfTitleSecction () :void
{
    $GLOBALS['numberOfTitleSecction'] = 1;
}

function incrementNumberOfTitleSection () :int
{
    return ++$GLOBALS['numberOfTitleSecction'];
}

ob_start();
?>
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Volan'ny fiangonana</h1>
        </header>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fuga animi. Excepturi perspiciatis quas maxime odit molestias corporis consequuntur laboriosam cum minus ut magnam dicta ullam id quam, nesciunt totam!</p>
        </div>
    </div>
</section>
<main class="pb-5">
    <section id="fintiny-vola-rehetra" class="py-5 bg-secondary">
        <div class="container">
            <h2 class="text-center text-light fw-bold text-uppercase mb-4">Fintin'ny vola niditra sy nivoaka</h2>
            <table class="table table-bordered text-center table-light">
                <thead>
                    <tr class="table-dark text-light">
                        <th>Daty</th>
                        <th>Vola niditra</th>
                        <th>Vola nivoaka</th>
                        <th>Vola an-tanana</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Janoary-Martsa</td>
                        <td>4 499 000 ar</td>
                        <td>400 000 ar</td>
                        <td>3 000 000 ar</td>
                    </tr>
                    <tr>
                        <td>Aprily-Jona</td>
                        <td>4 499 000 ar</td>
                        <td>400 000 ar</td>
                        <td>3 000 000 ar</td>
                    </tr>
                    <tr>
                        <td>Jolay-Septambra</td>
                        <td>4 499 000 ar</td>
                        <td>400 000 ar</td>
                        <td>3 000 000 ar</td>
                    </tr>
                    <tr>
                        <td>Oktobra-Desambra</td>
                        <td>4 499 000 ar</td>
                        <td>400 000 ar</td>
                        <td>3 000 000 ar</td>
                    </tr>
                </tbody>
                <tfoot></tfoot>
            </table>
        </div>
    </section>
    <section id="rakitra-farany" class="pb-5 bg-secondary">
        <div class="container">
            <h2 class="text-center mb-3 fs-4 text-light fw-bold">Tatitrin'ny rakitra ny alahady <?=$sundayDateReturn?></h2>
            <table class="table table-bordered text-center mb-5 bg-light">
                <thead>
                    <tr class="table-dark">
                        <th scope="col">Rakitra voalohany</th>
                        <th scope="col">Rakitra faharoa</th>
                        <th scope="col">Raki-pisaorana</th>
                        <th scope="col">Ampahafolon-karena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-info">
                        <th scope="row" colspan="4" class="text-center">Fidirana voalohany</th>
                    </tr>
                    <tr>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr class="table-info">
                        <th scope="row" colspan="4" class="text-center">Fidirana faharoa</th>
                    </tr>
                    <tr>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="table-info">
                        <th scope="row" colspan="4" class="text-center">Fitambarany</th>
                    </tr>
                    <tr class="table-dark fw-bold">
                        <td>900 000 ar</td>
                        <td>1 100 000 ar</td>
                        <td>50 000 ar</td>
                        <td>500 000 ar</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
    <section id="rakitra-rehetra" class="pt-5">
        <div class="container pt-5">
            <h2 class="text-center bg-secondary fw-bold text-light text-uppercase">Ireo vola niditra</h2>
            <h3 class="text-center mb-4">Tatitrin'ny rakitra rehetra hatramin'ny alahady <?=$sundayDateReturn?></h3>
            <table class="table table-bordered border-dark text-center">
                <thead>
                    <tr class="table-dark">
                        <th></th>
                        <th scope="col">Rakitra voalohany</th>
                        <th scope="col">Rakitra faharoa</th>
                        <th scope="col">Raki-pisaorana</th>
                        <th scope="col">Ampahafolon-karena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                    <tr>
                       <td colspan="5" class="table-secondary fw-bold">Alahady <?=$sundayDateReturn?></td> 
                    </tr>
                    <tr>
                        <th scope="row">Fidirana voalohany</th>
                        <td>500 000 ar</td>
                        <td>650 000 ar</td>
                        <td>50 000 ar</td>
                        <td>300 000 ar</td>
                    </tr>
                    <tr>
                        <th scope="row">Fidirana faharoa</th>
                        <td>400 000 ar</td>
                        <td>450 000 ar</td>
                        <td></td>
                        <td>200 000 ar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section id="vola-nivoaka" class="pt-5">
        <div class="container">
            <h2 class="text-center bg-secondary fw-bold text-light text-uppercase">Ireo vola nivoaka</h2>
            <h3 class="text-center mb-4">Ireo vola nivoaka ny andron'ny <?=$sundayDateReturn?></h3>
            <table class="table table-bordered text-center">
                <thead>
                    <tr class="table-dark text-light">
                        <th scope="col">Daty</th>
                        <th scope="col">Vola</th>
                        <th scope="col">Ny anton'ny namoahana ilay vola</th>
                        <th scope="col">Ny namoaka ilay vola</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>24/11/2023</td>
                        <td>40 000ar</td>
                        <td>Nanamboarana ny valopy</td>
                        <td>Hary (Mpiandraikitra ny fandrindrana ankapobeny)</td>
                    </tr>
                    <tr>
                        <td>22/11/2023</td>
                        <td>150 000ar</td>
                        <td>Karaman'ireo mpanao varavarana</td>
                        <td>Hary (Mpiandraikitra ny fandrindrana ankapobeny)</td>
                    </tr>
                    <tr>
                        <td>20/11/2023</td>
                        <td>150 000ar</td>
                        <td>Vidina jiro</td>
                        <td>Hary (Mpiandraikitra ny fandrindrana ankapobeny)</td>
                    </tr>
                    <tr>
                        <td>30/06/2023</td>
                        <td>40 000ar</td>
                        <td>Karaman'ireo nanadio sy nandoko babilio</td>
                        <td>Hary (Mpiandraikitra ny fandrindrana ankapobeny)</td>
                    </tr>
                    <tr>
                        <td>30/11/2023</td>
                        <td>40 000ar</td>
                        <td>Vidina loko natao tamin'ny dabilio</td>
                        <td>Hary (Mpiandraikitra ny fandrindrana ankapobeny)</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="table-primary fw-bold">
                        <td>Jona-Novambra 2023</td>
                        <td>420 000 ar</td>
                        <td colspan="2" class="text-uppercase">Fitambarany</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </section>
</main>

<?php
$pageContent = ob_get_clean();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'baseOfViews.php';
