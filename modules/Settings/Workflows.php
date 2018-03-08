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
	//Basic Field Names
	'LBL_NEW' => '新建',
	'LBL_WORKFLOW' => '工作流程',	
	'LBL_CREATING_WORKFLOW' => '正在建立工作流程',
	'LBL_EDITING_WORKFLOW' => '正在編輯工作流程',
	'LBL_ADD_RECORD' => '新增工作流程',

	//Edit view
	'LBL_STEP_1' => '步驟 1',
	'LBL_ENTER_BASIC_DETAILS_OF_THE_WORKFLOW' => '輸入工作流程的基本細節',	
	'LBL_SPECIFY_WHEN_TO_EXECUTE' => '指定何時執行此工作流程',
	'ON_FIRST_SAVE' => '當記錄第一次儲存時',
	'ONCE' => '當條件第一次滿足時',	
	'ON_EVERY_SAVE' => '每次儲存記錄時',		
	'ON_MODIFY' => '每次記錄被修改時',
	'ON_SCHEDULE'=>'預定排程',
	'MANUAL' => '系統',
	'SCHEDULE_WORKFLOW' => '工作流程排程',
	'ADD_CONDITIONS' => '新增條件',
	'ADD_TASKS' => '新增任務',

	//Step2 edit view
	'LBL_EXPRESSION' => '表達式',
	'LBL_FIELD_NAME' => '欄位',	
	'LBL_SET_VALUE' => '設定值',	
	'LBL_USE_FIELD' => '使用欄位',
	'LBL_USE_FUNCTION' => '使用函數',	
	'LBL_RAW_TEXT' => '原始文字',
	'LBL_ENABLE_TO_CREATE_FILTERS' => '啟用建立篩選器',
	'LBL_CREATED_IN_OLD_LOOK_CANNOT_BE_EDITED' => '此工作流程基於舊的樣式建立，不能編輯。您可以選擇重新建立，或者使用現有的篩選條件。',
	'LBL_USE_EXISTING_CONDITIONS' => '使用現有的條件',	
	'LBL_RECREATE_CONDITIONS' => '重新建立條件',
	'LBL_SAVE_AND_CONTINUE' => '儲存 & 繼續',

	//Step3 edit view
	'LBL_ACTIVE' => '啟用',	
	'LBL_TASK_TYPE' => '任務類型', 
	'LBL_TASK_TITLE' => '任務標題',
	'LBL_ADD_TASKS_FOR_WORKFLOW' => '新增工作流程的任務',	
	'LBL_EXECUTE_TASK' => '執行任務',
	'LBL_SELECT_OPTIONS' => '選擇操作',
	'LBL_ADD_FIELD' => '新增欄位',
	'LBL_ADD_TIME' => '新增時間',	
	'LBL_TITLE' => '標題',
	'LBL_PRIORITY' => '優先級',		
	'LBL_ASSIGNED_TO' => '分配給',
	'LBL_TIME' => '時間',
	'LBL_DUE_DATE' => '截止日期',
	'LBL_THE_SAME_VALUE_IS_USED_FOR_START_DATE' => '開始日期也使用相同的值',	
	'LBL_EVENT_NAME' => '事件名稱',
	'LBL_TYPE' => '類型',	
	'LBL_METHOD_NAME' => '方式名稱',
	'LBL_RECEPIENTS' => '收件人',
	'LBL_ADD_FIELDS' => '新增欄位',
	'LBL_SMS_TEXT' => 'SMS文字',	
	'LBL_SET_FIELD_VALUES' => '設定欄位值',
	//'LBL_ADD_FIELD' => '新增欄位',
	'LBL_IN_ACTIVE' => '未啟用',	
	'LBL_SEND_NOTIFICATION' => '發送通知',
	'LBL_START_TIME' => '開始時間',
	'LBL_START_DATE' => '開始日期',
	'LBL_END_TIME' => '結束時間',
	'LBL_END_DATE' => '結束日期',
	'LBL_ENABLE_REPEAT' => '啟用重複',
	'LBL_NO_METHOD_IS_AVAILABLE_FOR_THIS_MODULE' => '沒有可用於該模組的方式',
	
	'LBL_NO_TASKS_ADDED' => '沒有任務',	
	'LBL_CANNOT_DELETE_DEFAULT_WORKFLOW' => '你不能刪除預設的工作流程',
	'LBL_MODULES_TO_CREATE_RECORD' => '建立紀錄於',
	'LBL_EXAMPLE_EXPRESSION' => '表達式',
	'LBL_EXAMPLE_RAWTEXT' => '原始文字',
	'LBL_VTIGER' => 'Vtiger',
	'LBL_EXAMPLE_FIELD_NAME' => '欄位',
	'LBL_NOTIFY_OWNER' => '通知主人',	
	'LBL_ANNUAL_REVENUE' => '年度營收',		
	'LBL_EXPRESSION_EXAMPLE2' => "if mailingcountry == 'India' then concat(firstname,' ',lastname) else concat(lastname,' ',firstname) end",
	'LBL_FROM' => '寄件人',
	'LBL_RUN_WORKFLOW' => '運行工作流程',
	'LBL_AT_TIME' => '時間',
	'LBL_HOURLY' => '每小時',
	'Optional' => '選項',
	'ENTER_FROM_EMAIL_ADDRESS'=> '輸入寄件人郵件地址',
	'LBL_ADD_TASK' => '建立任務',
    'Portal Pdf Url' =>'入口網PDF網址',

	'LBL_DAILY' => '每天',
	'LBL_WEEKLY' => '每週',
	'LBL_ON_THESE_DAYS' => '在這些天',
	'LBL_MONTHLY_BY_DATE' => '每月的指定日期',
	'LBL_MONTHLY_BY_WEEKDAY' => '每月的工作日',
	'LBL_YEARLY' => '每年',
	'LBL_SPECIFIC_DATE' => '特定的日期',
	'LBL_CHOOSE_DATE' => '選擇日期',
	'LBL_SELECT_MONTH_AND_DAY' => '選擇月份和日期',
	'LBL_SELECTED_DATES' => '選擇日期',
	'LBL_EXCEEDING_MAXIMUM_LIMIT' => '超過最大限值',
	'LBL_NEXT_TRIGGER_TIME' => '下一次觸發時間',
    'LBL_ADD_TEMPLATE' => '建立樣板',
    'LBL_LINEITEM_BLOCK_GROUP' => '合併計稅的行項目區域',
    'LBL_LINEITEM_BLOCK_INDIVIDUAL' => '單一計稅的行項目區域',
	'LBL_MESSAGE' => '資訊',	
    'LBL_ADD_PDF' => '建立PDF',
	
	//Translation for module
	'Calendar' => '任務',
	'Send Mail' => '傳送電子郵件',
	'Invoke Custom Function' => '調用自訂函數',
	'Create Todo' => '建立任務',
	'Create Event' => '建立事件',
	'Update Fields' => '更新欄位',
	'Create Entity' => '建立紀錄',
	'SMS Task' => 'SMS 任務',
	'Mobile Push Notification' => '手機推播通知',
    
    // v7 translations
    'LBL_WORKFLOW_NAME' => '工作流程名稱',
    'LBL_TARGET_MODULE' => '目標模組',
    'LBL_WORKFLOW_TRIGGER' => '工作流程觸發器',
    'LBL_TRIGGER_WORKFLOW_ON' => '觸發工作流程在',
    'LBL_RECORD_CREATION' => '記錄建立',
    'LBL_RECORD_UPDATE' => '記錄更新',
    'LBL_TIME_INTERVAL' => '時間間隔',
    'LBL_RECURRENCE' => '重複',
    'LBL_FIRST_TIME_CONDITION_MET' => '當第一次條件滿足時',
    'LBL_EVERY_TIME_CONDITION_MET' => '每次條件滿足時',
    'LBL_WORKFLOW_CONDITION' => '工作流程條件',
    'LBL_WORKFLOW_ACTIONS' => '工作流程操作',
    'LBL_DELAY_ACTION' => '延遲操作',
    'LBL_FREQUENCY' => '頻率',
    'LBL_SELECT_FIELDS' => '選擇欄位',
    'LBL_INCLUDES_CREATION' => '包括建立',
    'LBL_ACTION_FOR_WORKFLOW' => '工作流程動作',
    'LBL_WORKFLOW_SEARCH' => '按名稱搜尋',
	'LBL_ACTION_TYPE' => '操作類型（活動計數）',
	'LBL_VTEmailTask' => 'Email',
    'LBL_VTEntityMethodTask' => '自訂功能',
    'LBL_VTCreateTodoTask' => '任務',
    'LBL_VTCreateEventTask' => '事件',
    'LBL_VTUpdateFieldsTask' => '欄位更新',
    'LBL_VTSMSTask' => 'SMS 短信', 
    'LBL_VTPushNotificationTask' => '手機推播通知',
    'LBL_VTCreateEntityTask' => '建立記錄',
	'LBL_MAX_SCHEDULED_WORKFLOWS_EXCEEDED' => '已超過排定工作流程最大數量(%s)',
);

