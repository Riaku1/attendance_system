var FiltersEnabled = 0; // if your not going to use transitions or filters in any of the tips set this to 0
var spacer="&nbsp; &nbsp; &nbsp; ";

// email notifications to admin
notifyAdminNewMembers0Tip=["", spacer+"No email notifications to admin."];
notifyAdminNewMembers1Tip=["", spacer+"Notify admin only when a new member is waiting for approval."];
notifyAdminNewMembers2Tip=["", spacer+"Notify admin for all new sign-ups."];

// visitorSignup
visitorSignup0Tip=["", spacer+"If this option is selected, visitors will not be able to join this group unless the admin manually moves them to this group from the admin area."];
visitorSignup1Tip=["", spacer+"If this option is selected, visitors can join this group but will not be able to sign in unless the admin approves them from the admin area."];
visitorSignup2Tip=["", spacer+"If this option is selected, visitors can join this group and will be able to sign in instantly with no need for admin approval."];

// employees table
employees_addTip=["",spacer+"This option allows all members of the group to add records to the 'Employees' table. A member who adds a record to the table becomes the 'owner' of that record."];

employees_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Employees' table."];
employees_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Employees' table."];
employees_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Employees' table."];
employees_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Employees' table."];

employees_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Employees' table."];
employees_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Employees' table."];
employees_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Employees' table."];
employees_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Employees' table, regardless of their owner."];

employees_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Employees' table."];
employees_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Employees' table."];
employees_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Employees' table."];
employees_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Employees' table."];

// roll_call table
roll_call_addTip=["",spacer+"This option allows all members of the group to add records to the 'Attendance' table. A member who adds a record to the table becomes the 'owner' of that record."];

roll_call_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Attendance' table."];
roll_call_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Attendance' table."];
roll_call_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Attendance' table."];
roll_call_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Attendance' table."];

roll_call_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Attendance' table."];
roll_call_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Attendance' table."];
roll_call_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Attendance' table."];
roll_call_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Attendance' table, regardless of their owner."];

roll_call_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Attendance' table."];
roll_call_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Attendance' table."];
roll_call_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Attendance' table."];
roll_call_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Attendance' table."];

// insights table
insights_addTip=["",spacer+"This option allows all members of the group to add records to the 'Insights' table. A member who adds a record to the table becomes the 'owner' of that record."];

insights_view0Tip=["",spacer+"This option prohibits all members of the group from viewing any record in the 'Insights' table."];
insights_view1Tip=["",spacer+"This option allows each member of the group to view only his own records in the 'Insights' table."];
insights_view2Tip=["",spacer+"This option allows each member of the group to view any record owned by any member of the group in the 'Insights' table."];
insights_view3Tip=["",spacer+"This option allows each member of the group to view all records in the 'Insights' table."];

insights_edit0Tip=["",spacer+"This option prohibits all members of the group from modifying any record in the 'Insights' table."];
insights_edit1Tip=["",spacer+"This option allows each member of the group to edit only his own records in the 'Insights' table."];
insights_edit2Tip=["",spacer+"This option allows each member of the group to edit any record owned by any member of the group in the 'Insights' table."];
insights_edit3Tip=["",spacer+"This option allows each member of the group to edit any records in the 'Insights' table, regardless of their owner."];

insights_delete0Tip=["",spacer+"This option prohibits all members of the group from deleting any record in the 'Insights' table."];
insights_delete1Tip=["",spacer+"This option allows each member of the group to delete only his own records in the 'Insights' table."];
insights_delete2Tip=["",spacer+"This option allows each member of the group to delete any record owned by any member of the group in the 'Insights' table."];
insights_delete3Tip=["",spacer+"This option allows each member of the group to delete any records in the 'Insights' table."];

/*
	Style syntax:
	-------------
	[TitleColor,TextColor,TitleBgColor,TextBgColor,TitleBgImag,TextBgImag,TitleTextAlign,
	TextTextAlign,TitleFontFace,TextFontFace, TipPosition, StickyStyle, TitleFontSize,
	TextFontSize, Width, Height, BorderSize, PadTextArea, CoordinateX , CoordinateY,
	TransitionNumber, TransitionDuration, TransparencyLevel ,ShadowType, ShadowColor]

*/

toolTipStyle=["white","#00008B","#000099","#E6E6FA","","images/helpBg.gif","","","","\"Trebuchet MS\", sans-serif","","","","3",400,"",1,2,10,10,51,1,0,"",""];

applyCssFilter();
