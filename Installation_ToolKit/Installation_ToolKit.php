<?PHP
/*
 ===========================================================================================
 + Cerberus Content Management System.
 + ---
 + - Author : Gary Christopher Johnson
 + - E-Mail : TinkeSoftware@Protonmail.com // GCJohnsonChevalier@Protonmail.com
 + - Company: Tinke Software
 + - Notes  : View this file in a non-formatting text editor for correct indentation display
 + ---
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 +
 + ---
 + - File Location: root->Installation_ToolKit->Installation_ToolKit.php
 + - File Version:  0.5 - Tuesday, June, 01, 2021.
 + ---
 +%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 +%%%()()%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()()()%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()()()%%()()()%%()()()%%()()()%%()()()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%%%%%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%/-\%
 +%%()%%%%%()%%%%%%()%%()%%()%%()%%()%%%%%%()%%()%%()%%()%%%%%%()%%%%%%%%%%%%|4|%  ~ Wynn ~
 +%%%()()%%()()()%%()%%()%%()()()%%()()()%%()%%()%%()()()%%()()()%%%%%%%%%%%%\-/% Build: 0.7
 ===========================================================================================
*/

/*
 ===========================
 +
 +
 + Installation ToolKit
 +
 +
 ===========================
*/

/*
 ===========================
 +
 + HTML HEADER
 +
 ===========================
*/

echo ("
<HTML>
		<HEAD>
				<TITLE>Cerberus Content Management System - Post Installation Toolkit</TITLE>
		</HEAD>
		
		<BODY>
				<CENTER>Cerberus Content Management System - Post Installation ToolKit</CENTER>
				<CENTER>[&nbsp;<A HREF=\"\">Close Open Applications</A>&nbsp;-&nbsp;</A><A HREF=\"?Application&61;Unpack\">Unpack Cerberus Content Management System Compressed Package</A>&nbsp;-&nbsp;<A HREF=\"./Cerberus/Install.php\">Install Cerberus Content Management System</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ===========================
 +
 + Unpack Packages
 +
 ===========================
*/
	
if ([$_GET["Application"] == "Unpack") {

system('unzip Cerberus.zip');

} // [ + ] IF_APPLICATION_UNPACK

/*
 ===========================
 +
 + Execute Terminal Commands
 +
 ===========================
*/
	 
if ($_GET["Application"] == "Execute_Commands") {
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS				= $_POST['Installation_ToolKit_Terminal_Commands'];
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Execute_Commands\" METHOD=\"POST\">
				Please Visit: <A HREF=\"https://www.GitHub.com/TinkeSoftware/CerberusCMS_Archives/\">Tinke Softwares' - Cerberus Content Management System Archives - GitHub Repository</A> for the most recent CerberusCMS Version<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_Toolkit_Terminal_Commands\">Execute Terminal Commands On Operating System From This Post-HypterText-PreProcessor Script E.G.: 'git clone https://github.com/TinkeSoftware/CerberusCMS_Archives/blob/master/Version - 4/Build - 0.7/Cerberus Content Management System - Version - 4 - Build - 0.7 - Edit Number - 5 - Final - Wynn ~ Ghost.zip as 'Cerberus.zip''</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute\">
			</FORM>
");

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");
		exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);

} // [ + ] IF_!POST_Installation_ToolKit_POST_TERMINAL_COMMANDS

} // [ + ] IF_APPLICATION_EXECUTE_COMMANDS

echo ("
		</BODY>
</HTML>
");
?>