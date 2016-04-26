<!-- Container (About Section) -->
<div id="collegesearch" class="container-fluid" style="background-color: white">
    <div>
        <div class="col-sm-2" style="background-color: white">

        </div>
    </div>
    <div class="col-sm-8">
        <div id="thisdiv">
            <?php foreach ($records as $item): ?>
                <?php if (empty($item)): ?>
                    <h3>No Results found</h3>   
                <?php else: ?>
                    <div class="jumbotron shadow well" style="padding: 10px; background-color: white">
                        <div>
                            <div class ="col-sm-4" style="padding:0px">
                                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($item['image']) . '" width="90%" height="90%">'; ?>
                            </div>
                            <h3 style="color:brown" id="cname" class="col-sm-6"><?php echo $item['name']; ?></h3>
                            <h3 style="border-radius: 10px;behavior: url(PIE.htc);width: 90px;
                                height: 60px;padding: 10px;background:#D04949;text-align: center;font-size: 32px" class="col-sm-2"><?php echo $item['rating']; ?></h3>
                        </div> 
                        <h4 style="color: black"><?php echo $item['location']; ?></h4>
                        <h4  style="color: black">Course:<?php echo $item['course'] . "-" . $item['duration']; ?>&nbsp;&nbsp;&nbsp;&nbsp;Fees:<?php echo $item['fees']; ?></h4>
                        <button type="button" class="btn btn-danger"><a href="<?= base_url(); ?>Pages/getreviews/<?= $item['name'] ?>"style="color:white">Reviews and Ratings</a></button>
                        <button class=" btn btn-danger"><a href="http://<?php echo $item['url']; ?>" target="_blank" style="color:white">View Details</a></button>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-sm-2" style="background-color: white;padding-top: 0px;min-height: 600px;">
    </div>
</div>




