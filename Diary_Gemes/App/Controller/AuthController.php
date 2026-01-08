<?php

require_once 'config/Database.php';

class AuthController extends Database
{
    public function login()
    {
        if (isset($_POST['login'])) {

            $email    = trim($_POST['email']);
            $password = trim($_POST['password']);

            // ambil user berdasarkan email
            $query = mysqli_query(
                $this->conn,
                "SELECT * FROM users WHERE email = '$email' LIMIT 1"
            );

            if ($query && mysqli_num_rows($query) === 1) {

                $user = mysqli_fetch_assoc($query);

                // cek password (sesuai database kamu sekarang)
                if ($password === $user['password']) {

                    // simpan session user + role
                    $_SESSION['user'] = [
                        'id'    => $user['id'],
                        'nama'  => $user['nama'],
                        'email' => $user['email'],
                        'role'  => $user['role']
                    ];

                    // arahkan ke dashboard
                    header("Location: /diary_gemes/dashboard");
                    exit;
                }
            }

            // jika gagal
            echo "<p style='text-align:center;color:#ff5d8f;'>Login gagal 😭</p>";
        }
    }
}
