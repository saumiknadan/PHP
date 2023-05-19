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
        echo "Jpeg file uploaded <br>";
    } else {
        echo "Please upload a jpeg image.<br>";
    }


    // move_uploaded_file
    // moves a uploaded file to a new location

    $target = $_FILES['inputFile']['tmp_name'];

    $destination = 'uploads/' . $_FILES['inputFile']['name'];

    $is_file_moved = move_uploaded_file($target,$destination);

    if ($is_file_moved) {
        echo "File moved successfully";
    }else {
        echo "File not moved";
    }




    ?>

</pre>