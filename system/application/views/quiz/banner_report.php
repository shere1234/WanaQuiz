<div class="content_wrap">
                        	<div class="content_10box">
                            	<div class="font14 bold color_darkblue">Banner ads</div>
                                <!--<div class="padding_10topbottom">
                                	<div class="bold text_center">
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	Impression
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	Clicks
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	CTR
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	Avg CPC
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	Cost
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clear"></div>
                                    </div>
                                    <div class=" padding_5top color_lightblue text_center">
                                    	                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	<?php
                                                        $i=0;
                                                     //  print_r($report1);
                                                        if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                           if($reports1->action == 'view') $i++;
                                                        } echo $i;
                                                        }
                                                        else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	<?php 
                                                    $i=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            if($reports1->action == 'click') $i++;
                                                        } echo $i;
                                                    }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	<?php 
                                                    $i=0; $j=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            if($reports1->action == 'click') $i++;
                                                            if($reports1->action == 'view') $j++;
                                                        }
                                                        if($j!=0)
                                                            echo ($i/$j)*100;
                                                    }else echo 0;?> %
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	$ <?php 
                                                    $i=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            $quiz_id = $reports1->quiz_id;
                                                            $cpc+= $this->Quiz_model->get_cpc($quiz_id);
                                                            if($reports1->action == 'click') $i++;
                                                        }
                                                        if($i!=0)
                                                            echo $cpc/$i;
                                                        else echo 0;
                                                    }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="">
                                                	$ <?php 
                                                    $cpc=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            $quiz_id = $reports1->quiz_id;
                                                            if($reports1->action == 'click')
                                                                $cpc+= $this->Quiz_model->get_cpc($quiz_id);
                                                        }
                                                        echo $cpc;
                                                    }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clear"></div>
                                    </div>
                                </div>-->
                                                       <? $total_cpc=0;?>
                                <div class="padding_10topbottom">
                                    <div class="bg_blue text_center" style="color:blue">
                                    	<div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	Name of banner
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	Impressions
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	Clicks
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	CTR
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	CPC
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	Cost
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clear"></div>
                                    </div>
                                     <?php
                                    //print_r($report2);
                                    if(count($banner_ads)>0) {
                                                foreach($banner_ads as $bannerAds) {
                                    ?>
                                    <div class="bg_gray text_center">
                                    	<div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	<?php echo $bannerAds->banner_name;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	<?php
                                                        $i=0;
                                                      //print_r($report1);
                                                        if(count($report1)>0) {
                                                        foreach($report1 as $reports1) { //echo $reports1->banner_name;
                                                           if($reports1->action == 'view' && $reports1->banner_name == $bannerAds->banner_name) $i++;
                                                        } echo $i;
                                                        }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	<?php
                                                    $i=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            if($reports1->action == 'click' && $reports1->banner_name == $bannerAds->banner_name) $i++;
                                                        } echo $i;
                                                    }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	<?php
                                                    $i=0; $j=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            if($reports1->action == 'click' && $reports1->banner_name == $bannerAds->banner_name) $i++;
                                                            if($reports1->action == 'view' && $reports1->banner_name == $bannerAds->banner_name) $j++;
                                                        }
                                                        if($j!=0)
                                                            echo round(($i/$j)*100,2);
                                                    }else echo 0;?> %
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	$ <?php
                                                    $i=0;
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            $quiz_id = $reports1->quiz_id;

                                                            if($reports1->action == 'click' && $reports1->banner_name == $bannerAds->banner_name)
                                                            {
                                                                $i++;
                                                                //$cpc+= $this->Quiz_model->get_cpc($quiz_id);
                                                                $cpc= $this->Quiz_model->get_cpc($quiz_id);
                                                            }
                                                        }
                                                        if($i!=0)
                                                            //echo $cpc/$i;
                                                            echo $cpc;
                                                        else echo 0;
                                                    }else echo 0;?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="txtaddtitle_left">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                	$ <?php
                                                    $cpc=0;
                                                    
                                                    if(count($report1)>0) {
                                                        foreach($report1 as $reports1) {
                                                            $quiz_id = $reports1->quiz_id;
                                                            if($reports1->action == 'click' && $reports1->banner_name == $bannerAds->banner_name)
                                                                $cpc+= $this->Quiz_model->get_cpc($quiz_id);
                                                        }
                                                        echo $cpc;
                                                        $total_cpc+=$cpc;
                                                    }
                                                     else echo 0;   ?>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="clear"></div>
                                    </div>
                                     <? } } else {?>
                                   <div style="width:100%; text-align: center; padding: 15px 0; color: #777; font-weight: bold; font-size: 12px;">The Report is not available!</div>
                                    <? }?>
                                 <div class="padding_10topbottom">
                                    <div class="bg_blue text_center" style="color:blue">
                                    	<div class="txtaddtitle_left" style="width:620px;">
                                        	<div class="borderrightbottom_white">
                                            	<div class="txtaddtitle_height">
                                                    <strong> Total </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="bg_blue">
                                        	<div class="borderrightbottom_white">
                                                    <div class="txtaddtitle_height" style="text-indent: 50px;">
                                                	<strong> $ <?php
                                                      echo $total_cpc; ?></strong>
                                                </div>
                                            </div>
                                        </div>
                                </div> 
                                    <div class="clear"></div>
                                      
                                </div>
                                                     
                            </div>
                                
                        </div>
                        <div class="borderbottom_dotted"></div>