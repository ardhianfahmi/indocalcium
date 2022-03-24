<html>

<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
</head>

<body>
    <?= form_open() ?>
    <table>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="email" name="subject" placeholder="Email Anda.."></td>
        </tr>
        <tr>
            <td>Subject</td>
            <td>:</td>
            <td><input type="text" name="subject" placeholder="Subject Email.."></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><textarea name="Pesan" cols="30" rows="10p" placeholder="Tulis pesan disini.."></textarea></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="Submit" name="submit_email" placeholder="Subject Email.."></td>
        </tr>
    </table>
    <?= form_close() ?>
</body>

</html>