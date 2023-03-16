<?php
  include('config.php');
// รับค่าจาก jQuery
$design = $_POST['design'];

// เช็คว่าทั้ง 3 ช่องต้องไม่เป็นค่าว่าง
if(!empty($design)){
    $sql = "SELECT * FROM design WHERE design_id ='$design'";
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
   
}
?>
