
<?php foreach ($records as $item): ?>
    <div class ="col-sm-12 pickgradient" style="padding-top:40px;padding-left: 0px;padding-right: 0px;padding-bottom: 0px">
        <div style="-webkit-filter:brightness(60%)"><?php echo '<img src="data:image/jpeg;base64,' . base64_encode($item['image']) . '" width="100%" height="400px"'; ?>
        </div></div>
    <div class="container-fluid text-center" style="background-color: white;padding-top:0px;background-image:url('<?php echo base64_encode($item['image']); ?>')">
        <div  style="padding: 10px; background-color: white">


            <div class ="col-sm-12" style="width:100%">
                <h3 id="cname" class="col-sm-6"><strong><?php echo $item['name'] . ", " . $item['location']; ?></strong></h3>
                <h3 style="border-radius: 10px;color:white;behavior: url(PIE.htc);width: 90px;
                    height: 60px;padding: 10px;background:#D04949;text-align: center;font-size: 32px" class="col-sm-4"><?php echo $item['rating']; ?></h3>
                <form role="form" action="<?= base_url(); ?>Pages/review/<?php echo $item['name']; ?>" method="post">
                    <div class="col-sm-12" style="width:100%">
                        <textarea class="form-control" style="width: 60%" id="review" name="review" placeholder="Please give your opinion" rows="5" required></textarea><br>
                    </div>
                    <div class=" col-sm-12 form-group">
                        <input class="form-control" style="width: 60%" id="rating" name="rating" placeholder="Enter rating from 1 to 5 !!" type="text" required>
                    </div>
                    <div class="form-group" style="padding-left: 10px">
                        <button class="btn btn-danger col-sm-4" type="submit">Submit</button>
                    </div>

                </form>  
            </div>


        </div>
    <?php endforeach; ?>

</div>