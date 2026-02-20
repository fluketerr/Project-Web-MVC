<html>

<head></head>

<body>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
    <?php include 'header.php' ?>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->

    <!-- ส่วนแสดงผลหลักของหน้า -->
    <main>
        <h1><?= $data['title'] ?></h1>
    </main>
    <!-- ส่วนแสดงผลหลักของหน้า -->

    <section>
        <h2>ติดต่อเรา</h2>
        <form method="POST">
            <label>ชื่อ</label><br>
            <input type="text" name="name" /><br>
            <label>อีเมล</label><br>
            <input type="email" name="email" /><br>
            <label>ข้อความ</label><br>
            <textarea rows="4" name="message"></textarea><br>
            <button type="submit">ส่งข้อความ</button>
        </form>
    </section>

    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
    <?php include 'footer.php' ?>
    <!-- Header และ Footer อาจแยกออกเป็นไฟล์แยกต่างหากได้ -->
</body>

</html>