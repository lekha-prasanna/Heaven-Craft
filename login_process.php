<?php
include 'config.php'; // Includes database connection and starts session

header('Content-Type: application/json'); // Respond with JSON

$response = ['success' => false, 'message' => 'An unknown error occurred.'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password']; // Raw password from form

    // Basic server-side validation
    if (empty($username) || empty($password)) {
        $response['message'] = 'Please fill in both username and password.';
    } else {
        // Prepare a select statement to find the user by username
        $stmt = $conn->prepare("SELECT id, username, password_hash FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($id, $db_username, $password_hash);
            $stmt->fetch();

            // Verify password
            if (password_verify($password, $password_hash)) {
                // Password is correct, so start a new session
                $_SESSION['loggedin'] = true;
                $_SESSION['id'] = $id;
                $_SESSION['username'] = $db_username;

                // Log the login attempt (optional, using login_data table)
                $ip_address = $_SERVER['REMOTE_ADDR'];
                $user_agent = $_SERVER['HTTP_USER_AGENT'];
                $log_stmt = $conn->prepare("INSERT INTO login_data (user_id, ip_address, user_agent) VALUES (?, ?, ?)");
                $log_stmt->bind_param("iss", $id, $ip_address, $user_agent);
                $log_stmt->execute();
                $log_stmt->close();

                $response['success'] = true;
                $response['message'] = 'Login successful!';
            } else {
                $response['message'] = 'Invalid username or password.';
            }
        } else {
            $response['message'] = 'Invalid username or password.';
        }
        $stmt->close();
    }
    $conn->close();
} else {
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>