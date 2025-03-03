<?php

    session_start();

    if(!isset($_SESSION['username']))
    {
    header("location:login.php");
    }

    elseif($_SESSION['usertype']=='student')
    {
    header("location:login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="Styles/admin.css">
</head>
<body>

    <header class="header">
        <a href="">Admin Dashboard</a>

        <div class="logout">
            <a href="logout.php" class="btn btn-primary">Logout</a>
        </div>
    </header>

    <aside>
        <ul class="sidebar_links">
            <li>
                <a href="">Admission</a>
            </li>
            <li>
                <a href="">Add Student</a>
            </li>
            <li>
                <a href="">View Student</a>
            </li>
            <li>
                <a href="">Add Teacher</a>
            </li>
            <li>
                <a href="">View Teacher</a>
            </li>
            
        </ul>
    </aside>

<div class="dashboard-container">
    <h1 class="dashboard-title">Welcome to the Admin Dashboard</h1>
    <p class="dashboard-description">
        Welcome to the <strong>Admin Dashboard</strong>, your central hub for managing users, admissions, and records efficiently. 
        As an administrator, you have full control over student and teacher management, admissions, and system settings.
        <br><br>
        Use the sidebar to <strong>navigate through different sections:</strong>
        <ul>
            <li><strong>Admissions:</strong> Process and review new student applications.</li>
            <li><strong>Add & View Students:</strong> Register new students and manage their details.</li>
            <li><strong>Add & View Teachers:</strong> Assign and manage teaching staff.</li>
        </ul>
        Stay organized and ensure smooth operations with this intuitive interface. If you need assistance, feel free to reach out to support. 🚀
    </p>
</div>



</body>
</html>