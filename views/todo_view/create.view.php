<?php require __DIR__ . '/../components/header.php'; ?>

<h1>Izveidot ierakstu</h1>
<?php if (!empty($error)) echo "<p class='error'>$error</p>"; ?>

<form method="POST">
    <input type="text" name="content" placeholder="Jauns ieraksts..." value="<?= $_POST['content'] ?? '' ?>">
    <button>Izveidot</button>
</form>

<?php require __DIR__ . '/../components/footer.php'; ?>
