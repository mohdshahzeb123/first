<x-nav/>
<html>
<body>
  
    <center><h1>Deposit Amount Page </h1></center><hr>
    <center>
    <h3>Welcome &emsp;  &emsp;  &emsp; 
            {{$name}}  &emsp;  &emsp;  &emsp; 
            <a href="/lout" class="btn-btn-danger">Logout</a>
    <form>
    <div class="row">
    <div class="col-md-3"></div>
 <div class="col-md-6">


<form>
 
Enter Amount to Deposite
<input type="text" name="a" class="form-control"><br>
<input type="submit" name="submit" class="btn btn-success" value="Deposit">

</form>
<center><h3>{{$msg}}</h3></center>
 </div>


</body>
</html>