<html>
  <head>
    <title>イケてる電卓</title>
    <link rel="stylesheet" href="./css/bootstrap.css" />
    <link rel="stylesheet" href="./css/calc.css" />
    <script type="text/javascript" src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="./js/calc.js"></script>
  </head>
  <body>
    <div>
      <form method="POST" action="calc.php">
        <input type="text" name="value_a" id="value_a" />
        <ul class="logic">
          <li><label><input type="radio" name="logic" id="add" value="add" />+</label></li>
          <li><label><input type="radio" name="logic" id="sub" value="sub"/>-</label></li>
          <li><label><input type="radio" name="logic" id="multi" value="multi"/>*</label></li>
          <li><label><input type="radio" name="logic" id="div" value="div"/>/</label></li>
        </ul>
        <input type="text" name="value_b" id="value_b" />
        <submit text="計算"/>
      </form>
    </div>
  </body>
</html>

<?php
  
?>