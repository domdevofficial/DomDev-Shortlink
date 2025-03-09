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

$code = $_GET['code'];
$query = "SELECT long_url, clicks FROM links WHERE short_code='$code'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $conn->query("UPDATE links SET clicks = clicks + 1 WHERE short_code = '$code'");
    header("Location: " . $row['long_url']);
    exit();
} else {
    echo "Invalid URL!";
}
?>