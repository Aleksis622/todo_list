<?php require __DIR__ . '/../components/header.php'; ?>
<h1>Izveidot ierakstu</h1>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="content" value="<?= $_POST['content'] ?? '' ?>">
    <button>Izveidot</button>
</form>
<?php require __DIR__ . '/../components/footer.php'; ?>
