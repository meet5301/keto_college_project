<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $contact = $_POST["contact"];
    $equipment = $_POST["equipment"];
    $event_type = $_POST["event_type"];
    $food_type = $_POST["food_type"];
    $place = $_POST["place"];
    $number_people = $_POST["number_people"];
    $date = $_POST["date"];

    // Check if the date is already booked
    $checkQuery = "SELECT * FROM bookings WHERE date = ?";
    $stmt = $conn->prepare($checkQuery);
    $stmt->bind_param("s", $date);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<script>alert('This date is already booked. Please select another date.'); window.location.href='index.html';</script>";
    } else {
        // Insert booking into the database
        $insertQuery = "INSERT INTO bookings (name, contact, equipment, event_type, food_type, place, number_people, date)
                        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssssssis", $name, $contact, $equipment, $event_type, $food_type, $place, $number_people, $date);

        if ($stmt->execute()) {
            echo "<script>alert('Booking Successful!'); window.location.href='index.html';</script>";
        } else {
            echo "<script>alert('Error: Unable to book. Please try again.'); window.location.href='index.html';</script>";
        }
    }

    $stmt->close();
    $conn->close();
}
?>
