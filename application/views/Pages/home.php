
<div class="jumbotron text-center" style="background-image: url('<?= base_url(); ?>css/images/background.jpg');">
    <h1>IIM Academics</h1> 
    <p>Online Digital education for everyone</p> 

    <form role="form" class="form-inline " method="post" action="<?= base_url(); ?>Pages/collegesearch">
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
                <option value="Diploma">Diploma</option>
            </select>
        </div>
        <button type="submit" class="btn btn-danger">Search</button>
    </form>

</div>


