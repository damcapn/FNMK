<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>You're Still Not Funny Tom!</title>
    <?php require_once("headutils.php");?>
    <link rel="stylesheet" href="lib/css/about.css">
    <link rel="stylesheet" href="lib/css/navbar.css">
    <link rel="stylesheet" href="css/normalize.css">

    <style>
  /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
  body {
color: #333;
padding: 20px;
text-align: center;
font-family: Arial;
}

.separator {
margin-top: 40px;
}

.twitter {
color: #FFF;
text-decoration: none;
border-radius: 4px;
background: #00ACED;
display: inline-block;
padding: 10px 8px;
margin-bottom: 15px;
font-weight: bold;
}

/* 3D Cube */
.space3d {
perspective: 1000px;
width: 250px;
height: 250px;
text-align: center;
display: inline-block;
}

._3dbox {
display: inline-block;
transition: all 0.85s cubic-bezier(0.175, 0.885, 0.32, 1.275);
text-align: center;
position: relative;
width: 100%;
height: 100%;
transform-style: preserve-3d;
transform: rotateX(-15deg) rotateY(15deg);
}

._3dface {
overflow: hidden;
position: absolute;
border: 1px solid #888;
background: #FFF;
box-shadow: inset 0 0 60px rgba(0, 0, 0, 0.1), 0 0 50px rgba(0, 0, 0, 0.3);
color: #333;
line-height: 250px;
opacity: 0.8;
}

._3dface--front {
width: 250px;
height: 250px;
transform: translate3d(0, 0, 125px);
}

._3dface--top {
width: 250px;
height: 250px;
transform: rotateX(90deg) translate3d(0, 0, 125px);
}

._3dface--bottom {
width: 250px;
height: 250px;
transform: rotateX(-90deg) translate3d(0, 0, 125px);
}

._3dface--left {
width: 250px;
height: 250px;
left: 50%;
margin-left: -125px;
transform: rotateY(-90deg) translate3d(0, 0, 125px);
}

._3dface--right {
width: 250px;
height: 250px;
left: 50%;
margin-left: -125px;
transform: rotateY(90deg) translate3d(0, 0, 125px);
}

._3dface--back {
width: 250px;
height: 250px;
transform: rotateY(180deg) translate3d(0, 0, 125px);
}

#radio-left:checked ~ .space3d ._3dbox {
transform: rotateY(90deg);
}

#radio-right:checked ~ .space3d ._3dbox {
transform: rotateY(-90deg);
}

#radio-bottom:checked ~ .space3d ._3dbox {
transform: rotateX(90deg);
}

#radio-top:checked ~ .space3d ._3dbox {
transform: rotateX(-90deg);
}

#radio-back:checked ~ .space3d ._3dbox {
transform: rotateY(180deg);
}

._3dface--front {
background: url(lib/images/hwy2hell.jpg);
background-size: 100%;
}

._3dface--left {
background: url(lib/images/selfieMoments.jpg);
background-size: auto 100%;
}

._3dface--right {
background: url(lib/images/kingsReign.jpg);
background-size: auto 100%;
}

._3dface--top {
background: url(lib/images/filthySnatch.jpg);
background-size: auto 100%;
}

._3dface--bottom {
background: url(lib/images/postMan.jpg);
background-size: auto 100%;
}

._3dface--back {
background: url(lib/images/frienemies.jpg);
background-size: auto 100%;
}

</style>

      <script src="js/prefixfree.min.js"></script>
  </head>

<body>
    <!-- This calls the navbar to the page. -->
      <?php require_once("navbar.php");?>
<header
<!-- This calls the background-image. -->
<div class="container" id="teamEAD.jpg"></div>

<!-- CONTROLS -->

    <input type="radio" checked id="radio-front" name="select-face"/>
    <input type="radio" id="radio-left" name="select-face"/>
    <input type="radio" id="radio-right" name="select-face"/>
    <input type="radio" id="radio-top" name="select-face"/>
    <input type="radio" id="radio-bottom" name="select-face"/>
    <input type="radio" id="radio-back" name="select-face"/>

<div class="separator"></div>


<div class="space3d">


    <div class="_3dbox">
      <div class="_3dface _3dface--front"></div>
      <div class="_3dface _3dface--top"></div>
      <div class="_3dface _3dface--bottom"></div>
      <div class="_3dface _3dface--left"></div>
      <div class="_3dface _3dface--right"></div>
      <div class="_3dface _3dface--back"></div>
    </div>

</div>

<div class="separator"></div>
<br><br>

<footer>
  <div><a target="_blank" href="https://www.facebook.com/YoureStillNotFunnyTom/">Posted by: Dam Cap'n</a></div>
  <div><a target="_blank" Href="https://www.facebook.com/FNMemeKings/">Image credits: Da F'N Meme KiNGS</a></div>
  <div><a target="_blank" href="mailto:dafnmemekings.666@gmail.com">dafnmemekings.666@gmail.com</a>.</p>
</footer>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </body>

</html>
