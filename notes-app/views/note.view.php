<?php
$page_title = "Contact";
include "partials/head.php";
include "partials/header.php";
?>

<div class="pt-32 text-center text-white">
    <h1 class="text-5xl font-bold mb-4">Single Note</h1>
<?php
    echo "<li>" . $note['content'] . "</li>";
?>

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

</div>

<?php include "partials/footer.php"; ?>