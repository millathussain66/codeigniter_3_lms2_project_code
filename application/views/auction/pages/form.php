
 <!--  styling starts: -->
<style type="text/css">

	.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}
/* td:nth-child(2) {
    padding-right: 20px;
 }​  */
#ext {
        border-collapse: separate;
        border-spacing: 0 15px;
      }
.button6 {
  background-color: #555555; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;;
  border-radius: 12px;
}
.button1 {
  background-color: #555555; /* Green */
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;;
  border-radius: 12px;
}
.button_delete {
  background-color: #00ffff; /* Green */
  border: none;
  color: white;
  padding: 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button3 {
  background-color: #4CAF50;
  color: black;
}
table {
		border-collapse: collapse;
	}
table#preview_table td {
		border: 1px solid #c7c7c7;
	}
table.preview_table2 td, table.preview_table2 th{
		border: 1px solid #c7c7c7;
		word-wrap:break-word;
		padding:5px;
	}
.button4 {
  background-color: #00ffff;
  color: black;
}

.button3,.button4:hover {
  background-color: #f44336;
  color: white;
}
.center {
  margin: 0;
  position: absolute;
  top: 90%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
/* .center {
  margin: auto;
  width: 20%;
  padding: 10px;
} */
       .text-input
        {
            height: 23px;
            width: 350px;
        }


		.required
		{
			vertical-align: baseline;
			color: red;
			font-size: 10px;
		}

    #details {
     font-family: Arial, Helvetica, sans-serif;
     border-collapse: collapse;
     width: 100%;
   }
    b {
       font-size: 14px;
    }


		#details td, #details th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}
		#details  th {
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: center;
		  background-color: #4CAF50;
		  color: white;
		}
		.buttonsendtochecker {
	   background-color: white; 
	  color: black; 
	  border: 2px solid #008CBA;
	  border-radius: 12px;
	  padding: 10px 20px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  transition-duration: 0.4s;
	  cursor: pointer;
	}
	.buttonsendtochecker:hover {
	  background-color: #008CBA;
	  color: white;
	}
	.buttonclose {
	   background-color: white; 
	  color: black; 
	  border: 2px solid #555555;
	  border-radius: 12px;
	  padding: 10px 15px;
	  text-align: center;
	  text-decoration: none;
	  display: inline-block;
	  font-size: 16px;
	  margin: 4px 2px;
	  transition-duration: 0.4s;
	  cursor: pointer;
	}
	.buttonclose:hover {
	  background-color: #555555;
	  color: white;
	}
	.wrapper {
    text-align: center;
	}

	.button {
	    position: absolute;
	    top: 50%;
	}
    .addmore
	{
		background-image:url(<?=base_url()?>images/addmore_grn.png);
		/*background-size: 20px 20px;*/
		background-repeat: no-repeat;
		border:0;
		width:18px; height:18px;
		background-color:transparent;
		cursor:pointer;
	}
	
	.del
	{
		background-image:url(<?=base_url()?>images/del.png);
		background-repeat: no-repeat;
		border:0;
		width:18px; height:18px;
		background-color:transparent;
		cursor:pointer;
	}
	.edit
	{
		background-image:url(<?=base_url()?>images/edit.png);
		background-repeat: no-repeat;
		border:0;
		width:18px; height:18px;
		background-color:transparent;
		cursor:pointer;
	}
	.nextButton
	{
		float: right;
		margin: 10px;
		width: 100px;
		height: 30px;
		font-weight: bold;
		font-family: arial;
	}
	.backButton
	{
		float: left;
		margin: 10px;
		width: 100px;
		height: 30px;
		font-weight: bold;
		font-family: arial;
	}
	#tab1Table td,#tab3Table td,#tab2Table td{
		vertical-align: top;
	}
	table#addressTable {
		border-collapse: collapse;
	}

	table#addressTable, #addressTable th, #addressTable td {
	    border: 1px solid #c7c7c7;
	}

	table#addressTablet {
		border-collapse: collapse;
	}

	table#addressTablet, #addressTablet th, #addressTablet td {
	    border: 1px solid #c7c7c7;
	}

	table#facility_info td {
		border: 1px solid #c7c7c7;
		text-align: center;
	}

	table#loanTable {
		border-collapse: collapse;
	}

	table#loanTable, #loanTable th, #loanTable td {
	    border: 1px solid #c7c7c7;
	}
	table#loanTable_detail {
		border-collapse: collapse;
	}
	table#loanTable_detail, #loanTable_detail th, #loanTable_detail td {
	    border: 1px solid #c7c7c7;
	}
	#loanTable_detail th, #loanTable_detail td{
		text-align: center;
	}
	#addressTable th, #addressTable td{
		text-align: center;
	}
	#addressTablet th, #addressTablet td{
		text-align: center;
	}
	#loanTable th, #loanTable td{
		text-align: center;
	}
	table#owner_addressTable {
		border-collapse: collapse;
	}

	table#owner_addressTable, #owner_addressTable th, #owner_addressTable td {
	    border: 1px solid #c7c7c7;
	}
	#owner_addressTable th, #owner_addressTable td{
		text-align: center;
	}
	table#owner_addressTablet {
		border-collapse: collapse;
	}

	table#owner_addressTablet, #owner_addressTablet th, #owner_addressTablet td {
	    border: 1px solid #c7c7c7;
	}
	#owner_addressTablet th, #owner_addressTablet td{
		text-align: center;
	}
	#ownerTable {
		border-collapse: collapse;
	}

	#ownerTable, #ownerTable th, #ownerTable td {
	    border-color: #c7c7c7;
	}
	.hint{

		color: red;
	}
	.section
	{
		padding: 5px;
	}
	#hintWrapper{
		float: left;
		margin: 10px;
	}

	.jqx-window-modal
	{
		height: 625px !important;
	}

	.nextButton
	{
		float: right;
		margin: 10px;
		width: 100px;
		height: 30px;
		font-weight: bold;
		font-family: arial;
	}
	.backButton
	{
		float: left;
		margin: 10px;
		width: 100px;
		height: 30px;
		font-weight: bold;
		font-family: arial;
	}
	 #sectionButtonsWrapper
	{
		float: right;
	}

	#basketButtonsWrapper
	{
		float: right;

	}

	#selectedProductsButtonsWrapper
	{
		float: right;

	}
	#ownerSave,#addmoreOwner{
		width: 100px;
		height: 30px;
		font-weight: bold;
		font-family: arial;
	}

    .dateSpan{
      font-weight: normal;
      font-size: 12px;
      color: #808080;
    }
	table#guarantor_info td {
		border: 1px solid #c7c7c7;
		word-wrap:break-word
	}
    .tablescroll #headerTable td{ border:none;}
		.headSpan {
			float:left;font-weight:bold; font-size:9pt;cursor:pointer;
		}
		table.preview_table2 td, table.preview_table2 th{
		border: 1px solid #c7c7c7;
		word-wrap:break-word;
		padding:5px;
	}
	table#gurantor_table th {
		word-wrap:break-word
	}
    </style>

    <script type="text/javascript">
    	var csrf_token='';
    	jQuery(document).ready(function () {
    	var theme = 'classic';
		jQuery("#r_history").jqxWindow({ theme: theme,  width: '50%', height:'50%', resizable: false,  isModal: true, autoOpen: false, cancelButton: jQuery("#r_ok") });
		jQuery("#details").jqxWindow({ theme: theme,  width: '75%', height:'90%', resizable: false,  isModal: true, autoOpen: false, cancelButton: jQuery("#codeOK,#SendTocheckercancel,#deletecancel") });
	});
	function r_history (id) {
		var csrfName = jQuery('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
		var csrfHash = jQuery('.txt_csrfname').val(); // CSRF hash
		jQuery.ajax({
			type: "POST",
			cache: false,
			url: "<?=base_url()?>cma_process/r_history",
			data : {[csrfName]: csrfHash,id: id},
			datatype: "json",
			success: function(response){
			//alert(response);
				var json = jQuery.parseJSON(response);
				jQuery('.txt_csrfname').val(json.csrf_token);
					if(json['row_info'])
					{
						document.getElementById("r_history").style.visibility='visible';
						var html='';
						jQuery.each(json['row_info'],function(key,obj){
							html+='<tr>';
								html+='<td align="left">'+obj.oprs_sts+'</td>';
								html+='<td align="left">'+obj.r_by+'</td>';
								html+='<td align="center">'+obj.oprs_dt+'</td>';
								html+='<td align="left">'+obj.oprs_descriptions+'</td>';
								if (obj.oprs_reason!=null)
								{
									html+='<td align="left">'+obj.oprs_reason+'</td>';
								}else{html+='<td align="left"></td>';}
							html+='</tr>';
						});
						jQuery("#r_history_details").html(html);
						jQuery("#r_history").jqxWindow('open');
					}
					else {
						alert("Something went wrong, please refresh the page.")
					}

			}
		});
	}
	function editmortgage(cma_id,id,mortgage_id)
	{
		EOL.messageBoard.open('<?=base_url()?>auction/mortgage/'+id+'/'+cma_id+'/edit/'+mortgage_id, (jQuery(window).width()-80), jQuery(window).height(), 'yes');
		return false;
	}
	function addmortgage(val,cma_id)
	{
		EOL.messageBoard.open('<?=base_url()?>auction/mortgage/'+val+'/'+cma_id+'/add/<?=$editrow?>', (jQuery(window).width()-80), jQuery(window).height(), 'yes');
		return false;
	}
	function editsecurity(cma_id,id,mortgage_id,security_id)
	{
		EOL.messageBoard.open('<?=base_url()?>auction/mortsecurity/'+cma_id+'/'+id+'/edit/'+mortgage_id+'/'+security_id, (jQuery(window).width()-80), jQuery(window).height(), 'yes');
		return false;
	}
	function addsecuerity(cma_id,id,mortgage_id)
	{
		EOL.messageBoard.open('<?=base_url()?>auction/mortsecurity/'+cma_id+'/'+id+'/add/'+mortgage_id, (jQuery(window).width()-80), jQuery(window).height(), 'yes');
		return false;
	}
	function mortgagedetails(id,type)
	{
		if (type=='mortgage')
		{
			jQuery("#header_title").html('Mortgage Details');
		}
		else
		{
			jQuery("#header_title").html('Security Details');
		}
		var csrfName = jQuery('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
		var csrfHash = jQuery('.txt_csrfname').val(); // CSRF hash
		jQuery.ajax({
			type: "POST",
			cache: false,
			url: "<?=base_url()?>auction/mortgage_security_details",
			data : {[csrfName]: csrfHash,id: id,type:type},
			datatype: "json",
			success: function(response){
			//alert(response);
				var json = jQuery.parseJSON(response);

				jQuery('.txt_csrfname').val(json.csrf_token);
					if(json['str'])
					{
						document.getElementById("details").style.visibility='visible';
						jQuery("#main_body_mort_security").html(json['str']);
						jQuery("#details").jqxWindow('open');
					}
					else {
						alert("Something went wrong, please refresh the page.")
					}

			}
		});
		document.getElementById("details").style.visibility='visible';
		jQuery("#details").jqxWindow('open');
	}
	function ShowDiv(s){
		jQuery("#show_spand_"+s).hide();
		jQuery("#hide_spand_"+s).show();
		jQuery(".classes_"+s).show();

	}
	function HideDiv(s){
		jQuery("#hide_spand_"+s).hide();
		jQuery("#show_spand_"+s).show();
		jQuery(".classes_"+s).hide();
	}
	function mort_security_validation()
	{
		var counter = jQuery("#mortgage_counter").val();
		if (counter==0) 
		{
			alert('Please Give At least one Mortgage');
			return false;
		}
		else
		{
			for (var i = 1; i <= counter; i++) 
			{
				if (jQuery("#security_counter_edit_"+i).val()<1) 
				{
					alert('Please Give Security For ('+jQuery("#schedule_name_"+i).val()+')Schedule');
					return false;
				}
			}
		}
		return true;
	}
	function delete_record_message (operation,val,cma_id) {
			jQuery('#deleteEventId').val(val);
			jQuery('#cma_id').val(cma_id);
			jQuery('#type').val(operation);
			jQuery('#comments').val('');
			if (operation=='mortgage_delete') 
			{
				jQuery('#message').html('Delete this Mortgage?');
			}
			else
			{
				jQuery('#message').html('Delete this Security?');
			}
			deleteMessageDialog = new EOL.dialog($('deleteMessageDialogContent'), {position: 'fixed', modal:true, width:570, close:true, id: 'deleteMessageDialog' });

			deleteMessageDialog.afterShow = function() {
				$$('#deleteMessageDialog #deleteMessageDialogConfirm').addEvent('click',delete_records);
				$$('#deleteMessageDialog #deleteMessageDialogCancel').addEvent('click',function() {deleteMessageDialog.hide();});
			};
			$('deleteMessageErrorMsg').innerHTML = '';
			$('deleteMessageErrorMsg').style.display = 'none';
			deleteMessageDialog.show();
	}
	function delete_records()
	{	
		$('deleteMessageDialogConfirm').style.display = 'none';
		$('deleteMessageDialogCancel').style.display = 'none';
		$('loading').style.display = 'block';
		if (jQuery('#comments').val()=='') 
		{
			$('deleteMessageErrorMsg').innerHTML = 'Please Put Delete Reason';
			$('deleteMessageErrorMsg').style.display = 'block';
			$('deleteMessageDialogConfirm').style.display = 'block';
			$('deleteMessageDialogCancel').style.display = 'block';
			$('loading').style.display = 'none';
			jQuery('#comments').focus();
			return;
		}

		
		var csrfName = jQuery('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
		var csrfHash = jQuery('.txt_csrfname').val(); // CSRF hash
		var postData = jQuery('#delete_form').serialize()+"&"+csrfName+"="+csrfHash;
		jQuery.ajax({
			type: "POST",
			cache: false,
			url: '<?=base_url()?>index.php/auction/delete_action/',
			data : postData,
			datatype: "json",
			success: function(response){
              console.log(response);
				var json = jQuery.parseJSON(response);
				jQuery('.txt_csrfname').val(json.csrf_token);
				if(json.Message!='OK')
				{
					alert(json.Message);
					$('deleteMessageDialogConfirm').style.display = 'block';
					$('deleteMessageDialogCancel').style.display = 'block';
					$('loading').style.display = 'none';
					return false;
				}
				else
				{
					window.location = "<?=base_url()?>index.php/auction/from/<?=$add_edit?>/<?=$id?>/<?=$cmaid?>";
				}

			}
		});
	}
	function delete_action(type) {
		var message='';
		if (mort_security_validation() != false) 
		{
			var csrfName = jQuery('.txt_csrfname').attr('name'); // Value specified in $config['csrf_token_name']
			var csrfHash = jQuery('.txt_csrfname').val(); // CSRF hash
			jQuery("#success_message").val('Updated');
			var csrfHash = jQuery('.txt_csrfname').val();
			window.parent.jQuery('.txt_csrfname').val(csrfHash);
			jQuery('.txt_csrfname').val(csrfHash);
			window.parent.jQuery('.txt_csrfname').val(csrfHash);
			window.parent.jQuery("#jqxgrid").jqxGrid('updatebounddata');
			window.parent.jQuery("#error").show();
			window.parent.jQuery("#error").fadeOut(11500);
			window.parent.jQuery("#error").html('<img align="absmiddle" src="'+baseurl+'images/drag.png" border="0" /> &nbsp;Successfully '+jQuery("#success_message").val());	
            //window.parent.jQuery("#jqxgrid").jqxGrid('updatebounddata');										
			window.top.EOL.messageBoard.close();
		}
	}
    </script>
<body style="height:94%;">
	<div style="height:30px;background-color:#185891;font-size:22px;padding:5px 0 0 10px;color:white">
	CMA Auction Info
	</div>
	<div style="width:96%;margin: auto;paddding: 10px;">
	<input type="hidden" class="txt_csrfname"  name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
	<form class="form" name="paper_form" id="paper_form" method="post" action="#">
	  
	       <table class="custtable" border="0" style="table-layout: fixed;margin-left:10px;margin-top:10px;width:99%; font-size:15px;border-collapse:collapse">
				<tr>
					<td style="width:12%"><strong>SL No.</strong></td>
					<td style="width:30%"><?=$result->sl_no;?></td>
					<td style="width:12%"><strong>Current/Updated Address</strong></td>
					<td style="width:30%"><?=$result->current_address;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Type of Requisition</strong></td>
					<td style="width:30%"><?=$result->req_type;?></td>
					<td style="width:12%"><strong>Region</strong></td>
					<td style="width:30%"><?=$result->region_name;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Proposed Type</strong></td>
					<td style="width:30%"><?=$result->proposed_type;?></td>
					<td style="width:12%"><strong>Territory </strong></td>
					<td style="width:30%"><?=$result->territory_name;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong><?if($result->proposed_type=='Loan'){echo "Loan A/C No.";}else{echo "Card No.";}?></strong></td>
					<td style="width:30%"><?=$result->loan_ac;?></td>
					<td style="width:12%"><strong>District</strong></td>
					<td style="width:30%"><?=$result->district_name;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>CIF </strong></td>
					<td style="width:30%"><?=$result->cif;?></td>
					<td style="width:12%"><strong>Unit Office (code)</strong></td>
					<td style="width:30%"><?=$result->unit_office_name;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Branch SOL</strong></td>
					<td style="width:30%"><?=$result->branch_sol;?></td>
					<td style="width:12%"><strong>More A/C No. </strong></td>
					<td style="width:30%"><?=$result->more_acc_number;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong><?if($result->proposed_type=='Loan'){echo "Loan A/C Name.";}else{echo "Name on Card";}?></strong></td>
					<td style="width:30%"><?=$result->ac_name;?></td>
					<td style="width:12%"><strong>Loan Sanction Date </strong></td>
					<td style="width:30%"><?=$result->loan_sanction_dt;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Borrower Name</strong></td>
					<td style="width:30%"><?=$result->brrower_name;?></td>
					
					<td style="width:12%"><strong>Initiate By</strong></td>
					<td style="width:30%"><?=$result->e_by;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Spouse Name</strong></td>
					<td style="width:30%"><?if($result->sub_type==3 && $result->spouse_name!=''){echo $result->spouse_name;}else{echo "N/A";}?></td>
					<td style="width:12%"><strong>Initiate Date Time</strong></td>
					<td style="width:30%"><?=$result->e_dt;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Mother Name</strong></td>
					<td style="width:30%"><?if($result->sub_type==3){echo $result->mother_name;}else{echo "N/A";}?></td>
					<td style="width:12%"><strong>STC By</strong></td>
					<td style="width:30%"><?=$result->stc_by;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Loan Segment (Portfolio) </strong></td>
					<td style="width:30%"><?=$result->loan_segment;?></td>
					<td style="width:12%"><strong>STC Date TIme</strong></td>
					<td style="width:30%"><?=$result->stc_dt;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Recommended By</strong></td>
					<td style="width:30%"><?=$result->rec_by;?></td>
					<td style="width:12%"><strong>Recommended Date TIme</strong></td>
					<td style="width:30%"><?=$result->rec_dt;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Call up Date</strong></td>
					<td style="width:30%"><?=$result->call_up_serv_dt;?></td>
					<td style="width:12%"><strong>Return/Decline Message</strong></td>
					<td style="width:30%">
					<?php if ($result->return_reason_rm!=null): ?>
						<a href="#" style="color:black" onclick="return r_history(<?=$result->id;?>)"><span><?=$result->return_reason_rm;?></span></a>
					<?php endif ?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Call Up File</strong></td>
					<td style="width:30%">
						<?php if ($result->call_up_file!=''): ?>
							<img id="file_preview" onclick="popup('<?=base_url()?>cma_file/call_up_file/<?=$result->call_up_file?>')" style=" cursor:pointer;text-align:center" height="18" src="<?=base_url()?>old_assets/images/print-preview.png">
						<?php endif ?>
					</td>
					<td style="width:12%"><strong>Chq Expiry Date</strong></td>
					<td style="width:30%"><?=$result->chq_expiry_date;?></td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Last Payment Date</strong></td>
					<td style="width:30%"><?=$result->last_payment_date;?></td>
					<td style="width:12%">Legal Region</td>
					<td style="width:30%">
						<?=$result->legal_region_name;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Last Payment Amount</strong></td>
					<td style="width:30%"><?=$result->last_payment_amount;?></td>
					<td style="width:12%">Pre Case Filling Date</td>
					<td style="width:30%">
						<?=$result->pre_case_fill_dt;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Subject Type</strong></td>
					<td style="width:30%"><?=$result->subject_name;?></td>
					<td style="width:12%">Previous CMA Approval Type</td>
					<td style="width:30%">
						<?=$result->pre_cma_app_type;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Previous CMA Approval Date</strong></td>
					<td style="width:30%"><?=$result->pre_cma_app_dt;?></td>
					<td style="width:12%">Previous Case Status</td>
					<td style="width:30%">
						<?=$result->pre_case_sts;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Previous Case Type</strong></td>
					<td style="width:30%"><?=$result->pre_case_type;?></td>
					<td style="width:12%">Disposal Status</td>
					<td style="width:30%">
						<?=$result->disposal_sts;?>
					</td>
				</tr>

				<tr>
					<td style="width:12%"><strong>Customer Contact Number</strong></td>
					<td style="width:30%"><?=$result->mobile_no;?></td>
					<td style="width:12%">Disposal remarks</td>
					<td style="width:30%">
						<?=$result->disposal_remarks;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Judgment Summary</strong></td>
					<td style="width:30%"><?=$result->judgement_summery;?></td>
					<td style="width:12%">Previous Case Filing Date</td>
					<td style="width:30%">
						<?=$result->pre_case_fill_dt;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Security Status</strong></td>
					<td style="width:30%"><?=$result->sec_sts;?></td>
					<td style="width:12%">Business Status</td>
					<td style="width:30%">
						<?=$result->busi_sts;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Borrower Status</strong></td>
					<td style="width:30%"><?=$result->borr_sts;?></td>
					<td style="width:12%">Interest Rate (As per Sanction)</td>
					<td style="width:30%">
						<?=$result->int_rate;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Logic for ARA Case</strong></td>
					<td style="width:30%"><?=$result->case_logic;?></td>
					<td style="width:12%">Chq. Status</td>
					<td style="width:30%">
						<?=$result->chq_sts;?>
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Remarks</strong></td>
					<td style="width:30%"><?=$result->remarks;?>
					<?php if ($result->remarks_file!=''): ?>
							<img id="file_preview" onclick="popup('<?=base_url()?>cma_file/remarks_file/<?=$result->remarks_file?>')" style=" cursor:pointer;text-align:center" height="18" src="<?=base_url()?>old_assets/images/print-preview.png">
						<?php endif ?>
					</td>
					<td style="width:12%">Current Dpd</td>
					<td style="width:30%">
						<?=$result->current_dpd;?>DPD
					</td>
				</tr>
				<tr>
					<td style="width:12%"><strong>Current Auction Sts</strong></td>
					<td style="width:30%">
						<?php if ($result->auction_sts=='33'): ?>
							Completed
						<?php else: ?>
							
						<?php endif ?>
					</td>
					<td style="width:12%">Previous Auction Status</td>
					<td style="width:30%">
						<?=$result->pre_auc_sts;?>
					</td>
				</tr>
				<?php if (!empty($cma_guarantor)): ?>
				<tr>
					<td colspan="4" style="background: #FEFEFE;">
					</br>
						<div style="background-color:#eaeaea;padding:10px;margin:0 0px;padding-top:20px;">
						<span style="color:#185891; font-size:20px;font-weight:bold; margin-left:25px;"><?php if($result->proposed_type=='Loan'){echo "Borrower/Guarantor/Company Director/Owner";}else{echo "Borrower/Reference";}?></span>
						<table border="1" id="gurantor_table" cellspacing="0" cellpadding="5" style="border-collapse: collapse;border-color:#c0c0c0;width:97%;margin:20px" >
						<tbody>
							<tr>
								<td width="10%" style="font-weight: bold;text-align:center">Type</td>
								<td width="10%" style="font-weight: bold;text-align:left">Name</td>
								<td width="10%" style="font-weight: bold;text-align:left">Father Name</td>
								<td width="15%" style="font-weight: bold;text-align:left">Present Address</td>
								<td width="15%" style="font-weight: bold;text-align:left">Permanent Address</td>
								<td width="15%" style="font-weight: bold;text-align:left">Business Address</td>
								<td width="10%" style="font-weight: bold;text-align:center">Status</td>
								<td width="15%" style="font-weight: bold;text-align:center">Occupation</td>
							</tr>
							<?php foreach ($cma_guarantor as $key): ?>
								<tr>
									<td style="text-align:center"><?=$key->type_name?></td>
									<td style="text-align:left"><?=$key->guarantor_name?></td>
									<td style="text-align:left"><?=$key->father_name?></td>
									<td style="text-align:left"><?=$key->present_address?></td>
									<td style="text-align:left"><?=$key->permanent_address?></td>
									<td style="text-align:left"><?=$key->business_address?></td>
									<td style="text-align:center"><?=$key->guar_sts_name?></td>
									<td style="text-align:center"><?=$key->occ_sts_name?></td>
								</tr>
							<?php endforeach ?>
						</tbody>
						</table>
					</div>
					</td>
				</tr>
				<?php endif ?>
				<?php if (!empty($doc_files)): ?>
					<tr>
						<td colspan="4" style="background: #FEFEFE;">
						</br>
							<div style="background-color:#eaeaea;padding:10px;margin:0 0px;padding-top:20px;">
							<span style="color:#185891; font-size:20px;font-weight:bold; margin-left:25px;">Secured Document Files</span>
							<table border="1" id="gurantor_table" cellspacing="0" cellpadding="5" style="border-collapse: collapse;border-color:#c0c0c0;width:97%;margin:20px" >
							<tbody>

								<tr>
									<td width="70%" style="font-weight: bold;text-align:left">Document Title</td>
									<td width="30%" style="font-weight: bold;text-align:center">file</td>
								</tr>
								<?php foreach ($doc_files as $key): ?>
									<tr>
										<td style="text-align:left"><?=$key->org_document_name?></td>
										<td style="text-align:center">
										<?php if ($key->file_name!=''): ?>
											<img id="file_preview" onclick="popup('<?=base_url()?>cma_file/document_file/<?=$key->file_name?>')" style=" cursor:pointer;text-align:center" height="18" src="<?=base_url()?>old_assets/images/print-preview.png">
										<?php endif ?>
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
							</table>
						</div>
						</td>
					</tr>
				<?php endif ?>
				<tr>
					<td colspan="4" style="background: #FEFEFE;">
					<br/>
						<div style="background-color:#eaeaea;padding:10px;margin:0 0px;overflow:scroll;padding-top:20px;">
						<span style="color:#185891; font-size:20px;font-weight:bold; margin-left:25px;">Facility Info</span>
						<table border="1" id="gurantor_table" style="table-layout: fixed;border-color:#c0c0c0;width:180%;margin:20px" >
								<thead>
									<tr>
										<td width="8%" style="font-weight: bold;text-align:left">Facility Type</td>
										<td width="10%" style="font-weight: bold;text-align:left">A/C Number</td>
										<td width="5%" style="font-weight: bold;text-align:left">Sch Desc</td>
										<td width="5%" style="font-weight: bold;text-align:left">Int. Rate</td>
										<td width="10%" style="font-weight: bold;text-align:left">Disbursement Date</td>
										<td width="7%" style="font-weight: bold;text-align:left">Expire Date</td>
										<td width="7%" style="font-weight: bold;text-align:left">Disbursed Amount</td>
										<td width="5%" style="font-weight: bold;text-align:left">Loan Tenor</td>
										<td width="5%" style="font-weight: bold;text-align:left">Payable</td>
										<td width="7%" style="font-weight: bold;text-align:left">Repayment</td>
										<td width="10%" style="font-weight: bold;text-align:left">Outstanding Balance</td>
										<td width="10%" style="font-weight: bold;text-align:left">Outstanding Balance Date</td>
										<td width="10%" style="font-weight: bold;text-align:left">Overdue Balance</td>
										<td width="10%" style="font-weight: bold;text-align:left">Overdue BL Date</td>
										<td width="10%" style="font-weight: bold;text-align:left">Call-up Date</td>
										<td width="7%" style="font-weight: bold;text-align:left">CL(BB)</td>
										<td width="7%" style="font-weight: bold;text-align:left">CL(BBL)</td>
										<td width="10%" style="font-weight: bold;text-align:left">Written-off Date</td>
										<td width="10%" style="font-weight: bold;text-align:left">Written-off Amt(A)</td>
										<td width="10%" style="font-weight: bold;text-align:left">Recovery After Written-off(B)</td>
									</tr>
								</thead>
								<tbody id="facility_info_body">
									<?php if (!empty($facility_info)): ?>
										<?php $cot=1; foreach ($facility_info as $key): ?>
											<tr>
												<td>
	                        						<?=isset($key->facility_type_name)?$key->facility_type_name:''?>
												</td>
												<td>
	                        						<?=isset($key->ac_number)?$key->ac_number:''?><br/>
	                        						<?=isset($key->ac_name)?$key->ac_name:''?>
												</td>
												<td>
	                        						<?=isset($key->sch_desc)?$key->sch_desc:''?>
												</td>
												<td>
	                        						<?=isset($key->int_rate)?$key->int_rate:''?>
												</td>
												<td>
	                        						<?=isset($key->disbursement_date)?$key->disbursement_date:''?>
												</td>
												<td>
	                        						<?=isset($key->expire_date)?$key->expire_date:''?>
												</td>
												<td>
	                        						<?=isset($key->disbursed_amount)?number_format($key->disbursed_amount,2):''?>
												</td>
												<td>
	                        						<?=isset($key->loan_tenor)?$key->loan_tenor:''?>
												</td>
												<td>
	                        						<?=isset($key->payble)?number_format($key->payble,2):''?>
												</td>
												<td>
	                        						<?=isset($key->repayment)?number_format($key->repayment,2):''?>
												</td>
												<td>
	                        						<?=isset($key->outstanding_bl)?number_format($key->outstanding_bl,2):''?>
												</td>
												<td>
	                        						<?=isset($key->outstanding_bl_dt)?$key->outstanding_bl_dt:''?>
												</td>
												<td>
	                        						<?=isset($key->overdue_bl)?number_format($key->overdue_bl,2):''?>
												</td>
												<td>
	                        						<?=isset($key->overdue_bl_dt)?$key->overdue_bl_dt:''?>
												</td>
												<td>
	                        						<?=isset($key->call_up_dt)?$key->call_up_dt:''?>
												</td>
												<td>
	                        						<?=isset($key->cl_bb)?$key->cl_bb:''?>
												</td>
												<td>
	                        						<?=isset($key->cl_bbl)?$key->cl_bbl:''?>
												</td>
												<td>
	                        						<?=isset($key->write_off_dt)?$key->write_off_dt:''?>
												</td>
												<td>
	                        						<?=isset($key->write_off_amount)?number_format($key->write_off_amount,2):''?>
												</td>
												<td>
	                        						<?=isset($key->recovery_after_Wf)?number_format($key->recovery_after_Wf,2):''?>
												</td>
											</tr>
										<?php $cot++; endforeach ?>
										<input type="hidden" name="facility_info_counter" id="facility_info_counter" value="<?=$cot-1?>">
									<?php else: ?>
									<?php endif ?>
								</tbody>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan="4" style="background: #FEFEFE;">
						</br>
						<div style="background-color:#eaeaea;padding:10px;margin:0 0px;padding-top:20px;overflow:scroll;">
						<span style="color:#185891; font-size:20px;font-weight:bold; margin-left:25px;">Mortgage & Security Details</span>
						<table border="1" id="guarantor_info" cellspacing="0" cellpadding="5" style="border-color:#c0c0c0;width:98%;margin:20px" >
							<tbody>
								<tr>
									<th>Security</th>
									<th>D</th>
									<th>E</th>
									<th>P</th>
									<th>Mortgage <br/>Schedule Name</th>
									<th>Mortgage <br/>Dchedule Description</th>
									<th>Mortgage <br/>Deed Number</th>
									<th>Mortgage <br/>Date</th>
									<th>Valuator <br/>MV</th>
									<th>Total Land <br/>Area (in decimals)</th>
								</tr>
								<?php $cot=1; foreach($cma_mortgage as $key){ ?>
								<tr>
									<td class="headtd" style="text-align:center;">
										<div id="headerRow_<?=$cot;?>">
											<span class="headSpan" id="show_spand_<?=$cot;?>" onClick="ShowDiv(<?=$cot;?>)" >
											<img src="<?=base_url()?>images/hide.png" align="absmiddle" /></span>
											<span class="headSpan" style="display:none;" id="hide_spand_<?=$cot;?>" onClick="HideDiv(<?=$cot;?>)"><img src="<?=base_url()?>images/show.png" align="absmiddle" ></span>
											<input type="hidden" name="mortgage_id_<?=$cot;?>" id="mortgage_id_<?=$cot;?>" value="<?=isset($key->id)?$key->id:''?>">
											<input type="hidden" name="schedule_name_<?=$cot;?>" id="schedule_name_<?=$cot;?>" value="<?=isset($key->mort_schedule_name)?$key->mort_schedule_name:''?>">
										</div>
									</td>
									<td><div style="cursor:pointer" onclick="delete_record_message('mortgage_delete',<?= $key->id?>,<?= $key->cma_id?>);" ><img align="center" src="<?=base_url()?>images/delete-New.png"></div></td>
									<td><div style="cursor:pointer" onclick="editmortgage(<?= $key->cma_id?>,<?= $id?>,<?= $key->id?>)" ><img align="center" src="<?=base_url()?>images/edit-new.png"></div></td>
									<td><div style="cursor:pointer" onclick="mortgagedetails(<?= $key->id?>,'mortgage')" ><img align="center" src="<?=base_url()?>images/view_detail.png"></div></td>
									<td><?= $key->mort_schedule_name?></td>
									<td><?= $key->mort_schedule_desc?></td>
									<td><?= $key->deed_number?></td>
									<td><?= $key->mortgage_date?></td>
									<td><?= $key->valuator_mv?></td>
									<td><?= $key->land_area?></td>
								</tr>
								<tr style="vertical-align:top; display:none" class="innertrow classes_<?=$cot;?>" id="tr_<?=$cot;?>">
									<td colspan="10">
										<table cellspacing="0" style="margin-top:0px;border:1px solid #008080" width="140%">
											<thead bgcolor="#008080" style="font-size:12px;color:black">
												<th width="5%">D</th>
												<th width="5%">E</th>
												<th width="5%">P</th>
												<th width="8%">Title deed number</th>
												<th width="8%">Date of registration</th>
												<th width="8%">Type of Deed</th>
												<th width="8%">District</th>
												<th width="8%">Thana/Police Station</th>
												<th width="8%">Sub-registry Office</th>
												<th width="10%">Mouza</th>
												<th width="8%">Land Area </th>
												<th width="8%">Plot Number</th>
												<th width="8%">Holding number</th>
												<th width="8%">Jote  No.</th>
												<th width="8%">CS Khatian no.</th>
												<th width="8%">SA/PS Khatian no.</th>
											</thead>
											<tbody>
												<?php $cot1=1; foreach($cma_mortgage_security as $key1){ ?>
													<?php if ($key1->mortgage_id==$key->id): ?>
														<tr>
															<td><div style="cursor:pointer" onclick="delete_record_message('security_delete',<?= $key1->id?>,<?= $key->cma_id?>);" ><img align="center" src="<?=base_url()?>images/delete-New.png"></div></td>
															<td><div style="cursor:pointer" onclick="editsecurity(<?= $key->cma_id?>,<?= $id?>,<?= $key->id?>,<?= $key1->id?>)" ><img align="center" src="<?=base_url()?>images/edit-new.png"></div></td>
															<td><div style="cursor:pointer" onclick="mortgagedetails(<?= $key1->id?>,'security')" ><img align="center" src="<?=base_url()?>images/view_detail.png"></div></td>
															<td><?=$key1->title_deed_number?></td>
															<td><?=$key1->reg_date?></td>
															<td><?=$key1->deed_type?></td>
															<td><?=$key1->district?></td>
															<td><?=$key1->thana?></td>
															<td><?=$key1->sub_reg_office?></td>
															<td><?=$key1->mouza?></td>
															<td><?=$key1->land_area?></td>
															<td><?=$key1->plot_number?></td>
															<td><?=$key1->holding_number?></td>
															<td><?=$key1->jote_no?></td>
															<td><?=$key1->cs_khatian_no?></td>
															<td><?=$key1->sa_khatian_no?></td>
														</tr>
													<?php $cot1++; endif ?>
												<?php } ?>
												<input type="hidden" name="security_counter_edit_<?=$cot;?>" id="security_counter_edit_<?=$cot;?>" value="<?=$cot1-1;?>">
											</tbody>
											<tfoot>
				                				<tr>
				                					<td colspan="16" style="text-align: right">
				                						Add More Security<input tabindex="" type="button" title="Add More" onclick="addsecuerity(<?= $cmaid?>,<?= $id?>,<?= $key->id ?>)" class="addmore"><br>
				                					</td>
				                				</tr>
				                			</tfoot>
										</table>
									</td>
								</tr>
							<?php $cot++; } ?>
							<input type="hidden" name="mortgage_counter" id="mortgage_counter" value="<?=$cot-1?>">
							</tbody>
							<tfoot>
								<tr>
									<td colspan="10" style="text-align: right">
										Add More Mortgage<input tabindex="" type="button" title="Add More" onclick="addmortgage(<?= $id;?>,<?= $cmaid;?>)" class="addmore"><br>
									</td>
								</tr>
							</tfoot>
						</table>
						</div>
					</td>
				</tr>
		</table>
		<table  align="center" style="font-size:15px !important;margin-bottom:20px !important" border="0" cellspacing="0" cellpadding="2">
		  <tr align="center"><td style="border:0px; vertical-align:top;">		
			<br/>
			<input type="button" value="Update" onclick="delete_action('sendtochcker')" class="buttonStyle" style="background-color:#185891;color:#fff;border-radius: 20px !important;height:50px;width:200px;font-family: sans-serif;font-size: 16px;" id="in_req_button"/> <span id="in_req_loading" style="display:none">Please wait... <img src="<?=base_url()?>images/loader.gif" align="bottom"></span>
			<br/><br/><br/>
			</td>
		  </tr>
		</table>
		</form>
	</div>
<!-- Modal for product details -->
	<div id="details" style="visibility:hidden;position: fixed; top: 50%;">
    <div><strong><label id="header_title"></label></strong></div>
		<form method="POST" name="action_form" id="action_form"  style="margin:0px;">
			<div style="" id="details_table">
				<table style="width: 100%;" id="preview_table">
					<tbody id="main_body_mort_security">
						
					</tbody>
				</table>
				<br>
			    <div id="close_btn_row" style="text-align:center;margin-bottom:30px;width:100%;">
			    	<input type="button" align="center" class="button1" id="codeOK" value="Close" />
			    </div>
			</div>
		</form>
	</div>
</body>

<div id="r_history" style="visibility:hidden;">
    <div style="padding-left: 17px"><strong>Return/Reject History</strong></div>
		<div style="" id="details_table">
			<table style="width: 100%;" class="preview_table2">
				<thead>
					<th width="20%" align="left"><strong>Status</strong></th>
					<th width="20%" align="left"><strong>User</strong></th>
					<td width="20%" align="center"><strong>Date and Time</strong></td>
					<td width="20%" align="left"><strong>Description</strong></td>
					<td width="20%" align="left"><strong>Reason</strong></td>
				</thead>
				<tbody id="r_history_details">
					
				</tbody>
				<tfoot>
					<tr>
						<td colspan="5" align="center"></br></br><input type="button" class="button1" id="r_ok" value="Close" /></td>
					</tr>
				</tfoot>
			</table>
			<br>
	</div>
</div>

<div id="deleteMessageDialogContent"  style="display:none">
  <div class="hd"><h2 class="conf">Are you sure you want to <span id="message"></span></h2></div>
  <form method="POST" name="delete_form" id="delete_form"  style="margin:0px;">
    <input name="deleteEventId" id="deleteEventId" value="" type="hidden">
    <input name="type" id="type" value="" type="hidden">
    <input type="hidden" id="cma_id" name="cma_id" value="<?=$cmaid?>">
 
     <span id="comments_part">Delete Reason:
     <input name="comments" id="comments" type="text" style="width:370px; background-color:#CCC">
     </span>

   	<div class="bd">
      <div class="inlineError" id="deleteMessageErrorMsg" style="display:none"></div>
      <div class="instrText" style="margin-bottom: 10px">
     &nbsp;
      </div>
    </div>

    <a class="btn-small btn-small-normal" id="deleteMessageDialogConfirm"><span>Yes</span></a>
    <a class="btn-small btn-small-secondary" id="deleteMessageDialogCancel"><span>Cancel</span></a>
    <span id="loading" style="display:none">Please wait... <img src="<?=base_url()?>images/loader.gif" align="bottom"></span>
    </form>
</div>

<div id="sendToCheckerMessageDialogContent"  style="display:none;">
    <div class="hd"><h2 class="conf" style="margin-top:0px">Do you want to <span id="send_message"></span>?</h2></div>
    <form method="POST" name="sendToCheckerMessageform" id="sendToCheckerMessageform"  style="margin:0px;">
       
       <input name="send_type" id="send_type" value="" type="hidden">	
       <input name="success_message" id="success_message" value="" type="hidden">		
		<input type="hidden" id="deleteEventId" name="deleteEventId" value="<?=$id;?>" />
      	<div class="bd">
          <div class="inlineError" id="sendToCheckerMessageErrorMsg" style="display:none"></div>
          <div class="instrText" style="margin-bottom: 20px"></div>
          <div class="instrText" style="margin-bottom: 20px" id="reason_message_body">
          	<span id="reason_message"></span>: <span style="color: red;">*</span> <br><textarea name="reason" id="reason" cols="50"></textarea><br><br>
          	Notify By:&nbsp;&nbsp;
          	<label>
          		<input type="checkbox" name="email_notification" id="email_notification" value=""> Email
          	</label>
		      	&nbsp;&nbsp;&nbsp;
          </div>
        </div>
        <a class="btn-small btn-small-normal" id="sendToCheckerMessageDialogConfirm" onclick="call_ajax_submit()"><span id="button_tag"></span></a> 
        <a class="btn-small btn-small-secondary" id="sendToCheckerMessageDialogCancel" onclick="close_window()"><span>Cancel</span></a> 
        <span id="loadingReturn" style="display:none">Please wait... <img src="<?=base_url()?>images/loader.gif" align="bottom"></span>
    </form>
</div>