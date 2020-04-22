  <style>
* {
    box-sizing: border-box;
}
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgb(255,0,0);
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: rgb(0,0,0);
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}
.row h1{
	color: red;
}
.col{
	 font-family: Times New Roman; 
	 font-size: 20px;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.main {
    max-width: 1000px;
    margin: auto;
}


.row .column {
    padding: 8px;
}

.column {
    float: left;
    width: 100%;
    	 font-family: Times New Roman; 
	 font-size: 20px;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

.content {
    background-color: white;
    padding: 10px;
}

@media screen and (max-width: 900px) {
    .column {
        width: 50%;
    }
}

@media screen and (max-width: 600px) {
    .column {
        width: 100%;
    }
}

	</style>