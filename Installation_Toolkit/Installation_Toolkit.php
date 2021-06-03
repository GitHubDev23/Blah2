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
 + - File Location: root->Installation_Toolkit->Installation_Toolkit.php
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
 + Installation Toolit
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
				<TITLE>Cerberus Content Management System - Installation Toolkit</TITLE>
		</HEAD>
		
		<BODY>
				<CENTER>[&nbsp;<A HREF=\"?Application&61;Unpack\">Unpack Cerberus Content Management System Compressed Package</A>&nbsp;-<A HREF=\"./Cerberus/Install.php\">Install Cerberus Content Management System</A>&nbsp;]</CENTER>
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
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_Toolkit_Terminal_Commands\">Execute Terminal Commands On Operating System From This Post-HypterText-PreProcessor Script E.G.: 'git clone https://github.com/TinkeSoftware/CerberusCMS_Archives/blob/master/Version%20-%204/Build%20-%200.7/Cerberus%20Content%20Management%20System%20-%20Version%20-%204%20-%20Build%20-%200.7%20-%20Edit%20Number%20-%203%20-%20Alpha%20-%20Wyn%20%7E%20Ghost.zip as 'Cerberus.zip''</TEXTAREA>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute\">
			</FORM>
");

} else {

} // [ + ] IF_!POST_Installation_ToolKit_POST_TERMINAL_COMMANDS

} // [ + ] IF_APPLICATION_EXECUTE_COMMANDS

echo ("
		</BODY>
</HTML>
");
?>
