<?php
  include('config.php');
// รับค่าจาก jQuery
$frabic = $_POST['frabic'];
if(!empty($frabic)){
$sql = "SELECT * FROM frabic WHERE frabic_id =$frabic";
$qeury = mysqli_query($conn,$sql);
    // กำหนดตัวแปรไว้เก็บข้อมูลที่ค้นหาได้
    $search_data = array();
    // วนลูปค้นหาข้อมูล
    while($result = mysqli_fetch_assoc($qeury)){
        // เก็บข้อมูลที่ค้นหาได้ลงตัวแปร
        $search_data[] = $result;
    }
    // ทดสอบแสดงผลลัพธ์ที่ค้นเจอ
    /*
    echo "<pre>";
    print_r($search_data);
    echo "</pre>";
    */
    // แสดงข้อมูลออกเป็น JSON Data
echo json_encode($search_data);

}$conn->close();
?>
