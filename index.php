<?php
/**
 * Copyright 2025 DomDev
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at:
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @author DomDev
 * @version 1.0.0
 * @license Apache-2.0
 */


<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $long_url = $conn->real_escape_string($_POST['long_url']);
    $custom_code = isset($_POST['custom_code']) ? $conn->real_escape_string($_POST['custom_code']) : '';
    $short_code = empty($custom_code) ? substr(md5(time()), 0, 6) : $custom_code;

    // Check if custom code already exists
    $check_query = "SELECT * FROM links WHERE short_code = '$short_code'";
    $check_result = $conn->query($check_query);

    if ($check_result->num_rows > 0) {
        echo "Error: Custom short code already in use!";
    } else {
        $query = "INSERT INTO links (long_url, short_code) VALUES ('$long_url', '$short_code')";
        $conn->query($query);

        echo "Shortened URL: <a href='redirect.php?code=$short_code'>yourdomain.com/$short_code</a>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>DomDev Shortlink</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Shorten a URL</h2>
    <form method="POST">
        <input type="text" name="long_url" class="form-control mb-2" placeholder="Enter URL" required>
        <input type="text" name="custom_code" class="form-control mb-2" placeholder="Custom Short Code (Optional)">
        <button type="submit" class="btn btn-success">Shorten</button>
    </form>
</body>
</html>