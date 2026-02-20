<html>

<head></head>

<body>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
    <?php include 'header.php' ?>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main>
        <h1> <?= $data['title'] ?></h1>
        <?php 
            if ($data['courses'] != []) {
	        while ($row = $data['courses']->fetch_object()) {
	        ?>
	            <?= $row->course_id ?>
                <?= $row->course_name ?>
                <?= $row->course_code ?>
                <?= $row->instructor ?>
                <br>
	     <?php
	        }
        }
        ?>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
    <?php include 'footer.php' ?>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
</body>

</html>