<?php
$page_title = "Contact";
include base_path("views/partials/head.php");
include base_path("views/partials/header.php");
?>

<div class="pt-32 text-center text-white">
    <h1 class="text-5xl font-bold mb-4">Single Note</h1>
<?php
    echo "<li>" . $note['content'] . "</li>";
?>

        <p class="mb-6">
            <a href="/notes" class="text-blue-500 underline">go back...</a>
        </p>

        <form class="mt-6" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?>">
            <button class="text-sm text-red-500">Delete</button>
        </form>

</div>

<?php include base_path("views/partials/footer.php"); ?>