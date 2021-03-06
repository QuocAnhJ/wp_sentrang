<?php

if ( !is_admin() ) 
{
    echo 'Direct access not allowed.';
    exit;
}

global $wpdb;

$cpid = 'CP_CFTE';
$plugslug = $this->menu_parameter;

if ( 'POST' == $_SERVER['REQUEST_METHOD'] && isset( $_POST[$cpid.'_post_edition'] ) )
    echo "<div id='setting-error-settings_updated' class='updated settings-error'> <p><strong>Settings saved.</strong></p></div>";

if ($_GET["item"] == 'js')
    $saved_contents = base64_decode(get_option($cpid.'_JS', ''));
else if ($_GET["item"] == 'css')
    $saved_contents = base64_decode(get_option($cpid.'_CSS', ''));

?>
<div class="wrap">
<h1>Customization / Edit Page</h1>  



<input type="button" name="backbtn" value="Back to items list..." onclick="document.location='admin.php?page=<?php echo $plugslug; ?>';">
<br /><br />

<form method="post" action="" name="cpformconf"> 
<input name="<?php echo $cpid; ?>_post_edition" type="hidden" value="1" />
<input name="cfwpp_edit" type="hidden" value="<?php echo $_GET["item"]; ?>" />
   
<div id="normal-sortables" class="meta-box-sortables">

<?php if ($_GET["item"] == 'css') { ?>
    You can add custom CSS rules into this area (NO need to place the &lt;style&gt;&lt;/style&gt; tags). For ideas about useful styles check the <a href="https://form2email.dwbooster.com/faq#design">design section of the FAQ</a>.<br /><br />
<?php } else if ($_GET["item"] == 'js') { ?>
     You can add custom scripts into this area (NO need to place the &lt;script&gt;&lt;/script&gt; tags).<br /><br />
<?php }  ?>

<textarea name="editionarea" id="editionarea" style="width:100%" rows="20"><?php echo $saved_contents; ?></textarea> 
  
</div> 


<p class="submit"><input type="submit" name="submit" id="submit" class="button-primary" value="Save Changes"  /></p>


</form>
</div>













