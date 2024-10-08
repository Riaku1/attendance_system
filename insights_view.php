<?php
// This script and data application were generated by AppGini 23.14
// Download AppGini for free from https://bigprof.com/appgini/download/

	include_once(__DIR__ . '/lib.php');
	@include_once(__DIR__ . '/hooks/insights.php');
	include_once(__DIR__ . '/insights_dml.php');

	// mm: can the current member access this page?
	$perm = getTablePermissions('insights');
	if(!$perm['access']) {
		echo error_message($Translation['tableAccessDenied']);
		exit;
	}

	$x = new DataList;
	$x->TableName = 'insights';

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = [
		"`insights`.`id`" => "id",
		"IF(    CHAR_LENGTH(`employees1`.`EmpID`) || CHAR_LENGTH(`employees1`.`name`), CONCAT_WS('',   `employees1`.`EmpID`, '/', `employees1`.`name`), '') /* EmpID */" => "empID",
		"`insights`.`month`" => "month",
		"`insights`.`year`" => "year",
		"TIME_FORMAT(`insights`.`earliest_arrival`, '%r')" => "earliest_arrival",
		"TIME_FORMAT(`insights`.`latest_arrival`, '%r')" => "latest_arrival",
		"`insights`.`total_late_days`" => "total_late_days",
		"`insights`.`total_early_outs`" => "total_early_outs",
		"`insights`.`total_hours_worked`" => "total_hours_worked",
		"`insights`.`best_performance`" => "best_performance",
	];
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = [
		1 => '`insights`.`id`',
		2 => 2,
		3 => '`insights`.`month`',
		4 => '`insights`.`year`',
		5 => '`insights`.`earliest_arrival`',
		6 => '`insights`.`latest_arrival`',
		7 => 7,
		8 => 8,
		9 => 9,
		10 => 10,
	];

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = [
		"`insights`.`id`" => "id",
		"IF(    CHAR_LENGTH(`employees1`.`EmpID`) || CHAR_LENGTH(`employees1`.`name`), CONCAT_WS('',   `employees1`.`EmpID`, '/', `employees1`.`name`), '') /* EmpID */" => "empID",
		"`insights`.`month`" => "month",
		"`insights`.`year`" => "year",
		"TIME_FORMAT(`insights`.`earliest_arrival`, '%r')" => "earliest_arrival",
		"TIME_FORMAT(`insights`.`latest_arrival`, '%r')" => "latest_arrival",
		"`insights`.`total_late_days`" => "total_late_days",
		"`insights`.`total_early_outs`" => "total_early_outs",
		"`insights`.`total_hours_worked`" => "total_hours_worked",
		"`insights`.`best_performance`" => "best_performance",
	];
	// Fields that can be filtered
	$x->QueryFieldsFilters = [
		"`insights`.`id`" => "ID",
		"IF(    CHAR_LENGTH(`employees1`.`EmpID`) || CHAR_LENGTH(`employees1`.`name`), CONCAT_WS('',   `employees1`.`EmpID`, '/', `employees1`.`name`), '') /* EmpID */" => "EmpID",
		"`insights`.`month`" => "Month",
		"`insights`.`year`" => "Year",
		"`insights`.`earliest_arrival`" => "Earliest arrival",
		"`insights`.`latest_arrival`" => "Latest arrival",
		"`insights`.`total_late_days`" => "Total late days",
		"`insights`.`total_early_outs`" => "Total early outs",
		"`insights`.`total_hours_worked`" => "Total hours worked",
		"`insights`.`best_performance`" => "Best performance",
	];

	// Fields that can be quick searched
	$x->QueryFieldsQS = [
		"`insights`.`id`" => "id",
		"IF(    CHAR_LENGTH(`employees1`.`EmpID`) || CHAR_LENGTH(`employees1`.`name`), CONCAT_WS('',   `employees1`.`EmpID`, '/', `employees1`.`name`), '') /* EmpID */" => "empID",
		"`insights`.`month`" => "month",
		"`insights`.`year`" => "year",
		"TIME_FORMAT(`insights`.`earliest_arrival`, '%r')" => "earliest_arrival",
		"TIME_FORMAT(`insights`.`latest_arrival`, '%r')" => "latest_arrival",
		"`insights`.`total_late_days`" => "total_late_days",
		"`insights`.`total_early_outs`" => "total_early_outs",
		"`insights`.`total_hours_worked`" => "total_hours_worked",
		"`insights`.`best_performance`" => "best_performance",
	];

	// Lookup fields that can be used as filterers
	$x->filterers = ['empID' => 'EmpID', ];

	$x->QueryFrom = "`insights` LEFT JOIN `employees` as employees1 ON `employees1`.`EmpID`=`insights`.`empID` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm['view'] == 0 ? 1 : 0);
	$x->AllowDelete = $perm['delete'];
	$x->AllowMassDelete = (getLoggedAdmin() !== false);
	$x->AllowInsert = $perm['insert'];
	$x->AllowUpdate = $perm['edit'];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = (getLoggedAdmin() !== false);
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation['quick search'];
	$x->ScriptFileName = 'insights_view.php';
	$x->TableTitle = 'Insights';
	$x->TableIcon = 'resources/table_icons/chart_bar_edit.png';
	$x->PrimaryKey = '`insights`.`id`';

	$x->ColWidth = [150, 150, 150, 150, 150, 150, 150, 150, 150, ];
	$x->ColCaption = ['EmpID', 'Month', 'Year', 'Earliest arrival', 'Latest arrival', 'Total late days', 'Total early outs', 'Total hours worked', 'Best performance', ];
	$x->ColFieldName = ['empID', 'month', 'year', 'earliest_arrival', 'latest_arrival', 'total_late_days', 'total_early_outs', 'total_hours_worked', 'best_performance', ];
	$x->ColNumber  = [2, 3, 4, 5, 6, 7, 8, 9, 10, ];

	// template paths below are based on the app main directory
	$x->Template = 'templates/insights_templateTV.html';
	$x->SelectedTemplate = 'templates/insights_templateTVS.html';
	$x->TemplateDV = 'templates/insights_templateDV.html';
	$x->TemplateDVP = 'templates/insights_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HasCalculatedFields = false;
	$x->AllowConsoleLog = false;
	$x->AllowDVNavigation = true;

	// hook: insights_init
	$render = true;
	if(function_exists('insights_init')) {
		$args = [];
		$render = insights_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: insights_header
	$headerCode = '';
	if(function_exists('insights_header')) {
		$args = [];
		$headerCode = insights_header($x->ContentType, getMemberInfo(), $args);
	}

	if(!$headerCode) {
		include_once(__DIR__ . '/header.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/header.php');
		echo str_replace('<%%HEADER%%>', ob_get_clean(), $headerCode);
	}

	echo $x->HTML;

	// hook: insights_footer
	$footerCode = '';
	if(function_exists('insights_footer')) {
		$args = [];
		$footerCode = insights_footer($x->ContentType, getMemberInfo(), $args);
	}

	if(!$footerCode) {
		include_once(__DIR__ . '/footer.php'); 
	} else {
		ob_start();
		include_once(__DIR__ . '/footer.php');
		echo str_replace('<%%FOOTER%%>', ob_get_clean(), $footerCode);
	}
