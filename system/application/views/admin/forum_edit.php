<h2 class="headingclass" >Forum : Add a Discussion</h2>
<script type="text/javascript">
//$(function(){alert('in')});
function dochange(id)
{
    if(id!='')
        jQuery('#sub_category').load('<?=base_url()?>admin/forum/forum_get_subcategory_options',{pid:id});
    else
        jQuery('#sub_category').html('<select><option value="">- Sub Category -</option></select>');
}
</script>


<?php if(isset($action) && $action=='edit'){
	$path=site_url(ADMIN_PATH.'/forum/forum_edit/');
}else {
	$path=site_url(ADMIN_PATH.'/forum/forum_add/');
}?>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td width="86%" height="40"> <span class="header"><a href="<?=site_url(ADMIN_PATH.'/home')?>">ADMIN</a>
      >>Forum Management >> Add Forum </span></td>
    <td><a href="javascript:history.back();"> <img src="<?= base_url()?>images/admin_images/arrow.gif" width="17" height="15" border="0" /> </a> <a href="javascript:history.back();" class="blue_bold"><span class="bodytext">BACK</span></a></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center"><span style='color:red;'><?php if($this->session->userdata('message')) echo $this->session->userdata('message') ; $this->session->unset_userdata('message'); ?></span></td>
  </tr>
  
<?php if($this->session->flashdata('category_error')) {
    echo "<div class='message'>".$this->session->flashdata('category_error')."</div>";
}
?>
</table>

<form name="form1" method="post" action="<?=site_url(ADMIN_PATH.'/forum/forum_edit_save')?>" onsubmit="return formValidation()">
  <table width="100%"  border="0" cellspacing="2" cellpadding="1">
    <tr>
        
      <td>Discussion Title </td>
   
      <td><input type="text" name="discussion_title"  value="<?=$forum_info[0]['discussion_title'];?>"/></td>
    </tr>
    <tr>
	  <td>Category</td>
      <td colspan="">
	  <select onchange="dochange(this.value);" name="cat_id">
	  						<option value="">- Select Category -</option>
                                                        <?php $categories = $this->Forum_category_model->get_all_categories('0');
                                                        if($categories) {
                                                        foreach($categories as $rows) {?>
                                                        <option value="<?=$rows->id;?>" <?php if($forum_info[0]['cat_id']==$rows->id){echo 'selected="selected"';}?>><?=$rows->name?></option>
                                                        <?php } } ?>
	  </select></td>
    </tr>



    <tr>
      <td><div>
        <div>
          <label>Sub Category</label>
        </div>
      </div></td>
      
      <td colspan="3"><div id="sub_category" ><select name="sub_cat_id">
                                                        <?php $sub_categories = $this->Forum_category_model->get_sub_categories($forum_info[0]['cat_id']);
                                                        if($sub_categories) {
                                                        foreach($sub_categories as $rows) {?>
                                                        <option value="<?=$rows->id;?>" <?php if($forum_info[0]['sub_Cat_id']==$rows->id){echo 'selected="selected"';}?>><?=$rows->name?></option>
                                                        <?php } } ?>
	  </select></div>&nbsp;</td>
    </tr>
    <tr>
      <td><label>Tags</label></td>
      <td colspan="3"><input type="text" name="tags" value="<?=$forum_info[0]['tags']?>" />&nbsp;</td>
    </tr>
    <tr>
      <td>Detail</td>
      <td colspan="3"><textarea name="content" rows="10" cols="40"><?=$forum_info[0]['discussion_title'];?></textarea>&nbsp;</td>
    </tr>
    <tr>
      <td>Make This Discussion sticky</td>
      <td><input type="checkbox" name="sticky" value="1" <? if($forum_info[0]['sticky']==1) echo 'checked="checked"';?>/></td>
      
    </tr>
    <tr>
        <td>Set Sticky Position</td>
    <td><select name="sticky_position" id="sticky_position">
            <? echo$forum_info[0]['sticky_position'];?>
        
    <option value="1" <?php if($forum_info[0]['sticky_position']==1){echo 'selected="selected"';}?>>1</option>
    <option value="2" <?php if($forum_info[0]['sticky_position']==2){echo 'selected="selected"';}?>>2</option>
    <option value="3" <?php if($forum_info[0]['sticky_position']==3){echo 'selected="selected"';}?>>3</option>
    <option value="4" <?php if($forum_info[0]['sticky_position']==4){echo 'selected="selected"';}?>>4</option>
    <option value="5" <?php if($forum_info[0]['sticky_position']==5){echo 'selected="selected"';}?>>5</option>
    <option value="6" <?php if($forum_info[0]['sticky_position']==6){echo 'selected="selected"';}?>>6</option>
    <option value="7" <?php if($forum_info[0]['sticky_position']==7){echo 'selected="selected"';}?>>7</option>
    <option value="8" <?php if($forum_info[0]['sticky_position']==8){echo 'selected="selected"'; }?>>8</option>
    <option value="9" <?php if($forum_info[0]['sticky_position']==9){echo 'selected="selected"';}?>>9</option>
    <option value="10" <?php if($forum_info[0]['sticky_position']==10){echo 'selected="selected"';}?>>10</option>
    </select></td>
  </tr>
       
    <tr>
      <td width="25%">&nbsp;</td>
      <td width="30" colspan="3"><p>
      <input type="hidden" name="disc_id"  value="<?=$forum_info[0]['disc_id'];?>" />
	    <input type="submit" name="submit" value="Submit">

      </p>      </td>
    </tr>
    
  </table>
</form>