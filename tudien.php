<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Từ điển</title>
</head>
<body>
    <h2> Từ Điển Anh-Việt </h2>
    <form method="post" >
        <input type="text" name="search" placeholder="nhập từ cần tìm">
        <input type="submit" id="submit" value="Tìm" >
        
    </form>
    <?php
            $dictionary = [
                    "hello" => "xin chào",
                    "how" => "thế nào", 
                    "book" => "quyển vở", 
                    "computer" => "máy tính"
            ];
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $searchWord = $_POST["search"];
            $flag = 0;
            foreach ($dictionary as $word => $description) {
                if ($word==$searchWord){
                    echo "Từ : ".$word.".<br/>Nghĩa của từ : " .$description;
                    echo "<br/>";
                    $flag = 1;
                }
               
            }
             if ($flag== 0){
                    echo "không tìm thấy từ cần tra.";
                }
        }
        ?> 
</body>
</html>