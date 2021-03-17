<html>
<head>
  <title>Home</title>
    <?php include 'admin_header_head.php' ?>
    <style>
      body
      {
        font-family: consolas;
        font-size: 14pt;
      }
      .prodis
      {
        display: flex;
        flex-flow:row wrap;
        margin-left: 30px;
        margin-right: 30px;
      }
      .ideas
      {
        flex-basis:200px;
        margin: 8px;
        border: 2px solid #0B5345;
        border-radius: 5px;
        box-shadow: 5px 5px 10px #145A32;
        padding: 8px;
        text-align: center;
        position: relative;
        transition: .4s;
      }
      .ideas:hover
      {
        box-shadow: 5px 5px 10px #145A32,5px 5px 60px #145A32;
      }
      .ideas a
      {
        color: #191970;
      }
      .ideas a:hover
      {
        color: #4169E1;
      }
      .ideas span
      {
        padding: 2px;
        font-size: 15px;
        font-family: sans-serif;
        text-align: justify;
      }
	  body {
  background-color: lightblue;
}

h1 {
  color: black;
  text-align: center;
}

p {
  font-family: verdana;
  font-size: 20px;
}


    </style>
  </head>
  <body>
  
    <?php

    include 'admin_header_body.php';

     ?>
      <section class="prodis">
        <h1>Hello Nowrin!!!</h1>
		
      </section>
  </body>
</html>
