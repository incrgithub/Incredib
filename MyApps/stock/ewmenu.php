<!-- Begin Main Menu -->
<?php $RootMenu = new cMenu(EW_MENUBAR_ID) ?>
<?php

// Generate all menu items
$RootMenu->IsRoot = TRUE;
$RootMenu->AddMenuItem(183, "mi_dashboard_php", $Language->MenuPhrase("183", "MenuText"), "dashboard.php", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}dashboard.php'), FALSE);
$RootMenu->AddMenuItem(100, "mi_a_stock_items", $Language->MenuPhrase("100", "MenuText"), "a_stock_itemslist.php?cmd=resetall", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_stock_items'), FALSE);
$RootMenu->AddMenuItem(99, "mi_a_stock_categories", $Language->MenuPhrase("99", "MenuText"), "a_stock_categorieslist.php", 100, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_stock_categories'), FALSE);
$RootMenu->AddMenuItem(102, "mi_a_unit_of_measurement", $Language->MenuPhrase("102", "MenuText"), "a_unit_of_measurementlist.php", 100, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_unit_of_measurement'), FALSE);
$RootMenu->AddMenuItem(101, "mi_a_suppliers", $Language->MenuPhrase("101", "MenuText"), "a_supplierslist.php", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_suppliers'), FALSE);
$RootMenu->AddMenuItem(95, "mi_a_purchases", $Language->MenuPhrase("95", "MenuText"), "a_purchaseslist.php?cmd=resetall", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_purchases'), FALSE);
$RootMenu->AddMenuItem(91, "mi_a_customers", $Language->MenuPhrase("91", "MenuText"), "a_customerslist.php", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_customers'), FALSE);
$RootMenu->AddMenuItem(97, "mi_a_sales", $Language->MenuPhrase("97", "MenuText"), "a_saleslist.php?cmd=resetall", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_sales'), FALSE);
$RootMenu->AddMenuItem(180, "mci_Outstandings", $Language->MenuPhrase("180", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(106, "mi_view_purchases_outstandings", $Language->MenuPhrase("106", "MenuText"), "view_purchases_outstandingslist.php", 180, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}view_purchases_outstandings'), FALSE);
$RootMenu->AddMenuItem(105, "mi_view_sales_outstandings", $Language->MenuPhrase("105", "MenuText"), "view_sales_outstandingslist.php", 180, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}view_sales_outstandings'), FALSE);
$RootMenu->AddMenuItem(104, "mi_a_payment_transactions", $Language->MenuPhrase("104", "MenuText"), "a_payment_transactionslist.php?cmd=resetall", 180, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}a_payment_transactions'), FALSE);
$RootMenu->AddMenuItem(16, "mci_Administrator", $Language->MenuPhrase("16", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(1, "mi_announcement", $Language->MenuPhrase("1", "MenuText"), "announcementlist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}announcement'), FALSE);
$RootMenu->AddMenuItem(2, "mi_breadcrumblinks", $Language->MenuPhrase("2", "MenuText"), "breadcrumblinkslist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}breadcrumblinks'), FALSE);
$RootMenu->AddMenuItem(5, "mi_languages", $Language->MenuPhrase("5", "MenuText"), "languageslist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}languages'), FALSE);
$RootMenu->AddMenuItem(6, "mi_settings", $Language->MenuPhrase("6", "MenuText"), "settingslist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}settings'), FALSE);
$RootMenu->AddMenuItem(13, "mi_themes", $Language->MenuPhrase("13", "MenuText"), "themeslist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}themes'), FALSE);
$RootMenu->AddMenuItem(14, "mi_timezone", $Language->MenuPhrase("14", "MenuText"), "timezonelist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}timezone'), FALSE);
$RootMenu->AddMenuItem(15, "mi_users", $Language->MenuPhrase("15", "MenuText"), "userslist.php", 16, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}users'), FALSE);
$RootMenu->AddMenuItem(84, "mci_Manage_Breadcrumb_Links", $Language->MenuPhrase("84", "MenuText"), "", 16, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(85, "mci_Add_New_Breadcrumb_Links", $Language->MenuPhrase("85", "MenuText"), "breadcrumblinksaddsp.php", 84, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(86, "mci_Check_Breadcrumb_Links", $Language->MenuPhrase("86", "MenuText"), "breadcrumblinkschecksp.php", 84, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(87, "mci_Move_Breadcrumb_Links", $Language->MenuPhrase("87", "MenuText"), "breadcrumblinksmovesp.php", 84, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(88, "mci_Delete_Breadcrumb_Links", $Language->MenuPhrase("88", "MenuText"), "breadcrumblinksdeletesp.php", 84, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(90, "mi_userlevels", $Language->MenuPhrase("90", "MenuText"), "userlevelslist.php", 16, "", (@$_SESSION[EW_SESSION_USER_LEVEL] & EW_ALLOW_ADMIN) == EW_ALLOW_ADMIN, FALSE);
$RootMenu->AddMenuItem(4, "mi_help_categories", $Language->MenuPhrase("4", "MenuText"), "help_categorieslist.php", -1, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}help_categories'), FALSE);
$RootMenu->AddMenuItem(3, "mi_help", $Language->MenuPhrase("3", "MenuText"), "helplist.php?cmd=resetall", 4, "", AllowListMenu('{B36B93AF-B58F-461B-B767-5F08C12493E9}help'), FALSE);
$RootMenu->AddMenuItem(80, "mci_About_Us", $Language->MenuPhrase("80", "MenuText"), "javascript:void(0);|||msAboutDialogShow();return false;", 4, "", TRUE, FALSE, TRUE);
$RootMenu->AddMenuItem(83, "mci_Terms_and_Conditions", $Language->MenuPhrase("83", "MenuText"), "javascript:void(0);|||msTACDialogShow();return false;", 4, "", TRUE, FALSE, TRUE);
$RootMenu->AddMenuItem(34, "mci_Settings", $Language->MenuPhrase("34", "MenuText"), "", -1, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(35, "mci_Font_Name", $Language->MenuPhrase("35", "MenuText"), "", 34, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(36, "mci_Arial", $Language->MenuPhrase("36", "MenuText"), "fontarial.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(37, "mci_Calibri", $Language->MenuPhrase("37", "MenuText"), "fontcalibri.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(38, "mci_Century", $Language->MenuPhrase("38", "MenuText"), "fontcentury.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(39, "mci_Century_Gothic", $Language->MenuPhrase("39", "MenuText"), "fontcenturygothic.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(40, "mci_Comic_Sans_MS", $Language->MenuPhrase("40", "MenuText"), "fontcomicsansms.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(41, "mci_Courier_New", $Language->MenuPhrase("41", "MenuText"), "fontcouriernew.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(42, "mci_Futura_Normal", $Language->MenuPhrase("42", "MenuText"), "fontfuturanormal.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(43, "mci_Lucida_Sans", $Language->MenuPhrase("43", "MenuText"), "fontlucidasans.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(44, "mci_Lucida_Sans_Typewriter", $Language->MenuPhrase("44", "MenuText"), "fontlucidasanstypewriter.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(45, "mci_MS_Gothic", $Language->MenuPhrase("45", "MenuText"), "fontmsgothic.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(46, "mci_MS_Sans_Serif", $Language->MenuPhrase("46", "MenuText"), "fontmssansserif.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(47, "mci_Tahoma", $Language->MenuPhrase("47", "MenuText"), "fonttahoma.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(48, "mci_Times_New_Roman", $Language->MenuPhrase("48", "MenuText"), "fonttimesnewroman.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(49, "mci_Verdana", $Language->MenuPhrase("49", "MenuText"), "fontverdana.php", 35, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(50, "mci_Font_Size", $Language->MenuPhrase("50", "MenuText"), "", 34, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(51, "mci_11px", $Language->MenuPhrase("51", "MenuText"), "font11px.php", 50, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(52, "mci_12px", $Language->MenuPhrase("52", "MenuText"), "font12px.php", 50, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(54, "mci_13px", $Language->MenuPhrase("54", "MenuText"), "font13px.php", 50, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(55, "mci_14px", $Language->MenuPhrase("55", "MenuText"), "font14px.php", 50, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(56, "mci_Themes2fColors", $Language->MenuPhrase("56", "MenuText"), "", 34, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(57, "mci_Black", $Language->MenuPhrase("57", "MenuText"), "themeblack.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(58, "mci_Blue", $Language->MenuPhrase("58", "MenuText"), "themeblue.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(59, "mci_Dark", $Language->MenuPhrase("59", "MenuText"), "themedark.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(60, "mci_Dark_Glass", $Language->MenuPhrase("60", "MenuText"), "themedarkglass.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(61, "mci_Default", $Language->MenuPhrase("61", "MenuText"), "themedefault.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(62, "mci_Glass", $Language->MenuPhrase("62", "MenuText"), "themeglass.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(63, "mci_Gray", $Language->MenuPhrase("63", "MenuText"), "themegray.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(64, "mci_Green", $Language->MenuPhrase("64", "MenuText"), "themegreen.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(65, "mci_Maroon", $Language->MenuPhrase("65", "MenuText"), "thememaroon.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(66, "mci_Olive", $Language->MenuPhrase("66", "MenuText"), "themeolive.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(67, "mci_Professional", $Language->MenuPhrase("67", "MenuText"), "themeprofessional.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(68, "mci_Purple", $Language->MenuPhrase("68", "MenuText"), "themepurple.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(69, "mci_Red", $Language->MenuPhrase("69", "MenuText"), "themered.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(70, "mci_Sand", $Language->MenuPhrase("70", "MenuText"), "themesand.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(71, "mci_Silver", $Language->MenuPhrase("71", "MenuText"), "themesilver.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(72, "mci_White", $Language->MenuPhrase("72", "MenuText"), "themewhite.php", 56, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(73, "mci_Menu_Positions", $Language->MenuPhrase("73", "MenuText"), "", 34, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(74, "mci_Top_28Horizontal29", $Language->MenuPhrase("74", "MenuText"), "menuhorizontal.php", 73, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(75, "mci_Left_28Vertical29", $Language->MenuPhrase("75", "MenuText"), "menuvertical.php", 73, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(76, "mci_Table_Width_Style", $Language->MenuPhrase("76", "MenuText"), "", 34, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(77, "mci_Scroll", $Language->MenuPhrase("77", "MenuText"), "tablewidthstyle1.php", 76, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(78, "mci_Auto", $Language->MenuPhrase("78", "MenuText"), "tablewidthstyle2.php", 76, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(79, "mci_10025", $Language->MenuPhrase("79", "MenuText"), "tablewidthstyle3.php", 76, "", IsLoggedIn(), FALSE, TRUE);
$RootMenu->AddMenuItem(-2, "mi_changepwd", $Language->Phrase("ChangePwd"), "changepwd.php", -1, "", IsLoggedIn() && !IsSysAdmin());
$RootMenu->AddMenuItem(-1, "mi_logout", $Language->Phrase("Logout"), "logout.php", -1, "", IsLoggedIn());
$RootMenu->AddMenuItem(-1, "mi_login", $Language->Phrase("Login"), "login.php", -1, "", !IsLoggedIn() && substr(@$_SERVER["URL"], -1 * strlen("login.php")) <> "login.php");
$RootMenu->Render();
?>
<!-- End Main Menu -->
