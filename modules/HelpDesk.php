<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
$languageStrings = array(
	// Basic Strings
	'HelpDesk' => '客服記錄',
	'SINGLE_HelpDesk' => '客服記錄',	
	'LBL_ADD_RECORD' => '新增客服記錄',
	'LBL_RECORDS_LIST' => '客服記錄列表',

	// Blocks
	'LBL_TICKET_INFORMATION' => '客服記錄資訊',
	'LBL_TICKET_RESOLUTION' => '詳細解決方案',

	//Field Labels
	'Ticket No' => '客服紀錄編號',	
	'LBL_SEVERITY' => '嚴重程度',
	'Update History' => '更新歷史記錄',
	'Hours' => '時數',
	'Days' => 'Days',
	'Days' => '天數',		
	'Solution' => '解決方案',
	'From Portal' => '來自於客戶入口網',
	'Related To' => '客戶名稱',
	'Contact Name' => '聯絡人',
	//Added for existing picklist entries

	'Big Problem'=>'嚴重問題',
	'Small Problem'=>'輕微問題',
	'Other Problem'=>'其它問題',	

	'Normal'=>'一般',
	'High'=>'高度重視',
	'Urgent'=>'急需解決',

	'Minor'=>'輕微',
	'Major'=>'主要',
	'Feature'=>'比較特別',	
	'Critical'=>'非常嚴重',	

	'Open'=>'待處理',
	'Wait For Response'=>'等待回應',
	'Closed'=>'已關閉',
	'LBL_STATUS' => '狀態',
	//'LBL_SEVERITY' => '嚴重程度',
	//DetailView Actions
	'LBL_CONVERT_FAQ' => '轉為常見問答',
	'LBL_RELATED_TO' => '關聯於',

	//added to support i18n in ticket mails
	'Ticket ID'=>'客服記錄ID',
	'Hi' => '您好',
	'Dear'=> '親愛的',
	'LBL_PORTAL_BODY_MAILINFO'=> '客服記錄為',
	'LBL_DETAIL' => '詳情:',
	'LBL_REGARDS'=> '祝商祺',
	'LBL_TEAM'=> '客服中心',
	'LBL_TICKET_DETAILS' => '客服記錄內容',
	'LBL_SUBJECT' => '主題：',
	'created' => '建立',
	'replied' => '已回覆',
	'reply'=>'這裡有一條回覆',
	'customer_portal' => '在CRM的客戶入口網內',
	'link' => '您可以點擊下面的連結查看回覆：',
	'Thanks' => '感謝',
	'Support_team' => '技術支援團隊',
	'The comments are' => '回應為',
	'Ticket Title' => '客服記錄標題',	
	'Re' => 'Re :',

	//This label for customerportal.
	'LBL_STATUS_CLOSED' =>'關閉',//Do not convert this label. This is used to check the status. If the status 'Closed' is changed in vtigerCRM server side then you have to change in customerportal language file also.
	'LBL_STATUS_UPDATE' => '客服記錄狀態更新為',
	'LBL_COULDNOT_CLOSED' => '客服記錄不能',
	'LBL_CUSTOMER_COMMENTS' => '客戶對你的回覆提供了以下補充資訊：',
	'LBL_RESPOND'=> '請儘快回覆上述客服記錄。',
	'LBL_SUPPORT_ADMIN' => '支援系統管理員',
	'LBL_RESPONDTO_TICKETID' =>'回應客服記錄ID',
	'LBL_RESPONSE_TO_TICKET_NUMBER' =>'回應客服記錄編號',
	'LBL_TICKET_NUMBER' => '客服記錄編號',
	'LBL_CUSTOMER_PORTAL' => '在客戶入口網 - 緊急',
	'LBL_LOGIN_DETAILS' => '以下是您的客戶入口網的登入資訊：',
	'LBL_MAIL_COULDNOT_SENT' =>'郵件無法發送',
	'LBL_USERNAME' => '用戶名稱 :',
	'LBL_PASSWORD' => '密碼:',
	'LBL_SUBJECT_PORTAL_LOGIN_DETAILS' => '關於您客戶入口網的登入資訊',
	'LBL_GIVE_MAILID' => '請提供您的電子郵件',
	'LBL_CHECK_MAILID' => '請檢查您用來登入客戶入口網的電子郵件地址',
	'LBL_LOGIN_REVOKED' => '您的登入帳戶已被取消。請聯絡管理員。',
	'LBL_MAIL_SENT' => '根據客戶入口網登入資訊，已發送郵件至您的信箱',
	'LBL_ALTBODY' => '這是在純文字格式的非HTML的郵件客戶端的主要內容',	
	'HelpDesk ID' => '客服記錄ID',
	//Portal shortcuts
	'LBL_ADD_DOCUMENT'=>"新增文件",
	'LBL_OPEN_TICKETS'=>"打開客服記錄",
	'LBL_CREATE_TICKET'=>"建立客服記錄",

	//Optimized by Loki in 7.1.0
	'Title'=>'主題',
	'Severity' => '客評影響度',
);

$jsLanguageStrings=array(
	'LBL_ADD_DOCUMENT'=>'新增文件',
	'LBL_OPEN_TICKETS'=>'打開客服記錄',
	'LBL_CREATE_TICKET'=>'建立客服記錄'
);
/*+***********************************************************************************
 * 臺灣繁體中文語言包 - HelpDesk 客服記錄
 * 版本: 7.1.0 
 * 作者: Loki Jiang | https://www.facebook.com/groups/vTigerCRMtoTaiwan/
 * 更新日期: 2018-03-15
 *************************************************************************************/