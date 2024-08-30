<?php

	/**
	 * @file
	 * This file contains hook functions that get called when data operations are performed on 'attendance' table. 
	 * For example, when a new record is added, when a record is edited, when a record is deleted, … etc.
	*/

	/**
	 * Called before rendering the page. This is a very powerful hook that allows you to control all aspects of how the page is rendered.
	 * 
	 * @param $options
	 * (passed by reference) a DataList object that sets options for rendering the page.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/DataList
	 * 
	 * @param $memberInfo
	 * An array containing logged member's info.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo
	 * 
	 * @param $args
	 * An empty array that is passed by reference. It's currently not used but is reserved for future uses.
	 * 
	 * @return
	 * True to render the page. False to cancel the operation (which could be useful for error handling to display 
	 * an error message to the user and stop displaying any data).
	*/

	function attendance_init(&$options, $memberInfo, &$args) {

		return TRUE;
	}

	/**
	 * Called before displaying page content. Can be used to return a customized header template for the table.
	 * 
	 * @param $contentType
	 * specifies the type of view that will be displayed. Takes one the following values: 
	 * 'tableview', 'detailview', 'tableview+detailview', 'print-tableview', 'print-detailview', 'filters'
	 * 
	 * @param $memberInfo
	 * An array containing logged member's info.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo
	 * 
	 * @param $args
	 * An empty array that is passed by reference. It's currently not used but is reserved for future uses.
	 * 
	 * @return
	 * String containing the HTML header code. If empty, the default 'header.php' is used. If you want to include
	 * the default header besides your customized header, include the <%%HEADER%%> placeholder in the returned string.
	*/

	function attendance_header($contentType, $memberInfo, &$args) {
		$header='';

		switch($contentType) {
			case 'tableview':
				$header='';
				break;

			case 'detailview':
				$header='';
				break;

			case 'tableview+detailview':
				$header='';
				break;

			case 'print-tableview':
				$header='';
				break;

			case 'print-detailview':
				$header='';
				break;

			case 'filters':
				$header='';
				break;
		}

		return $header;
	}

	/**
	 * Called after displaying page content. Can be used to return a customized footer template for the table.
	 * 
	 * @param $contentType
	 * specifies the type of view that will be displayed. Takes one the following values: 
	 * 'tableview', 'detailview', 'tableview+detailview', 'print-tableview', 'print-detailview', 'filters'
	 * 
	 * @param $memberInfo
	 * An array containing logged member's info.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo
	 * 
	 * @param $args
	 * An empty array that is passed by reference. It's currently not used but is reserved for future uses.
	 * 
	 * @return
	 * String containing the HTML footer code. If empty, the default 'footer.php' is used. If you want to include 
	 * the default footer besides your customized footer, include the <%%FOOTER%%> placeholder in the returned string.
	*/

	function attendance_footer($contentType, $memberInfo, &$args) {
		$footer='';

		switch($contentType) {
			case 'tableview':
				$footer='';
				break;

			case 'detailview':
				$footer='';
				break;

			case 'tableview+detailview':
				$footer='';
				break;

			case 'print-tableview':
				$footer='';
				break;

			case 'print-detailview':
				$footer='';
				break;

			case 'filters':
				$footer='';
				break;
		}

		return $footer;
	}

	/**
	 * Called before executing the insert query.
	 * 
	 * @param $data
	 * An associative array where the keys are field names and the values are the field data values to be inserted into the new record.
	 * Note: if a field is set as read-only or hidden in detail view, it can't be modified through $data. You should use a direct SQL statement instead.
	 * For this table, the array items are: 
	 *     $data['empID'], $data['name'], $data['date'], $data['time_in'], $data['time_out'], $data['day_of_week'], $data['hours_worked'], $data['is_late'], $data['early_out']
	 * $data array is passed by reference so that modifications to it apply to the insert query.
	 * 
	 * @param $memberInfo
	 * An array containing logged member's info.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo
	 * 
	 * @param $args
	 * An empty array that is passed by reference. It's currently not used but is reserved for future uses.
	 * 
	 * @return
	 * A boolean TRUE to perform the insert operation, or FALSE to cancel it.
	*/

	function attendance_before_insert(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	/**
	 * Called after executing the insert query (but before executing the ownership insert query).
	 * 
	 * @param $data
	 * An associative array where the keys are field names and the values are the field data values that were inserted into the new record.
	 * For this table, the array items are: 
	 *     $data['empID'], $data['name'], $data['date'], $data['time_in'], $data['time_out'], $data['day_of_week'], $data['hours_worked'], $data['is_late'], $data['early_out']
	 * Also includes the item $data['selectedID'] which stores the value of the primary key for the new record.
	 * 
	 * @param $memberInfo
	 * An array containing logged member's info.
	 * @see https://bigprof.com/appgini/help/working-with-generated-web-database-application/hooks/memberInfo
	 * 
	 * @param $args
	 * An empty array that is passed by reference. It's currently not used but is reserved for future uses.
	 * 
	 * @return
	 * A boolean TRUE to perform the ownership insert operation or FALSE to cancel it.
	 * Warning: if a FALSE is returned, the new record will have no ownership info.
	*/

	function attendance_after_insert($data, $memberInfo, &$args) {

		return TRUE;
	}

	

	function attendance_before_update(&$data, $memberInfo, &$args) {

		return TRUE;
	}

	

	function attendance_after_update($data, $memberInfo, &$args) {

		return TRUE;
	}

	

	function attendance_before_delete($selectedID, &$skipChecks, $memberInfo, &$args) {

		return TRUE;
	}

	
	function attendance_after_delete($selectedID, $memberInfo, &$args) {

	}

	

	function attendance_dv($selectedID, $memberInfo, &$html, &$args) {

	}

	

	function attendance_csv($query, $memberInfo, &$args) {

		return $query;
	}


	function attendance_batch_actions(&$args) {

		return [];
	}
	
<?php

function process_fingerprint_scan($fingerprint_data) {
    // Retrieve employee from the database using fingerprint matching
    $employee = match_fingerprint($fingerprint_data);

    if ($employee) {
        $employee_id = $employee['employee_id'];
        $current_time = date('H:i:s');
        $current_date = date('Y-m-d');
        $day_of_week = date('l');
        
        // Check if the employee has already clocked in today
        $attendance = sqlValue("SELECT attendance_id, time_in FROM attendance 
                                WHERE employee_id = '$employee_id' 
                                AND date = '$current_date'");
        
        if ($attendance) {
            // Update clock-out time and calculate hours worked
            sql("UPDATE attendance SET time_out = '$current_time', 
                                       hours_worked = TIMEDIFF('$current_time', time_in) 
                                       WHERE attendance_id = '$attendance_id'");
        } else {
            // Insert a new clock-in record
            sql("INSERT INTO attendance (employee_id, date, time_in, day_of_week) 
                 VALUES ('$employee_id', '$current_date', '$current_time', '$day_of_week')");
        }

        // Provide feedback to the user
        return "Attendance recorded successfully for {$employee['name']} at $current_time.";
    } else {
        return "Fingerprint not recognized. Please try again.";
    }
}

// Other hook functions...

?>
