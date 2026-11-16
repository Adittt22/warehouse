
    <?php
    include "koneksi.php";

    if (isset($_POST["submit"])) {

        $username = $_POST["username"];
        $password = $_POST["password"];

        $stmt = mysqli_prepare(
            $koneksi,
            "SELECT * FROM user WHERE username = ? and password =?"
        );

        mysqli_stmt_bind_param($stmt, "ss", $username,$password);
        mysqli_stmt_execute($stmt);

        $data = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($data) > 0) {
            header("Location: dashboard.php");
            exit;
        } else {
            echo "Login tidak berhasil!";
        }
    }
    ?>