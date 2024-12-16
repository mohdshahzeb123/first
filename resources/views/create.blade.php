<x-nav/>
<html>
<body>
   
    <center><h1>Create Account Page</h1></center>
    <hr>
    
    

    <form>
    <center><h3>{{$msg}}</h3></center>    

    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6" >Enter Pin <br>
        <input type ="text" Placeholder="enter your pin" size="58"  name="p">
    </div>
    <div class="col-md-3"></div>
    
</div>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">Enter First Name &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Enter Father Name <br>
        <input type ="text" Placeholder="enter your name" size="25"  name="n">&emsp;
        <input type ="text" Placeholder="enter Father name" size="25"  name="fn">
    </div>
    <div class="col-md-3"></div>
    
</div>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">Enter Your Email &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Phone <br>
        <input type ="text" Placeholder="enter Your Email" size="30"  name="e">&emsp;
        <input type ="text" Placeholder="Phone"  name="ph">
    </div>
    <div class="col-md-3"></div>
    
</div>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">Select Your Gender <br>
    <input type ="radio" Placeholder="Male" value="Male" name="gender">Male &emsp;&emsp;&emsp;
    <input type ="radio" Placeholder="Female"name="gender">Female &emsp;&emsp;&emsp;
    <input type ="radio" Placeholder="Others"name="gender">Others 
    </div>
    <div class="col-md-3"></div>
    
</div>
    <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">Country &emsp;&emsp;&emsp;&emsp; &emsp;&emsp;&emsp; State &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; City&emsp;<br> 
       <input type ="text" Placeholder="Country Name" size="14"  name="c">&emsp;
        <input type ="text" Placeholder="State Name" size="14"  name="s">&emsp;
        <input type ="text" Placeholder="City Name" size="14"  name="ct">
    </div>
    <div class="col-md-3"></div>
    
</div>

<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">Amount <br>
        <input type="text" size="59" name="a">
    </div>
    <div class="col-md-3"></div>

</div>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-6"><br><center>
        <input type="submit" value="Create Account" size="49" name="submit" class="btn btn-success"></center>
    
    
    </div>
    <div class="col-md-2"></div>

</div>
</form>

</body>