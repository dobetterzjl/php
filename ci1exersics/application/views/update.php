<base href="<?php echo site_url();?>">
<form method="post" action="blog/upact">
    <input type="hidden" name="hid" value="<?php echo $up->blogid;?>">
    <input name="title" type="text" value="<?php echo $up->title;?>"><br/>
    <textarea name="con" cols="30" rows="10"><?php echo $up->content;?></textarea><br/>
    <input type="submit" name="sub" value="更改">

</form>