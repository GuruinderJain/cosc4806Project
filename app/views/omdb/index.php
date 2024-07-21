<?php include 'app/views/templates/header.php'; ?>
<section>
    <h1>Movie Database</h1>
    <form action="index.php" method="get">
        <input type="hidden" name="controller" value="OMDBController">
        <input type="hidden" name="action" value="find">
        <input type="text" name="title" placeholder="Enter movie title" required>
        <button type="submit">Search</button>
    </form>
    <?php if (isset($data['movies'])): ?>
        <h2>Results:</h2>
        <ul>
            <?php foreach ($data['movies'] as $movie): ?>
                <li>
                    <a href="index.php?controller=OMDBController&action=details&id=<?php echo $movie['imdbID']; ?>">
                        <?php echo $movie['Title']; ?> (<?php echo $movie['Year']; ?>)
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</section>
<?php include 'app/views/templates/footer.php'; ?>