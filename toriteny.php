<?php
    require_once 'layouts/headerPart.php';
    require_once 'controllers/DateRecuperation.php';

    $sundayDateReturn = DateRecuperation::sundayDateReturn();
?>

<main>
    <section id="toriteny-farany" class="pb-5">
        <div class="bg-secondary" style="height: 300px;"></div>
        <div class="container py-5">
            <div class="row">
                <article class="col-9">
                    <section>
                        <h1 class="mb-4 text-uppercase fw-bold">Toriteny ny alahady <?= $sundayDateReturn; ?></h1>
                        <h2 class="display-6">Miorena amin'ny finoana. <strong class="d-block text-muted small">Rom. 12. 1-5</strong></h2>
                        <p class="py-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, facilis veritatis consequuntur sit ut nemo libero similique iure corrupti voluptatum laudantium error cumque sint et quos. Odio placeat quis commodi.</p>
        
                        <h3 class="mt-5">Miorena eo anivon'ny fianarana</h3>
                        <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsa perferendis eveniet, quibusdam odit ex dicta consectetur excepturi aspernatur aperiam ab unde ducimus quisquam, non nesciunt architecto ullam doloremque quis assumenda nulla. Nam excepturi nulla dolorum consectetur eligendi! Eveniet rem eum autem vel expedita sint. Nisi a reiciendis debitis? Explicabo quas pariatur, sed quisquam nulla temporibus rem? Eius maiores eaque adipisci obcaecati, architecto quis impedit sapiente quos, eos reiciendis quaerat nisi nesciunt, sed non aperiam tempore ab. Dolorum, iste magni!</p>
                        
                        <h3 class="mt-5">Miorena eo anivon'ny asa</h3>
                        <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsa perferendis eveniet, quibusdam odit ex dicta consectetur excepturi aspernatur aperiam ab unde ducimus quisquam, non nesciunt architecto ullam doloremque quis assumenda nulla. Nam excepturi nulla dolorum consectetur eligendi! Eveniet rem eum autem vel expedita sint. Nisi a reiciendis debitis? Explicabo quas pariatur, sed quisquam nulla temporibus rem? Eius maiores eaque adipisci obcaecati, architecto quis impedit sapiente quos, eos reiciendis quaerat nisi nesciunt, sed non aperiam tempore ab. Dolorum, iste magni!</p>
                        
                        <h3 class="mt-5">Miorena eo anivon'ny fiaraha-monina</h3>
                        <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ipsa perferendis eveniet, quibusdam odit ex dicta consectetur excepturi aspernatur aperiam ab unde ducimus quisquam, non nesciunt architecto ullam doloremque quis assumenda nulla. Nam excepturi nulla dolorum consectetur eligendi! Eveniet rem eum autem vel expedita sint. Nisi a reiciendis debitis? Explicabo quas pariatur, sed quisquam nulla temporibus rem? Eius maiores eaque adipisci obcaecati, architecto quis impedit sapiente quos, eos reiciendis quaerat nisi nesciunt, sed non aperiam tempore ab. Dolorum, iste magni!</p>
                    </section>
                    <section id="author-of-toriteny">
                        <h2 class="fs-6 fw-bold text-uppercase text-decoration-underline">Ny nitory ny Teny : </h2>
                        <p>Ny mpitandrina - <strong>Randriantsoa Manoa</strong></p>
                    </section>
                </article>
                <aside class="col-3">
                    <div class="bg-secondary text-light rounded mb-4">
                        <h4 class="fs-5 bg-dark text-light p-2 text-uppercase text-center rounded-top fw-bold">Fialaharana araka ny daty</h4>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-1" data-bs-toggle="dropdown" aria-expanded="false">Janoary 2023</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-1">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 janoary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 janoary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 janoary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 janoary</a></li>
                            </ul>
                        </section>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-2" data-bs-toggle="dropdown" aria-expanded="false">Febroary 2023</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-2">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 febroary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 febroary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 febroary</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 febroary</a></li>
                            </ul>
                        </section>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-3" data-bs-toggle="dropdown" aria-expanded="false">Martsa 2023</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-3">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 martsa</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 martsa</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 martsa</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 martsa</a></li>
                            </ul>
                        </section>
                    </div>
                    
                    <div class="bg-secondary text-light rounded">
                    <h4 class="fs-5 bg-dark text-light p-2 text-uppercase text-center rounded-top fw-bold">Fizarana araka ny lohahevitra</h4>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-1" data-bs-toggle="dropdown" aria-expanded="false">Ny finoana</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-1">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 janoary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 janoary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 janoary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 janoary 2023</a></li>
                            </ul>
                        </section>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-2" data-bs-toggle="dropdown" aria-expanded="false">Ny fitondrantena</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-2">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 febroary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 febroary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 febroary 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 febroary 2023</a></li>
                            </ul>
                        </section>
                        <section class="dropdown text-center">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="button-dropdwon-3" data-bs-toggle="dropdown" aria-expanded="false">Ny Fanjakan'Andriamanitra</button>
                            <ul class="dropdown-menu" aria-labelledby="button-dropdwon-3">
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">04 martsa 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">11 martsa 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">18 martsa 2023</a></li>
                                <li><a class="dropdown-item" href="http://<?= $_SERVER['SERVER_NAME'] ?>/fiangonana/toriteny.php">25 martsa 2023</a></li>
                            </ul>
                        </section>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php
    require_once 'layouts/footerPart.php';
?>