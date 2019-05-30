<?php
include_once 'dbconfig.inc.php';

function connect()
{
    global $server, $database, $dbusername, $dbpassword;
    try {
        $connection = new PDO("mysql:host=$server; dbname=$database", $dbusername, $dbpassword);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connection;
    } catch (PDOException $exception) {
        echo "Error encountered: " . $exception->getMessage();
        return NULL;
    }
}

function addUser($role_id, $firstName, $lastName, $email, $password)
{
    try {
        $connection = connect();
        $statement = $connection->prepare("INSERT INTO users(role_id, firstName, lastName, email, password) 
          VALUES (:role_id, :firstName, :lastName, :email, :password)");
        $statement->bindParam(":role_id", $role_id);
        $statement->bindParam(":firstName", $firstName);
        $statement->bindParam(":lastName", $lastName);
        $statement->bindParam(":email", $email);
        $hashedPassword = hash('sha256', $password);
        $statement->bindParam(":password", $hashedPassword);
        $statement->execute();
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

function addUserValidate($email, $password, $confirmPassword, $firstName, $lastName)
{
    $errorList = array();
    if (strlen($password) < 8) {
        array_push($errorList, "Password should be at least 8 characters.");
    }
    if ($password != $confirmPassword) {
        array_push($errorList, "Passwords does not match.");
    }
    if (preg_match('/[^a-zA-Z\s-]/i', $firstName)) {
        array_push($errorList, "Invalid first name");
    }
    if (preg_match('/[^a-zA-Z\s-]/i', $lastName)) {
        array_push($errorList, "Invalid last name");
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        array_push($errorList, "Invalid email address");
    }
    if (!empty($errorList)) {
        return $errorList;
    } else {
        return NULL;
    }
}

function addUserVerifyInput($email)
{
    $errorList = array();
    try {
        $statement = $connection->prepare("SELECT * FROM users WHERE email = :email");
        $statement->bindParam(":email", $email);
        $statement->execute();
        if (!empty($statement->fetch())) {
            array_push($errorList, "Email Address is already taken.");
        }

        if (!empty($errorList)) {
            return $errorList;
        } else {
            return NULL;
        }
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

function loginAdmin($email, $password)
{
    try {
        $connection = connect();
        $statement = $connection->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
        $statement->bindParam(":email", $email);
        $hashedPassword = hash('sha256', $password);
        $statement->bindParam(":password", $hashedPassword);
        $statement->execute();
        if ($loggedUser = $statement->fetch()) {
            $userID = $loggedUser['id'];
            $detail = "$email logged in to the system.";
            recordAudit($connection, $userID, 2, $detail);
            return $loggedUser;
        } else {
            return NULL;
        }
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

function logoutAdmin($id, $email)
{
    try {
        $connection = connect();
        $detail = "$email logged out.";
        recordAudit($connection, $id, 3, $detail);
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

function recordAudit($connection, $userID, $auditTypeID, $details)
{
    try {
        $statement = $connection->prepare("INSERT INTO Audit(userID, auditTypeID, details) VALUES (:userID, :auditTypeID, :details)");
        $statement->bindParam(":userID", $userID);
        $statement->bindParam(":auditTypeID", $auditTypeID);
        $statement->bindParam(":details", $details);
        $statement->execute();
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

function selectAudits()
{
    try {
        $connection = connect();
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $connection->query("SELECT auditID, type, email, details, audit.created_at FROM Audit 
          LEFT JOIN users ON audit.userID = users.id
          LEFT JOIN auditType ON audit.auditTypeID = auditType.auditTypeID
          ORDER BY created_at DESC");
        $statement->setFetchMode(PDO::FETCH_ASSOC);
        $audits = $statement->fetchAll();
        if (!empty($audits)) {
            return $audits;
        } else {
            return NULL;
        }
    } catch (PDOException $exception) {
        die("Error: " . $exception->getMessage());
    }
}

?>