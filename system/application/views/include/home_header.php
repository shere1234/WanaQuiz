
<script>
    function hide_text(_field, _default, _current) {
      if (_default == _current) {
        _field.value='';
      }
    }
  </script>
<script type="text/javascript">
//$(document).ready(function () { 
//    $("#search_help").click(function(){
//    $("#helpnote").slideToggle(200);
//});
//
//$(".close_help").click(function(){
//         $(".close").hide();
//     })
//});

function filter_content()
    {        
        var t = "<b>You must be a member to view Adult Content !</b><br />";
         t +="<p style='font-weight:normal;padding-top:5px; width:400px;'>There is no nudity allowed on WannaQuiz.<br/>Adult content is e.g. a quiz about the show <br/>�Sex and the City� or questions about scary subjects.</p>";
         t +="<a href='<?php echo base_url()?>home/show/age_appropriate'><br/>Read More<br/></a>";
          t += "<p stype='padding-top:5px;'>Do you want to Register ?</p>";
        
        $.prompt( 
            t ,
            {buttons:{Continue:true,Cancel:false} ,
            callback: function(v,m,f) { if(v) { window.location = "<?=base_url()?>/registration";
 } }
            }
        );
        
    }



</script>
<div class="header_bg" style="position:relative; z-index:0;">
	<div id="header_wrap">
    	<div>
            <div class="header_left">
                <div class="header_logo">
                    <div class="logo"><a href="<?=site_url()?>">WANNA QUIZ</a></div>
                </div>
                
                <div class="header_quote">
                    <div class="header_quoteInner"><img src="<?=base_url()?>images/header_quote.jpg" width="255" height="27" alt="quote" /></div>
                </div>
                
                <div class="clear"></div>
            </div>
            <div class="header_right">
                <div class="header_linksbox">
                    <div class="header_linksboxInner">
                        <div class="header_links">
                            <ul>
                                <li><a href="<?=site_url('registration')?>" class="signup">Signup</a> | </li>
                                <li><a href="<?=site_url('member/playlist')?>">Playlist (0)</a> | </li>
                                <li><a href="<?=site_url('home/login')?>">Login</a> | </li>
                                
                                <li><a href="<?=site_url('home/help_center')?>">Help <img src="<?=base_url()?>images/sitemap_icon.jpg" width="12" height="12" alt="sitemap" /></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        
        	<div class="clear"></div>
        </div>
            
         
            
        <div>
        	<div class="ddsmoothmenu" id="smoothmenu1">
            	<ul>
                	<li class="navselected"><a href="<?=site_url('')?>">Home </a></li>
                    <li <? if(isset($nav) && $nav=='howitworks'){?> class="navselected" <? }?>><a href="<?=site_url('page/howitworks')?>">How it works</a>
                    	<ul>
                           <li><a href="<?=base_url()?>home/show/single_player_game">Play a game</a></li>
                                <li><a href="<?=base_url()?>home/show/video_question">Make a video question</a></li>
                                <li><a href="<?=base_url()?>home/show/photo_question">Make a photo question</a></li>
                        </ul>
                    </li>
                 
                    <li <? if(isset($nav) && $nav=='register'){?> class="navselected" <? }?>><a href="<?=site_url('registration')?>">Signup</a>
                    </li>
                   <?php if(!$user_type){//if(!$this->session->userdata('user_type')){?>
                     <li <? if(isset($nav) && $nav=='content'){?> class="navselected" <? }?>><a href="">Browse </a>
                        <ul>
                            <li><a href="<?=site_url('quiz/category/regular')?>">Regular Users</a></li>
                            <li><a href="<?=site_url('quiz/category/advertiser')?>">Sponsors</a></li>
                        </ul>
                    </li>
                       
                   <?php }else {?>
                    <li <? if(isset($nav) && $nav=='content'){?> class="navselected" <? }?>>
                        <a href="<?=site_url('quiz/category/'.$user_type)?>">
                         <?if($user_type=='advertiser')echo "Sponsors";
                         else echo "Regular"; ?></a>
                          <ul>
                          <li>
                           <?if($user_type=='advertiser'){?> <a href="<?=site_url('quiz/category/regular')?>">Regular</a> <?}else{?>
                           <a href="<?=site_url('quiz/category/advertiser')?>">Sponsors</a> <?}?>
                           
                      </li>
                  </ul>
                    </li>   
                   <?php }?>
                    <li <? if(isset($nav) && $nav=='faq'){?> class="navselected" <? }?>><a href="<?=site_url('home/help_center/faq')?>">FAQ</a></li>
                    <li <? if(isset($nav) && $nav=='advertise'){?> class="navselected" <? }?>><a href="<?=site_url('home/show/intro_video')?>">Advertise</a></li>                    
                    <div class="clear"></div>
                </ul>
            </div>            
        </div>

        <div class="headersearchbox_align">
        	<div class="search_left">
            	<div class="searchbox_leftborder"></div>
                <div class="searchbox_bg" style="width: 385px">
                	<div class="search_leftbgInner" style="padding-right: 0; position:relative">
                            <img id="search_help" class="search_help" 
                                 src="<?=base_url()?>/images/help.png" 
                                 style="float:left; margin-top:0px; cursor:pointer; margin-right:10px;" 
                                 onclick ="$('#helpnote').slideDown('slow');" 
                                   />
                                <div id="helpnote" class="close" style="display:none; position:absolute; width:300px; padding:10px; border:1px solid #AAA; z-index: 9999; top:33px; left:30px; background-color:#F0F0F0; line-height:1.4em">
                                         <p style="text-align:right; color:blue; font-size:14px; font-weight:bold; cursor:pointer; position:relative; z-index:10001" class="close_help" onclick="$('#helpnote').hide('slow');"> X </p>
                                         <p><strong style="color:blue; font-weight:bold;">On: </strong>Age Filter is On ( no Adult content )</p><br>
                                         <p><strong style="color:blue; font-weight:bold;">Off: </strong>Age Filter is Off ( Adult content included )</p><br>
                                         <p>There is no nudity allowed on WannaQuiz.<br> 
                                           Adult content is e.g. a quiz about the show �Sex</br> 
                                          and the City� or questions about scary subjects.
                                        </p><br>
                                         <div><a href="<?=base_url()?>home/show/age_appropriate"><p style="color:blue;">Read more</p></a></div>
                                     </div>
                                     <? $uid = $this->session->userdata('wannaquiz_user_id');
                                       $mem_info=$this->Member_model->get_member($uid);
                                      $filter= $mem_info->filter_adult;
                                      if($filter) $this->session->set_userdata('filtered','You have chosen to Filter Adult Content');
                                       else $this->session->unset_userdata('filtered');
                                       
                                if($this->session->userdata('guest_filter')=='1') $v = 'On'; else $v = 'Off';?>
                                <? $s = ($v=='On') ? 'off' : 'on'; ?>
                                      
                                <a href="#" onclick="filter_content();" style="text-decoration: none; float: left; display: inline-block;">
                                    <b id="stat"><?=$v?></b>
                                    <img id="filter" src="<?=base_url()?>/images/ad_<?=$s?>.png" title="Filter Adult Content" alt="<?=ucwords($v)?>" />                                    
                                </a>
                            
                            <form name="search" action="<?=base_url()?>quiz/search" method="post" style="float:right;width:277px;margin-left:15px;">
                            <div class="headersearch_input">
                                <input type="text" name="search" class="textbox_headersearch" value="Search for ..." id="search" onclick="$(this).val('');" onblur="if($(this).val()=='') $(this).val('Search for ...');" style="width:200px;" />
                            </div>
                            <div class="headersearch_btn" style="width:57px; margin-right:0;">
                            	<div class="searchbtn_leftborder"></div>
                                <input type="submit" onclick="if($('#search').val()=='Search for ...') $('#search').val('');" class="searchbtn_bg" value="Search" />                                
                                <div class="searchbtn_rightborder"></div>
                            </div>                            
                            <div class="clear"></div>
                        </form>
                    </div>
                </div>
                <div class="searchbox_rightborder"></div>
                                     
                </div>
                <div class="clear"></div>
            </div>
            
            <div style="float: right;width:240px;">
            	<div class="searchbox_leftborder"></div>
                <div class="searchbox_bg">
                	<div class="search_rightbgInner">
                    	<div style="width:140px;">
                        	<? $this->load->view('addthis'); ?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="searchbox_rightborder"></div>
                
                <div class="clear"></div>
                 
            </div>
            
            <div class="clear"></div>
        </div>
        
    </div>
</div>