<?php include 'app/views/templates/header.php'; ?>
<section>
    <h1><?php echo htmlspecialchars($data['movie']['Title']); ?></h1>
    <?php if (!empty($data['movie']['Poster']) && $data['movie']['Poster'] != 'N/A'): ?>
        <img src="<?php echo htmlspecialchars($data['movie']['Poster']); ?>" alt="Poster of <?php echo htmlspecialchars($data['movie']['Title']); ?>">
    <?php endif; ?>
    <p><strong>Year:</strong> <?php echo htmlspecialchars($data['movie']['Year']); ?></p>
    <p><strong>Released:</strong> <?php echo htmlspecialchars($data['movie']['Released']); ?></p>
    <p><strong>Genre:</strong> <?php echo htmlspecialchars($data['movie']['Genre']); ?></p>
    <p><strong>Website:</strong> <?php if (!empty($data['movie']['Website']) && $data['movie']['Website'] != 'N/A'): ?>
        <a href="<?php echo htmlspecialchars($data['movie']['Website']); ?>"><?php echo htmlspecialchars($data['movie']['Website']); ?></a>
    <?php else: ?>
        N/A
    <?php endif; ?></p>
    <a href="index.php">Back to Search</a>

</section>
<?php include 'app/views/templates/footer.php'; ?>