<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection
?>
<?php   $studentid  =$_GET['student_id'];
			 
			 $sql = " SELECT Student_Course.Course_Code, course.Course_Title, course.Credit_Unit from course,Student_Course where 
			 Student_Course.Student_ID ='$studentid' and course.Course_Code=Student_Course.Course_Code";
			 $result = $connect->query($sql);
			
if ($result->num_rows > 0) {
    $dbdata = array();
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $dbdata[]=$row;
	//echo "<tr>";
		//echo "<td>".$row["Course_Code"]."</td>";
		//echo "<td>".$row["Course_Title"]."</td>";
		//echo "<td>".$row["Credit_Unit"]."</td>";
	}
} else {
    echo "0 results";
}
//$data=json_encode($dbdata);
print_r(json_encode($dbdata, true));
//echo $data;
$connect->close();
?>
</table>	
</form>
</div>




