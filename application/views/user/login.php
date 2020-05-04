<?php $this->load->view('template/headerHome'); ?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">	
<div class="container" style="padding: 10px 400px 30px 400px;" >
    <div class="row">
        <div class="col text-center" >
            <h1 class="text-center" style="padding: 10px 40px 30px 40px;">LOGIN PAGE</h1>
            <div class="form-group">
                <input type="text" name="username_admin" class="form-control" placeholder="Username" required autofocus>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-danger btn-block">Login</button>
        </div>
    </div>
</div>
</form>

