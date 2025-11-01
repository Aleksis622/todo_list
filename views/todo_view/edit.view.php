<?php require __DIR__ . '/../components/header.php'; ?>
<h1>Rediģēt ierakstu</h1>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
<form method="POST">
    <input type="text" name="content" value="<?= htmlspecialchars($post['content']) ?>">
    <button>Saglabāt</button>
</form>
<a href="/todo_list/">Atpakaļ</a>
<?php require __DIR__ . '/../components/footer.php'; ?>
