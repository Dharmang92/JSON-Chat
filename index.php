<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dharmang Gajjar</title>
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.6.2/tailwind.min.css">
</head>

<body>
    <div class="title text-4xl mx-6 my-2">JSON Chat</div>
    <form action="index.php" method="POST">
        <input type="text" name="message" size="40" class="rounded mx-4 my-1 p-2 shadow border bg-gray-100" />
        <input type="submit" value="Chat" class="p-2 bg-blue-400 mr-2 rounded hover:bg-blue-500 cursor-pointer" />
        <input type="submit" value="Reset" class="p-2 bg-red-200 rounded hover:bg-red-400 cursor-pointer" />
    </form>
    <div class="chatcontent">
        <img src="https://anatomised.com/wp-content/uploads/2016/05/spinner-test4.gif" alt="spinner.gif" class="w-24 m-8" />
    </div>
</body>
<script>
    // $(document).ready();
</script>

</html>