<?php
    echo $this->session->userdata('name');
    
?>
<?php foreach ($blog as $val){ ?>
    <h1><?php echo $val->title;?></h1>
    <li><?php echo $val->time;?></li>
    <p><?php echo $val->content;?></p>
    <hr/>
<?php } ?>
