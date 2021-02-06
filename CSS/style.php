<style type=text/css>
	html{
		scroll-behavior: smooth;
	}
*{margin: 0;padding: 0;box-sizing: border-box;font-family: 'Open Sans', sans-serif;}

.nav_style{background-color:  #00384d!important; 
position: fixed; 
display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    flex-wrap: wrap;
    background-color: #00384d;
    width: 100%;
    height: 70px;
    z-index: 1;
}


.nav_style a{color: white;}

/*/////////////////////////Admin////////////////////////*/
.main-div{

	width: 100%; height: 100vh;
	display: flex;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}
.center-div{
	width: 90%;
	height: 80vh;
	background: -webkit-linear-gradient(left, #5DADE2 , #00c6ff);
	padding: 20px 0 0 0;
	box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
	border-radius: 10px;

}
.patient-head{
font-size: 28px;
color: #000;
text-align: center;
margin-top: -20px;
margin-bottom: 20px;
}
table{
	border-collapse: collapse;
	background-color: #fff;
	box-shadow: 0 10px 20px 0 rgba(0,0,0,.03);
	border-radius: 10px;
	padding-top: 10px;
	margin: auto;
}

th,td{
	border:1px solid #f2f2f2;
	padding: 8px 30px;
	text-align: center;
	color: grey;
}
th{
	text-transform: uppercase;
	font-weight: 500;
}
td{ font-size: 13px; }
.email-style{
	font-size: 14px;
	color: grey;
	display: inline-block;
	background: #f2f2f2;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	border-radius: 2px;
	line-height: 30px;
	padding: 0 14px;
}
.post-class{
	text-transform: uppercase;
}
.fa{
	font-size: 18px;
}
.fa-edit{ color: #63c76a; }
.fa-trash{ color: #ff0000; }
a{ text-decoration: none;display: flex;justify-content: center; }
							
/************** Scroll ******************/
#myBtn{
	display: none;
	position: fixed;
	bottom: 30px;
	right: 40px;
	z-index: 99;
	border: none;
	outline: none;
	background-color: #00A8FF;
	color: white;
	cursor: pointer;
	padding: 10px;
	border-radius: 10px;
	float: right;
}
#myBtn:hover{
	background: #606060;
}
.body_contact{
    background-image: url("Images/bgimg.jpg"); 
	background-size: cover;
	background-repeat: no-repeat;
}
.body_home{
background-image: url("Images/bgc.jpg"); 
	background-size: cover;
	background-repeat: no-repeat;
	background-attachment: fixed;
}
.nav-item :hover{
	background-color:  black;
	transition: 0.6s all;
}
.navbar-brand:hover{
	background-color:  black;
	transition: 0.6s all;
}
.navbar .search{
	float: le;
}

/****** Corona update ***********/
	.corona_update{
		margin: 0 0 30px 0;
		background-color:  #000000;
		opacity: 0.75;
		font-size: 2rem;
	}
	.corona_update h3{color: #ff7675; 
						font-size: 5rem;
	}

	.corona_update h1{font-size: 5rem; text-align: center;}
	.update_{}
#footer{margin-top: 40px;
		background-position: bottom;
}

	/***********About Corona************/

.sub_section_about{
    background-color:  #fbfafd;
    opacity: 0.85;
	background-size: cover;
	background-repeat: no-repeat;
	box-shadow: 0 0 20px 0 #999;
}
.map{
	align-items: center;
}

/*//////// main header \\\\\\\\\*/
.main_header{
	height: 450px;
	width: 100%;
	padding-top: 60px;	
}
.rightside h1{
	font-size: 3rem;
}
.corona_rot img{
	animation: gocorona 3s linear infinite;
}

@keyframes gocorona{
	0%{ transform: rotate(0);}
	100%{ transform: rotate(360deg); }
}
.leftside img{ animation: heartbeat 5s linear infinite;}
@keyframes heartbeat 
{
	0%{
		transform: scale(.75);
	}
	20%{
		transform: scale(1);
	}
	40%{
		transform: scale(.75);
	}
	60%{
		transform: scale(1);
	}
	80%{
		transform: scale(.75);
	}
	100%{
		transform: scale(1);
	}

	/****** Corona update ***********/
	.corona_update{
		margin: 0 0 30px 0;
		background-color: blue;
	}
	.corona_update h3{color: #ff7675; }

	.corona_update h1{font-size: 2rem; text-align: center;}

	/***********Prevention************/
.body{
    background-image: url("Images/bgimg.jpg"); 
	background-size: cover;
	height: 500px;
	background-repeat: no-repeat;
}
</style>