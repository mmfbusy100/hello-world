<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {
    box-sizing: border-box;
}

body {
    margin: 0;
}

.navbar {
    overflow: hidden;
    background-color: #333;
    font-family: Arial;
}

.navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

.sub {
    overflow: hidden;
    background-color:inherit
    font-family: Arial;
}

.dropdown {
    float: left;
    overflow: hidden;
}

.dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
}

.navbar a:hover, .dropdown:hover .dropbtn {
    background-color: #ff7120;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    width: 100%;
    left: 0;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content .header {
    background: #ff7120;
    padding: 16px;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

/* Create five equal columns that floats next to each other */
.column {
    float: left;
    width: 20.0%;
    padding: 10px;
    background-color: #ccc;
    height: 250px;
}

.column a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}


.columnB {
    float: left;
    width: 20.0%;
    padding: 10px;
    background-color: #fff;
    height: 250px;
}

.columnB a {
    float: none;
    color: black;
    padding: 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.column a:hover {
    background-color: #ddd;
}



/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}
</style>
</head>
<body>

<div class="navbar">
    <a href="#home">Home</a>
      
    <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
     <div class="dropdown">
        <button class="dropbtn">Products 1
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="dropdown-content">
            <div class="header">
            	<h2>Lodging</h2>
            </div>   
            <div class="row">
                <div class="column">
                    <h3>Boarding Suites</h3>
                    <a href="#">Tops</a>
                    <a href="#">Sides</a>
                    <a href="#">Gates</a>
                </div>
                <div class="column">
                    <h3>Cat Products</h3>
                    <a href="#">Atriums</a>
                    <a href="#">Condos</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="column">
                    <h3>Category 3</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
                <div class="columnB">
                    <h3>Featured Products</h3>
                    <a href="#">Link 1</a>
                    <a href="#">Link 2</a>
                    <a href="#">Link 3</a>
                </div>
            </div>
        </div>
    </div> 
    
</div>

<div style="padding:16px">
  <h3>Mega Menu (Full-width dropdown in navbar)</h3>
  <p>Hover over the "Dropdown" link to see the mega menu.</p>
</div>

</body>
</html>