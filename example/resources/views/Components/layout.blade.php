<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
         <a href="/students">Students</a>
          <a href="/teachers">Teachers</a>
           <a href="/users">Users</a>
    </nav>
    <!-- <h1>Hello from the Home Page</h1> -->

    <?php echo $slot; ?>
    
    <!-- {{$slot}} -->
</body>
</html>