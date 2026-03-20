<?php
$page_title = "Contact";
include "partials/head.php";
include "partials/header.php";
?>

<div class="pt-32 text-center text-white">
    <h1 class="text-5xl font-bold">Notes Page</h1>
    <p class="mt-4 text-gray-400">Pagina vuota</p>
        <?php foreach ($notes as $note) : ?>
            <li>
                <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 hover:underline">
                    <?= $note['content'] ?>
                </a>
            </li>
        <?php endforeach; ?>
</div>

<?php include "partials/footer.php"; ?>