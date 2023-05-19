<pre>

    <?php
    
    print_r($_FILES);
    echo "<br>";


    // echo "<p> File Name: " . $_FILES['inputFile']['name'] . ".</p>";
    // echo "<p> File Type: " . $_FILES['inputFile']['type'] . ".</p>";
    // echo "<p> Temp File Loc: " . $_FILES['inputFile']['tmp_name'] . ".</p>";

 // making it bulletproof

    if(isset($_FILES['inputFile'])){
        echo "<p> File Info: </p>";
        echo "<p> File Name: " . $_FILES['inputFile']['name'] . ".</p>";
        echo "<p> File Type: " . $_FILES['inputFile']['type'] . ".</p>";
        echo "<p> Temp File Loc: " . $_FILES['inputFile']['tmp_name'] . ".</p>";
    }


    // accept only jpeg file type

    if($_FILES['inputFile']['type']=="image/jpeg"){
        echo "Jpeg file uploaded";
    } else {
        echo "Please upload a jpeg image.";
    }


    ?>

</pre>