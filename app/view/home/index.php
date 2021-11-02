<div class="container">
    <div class="row">
        <h3>Hello, <u><?php echo $data['name']?></u>!</h3>
        <h5>Contract: <?php echo $data['contract_name']?></h5>
        <h5>Contract length(in months): <?php echo $data['contract_length_months']?></h5>
    </div>
    <div class="row">
        <div class="col col-sm-3 offset-sm-3 text-center border">
            <a href="<?php echo App\helper\Url::get('product');?>">Products</a>
        </div>
        <div class="col col-sm-3 text-center border">
            <a href="<?php echo App\helper\Url::get('basket');?>">Basket</a>
        </div>
    </div>
</div>


