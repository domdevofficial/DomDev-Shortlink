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

include 'config.php';

$result = $conn->query("SELECT * FROM links ORDER BY created_at DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>DomDev Shortlink - Admin Panel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Admin Panel - Manage Shortlinks</h2>
    <table class="table table-striped">
        <tr>
            <th>Short Code</th>
            <th>Original URL</th>
            <th>Clicks</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><a href="redirect.php?code=<?php echo $row['short_code']; ?>"> <?php echo $row['short_code']; ?> </a></td>
                <td><?php echo $row['long_url']; ?></td>
                <td><?php echo $row['clicks']; ?></td>
                <td><a href="delete.php?code=<?php echo $row['short_code']; ?>" class="btn btn-danger">Delete</a></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>