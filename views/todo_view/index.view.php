<?php require __DIR__ . '/../components/header.php'; ?>
<h1>Visi ieraksti</h1>

<form method="GET" action="/todo_list/">
    <input type="text" name="search_query" placeholder="Meklēt..." value="<?= htmlspecialchars($_GET['search_query'] ?? '') ?>">
    <button>Meklēt</button>
</form>

<ul>
<?php foreach ($posts as $post): ?>
    <li>
        <?= htmlspecialchars($post['content']) ?>
        [<a href="/todo_list/show?id=<?= $post['id'] ?>">Skatīt</a>]
        [<a href="/todo_list/edit?id=<?= $post['id'] ?>">Rediģēt</a>]
        [<a href="/todo_list/delete?id=<?= $post['id'] ?>" onclick="return confirm('Dzēst?')">Dzēst</a>]
    </li>
<?php endforeach; ?>
<?php if(count($posts) === 0): ?>
    <li>Nav atrasts neviens ieraksts.</li>
<?php endif; ?>
</ul>

<?php require __DIR__ . '/../components/footer.php'; ?>
