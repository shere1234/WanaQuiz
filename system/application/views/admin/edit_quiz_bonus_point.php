<h2 class="headingclass" >Quiz Bonus Point Management</h2>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="86%" height="40"><span class="header"><a href="<?=site_url(ADMIN_PATH.'/admin')?>">ADMIN</a> >><a href="<?=site_url(ADMIN_PATH.'/score_badge_management/quiz_bonus_points')?>"> Quiz Bonus Point Management</a> >> Edit Quiz Bonus Point
	 </span></td>
    <td><a href=""><img src="<?=base_url()?>images/admin_images/arrow.gif" width="17" height="15" border="0" /></a> <a href=""><span class="bodytext">Back</span></a></td>
  </tr>
</table>
<hr />
<table width="100%"  border="0">
  <tr>
    <td width="34%" >[ <a href="<?=site_url(ADMIN_PATH.'/score_badge_management/quiz_bonus_points')?>"><strong> View Quiz Bonus Points </strong></a>]</td>
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

<form name="frm_banner" method="post" action="<?=site_url(ADMIN_PATH.'/score_badge_management/update_quiz_bonus_point/')?>">
<table width="80%" border="0" align="center" cellpadding="1" cellspacing="1" bgcolor="#999999">
    <tr> 
      <td align="center" valign="top" bgcolor="#FFFFFF">
	  <table width="95%" border="0" cellspacing="1" cellpadding="4" >
          <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Questions answered in a row<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<input name="question_answered_in_row" type="text" class="comment" value="<?=$quiz_bonus_point_info->question_answered_in_row?>" size="5"></td>
          </tr>
          
          <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Quiz Type<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<select name="quiz_type">
				<option value="hard" <? if($quiz_bonus_point_info->quiz_type=="hard") echo "selected"; ?>>Hard</option>
				<option value="average" <? if($quiz_bonus_point_info->quiz_type=="average") echo "selected"; ?>>Average</option>
			</select>
            </td>
          </tr>
          
		  <tr> 
            <td width="25%" align="right" valign="middle" class="cat_block1">Bonus Points<span class="style1">*</span></td>
            <td width="75%" align="left" valign="middle" class="cat_block1">
			<input name="bonus_points" type="text" id="bonus_points"  size="5" maxlength="30" value="<?=$quiz_bonus_point_info->bonus_points?>">
			
			</td>
          </tr>
                  
          <input type="hidden" name="id" value="<?=$quiz_bonus_point_info->id?>" />
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


