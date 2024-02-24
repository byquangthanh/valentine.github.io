<?php
// Check if data has been sent from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'dateInput' element exists in the $_POST array
    if (isset($_POST["dateInput"])) {
        // Get the date value from the form
        $dateValue = $_POST["dateInput"];

        // Continue processing the data and write to a text file here
        $filename = "data.txt";
        $file = fopen($filename, "a") or die("Unable to open file!");
        fwrite($file, "Date: " . $dateValue . "\n");
        fclose($file);

        // Redirect to food.html after successfully writing data
        header("Location: ../food.html");
        exit(); // Ensure no PHP or HTML code is added after the header()
    } else {
        // If 'dateInput' element is not found in $_POST array, display error message
        echo "No 'dateInput' data sent from the form!";
    }
} else {
    // Display message if no data is sent from the form
    echo "No data sent from the form!";
}
?>
