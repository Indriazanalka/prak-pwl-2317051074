<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjJ5v5WaRU90FeRpok6YctnYmDrSpNlYt2Brjkh0JMHjY6hW+ALEWIH" 
          crossorigin="anonymous">
</head>
<body>
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-VycpYrf0Yt31HBG0NMkmXC5s9fDVZLESAAASSNDzOxhyg9CkIds1klen7N6jIeHz" 
            crossorigin="anonymous"></script>
</body>
</html>
