<?php include 'app/views/templates/header.php'; ?>
<div class="container">
    <section class="card">
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
    <section class="card">
        <h2>Reviews</h2>
        <?php foreach ($data['reviews'] as $review): ?>
            <div class="review">
                <p><?php echo htmlspecialchars($review['review']); ?></p>
                <p>Stars: <?php echo htmlspecialchars($review['stars']); ?></p>
            </div>
        <?php endforeach; ?>
    </section>
    <section class="card">
        <h2>Add a Review</h2>
        <form action="index.php?controller=ReviewController&action=addReview" method="post">
            <input type="hidden" name="movieId" value="<?php echo htmlspecialchars($data['movie']['imdbID']); ?>">
            <div>
                <label for="review">Review:</label>
                <textarea name="review" id="review" required></textarea>
            </div>
            <div>
                <label for="stars">Stars:</label>
                <select name="stars" id="stars" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <button type="submit">Submit Review</button>
        </form>
    </section>
</div>
<?php include 'app/views/templates/footer.php'; ?>