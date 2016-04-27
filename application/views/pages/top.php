<!-- Container (About Section) -->
<div id="collegesearch" class="container-fluid" style="background-color: white">
    <div>
        <div class="col-sm-2" style="background-color: white ;padding-top: 0px">
            
        </div>
    </div>
    <div class="col-sm-8">
        <div id="thisdiv">
        <?php foreach ($records as $item): ?>
            <div class="jumbotron shadow well" style="padding: 10px; background-color: white">
                <div>
                    <div class ="col-sm-4" style="padding:0px">
                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($item['image']) . '" width="90%" height="90%">'; ?>
                    </div>
                    <h3 style="color:brown" id="cname" class="col-sm-6"><?php echo $item['name']; ?></h3>
                    <h3 style="border-radius: 10px;behavior: url(PIE.htc);width: 90px;
                        height: 60px;padding: 10px;background:#D04949;text-align: center;font-size: 32px" class="col-sm-2"><?php echo $item['rank']; ?></h3>
                </div> 
                <h4 style="color: black"><?php echo $item['location']; ?></h4>
                <h4  style="color: black">Score:<?php echo $item['weighted_score']; ?></h4>
                 <button class=" btn btn-danger"><a href="http://<?php echo $item['url']; ?>" target="_blank" style="color:white">View Details</a></button>
                </div>
        <?php endforeach; ?>
        </div>
        <div id="mModal" class="modal modal-open modal-open-noscroll fade" role="dialog" style="padding-top: 100px">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hey, Please help others to give your valuable review !!</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="<?= base_url(); ?>Pages/review" method="post">
                            <div class="row">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" name="name" placeholder=" College name" type="text" required>
                                </div>
                            </div>
                            <textarea class="form-control" id="review" name="review" placeholder="Please give your opinion" rows="5" required></textarea><br>
                            <div class="row">
                                <div class="col-sm-12 form-group">
                                    <button class="btn btn-danger pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="ratingModal" class="modal modal-open modal-open-noscroll fade" role="dialog" style="padding-top: 100px">
            <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hey, Please help others to give your valuable rating !!</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="<?= base_url(); ?>Pages/rating" method="post">
                            <div class="row">
                                <div class=" col-sm-10 form-group">
                                    <input class="form-control" name="name" placeholder=" College name" type="text" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-sm-10 form-group">
                                    <input class="form-control" id="rating" name="rating" placeholder="Enter rating from 1 to 5 !!" type="text" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-10">
                                    <button class="btn btn-danger pull-right" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="col-sm-2" style="background-color: white;padding-top: 0px">
            
        </div>
    </div>
</div>



