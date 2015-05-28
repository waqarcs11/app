/*=================================================================================
api.js - process ajax calls (use mockups initially)
===================================================================================*/


api = {
	token: 						"",			// session token populated by init_vars
	serial_no: 					0,			// serial number for ajax call for debugging
	first_run:					1,			// flag to denote this is the first call to this object
	mockup_flags_user_login:	{ is_success: 1 },
	mockup_flags_user_offers:	{ is_success: 1, offer_list: 1 },
	mockup_flags_user_comments:	{ is_success: 1, comment_list: 1 },
	mockup_flags_user_offers_history:{ is_success: 1, offer_list: 1 },
	
	mockup_flags_vendor_login:	{ is_success: 1 }, 
	
	/*-----------------------------------------
	// 
	-------------------------------------------*/
	//init
	init: function(token) {
		
		if (api.first_run) {
			api.token = token;
			api.serial_no = 0;
			api.first_run = 0;
		}
	},
	
	/*-----------------------------------------
	// 
	-------------------------------------------*/
	// do_ajax
	do_ajax: function(module, action, payload, callback) {
	
		// do mockups
		return api.mockup_do_ajax(module, action, payload, callback);
	},
	
	// real_do_ajax
	real_do_ajax: function(module, action, payload, callback) {
		// tbd
	},
	
	/*-----------------------------------------
	// 
	-------------------------------------------*/
	// mockup_do_ajax
	mockup_do_ajax: function(module, action, payload, callback) {
	

		var d01 = new $.Deferred();
		if (module == "index" && action == "user_login") {
			return api.mockup_user_login(d01, payload, callback);
		} 
		else if (module == "index" && action == "get_offers") {
			return api.mockup_user_offers(d01, payload, callback);
		}
        else if (module == "index" && action == "get_comments") {
			return api.mockup_user_comments(d01, payload, callback);
		}        
		else if (module == "index" && action == "get_history") {
			return api.mockup_user_offers_history(d01, payload, callback);
		}
		
		// Vendor stuff below
		else if (module == "index" && action == "vendor_login") {
			return api.mockup_vendor_login(d01, payload, callback);
		}
		
		
		return d01;
	},
	
	
	/*-----------------------------------------
	// 
	-------------------------------------------*/
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
	
	/*-----------------------------------------
	// 
	-------------------------------------------*/
	// mockup_user_offers
	mockup_user_offers: function(d01, payload, callback) {

		// simulate a small delay before resolving promise, as if ajax call completed
		setTimeout(	d01.resolve,800 );
			
			
		// what to do 
		$.when(d01).then( 
			function(ajaxArgs) {
console.log("A3 run callback with fake response object");
				
				var good_payload = false;
				
console.log("PAYLOAD DATA=" + JSON.stringify(payload));
				if (payload.username == "paul" ) {
					good_payload = true;
				}
				
				var response_data;
				if (api.mockup_flags_user_offers.is_success && good_payload) {
				
					if (api.mockup_flags_user_offers.offer_list == 1) {
						response_data = {
							status: 	"OK",
							offer_data: [
								{ id:1, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:2, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:3, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:4, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:5, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:6, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:7, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:8, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:9, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:10, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:11, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:12, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:13, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
								{ id:14, vendor: "Amazon", product:"Book", adtype: "textlink", price: "0.002" },
							]
						}
					}
					else {

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
    
	
	// mockup_user_offers
	mockup_user_comments: function(d01, payload, callback) {

		// simulate a small delay before resolving promise, as if ajax call completed
		setTimeout(	d01.resolve,800 );						
		// what to do 
		$.when(d01).then( 
			function(ajaxArgs) {
			console.log("A3 run callback with fake response object");
			var good_payload = false;				
			console.log("PAYLOAD DATA=" + JSON.stringify(payload));
			if (payload.username == "paul" ) {
				good_payload = true;
			}				
			var response_data;
			if (api.mockup_flags_user_offers.is_success && good_payload) {
												
				if (api.mockup_flags_user_comments.comment_list == 1) {
					response_data = {
						status: 	"OK",
						comment_data: [
								{ id:1, image: "paul.jpg", name:"Paul Redman", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:2, image: "waqar.jpg", name:"Waqar Khan", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:3, image: "json.jpg", name:"Json", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:4, image: "john.jpg", name:"jhon", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:5, image: "fen.jpg", name:"Fen", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:6, image: "jackie.jpg", name:"Jackie", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:7, image: "santoli.jpg", name:"Santoly", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:8, image: "oliver.jpg", name:"Oliver", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:9, image: "doe.jpg", name:"Doe", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								
								{ id:10, image: "waqar.jpg", name:"Waqar", date: "May 16,2015", comment: "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat." },
								

							]
						}
					}
					else {

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
        
	/*-----------------------------------------
	// 
	-------------------------------------------*/
	// mockup_user_offers_history
	mockup_user_offers_history: function(d01, payload, callback) {

		// simulate a small delay before resolving promise, as if ajax call completed
		setTimeout(	d01.resolve,800 );
			
			
		// what to do 
		$.when(d01).then(
			function(ajaxArgs) {
console.log("A3 run callback with fake response object");
				
				var good_payload = false;
				
console.log("PAYLOAD DATA=" + JSON.stringify(payload));
				if (payload.username == "paul" ) {
					good_payload = true;
				}
				
				var response_data;
				if (api.mockup_flags_user_offers_history.is_success && good_payload) {
				
					if (api.mockup_flags_user_offers_history.offer_list == 1) {
						response_data = {
							status: 	"OK",
							history_data: [
                                                            
                                                            { id: 10012, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10015, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10030, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10123, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10124, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10125, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10126, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10127, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            { id: 10128, date: "01/10/15", information: "Amazon:Book:Textlink:0.002", status: "Accepted" },
                                                            
                                                        ]
						}
					}
					else {

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
	


	
	
	
//======================================================
//=================USER MOCKUPS ABOVE===================
//======================================================
//======================================================
//================VENDOR MOCKUPS BELOW==================
//======================================================
//======================================================

	/*-----------------------------------------
	// 
	-------------------------------------------*/
	// mockup_vendor_login
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