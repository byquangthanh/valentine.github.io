<?php
// Check if data has been sent from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'dessert' element exists in the $_POST array
    if (isset($_POST["dessert"])) {
        // Get a list of selected items from the form
        $selectedDesserts = $_POST["dessert"];

        // Open or create a text file to write
        $filename = "data.txt";
        $file = fopen($filename, "a") or die("Unable to open file!");

        // Write each selected item to the "data.txt" file
        foreach ($selectedDesserts as $dessert) {
            fwrite($file,"Dessert: " . $dessert . "\n");
        }

        // Close the text file
        fclose($file);

        // Redirect the user after successfully saved
        header("Location: ../activities.html");
        exit();
    } else {
        // Show notification if no item is selected from the form
        echo "No item selected from the form!";
    }
} else {
    // Show notification if no data is sent from the form
    echo "No data sent from the form!";
}
?>
