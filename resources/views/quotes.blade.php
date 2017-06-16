<!DOCTYPE html>
<html>
<head>
	<title>
		All guotes
	</title>
	 <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
      <script  src="{{url('js/quote.js')}}"></script>
       <script src="{{url('js/angular.js')}}"></script>

       <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/css/bootstrap.min.css')}}">
</head>
<body ng-app="myModule" style="padding-top: 50px; background-color: pink;"  >
 <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center;"><b>Dashboard</b></div>
                   <div class="panel-body">
     	              <div ng-controller="myController">





     	               <table class="table   table-bordered table-hover table-striped" ng-repeat="quote in quotes">
     	              	<thead>
     	              		<tr>
     	              		<th>
     	              			Id
     	              		</th>
     	              		<th>
     	              			Quote
     	              		</th>
     	              		<th>
     	              			Edit
     	              		</th>
     	              		<th>Delete</th>
     	              		</tr>
     	              	</thead>
     	              	<tbody>
     	              		<tr ng-repeat="q in quote">
     	              			<td>
     	              				<% q.id%>
     	              			</td>
     	              			<td>
     	              				<% q.content %>
     	              			</td>
     	              			<td>
     	              				<button class="button btn-warning" style="border:dotted 1px black; border-radius: 5px;" onclick="document.getElementById('Add_New_Qoute').style.display='block';" >Edit Quote </button>

     	              				<div id="Add_New_Qoute" class="modal">
									  <span onclick="document.getElementById('Add_New_Qoute').style.display='none'" class="close" title="Close Modal">X</span>
									<div class="col-lg-8 col-md-offset-2" style="position:absolute; top:100px;">
									  <form class="modal-content animate form vertical-form" method="PUT" ng-submit="Edit(q.id)" class="vertical-form" style="padding: 100px;" >
									  <!-- {{csrf_field()}}  -->
									    <div class="container">
									       <label class="col-sm-2 control-label" >Edit Quote Content:</label>  
									        <div class="col-sm-4">
									            <input class="form-control" type="text" name="content" id="content" ng-model="content" required="true" placeholder="<% q.content %>"> 
									        </div>
									        
									<br><br>
									        </div><br><br>
									      <div class="clearfix">
									      
									        <button type="button" onclick="document.getElementById('Add_New_Qoute').style.display='none'" class="cancelbtn">Cancel</button>
									        <button type="submit" class="signupbtn" onclick="document.getElementById('Add_New_Qoute').style.display='none'" >Save</button>
									      </div>
									    </div>
									  </form>
									</div>
									</div>
     	              			</td>
		              			<td>
     	              				<button class="button btn-danger" style="border:dotted 1px black; border-radius: 5px;" ng-click="Delete(q.id)"> Delete Quote</button>
     	              			</td>
     	              		</tr>
     	              	</tbody>
     	              </table>
     	              <button class="button btn-primary" onclick="document.getElementById('add_form').style.display='block'" style="border:dotted 1px black; border-radius: 5px;">Add new Quote</button>
     	              


     	              	
<div id="add_form" class="modal">
									  <span onclick="document.getElementById('add_form').style.display='none'" class="close" title="Close Modal">X</span>
									<div class="col-lg-8 col-md-offset-2" style="position:absolute; top:100px;">
									  <form class="modal-content animate form vertical-form" method="POST"  class="vertical-form" style="padding: 100px;" >
									  <!-- {{csrf_field()}}  -->
									    <div class="container">
									       <label class="col-sm-2 control-label" >Content of new quote:</label>  
									        <div class="col-sm-4">
									            <input class="form-control" type="text" name="content" id="content" ng-model="quote.content" required="true" placeholder="new content"> 
									        </div>
									        <br><br>
									        </div><br><br>
									      <div class="clearfix">
									      
									        <button type="button" onclick="document.getElementById('add_form').style.display='none'" class="cancelbtn">Cancel</button>
									        <button type="submit" class="signupbtn" onclick="document.getElementById('add_form').style.display='none'"  ng-click="Add()" >Save</button>
									      </div>
									    </div>
									 </form>
								</div>
					  		</div>
     	              </div>
		      		</div>
		    	</div>
		   	</div>
		  </div>
		 </div>
</body>
</html>