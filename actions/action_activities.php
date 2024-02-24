<?php
// Checks if the data has been sent from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Checks if the 'activities' element exists in the $_POST array
    if (isset($_POST["activities"])) {
        // Get a list of selected items from the form
        $selectedActivities = $_POST["activities"];

        // Open or create a text file to write
        $filename = "data.txt";
        $file = fopen($filename, "a") or die("Unable to open file!");

        // Save each selected item to the "data.txt" file
        foreach ($selectedActivities as $activity) {
            fwrite($file,"Activity: " . $activity . "\n");
        }

        // Close Text File
        fclose($file);

        // User redirection after successfully saved
        header("Location: ../lastpage.html");
        exit();
    } else {
        // Show notification if none of the items are selected from the form
        echo "No item selected from the form!";
    }
} else {
    // Show notification if no data is sent from the form
    echo "No data sent from the form!";
}
?>
