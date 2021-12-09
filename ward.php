<?php
 include("./db/conect.php");

    $key = $_POST["districid"];
    $qry = $conn->query("SELECT * FROM ward WHERE districtid = '$key'");
    while($row= $qry->fetch_assoc()):
?>
    <option value="<?php echo $row['wardid'] ?>"><?php echo $row['name'] ?></option>
<?php endwhile; ?>