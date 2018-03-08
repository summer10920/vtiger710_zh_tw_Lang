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
	'MailConverter' => '郵件轉換',
	'MailConverter_Description' => '將電子郵件轉換為相應的記錄',	
	'MAILBOX' => '郵箱',
	'RULE' => 'Rule',
	'RULE' => '規則',
	'ALL' => '所有',
	'UNSEEN' => '未讀',
	'LBL_MARK_READ' => '標記為已讀',
	'SEEN' => '已讀',		
	'LBL_EDIT_MAILBOX' => '編輯郵箱',
	'LBL_CREATE_MAILBOX' => '建立郵箱',
	'LBL_BACK_TO_MAILBOXES' => '回到郵箱',	
	'LBL_MARK_MESSAGE_AS' => '標記郵件為',
	'LBL_CREATE_MAILBOX_NOW' => '現在建立郵箱',
	'LBL_ADDING_NEW_MAILBOX' => '新增新郵箱',
	'MAILBOX_DETAILS' => '郵箱細節',
	'SELECT_FOLDERS' => '選擇資料夾',
	'ADD_RULES' => '新增規則',
	'CREATE_Leads_SUBJECT' => '建立潛在客戶',
	'CREATE_Contacts_SUBJECT' => '建立聯絡人',
	'CREATE_Accounts_SUBJECT' => '建立客戶',
	'LBL_ACTIONS' => '操作',	
	'LBL_MAILBOX' => '郵箱',
	'LBL_RULE' => '規則',
	'LBL_CONDITIONS' => '條件',
	'LBL_FOLDERS_SCANNED' => '資料夾已掃瞄',
	'LBL_NEXT' => '下一步',
	'LBL_FINISH' => '完成',
	'TO_CHANGE_THE_FOLDER_SELECTION_DESELECT_ANY_OF_THE_SELECTED_FOLDERS' => '要更改資料夾選擇取消選中任何選定的資料夾',
	'LBL_MAILCONVERTER_DESCRIPTION' => "郵件掃瞄轉換器允許您配置，通過自動掃瞄您的郵件，來建立相應的CRM對象。<br/>你需要定義規則，來指定郵件上完成什麼操作。<br/>掃瞄郵件的操作是自動，除非你在計劃中禁止郵件掃瞄任務。 <br /><br /><br />",
	
	//Server Messages
	'LBL_MAX_LIMIT_ONLY_TWO' => '您可以配置兩個郵箱',
	'LBL_IS_IN_RUNNING_STATE' => '在運行狀態',
	'LBL_SAVED_SUCCESSFULLY' => '儲存成功',
	'LBL_CONNECTION_TO_MAILBOX_FAILED' => '連接到郵箱失敗。',
	'LBL_DELETED_SUCCESSFULLY' => '刪除成功',
	'LBL_RULE_DELETION_FAILED' => '規則刪除失敗',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => '規則排序資訊為空',
	'LBL_SEQUENCE_UPDATED_SUCCESSFULLY' => '順序更新成功',
	'LBL_SCANNED_SUCCESSFULLY' => '掃瞄成功',

	//Field Names
	'scannername' => '掃描名稱',
	'server' => 'IMAP 伺服器名稱',
	'Protocol' => '協議',
	'username' => '帳戶名稱',
	'password' => '密碼',
	'SSL Type' =>  'SSL 類型',
	'SSL Method' => 'SSL 方式',
	'connecturl' => '連接網址',
	'searchfor' => '查找',
	'markas' => '掃瞄後標記為',	
	'Status' => '狀態',
    'time_zone' => '郵件主機時區',
    'scanfrom' => '掃描郵件自',
    'YESTERDAY' => '昨日',

	//Field values & Messages
	'LBL_ENABLE' => '啟用',
	'LBL_DISABLE' =>'停用',
	'LBL_STATUS_MESSAGE' => '勾選啟動',
	'LBL_VALIDATE_SSL_CERTIFICATE' => '驗證 SSL 協定',
	'LBL_DO_NOT_VALIDATE_SSL_CERTIFICATE' => '不驗證SSL協定',	
	'LBL_ALL_MESSAGES_FROM_LAST_SCAN' => '從上次掃瞄後的所有訊息',	
	'LBL_UNREAD_MESSAGES_FROM_LAST_SCAN' => '從上次掃瞄後的未讀訊息',
	'LBL_MARK_MESSAGES_AS_READ' => '標記訊息為已讀',
	'LBL_I_DONT_KNOW' => "我不確定",

	//Mailbox Actions
	'LBL_SCAN_NOW' => '立即掃瞄',
	'LBL_RULES_LIST' => '規則列表',
	'LBL_SELECT_FOLDERS' => '選擇資料夾',

	//Action Messages
	'LBL_DELETED_SUCCESSFULLY' => '刪除成功',
	'LBL_RULE_DELETION_FAILED' => '規則刪除失敗',
	'LBL_SAVED_SUCCESSFULLY' => '儲存成功',
	'LBL_SCANED_SUCCESSFULLY' => '掃瞄成功',
	'LBL_IS_IN_RUNNING_STATE' => '處於執行狀態',
	'LBL_FOLDERS_INFO_IS_EMPTY' => '資料夾資訊為空',
	'LBL_RULES_SEQUENCE_INFO_IS_EMPTY' => '規則序列資訊為空',

	//Folder Actions
	'LBL_UPDATE_FOLDERS' => '更新資料夾',	

	//Rule Fields
	'fromaddress' => '寄件地址',	
	'toaddress' => '收件地址',
	'subject' => '主旨',
	'body' => '內容',
	'matchusing' => '符合',
	'action' => '操作',

	//Rules List View labels
	'LBL_PRIORITY' => '優先級',
	'PRIORITISE_MESSAGE' => '拖曳區塊調整規則的優先級',	
	'LBL_NOTE'=>'注意',
	'LBL_MAILCONVERTER_DISABLE_MESSAGE'=>'郵件轉換器將於7月31日刪除。 Mailroom提供了一種更簡單的方式來掃描您的電子郵件。請啟用Mailroom ',
	'LBL_CLICK_HERE'=>'點擊此處',

	//Rule Field values & Messages
	'LBL_ALL_CONDITIONS' => '所有條件',
	'LBL_ANY_CONDITIOn' => '任何條件',

	//Rule Conditions
	'Contains' => '包含',
	'Not Contains' => '不包含',	
	'Equals' => '等於',
	'Not Equals' => '不等於',
	'Begins With' => '開始於',	
	'Ends With' => '結束於',	
	'Regex' => '正則表達式',	
    'LBL_FROM_ADDRESS_PLACE_HOLDER' => '郵件位置或網域名稱',

	//Rule Actions
	'CREATE_HelpDesk_FROM' => '建立客服記錄(含聯絡人)',
    'CREATE_HelpDeskNoContact_FROM' => '建立客服記錄(不含聯絡人)',
	'UPDATE_HelpDesk_SUBJECT' => '更新客服記錄',
	'LINK_Contacts_FROM' => '新增到聯絡人 [寄件人]',
	'LINK_Contacts_TO' => '新增到聯絡人 [收件人]',
	'LINK_Accounts_FROM' => '新增到客戶 [寄件人]',	
	'LINK_Accounts_TO' => '新增到客戶 [收件人]',	
	'LINK_Leads_FROM' => '新增到潛在客戶 [寄件人]',
	'LINK_Leads_TO' => '新增到潛在客戶 [收件人]',
    'CREATE_Potentials_SUBJECT' => '建立銷售機會 (含聯絡人)',
    'CREATE_PotentialsNoContact_SUBJECT' => '建立銷售機會 (不含聯絡人)',
    'LINK_Potentials_FROM' => 'Add to Opportunity [寄件人]',
    'LINK_Potentials_TO' => 'Add to Opportunity [收件人]',
    'LINK_HelpDesk_FROM' => 'Add to Ticket [寄件人]',
    'LINK_HelpDesk_TO' => 'Add to Ticket [收件人]',
    
    //Select Folder
    //'LBL_UPDATE_FOLDERS' => '更新資料夾',
	'LBL_UNSELECT_ALL' => '取消全選',
	
	//Setup Rules
	'LBL_CONVERT_EMAILS_TO_RESPECTIVE_RECORDS' => '電子郵件轉換到相應的記錄',
	'LBL_DRAG_AND_DROP_BLOCK_TO_PRIORITISE_THE_RULE' => '規則編號代表優先級。拖曳可優先級更改。',
	'LBL_ADD_RULE' => '新增規則',	
    'LBL_EDIT_RULE' => '編輯規則',
	//'LBL_PRIORITY' => '優先級',
	'LBL_DELETE_RULE' => '刪除規則',
	'LBL_BODY' => '內容',	
	'LBL_MATCH' => '符合',
	'LBL_ACTION' => '操作',
	'LBL_FROM' => 'From',
	'LBL_CONNECTION_ERROR' => '連接郵箱失敗。請檢查網絡連接，再試一次。', 
    'LBL_RULE_CONDITIONS' => '規則條件',
    'LBL_RULE_ACTIONS' => '規則操作',
    // Body Rule
    'LBL_AUTOFILL_VALUES_FROM_EMAIL_BODY' => '自訂填入郵件內容',
    'LBL_DELIMITER' => '分隔符號',
    'LBL_COLON' => ': (冒號)',
    'LBL_SEMICOLON' => '; (分號)',
    'LBL_DASH' => '- (連號)',
    'LBL_EQUAL' => '= (等號)',
    'LBL_GREATER_THAN' => '> (大於)',
    'LBL_COLON_DASH' => ':- (冒號 + 連號)',
    'LBL_COLON_EQUAL' => ':= (冒號 + 等號)',
    'LBL_SEMICOLON_DASH' => ';- (分號 + 連號)',
    'LBL_SEMICOLON_EQUAL' => ';= (分號 + 等號)',
    'LBL_EQUAL_GREATER_THAN' => '=> (等號 + 大於)',
    'LBL_OTHER' => '其他',
    'LBL_DELIMITER_INFO' => '請選擇電子郵件內容標簽的分隔符號',
    'LBL_EMAIL_BODY_INFO' => '將要掃描於範例郵件中的文字複製到下面框中。 CRM 將試著定位關鍵字並幫助您映射到 CRM 欄位。',
    'LBL_SAMPLE_BODY_TEXT' => '範例內容文字',
    'LBL_FIND_FIELDS' => '點擊此處從郵件內容找到關鍵字',
    'LBL_BODY_FIELDS' => '來自郵件的關鍵字',
    'LBL_CRM_FIELDS' => 'CRM 欄位',
    'LBL_MAP_TO_CRM_FIELDS' => '映射關鍵字到 CRM 欄位',
    'SELECT_FIELD' => '選擇欄位',
    'LBL_SAVE_MAPPING_INFO' => '保存現有郵件轉換規則的內容規則，將其覆蓋現有的內容規則。',
    'LBL_MULTIPLE_FIELDS_MAPPED' => '無法將一個 CRM 欄位映射到多個欄位',
    'LBL_BODY_RULE' => '內容規則已定義',
    
    'LBL_MAIL_SCANNER_INACTIVE' => '此郵箱是無效狀態',
    'LBL_NO_RULES' => '此郵箱未定義任何規則',
    
	'LBL_SCANNERNAME_ALPHANUMERIC_ERROR' => '掃描名稱僅接受字母和數字。 不允許使用特殊符號。',
    'LBL_SERVER_NAME_ERROR' => '服務器名稱無效。服務器名稱不允許使用特殊符號。',
    'LBL_USERNAME_ERROR' => '請輸入有效電子郵件地址作為用戶名。',
    'servertype' => '服務器類型',
    'LBL_DUPLICATE_USERNAME_ERROR' => '已經有使用此郵件地址配置的郵件轉換器。 您不能使用相同的電子郵件地址建立重覆的郵件轉換器。',
    'LBL_DUPLICATE_SCANNERNAME_ERROR' => '已經有使用此名稱配置的郵件轉換器。您不能再建立重覆名稱的郵件轉換器。',
       
);
$jsLanguageStrings = array(
	'JS_MAILBOX_DELETED_SUCCESSFULLY' => '郵箱刪除成功',
	'JS_MAILBOX_LOADED_SUCCESSFULLY' => '郵箱載入成功',
    'JS_SELECT_ATLEAST_ONE' => '請至少映射一個欄位',
    'JS_SERVER_NAME' => '輸入服務器名稱',
    'JS_TIMEZONE' => '郵件服務器時區',
    'JS_SCAN_FROM' => '掃描郵件從',
    'JS_TIMEZONE_INFO' => '請選擇您的郵件服務器所在的時區。選擇錯誤的時區可能掃描會跳過一些電子郵件。',
    'JS_SCAN_FROM_INFO' => '此欄位決定是否應掃描郵箱中的所有郵件，或掃描昨天或以後登入到郵箱中的郵件。 此欄位僅適用於首次配置或選擇要掃描的新資料夾時。',
    'JS_SELECT_ONE_FOLDER' => '您必須至少選擇一個資料夾。',
);	
/*+***********************************************************************************
 * 臺灣繁體中文語言包 - MailConverter 郵件轉換
 * 版本: 7.1.0 
 * 作者: Loki Jiang | https://www.facebook.com/groups/vTigerCRMtoTaiwan/
 * 更新日期: 2018-03-07
 *************************************************************************************/