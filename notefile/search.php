<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색결과</title>
    <link rel="stylesheet" href="css/search.css">
</head>
<body>
<?php
  include "db_init.php";
  include "header.php";
?>
    <div class="table_position">
        <h1>검색결과</h1> 
    
    <table border="1" class="table">
    <?php
        $search = $_POST['search'];

        $dsn = connect();

        $allnote_select = "SELECT noteid, member_id, title FROM note WHERE title LIKE '%".$search."%'";
        $allnote_select_stt = $dsn->prepare($allnote_select);
        $allnote_select_stt->execute();

        while($row = $allnote_select_stt->fetch(PDO::FETCH_ASSOC)){
            ?> 
            <tr rowspan="2">
                <th colspan="2" align="left" class="note" style="font-size: 30px; background-color: rgb(171, 128, 226);" onclick="location.href='allnoteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['member_id'] ?> </th>
            </tr>
            <tr>
                <td colspan="2" class="note" style="font-size: 24px" onclick="location.href='allnoteread.php?id=<?=$row['noteid']?>'"> <?php echo $row['title'] ?> </td>
            </tr>
            <?php
        }
    ?>      
    </table>
    </div>

</body>
</html>