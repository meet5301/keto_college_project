<?php
include 'db_connect.php';

$query = "SELECT * FROM bookings ORDER BY date ASC";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Booking Records</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        .container {
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Admin Panel - Booking Records</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Contact</th>
                <th>Equipment</th>
                <th>Event Type</th>
                <th>Food Type</th>
                <th>Place</th>
                <th>People</th>
                <th>Date</th>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['name']}</td>
                            <td>{$row['contact']}</td>
                            <td>{$row['equipment']}</td>
                            <td>{$row['event_type']}</td>
                            <td>{$row['food_type']}</td>
                            <td>{$row['place']}</td>
                            <td>{$row['number_people']}</td>
                            <td>{$row['date']}</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='9'>No bookings found.</td></tr>";
            }
            ?>

        </table>
    </div>

</body>
</html>

<?php
$conn->close();
?>
