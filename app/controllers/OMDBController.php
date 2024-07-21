<?php
class OMDBController extends Controller {
    public function index() {
        // Render the initial search page
        $this->view('omdb/index');
    }

    public function find($title = '') {
        // Load the OMDB model
        $omdbModel = $this->model('OMDB');

        // Perform the search using the model
        $results = $omdbModel->fetchMoviesByTitle($title);

        // Pass the results to the view
        $this->view('omdb/index', ['movies' => $results]);
    }

    public function details($id) {
        // Load the OMDB model
        $omdbModel = $this->model('OMDB');

        // Fetch the movie details using the model
        $movieDetails = $omdbModel->fetchMovieDetails($id);

        // Pass the details to the view
        $this->view('omdb/details', ['movie' => $movieDetails]);
    }
}
?>
