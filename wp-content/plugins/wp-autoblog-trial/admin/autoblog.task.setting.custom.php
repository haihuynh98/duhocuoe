<div style="margin:16px;"></div>
<div id="poststuff">
  <div id="post-body" class="metabox-holder">
    <div id="post-body-content">

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Custom HTML Attribute","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==13))echo 'style="display:none;"' ?>>
          <form id="form13"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form13" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">

                <tr>
                  <!--
                  <td class="setName">
                    <label><?php echo __("Custom HTML Attribute Set",'wp-autoblog'); ?></label>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                  </td>
                  -->
                  <td>
                    <p class="desc"><?php echo __("Can add any Attributes to any HTML Element (or modify any HTML Element's Attribute)",'wp-autoblog'); ?></p>
                    <div class="margin-t-8">
                      <span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to all images align center, we just need to set the following','wp-autoblog'); ?>:<br/>
   <code><b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> img &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Attribute','wp-autoblog'); ?>:</b> style &nbsp;&nbsp;&nbsp;
     <b><?php echo __('Value'); ?>:</b> display:block; margin-left:auto; margin-right:auto; </code>
   <br/><?php echo __('Of course, if you konw CSS, you also can use CLASS attribute','wp-autoblog'); ?></span></div>

                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if need to remove a attribute, leave the value is empty','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>


                    <div id="attr_set_div" class="margin-b-8">
                      <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['attr_set'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['attr_set'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['attr_set'] as $HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640){ ?>
                          <div class="input-group margin-b-8 w800">
                            <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="<?php echo htmlspecialchars($HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['selector']); ?>" >
                            <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="<?php echo htmlspecialchars($HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['index']); ?>" >
                            <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"   value="<?php echo htmlspecialchars($HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['attr']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Value','wp-autoblog'); ?>: </div>
                            <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="<?php echo htmlspecialchars($HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['value']); ?>" >
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                              <option value="b" <?php selected( 'b',$HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$HZF4262K93X6507E9P3CY3P6TI5G0158JL02Z0K87V67U8ZG8H72KH2H8JWW3Y353NN67CYF899M466N2RK13JO14NFSRIL7641TEZ4190MSM7QY2429LX58GRW96NGHG2LG89KA6917FFEB2695E721CF62D30ADB3ED681CC1640['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn inputdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <?php
 } }else{ ?>
                        <div class="input-group margin-b-8 w800" >
                          <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_selector[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 36px;" class="form-control" name="attr_set_index[]"  value="0" >
                          <div class="input-group-addon"><?php echo __('Attribute','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 150px;" class="form-control" name="attr_set_attribute[]"  value="" >
                          <div class="input-group-addon"><?php echo __('Value','wp-autoblog'); ?>: </div>
                          <input type="text" style="width: 230px;" class="form-control" name="attr_set_value[]"  value="" >

                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select style="width: 164px;" class="form-control input-default"  name="attr_set_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>
                          </select>
                          <span class="input-group-btn inputdeleteBtn">
                            <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                          </span>
                        </div>
                        <?php
 } ?>
                    </div>

                    <a class="btn btn-default" data-loading-text="Loading..." id="add_attr_set_rules_btn" onclick="E82030M1N5I3H9306EOG0C9IR6956KQ9032DZCYNA5PZW0Q4M0U54974258TKORF3503JEWU85G2873948B374C4AC4514B8A2A865AE2CEC14590()"><?php echo __('Add More','wp-autoblog'); ?></a>


                  </td>
                </tr>
              </table>
            </div> <!-- /panel-body -->

          </form>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>

        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __("Insert Content In Anywhere","wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==14))echo 'style="display:none;"' ?>>
          <form id="form14"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form14" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="insert_content_table">
                <tr>
                  <td>
                    <div><?php echo __('Find the specified HTML Element, then insert content in front of the HTML Element ( or behind it )','wp-autoblog'); ?><br/></div>
                    <p><span class="gray"><?php echo __('For example','wp-autoblog'); ?> : <?php echo __('If you want to insert some content( like &lt;!-- more --> )  behind the first paragraph, We just need to set the following','wp-autoblog'); ?>:<br/>
  <code>
    <b><?php echo __('CSS Selector','wp-autoblog'); ?>:</b> p &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Index','wp-autoblog'); ?>:</b> 1 &nbsp;&nbsp;&nbsp;
    <b><?php echo __('Outer - Behind','wp-autoblog'); ?></b></code>
  <br/>
  <code><b><?php echo __('Content','wp-autoblog'); ?>:</b> &lt;!-- more --></code>
  </span></p>

                         <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: if <b>Index</b> is <b>0</b> means find all matched element ; <b> 1 </b> means find the first matched element ; <b> -1 </b> means find the last matched element.','wp-autoblog'); ?></span></div>
                    <div class="margin-t-8"><span class="gray">
   <?php echo __('Tips: support use variables : ','wp-autoblog'); ?><br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog');?>}</strong> <strong>[<?php echo __('html_attribute_name','wp-autoblog');?>]</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
   </span><br/><br/></div>

                    <div class="margin-t-8">
                      <?php echo __('<code><em>[Outer-Front]</em></code> &lt;tag> <code><em>[Inner-Front]</em></code> some text <code><em>[Inner-Behind]</em></code> &lt;/tag> <code><em>[Outer-Behind]</em></code>','wp-autoblog'); ?>
                    </div>

                  </td>
                </tr>

                <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['insert_content'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['insert_content'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['insert_content'] as $J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144){ ?>
                    <tr><td>
                    <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="<?php echo htmlspecialchars($J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['selector']); ?>" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="<?php echo htmlspecialchars($J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['index']); ?>" >

                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" <?php selected( 1,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['D3705Z1CGM9I50RM8NY08E13Z91540Y2WCV94649T005W9A77R5O59V9GY4PV07HIH35EIBFA8R264757FE07FD492A8BE0EA6A760D683D6E0124']); ?> ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" <?php selected( 2,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['D3705Z1CGM9I50RM8NY08E13Z91540Y2WCV94649T005W9A77R5O59V9GY4PV07HIH35EIBFA8R264757FE07FD492A8BE0EA6A760D683D6E0124']); ?> ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" <?php selected( 3,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['D3705Z1CGM9I50RM8NY08E13Z91540Y2WCV94649T005W9A77R5O59V9GY4PV07HIH35EIBFA8R264757FE07FD492A8BE0EA6A760D683D6E0124']); ?> ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" <?php selected( 4,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['D3705Z1CGM9I50RM8NY08E13Z91540Y2WCV94649T005W9A77R5O59V9GY4PV07HIH35EIBFA8R264757FE07FD492A8BE0EA6A760D683D6E0124']); ?> ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>


                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b" <?php selected( 'b',$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a" <?php selected( 'a',$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0" <?php selected( 0,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                        <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                          <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                        <?php } ?>

                      </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                    </div>
                      <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($J0W026DCG4B02NW2EW0S83JMH9DD5421FJZ1BZ80G6VFJ55N9H09UY3C6304F5FNQ116022E9E9B295F4CE5E5E9942D8315FD7F574144['html']); ?></textarea>
                    </div>
                    </td></tr>
                    <?php
 } }else{ ?>
                <tr><td>
                  <div class="w800">
                    <div class="input-group margin-b-8">
                      <div class="input-group-addon"><?php echo __('CSS Selector','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 150px;" class="form-control" name="insert_content_selector[]"  value="" >
                      <div class="input-group-addon"><?php echo __('Index','wp-autoblog'); ?>: </div>
                      <input type="text" style="width: 36px;" class="form-control" name="insert_content_index[]"  value="0" >
                      <div class="input-group-addon"><?php echo __('Position','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_position[]">
                        <option value="1" ><?php echo __('Outer - Behind','wp-autoblog'); ?></option>
                        <option value="2" ><?php echo __('Outer - Front','wp-autoblog'); ?></option>
                        <option value="3" ><?php echo __('Inner - Behind','wp-autoblog'); ?></option>
                        <option value="4" ><?php echo __('Inner - Front','wp-autoblog'); ?></option>
                      </select>
                      <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                      <select style="width: 164px;" class="form-control input-default"  name="insert_content_apply_to[]">
                        <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                        <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                        <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                        <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                          <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                        <?php } ?>
                      </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                    </div>
                    <textarea class="form-control " name="insert_content_html[]"  rows="3" placeholder="HTML Code"></textarea>
                  </div>
                </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_insert_content_rules_btn" onclick="N69WC0O004J7IMAZ37R26UCS4T890JPXO0Q06136618M273QF6BD4U5Z4F2TO82869FX442S1LJ58FE537626D36QQO4896E3CE9E44AC0037F896FE8E0E8DBB9131()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>


          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>

        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Prefix / Suffix',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==15))echo 'style="display:none;"' ?>>
          <form id="form15"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form15" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable" id="prefix_suffix_table">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['prefix_suffix'])&&count(@$M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['prefix_suffix'])>0){ foreach($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['prefix_suffix'] as $S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463){ ?>
                    <tr><td>
                        <div class="w800">
                          <div class="input-group margin-b-8">
                            <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                            <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                              <option value="1" <?php selected( 1,$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['mode'] ); ?>><?php echo __('Prefix','wp-autoblog'); ?></option>
                              <option value="2" <?php selected( 2,$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['mode'] ); ?>><?php echo __('Suffix','wp-autoblog'); ?></option>
                            </select>
                            <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                            <select class="form-control input-default"  name="prefix_suffix_apply_to[]">
                              <option value="b" <?php selected( 'b',$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['apply_to'] ); ?> ><?php echo __('Post Content','wp-autoblog'); ?></option>
                              <option value="a" <?php selected( 'a',$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['apply_to'] ); ?> ><?php echo __('Post Title','wp-autoblog'); ?></option>
                              <option value="0" <?php selected( 0,$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['apply_to'] ); ?> ><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>

                              <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                                <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>" <?php selected( $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061,$S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['apply_to'] ); ?> ><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                              <?php } ?>

                            </select>
                            <span class="input-group-btn trdeleteBtn">
                             <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                            </span>
                          </div>
                          <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"><?php echo htmlspecialchars($S4AGB3D35602334J9NDA4H4Y60GR02ZLS543L7A9GDIV13WHE6T77IV724RUNR4UYYITDD3D6F41F80B2B3B263BA9600424E78291463['html']); ?></textarea>
                        </div>
                      </td></tr>
                    <?php
 } }else{ ?>
                  <tr><td>
                      <div class="w800">
                        <div class="input-group margin-b-8">
                          <div class="input-group-addon"><?php echo __('Prefix / Suffix','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_mode[]">
                            <option value="1" ><?php echo __('Prefix','wp-autoblog'); ?></option>
                            <option value="2" ><?php echo __('Suffix','wp-autoblog'); ?></option>
                          </select>
                          <div class="input-group-addon" ><?php echo __('Apply to','wp-autoblog'); ?>: </div>
                          <select  class="form-control input-default"  name="prefix_suffix_apply_to[]">
                            <option value="b"><?php echo __('Post Content','wp-autoblog'); ?></option>
                            <option value="a"><?php echo __('Post Title','wp-autoblog'); ?></option>
                            <option value="0"><?php echo __('All Extraction Rules','wp-autoblog'); ?></option>
                            <?php foreach($M7M7GM56G6636QS75RZ770L70K610I12H2721P93DL4306594CBFF4150B3A2B26145BE311D5FC9241225 as $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061=>$QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522){ ?>
                              <option value="<?php echo $PXPZZFJY1MPR9P66B55V32801N4149G56CVT4UR1LS560KYD90780678U6Y22833EVBAC9UD09SNA8J905292Q6BM2GB0B3C6E0B8A9C15224A8228B9A98CA1531D7061; ?>"><?php echo $QS1TYC425QQ13555GK4640B5S1J9OVX91UP3NP91ZSICJ8KH478CIWPEZ6K22T3DI54TS112N22063C1608D6E0BAF80249C42E2BE58045522; ?> </option>
                            <?php } ?>
                          </select>
                    <span class="input-group-btn trdeleteBtn">
                      <input class="btn btn-default" type="button"  value="<?php echo __('Delete','wp-autoblog'); ?>">
                    </span>
                        </div>
                        <textarea class="form-control " name="prefix_suffix_html[]"  rows="3" placeholder="HTML Code"></textarea>
                      </div>
                    </td></tr>
                  <?php
 } ?>




              </table>
            </div> <!-- /panel-body -->

          </form>


          <div class="panel-footer">

            <a class="btn btn-default" data-loading-text="Loading..." id="add_prefix_suffix_rules_btn" onclick="IILQCEMM734077G16HAZGCQ9C2IDWI780X9G90Y7WQD86R95J0KOU025CEKU17N78Z5E2066279XYRI0URF38SDXU77D9926I38QI9FLW0G636O0923417C332D6046F4520860C6F4B40D4671463()" ><?php echo __('Add More','wp-autoblog'); ?> </a>

          </div>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->

      <div class="panel panel-primary">

        <div class="panel-heading panel-toggle">
          <h5 class="panel-title"><?php echo __('Custom Content Template',"wp-autoblog"); ?></h5>
        </div>

        <div class="panel-all" <?php if(@!($SS1AAJ4PJY7R9I9658BXFLLK32QZUPR3HA924647L9L77P6EK7S1G63T13ZT7ZN6E2BAAF3B97DBEEF01C0043275F9A0E73422['showBox']==17))echo 'style="display:none;"' ?>>
          <form id="form17"  method="post" action="admin.php?page=autoblog-task-setting">
            <input type="hidden" name="action" value="form17" />
            <input type="hidden" name="id" value="<?php echo $S0888HTUW79G97R1U5F57T7PBX63164013F4GZ5NKXVZ03WD9IX0AOAQXJ67883JF0729F9JA72584H2229M48K2435UQ9TY4BFH40UW99YI1HBO57746CC8160496AEFC9FB306B6BA24E32097; ?>" />
            <input type="hidden" name="save_to_group" value="0" />

            <div class="panel-body" style="padding:0;margin:0;">
              <table class="table settingTable">
                <tr>
                  <td>
                    <div class="margin-t-8 margin-b-8"><span class="gray">
    <?php echo __('Tips: support use variables : ','wp-autoblog'); ?> <br/><strong>{post_id}</strong> <strong>{post_title}</strong> <strong>{post_content}</strong> <strong>{post_permalink}</strong> <strong>{source_url}</strong> <strong>{<?php echo __('Temporary Variable Name','wp-autoblog'); ?>}</strong><?php if(@$Q8E2K62PL7D012GE43928XRPU260U4F1V26AYI0735SDQ921GG3T3W802CD5BB3C2AD65A7632FD1BBCE8F4FE6309==1){ ?> <br/><strong>{post_id_x}</strong> <strong>{post_title_x}</strong> <strong>{post_permalink_x}</strong> <?php } ?>
  </span><br/></div>

                  </td>
                </tr>

                    <tr><td>
                        <?php
 if(isset($M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['content_tpl'])){ $ZV8795668MA8R3A97C0E6790CT78D5PQUI0YYCS6XL91H3221KGP5D17T6O31PWOC2849AK9S8X8M4F5OG4814T4S7A9BEUIM06SS7B9259S4Q7356AF1N5MO28683F914648AFF73AB91E1BA9BB788FFC34941219 = $M1SYJ6876331U7K213XI3Z7QD1OX0396264569QRAQ4Z5T4M5FHV9406I8742KD7WNVTLSU8K29861YG73IIG8YAC6269R18012916608B1CA731C61B3742CC3023284124['content_tpl']; }else{ $ZV8795668MA8R3A97C0E6790CT78D5PQUI0YYCS6XL91H3221KGP5D17T6O31PWOC2849AK9S8X8M4F5OG4814T4S7A9BEUIM06SS7B9259S4Q7356AF1N5MO28683F914648AFF73AB91E1BA9BB788FFC34941219 = ''; } ?>
                        <textarea class="form-control " name="content_tpl"  rows="10" placeholder="HTML Code"><?php echo htmlspecialchars($ZV8795668MA8R3A97C0E6790CT78D5PQUI0YYCS6XL91H3221KGP5D17T6O31PWOC2849AK9S8X8M4F5OG4814T4S7A9BEUIM06SS7B9259S4Q7356AF1N5MO28683F914648AFF73AB91E1BA9BB788FFC34941219); ?></textarea>
                      </td></tr>

              </table>
            </div> <!-- /panel-body -->

          </form>

          <div class="panel-footer">
            <span style="display:inline-block;font-weight:bold;padding:5px;background-color:red;color:#FFFFFF;"><?php echo __('Trial version this settings will not working, use this featured please upgrade to full version','wp-autoblog'); ?></span>
          </div>
          <div class="panel-footer">
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save'); ?> </button>
            <button class="btn btn-primary" data-loading-text="Loading..."  disabled="true"><?php echo __('Save To Group','wp-autoblog'); ?> </button>
          </div>
        </div> <!-- /panel-all -->

      </div> <!-- /panel -->




    </div> <!-- /post-body-content -->

  </div><!-- /post-body -->
</div><!-- /poststuff -->