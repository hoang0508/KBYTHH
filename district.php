

<?php
 include("./db/conect.php");

    $key = $_POST["provicesid"];
    $qry = $conn->query("SELECT * FROM district WHERE provinceid = '$key'");
    while($row= $qry->fetch_assoc()):
?>
    <option value="<?php echo $row['districtid'] ?>"><?php echo $row['name'] ?></option>
<?php endwhile; ?>
   
    
