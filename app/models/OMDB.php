<?php
class OMDB {
    private $apiKey;

    public function __construct() {
        $this->apiKey = getenv('OMDB_API_KEY'); 
    }

    public function fetchMoviesByTitle($title) {
        // Construct the API URL
        $apiUrl = "http://www.omdbapi.com/?s=" . urlencode($title) . "&apikey=" . $this->apiKey;

        // Fetch the response from the API
        $apiResponse = file_get_contents($apiUrl);

        // Decode the JSON response
        $decodedResponse = json_decode($apiResponse, true);

        // Return the 'Search' key from the response array
        return isset($decodedResponse['Search']) ? $decodedResponse['Search'] : [];
    }

    public function fetchMovieDetails($id) {
        // Construct the API URL
        $apiUrl = "http://www.omdbapi.com/?i=" . urlencode($id) . "&apikey=" . $this->apiKey;

        // Fetch the response from the API
        $apiResponse = file_get_contents($apiUrl);

        // Decode the JSON response
        return json_decode($apiResponse, true);
    }
}
?>
