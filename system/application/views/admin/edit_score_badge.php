<h2 class="headingclass" >Score and Badge Management </h2>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="86%" height="40"><span class="header"><a href="<?=site_url(ADMIN_PATH.'/admin')?>">ADMIN</a> >><a href="<?=site_url(ADMIN_PATH.'/score_badge_management')?>"> Score and Badge Management</a> >> Edit Score and Badge 
	 </span></td>
    <td><a href=""><img src="<?=base_url()?>images/admin_images/arrow.gif" width="17" height="15" border="0" /></a> <a href=""><span class="bodytext">Back</span></a></td>
  </tr>
</table>
<hr />
<table width="100%"  border="0">
  <tr>
    <td width="34%" >[ <a href="<?=site_url(ADMIN_PATH.'/score_badge_management')?>"><strong> View Scores and Badge </strong></a>]</td>
    <td width="42%" height="35">&nbsp;</td>
    <td width="24%" valign="top">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <td colspan="2">
<table width="100%" border="0" cellspacing="0" cellpadding="4" >
	<tr>
		<td> 
		</td>
	</tr>
	
</table>

<form name="frm_banner" method="post" enctype="multipart/form-data"  action="<?=site_url(ADMIN_PATH.'/score_badge_management/update_score_badge/')?>">
<table width="80%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#999999">
    <tr> 
      <td align="center" valign="top" bgcolor="#FFFFFF">
	  <table width="95%" border="0" cellspacing="1" cellpadding="4" >
          <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Level Name<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<input name="level_name" type="text" class="comment" value="<?=$score_badge_info->level_name?>" size="50"></td>
          </tr>
          
          <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Quiz Type<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<select name="quiz_type">
				<option value="hard" <? if($score_badge_info->quiz_type=="hard") echo "selected"; ?>>Hard</option>
				<option value="average" <? if($score_badge_info->quiz_type=="average") echo "selected"; ?>>Average</option>
				<option value="easy" <? if($score_badge_info->quiz_type=="easy") echo "selected"; ?>>Easy</option>
			</select>
            </td>
          </tr>
          
		  <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Threshold Score<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<input name="threshold_score" type="text" id="threshold_score"  size="5" maxlength="30" value="<?=$score_badge_info->threshold_score?>">
			
			</td>
          </tr>
          <tr> 
            <td align="right" valign="middle" class="title_content_block"><span class="cat_block1">Badge Image</span><span class="style1">*</span></td>
            <td align="left" valign="middle" class="title_content_block">
			<?php 
			if($score_badge_info->badge_image!="") { ?>
	    <img class="imgproduct" src="<?=base_url()."badge_images/".$score_badge_info->badge_image?>" width="50">
		<?  } ?><br />
			<input name="badge" type="file" id="badge"  size="30" maxlength="30">
            <input type="hidden" name="hdbadge_image" value="<?=$score_badge_info->badge_image?>" />
			</td>
          </tr>
         
             <input type="hidden" name="id" value="<?=$score_badge_info->id?>" /> 
          <tr align="center"> 
            <td align="right" class="cat_block1">&nbsp; </td>
            <td align="left" valign="middle" class="cat_block1">
			<input type="submit" name="Submit" value="Submit" class="bttn"  style="width:70px"> 
			</td>
          </tr>
          <tr align="right"> 
            <td colspan="2" class="err">&nbsp;</td>
          </tr>
        </table>
	  </td>
    </tr>
  </table>
 </form>
      </td>
    </tr>
  </table>



