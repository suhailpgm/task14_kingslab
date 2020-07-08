<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="x-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- for adding angular js -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

<!-- for adding angular router -->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    <style>
      .todolist {
        margin-top: 30px;
        

        margin-left: auto;
        margin-right: auto;
      }
      .itemlist {
        display: flex;
        justify-content: space-between;

        border-width: 0px;
        border-bottom: 1px solid black;
        padding-bottom: 0px;

 background: #e3e188;
  box-shadow: 0 19px 38px rgba(0, 0, 0, 0.30), 0 15px 12px rgba(0, 0, 0, 0.22);
      }
      .itemlist :hover {
        display: flex;
        justify-content: space-between;

        border-width: 0px;
        border-bottom: 1px solid black;
        padding-bottom: 0px;
        background: #7e7c27f1;
      }
      .itemlistdata {
        margin-bottom: 0px;
        padding-top: 5px;
        margin-right: auto;
        width: 100%;
      }
      button {
        padding: 0;
        border: none;
        background: none;
      }
    </style>
  </head>
  <body ng-app="myApp"  ng-controller="todoCtrl" >
  
  <br><br><br>
    <div class="todolist container mt-4 " id="todolist">
    <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h4 class="text-white">Collapsed content</h4>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-primary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
  </nav>
</div>   
        <form ng-submit="todoAdd()"><div class="input-group ">
      
            <input type="text" ng-model="todoInput" class="form-control" style="background: #dfdeaf;"  placeholder="Type Here to add" id="item" />
        
             <button
            class="btn btn-outline-secondary" type="submit">
            Add to List
            </button>
        </form>
       
    </div>
    <ul class="list-group">
    <div ng-repeat="x in todoList" >
             <li class="itemlist">     
            
            <input type="checkbox"  ng-model="x.done"> <span ng-bind="x.todoText"></span>
            <button class="btn btn-default btn-xs pull-right remove-item">
            <button style="font-size:24px"> <i class="fa fa-trash-o"></i></button>
        </button>
         
            </li>
             </div>  

          
    	 
    		  
      
      </ul>
    



      
      <script src="app/controllers/postControl.js"></script>

    <script>
    //     function clearit() {
    //         document.getElementById("item").value="";
    //     }
    //   function add() {
    //     var newitem = document.getElementById("item").value;
    //     if(document.getElementById("item").value!="" && document.getElementById("item").value!="Type Here to add"){
     

    //     var h=document.getElementById("todolist").lastElementChild;
        
        
    //     h.insertAdjacentHTML("afterend", '<div class="itemlist"><p class="itemlistdata">&nbsp;&nbsp;' + newitem + '</p><button onclick="Del(this)">&nbsp;&nbspX&nbsp;&nbsp&nbsp</button</div>');
    //     document.getElementById("item").value="Type Here to add";
    // }
    //   }
    //   function Del(abc) {
    //     abc.parentNode.remove();
    //   }
    </script>
  </body>
</html>