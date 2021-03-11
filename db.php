<style>
table, th, td {
    border: 1px solid black;
}
</style>
<?php
    define('hostname','localhost');
    define('user','root');
    define('password','');
    define('dbname','bookstore');
?>

<?php
    $mysql = new mysqli(hostname,user,password,dbname);
    if($mysql -> connect_error){
        echo "felied to connect to MySQL:".$mysqli -> connect_error;
        exit();
    }else{
        echo "connect sucsess";
    }
    
    $conn = "SELECT * FROM `book` where '1'";
    $result = mysqli_query($mysql, $conn);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>BookID</th><th>BookName</th><th>TypeID</th>
        <th>StatusID</th><th>Publish</th><th>UnitPrice</th><th>UnitRent</th>
        <th>DayAmount</th><th>Picture</th><th>BookDate</th></tr>";
        while($row = $result->fetch_assoc()){
        echo "<tr><td> " .$row["BookID"]."</td><td>" .$row["BookName"]
                ."</td><td>" .$row["TypeID"]."</td><td>" .$row["StatusID"]
                ."</td><td>" .$row["Publish"]."</td><td>" .$row["UnitPrice"]
                ."</td><td>" .$row["UnitRent"]."</td><td>" .$row["DayAmount"]
                ."</td><td>" .$row["Picture"]."</td><td>" .$row["BookDate"];
        }
    }

    
    
?>