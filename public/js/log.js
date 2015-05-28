/*=================================================================================
ui_log - Javascript logging object
===================================================================================*/

ui_log = {

	token: "",
	stack:[],
	serial_no: 0,
	show_response: 0,
	first_run: 1,
	history: [],
	is_audit_on: true,
	blocksize: 1500,
	verbose_flag: false,
	
	/*=================================================================================
	init:
	===================================================================================*/
	init: function(token) {


		if (ui_log.first_run == 1) {
			v_msg = "DEBUG: running init";
			if (window.console) { console.log(v_msg);}
			
			ui_log.token = token;
			ui_log.first_run = 0;
			ui_log.serial_no = 0;
//alert("PHP SETTINGS: audit=" + g_audit_on_flag + " blocksize=" + g_audit_blocksize );
			
		}
	},
	
	/*=================================================================================
	log:
	Usage: ui_log.log("ASSERT", "ui_utilities.js", "ASSERT FAILURE", v_message);
	===================================================================================*/	
	log: function(v_type, v_module, v_action, v_message) {
		ui_log.init(1);
	
		var this_serial;
		this_serial = ui_log.serial_no;
		ui_log.serial_no++;
		

		ui_log.is_audit_on = false;
		g_debug_flag = true;

		
		if (window.console && g_debug_flag){ 
			var now = ui_log.outputTimeUTC();
			if (ui_log.verbose_flag == true) {
			v_output = "DEBUG: JS_LOGGER[" + this_serial + "]: " + now + ": " + v_module + ": " + v_action + ": " + v_message;
			}
			else {
			v_output = v_module + ": " + v_action + ": " + v_message;
			}
			v_msg = v_output;
			if (window.console && g_debug_flag) { console.log(v_msg); }
			ui_log.history[this_serial] = v_output;
		}
		
		if (this_serial > 0 && (this_serial % ui_log.blocksize == 0)) {

//alert("PHP LOG BLOCKSIZE REACHED: this_serial=" + this_serial + "ui_logserialno=" + ui_log.serial_no + "histlen=" + ui_log.history.length);
		


			// needs to be reset outside of the ajax call because jax delay allows other log entires to be written
			ui_log.serial_no = 0;
			ui_log.history.length = 0;

		}
		return 0;
	},
	
	outputTimeUTC: function() {
	
	   timeNow = new Date();
	   var utc = new Date(timeNow.getUTCFullYear(),timeNow.getUTCMonth(),timeNow.getUTCDate(),timeNow.getUTCHours(),timeNow.getUTCMinutes(),timeNow.getUTCSeconds());
	   utc.setTime(utc.getTime());
	   
		var v_year		= utc.getYear();
		if (v_year < 1000) { v_year +=  1900; } 

		var v_month 	= ui_log.leadingZero((utc.getMonth()+1));
		var v_day 		= ui_log.leadingZero(utc.getDate());
		var v_hr 		= ui_log.leadingZero(utc.getHours());
		var v_min		= ui_log.leadingZero(utc.getMinutes());
		var v_sec 		= ui_log.leadingZero(utc.getSeconds());
		v_str 			= v_year + "-" + v_month + "-" + v_day  + " " + v_hr + ":" + v_min + ":" + v_sec + " UTC";
		return v_str;
	},
	
	leadingZero: function(x){  
		return (x > 9) ? x : '0'+x ; 
	},
	
	/*=================================================================================
	get_log_history - returns the history
	===================================================================================*/		
	get_log_history: function() {
	
		v_msg="get_log_history(): started";
		if (window.console && g_debug_flag) { console.log(v_msg); }
	
		v_json_log = JSON.stringify(ui_log.history);
		
		v_msg="LOG HISTORY REQUESTED: json=" + v_json_log;
		if (window.console && g_debug_flag) { console.log(v_msg); }
		
		return (v_json_log);
	},
	
	/*=================================================================================
	dummy_func - next function goes above here
	===================================================================================*/		
	dummy_func: function() {
	}
	
}