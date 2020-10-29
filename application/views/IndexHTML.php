<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="public/css/style.css">
    <script src="public/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="public/js/server/Server.js"></script>
    <script src="public/js/ui/UI.js"></script>
    <script src="public/js/App.js"></script>
    <script src="public/js/main.js"></script>
    <title>Title</title>
</head>
<body>
    <div class="app_container">
        <div id="menu" class="container">
            <h3>Сhoose an action</h3>
            <div>
                <input type="button" id="showAddFigure" value="Add figure menu">
                <input type="button" id="showListFigure" value="Figure table">
            </div>
        </div>
        <div id="addFigureMenu" class="container">
            <select id="chooseFigure">
                <option value="" selected disabled hidden>Choose figure</option>
                <option value="circle">Circle</option>
                <option value="triangle">Triangle</option>
                <option value="parallelogram">Parallelogram</option>
            </select>
            <div id="circleMenu" class="figureMenu">
                <h3>Center:</h3>
                <div>
                    <input class="circleParams" name="point" placeholder="X">
                    <input class="circleParams" name="point" placeholder="Y">
                </div>
                <h3>Radius:</h3>
                <div>
                    <input class="circleParams" name="radius" placeholder="Radius">
                </div>
            </div>
            <div id="triangleMenu" class="figureMenu">
                <h3>Points:</h3>
                <div>
                    <input class="triangleParams" name="point" placeholder="X">
                    <input class="triangleParams" name="point" placeholder="Y">
                </div>
                <div>
                    <input class="triangleParams" name="point" placeholder="X">
                    <input class="triangleParams" name="point" placeholder="Y">
                </div>
                <div>
                    <input class="triangleParams" name="point" placeholder="X">
                    <input class="triangleParams" name="point" placeholder="Y">
                </div>
            </div>
            <div id="parallelogramMenu" class="figureMenu">
            <h3>Points:</h3>
                <div>
                    <input class="parallelogramParams" name="point" placeholder="X">
                    <input class="parallelogramParams" name="point" placeholder="Y">
                </div>
                <div>
                    <input class="parallelogramParams" name="point" placeholder="X">
                    <input class="parallelogramParams" name="point" placeholder="Y">
                </div>
                <div>
                    <input class="parallelogramParams" name="point" placeholder="X">
                    <input class="parallelogramParams" name="point" placeholder="Y">
                </div>
            </div>
            <div>
                <input type="button" id="addFigure" value="Add figure">
                <input type="button" class="returnMenu" value="Main menu">
            </div> 
        </div>
        <div id="listFigureMenu" class="container">
            <table id="figuresTable" border="1px">
                <tr>
                    <td>Type</td>
                    <td>Id</td>
                    <td>Area</td>
                </tr>
            </table>
            <div>
                <input type="button" class="returnMenu" value="Main menu">
            </div> 
        </div>
    </div>
</body>
</html>