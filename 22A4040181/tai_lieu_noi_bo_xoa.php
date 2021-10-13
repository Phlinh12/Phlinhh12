
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Giảng viên thêm mới</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('./config.php');


            // 2. Lấy ra ID tin tức mà các bạn muốn XÓA
            $tai_lieu_noi_bo_id = $_GET['id'];

            // 3. Viết câu lệnh truy vấn để XÓA TIN TỨC trong trong CSDL)
            $sql = "
                      DELETE 
                      FROM `tbl_tai_lieu_noi_bo` 
                      WHERE `tbl_tai_lieu_noi_bo`.`tai_lieu_noi_bo_id` = '".$tai_lieu_noi_bo_id."'
            ";

            // 4. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_tai_lieu_noi_bo = mysqli_query($ket_noi, $sql);

            // 5. Hiển thị ra thông báo các bạn đã thêm mới tin tức thành công và đẩy các bạn về trang quản trị tin tức
            echo "
                <script type='text/javascript'>
                    window.alert('Bạn đã xóa thông tin thành công');
                </script>
            ";
            //echo $sql; exit();
            echo "
                <script type='text/javascript'>
                    window.location.href='quan_tri_tai_lieu_noi_bo.php';
                </script>
            ";
        ;?>
    </body>
</html>
