<?php
require_once 'app/database.php';
require_once 'app/core/Config.php';

class Review {
    private function getDbConnection() {
        return db_connect();
    }

    public function getReviewsByMovieId($movieId) {
        $db = $this->getDbConnection();
        $stmt = $db->prepare("SELECT * FROM reviews WHERE movieId = ?");
        $stmt->execute([$movieId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addReview($movieId, $review, $stars) {
        $db = $this->getDbConnection();
        $stmt = $db->prepare("INSERT INTO reviews (movieId, review, stars) VALUES (?, ?, ?)");
        return $stmt->execute([$movieId, $review, $stars]);
    }
}
?>
