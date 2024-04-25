<?php
include('include/config.php');
if (!empty($_POST["specilizationid"])) 
{
    $sql = mysqli_query($connect,"SELECT doctorName, id FROM doctors WHERE specilization='".$_POST['specilizationid']."'");
    ?>
    <option selected="selected">Chọn Bác sĩ</option>
    <?php
    while ($row = mysqli_fetch_array($sql))
    {
        ?>
        <option value="<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['doctorName']); ?></option>
        <?php
    }
}

if (!empty($_POST["doctor"])) 
{
    $sql = mysqli_query($connect,"SELECT docFees FROM doctors WHERE id='".$_POST['doctor']."'");
    while ($row = mysqli_fetch_array($sql))
    {
        ?>
        <option value="<?php echo htmlentities($row['docFees']); ?>"><?php echo htmlentities($row['docFees']); ?></option>
        <?php
    }
}
?>
