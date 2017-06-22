// opera
var opera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

// Firefox
var firefox = typeof InstallTrigger !== 'undefined';

// Internet Explorer
var ie = /*@cc_on!@*/false || !!document.documentMode;

// Edge
var edge = !ie && !!window.StyleMedia;

// Chrome
var chrome = !!window.chrome && !!window.chrome.webstore;

if (opera === true) {
alert("Broswer is Opera"); }
			
if (firefox === true) {
alert("Broswer is Firefox"); }
			
if (ie === true) {
alert("Broswer is Internet explorer"); }
			
if (edge === true) {
alert("Broswer is Microsoft Edge"); }
			
if (chrome === true) {
alert("Broswer is "); }