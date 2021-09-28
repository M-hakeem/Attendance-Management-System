<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mohak_qratt";
$connect = new mysqli($servername, $username, $password, $dbname );
// Check connection
?>
<?php   $studentid =trim($_GET['student_id']," ");
			 
 $sql = "
SELECT Attendance.Course_Code, (count(Attendance.StudentID)/2)  as AttCount 
from Attendance INNER JOIN Student_Course where  
Attendance.Course_Code=Student_Course.Course_Code and Student_Course.Student_ID = Attendance.StudentID and Attendance.StudentID='$studentid'
 group by Course_Code;";
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
print_r(json_encode($dbdata,true));
//echo $data;
$connect->close();
?>
</table>	
</form>
</div>




