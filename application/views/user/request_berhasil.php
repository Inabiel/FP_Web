<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bengkel Las Laras</title>
</head>

<body>
    <?php
  if ($this->session->userdata('role_id') == '') {
    redirect('auth/login');
  } ?>

    <?php $this->load->view("user/header") ?>
    <div class="container">
        <div class="alert alert-success">
            <h4 class="text-center align-middle">Request anda telah masuk. Mohon menunggu konfirmasi lewat Whatsapp</h4>
        </div>
    </div>
    <?php $this->load->view("user/footer") ?>
</body>

</html>