<?php
class AIReviewController extends Controller {
    public function generate() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $movieTitle = $_POST['movieTitle'];
            $movieId = $_POST['movieId'];
            $aiReviewModel = $this->model('AIReview');
            $aiReview = $aiReviewModel->getAIReview($movieTitle);
            $this->view('omdb/ai_review', ['movieTitle' => $movieTitle, 'aiReview' => $aiReview, 'movieId' => $movieId]);
        }
    }
}
?>
