<!DOCTYPE html>
<html>
<head>
<title>show</title>
</head>
<body>
    <?php
        include "db.php";
        $sql = "select * from book";
        $result = $mysql->query($sql);
        echo "<table border='1'>";
        $head = array("ลำดับ","รหัสหนังสือ","ชื่อหนังสือ","ประเภทหนังสือ","สถานะหนังสือ",
        "สำนักพิมพ์","ราคาหนังสือ","ราคาเช่าหนังสือ","จำนวนวัน","รูปภาพ","วันที่ซื้อ");
        echo "<tr>";
        foreach($head as $value){
            echo "<th>{$value}</th>";
        }
        echo "</tr>";
        
        if ($result->num_rows > 0) {
            $a = 1;
            while($rows = $result->fetch_array()){
                echo "<tr><td>{$a}</td>";
                for ($n=0;$n<10;$n++){
                    if($n==2)echo "<td>".CheckType($mysqli,$rows[$n])."</td>";
                    if($n==3)echo "<td>".CheckStatus($mysqli,$rows[$n])."</td>";
                }
            }
        }
    ?>
</body>
</html>