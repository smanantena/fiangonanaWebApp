<?php

use App\Database\Querries\UserQuerries;

// require_once dirname(__DIR__, 3) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';


if (isset($_SESSION['user-id'])) {
    if (in_array(intval($_SESSION['user-id']), UserQuerries::getUsersIds())) {
        header('Location:/mpikambana-fandraisana');
    } else {
        unset($_SESSION['user-id']);
        header('Location:/mpikambana');
    }
}

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = trim(htmlentities($_POST['email']));
    $password = trim(htmlentities($_POST['password']));

    if (!empty($email) && !empty($password)) {
        $userResult = [];
        try {

            $userResult = UserQuerries::getUserByEmail($email);
        } catch (Throwable $t) {
            echo '<pre>';
            echo $t->getMessage();
            echo '</pre>';
        }
        $user = (count($userResult)) ? $userResult : null;
        
        if (count($userResult) === 1) {
            
            if ($user[0]->verifyPassword($password)) {
                $_SESSION['user-id'] = $user[0]->getUser_id();
                header('Location:/mpikambana');
            } else {
                $message['password'] = "Diso ny teny miafina nampidirinao.";
            }
        } else {
            $message['email'] = "Diso ny email nampidirinao.";
        }
    } else if (empty($password)) {
        $message['password'] = "Tsy maintsy fenoina ny teny miafina nampidirinao.";
    } else if (empty($email)) {
        $message['email'] = "Tsy maintsy fenoina ny email nampidirinao.";
    } else {
        $message['both'] = "Tsy maintsy fenoina ny email sy ny teny miafina vao afaka ny iditra ianao.";
    }
} else {
    $message['both'] = "Tsy maintsy fenoina ny email sy ny teny miafina vao afaka ny iditra ianao.";
}

$title = "Miditra amin'ny faritra voatokana";
ob_start();
?>
<section class="py-5">
    <div class="container py-5">
        <h1>Ampidiro ary famantarana anao ho mpikambana</h1>
        <?php
        if (isset($message['both'])) {
            echo "<p class=\"alert alert-danger\">{$message['both']}</p>";
        }
        ?>
        <form method="post">
            <div class="fields">
                <div class="field">
                    <?php
                    if (isset($message['email'])) {
                        echo "<p class=\"alert alert-danger\">{$message['email']}</p>";
                    }
                    ?>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" <?= (isset($email)) ? 'value="' . $email . '"' : '' ?>>
                </div>
                <div class="field">
                    <?php
                    if (isset($message['password'])) {
                        echo "<p class=\"alert alert-danger\">{$message['password']}</p>";
                    }
                    ?>
                    <label for="password">Teny miafina</label>
                    <input type="password" name="password" id="password">
                </div>
            </div>
            <ul class="actions">
                <li><input type="submit" name="submit" value="Alefa" class="primary"></li>
            </ul>
        </form>
    </div>
</section>
<?php
$pageContent = ob_get_clean();
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'layouts' . DIRECTORY_SEPARATOR . 'baseOfViews.php';
?>