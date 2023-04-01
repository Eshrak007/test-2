<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Author</th> 
        </tr>
        <?php
        foreach($books as $book){
            echo '<tr>
            <td><a href="index.php?book='.$book->title.'">'.$book->title.'</a></td>
            <td>'.$book->description.'</td>
            <td>'.$book->author.'</td>
            </tr>';
        }
        ?>
    </table>
</body>
</html>