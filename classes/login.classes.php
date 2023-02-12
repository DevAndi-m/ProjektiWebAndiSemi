<?php

class Login extends Dbh {

    protected function getUser($username, $psw) {

        $stmt = $this->connect()->prepare('SELECT users_psw FROM users WHERE users_username = ? OR users_email = ?;');
        $array = [$username, $username];
        if (!$stmt->execute($array)) {
            $stmt = null;
            header("location: ../signUp.php?error=stmtfailed");
            exit();
        }

        if ($stmt->rowCount() == 0) {
            $stmt = null;
            header("location: ../login.php?error=usernotfound");
            exit();
        }

        $pswHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPsw = password_verify($psw, $pswHashed[0]["users_psw"]);

        if ($checkPsw == false) {
            $stmt = null;
            header("location: ../login.php?error=incorrectpassword");
            exit();
        } elseif ($checkPsw == true) {
            $stmt = $this->connect()->prepare('SELECT * FROM users WHERE (users_username = ? OR users_email = ?) AND users_psw = ?;');
            $array = [$username, $username, $pswHashed[0]["users_psw"]];

            if (!$stmt->execute($array)) {
                $stmt = null;
                header("location: ../signUp.php?error=stmtfailed");
                exit();
            }

            if ($stmt->rowCount() == 0) {
                $stmt = null;
                header("location: ../login.php?error=usernotfound");
                exit();
            }

            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION["userid"] = $user[0]["users_id"];
            $_SESSION["username"] = $user[0]["users_username"];
            $_SESSION["email"] = $user[0]["users_email"];

            $stmt = null;
        }

        $stmt = null;
    }

}
