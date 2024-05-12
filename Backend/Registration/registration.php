<?php
include '/xampp/htdocs/Recyclemart/Database/conn.php';

$conn = connection();

$username = $password = $contact_number = $address = $full_name = "";
$username_err = $address_err = $password_err = $contact_number_err = $full_name_err = $confirm_password_err = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Username validation
    if (empty(trim($_POST["sign-in-username"]))) {
        $username_err = "Please enter a username.";
    } else {
        $username = trim($_POST["sign-in-username"]);
    }

    // Password validation
    if (empty(trim($_POST["sign-in-password"]))) {
        $password_err = "Please enter a Password.";
    } else {
        $password = trim($_POST["sign-in-password"]);
    }

    // Confirm Password validation
    if (empty(trim($_POST["confirm-password"]))) {
        $confirm_password_err = "Please confirm your password.";
    } else {
        $confirm_password = trim($_POST["confirm-password"]);
        if ($password != $confirm_password) {
            $confirm_password_err = "Passwords do not match.";
        }
    }

    // Contact Number validation
    if (empty(trim($_POST["contact-number"]))) {
        $contact_number_err = "Please enter a contact number.";
    } else {
        $contact_number = trim($_POST["contact-number"]);
    }

    // Full Name validation
    if (empty(trim($_POST["full-name"]))) {
        $full_name_err = "Please enter your full name.";
    } else {
        $full_name = trim($_POST["full-name"]);
    }

    // Address validation
    if (empty(trim($_POST["address"]))) {
        $address_err = "Please enter your address.";
    } else {
        $address = trim($_POST["address"]);
    }

    $sql_check = "SELECT id FROM user_account WHERE username = ?";
        if ($stmt_check = $conn->prepare($sql_check)) {
            $stmt_check->bind_param("s", $param_username_check);
            $param_username_check = $username;
            $stmt_check->execute();
            $stmt_check->store_result();
            if ($stmt_check->num_rows > 0) {
                // Username already exists
                echo "Username is already taken.";
            } else {
                if (empty($username_err) && empty($full_name_err) && empty($password_err) && empty($address_err) && empty($contact_number_err) && empty($confirm_password_err)) {
                    $sql = "INSERT INTO user_account (name, username, password, current_address, contact_number) VALUES (?, ?, ?, ?, ?)";
            
                    if ($stmt = $conn->prepare($sql)) {
                        $stmt->bind_param("sssss", $param_name, $param_username, $param_password, $param_address, $param_contact_number);
                        $param_name = $full_name;
                        $param_username = $username;
                        $param_password = $password;
                        $param_address = $address;
                        $param_contact_number = $contact_number;
            
                        if ($stmt->execute()) {
                            echo "Registration successful.";
                        }
                    } 
            
                } else {
                    echo "$username_err:$full_name_err:$password_err:$address_err:$contact_number_err:$confirm_password_err";
                }
            
                $conn->close();
            }
        }
}
?>