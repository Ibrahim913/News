var login_link = document.querySelector('.a1');
var ADMIN_link = document.querySelector('.a2');
var login_form = document.querySelector('.login');
var ADMIN_form = document.querySelector('.ADMIN');
login_link.addEventListener('click' , ADMIN_hide);
ADMIN_link.addEventListener('click' , login_hide);
function login_hide()
{
	login_form.style.display = "none";
	ADMIN_form.style.display = "block";
	signup_link.style.background = "#f1d5ad";
	login_link.style.background = "#bc786b";
}
function ADMIN_hide()
{
	login_form.style.display = "block";
	ADMIN_form.style.display = "none";
	signup_link.style.background = "#bc786b";
	login_link.style.background ="#f1d5ad" ;
};
