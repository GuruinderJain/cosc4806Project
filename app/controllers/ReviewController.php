<?php
class ReviewController extends Controller {
    public function addReview() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $movieId = $_POST['movieId'];
            $review = $_POST['review'];
            $stars = $_POST['stars'];
            $reviewModel = $this->model('Review');
            $reviewModel->addReview($movieId, $review, $stars);
            header("Location: index.php?controller=OMDBController&action=details&id=$movieId");
        }
    }
}
?>
