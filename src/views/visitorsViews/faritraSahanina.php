<?php
$title = 'Fiangonana';
$pageStyle = 'visitor-style.css';
ob_start();
?>
<section id="banner" class="major">
    <div class="inner">
        <header class="major">
            <h1>Ireo faritra sahinin'ny fiangonana</h1>
        </header>
        <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, fuga animi. Excepturi perspiciatis quas maxime odit molestias corporis consequuntur laboriosam cum minus ut magnam dicta ullam id quam, nesciunt totam!</p>
        </div>
    </div>
</section>
<main>
    <article class="py-5">
        <div class="container">
            <h1>Ireo faritra sahanin'ny fiangonana</h1>
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam sed nulla velit tempore labore ab itaque maiores, saepe voluptas numquam aliquid accusamus! Aliquid nisi aperiam odit a, est, atque vel quidem ipsa soluta corporis et quas quia inventore dolorum autem ut illo repellat nobis provident quaerat id laborum! Fugit asperiores expedita laborum sequi sapiente fuga eius quam, labore quasi neque sunt repellat quia necessitatibus a odit possimus sit mollitia omnis sed! Animi deleniti, incidunt repellat omnis deserunt earum voluptates ducimus, aut possimus quidem corporis sunt optio neque dicta et nulla nam mollitia expedita. Ratione voluptatibus officia repudiandae delectus sequi voluptatem blanditiis quibusdam odit, omnis provident at facere. Deserunt a mollitia veniam quod maxime odio expedita non maiores sequi ex, ea eius minima, doloribus repellendus, repudiandae dolorem culpa iste similique quisquam!</p>
            <p class="mb-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni illo hic perferendis suscipit. Velit, laboriosam quasi fugit sapiente saepe maxime nulla provident ad, incidunt temporibus similique, error delectus eligendi earum.
                :
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur.</li>
                    <li>Aspernatur esse incidunt nihil dolor repellendus?</li>
                    <li>Consequatur repudiandae dolorem recusandae aliquam eum.</li>
                    <li>Delectus voluptate neque provident labore voluptatem.</li>
                </ul>
            </p>
            <p class="mb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit, rem! Voluptatem impedit esse quibusdam doloribus quos temporibus, fugit totam est, sint minus ad neque accusantium earum laborum vel blanditiis illum corporis autem veniam animi accusamus voluptas nisi, consectetur corrupti. Totam esse sint tempora dicta mollitia, veritatis possimus voluptatum sed sunt ipsa dolorum molestiae sapiente! Sequi aut vel veniam, dolores hic veritatis debitis facilis earum exercitationem sunt eos magnam ipsam sint tempore nisi minus saepe quis molestias quam aspernatur quaerat mollitia natus voluptas! Voluptates ipsum laudantium nostrum cum, beatae pariatur dicta eum odio deserunt ratione natus praesentium illum eius mollitia, nisi rerum earum dolores repudiandae error minus amet! Quis saepe, tempore amet corporis officiis minus numquam delectus distinctio voluptas ipsa? Rerum commodi ipsa facilis officiis, accusamus neque enim magni cupiditate, veniam tenetur culpa laudantium nihil ex! Minus pariatur a assumenda ab, quos necessitatibus, illum blanditiis aliquid, consectetur eveniet cupiditate vero ipsam.</p>
            <h2 class="mb-3">Lorem</h2>
            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid magni debitis vero a exercitationem expedita, odio officia eveniet modi suscipit saepe accusamus omnis commodi quis asperiores quo ratione sequi aliquam doloribus obcaecati fuga? Reprehenderit est ullam, laboriosam eligendi vero nostrum dignissimos sint in illum, facilis iste iure nemo laudantium voluptates, repellat labore saepe harum aliquid magni earum. Odio, nisi. Suscipit, numquam doloribus aspernatur qui repellendus harum dolore, ipsum culpa ipsam eum exercitationem earum vitae odio! Facere quo beatae voluptatum explicabo magni autem tempora sint veritatis rem aut debitis sit laudantium nisi perferendis obcaecati, ipsam repudiandae totam reiciendis quibusdam eos vitae ipsum itaque? Sint eum nobis suscipit autem fuga sit, nihil saepe exercitationem ratione quo consequuntur. Ipsum distinctio iure autem nemo!</p>
            <p class="mb-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Error omnis itaque neque quis, necessitatibus quisquam culpa inventore saepe corrupti officiis odit quas dicta eveniet mollitia quo accusamus deleniti doloremque. Quis labore rem soluta maiores fugiat fuga, inventore molestiae magnam officia repellat adipisci nostrum pariatur! Totam numquam, inventore facilis eius vel distinctio optio ipsa! Reprehenderit rerum similique soluta iste eius ut at exercitationem quos sed, repudiandae voluptate pariatur libero quia quidem voluptatibus, porro doloremque? Sint exercitationem excepturi suscipit iste natus velit, explicabo asperiores quae aperiam optio fugit saepe, totam alias, eum ea? Accusamus amet praesentium, et quibusdam ad deserunt, suscipit assumenda possimus deleniti eum architecto maxime iusto consectetur, nostrum quam quidem!</p>
        </div>
    </article>
</main>

<?php
$pageContent = ob_get_clean();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'baseOfViews.php';
