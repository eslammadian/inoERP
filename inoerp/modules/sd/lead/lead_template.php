<!-- * 
inoERP
 *
 * @copyright   2014 Nishit R. Das
 * @license     https://www.mozilla.org/MPL/2.0/
 * @link        http://inoideas.org
 * @source code https://github.com/inoerp/inoERP
 -->

<div id ="form_header">
 <form action=""  method="post" id="sd_lead"  name="sd_lead">
  <span class="heading"><?php echo gettext('Sales Lead') ?></span>
  <div id ="form_header">
   <div id="tabsHeader">
    <ul class="tabMain">
     <li><a href="#tabsHeader-1"><?php echo gettext('Basic Info') ?></a></li>
     <li><a href="#tabsHeader-2"><?php echo gettext('New Contact') ?></a></li>
     <li><a href="#tabsHeader-3"><?php echo gettext('Attachments') ?></a></li>
     <li><a href="#tabsHeader-4"><?php echo gettext('Note') ?></a></li>
     <li><a href="#tabsHeader-5"><?php echo gettext('Actions') ?></a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsHeader-1" class="tabContent">
      <div class="large_shadow_box"> 
       <ul class="column header_field"> 
        <li><?php $f->l_text_field_dr_withSearch('sd_lead_id') ?>
          <a name="show" href="form.php?class_name=sd_lead&<?php echo "mode=$mode"; ?>" class="show document_id sd_lead_id"><i class="fa fa-refresh"></i></a> 
        </li>
        <li><?php $f->l_text_field_dm('lead_number'); ?> 					</li>
        <li><?php $f->l_text_field_dm('subject'); ?> 					</li>
        <li><?php $f->l_select_field_from_object('lead_type', sd_lead::lead_type(), 'option_line_code', 'option_line_value', $$class->lead_type, 'lead_type'); ?> 					</li>
        <li><?php $f->l_select_field_from_array('status', sd_lead::$status_a, $$class->status, 'status', '', '', 1, 1); ?> 					</li>
        <li><?php $f->l_select_field_from_array('priority', dbObject::$position_array, $$class->priority); ?> 					</li>
        <li><?php $f->l_text_field_d('referral_source'); ?> 					</li>
        <li><?php $f->l_select_field_from_object('sales_channel', sd_lead::sales_channel(), 'option_line_code', 'option_line_value', $$class->sales_channel, 'sales_channel'); ?> 					</li>
        <li><?php $f->l_text_field_d('description'); ?> 					</li>
       </ul>
      </div>
     </div>
     <div id="tabsHeader-2" class="tabContent">
      <div class="large_shadow_box"> 
       <ul class="column header_field"> 
        <li><?php $f->l_text_field_d('last_name'); ?> </li>
        <li><?php $f->l_text_field_d('first_name'); ?></li>
        <li><?php $f->l_text_field_d('mobile_number'); ?></li>
        <li><?php $f->l_text_field_d('office_number'); ?></li>
        <li><?php $f->l_text_field_d('fax_no'); ?></li>
        <li><?php $f->l_text_field_d('email_id'); ?></li>
        <li><?php $f->l_text_field_d('timezone'); ?></li>
        <li><?php $f->l_text_field_d('time_to_contact'); ?></li>
        <li><?php $f->l_text_field_d('contact_website'); ?></li>
        <li><?php $f->l_text_field_d('contact_address'); ?></li>
       </ul>
      </div>
     </div>
     <div id="tabsHeader-3" class="tabContent">
      <div> <?php echo ino_attachement($file) ?> </div>
     </div>
     <div id="tabsHeader-4" class="tabContent">
      <div> 
       <div id="comments">
        <div id="comment_list">
         <?php echo!(empty($comments)) ? $comments : ""; ?>
        </div>
        <div id ="display_comment_form">
         <?php
         $reference_table = 'sd_lead';
         $reference_id = $$class->sd_lead_id;
         ?>
        </div>
        <div id="new_comment">
        </div>
       </div>
      </div>
     </div>
     <div id="tabsHeader-5" class="tabContent">
      <div> 
       <ul class="column header_field">
        <li><label><?php echo gettext('Action') ?></label>
         <?php
         echo $f->select_field_from_array('action', sd_lead::$action_a, '', 'action');
         ?>
        </li>
        <li><label><?php echo gettext('Close Reason') ?></label><?php $f->text_field_d('close_reason'); ?> 					</li>
       </ul>

       <div id="comment" class="shoe_comments">
       </div>
      </div>
     </div>
    </div>

   </div>
  </div>

  <div id ="form_line"><span class="heading">Other Details </span>
   <div id="tabsLine">
    <ul class="tabMain">
     <li><a href="#tabsLine-1"><?php echo gettext('Existing Info') ?></a></li>
     <li><a href="#tabsLine-2"><?php echo gettext('Address Details') ?> </a></li>
     <li><a href="#tabsLine-3"><?php echo gettext('Contact') ?> </a></li>
     <li><a href="#tabsLine-4"><?php echo gettext('Lead Details') ?> </a></li>
    </ul>
    <div class="tabContainer"> 
     <div id="tabsLine-1" class="tabContent">
      <div class="large_shadow_box"> 
       <ul class="column header_field"> 
        <li><?php echo $f->hidden_field_withId('ar_customer_id', $$class->ar_customer_id); ?>
         <label class="auto_complete"><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="ar_customer_id select_popup clickable">
          <?php echo gettext('Customer Name') ?></label> <?php echo $f->text_field('customer_name', $$class->customer_name, '20', 'customer_name', 'select_customer_name', '', $readonly1); ?></li>
        <li><?php $f->l_text_field_d('customer_number'); ?></li>
        <li><?php $f->l_select_field_from_object('ar_customer_site_id', $customer_site_obj, 'ar_customer_site_id', 'customer_site_name', $$class->ar_customer_site_id, 'ar_customer_site_id', 'ar_customer_site_id', '', $readonly1); ?> </li>
        <li><?php $f->l_text_field_d('campaign_id'); ?>	</li>
        <li><?php $f->l_text_field_d('campaign_os'); ?>	</li>
        <li><?php $f->l_select_field_from_object('sales_team', hr_team_header::find_all_sales_team(), 'hr_team_header_id', 'team_name', $$class->sales_team, 'sales_team'); ?> 					</li>
        <li><label><img src="<?php echo HOME_URL; ?>themes/images/serach.png" class="select_employee_name select_popup clickable">
          <?php echo gettext('Primary Sales Person') ?></label><?php $f->text_field_d('sales_person_employee_name'); ?>
         <?php echo $f->hidden_field_withId('sales_person_employee_id', $$class->sales_person_employee_id); ?>
        </li>
        <li><?php $f->l_address_field_d('address_id'); ?></li> 
       </ul>
      </div>
     </div>
     <div id="tabsLine-2" class="tabContent">
      <ul class="address inline_list">
       <li><?php $f->l_text_field_dr('phone'); ?></li>
       <li><?php $f->l_text_field_dr('email'); ?></li>
       <li><?php $f->l_text_field_dr('website'); ?></li>
       <li><?php $f->l_text_field_dr('country'); ?></li>
       <li><?php $f->l_text_field_dr('postal_code'); ?></li>
       <li><textarea readonly name="address" id="address" cols="22" rows="3" placeholder="Select address Id"><?php echo trim(htmlentities($$class->address)); ?></textarea>       </li>
      </ul>
     </div>
     <div id="tabsLine-3" class="tabContent">
      <?php
      if (!empty($all_contacts)) {
       include_once HOME_DIR . '/extensions/contact/view/contact_view_template.php';
      }
      ?>
      <div>
       <ul id="new_contact_reference">
        <li class='new_object1'><label><img class="extn_contact_id select_popup clickable"  src="<?php echo HOME_URL; ?>themes/images/serach.png"/>
          <?php echo gettext('Lead Contact') ?></label>  
         <?php
         echo $f->hidden_field('extn_contact_id_new', '');
         echo $f->text_field('contact_name_new', '', '20', '', 'select_contact');
         ?>  </li>
        <li class='clickable' id='add_new_contact' title='New contact reference field'><i class="fa fa-plus-circle"></i></li>
       </ul>
      </div>
     </div>
     <div id="tabsLine-4"  class="tabContent">
      <div><label class="text_area_label">Product, Service & Other Opportunity Details  :</label><?php
       echo $f->text_area_ap(array('name' => 'details', 'value' => $$class->details,
        'row_size' => '10', 'column_size' => '90'));
       ?> 	
      </div> 
     </div>
    </div>

   </div>
  </div>
 </form>
</div>
<div id="js_data">
 <ul id="js_saving_data">
  <li class="headerClassName" data-headerClassName="sd_lead" ></li>
  <li class="savingOnlyHeader" data-savingOnlyHeader="true" ></li>
  <li class="primary_column_id" data-primary_column_id="sd_lead_id" ></li>
  <li class="form_header_id" data-form_header_id="sd_lead" ></li>
 </ul>
 <ul id="js_contextMenu_data">
  <li class="docHedaderId" data-docHedaderId="sd_lead_id" ></li>
  <li class="btn1DivId" data-btn1DivId="sd_lead" ></li>
 </ul>
</div>