  <!doctype html>
  <html >
    <head>
    <title>
      AngularJs
    </title>
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script  src="{{url('js/script.js')}}"></script>
       <script src="{{url('js/angular.js')}}"></script>
       <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
      <!-- <link rel="stylesheet" type="text/css" href="bootstrap/todo.css"> -->
      <!-- <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"> -->
    </head>
    <body ng-app="myModule" style="padding-top: 50px; background-color: pink;"  >
    <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;"><b>Dashboard</b></div>
                <div class="panel-body">
    <div ng-controller="myController">
      <div>
        <button onclick="document.getElementById('modal').style.display='block' ;">Try it</button><br>
        <div class=" modal col-sm-4 col-sm-offset-4 " id="modal" style="background-color: red; position:fixed;top:100px; height:300px;">
        <label style="padding-top: 50px;">Name:</label>
        <input type="text" ng-model="message" style="color: red;" >
        <hr>
        <h1 class="table striped-table">Hello <%message%>!</h1>
        <button onclick="document.getElementById('modal').style.display='none'; ">hide</button>
      
      </div><br>
      </div>
      <div>
        10+20=<%10+20%>
      </div>
      <div>
      <ul >
      <li ng-repeat="array1 in array">
        Rows to display:  <input  type="number" min="0", max="5" step="1" ng-model="rowLimit" name="" style="color:blue;width:50px;">   Starting Row:  <input type="number" min="0", max="5" step="1" ng-model="startRow" name="" style="color:blue;width:50px; ">
          Sort by:
         <select ng-model="sort" style="color: pink;width:100px;">
            <option value="name">Name Assending</option>
            <option value="email">E-mail Assending</option>
            <option value="DOB">DOB Assending</option>
            <option value="Sellary">Sellary Assending</option>
            <option value="-name">Name Dessending</option>
            <option value="-email">E-mail Dessending</option>
            <option value="-DOB">DOB Dessending</option>
            <option value="-Sellary">Sellary Dessending</option>
        </select>        Search:
        <input type="text" ng-model="search" name="" style="color: pink">
              <br>
              <input type="checkbox" name="" ng-model="hideDOB" value="hide BOB column"> Hide DOB Column<br>
      <table class="table   table-bordered table-hover table-striped">
        <tr>
          <th ng-click="sortData('name')"><b>Name</b><span ng-class="getSortClass('name')"></span></th>
          <th ng-click="sortData('email')"><b>E-mail</b><span ng-class="getSortClass('email')"></span></th>
          <th ng-click="sortData('Sellary')"><b>Sellary</b><span ng-class="getSortClass('Sellary')"></span></th>
          <th ng-click="sortData('DOB')" ng-hide=""><b>DOB</b><span ng-class="getSortClass('DOB')"></span></th>
        </tr>
        <tr ng-repeat="element in array1.element |filter:search|limitTo:rowLimit:startRow|orderBy:sort">
          <td><%element.name%></td>
          <td><%element.email %></td>
          <td><%element.Sellary|currency:"$" %></td>
          <td ng-hide="hideDOB"><%element.DOB|date:DD-MM-YYYY %> </td>
          <td ng-show="hideDOB">*********</td>
        </tr>
        </tr>

      </table>
      </li>
      </ul>

      </div>
      <div ng-controller="myController">
          <b>Name:</b><%name%><br>
          <b>Message:</b> <%message%>

            <div>
              <b>Name:</b><%country.Name%>
            </div>
            <div>
              <b>Capital:</b><%country.Capital%>
            </div>
            <div>
              <img ng-src="{{country.Logo%>" alt="<%country.Name+' Logo'%>">
            </div>
      </div>
</div>

      <div ng-controller="newController">

      <table class="table table-bordered table-hover table-striped" >
        <thead>
          <tr>
            <th>Name</th>
            <th>Likes</th>
            <th>Dislikes</th>
            <th>Like/Dislike</th>
          </tr>
        </thead>
        <tr ng-repeat="technology in technologies">
          <td><%technology.name%></td>
          <td><%technology.like%></td>
          <td><%technology.dislike%></td>
          <td><button class="button btn-primary" ng-click="IncrementLikes(technology)">Like</button>
          <button class="button btn-primary" ng-click="IncrementDislikes(technology)">Dislike</button></td>
        </tr>
      </table>

      </div>
      </div>
            </div>
        </div>
    </div>
</div>
    </body>
  </html>