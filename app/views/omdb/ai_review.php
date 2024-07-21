<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AI Review for <?php echo htmlspecialchars($data['movieTitle']); ?></title>
    <link rel="stylesheet" href="app/views/templates/styles.css">
</head>
<body>
<?php include 'app/views/templates/header.php'; ?>

<div class="container">
    <section class="card">
        <h1>AI Review for <?php echo htmlspecialchars($data['movieTitle']); ?></h1>
        <p><?php echo htmlspecialchars($data['aiReview']); ?></p>
        <a href="index.php?controller=OMDBController&action=details&id=<?php echo htmlspecialchars($data['movieId']); ?>">Back to Details</a>
    </section>
</div>

<?php include 'app/views/templates/footer.php'; ?>

</body>
</html>
