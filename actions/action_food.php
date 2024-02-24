<?php
// Check if data has been sent from the form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the 'food' element exists in the $_POST array
    if (isset($_POST["food"])) {
        // Get the list of selected items from the form
        $selectedFood = $_POST["food"];
        
        // Open a text file for writing
        $filename = "data.txt";
        $file = fopen($filename, "a") or die("Unable to open file!");

        // Save each selected item to the "data.txt" file
        foreach ($selectedFood as $food) {
            fwrite($file, "Food: " . $food . "\n");
        }
        
        // Close the text file
        fclose($file);

        // Redirect the user after successful save
        header("Location: ../dessert.html");
        exit();
    } else {
        // Display a message if no item is selected from the form
        echo "No item selected from the form!";
    }
} else {
    // Display a message if no data is sent from the form
    echo "No data sent from the form!";
}
?>
