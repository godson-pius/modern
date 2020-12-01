<?php
require_once '../admin/inc/functions/config.php'; 

if(!empty($_POST["classid"])) 
{
 $cid=intval($_POST['classid']);
 if(!is_numeric($cid)){
 
 	echo htmlentities("invalid Class");exit;
 }
 else{
 $stmt = "SELECT name,id FROM students WHERE id = $cid order by name";
 $query = mysqli_query($link, $stmt);
 ?>
 <option value="">Select Category </option>
 <?php
 foreach($query as $student)
 {
  ?>
  <option value="<?php echo htmlentities($student['id']); ?>"><?php echo htmlentities($student['name']); ?></option>
  <?php
 }
}

}