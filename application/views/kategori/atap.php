<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php $this->load->view("user/header") ?>
    <?php foreach($atap as $atp){
        echo $atp->nama;
    }?>
    <?php $this->load->view("user/footer") ?>
</body>

</html>