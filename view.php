<?php
include "config.php";
$sql = "SELECT FROM users";
$result = $conn->query($sql);
?>

<?php
    include "config.php";
    echo '<style>
      .container {
        max-width: 1200px;
        margin: 0 auto;
        background-color: #f5f5f5;
        padding: 20px;
        border-radius: 10px;
      }
    
      .table {
        width: 100%;
        border-collapse: collapse;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
    
      .table th, .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
    
      .table th {
        background-color: #3498db;
        color: #fff;
      }
    
      .table tr:hover {
        background-color: #f2f2f2;
      }
    </style>';

    try { $sql = "SELECT FROM users";
        $stat = $conn->prepare($sql);
        $stat->execute();
        
        echo "<div class='container'>";

        echo "<table class='table'>";
        
        echo "<thead>";
        
        echo "<tr>";
        
        echo "<th>ID</th>";
        
        echo "<th>FIRST NAME</th>";
        
        echo "<th>LAST NAME</th>";
        
        echo "<th>E-MAIL</th>";
    
        echo "<th>GENDER</th>";
        
        echo "<th>CITY</th>";
        
        echo "</tr>";
        
        echo "</thead>";
        
        echo "<tbody>";
        
        while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        
        echo "<tr>";
        
        echo "<td>".$row['id']."</td>";
        
        echo "<td>".$row['firstname']."</td>";
        
        echo "<td>".$row['lastname']."</td>";
        
        echo "<td>".$row['email']."</td>";
        
        echo "<td>".$row['gender']."</td>";
        
        echo "<td>".$row["city"],"</td>";
        }
        echo "</tr>";
        
        echo "</tbody>";
        
        echo "</table>";
        
        echo "</div>";  
        }
        
        catch(PDOException $e){
            echo "Error : " .$e->getMessage();
        }
        $conn = null;
        ?>

