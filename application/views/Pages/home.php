
<div class="jumbotron text-center" style="background-image: url('<?= base_url(); ?>css/images/tech.png');background-size:100% 100%;background-color:white;background-repeat:no-repeat;margin-bottom:0px">
    <h1 style="color:#D04949">IIM Academics</h1> 
    <h3 style="color:#D04949"><strong>Online Digital education for everyone</strong></h3> 

    <form role="form" class="form-inline " method="post" action="<?= base_url(); ?>Pages/collegesearch/rating/desc">
        <div class="form-group">
            <input type="text" id="location" autocomplete="off" name="location" class="form-control" size="30" placeholder="Enter location">
        </div>
        <div class="form-group">
            <input type="text" id="name" autocomplete="off" name="name" class="form-control" size="50" placeholder="Enter College">        
        </div>
        <div class="form-group">
            <select  name="course" class="form-control">
                <option value="">Select Course</option> 
                <option value="B.TECH">B.TECH</option> 
                <option value="M.TECH">M.TECH</option> 
                <option value="MBA">MBA</option> 
                <option value="PHD">PHD</option>
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

</div>
<div class="container-fluid text-center" style="width:100%;background-color: white;">
    <div class="container-fluid col-sm-4 text-center tilt" style="background:linear-gradient(
              rgba(0, 0, 0, 0.8), 
              rgba(0, 0, 0, 0.8)
              ),url('<?= base_url(); ?>css/images/engin.jpg');height:300px;padding:0;background-color:white;background-size:100% 100%">
       <a href="<?= base_url(); ?>Pages/topeng" style="color:white;text-decoration: none">
          
            <h2 style="color:white">Top 20 </h2> 
            <h2 style="color:white">Indian</h2> <h2 style="color:white">Engineering</h2>
            <h2 style="color:white">colleges </h2>
            <h2 style="color:white">2016</h2>
           </a>
    </div>

    <div class="container-fluid col-sm-4 text-center tilt" style="background:linear-gradient(
              rgba(0, 0, 0, 0.6), 
              rgba(0, 0, 0, 0.6)
              ),url('<?= base_url(); ?>css/images/mb.jpg');padding:0;height:300px;background-color:white;background-size:100% 100%">
        <a href="<?= base_url(); ?>Pages/topmba" style="color:white;text-decoration: none">
            
            <h2 style="color:white">Top 20 </h2> 
            <h2 style="color:white">Indian</h2><h2 style="color:white">Management</h2>
            <h2 style="color:white">colleges </h2>
            <h2 style="color:white">2016</h2>
            
        </a>
    </div>
  
    <div class="container-fluid col-sm-4 text-center tilt" style="background:linear-gradient(
              rgba(0, 0, 0, 0.8), 
              rgba(0, 0, 0, 0.8)
              ),url('<?= base_url(); ?>css/images/univ.jpg');height:300px;padding:0;background-color:white;padding-top: 0px;padding-bottom: 0px;background-size:100% 100%">
        <a href="<?= base_url(); ?>Pages/topuniv" style="color:white;text-decoration: none">
            
            <h2 style="color:white">Top 20 </h2> 
            <h2 style="color:white">Indian </h2><h2 style="color:white">Universities</h2>
            <h2 style="color:white">2016</h2>
        </a>
    </div></div>
</div>

