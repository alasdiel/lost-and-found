<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel and MySQL Database Connection</title>
</head>
<body>
    <div>
    <?php
        if (DB::connection()->getPdo()){
            echo "Successfully connected to DB and DB name is: ".DB::connection()->getDatabaseName();
        }
        else{
            echo "Database not found.";
        }
    ?>
    </div>
</body>
</html>