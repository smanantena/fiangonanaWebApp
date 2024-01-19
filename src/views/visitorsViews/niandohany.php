<?php
$title = 'Fiandohan\'ny fiangonana';
$pageStyle = 'visitor-style.css';
ob_start();
?>
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Tany am-piadohana</h1>
        </header>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fuga animi. Excepturi perspiciatis quas maxime odit molestias corporis consequuntur laboriosam cum minus ut magnam dicta ullam id quam, nesciunt totam!</p>
        </div>
    </div>
</section>
<main>
    <article>
        <section class="py-5">
            <div class="container">
                <h1 class="mb-4">Ny niandohan'ity fiangonana ity.</h1>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae consequatur, quis aliquid quaerat totam soluta id error! Dolore laboriosam veniam, et quod itaque pariatur accusantium animi, quasi optio rerum voluptatem consequuntur sit odit iure eveniet fuga sed quam placeat! Reiciendis quod rem tempore facilis quibusdam minus assumenda deleniti, obcaecati et nostrum consectetur delectus molestias quo saepe! Quasi explicabo, exercitationem autem culpa repellendus praesentium velit consequatur cumque nisi illo et molestias quod aut perspiciatis rem nihil delectus vel impedit. Alias fuga pariatur consequuntur debitis sint. Maxime autem animi praesentium, modi dolorem minima dolores odit, cum perspiciatis earum, debitis quam libero voluptas? Quas, assumenda mollitia? Repudiandae corrupti velit adipisci pariatur at earum consequatur et sit! Numquam blanditiis minima dicta obcaecati! Debitis maxime magni enim quaerat! Itaque mollitia autem quidem delectus accusantium officiis.</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid vero cum praesentium hic dolorem fugiat quo suscipit enim deserunt natus. Inventore dolorum aliquid delectus exercitationem. Debitis reiciendis explicabo error, dolores veniam, quaerat excepturi nihil earum nobis eveniet quidem accusantium? Nam, quas totam odit error laborum id quia eaque et laudantium voluptatibus natus earum unde autem provident veniam facilis possimus voluptas, repudiandae dolorum culpa. Illo iusto aliquid unde, laudantium aut suscipit consectetur temporibus ipsa! Totam, provident repellendus excepturi optio soluta ducimus ut doloribus veritatis architecto, adipisci repellat laboriosam quibusdam aut molestiae aspernatur at velit necessitatibus minima nam! Ea similique sint laudantium?</p>
            </div>
        </section>
        <section class="py-5">
            <div class="container">
                <h2 class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio velit veniam, est nisi sapiente id similique hic possimus quis reiciendis, laudantium, corporis doloremque explicabo rerum cupiditate ab delectus minima quo provident ipsam ad consequuntur. Quidem perspiciatis dicta quia velit! Eos ullam quis possimus rerum, reiciendis consequatur voluptatum earum sapiente magnam praesentium tenetur laudantium aut enim itaque. Minima porro corrupti, nobis eligendi laborum natus modi quis suscipit exercitationem culpa. Laudantium quos, iure mollitia maxime sapiente consequatur. A harum accusamus eum voluptatum sequi officia aliquam rem libero, ab enim, ipsa sed autem nihil recusandae, numquam quisquam placeat eos rerum ut nemo ducimus inventore minima iste! Eveniet, consequatur eos recusandae distinctio eius provident deleniti dolores. Laborum facere omnis officia, quam dignissimos voluptate debitis!</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti distinctio dignissimos suscipit laboriosam velit omnis illo iure voluptatum voluptates unde, quibusdam sit alias repellendus tenetur voluptate, itaque libero fuga fugiat molestiae et nisi nemo? Nulla debitis libero magni molestiae. Odio, porro? Odio aspernatur distinctio dicta minima sit voluptatum, voluptatem corporis ipsum repellat hic aliquam qui esse nihil quaerat quis laudantium veniam recusandae sint. Cum illum omnis ad culpa odio alias aut? Atque distinctio nostrum molestias corrupti libero fuga fugiat nobis tenetur? Architecto accusantium impedit quam tempora libero necessitatibus provident, aspernatur soluta suscipit officiis sequi dicta a amet eos veniam numquam ipsum fuga modi ut, animi in eligendi. Rem ad cumque voluptatum inventore accusamus suscipit doloribus dolorem rerum voluptate nihil libero labore praesentium ea exercitationem assumenda reiciendis earum pariatur neque autem nulla, explicabo iure amet impedit dolore. Esse maxime suscipit maiores sapiente minus rerum dolor magni eaque delectus quibusdam, omnis impedit?</p>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi provident, nobis magnam quas velit non amet eos esse? Quos modi corrupti quas suscipit numquam voluptatibus tempore tempora ea earum laboriosam, cum assumenda. Asperiores tempore id autem aliquid eos quas eius sequi vero. Enim omnis tenetur in, quis ipsa minima, maxime quia necessitatibus ea perferendis molestias, veritatis voluptates? Ipsum magni facilis fugit obcaecati neque laborum distinctio eligendi explicabo ullam tempore qui provident exercitationem ratione repudiandae quod a porro vitae incidunt natus iure, nemo ipsam atque eaque. Earum, nobis commodi voluptatem reprehenderit quisquam distinctio laborum a libero neque veritatis aspernatur minima qui. Sed vitae et reprehenderit ducimus, hic ex eaque repellendus iste. Possimus nemo perspiciatis incidunt cum exercitationem, id et sapiente.</p>
            </div>
        </section>
    </article>
</main>

<?php
$pageContent = ob_get_clean();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'baseOfViews.php';
