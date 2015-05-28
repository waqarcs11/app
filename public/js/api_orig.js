/*=================================================================================
api.js - process ajax calls (use mockups initially)
===================================================================================*/

api = {
	token: 						"",			// session token populated by init_vars
	serial_no: 					0,			// serial number for ajax call for debugging
	first_run:					1,			// flag to denote this is the first call to this object
	mockup_flags_user_login:	{ is_success: 1 },
	mockup_flags_vendor_login:	{ is_success: 1 }, 
	
	//init
	init: function(token) {
		
		if (api.first_run) {
			api.token = token;
			api.serial_no = 0;
			api.first_run = 0;
		}
	},
	
	// do_ajax
	do_ajax: function(module, action, payload, callback) {
		// do mockups
		return api.mockup_do_ajax(module, action, payload, callback);
	},
	
	// real_do_ajax
	real_do_ajax: function(module, action, payload, callback) {
		// tbd
	},
	
	// mockup_do_ajax
	mockup_do_ajax: function(module, action, payload, callback) {
		var d01 = new $.Deferred();
		if (module == "index" && action == "user_login") {
			return api.mockup_user_login(d01, payload, callback);
		} 
		else if (module == "index" && action == "vendor_login") {
			return api.mockup_vendor_login(d01, payload, callback);
		}
		
		
		return d01;
	},
	
	
	
	// mockup_user_login
	mockup_user_login: function(d01, payload, callback) {
		console.log("run user_login");

		// simulate a small delay before resolving promise, as if ajax call completed
		setTimeout(	d01.resolve,800 );
			
		// what to do 
		$.when(d01).then( 
			function(ajaxArgs) {
				console.log("A3 run callback with fake response object");
				
				var good_payload = false;
				
console.log("PAYLOAD DATA=" + JSON.stringify(payload));
				if (payload.username == "paul" && payload.password == "1234") {
					good_payload = true;
				}
				
				var response_data;
				if (api.mockup_flags_user_login.is_success && good_payload) {
					response_data = {
						status: 	"OK",
						role: 		"DIARY_USER",
						points: 	15000,
						level: 		"GOLD"
					}
				}
				else {
					response_data = {
						status: 	"FAIL",
						errorcode: 	1000,
						httpcode: 	404
					}
				}
				

				if (callback && typeof(callback) === "function") {
					// execute the callback
					callback( response_data );
				}
			    
				return d01;
			}
		);
			
		return d01;
	} ,
	
	
	// mockup_user_login
	mockup_vendor_login: function(d01, payload, callback) {
		console.log("run vendor_login");

		// simulate a small delay before resolving promise, as if ajax call completed
		setTimeout(	d01.resolve,800 );
			
		// what to do 
		$.when(d01).then( 
			function(ajaxArgs) {
				console.log("A3 run callback with fake response object");
				
				var good_payload = false;
				
console.log("PAYLOAD DATA=" + JSON.stringify(payload));
				if (payload.username == "paul" && payload.password == "1234") {
					good_payload = true;
				}
				
				var response_data;
				if (api.mockup_flags_vendor_login.is_success && good_payload) {
					response_data = {
						status: 	"OK",
						role: 		"DIARY_USER",
						points: 	15000,
						level: 		"GOLD"
					}
				}
				else {
					response_data = {
						status: 	"FAIL",
						errorcode: 	1000,
						httpcode: 	404
					}
				}
				

				if (callback && typeof(callback) === "function") {
					// execute the callback
					callback( response_data );
				}
			    
				return d01;
			}
		);
			
		return d01;
	}
	
	
}