// if you want the tiny mce to be added to all the text areas then replace mode:"specific_textareas" with mode:"textareas" and also remove editor_selector : "text",
tinyMCE.init({
	mode : "textareas",
	theme : "advanced",
	plugins : "markettoimages,safari,table,save,inlinepopups,contextmenu,paste,emotions,spellchecker,advhr,insertdatetime,preview",	
	
		// Theme options - button# indicated the row# only
	theme_advanced_buttons1 : " markettoimages,|,newdocument,|,bold,italic,underline,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
	theme_advanced_buttons2 : "cut,copy,paste|,bullist,numlist,|,outdent,indent|,undo,redo,|,link,unlink,anchor,|,code,preview,|,forecolor,backcolor",
	theme_advanced_buttons3 : "insertdate,inserttime,|,spellchecker,advhr,,removeformat,|,sub,sup,|,charmap,emotions",	
	theme_advanced_toolbar_location : "top",
	theme_advanced_toolbar_align : "left",
	theme_advanced_statusbar_location : "bottom", //(n.b. no trailing comma in last line of code)
	    // Other options
    relative_urls : false,
	//theme_advanced_resizing : true //leave this out as there is an intermittent bug.
	// Style formats
	style_formats : [
		{title : 'Bold text', inline : 'b'},
		{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
		{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
		{title : 'Example 1', inline : 'span', classes : 'example1'},
		{title : 'Example 2', inline : 'span', classes : 'example2'},
		{title : 'Table styles'},
		{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
	]
	
});
// JavaScript Document