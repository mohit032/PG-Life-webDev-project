# PG-Life
A Full stack web development Project "PG Life"

# Database connectivity
- Create databse in phpmyadmin with the same name of give SQL file name.
- In that database import database.
- Import given SQL file to the database.

#Changes in code on your system -
- In file 'includes/database_connect.php':-

    $conn = mysqli_connect("localhost", "username_of_phpmyadmin", "password_of_phpmyadmin", "Database_name(PGLife)");
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL! Please contact the admin.";
    return;
