sessid = "";


function submit() {
req = new XMLHttpRequest;
req.onload = function(){sessid= req.responseText};
var user = document.getElementById('user').value;
var pass = document.getElementById('pass').value;

reqbody = '{"user": "' + user + '", "pass": "' + pass + '"}';
req.open('POST', 'http://174.123.243.184:4567/authenticate', true);
req.send(reqbody);

window.open("LOGGEDIN.html")

}

function Idcheck(){
	console.log(sessid);
	
	
}


/*
function Authenticate() {
	var req = new XMLHttpRequest();
	req.onload = function() { userTable = JSON.parse(req.responseText) }

	req.open('POST', 'http://174.123.243.184:4567/admin/search-list', true);
	
	
	"user":"username", "pass":"passowrd"
	req.send();
	
	// define user table
	
	
	return;

post '/authenticate'

	Input: {"user":"username", "pass":"password"}

	Output: {"sessid":"38501232-8aac-11e1-ae00-97f683518640"}
	
	

*/
/*
	Used to log in and begin a session. The "sessid" returned

	here is used as a parameter in many other methods to ident-

	ify the user.
*/

// JavaScript Document

/*

post '/authenticate'

	Input: {"user":"username", "pass":"passowrd"}

	Output: {"sessid":"38501232-8aac-11e1-ae00-97f683518640"}



	Used to log in and begin a session. The "sessid" returned

	here is used as a parameter in many other methods to ident-

	ify the user.

*/