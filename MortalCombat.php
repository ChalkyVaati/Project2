<!DOCTYPE html>
  <header>
   <link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Press+Start+2P" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Bowlby+One+SC|Press+Start+2P|Shrikhand" rel="stylesheet">

  </header>
  <body>
    <div id="main">
      <h1 id="la">To Do List</h1>
    <div id="one">
      <div id="right">
      
      </div>
    </div>
    </div>
    <div id="two">
        <div id="baiwa">
      <h2 id="aiwa">Incomplete</h2>
	  <?php include('display.php'); ?>
      </div>
    </div>
    
    <div id="three">
      <div id="win">
        <h2 id="lal">Complete</h2>
		<?php include('display2.php'); ?>
    </div>
    </div>
	<div style="bottom:0; height:20px; width:100%; background-color:grey">
		<div style="margin:auto; width:40px">
			<a href="loggout.php" style="height:20px; background-color:grey; color:white">Loggout</a>
		</div>
	</div>
    
    
  </body>
  </html>
<style>
* {
  margin: 0;
    padding: 0;
    border: 0;
    outline: 0;
}
html, body {
            height: 100%;
            margin: 0;
            font-size:2vw;
            font-size: calc(1em + 1vw);
           }

body {
  min-height: 100%;
  }
#main {
  width: 100%;
  height: 15%;
  background-color: #5C5B5D;
}
#one {
  height: 100%;
  width: 50%;
  background-color: #5C5B5D
;
   background-image: url("https://media.giphy.com/media/ikIP3JlKhZMcM/giphy.gif");
  margin: 0;
  background-size: 16%;
  float: right;
}

#la {
  padding-top: 30px;
  text-align: center;
  font-family: 'Press Start 2P', cursive;
  color: #f5f5f5;
  font-size: 110%;
  width: 50%;
  float: right;
  text-decoration: underline;
  text-decoration-style: dashed;
  text-decoration-color: #ffdf00;
}
#two {
  background-color: red;
  height: 42.5%;
  width: 100%;
  background-image: url("https://media.giphy.com/media/N7DzaNFYK7888/giphy.gif");
  background-size: 50%;
}
#aiwa {
   padding-top: 15px;
  text-align: center;
  font-family: 'Shrikhand';
  color: #f5f5f5;
  font-size: 80%;
}
#baiwa {
  height: 100%;
  width: 50%;
  background-color: #830303;
  overflow:scroll;
}
#three {
  background-color: blue;
  height: 42.5%;
  width: 100%;
  background-image: url("https://s3media.247sports.com/Uploads/Assets/126/39/3039126.gif");
  background-size: 30%;
  float:left;
}
#win {
  height: 100%;
  width: 50%;
  background-color: #139334;
  float: right;
  overflow:scroll;
}
#lal {
   padding-top: 15px;
  text-align: center;
  font-family: 'Shrikhand', cursive;
  color: #f5f5f5;
  font-size: 80%;
}
</style>