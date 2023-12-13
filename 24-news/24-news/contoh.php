<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
   #_checkbox {
  -webkit-tap-highlight-color: transparent;
  outline: none;
  display: none;
}

html, body {
  height: 100%;
}

body {
  margin: 0;
}

label {
  position: absolute;
  top: 50%;
  right: 0;
  left: 0;
  width: 100px;
  height: 100px;
  margin: 0 auto;
  background-color: #f72424;
  transform: translateY(-50%);
  border-radius: 50%;
  box-shadow: 0 7px 10px black;
  cursor: pointer;
  transition: 0.2s ease transform, 0.2s ease background-color, 0.2s ease box-shadow;
  overflow: hidden;
  z-index: 1;
}

label:before {
  content: "";
  position: absolute;
  top: 50%;
  box-shadow: inset 0 7px 10px #ffbeb8;
  transition: 0.2s ease height;
}

label:hover:before {
  margin-left: 20px;
  margin-top: 100px;
  width: 55px;
  height: 55px;
  box-shadow: inset 0 7px 10px black;
}

label:active {
  transform: translateY(-50%) scale(0.9);
}

#tick_mark {
  position: absolute;
  top: -1px;
  right: 0;
  left: 0;
  width: 60px;
  height: 60px;
  margin: 0 auto;
  margin-left: 14px;
  transform: rotateZ(-40deg);
}

#tick_mark:before,
#tick_mark:after {
  content: "";
  position: absolute;
  background-color: #fff;
  border-radius: 2px;
  opacity: 0px;
  transition: 0.2s ease transform, 0.2s ease opacity;
}

#tick_mark:before {
  left: 0;
  bottom: 0;
  width: 10px;
  height: 30px;
  box-shadow: -2px 0 5px rgba(0, 0, 0, 0.23);
  transform: translateY(-68px);
}

#tick_mark:after {
  left: 0;
  bottom: 0;
  width: 100%;
  height: 10px;
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.23);
  transform: translateX(78px);
}

#_checkbox:checked + label {
  background-color: #07d410;
  box-shadow: 0 7px 10px #92ff97;
}

#_checkbox:checked + label:before {
  width: 0;
  height: 0;
}

#_checkbox:checked + label #tick_mark:before,
#_checkbox:checked + label #tick_mark:after {
  transform: translate(0);
  opacity: 1;
}
  </style>
</head>
<body>
  <input type="checkbox" id="_checkbox">
  <label for="_checkbox">
    <div id="tick_mark"></div>
  </label>
</body>
</html>