$jsLanguageStrings = array(
	'JS_STATUS_CHANGED_SUCCESSFULLY' => '狀態更改成功',
	'JS_TASK_DELETED_SUCCESSFULLY' => '任務刪除成功',
	'JS_SAME_FIELDS_SELECTED_MORE_THAN_ONCE' => '多次選擇了相同的欄位',
	'JS_WORKFLOW_SAVED_SUCCESSFULLY' => '工作流程儲存成功',
    'JS_CHECK_START_AND_END_DATE'=>'結束日期時間應大於或等於開始日期時間',
    'JS_TASK_STATUS_CHANGED' => '任務狀態已成功更改。',
    'JS_WORKFLOWS_STATUS_CHANGED' => '工作流程狀態已成功更改。',
    'VTEmailTask' => '發送郵件',
    'VTEntityMethodTask' => '調用自訂函數',
    'VTCreateTodoTask' => '建立任務',
    'VTCreateEventTask' => '建立事件',
    'VTUpdateFieldsTask' => '更新欄位',
    'VTSMSTask' => 'SMS 任務', 
    'VTPushNotificationTask' => '手機推播通知',
    'VTCreateEntityTask' => '建立記錄',
    'LBL_EXPRESSION_INVALID' => '表達式無效'
);
/*+***********************************************************************************
 * 臺灣繁體中文語言包 - Workflows 工作流程設定
 * 版本: 7.1.0 
 * 作者: Loki Jiang | https://www.facebook.com/groups/vTigerCRMtoTaiwan/
 * 更新日期: 2018-03-08
 *************************************************************************************/