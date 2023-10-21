<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Ferdous</title>
</head>

<style>

*
{
    margin: 0;
    padding: 0;
}


body 
{
    background-color: #010e0bef;
    color: white;
}


#header 
{
    width: 100%;
    height: 100vh; 
   /* background-image: url('images/aa.jpg');*/ 
    background-size: cover;
    background-position: center;

}

.container 
{
   padding-left: 10px;
   padding-right: 70px;
}
nav 
{
    text-align: right;
    width: 100%;
    background-color: blue;
}

nav ul li
{

    margin: 11px 12px;
    text-align: right;
    display: inline-block;
    text-decoration: none;
    list-style: none ;
    
}

nav ul li a 
{
    text-decoration: none;
    color: white;
    font-size: 18px;
    position: relative;
}
nav ul li a::after
{
       content: '';
       height: 3px;
       width: 0;
       position: absolute;
       background: red;
       transition: 0.1s;
       left: 0;
       bottom: -10px;
}
html 
{
    scroll-behavior: smooth;
}
nav ul li a:hover::after
{
    width: 100%;
}
.atext 
{
    margin-top: 150px;
    font-size: 30px;
    margin-left: 13%;
}
.atext  p
{
   color: red;
}
.prof
{
    margin-left: 20%;
    color: green;
}


.row  
{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    margin-left: 30px;
    margin-bottom: 20px;
}
.col-1 
{
    flex-basis: 30%;

}

.col-1 img
{
width: 100%;
    
}
.col-2 
{
    flex-basis: 50%;

}
.ab-title 
{
    display: flex;
    margin-top: 20px;
}
.title-link 
{
 margin-right: 40px;
 cursor: pointer;
 

    text-decoration: none;
    color: white;
    font-size: 18px;
    position: relative;
}



.title-link::after{
    content: '';
    height: 3px;
    width: 0px;
    position: absolute;
    background: red;
    transition: 0.5s;
    left: 0;
    bottom: -10px;
}
.title-link.active-link::after
{
    width: 100%;
}
.ab-title-contents
{
    padding-top: 20px;
    display: none;
    
}

.ab-title-contents ul li 
{
 
    margin-bottom:12px;
}

.ab-title-contents ul li span 
{
    color: red;
    margin-bottom: 2px;
}
.ab-title-contents.active-con
{
    display: block;
}
#about h1
{
    text-align: center;
    padding-bottom: 35px;;
}






</style>
<body>
    <div id ="header">

      
            <nav>
                <ul>
                    <li><a href="#header">Home</a></li> 
                    <li><a href= {{route('experience')}}>Work Experience </a></li>
                    <li> <a href="{{route('projects')}}">Projects</a></li>
                    
                </ul>
            </nav>
            
            <div class="container">
            <div class="atext">
                <p>Hello..!</p>
                <h2>I am Ferdous Arafat Chowdhury</h2>
                <p class = "prof">Web Developer</p>

            </div>
        </div> 
    </div>
    </div>
   
    
</div>

</body>
</html>