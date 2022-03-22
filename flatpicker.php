<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <title>Datepick</title>
</head>

<body>

<div class="mb-0">
    <label for="" class="form-label">Solid background style</label>
    <input type="date" class="form-control form-control-solid" placeholder="Pick a date"/>
</div>

<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
   

    <script>
      
      config ={dateFormat: "d-m-Y"}
       flatpickr("input[type=date]", config);

    </script>
</body>

</html>