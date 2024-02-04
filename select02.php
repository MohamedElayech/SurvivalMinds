<?php
    include("select01.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
<script >
    let loc = document.getElementById('location').value;
    let varloc = <?php echo json_encode($sql); ?>;
    
    if(!(loc===varloc)){
        alert.style.display="hidden";
    }
</script>
<script src="assets/js/news.js"></script>
</html>